<div id="post_{{$post->id}}" class="container-fluid">
	<div class="col-xs-5 col-sm-4 col-md-2 no-padding">
		{{-- <div class="circle text-center">
			<span>{{$comite->abreviation}}</span>
		</div> --}}
		@if(isset($post->image) && !empty($post->image))
			<a class="fancybox" href="/{{$post->image}}" title="{{$post->title}}">
				<img id="test" src="/{{$post->image}}" alt="">
			</a>
		@else
			{{-- <span class="helper"></span> --}}
			<img id="test" src="/img/{{$post->comite->abreviation}}.png">
		@endif
	</div>
	<div class="col-xs-7 col-sm-8 col-md-10 padding20">
		<h4 style="padding-right:130px">{{$post->title}}</h4>
		<p>{{$post->description}}</p>
	</div>
</div>

<script type="text/javascript">
	$(document).ready( function() {
		$('.fancybox').fancybox();
	});
</script>