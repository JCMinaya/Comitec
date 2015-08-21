@extends('layouts.default')

@section('content')
Comite de {{ $comite->name }}.<br>
{{$comite->abrev}}


@stop