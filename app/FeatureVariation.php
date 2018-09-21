<?php

namespace App;
use App\Feature;

use Illuminate\Database\Eloquent\Model;

class FeatureVariation extends Model
{
    //
    protected $guarded = [];

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
