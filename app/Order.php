<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded = [];

    public function orderItems()
    {
        return $this->belongsToMany('Product') ->withPivot('amount','total');
    }
}
