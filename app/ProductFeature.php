<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductFeature;

class ProductFeature extends Model
{
    //
    protected $guarded = [];
    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
