@extends('layouts.default')

@section('content')
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>URL</th>
        </tr>
    </thead>
    <tbody>
        @foreach($websites as $website)
        <tr>
            <td>{{ $website->name }}</td>
            <td>{{ $website->url }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop