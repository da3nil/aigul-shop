<?php

namespace App\Http\Controllers\admin;

use App\ActualProduct;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActualProductStoreRequest;
use App\Product;
use Illuminate\Http\Request;

class ActualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $products = ActualProduct::with(['product'])->paginate(15);

        $allProduct = Product::all();

        return view('admin.actual.index', compact('products', 'allProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ActualProductStoreRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(ActualProductStoreRequest $request)
    {
        $data = $request->all();

        $model = (new ActualProduct())->fill($data);

        $result = $model->save();

        if (!$result) {
            return redirect()
                ->route('admin.actual.index')
                ->with(['success' => 'Актуальный товар успешно добавлен']);
        }

        return back()
            ->withErrors(['msg' => 'Ошибка создания актуального товара']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = ActualProduct::findOrFail($id);

        $result = $model->delete();

        if (!$result) {
            return redirect()
                ->route('admin.actual.index')
                ->with(['success' => 'Актуальный товар успешно удален']);
        }

        return back()
            ->withErrors(['msg' => 'Ошибка удаления актуального товара']);
    }
}
