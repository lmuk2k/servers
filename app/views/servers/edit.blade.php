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
                    <a class="navbar-brand" href="{{ URL::to('servers') }}">Nerd Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('servers') }}">View All Servers</a></li>
                    <li><a href="{{ URL::to('servers/create') }}">Create a Server</a>
                </ul>
            </nav>

            <h1>Edit {{ $server->name }}</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::model($server, array('route' => array('servers.update', $server->id), 'method' => 'PUT')) }}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Edit the Server!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </body>
</html>