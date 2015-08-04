@extends('layouts.default')

@section('content')
Comite de {{ $comite->name }}.<br><br>
Presidente: {{ $president->name }}<br>
Vicepresidente: {{ $vicepresident->name }}<br>
Secretary: {{ $secretary->name }}<br>
Vocal: {{ $vocal->name }}<br>
Treasurer: {{ $treasurer->name }}
@stop