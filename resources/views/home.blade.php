@extends('layouts.app')

@section('title')
    Movies
@endsection

@section('content')
    <h1 class="text-center py-3">Movies</h1>
    <div class="container">
        <div class="row">
            <div class="col-3">

                @include('partials.movie-card')

            </div>
        </div>
    </div>
@endsection
