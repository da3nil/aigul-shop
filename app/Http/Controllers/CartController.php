<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('shop.cart');
    }

    public function add(int $id): \Illuminate\Http\RedirectResponse
    {
        $item = Product::findOrFail($id);

        $cartItem = Cart::add($id, $item->name, 1, $item->price, 0);

        Cart::associate($cartItem->rowId, Product::class);

        return back()
            ->with(['success' => 'Товар успешно добавлен в корзину']);
    }

    public function del($rowId)
    {
        Cart::remove($rowId);

        return back()
            ->with(['success' => 'Товар успешно удален из корзины']);
    }

    public function clear()
    {
        Cart::destroy();

        return back()
            ->with(['success' => 'Корзина очищена']);
    }

}
