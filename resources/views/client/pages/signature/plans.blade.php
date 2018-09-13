@extends('client.layouts.default')


@section('content')

	<!--------------------
	START - Breadcrumbs
	-------------------->
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="{!!route('client-historic-invoice')!!}">Assinatura</a></li>
		<li class="breadcrumb-item"><span>Planos</span></li>
	</ul>
	<!--------------------
	END - Breadcrumbs
	-------------------->


	<div class="content-i">
		<div class="content-box">
			<div class="section-heading centered">
				<h1>Nossos planos</h1>
				<p>Para te trazer o maior resultado e te ajudar a prospectar com qualidade e eficiência. Trazemos a vocês uma variedade de planos para você escolher de acordo com seu bolso no momento.</p>
			</div>
			<div class="pricing-plans row no-gutters">
				@php
				$col = 12 / $total; 
				@endphp
				@foreach($plans as $value)
				<div class="pricing-plan col-sm-{!!$col!!} @if($value->featured == 1) highlight @endif">
					<div class="plan-head">
						<div class="plan-image"><img alt="" src="img/plan1.png"></div>
						<div class="plan-name">{!!$value->title!!} </div>
					</div>
					<div class="plan-body">
						<div class="plan-price-w">
							<div class="price-value">{!!$value->price()!!}</div>
							<div class="price-label">{!!$value->validate!!} dias</div>
						</div>
						<div class="plan-btn-w">
							@if($planClient->plan_id == $value->plan_id)
							<a class="btn btn-secondary btn-rounded" href="javascript:void(0);" >
								{!!($planClient->status())!!}
							</a>
							@else
							<a class="btn btn-primary btn-rounded" 
							href="{!!route('client-create-invoice', ['id' => $value->plan_id])!!}">
								Assinar
							</a>
							@endif
						</div>
					</div>
					<div class="plan-description">
						<h6>{!!$value->title_small!!}</h6>
						<p>{!!$value->text!!}</p>
						<h6>Funcionalidades</h6>
						@php
						$modules = $value->modules;
						$modules = explode(':', $modules);
						$functions = $value->modules();						
						@endphp
						<ul>
							@foreach($modules as $key => $row)							
							<li>{!!$functions[$row]!!}</li>
							@endforeach
						</div>
					</div>
					@endforeach


				</div>
			</div>
		</div>

		@endsection