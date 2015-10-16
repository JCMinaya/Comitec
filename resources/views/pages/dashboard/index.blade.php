@extends('layouts.default')

@section('content')

	@include('includes.header')

	<div class="description-box">
		<h6 style="color:#fff">Bienvenido(a) al panel del {{$comite->abreviation}} ({{ $comite->name }}). Aquí podrás recibir mensajes, crear publicaciones sobre eventos, anuncios, etc. Y crear encuestas para identificar las necesidades de los estudiantes(a este solo tienen acceso los miembros del comité).</h6>
	</div>
	
	<div>
		<div class="col-sm-6">
		@if(file_exists('img/logos/'.$comite->abreviation.'.jpg'))
			<img id="comite-logo" src="/img/logos/{{$comite->abreviation}}.jpg">
		@else
			<img id="comite-logo" src="http://dummyimage.com/600x400/8a8a8a/5c5c5c.png&text=COMITEC">
		@endif
		</div>
		<div class="col-sm-6">
			<h3>Integrantes:</h3>
			<ul>
				@foreach($members as $member)
					<li>{{$member->name}} {{$member->last_name}} - [ {{App\Role::find($member->role_id)->role_name}} ]</li>
				@endforeach
			</ul>
		</div>
	</div>

@stop