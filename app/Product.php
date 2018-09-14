<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;
use App\Category;
use App\Feature;

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

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
