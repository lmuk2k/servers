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

            <h1>Showing {{ $website->name }}</h1>

            <div class="jumbotron text-center">
                <h2>{{ $website->name }}</h2>
                <p>
                    <strong>Full Name:</strong> {{ $website->full_name }}<br>
                    <strong>URL:</strong> {{ $website->url }}<br>
                    <strong>Production:</strong> {{ $website->production }}
                </p>
            </div>

        </div>
    </body>
</html>