<!-- Sidebar -->
    <div id="sidebar-wrapper">

    	@unless (Auth::check())
			<div class="my-container">
				<br>
				<div class="text-center">
					<a href="/auth/login" class="btn btn-primary"><span class="fui-exit"></span> Iniciar Sesión</a>
				</div>
			</div>
		@else
			<div class="my-container">
				<div class="text-center">
				{{-- <h2><img src="img/icons/svg/retina.svg"></h2> --}}
					<h3>Bienvenido</h3>
					<h4>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h4>
				</div>
				<div class="container-fluid">
					<div class="to-left">
						<a href="/auth/logout" class="btn btn-danger">Cerrar Sesión</a>
					</div>
					@if(Auth::user()->member)
						@if(Request::is('comite/*/dashboard/*') || Request::is('comite/*/dashboard'))
							<div class="to-right">
								<a href="/" class="btn btn-inverse">Inicio</a>
							</div>
						@else
							<div class="to-right">
								<a href="/comite/{{Auth::user()->comite->abreviation}}/dashboard" class="btn btn-inverse">Panel de control</a>
							</div>
						@endif
					@endif
				</div>
			</div>
		@endunless
		
		<hr>

		<div id="poll-view" class="container-fluid">
		@foreach($polls as $poll)
			{!! Form::open(['method' => 'POST', 'route' => ['poll.store_result', $poll->comite->abreviation, $poll->id], 'class' => 'form-horizontal']) !!}

				{{-- <h6>{{$poll->comite->abrev}}</h6> --}}
				<p class="lead small">{{$poll->question}}</p>
				@if($poll->free_answer)
					<div class="form-group">
					    {!! Form::textarea('free_answer', null, ['class' => 'form-control', 'required' => 'required', 'rows' => 3]) !!}
					    <small class="text-danger">{{ $errors->first('free_answer') }}</small>
					</div>
				@else
					@foreach($poll->answers as $answer)
						@if(!$poll->multiple)
							<label class="radio" style="margin-top:0">
				            <input type="radio" name="optionsRadios" id="optionsRadios_{{$answer->id}}" value="{{$answer->answer}}" data-toggle="radio" class="custom-radio" required>
				            <span class="icons">
				            	<span class="icon-unchecked"></span>
				            	<span class="icon-checked"></span>
				            </span>
				            {{$answer->answer}}
			          		</label>
						@else
							<label class="checkbox" for="checkbox1" style="margin-top:0">
				            <input type="checkbox" name="optionsCheckboxes" value="{{$answer->answer}}" id="checkbox_{{$answer->id}}" data-toggle="checkbox" class="custom-checkbox" required>
					            <span class="icons">
					            	<span class="icon-unchecked"></span>
					            	<span class="icon-checked"></span>
					            </span>
				            {{$answer->answer}}
				          	</label>
						@endif
					@endforeach
				@endif
			
			    <div class="btn-group pull-right">
			        {!! Form::submit("Enviar", ['class' => 'btn btn-success']) !!}
			    </div>
			
			{!! Form::close() !!}
			<br><hr>
		@endforeach
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
		});
		</script>
    </div>