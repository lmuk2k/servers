@extends('layout')

@section('content')
    @foreach($websites as $website)
        <p>{{ $website->name }}</p>
    @endforeach
@stop