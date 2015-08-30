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
				<div class="container-fluid">
					<div class="to-left">
						<a href="/auth/logout" class="btn btn-danger">Logout</a>
					</div>
					@if(Auth::user()->member)
						@if(Request::is('comite/*/dashboard/*') || Request::is('comite/*/dashboard'))
							<div class="to-right">
								<a href="/" class="btn btn-inverse">Home</a>
							</div>
						@else
							<div class="to-right">
								<a href="/comite/{{Auth::user()->comite->abreviation}}/dashboard" class="btn btn-inverse">Dashboard</a>
							</div>
						@endif
					@endif
				</div>
			</div>
		@endunless
		
		<hr>

    </div>