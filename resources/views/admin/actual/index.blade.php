@extends('layouts.app', ['activePage' => '', 'titlePage' => __('Table List')])

@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить актуальный товар</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.actual.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Товар</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="product_id">
                                @foreach($allProduct as $product)
                                    <option value="{{$product->id}}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="content">

        <div class="pb-3">
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show w-100 mb-3" style="font-size: 1rem"
                     role="alert">
                    <strong>Ошибка!</strong> {{ $errors->first() }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show w-100 mb-3" style="font-size: 1rem"
                     role="alert">
                    <strong>Успех!</strong> {{ session()->get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
        @csrf
        @method('DELETE')

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header card-header-primary justify-content-between d-flex">
                            <p class="card-title h4 ">Список актуальных товаров</p>
                            <button type="button" class="btn btn-rose" data-toggle="modal" data-target="#exampleModal">
                                Добавить товар
                            </button>


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
                                    <th>

                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                {{ $product->product->id }}
                                            </td>
                                            <td class="text-center">
                                                <img src="{{asset( $product->product->img)}}" alt=""
                                                     style="width: 70px; height: 70px;">
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.products.show', ['product' => $product->id]) }}">{{ $product->product->name }}</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.categories.index')}}">{{ $product->product->category->name }}</a>
                                            </td>
                                            <td>
                                                {{ $product->product->price }}
                                            </td>
                                            <td>
                                                <form
                                                    action="{{ route('admin.actual.destroy', ['actual' => $product->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link  p-0 m-0" href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-x-circle"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                            <path
                                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                        </svg>
                                                    </button>
                                                </form>
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
