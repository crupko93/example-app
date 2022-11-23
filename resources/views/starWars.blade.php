@extends('layouts.app')

@section('content')

@if(!empty($query))
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="/star-wars" method="GET" class="form-inline my-2">
                <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" value="{{$query}}" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
            </form>

            <div class="list-group">
                @foreach($response['results'] as $res)   
                    <a href="{{ $res['url'] }}" class="list-group-item list-group-item-action">{{ $res['name'] }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif

@if(empty($query))
<div class="d-flex align-items-center justify-content-center vh-100 bg-primary">

    @if($query !== null && $response['count'] == 0)
        <h1 class="display-1 fw-bold text-white">Not found.. Try again :(</h1>
    @endif

    <form action="/star-wars" method="GET" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" value="{{$query}}" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
    </form>

</div>
@endif

@endsection