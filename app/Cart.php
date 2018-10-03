<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
// use App\Product;


class Cart extends Model
{
    //
    protected $guarded = [];
    

    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id'); //create cart products table alis order itiems
    }
    // public function orderItems()
    // {
    //     return $this->belongsToMany(Product::class) ->withPivot('amount','total');
    // }
    
}
