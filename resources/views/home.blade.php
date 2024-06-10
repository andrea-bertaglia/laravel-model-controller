@extends('layouts.app')

@section('title')
    Movies
@endsection

@section('content')
    <h1 class="text-center py-3">Movie's list</h1>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3 g-5">
                    @include('partials.movie-card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
