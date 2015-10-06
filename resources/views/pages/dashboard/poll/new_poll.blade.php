@extends('layouts.default')

@section('content')

@include('includes.header')
	
<div class="center">
	{!! Form::open(['method' => 'POST', 'route' => 'poll.store', 'class' => 'form-horizontal']) !!}
	
	   @include('pages.dashboard.poll.poll_form')
	
	    <div class="btn-group pull-right">
	        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
	        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
	    </div>
	
	{!! Form::close() !!}
</div>

@stop