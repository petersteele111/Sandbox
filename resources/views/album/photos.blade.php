@extends('layouts.master')

@section('description')
    View our quality of work in this portfolio and see why we are one of the best photographers in Michigan.
@endsection

@section('title')
    {{ $album->title }}
@endsection
@section('css')
    <link type="text/css" href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid marg">
        <div class="container">
            <h1 class="display-3">{{ $album->title }}</h1>
            <p class="lead">{{ $album->description }}</p>
            <p class="lead">Please select the images below, you wish to have edited</p>
        </div>
    </div>

    <!-- End Jumbotron -->

    <!-- Start Portfolio -->
    <div class="container">
        <div class="album text-muted">
            <div class="container">
                <nav class="breadcrumb" style="margin-bottom: 3.0rem;">
                    <a class="breadcrumb-item" href="/home">Dashboard</a>
                    <span class="breadcrumb-item active" href="#">{{ $album->title }}</span>
                </nav>
                <form action="album" method="POST">
                <div class="row">
                    @foreach($photos as $photo)
                        <div class="card col-sm-12 col-md-4">
                            <h5>{{ $photo->title }}</h5>
                            <a href="{{ $photo->url }}" data-lightbox="{{ $album->title }}" data-title="{{ $photo->title }}"><img src="{{ $photo->url }}" alt="{{ $photo->title }}" class="img-fluid img-fill rounded"></a>
                            <p class="card-text">2017 © EUP Photograhy</p>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="{{ $photo->title }}" > Select  {{ $photo->title}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-5">
                            <button type="submit" class="btn btn-primary">
                                Submit Images
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Portfolio -->
@endsection


