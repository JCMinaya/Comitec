@extends('layouts.default')

@section('content')

@include('includes.header')

<div class="my-box text-center">
    <h3 style="color:#fff;margin-top: 15px;">Publicaciones</h3>
</div>

    <div class="container">
        <div class="col-sm-12 col-md-9">
            <hr>
           @if(!$posts->isEmpty())
               @foreach($posts as $post)
                   {{$post->title}}
                    <hr>
               @endforeach
           @else
               <p>No hay mensajes.</p>
           @endif
        </div>
       
       
       @stop</div>