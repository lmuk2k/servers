<!DOCTYPE html>
<html>
    <head>
        <title>Look! I'm CRUDding</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('websites') }}">Website Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('websites') }}">View All Websites</a></li>
                    <li><a href="{{ URL::to('websites/create') }}">Create a Website</a>
                </ul>
            </nav>

            <h1>Create a Website</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

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

            {{ Form::submit('Create the Website!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </body>
</html>