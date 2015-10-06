@extends('layouts.default')

@section('content')

@include('includes.header')

	<div class="center">
		
	{!! Form::model($poll, ['route' => ['poll.update', $poll->id}], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
	
	    @include('pages.dashboard.poll.poll_form')
	
		<div class="btn-group pull-right">
			{!! Form::submit("Actualizar", ['class' => 'btn btn-Add']) !!}
		</div>
	
	{!! Form::close() !!}

	</div>

@stop