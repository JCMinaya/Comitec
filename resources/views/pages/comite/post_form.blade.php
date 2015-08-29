@extends('layouts.default')

@section('content')

<div class="center">
    {!! Form::open(['method' => 'POST', 'route' => ['post.store', $abrev], 'class' => 'form-horizontal']) !!}
    
        <div class="form-group">
            {!! Form::label('title', 'Título') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('Title') }}</small>
        </div>
    
        <div class="form-group">
            {!! Form::label('description', 'Descripción') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('Description') }}</small>
        </div>
    
        <div class="form-group">
            {!! Form::label('majors', 'Selecciona las carreras que verán este post:') !!}
            <div class="my-box">
                @foreach($majors as $major)
                    <label class="checkbox" for="checkbox{{$major->id}}">
                        <input type="checkbox" value="{{$major->id}}" id="checkbox{{$major->id}}" data-toggle="checkbox">
                        {{$major->name}}
                    </label>
                @endforeach
            </div>
            <small class="text-danger">{{ $errors->first('Carreras') }}</small>
        </div>

        <div class="form-group">
            {!! Form::label('event_date', 'Fecha del evento') !!}
            <input name="event_date" type="text" id="datepicker" class="form-control"> 
            <small class="text-danger">{{ $errors->first('event_date') }}</small>
        </div>
    
        <div class="btn-group pull-right">
            {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
            {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
        </div>
    
    {!! Form::close() !!}
</div>

<script type="text/javascript">
    $(function(){
        $('#datepicker').datepicker();
    });
</script>


@stop