<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function shop() {
        return $this->belongsTo(Shop::class);
    }

    public function category() {
        return $this->belongsTo(SecondaryCategory::class, 'secondary_category_id');
    }

    public function firstImage() {
        return $this->belongsTo(Image::class, 'image1', 'id');
    }

    public function stocks() {
        return $this->hasMany(Stock::class);
    }
}
