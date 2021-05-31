<?php

namespace App\Filters;

class ProductFilter extends QueryFilter
{
    public function category($id)
    {
        return $this->builder->where('category_id', $id);
    }

    public function search($keyword)
    {
        return $this->builder->where('name', 'like', '%'.$keyword.'%');
    }

    public function price($order = 'asc')
    {
        return $this->builder->orderBy('price', $order);
    }

    public function priceStart($value = 0)
    {
        return $this->builder->where('price', '>=', $value);
    }

    public function priceEnd($value = 0)
    {
        return $this->builder->where('price', '<=', $value);
    }
}
