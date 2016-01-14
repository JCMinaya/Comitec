@extends('layouts.default')

@section('content')

@include('includes.header')

<div class="container-fluid my-box">
    <div class="col-md-10">
        <h3 style="color:#fff;margin-top: 15px;padding-left:30px;">
            <span class="fui-new">   </span>
            Encuestas
        </h3>
    </div>
    <div class="col-md-2">
        <a href="/comite/{{$abrev}}/dashboard/poll/create" class="btn btn-danger to-right">
            <span class="fui-plus"> </span>
            Crear encuesta
        </a>
    </div>
</div>
    
<div class="container-">
    <div class="col-sm-12 col-md-12">
        <hr>
       @if(!$polls->isEmpty())
           @foreach($polls as $poll)
              <div id="poll-container">
                @include('includes.poll_structure')
                <a href="poll/{{$poll->id}}/edit"><span class="fui-new edit"></span></a>

                  {!! Form::open(array('route' => array('poll.destroy', $abrev, $poll->id), 'method' => 'delete')) !!}
                    <button type="submit" class="btn btn-danger btn-mini delete"><span class="fui-trash delete"></span></button>
                  {!! Form::close() !!}
              </div>
              <hr>
           @endforeach
       @else
           <p>No hay encuestas.</p>
       @endif
    </div>
</div>  

@stop