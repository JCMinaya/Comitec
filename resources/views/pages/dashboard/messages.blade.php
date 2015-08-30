@extends('layouts.default')

@section('content')

	@include('includes.header')

	<div class="container-fluid my-box">
	    <div class="col-md-10">
	        <h3 style="color:#fff;margin-top: 15px;padding-left:30px;">
	            <span class="fui-bubble">   </span>
	            Mensajes
	        </h3>
	    </div>
	</div>

	@if(!$proposals->isEmpty())
		@foreach($proposals as $proposal)
			{{$proposal->subject}}
		@endforeach
	@else
		<p>No hay mensajes.</p>
	@endif

@stop