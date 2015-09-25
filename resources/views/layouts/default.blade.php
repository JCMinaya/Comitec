<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>

		<div id="wrapper">

			<header class="row">
				@include('includes.sidebar')
			</header>
			<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">
				<span class="fui-arrow-left"></span>
			</a>

			{{-- <br> --}}

			<div id="page-content-wrapper">
				<ol class="breadcrumb">
					@foreach($sections as $section)
						@if($section != "" && $section != 'comite' && $section != 'auth')
							@if(end($sections) == $section)
								<li class="active">{{$section}}</li>
							@else
								<li><a href="#">{{$section}}</a></li>
							@endif
						@endif
					@endforeach
				</ol><br>
				<div class="container-fluid">
					<div id="main" class="row">
						@yield('content')
					</div>
				</div>

			</div>
			<!-- /#page-content-wrapper -->
		<br><br>
	    </div>
	    <!-- /#wrapper -->

		<footer>
			@include('includes.footer')
		</footer>

	</body>
</html>