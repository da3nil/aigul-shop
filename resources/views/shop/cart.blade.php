@extends('layouts.user', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="container">
        <div class="card p-0 pt-3 w-100">
            <div class="card-header card-header-primary"><h2 class="d-inline">Корзина товаров</h2><button class="btn btn-rose float-right" data-toggle="modal" data-target="#exampleModal">Оформить заказ</button></div>

            <div class="card-body w-100">
                @if (count(Cart::content()))
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="border-top-0" scope="col">Картинка</th>
                            <th class="border-top-0" scope="col">Товар</th>
                            <th class="border-top-0" scope="col">Количество</th>
                            <th class="border-top-0" scope="col">Цена</th>
                            <th style="max-width: 10%; width: 10%" class="border-top-0" scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach (Cart::content() as $item)
                            <tr>
                                <td style="text-align: center; max-width: 110px; width: 140px"><img src="{{ asset($item->model->img) }}" class="img-fluid" alt=""></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->price }} руб.</td>
                                <td style="max-width: 10%; width: 10%">
                                    <form method="post" action="{{ route('cart.del', ['rowId' => $item->rowId]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Удалить
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <th class="" scope="col"></th>
                            <th class="" scope="col"></th>
                            <th class="" scope="col"></th>
                            <th class="" scope="col">Итого <br> {{ Cart::priceTotal() }} руб.</th>
                            <th style="max-width: 10%; width: 10%" class="" scope="col"></th>
                        </tr>
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info text-center m-0 w-100" style="font-size: 1rem; padding: 1rem" role="alert">
                        Ваша корзина <b>пуста</b>.
                    </div>
                @endif
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
