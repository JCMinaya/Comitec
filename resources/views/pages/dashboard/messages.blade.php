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
			@if(!$messages->isEmpty())
				@foreach($messages as $message)
				<div class="col-md-6">
					<div class="vertical-line">
						<h5>From: <em>{{$message->user->name}} {{$message->user->last_name}}</em><p>[{{$message->user->email}}]</p></h5>
						<h6>About: <em>{{$message->subject}}</em></h6>
						<p>Mensaje: <em>{{$message->content}}</em></p>
					</div>
					<hr>
				</div>
				@endforeach
			@else
				<p>No hay mensajes.</p>
			@endif
		</div>
	</div>

@stop