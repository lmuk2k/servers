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
                    <a class="navbar-brand" href="{{ URL::to('servers') }}">Server Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('servers') }}">View All Servers</a></li>
                    <li><a href="{{ URL::to('servers/create') }}">Create a Server</a>
                </ul>
            </nav>

            <h1>Showing {{ $server->name }}</h1>

            <div class="jumbotron text-center">
                <h2>{{ $server->name }}</h2>
                <p>
                    <strong>Email:</strong> {{ $server->email }}<br>
                    <strong>Level:</strong> {{ $server->server_level }}
                </p>
            </div>

        </div>
    </body>
</html>