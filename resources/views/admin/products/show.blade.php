@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">

        <div class="container">
            <div class="row">
             <div class="col-md-4">
            <img src="{{asset( $product->img)}}" alt="" class=" ml-5 " style="wight:200px; height:200px">
            
             
             </div>
           <div class="col-md-8">
          
<div class=" mt-3 h2 ml-3 text-center">
        {{ $product->name }}
        </div> 
                <div class="col-md-12">{{ $product->content }}</div>
        <h3 class="col text-right">Цена:{{ $product->price}}</h3>
            <p > <a class="" href="{{ route('admin.products.edit', ['product' => $product->id]) }}"><button type="button" class="justify-content-end btn btn-outline-warning ml-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Редактировать</button></a>
         </p>   </div>
           
          

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
