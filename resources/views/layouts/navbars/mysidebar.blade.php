<div class="p-3  bg-white rounded border h-100" style="">
    <div class="mb-3">
        <div class="input-group">
            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">search</i>
                                    </span>
            </div>
            <input type="text" class="form-control" placeholder="Поиск">
        </div>
    </div>

    <ul class="mb-3 nav my-nav nav-pills nav-pills-icons flex-xl-column pr-0 mr-0 " role="tablist">
        @foreach($categories as $category)
            <li class="nav-item col-md-12 ">
                <a class=" w-100  btn  btn-primary h-100 text-white p-2 d-flex align-items-center justify-content-start" href="{{ route('categories.show', ['category' => $category->id]) }}" aria-selected="true">
                <img class=" rounded float-left h-50 pr-2" style="wight:32px; height:32px;" src={{ asset('images/icons/phone.png') }} alt="">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="mb-3">
        <label for="Input2" class="bmd-label-floating">Цена от</label>
        <input type="text" class="form-control" id="Input2">
    </div>

    <div class="mb-3">
        <label for="Input2" class="bmd-label-floating">Цена до</label>
        <input type="text" class="form-control" id="Input2">
    </div>

    <div class="text-center">
        <form action="">
            <button class="btn btn-rose" type="submit">Применить фильтр</button>
        </form>
    </div>
</div>
