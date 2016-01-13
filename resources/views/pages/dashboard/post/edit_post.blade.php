@extends('layouts.default')

@section('content')

@include('includes.header')

<div class="center">
    {!! Form::model($post, ['route' => ['post.update', $abrev, $post->id], 'method' => 'PUT', 'class' => 'form-horizontal', 'files' => true]) !!}
    
        @include('pages.dashboard.post.post_form')
    
    <div class="btn-group pull-right">
        {!! Form::submit("Actualizar", ['class' => 'btn btn-inverse']) !!}
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

