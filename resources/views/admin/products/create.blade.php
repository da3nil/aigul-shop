@extends('layouts.app', ['activePage' => ' Изменение информации о товаре', 'titlePage' => __(' Изменение информации о товаре')])

@section('content')
    <div class="content">
        <div class="container">
            <div class="row d-flex justify-content-center"> 
                <div class="col-md-8">
                    <div class="input-group mb-3 d-flex ">
                        <span class="input-group-text" id="inputGroup-sizing-default">Название товара</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Описание товара</span>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Цена</span>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default">Изображение</span>
                      <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
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
