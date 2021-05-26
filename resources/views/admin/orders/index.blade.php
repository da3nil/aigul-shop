@extends('layouts.app', ['activePage' => '', 'titlePage' => __('Dashboard')])
@section('content')
    <div class="content">
        <div class="container">
        <div class="card">
                <div class="card-header card-header-primary justify-content-between d-flex">  Список заказов</div>
          
  <div class="table-responsive">     
         <table class="table mt-5 ml-3">
   <thead class="text-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Имя</th>
      <th scope="col">Email</th>
      <th scope="col">Телефон</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($orders as $order)
    
    <tr>
      <th scope="row">{{ $order->id }}</th>
      <td>{{ $order->name }}</td>
      <td>{{ $order->email }}</td>
      <td>{{ $order->phone}}</td>
       <td><a href="{{ route('admin.orders.show', ['order' => $order->id]) }}"> <button type="button" class="btn btn-outline-primary">Просмотр</button></a></td>
      <td><button type="button" class="btn btn-outline-danger">Удалить</button></td>
    
    
    </tr>
    
   @endforeach
  </tbody>
</table></div>

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
