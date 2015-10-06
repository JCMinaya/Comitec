@extends('layouts.default')

@section('content')

	@include('includes.header')

	<div class="my-box text-center">
		<h2 style="color:#fff">Bienvenido a la bandeja de entrada del {{ $comite->name }} [{{$comite->abreviation}}]</h2>
	</div>
	
	<div>
		<div class="col-sm-6">
			<img id="comite-logo" src="http://dummyimage.com/600x400/8a8a8a/5c5c5c.png&text=COMITEC">
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