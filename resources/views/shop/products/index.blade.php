@extends('layouts.user', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="container" style="margin-top:20px;">

        <div class="row">
            <div class="col-xl-3 position-relative">
                @include('layouts.navbars.mysidebar')
            </div>
            <div class="col-xl-9">
                <div class="card card-raised card-carousel pt-0 mt-0 mb-5 position-relative" style="top: 0px">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                         data-interval="3000">
                        <ol class="carousel-indicators" style="bottom: 0">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('images/1.png') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('images/2.png') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('images/3.png') }}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <i class="material-icons">keyboard_arrow_left</i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="titlepb-0 mb-0">
                    <h3 class="font-weight-bold">Актуальные предложения</h3>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4 pl-2 pr-2 mb-2">
                            <div class="card card-chart my-card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid mb-2" src="{{ asset('images/kolonka.jpg') }}" alt="" style="height: 160px">
                                    </div>
                                    <h4 class="card-title">Название</h4>
                                    <p class="card-category">Категория</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <h3 class="card-title">4 899 ₽</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pl-2 pr-2 mb-2">
                            <div class="card card-chart my-card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid mb-2" src="{{ asset('images/kolonka.jpg') }}" alt="" style="height: 160px">
                                    </div>
                                    <h4 class="card-title">Название</h4>
                                    <p class="card-category">Категория</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <h3 class="card-title">4 899 ₽</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pl-2 pr-2 mb-2">
                            <div class="card card-chart my-card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid mb-2" src="{{ asset('images/kolonka.jpg') }}" alt="" style="height: 160px">
                                    </div>
                                    <h4 class="card-title">Название</h4>
                                    <p class="card-category">Категория</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <h3 class="card-title">4 899 ₽</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="titlepb-0 mb-0">
            <h3 class="font-weight-bold">Новые поступления</h3>
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
