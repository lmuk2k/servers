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
                    <a class="navbar-brand" href="{{ URL::to('websites') }}">Websites</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('websites') }}">View All Websites</a></li>
                    <li><a href="{{ URL::to('websites/create') }}">Create a Website</a>
                </ul>
            </nav>

            <h1>Edit {{ $website->name }}</h1>

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

            {{ Form::submit('Edit the Website!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </body>
</html>