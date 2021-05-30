@extends('layouts.user', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="container justify-content-center">
        <h3 class="font-weight-bold mb-4">О компании</h3>
        <div class="row ">

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
