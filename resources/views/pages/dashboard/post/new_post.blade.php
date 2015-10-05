@extends('layouts.default')

@section('content')

@include('includes.header')

<div class="center">
    {!! Form::open(['method' => 'POST', 'route' => ['post.store', $abrev], 'class' => 'form-horizontal']) !!}
    
        @include('pages.dashboard.post.post_form')

    <div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-danger']) !!}
        {!! Form::submit("Add", ['class' => 'btn btn-inverse']) !!}
    </div>

    {!! Form::close() !!}
</div>

<script type="text/javascript">
    $(function(){
        $('#datepicker').datepicker();
        $('#datepicker2').datepicker();
    });
</script>


@stop

