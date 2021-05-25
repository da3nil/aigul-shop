<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'identifier',
        'name',
        'email',
        'address',
        'phone',
        'content',
        'total'
    ];

    public function orderPositions()
    {
        return $this->hasMany(OrderPosition::class, 'order_id')->with(['product']);
    }
}
