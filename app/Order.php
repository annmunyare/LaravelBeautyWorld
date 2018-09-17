<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Order extends Model
{
    //
    protected $guarded = [];

    // public function orderItems()
    // {
    //     return $this->belongsToMany(Product::class) ->withPivot('amount','total');
    // }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
