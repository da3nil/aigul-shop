<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent text-white  " style="background: #9c27b0 !important; padding-top: 10px !important; margin-bottom: 0px; !important">
    <div class="container">
        <div class="navbar-wrapper">
        <img src="{{ asset('images/icons/atom.png') }}" alt="">
            <a class="navbar-brand font-weight-bold oswald" href="{{ route('welcome') }}">Электроника Уфа</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a href="{{ route('welcome') }}" class="nav-link">
                        <i class="material-icons">home</i> {{ __('Главная') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">
                        <i class="material-icons">info</i> {{ __('О компании') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contacts') }}" class="nav-link">
                        <i class="material-icons">contacts</i> {{ __('Контакты') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cart.index') }}" class="nav-link">
                        <i class="material-icons">shopping_cart</i> {{ __('Корзина') }}
                    </a>
                </li>
{{--                <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">--}}
{{--                    <a href="{{ route('register') }}" class="nav-link">--}}
{{--                        <i class="material-icons">person_add</i> {{ __('Регистрация') }}--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="material-icons">fingerprint</i> {{ __('Войти') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
