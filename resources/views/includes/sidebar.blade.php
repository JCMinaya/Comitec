<!-- Sidebar -->
    <div id="sidebar-wrapper">

    	@unless (Auth::check())
			<button class="btn btn-default"><a href="/auth/login">Login</a></button>
		@else
			<h2>Bienvenido {{ Auth::user()->name }}</h2>
			<button><a href="/auth/logout">LogOut</a></button>
		@endunless

        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                {{-- <a href="#">
                    Start Bootstrap
                </a> --}}
            	
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="#">Shortcuts</a>
            </li>
            <li>
                <a href="#">Overview</a>
            </li>
            <li>
                <a href="#">Events</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>