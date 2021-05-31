@extends('layouts.app', ['activePage' => '', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Заказов</p>
                            <h3 class="card-title">{{ $orders_count }}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <ul class="list-group list-group-flush">
                                @foreach($orders as $order)
                                    <li class="list-group-item"><a
                                            href="{{ route('admin.orders.show', ['order' => $order->id]) }}">Заказ
                                            #{{$order->id}}</a></li>
                                @endforeach
                                <li class="list-group-item">
                                    <a class="text-decoration-none" href="{{ route('admin.orders.index') }}">
                                        Просмотреть все...
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Категорий</p>
                            <h3 class="card-title">{{ $categories_count }}</h3>
                        </div>
                        <div class="card-footer">
                            <ul class="list-group list-group-flush">
                                @foreach($categories as $category)
                                    <li class="list-group-item"><a
                                            href="{{ route('categories.show', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                                <li class="list-group-item">
                                    <a class="text-decoration-none" href="{{ route('admin.categories.index') }}">
                                        Просмотреть все...
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">info_outline</i>
                            </div>
                            <p class="card-category">Товаров</p>
                            <h3 class="card-title">{{ $products_count }}</h3>
                        </div>
                        <div class="card-footer">
                            <ul class="list-group list-group-flush w-100">
                                @foreach ($products as $product)
                                    <li class="list-group-item " style="overflow: hidden;"><a
                                            style="white-space: nowrap; overflow: hidden; display:block;  padding-right: 5px; text-overflow: ellipsis;"
                                            href="{{ route('admin.products.show', ['product' => $product->id]) }}">{{ $product->name }}</a>
                                    </li>
                                @endforeach
                                <li class="list-group-item">
                                    <a class="text-decoration-none" href="{{ route('admin.products.index') }}">
                                        Просмотреть все...
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
