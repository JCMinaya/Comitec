@extends('layouts.default')

@section('content')

<div class="container-fluid">
    <div class="col-sm-12 col-md-9">
      <div class="title text-center">
        {{-- <h1>{{ $comite->abreviation }}</h1> --}}
        <h3>{{ $comite->name }}.</h3>
      </div>
      <div class="description">
        <em style="color:#fff;font-size:20px">
          &nbsp;&nbsp;En esta sección encontrarás las publicaciones y encuestas creadas por este comité
        </em>
      </div>
        <hr>
       @if(!$posts->isEmpty())
           @foreach($posts as $post)
              @include('includes.post_structure')
              <hr>
           @endforeach
       @else
           <p>No hay publicaciones.</p>
       @endif
    </div>
    <div class="col-md-3">
      <div class="my-box comite-info">
        <span class="fui-mail"> email@hotmail.com{{$comite->email}}</span><br>
        @foreach($members as $member)
          <span class="fui-user"> {{$member->name}} {{$member->last_name}} - {{App\Role::find($member->role_id)->role_name}}</span>
        @endforeach
       </div><br>
      {!! Form::open(['method' => 'POST', 'route' => 'message.store', 'class' => 'form-horizontal my-box message-form']) !!}
      
          <p class="white">Envíale un mensaje a este comité</p>
          <div class="white form-group">
              {!! Form::label('about', 'Acerca:') !!}
              {!! Form::text('Acerca', null, ['class' => 'form-control', 'required' => 'required']) !!}
              <small class="text-danger">{{ $errors->first('Acerca') }}</small>
          </div>
          <div class="white form-group">
              {!! Form::label('message', 'Mensaje') !!}
              {!! Form::textarea('message', null, ['rows' => 6, 'class' => 'form-control', 'required' => 'required']) !!}
              <small class="text-danger">{{ $errors->first('message') }}</small>
          </div>
      
          <div class="btn-group pull-right">
              {!! Form::submit("Enviar", ['class' => 'btn btn-info']) !!}
          </div>
      
      {!! Form::close() !!}
    </div>
</div>  
@stop