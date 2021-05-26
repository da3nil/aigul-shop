<?php

namespace App\Http\Controllers;

use App\Category;
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
        $users_count = User::count();
        $categories_count = Category::count();
        $orders_count = Category::count();

        return view('dashboard', compact('products_count', 'users_count', 'categories_count', 'orders_count'));
    }
}
