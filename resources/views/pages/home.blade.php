@extends('layouts.default')
@section('content')
	<a id="guide" href="/pdf/ManualdeUsuario.pdf" target="blank"><span class="fui-bookmark"></span></a>
	<div class="logo text-center">
		<span>COMI</span><span>TEC</span>
	</div>
	<div class="container-fluid">
		@foreach($comites as $comite)
			<a href="/comite/{{$comite->abreviation}}">
				<div class="box col-xs-6 col-sm-4 col-md-3 text-center">
					<span class="comite-name acronym">{{$comite->abreviation}}</span><br>
					<span class="comite-name name">{{$comite->name}}</span>
				</div>
			</a>
		@endforeach
	</div>


<div id="home-posts" class="container-fluid">
	<div class="text-center">
		<a href="#arrow"><span id="arrow" style="font-size:50px;color:#E74C3C" class="fui-triangle-down"></span></a>
		<h2>Todos los posts</h5>
	</div>
	<hr>
	<div class="container-fluid">
		@if(!$posts->isEmpty())
	       @foreach($posts as $post)
	       	<div class="relative">
	          @include('includes.post_structure')
	          <br>
              @include('includes.comments')
	        </div>
	          <hr>
	       @endforeach
	   @else
	       <p>No hay publicaciones.</p>
	   @endif
	</div>
</div>

@stop
<script type="text/javascript">
	// $.(document).ready(function(){
	// 	$('#guide').on('click', function(){
	// 		$('#guide').colorbox({href:"../includes/user_guide.html"}); 
	// 	});
	// });
</script>