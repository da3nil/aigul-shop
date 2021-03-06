<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::with('category')->paginate(20);

        $data = compact('products');

        return view('admin.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();

        $data = compact('categories');

        return view('admin.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProductStoreRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductStoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->all();

        $model = Product::create($data);

        if ($request->hasFile('img')) {
            $image = $request->file('img');

            $path = $image->store('img', 'public');

            $model->img = 'storage/' . $path;
        }


        if (!$model->save()) {
            return back()->withErrors(['msg' => 'Ошибка создания товара']);
        }

        return back()->with(['success' => 'Товар успешно создан']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(int $id)
    {
        $product = Product::findOrFail($id);

        $data = compact('product');

        return view('admin.products.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $product = Product::findOrFail($id);

        $categories = Category::all();

        $data = compact('product', 'categories');

        return view('admin.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProductUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductUpdateRequest $request, int $id): \Illuminate\Http\RedirectResponse
    {
        $model = Product::findOrFail($id);

        $data = $request->all();

        $model->fill($data);

        if ($request->hasFile('img')) {
            $image = $request->file('img');

            $path = $image->store('img', 'public');

            $model->img = 'storage/' . $path;
        }


        if (!$model->save()) {
            return back()->withErrors(['msg' => 'Ошибка обновления товара']);
        }

        return back()->with(['success' => 'Товар успешно обновлен']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $product = Product::findOrFail($id);

        $result = $product->delete();

        if (!$result) {
            return back()->withErrors(['msg' => 'Ошибка удаления товара']);
        }

        return redirect()
            ->route('products.index')
            ->with(['success' => 'Товар успешно удален']);
    }
}
