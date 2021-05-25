@extends('layouts.user', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="container" style="margin-top:20px;">

        <div class="row">
            <div class="col-xl-3 position-relative">
                @include('layouts.navbars.mysidebar')
            </div>
            <div class="col-xl-9">


                <div class="titlepb-0 mb-0">
                    <h3 class="font-weight-bold">{{ $category->name }}</h3>
                </div>

                <div class="container">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-3 pl-2 pr-2 mb-2">
                                <a href="{{ route('products.show', ['product' => $product->id]) }}" class="card card-chart my-card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img class="img-fluid mb-2" src="{{ asset($product->img) }}" alt="" style="height: 160px">
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

                    <div class="d-flex justify-content-center">
                        {{ $products->links() }}
                    </div>
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
                        <a href="{{ route('products.show', ['product' => $product->id]) }}" class="card card-chart my-card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="img-fluid mb-2" src="{{ asset($product->img) }}" alt="" style="height: 160px">
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
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
