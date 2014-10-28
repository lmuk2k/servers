@extends('layouts.default')
@section('content')

<div class="row">
    <div class="large-12 columns">
        <h1>Showing {{ $website->name }}</h1>
    </div>
</div>

<div class="jumbotron text-center">
    <h2>{{ $website->name }}</h2>
    <p>
        <strong>Full Name:</strong> {{ $website->full_name }}<br>
        <strong>URL:</strong> {{ $website->url }}<br>
        <strong>Production:</strong> {{ $website->production }}
    </p>
</div>

@stop
