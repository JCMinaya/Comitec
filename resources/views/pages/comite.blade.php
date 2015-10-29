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
            <div class="relative">
              @include('includes.post_structure')

              <br>

              {{-- @include('includes.comments') --}}
              <a href="#"><span id="{{$post->id}}" class="fui-chat comment"> Comentarios</span></a>
              <div id="comment_{{$post->id}}" class="comentarios container-fluid">
              {{-- {{dd($comentarios)}} --}}
                <ul>
                @if(!$post->comments->isEmpty())
                  @foreach($post->comments as $comentario)
                    <li>
                      <strong>{{\App\User::find($comentario->student_id)->name}}
                        {{\App\User::find($comentario->student_id)->last_name}}:</strong>&nbsp
                      {{$comentario->text}}
                    </li>
                  @endforeach
                @endif
                  {!! Form::open(['method' => 'POST', 'route' => ['comment', $post->id, $comite->abreviation], 'class' => 'form-horizontal']) !!}
                  
                      <div class="form-group">
                          {!! Form::textarea('comment', null, ['rows' => 3, 'placeholder' => 'Escribe un comentario...', 'class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('comment') }}</small>
                      </div>
                  
                      <div class="btn-group pull-right">
                          {!! Form::submit("Comentar", ['class' => 'btn btn-success']) !!}
                      </div>
                  
                  {!! Form::close() !!}
                </ul>
              </div>
            </div>
              <hr>
           @endforeach
       @else
           <p>No hay publicaciones.</p>
       @endif
    </div>
    <div class="col-md-3 no-padding">
      <div class="my-box comite-info">
        <span class="fui-mail"> {{$comite->email}}</span><br>
        @if(!$members->isEmpty())
          @foreach($members as $member)
            <span class="fui-user"> {{$member->name}} {{$member->last_name}} - {{App\Role::find($member->role_id)->role_name}}</span>
          @endforeach
        @endif
       </div><br>
      {!! Form::open(['method' => 'POST', 'route' => ['message.store', $abrev], 'class' => 'form-horizontal my-box message-form']) !!}
      
          <p class="white">Envíale un mensaje a este comité</p>
          <div class="white form-group">
              {!! Form::label('about', 'Acerca:') !!}
              {!! Form::text('about', null, ['class' => 'form-control', 'required' => 'required']) !!}
              <small class="text-danger">{{ $errors->first('about') }}</small>
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

<script type="text/javascript">
  $(document).ready(function() {
    $('.comment').on('click', function(){
      console.log($(this).attr('id'));
      var id = $(this).attr('id');
      $('#comment_'+id).slideToggle();
    });
  });
</script>
@stop