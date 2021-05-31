<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActualProduct extends Model
{
    protected $fillable = [
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
