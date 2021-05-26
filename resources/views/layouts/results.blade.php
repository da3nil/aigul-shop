@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show w-100 mb-3" style="font-size: 1rem" role="alert">
        <strong>Ошибка!</strong> {{ $errors->first() }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show w-100 mb-3" style="font-size: 1rem" role="alert">
        <strong>Успех!</strong> {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
