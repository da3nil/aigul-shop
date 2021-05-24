<div class="p-3 mb-3 bg-white rounded border" style="position: sticky; top: 0">
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
        <label for="Input2" class="bmd-label-floating">Цена от</label>
        <input type="text" class="form-control" id="Input2">
    </div>

    <div class="mb-3">
        <label for="Input2" class="bmd-label-floating">Цена до</label>
        <input type="text" class="form-control" id="Input2">
    </div>

    <div class="text-center">
        <form action="">
            <button class="btn btn-success" type="submit">Применить фильтр</button>
        </form>
    </div>
</div>
