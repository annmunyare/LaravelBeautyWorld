<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Order extends Model
{
    //
    protected $guarded = [];
    
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function orderItems()
    {
        return $this->belongsToMany(Product::class) ->withPivot('amount','total');
    }

    
}
