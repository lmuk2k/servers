@extends('layouts.default')

@section('content')
<ul>
    @foreach($servers as $server)
    <li>{{ $server->name }}</li>
    @endforeach
</ul>
@stop