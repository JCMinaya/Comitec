<div id="poll_{{$poll->id}}" class="container-fluid">
	<div class="col-xs-5 col-sm-4 col-md-2 no-padding">
		{{-- <div class="circle text-center">
			<span>{{$comite->abreviation}}</span>
		</div> --}}
		<span class="helper"></span>
		<img id="test" src="/img/{{$abrev}}.png">
	</div>
	<div class="col-xs-7 col-sm-8 col-md-10">
		<div class="col-md-12">
			<h6><strong>Pregunta:</strong> <em>{{$poll->question}}</em></h6>
		</div>
		<div class="col-md-3">
			@if($poll->free_answer)
				<h6><strong>Respuesta libre.</strong></h6>
			@else
				<h6><strong>Opciones:</strong></h6>
			@endif
		</div>
		<div class="col-md-9">
			@foreach($poll->answers as $answer)
			  <li>{{$answer->answer}}</li>
			@endforeach
		</div>
	</div>
</div>
