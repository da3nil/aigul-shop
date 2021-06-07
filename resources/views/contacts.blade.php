@extends('layouts.user', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <style>
        #frog p {
            font-size: 1.3rem;
        }

        .fz-18 {
            font-size: 1.5rem;
        }

        .my-social {
            display: flex;
            justify-content: center;
        }

        .my-social a {
            padding: 0 0.5rem;
        }

        .my-social img {
            width: 25px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto oswald">
                <h3 class="oswald text-center" style="font-size:2rem;">Контакты</h3>
                <hr class="mb-5">
                <div class="row">
                    <div class="col-md-5 offset-md-1">
                        <div class="h-100 d-flex flex-column justify-content-center">
                            <div>
                                <div class="icon icon_phone contacts-block">
                                    <div class="fz-18"><b>8 800 700 29 28</b><br>
                                        <b>8 (347) 29 28 111</b></div>
                                    <div>многоканальные</div>
                                </div>
                            </div>
                            <div>
                                <div class="icon icon_point contacts-block">
                                    <div class="fz-18"><b>г. Уфа, ул. Сагита Агиша, 1/3</b></div>
                                    <div>Отдел по работе с корпоративными клиентами, склад</div>
                                </div>
                            </div>
                            <div>
                                <div class="icon icon_point contacts-block">
                                    <div class="fz-18"><b>г. Уфа, ул. Айская, 75</b></div>
                                    <div>Розничный магазин</div>
                                </div>
                            </div>
{{--                            <div class="my-social">--}}
{{--                                <a href="#">--}}
{{--                                    <img class="img-fluid" src="{{ asset('images/vk-social-logotype.png') }}" alt="">--}}
{{--                                </a>--}}
{{--                                <a href="#">--}}
{{--                                    <img class="img-fluid" src="{{ asset('images/instagram-social-network-logo-of-photo-camera.png') }}" alt="">--}}
{{--                                </a>--}}
{{--                                <a href="#">--}}
{{--                                    <img class="img-fluid" src="{{ asset('images/facebook-logo.png') }}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
                            <div class="">
                                <a target="_blank" href="https://instagram.com/aigul1531?utm_medium=copy_link" class="btn-link pr-4"><i class="fa fa-instagram" style="font-size: 2.75rem"></i></a>
                                <a target="_blank" href="https://vk.com/aigul1531" class="btn-link pr-4 pl-4"><i class="fa fa-vk" style="font-size: 2.75rem"></i></a>
                                <a target="_blank" href="https://www.pinterest.ru/" class="btn-link pl-4"><i class="fa fa-pinterest" style="font-size: 2.75rem"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-5">
                            <h4 class="font-weight-bold">Расположение офисов продаж:</h4>
                            <div style="position:relative;overflow:hidden;"><a
                                    href="https://yandex.ru/maps/172/ufa/?utm_medium=mapframe&utm_source=maps"
                                    style="color:#eee;font-size:12px;position:absolute;top:0px;">Уфа</a><a
                                    href="https://yandex.ru/maps/172/ufa/?from=api-maps&ll=55.970925%2C54.724040&mode=usermaps&origin=jsapi_2_1_78&um=constructor%3Ac728e676e4193b9ce454ba32234fe319126386654766eef929c78d70ccf4bc21&utm_medium=mapframe&utm_source=maps&z=14"
                                    style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс.Карты — транспорт,
                                    навигация, поиск мест</a>
                                <iframe src="https://yandex.ru/map-widget/v1/-/CCUau8hV~C" width="560" height="400"
                                        frameborder="1" allowfullscreen="true" style="position:relative;border: none"></iframe>
                            </div>
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
