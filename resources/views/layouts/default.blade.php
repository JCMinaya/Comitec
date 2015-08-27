<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>

	<div class="container">

		<div id="wrapper">

			<header class="row">
				@include('includes.sidebar')
			</header>

			<div id="page-content-wrapper">

				<div id="main" class="row">
					@yield('content')
				</div>

			</div>
			<!-- /#page-content-wrapper -->

	    </div>
	    <!-- /#wrapper -->

		<footer>
			@include('includes.footer')
		</footer>

		</div>
	</body>
</html>