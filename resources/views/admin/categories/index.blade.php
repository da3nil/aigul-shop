@extends('layouts.app', ['activePage' => '', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container">

            Список категорий
            @foreach ($categories as $category)
                <div class="alert alert-primary mt-3 " role="alert">
                    <div class="d-flex justify-content-between">
                        <nav class="">{{$category->name}}</nav>
                        <nav class="">
                            <a class="" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>
                            </a>
                        </nav>
                    </div>
                </div>
            @endforeach
            <div class="alert alert-danger mt-3" role="alert">
                <a href="" data-toggle="modal" data-target="#exampleModal">
                    <div>
                        Добавить категорию +
                    </div>
                </a>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Создание новой категории</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('admin.categories.store')}}" method="post">
                            <div class="modal-body">
                                <p>Введите название категории:</p>
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                <button type="button" class="btn btn-primary">Создать</button>
                            </div>
                        </form>
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
