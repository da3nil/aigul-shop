@extends('layouts.app', ['activePage' => ' Изменение информации о товаре', 'titlePage' => __(' Изменение информации о товаре')])

@section('content')
    <div class="content">
        <div class="container">
            <div class="row d-flex justify-content-center"> 
                <div class="col-md-8">
                <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3 d-flex ">
                        <span class="input-group-text" id="inputGroup-sizing-default">Название товара</span>
                        <input name="name" type="text" class="form-control" aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default" value={{$product->name}}>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Описание товара</span>
                      <input name="content" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value={{$product->content}}>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Цена</span>
                      <input name="price" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value={{$product->price}}>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Изображение</span>
                      <input name="img" type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default" value={{$product->category->name}}>Категория</span>
                        <select name="category_id" class="form-control" id="exampleFormControlSelect1">  
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" @if( $category->id === $product->category_id ) selected @endif >{{$category->name}}</option>
                        @endforeach 
                        </select>
                    </div>
                    <div class="text-center">
                     <button class="btn btn-primory" type="submit">Сохранить</button>
                     </div>
                   </form>
                </div>
            </div>
        </div>            
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
