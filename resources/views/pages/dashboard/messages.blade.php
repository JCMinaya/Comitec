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
	
	<div class="container-fluid">
		<div class="col-md-12">
			<hr>
			@if(!$proposals->isEmpty())
				@foreach($proposals as $proposal)
					{{$proposal->subject}}
				@endforeach
			@else
				<p>No hay mensajes.</p>
			@endif
		</div>
	</div>

@stop