@extends('layouts.default')
@section('content')

<div class="row">
    <div class="large-12 columns">

        <h1>Edit {{ $server->name }}</h1>
    </div>
</div>

<a href="{{ URL::to('servers/create') }}">Create a Server</a>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($server, array('route' => array('servers.update', $server->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Edit the Server!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop