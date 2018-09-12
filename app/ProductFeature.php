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
        return $this->belongsTo(ProductFeature::class);
    }
}
