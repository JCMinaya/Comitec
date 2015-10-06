@extends('layouts.default')
@section('content')
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
@stop
