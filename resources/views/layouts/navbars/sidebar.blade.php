<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
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
    
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
              <i class="material-icons">person</i>
                <span class="sidebar-normal">{{ __('Профиль') }} </span>
              </a>
            
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
      <li class="nav-item{{ $activePage == 'category' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Список категорий') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'category' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.actual.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Актуальные товары') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'application' ? ' active' : '' }}">
      <a href="{{route('products.index')}}"><button type="button" class="btn btn-primary">Вернуться в магазин</button></a>
      </li>

        </ul>
  </div>
</div>
