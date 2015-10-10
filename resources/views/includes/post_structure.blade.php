<div id="post_{{$post->id}}" class="container-fluid">
	<div class="col-xs-5 col-sm-4 col-md-2 no-padding">
		{{-- <div class="circle text-center">
			<span>{{$comite->abreviation}}</span>
		</div> --}}
		<span class="helper"></span>
		<img id="test" src="/img/{{$post->comite->abreviation}}.png">
	</div>
	<div class="col-xs-7 col-sm-8 col-md-10">
		<h4>{{$post->title}}</h4>
		<p>{{$post->description}}</p>
	</div>
</div>