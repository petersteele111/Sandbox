@extends('layouts.master')

@section('title')
        User Dashboard
@endsection

@section('css')
        <link type="text/css" href="{{ asset('css/styles.css') }}" rel="stylesheet" />
@endsection

@section('status')
    @include('layouts.partials.status')
@endsection

@section('content')
        <!-- Start Jumbotron -->
        <div class="jumbotron jumbotron-fluid marg">
                <div class="container">
                        <h1 class="display-3">Welcome {{ $name }}</h1>
                    <p class="lead">If you had a great experience, please refer us to your friends and family, and get <span style="font-weight:bold">15% off</span> your next shoot when they book!</p>
                </div>
        </div>
        <!-- End Jumbotron -->


    <div class="container">
        <div class="album text-muted">
                <div class="container">
                    <h2 class="text-center" style="padding-bottom: 4rem;">Your Photo's</h2>
                        <div class="row">
                            @foreach ($albums as $album)
                                <div class="card col-sm-12 col-md-4">
                                    <h5>{{ $album->title }}</h5>
                                    <a href="album/{{ $album->id }}"><img src="{{ $album->photos[0]['url'] }}" alt="{{ $album->title }}" class="img-fluid img-fill rounded"></a>
                                    <p class="card-text">{{ $album->description }}</p>
                                </div>
                            @endforeach
                        </div>

                </div>
        </div>
        @endsection
    </div>


