@extends('layouts.user', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="container justify-content-center">
        <h3 class="font-weight-bold mb-4">О компании</h3>
        <div class="row ">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                    </div>
                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img class="rounded" src={{ asset('images/boss.jpg') }} alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Айгуль Гарифьянова</h5>
                                                    <p class="card-text">Величайший босс нашего времени</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">

                                    <div class="card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img class="rounded" src={{ asset('images/i.png') }} alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Величайший</h5>
                                                    <p class="card-text">Просто пиздец на ножках</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img class="rounded" src={{ asset('images/Da3nil.jpg') }} alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Главный по уборке</h5>
                                                    <p class="card-text">ЛОЛИКОНЩИК ЕБ*НЫЙ</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                                <span class="sr-only">Предыдущий</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Следующий</span>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm">

                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 p-3">
                    <div class="card h-100">
                        <img src={{ asset('images/box.png') }} class="card-img-top w-75  m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2">Широкий <br>  ассортимент</h5>
                            <p class="card-text text-center h4">Для юридических лиц доступны товары, находящиеся не только на
                                конкретных магазинах, но и складах, магазинах, находящихся в других городах.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="card h-100">
                        <img src={{ asset('images/cart.png') }} class="card-img-top w-75  m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2" >Товары напрямую от производителя</h5>
                            <p class="card-text text-center fs-3 h4">Мы являемся авторизованным партнером крупнейших производителей
                                цифровой и бытовой техники.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="card h-100">
                        <img src={{ asset('images/war.png') }} class="card-img-top w-75  m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2 ">Удобное сервисное <br> обслуживание</h5>
                            <p class="card-text text-center h4">Мы сотрудничаем со всеми брендами и
                                авторизованными сервисными центрами производителей.</p>
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
