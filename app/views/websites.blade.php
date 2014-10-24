@extends('layouts.default')

@section('content')
    @foreach($websites as $website)
        <p>{{ $website->name }}</p>
    @endforeach
@stop