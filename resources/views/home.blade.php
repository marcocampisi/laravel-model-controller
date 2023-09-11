@extends('layouts.main')

@section('page-title')
    Movies DB
@endsection

@section('main-content')
    <h1 class="my-4">Movies DB</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->original_title }}</p>
                        <p class="card-text">{{ $movie->nationality }}</p>
                        <p class="card-text">{{ $movie->date }}</p>
                        <p class="card-text">{{ $movie->vote }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
