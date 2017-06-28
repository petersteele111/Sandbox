@extends('layouts.master')

@section('title')
        User Dashboard
@endsection

@section('css')
        <link type="text/css" href="{{ asset('css/album.css') }}" rel="stylesheet" />
@endsection

@section('content')
        <!-- Start Jumbotron -->
        <div class="jumbotron jumbotron-fluid marg">
                <div class="container">
                        <h1 class="display-3">Welcome {{ $name }}</h1>
                        <p class="lead">If you had a great experience, please consider referring us to your friends and family!</p>
                </div>
        </div>
        <!-- End Jumbotron -->

        <div class="album text-muted">
                <div class="container">
                        <div class="row">
                                @foreach ($albums as $album)
                                        <div class="card col-sm-12 col-md-4">
                                                <h5>{{ $album->title }}</h5>
                                                <a href="album/{{ $album->id }}"><img src="{{ $photos[1]['url'] }}" alt="{{ $album->title }}" ></a>
                                                <p class="card-text">{{ $album->description }}</p>
                                        </div>
                                @endforeach
                        </div>

                </div>
        </div>

@endsection
