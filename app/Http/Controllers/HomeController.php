<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products_count = Product::count();
        $categories_count = Category::count();
        $orders_count = Order::count();

        $orders = Order::orderByDesc('id')->take(5)->get();
        $categories = Category::orderByDesc('id')->take(5)->get();
        $products = Product::orderByDesc('id')->take(5)->get();

        $data = compact(
            'orders',
            'categories',
            'products',
            'products_count',
            'categories_count',
            'orders_count'
        );

        return view('dashboard', $data);
    }
}
