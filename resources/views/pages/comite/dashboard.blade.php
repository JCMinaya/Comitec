@extends('layouts.default')

@section('content')
<h1>{{$comite->abrev}}</h1>
<h1>Bienvenido a la bandeja de entrada del {{ $comite->name }}.</h1>
@if(!empty($proposals))
	@foreach($proposals as $proposal)
		{{$proposal->subject}}
	@endforeach
@else
	<h2>No hay propuestas.</h2>
@endif
@stop