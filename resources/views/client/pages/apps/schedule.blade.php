@extends('client.layouts.default')


@section('content')

	<!--------------------

	START - Breadcrumbs
	-------------------->
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="#">Aplicativos</a></li>
		<li class="breadcrumb-item"><span>Agenda</span></li>
	</ul>
	<!--------------------
	END - Breadcrumbs
	-------------------->

	<div class="content-i">
	    <div class="content-box">
	        <div class="element-wrapper">
	            <h6 class="element-header">Agenda</h6>
	            <div class="element-box">
	                <h5 class="form-header">Gerenciar Agenda</h5>
	                <div class="form-desc">Gerencie suas apn's, reuniões e compromissos marcados através de nossa plataforma. </div>
	                <div id="fullCalendar"></div>
	            </div>
	        </div>
	    </div>
	</div>

@endsection