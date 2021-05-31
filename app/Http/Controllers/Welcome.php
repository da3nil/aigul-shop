<?php

namespace App\Http\Controllers;

use App\ActualProduct;
use App\Category;
use App\Product;

final class Welcome
{
    public function __invoke()
    {
        $categories = Category::all();

        $products = Product::with('category')->orderByDesc('id')->take(4)->get();

        $actual = ActualProduct::with('product')->get();

        $data = compact('categories', 'products', 'actual');

        return view('index', $data);
    }
}
