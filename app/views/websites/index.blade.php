@extends('layouts.default')
@section('content')

<div class="row">
    <div class="large-12 columns">
        <h1>All the Websites</h1>
    </div>
</div>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="row">
    <div class="large-12 columns">
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    </div>
</div>
@endif

<div class="row">
    <div class="large-12 columns">
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
                        <a class="button small" href="{{ URL::to('websites/' . $website->id) }}">Show this Website</a>

                        <!-- edit this website (uses the edit method found at GET /websites/{id}/edit -->
                        <a class="button small" href="{{ URL::to('websites/' . $website->id . '/edit') }}">Edit this Website</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop