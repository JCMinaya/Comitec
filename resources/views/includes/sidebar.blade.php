<!-- Sidebar -->
    <div id="sidebar-wrapper">

    	@unless (Auth::check())
			<div class="my-container">
				<br>
				<div class="text-center">
					<a href="/auth/login" class="btn btn-primary">Soy estudiante de INTEC</a>
				</div>
			</div>
		@else
			<div class="my-container">
				<div class="text-center">
				{{-- <h2><img src="img/icons/svg/retina.svg"></h2> --}}
					<h3>Bienvenido</h3>
					<h4>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h4>
				</div>
				<div class="text-right">
					<a href="/auth/logout" class="btn btn-danger">Logout</a>
				</div>
			</div>
		@endunless
		
		<hr>

    </div>