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
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('website_level', 'Website Level') }}
                {{ Form::select('website_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('website_level'), array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Create the Website!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </body>
</html>