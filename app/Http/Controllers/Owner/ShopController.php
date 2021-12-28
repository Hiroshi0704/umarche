<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadImageRequest;
use App\Models\Shop;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:owners');
        $this->middleware(function (Request $request, $next) {
            $shopId = $request->route('shop');
            if (!is_null($shopId)) {
                $shop = Shop::findOrFail($shopId);
                if ($shop->owner_id !== Auth::id()) {
                    abort(404);
                }
            }
            return $next($request);
        });
    }

    public function index()
    {
        $shops = Shop::where('owner_id', Auth::id())->get();
        return view('owner.shops.index', compact('shops'));
    }

    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('owner.shops.edit', compact('shop'));
    }

    public function update(UploadImageRequest $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'information' => ['required', 'string', 'max:1000'],
            'is_selling' => ['required'],
        ]);

        $shop = Shop::findOrFail($id);
        $shop->name = $request->name;
        $shop->information = $request->information;
        $shop->is_selling = $request->is_selling;

        $imageFile = $request->image;
        if (!is_null($imageFile) && $imageFile->isValid()) {
            // リサイズなし
            // Storage::putFile('public/shops', $imageFile);

            // リサイズあり
            $fileName = ImageService::upload($imageFile, 'shops');
            $shop->fileName = $fileName;
        }
        $shop->save();

        return redirect()->route('owner.shops.index')->with([
            'message' => '店舗情報を更新しました',
            'status' => 'info',
        ]);
    }
}
