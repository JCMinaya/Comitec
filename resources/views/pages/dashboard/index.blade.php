@extends('layouts.default')

@section('content')

	@include('includes.header')

	<div class="my-box text-center">
		<h2 style="color:#fff">Bienvenido a la bandeja de entrada del {{ $comite->name }} [{{$comite->abreviation}}]</h2>
	</div>
	
	<div id="logo">
		<div class="col-sm-6">
			
		</div>
		<div class="col-sm-6">
			<h3>Integrantes:</h3>
			<ul>
				@foreach($members as $member)
					<li>{{$member->name}} {{$member->last_name}} - []</li>
				@endforeach
			</ul>
		</div>
	</div>

@stop