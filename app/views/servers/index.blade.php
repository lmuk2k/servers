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

            <h1>All the Servers</h1>

            <!-- will be used to show any messages -->
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($servers as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <!-- we will also add show, edit, and delete buttons -->
                        <td>

                            <!-- delete the server (uses the destroy method DESTROY /servers/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->

                            <!-- show the server (uses the show method found at GET /servers/{id} -->
                            <a class="btn btn-small btn-success" href="{{ URL::to('servers/' . $value->id) }}">Show this Server</a>

                            <!-- edit this server (uses the edit method found at GET /servers/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('servers/' . $value->id . '/edit') }}">Edit this Server</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>
</html>