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

            <h1>All the Websites</h1>

            <!-- will be used to show any messages -->
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Production</td>
                        <td>Server</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($websites as $website)
                    <tr>
                        <td>{{ $website->id }}</td>
                        <td>{{ $website->name }}</td>
                        <td>{{ $website->production }}</td>
                        <td>
                            <p>{{ $website->server->name }}</p>
                        </td>
                        <!-- we will also add show, edit, and delete buttons -->
                        <td>

                            <!-- delete the website (uses the destroy method DESTROY /websites/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->

                            <!-- show the website (uses the show method found at GET /websites/{id} -->
                            <a class="btn btn-small btn-success" href="{{ URL::to('websites/' . $website->id) }}">Show this Website</a>

                            <!-- edit this website (uses the edit method found at GET /websites/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('websites/' . $website->id . '/edit') }}">Edit this Website</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>
</html>