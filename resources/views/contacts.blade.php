@extends('layouts.user', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<style>
#frog p{
    font-size:1.3rem;
}
</style>

    <div class="container">
<div class="row">
<div class="col-md-6 m-auto oswald">   
<h3 class="oswald text-center" style="font-size:2rem;">Контакты</h3>
<hr>
<div id="frog" >
        <p>Телефон: +7 (987) 111-14-13</p>
        <p>Почта: <a href="mailto: mihailmaximov@gmail.com">aigul@gmail.com</a></p>
        <p>Скайп: aigul</p>
        <p>Телеграм: @aigul</p>
        </div>
        


        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>

<!-- VK Widget -->
<div id="vk_subscribe"></div>
<script type="text/javascript">
VK.Widgets.Subscribe("vk_subscribe", {}, 115215364);
</script>


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
