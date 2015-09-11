@extends('layouts.default')

@section('content')
Comite de {{ $comite->name }}.<br>
{{$comite->abrev}}

<div class="container-fluid">
    <div class="col-sm-12 col-md-9">
        <hr>
       @if(!$posts->isEmpty())
           @foreach($posts as $post)
               {{$post->title}}
                <hr>
           @endforeach
       @else
           <p>No hay publicaciones.</p>
       @endif
    </div>
</div>  
@stop