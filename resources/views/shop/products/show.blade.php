@extends('layouts.user', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="container">

        <div class="titlepb-0 mb-0">
            <h5 class=""><a
                    href="{{ route('categories.show', ['category' => $product->category->id]) }}">{{ $product->category->name }}</a>
            </h5>
        </div>

        <div class="titlepb-0 mb-0">
            <h2 class="font-weight-bold">{{ $product->name }}</h2>
        </div>

        <div class="container bg-white rounded mb-3">
            <div class="row">
                <div class="col-md-6 p-3 text-center">
                    <img class="img-fluid" src="{{ asset($product->img) }}" alt="">
                </div>
                <div class="col-md-6 p-3">
                    <div class="card card-chart">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="h3 m-0 mr-3">{{ $product->price }} ₽</span>
                                    <button class="btn btn-primary"><i class="material-icons">favorite_border</i>
                                    </button>
                                </div>
                                <button class="btn btn-rose">Купить</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input checked class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                   value="option1">
                            Гарантия 12 мес.
                            <span class="circle"><span class="check"></span></span>
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                   value="option1">
                            Гарантия 24 мес.
                            <span class="circle"><span class="check"></span></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="description mb-1">Код товара: {{ $product->id }}</div>
        </div>

        <div class="container bg-white rounded">
            <div class="row">
                <div class="col-12">
                    <div class="titlepb-0 mb-0">
                        <h3 class="font-weight-bold">Описание</h3>
                    </div>

                    <div class="mb-3">{{ $product->content }}</div>
                </div>
            </div>
        </div>

        <div class="titlepb-0 mb-0">
            <h3 class="font-weight-bold">Новые поступления</h3>
        </div>
        <div class="container">
            <div class="row">

                @foreach($new as $product)
                    <div class="col-md-3 pl-2 pr-2 mb-2">
                        <a href="{{ route('products.show', ['product' => $product->id]) }}"
                           class="card card-chart my-card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="img-fluid mb-2" src="{{ asset($product->img) }}" alt=""
                                         style="height: 160px">
                                </div>
                                <h4 class="card-title">{{ $product->name }}</h4>
                                <p class="card-category">{{ $product->category->name }}</p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <h3 class="card-title">{{ $product->price }} ₽</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
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
