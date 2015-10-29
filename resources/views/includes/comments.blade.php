              <a href="javascript:void(0)"><span id="{{$post->id}}" class="fui-chat comment"> Comentarios</span></a>
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