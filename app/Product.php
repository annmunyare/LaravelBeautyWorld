<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;
use App\Category;
use App\Feature;
use App\Order;
use App\ProductImage;


class Product extends Model
{
    //
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
