@extends('layouts.app', ['activePage' => '', 'titlePage' => __('Dashboard')])
@section('content')
    <div class="content">
        <div class="container">

        <div class="card mb-3">
	<div class="card-header">Заказ #{{$order->id}}</div>
	<div class="card-body">
		<div>Имя: 
			<b>{{$order->name}}</b>
		</div>
		<div>Телефон: 
			<b>{{$order->phone}}</b>
		</div>
		<div>Email: 
			<b> {{$order->email}}</b>
		</div>
		<div>Адрес: 
			<b> {{$order->address}}</b>
		</div>
		<hr>
			<div>
				<table class="table">
					<thead>
						<tr>
							<th scope="col" class="border-top-0">Картинка</th>
							<th scope="col" class="border-top-0">Товар</th>
							<th scope="col" class="border-top-0">Цена</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="text-align: center; max-width: 110px; width: 140px;">
								<img src="http://tires-shop.local/images/tire1.jpg" alt="" class="img-fluid">
								</td>
								<td>
									<div class="h6">
										<b>Название:</b> UltraGrip Ice Arctic
									</div>
									<div class="h6">
										<b>Марка:</b> Brasa
									</div>
									<div class="h6">
										<b>Ширина:</b> 225
									</div>
									<div class="h6">
										<b>Профиль:</b> 85
									</div>
									<div class="h6">
										<b>Диаметр:</b> R13C
									</div>
									<div class="h6">
										<b>Сезон:</b> Лето
									</div>
								</td>
								<td>4958 руб.</td>
							</tr>
							<tr>
								<td style="text-align: center; max-width: 110px; width: 140px;">
									<img src="http://tires-shop.local/images/tire1.jpg" alt="" class="img-fluid">
									</td>
									<td>
										<div class="h6">
											<b>Название:</b> UltraGrip Ice Arctic
										</div>
										<div class="h6">
											<b>Марка:</b> Cooper
										</div>
										<div class="h6">
											<b>Ширина:</b> 225
										</div>
										<div class="h6">
											<b>Профиль:</b> 9.5
										</div>
										<div class="h6">
											<b>Диаметр:</b> R22C
										</div>
										<div class="h6">
											<b>Сезон:</b> Лето
										</div>
									</td>
									<td>4301 руб.</td>
								</tr>
								<tr>
									<td style="text-align: center; max-width: 110px; width: 140px;">
										<img src="http://tires-shop.local/images/tire2.jpg" alt="" class="img-fluid">
										</td>
										<td>
											<div class="h6">
												<b>Название:</b> Ecopia EP150
											</div>
											<div class="h6">
												<b>Марка:</b> Achilles
											</div>
											<div class="h6">
												<b>Ширина:</b> 255
											</div>
											<div class="h6">
												<b>Профиль:</b> 45
											</div>
											<div class="h6">
												<b>Диаметр:</b> R12C
											</div>
											<div class="h6">
												<b>Сезон:</b> Лето
											</div>
										</td>
										<td>4228 руб.</td>
									</tr>
									<tr>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col">Итого 
											<br> 13487 руб.
											</th>
											<th scope="col" style="max-width: 10%; width: 10%;"></th>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

        </div>
    </div>
@endsection

        </div>

@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
