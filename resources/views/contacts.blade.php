@extends('layouts.user', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="container">
<div class="row">
<div class="col-md-6 m-auto">    <h3>Контакты</h3>
<hr>
        <p>Телефон: +7 (987) 111-14-13</p>
        <p>Почта: <a href="mailto: mihailmaximov@gmail.com">aigul@gmail.com</a></p>
        <p>Скайп: aigul</p>
        <p>Телеграм: @aigul</p>
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
