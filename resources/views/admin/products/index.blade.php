@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Список товаров</h4>
                  </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                  Картинка
                  </th>
                  <th>
                    Имя
                  </th>
                  <th>
                    Категория
                  </th>
                  <th>
                    Цена
                  </th>
                </thead>
                <tbody>
                   @foreach ($products as $product)
                  <tr>
                    <td>
                      {{ $product->id }}
                    </td>
                    <td>
                    <img src="{{asset( $product->img)}}" alt="" style="wight: 70px; height: 70px;">
                    </td>
                    <td>
                    <a href="{{ route('admin.products.show', ['product' => $product->id]) }}">{{ $product->name }}</a> 
                    </td>
                    <td>
                    <a href="{{ route('admin.categories.index')}}">{{ $product->category->name }}</a> 
                    </td>
                    <td>
                    {{ $product->price }}
                    </td>
                    @endforeach 
                 
                </tbody>
              </table>
              <div class="d-flex justify-content-center">
              {{$products->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection