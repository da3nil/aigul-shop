<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'name', 'category_id', 'content', 'price', 'img'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function actual()
    {
        return $this->hasOne(ActualProduct::class, 'product_id');
    }
}
