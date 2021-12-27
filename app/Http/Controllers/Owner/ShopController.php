<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Shop;
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
                if ($shop->owner->id !== Auth::id()) {
                    abort(404);
                }
            }
            return $next($request);
        });
    }

    public function index()
    {
        $ownerId = Auth::id();
        $shops = Shop::where('owner_id', $ownerId)->get();

        return view('owner.shops.index', compact('shops'));
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }
}
