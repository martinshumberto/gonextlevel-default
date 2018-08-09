@extends('client.layouts.default')


@section('content')

	<!--------------------

	START - Breadcrumbs
	-------------------->
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="/aplicativos">Aplicativos</a></li>
		<li class="breadcrumb-item"><span>Calendário</span></li>
	</ul>
	<!--------------------
	END - Breadcrumbs
	-------------------->

	<div class="content-i">
	    <div class="content-box">
	        <div class="element-wrapper">
	            <h6 class="element-header">Calendário</h6>
	            <div class="element-box">
	                <h5 class="form-header">Gerenciar Calendário</h5>
	                <div class="form-desc">Gerencie suas apn's, reuniões e compromissos marcados através do calendário. </div>
	                <div id="fullCalendar"></div>
	            </div>
	        </div>
	    </div>
	</div>

@endsection