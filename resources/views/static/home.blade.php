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
                                <div class="card">
                                        <?php foreach ($album as $albums) {
                                            echo $albums->title;
                                                }
                                                ?>
                                </div>
                        </div>

                </div>
        </div>

@endsection
