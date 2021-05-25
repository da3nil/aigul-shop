@extends('layouts.user', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="container">
        <h3>О компании</h3>

        <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src={{ asset('images/box.png') }} class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title text-center">Широкий ассортимент</h5>
        <p class="card-text text-center">Для юридических лиц доступны товары, находящиеся не только на конкретных магазинах, но и складах, магазинах, находящихся в других городах.   </div>
     </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src={{ asset('images/cart.png') }} class="card-img-top" alt="..." >
    <div class="card-body">
        <h5 class="card-title text-center">Товары напрямую от производителя</h5>
        <p class="card-text text-center">Мы являемся авторизованным партнером крупнейших производителей цифровой и бытовой техники. Что позволяет нам закупать товар без посредников, исключает случаи возникновения подделок и снижает стоимость.    </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src={{ asset('images/war.png') }} class="card-img-top" alt="..." >
    <div class="card-body">
        <h5 class="card-title text-center">Удобное сервисное обслуживание</h5>
        <p class="card-text text-center">Мы сотрудничаем со всеми брендами, представленными в нашей сети, вы можете воспользоваться не только нашей сетью сервисных центров, но и авторизованными сервисными центрами производителей. </div>
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
