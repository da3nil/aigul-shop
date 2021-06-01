@extends('layouts.user', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <style>
        #frog p {
            font-size: 1.3rem;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto oswald">
                <h3 class="oswald text-center" style="font-size:2rem;">Контакты</h3>
                <hr class="mb-5">

                <div class="row">
                    <div class="col-md text-center">
                        <div class="icon icon_phone contacts-block">
                            <div class="fz-18"><b>8 800 700 29 28</b><br>
                                <b>8 (347) 29 28 111</b></div>
                            <div><i>многоканальные</i></div>
                        </div>
                    </div>
                    <div class="col-md ">
                        <div class="icon icon_point contacts-block">

                            <div><b>г. Уфа, ул. Сагита Агиша, 1/3</b></div>
                            <div><i>Отдел по работе с корпоративными клиентами, склад</i></div>
                        </div>
                        <div class="icon icon_point contacts-block">

                            <div><b>г. Уфа, ул. Айская, 75</b></div>
                            <div><i>Розничный магазин</i></div>
                        </div>
                    </div>
                </div>

                <div id="frog">
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
