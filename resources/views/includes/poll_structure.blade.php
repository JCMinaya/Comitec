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
			<p class="lead small"><strong>Pregunta:</strong> <em>{{$poll->question}}</em></p>
		</div>
		<div class="col-md-2">
			@if($poll->free_answer)
				<p class="lead small"><strong>Respuestas.</strong></p>
				@foreach($votes as $value)
					@if($value->poll_id == $poll->id)
						<span class="fui-triangle-right-large"></span>{{$value->answer}}<br>
					@endif
				@endforeach
			@else
				<p class="lead small"><strong>Resultados:</strong></p>
			@endif
		</div>
		<div class="col-md-9">
		@if($poll->free_answer != 1)
			@foreach($votes as $vote)
				@if($vote->poll_id == $poll->id)
					<li>{{$vote->answer}} - <em style="color:blue">{{$vote->cant}}</em></li>
				@endif
			@endforeach
		@endif
		</div>
	</div>
</div>
