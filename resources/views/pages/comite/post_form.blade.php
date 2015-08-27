@extends('layouts.default')

@section('content')

{!! Form::open(['method' => 'POST', 'route' => 'comite.{abrev}.dashboard.post.store', 'class' => 'form-horizontal']) !!}

    <div class="form-group">
        {!! Form::label('Title', 'Input label') !!}
        {!! Form::text('Title', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('Title') }}</small>
    </div>

    <div class="form-group">
        {!! Form::label('Description', 'Input label') !!}
        {!! Form::textarea('Description', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('Description') }}</small>
    </div>

    <div class="form-group">
        {!! Form::label('Selecciona las carreras que verán este post:', 'Input label') !!}
        {!! Form::select('Carreras', $major_names, $major_ids, ['class' => 'form-control', 'required' => 'required', 'multiple']) !!}
        <small class="text-danger">{{ $errors->first('Carreras') }}</small>
    </div>

    <div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
    </div>

{!! Form::close() !!}


@stop