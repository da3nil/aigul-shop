<div class="p-3  bg-white rounded border" style="">
    <form method="GET"
          action="@if(Request::route()->getName() === "categories.index"){{ route('categories.index') }}@else{{ route('products.index') }}@endif">
    <div class="mb-3">
            <div class="input-group">
                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">search</i>
                                    </span>
                </div>
                <input autocomplete="off" type="text" class="form-control" placeholder="Поиск" name="search" value="{{Request::get('search')}}">
            </div>
    </div>

    <ul class="mb-3 nav my-nav nav-pills nav-pills-icons flex-xl-column pr-0 mr-0" role="tablist">
        @foreach($categories as $category)
            <li class="nav-item">
                <a class="w-100 btn btn-primary text-white" href="{{ route('categories.show', ['category' => $category->id]) }}" aria-selected="true">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="mb-3">
        <label for="Input2" class="bmd-label-floating">Цена от (руб.)</label>
        <input type="number" class="form-control" id="Input2" name="priceStart" value="{{Request::get('priceStart')}}">
    </div>

    <div class="mb-3">
        <label for="Input2" class="bmd-label-floating">Цена до (руб.)</label>
        <input type="number" class="form-control" id="Input2" name="priceEnd" value="{{Request::get('priceEnd')}}">
    </div>

    <div class="text-center">
        <form action="">
            <button class="btn btn-rose" type="submit">Применить фильтр</button>
        </form>
    </div>
    </form>
</div>
