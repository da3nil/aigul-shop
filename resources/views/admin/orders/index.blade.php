@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('content')
    <div class="content">
        <div class="container">
        <div class="card">
                <div class="card-header card-header-primary justify-content-between d-flex">  Список заказов</div>
          
  
            <table class="table mt-5">
  <thead class="text-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Имя</th>
      <th scope="col">Email</th>
      <th scope="col">Адрес</th>
      <th scope="col">Телефон</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($orders as $order)
    <tr>
      <th scope="row">{{ $order->id }}</th>
      <td>{{ $order->name }}</td>
      <td>{{ $order->email }}</td>
      <td>{{ $order->address }}</td>
      <td>{{ $order->phone}}</td>
      <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Продукты
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Действие</a>
    <a class="dropdown-item" href="#">Другое действие</a>
    <a class="dropdown-item" href="#">Что-то еще здесь</a>
  </div>
</div>
</td>
<td><button type="button" class="btn btn-outline-danger">Удалить</button></td>
    </tr>
   @endforeach
  </tbody>
</table>
        </div>
    </div>
@endsection

        </div>

@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
