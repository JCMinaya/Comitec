	@unless (Auth::check())
		<button><a href="/auth/login">LogIn</a></button>
		<button><a href="/auth/register">Register</a></button>
	@else
		<h2>Bienvenido {{ Auth::user()->name }}</h2>
		<button><a href="/auth/logout">LogOut</a></button>
	@endunless
	<div class="navbar">
	    <div class="navbar-inner">
	        <ul class="nav">
	            <li><a href="/">Home</a></li>
	            <li><a href="/about">About</a></li>
	            <li><a href="/projects">Projects</a></li>
	            <li><a href="/contact">Contact</a></li>
	        </ul>
	    </div>
	</div>