@extends('layouts.default')
@section('content')

<div class="row">
    <div class="large-12 columns">
        <h1>Edit {{ $website->name }}</h1>
    </div>
</div>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($website, array('route' => array('websites.update', $website->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('full_name', 'Full Name') }}
    {{ Form::text('full_name', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('url', 'URL') }}
    {{ Form::text('url', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('production', 'Production Server?') }}
    {{ Form::checkbox('production', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('notes', 'Notes') }}
    {{ Form::textarea('notes', null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Edit the Website!', array('class' => 'button')) }}

{{ Form::close() }}

@stop