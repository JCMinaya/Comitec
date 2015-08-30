@extends('layouts.default')

@section('content')

	@include('includes.header')

	<div class="my-box text-center">
		<h2 style="color:#fff">Bienvenido a la bandeja de entrada del {{ $comite->name }} [{{$comite->abreviation}}]</h2>
	</div>
	

@stop