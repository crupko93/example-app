@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Actor Name</th>
                <th scope="col">Movies (year)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($actors as $actor)
                <tr>
                    <th scope="row">{{ $actor['id'] }}</th>
                    <td>{{ $actor['name'] }}</td>
                    <td>
                        @foreach($actor['movies'] as $movie)
                        {{ $movie['name'] }} ({{ $movie['year'] }}); 
                        @endforeach
                    </td>
                </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection