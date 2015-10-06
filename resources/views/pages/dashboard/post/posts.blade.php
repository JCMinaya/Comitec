@extends('layouts.default')

@section('content')

@include('includes.header')

<div class="container-fluid my-box">
    <div class="col-md-10">
        <h3 style="color:#fff;margin-top: 15px;padding-left:30px;">
            <span class="fui-list-bulleted"></span>
            Publicaciones
        </h3>
    </div>
    <div class="col-md-2">
        <a href="/comite/{{$comite->abreviation}}/dashboard/post/create" class="btn btn-danger to-right">
            <span class="fui-plus"></span>
            Crear publicación
        </a>
    </div>
</div>

<div class="container-fluid">
    <div class="col-sm-12 col-md-9">
        <hr>
         @if(!$posts->isEmpty())
            @foreach($posts as $post)
               <div id="post-container">
                  @include('includes.post_structure')
                  <a href="post/{{$post->id}}/edit"><span class="fui-new edit"></span></a>
                  
                  <a href="destroy/{{$post->id}}"><span class="fui-trash delete"></span></a>
               </div>
               <hr>
            @endforeach
         @else
           <p>No hay publicaciones.</p>
         @endif
    </div>
</div>  
@stop
