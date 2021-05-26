@extends('layouts.app', ['activePage' => '', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container bg-white rounded pt-3 pb-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <img src="{{asset( $product->img)}}" alt="" class=" ml-5 " style="wight:200px; height:200px">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class=" mt-3 h2 ml-3 text-center">
                        {{ $product->name }}
                    </div>
                    <div class="mb-3">{{ $product->content }}</div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <a class="" href="{{ route('admin.products.edit', ['product' => $product->id]) }}">
                                <button type="button" class="justify-content-end btn btn-outline-warning"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">Редактировать
                                </button>
                            </a><h3 class="col text-right m-0 p-0">Цена: {{ $product->price}} руб.</h3>
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
