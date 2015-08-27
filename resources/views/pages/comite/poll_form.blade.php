@extends('layouts.default')

@section('content')

<form name="pollform" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div>
	<label>title</label>
		<input type="text" name="title">
	</div>
	<div>
	<label>description</label>
		<input type="text" name="description">
	</div>
	<div>
	<label>Carreras</label>
		<select name="majors[]" multiple>
			@foreach($majors as $major)
				<option value="{{ $major->id }}">
					{{ $major->name }}
				</option>
			@endforeach
		</select>
	</div>
	<div>
	<label>fecha de evento</label>
		<input type="text" name="event_date">
	</div>
	<div>
	<label>Lugar</label>
		<input type="text" name="location">
	</div>
	<div>
		<input type="submit" name="Submit">
	</div>
</form>

@stop