<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('панель админа') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Главная') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Функции админа') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> Пр </span>
                <span class="sidebar-normal">{{ __('Профиль') }} </span>
              </a>
            </li>
            
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.products.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Список товаров') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'application' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.orders.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Список заявок') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'application' ? ' active' : '' }}">
      <a href="{{route('products.index')}}"><button type="button" class="btn btn-primary">Вернуться в магазин</button></a>
      </li>

        </ul>
  </div>
</div>
