<?php

namespace App;
use App\Product;
use App\ProductImage;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
