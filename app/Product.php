<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'name', 'category_id', 'content', 'price', 'img'
    ];

    public function scopeFilter(Builder $builder, QueryFilter $filters)
    {
        return $filters->apply($builder);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function actual()
    {
        return $this->hasOne(ActualProduct::class, 'product_id');
    }
}
