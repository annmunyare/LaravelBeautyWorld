<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;

class Product extends Model
{
    //
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
