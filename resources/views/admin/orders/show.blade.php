@extends('layouts.app', ['activePage' => '', 'titlePage' => __('Dashboard')])
@section('content')
    <div class="content">
        <div class="container">

            <div class="card mb-3">
                <div class="card-header">Заказ #{{$order->id}}</div>
                <div class="card-body">
                    <div>Имя:
                        <b>{{$order->name}}</b>
                    </div>
                    <div>Телефон:
                        <b>{{$order->phone}}</b>
                    </div>
                    <div>Email:
                        <b> {{$order->email}}</b>
                    </div>
                    <div>Адрес:
                        <b> {{$order->address}}</b>
                    </div>
                    <hr>
                    <div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="border-top-0">Картинка</th>
                                <th scope="col" class="border-top-0">Товар</th>
                                <th scope="col" class="border-top-0">Цена</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->orderPositions as $model)

                                <tr>
                                    <td style="text-align: center; max-width: 110px; width: 140px;">
                                        <img src="{{asset( $model->product->img)}}" alt=""
                                             style="wight: 70px; height: 70px;">
                                    </td>
                                    <td>
                                        <div class="h6">
                                            <b>Название:</b> {{$model->product->name}}
                                        </div>

                                    </td>
                                    <td>{{$model->product->price}} руб.</td>
                                </tr>
                            @endforeach
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Итого
                                    <br> {{$order->total}} руб.
                                </th>
                                <th scope="col" style="max-width: 10%; width: 10%;"></th>
                            </tr>
                            </tbody>
                        </table>
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
