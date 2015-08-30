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
        <a href="/comite/{{$abrev}}/dashboard/poll/create" class="btn btn-success">
            <span class="fui-plus"> </span>
            Crear encuesta
        </a>
    </div>
</div>
    
<div class="container-">
    <div class="col-sm-12 col-md-9">
        <hr>
       @if(!$polls->isEmpty())
           @foreach($polls as $poll)
               {{$poll->title}}
                <hr>
           @endforeach
       @else
           <p>No hay encuestas.</p>
       @endif
    </div>
</div>  

@stop