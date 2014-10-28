@extends('layouts.default')
@section('content')

<div class="row">
    <div class="large-12 columns">
        <h1>Create a Server</h1>
    </div>
</div>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'servers')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create the Server!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop