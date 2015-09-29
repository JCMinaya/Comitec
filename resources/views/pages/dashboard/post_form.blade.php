@extends('layouts.default')

@section('content')

@include('includes.header')

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

        {{-- <div class="form-group">
            {!! Form::label('file', 'Adjunta un archivo') !!}
            {!! Form::file('file', ['class' => 'required']) !!}
            <p class="help-block">Help block text</p>
            <small class="text-danger">{{ $errors->first('file') }}</small>
        </div> --}}

{{--         <!-------------------------- jQUERY TEXT EDITOR -------------------------->

        <input name="input" type="text" value="<b>My contents are from <u><span style=&quot;color:rgb(0, 148, 133);&quot;>INPUT</span></u></b>" class="jqte-test">

        <script>
            $('.jqte-test').jqte();
            
            // settings of status
            var jqteStatus = true;
            $(".status").click(function()
            {
                jqteStatus = jqteStatus ? false : true;
                $('.jqte-test').jqte({"status" : jqteStatus})
            });
        </script>

        <!------------------------- jQUERY TEXT EDITOR --------------------------> --}}

        <div class="form-group">
            {!! Form::label('majors', 'Selecciona las carreras que verán este post:') !!}
            <div class="my-box columns" style="background:#D1D1D1">
                <label for="checkbox_public">
                    <input name="public" type="checkbox" id="checkbox_public" data-toggle="checkbox">
                    Público <em>[ Visible para cualquiera que entre a la plataforma ]</em>
                </label>
                <hr style="margin:10px 0 10px">
                <div id="major_checkboxes" class="center">
                    @foreach($majors as $major)
                        <label class="checkbox" for="checkbox{{$major->id}}">
                            <input name="majors[]" type="checkbox" value="{{$major->id}}" id="checkbox{{$major->id}}" data-toggle="checkbox">
                            {{$major->name}}
                        </label>
                    @endforeach
                </div>
                <a class="btn btn-inverse bottom-right" id="select_all">Seleccionar todas <span class="fui-check"></span></a>
            </div>
            <small class="text-danger">{{ $errors->first('Carreras') }}</small>
        </div>

        <div class="form-group">
            {!! Form::label('date', 'Fecha del evento') !!}
            <input name="date" type="text" id="datepicker" class="form-control"> 
            <small class="text-danger">{{ $errors->first('date') }}</small>
        </div>
    
        <div class="btn-group pull-right">
            {!! Form::reset("Reset", ['class' => 'btn btn-danger']) !!}
            {!! Form::submit("Add", ['class' => 'btn btn-inverse']) !!}
        </div>
    
    {!! Form::close() !!}
</div>

<script type="text/javascript">
    $(function(){
        $('#datepicker').datepicker();
    });
</script>


@stop

