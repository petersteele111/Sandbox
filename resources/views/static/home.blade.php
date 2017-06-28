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
                                @foreach ($album as $data)
                                        <div class="card">
                                                <h5>{{ $data->title }}</h5>
                                                <a href="album/{{ $data->id }}"><img src="{{ $photo[1]['url'] }}" alt="{{ $data->title }}" ></a>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis auctor ante. Nam id cursus nunc, sit amet malesuada massa.</p>
                                        </div>
                                @endforeach
                        </div>

                </div>
        </div>

@endsection
