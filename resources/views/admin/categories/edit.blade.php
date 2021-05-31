@extends('layouts.app', ['activePage' => 'Изменить категорию', 'titlePage' => __('Изменить категорию')])

@section('content')
    <style>
        .input-group-text {
            align-items: flex-start !important;
            width: 146px;
        }

        .form-control {
            padding-top: 2px !important;
        }
    </style>

    <div class="content">
        <div class="container">
            <div class="pb-3">
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
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form action="{{route('admin.categories.update', ['category' => $category->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="input-group mb-3 d-flex ">
                            <span class="input-group-text" id="inputGroup-sizing-default">Название</span>
                            <input name="name" type="text" class="form-control" aria-label="Sizing example input "
                                   aria-describedby="inputGroup-sizing-default" value="{{$category->name}}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Изображение</span>
                            <input name="img" type="file" class="form-control" aria-label="Sizing example input"
                                   aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
