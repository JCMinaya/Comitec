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

			<br>

			<div id="page-content-wrapper">

				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li><a href="#">Library</a></li>
				  <li class="active">Data</li>
				</ol>
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