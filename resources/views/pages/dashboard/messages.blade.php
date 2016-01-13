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
				<div class="col-md-12">
					<div class="vertical-line">
						<h5 >De: <em>{{$message->user->name}} {{$message->user->last_name}}<p>[{{$message->user->email}}]</p></em></h5>
						<h6> - <em>{{$message->subject}}</em></h6>
						<p><span class="fui-triangle-right-large"></span> <em>{{$message->content}}</em></p>
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