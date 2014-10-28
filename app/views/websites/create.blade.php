@extends('layouts.default')
@section('content')

<div class="row">
    <div class="large-12 columns">
        <h1>Create a Website</h1>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}
    </div>
</div>

{{ Form::open(array('url' => 'websites')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('full_name', 'Full Name') }}
    {{ Form::text('full_name', Input::old('full_name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('url', 'URL') }}
    {{ Form::text('url', Input::old('url'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('production', 'Production Server?') }}
    {{ Form::checkbox('production', Input::old('production'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('notes', 'Notes') }}
    {{ Form::textarea('notes', Input::old('notes'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create the Website!', array('class' => 'button')) }}

{{ Form::close() }}

@stop
