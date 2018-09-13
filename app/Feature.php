<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;

class Feature extends Model
{
    //
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
