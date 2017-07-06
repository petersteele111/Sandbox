@extends('layouts.master')

@section('title')
EUP Photography
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/carousel.css') }}" type="text/css" />
@endsection

@section('content')
<!-- Carousel -->
<div id="maincarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#maincarousel" data-slide-to="0" class="active"></li>
        <li data-target="#maincarousel" data-slide-to="1"></li>
        <li data-target="#maincarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid imgcustom" src="{{ asset('/images/Slider/Slide%201.jpg') }}" alt="Old Barn">
            <div class="carousel-caption slidecap">

                <h3>Upper Tahquamenon Falls</h3>
                <p>We love photographing Michigans Upper Peninsula. Based in the Eastern Upper Peninsula out of Sault Ste. Marie, we service the EUP and lower Northern Michigan.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid imgcustom" src="{{ asset('/images/Slider/Slide%202.jpg') }}" alt="Pictured Rock - Lovers Leap">
            <div class="carousel-caption slidecap">

                <h3>Portraits</h3>
                <p>Shooting portraits is a passion of ours. Getting stunning results and seeing our clients happy is just an added benefit!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid imgcustom" src="{{ asset('/images/Slider/Slide%203.jpg') }}" alt="MAcro Buds">
            <div class="carousel-caption slidecap">

                <h3>Studio Work</h3>
                <p>We love shooting in studio. We have the creative freedom to make any image you desire!</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#maincarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#maincarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/feature/feature1.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Portraits</h2>
            <p>Portraits are a perfect way to showcase a moment in time. Be it an emotion, a smiling face, or something more unique. We specialize in capturing these expressive moments to hang on your wall and serve as a reminder at just how unique you are.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/feature/feature2.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Family Photo's</h2>
            <p>Your family is unique so capture the beauty, the uniqueness, and the love that makes your family one of a kind. We here at EUP Photography love capturing these moments that will survive as family heirlooms for generations to come! </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/feature/feature3.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Landscapes/Nature</h2>
            <p>Our first love. Landscapes and Nature have a special place in our hearts, and will always be something we cherish taking photo's of. All of our landscape and nature shots are available for purchase to hang in your homes and businesses! </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">An Epic Experience.</h2>
            <p class="lead">You are unique, why not do something to showcase that? When you book a shoot with us, we bring out all the stops to bring out your personality and make your shoot special. It's an experience unlike any other, that will have you feeling excited to showcase your new photo's to friends and family.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/feat/feat1.jpg') }}" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 push-md-5">
            <h2 class="featurette-heading">Amazing Photographs.</h2>
            <p class="lead">Don't settle for sub-par images, when you can get the best with us! Know with certainty, that you will love your images, and that we have a plethora of knowledge and experience to fall back on to make any photo you can imagine! Our images speak for themselves.</p>
        </div>
        <div class="col-md-5 pull-md-7">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/feat/feat2.jpg') }}" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Professional Quality </h2>
            <p class="lead">We here at EUP Photography use only the most professional quality materials and services for our products. Museum grade prints, canvases, and more, guarantee a lifetime of happiness in your photo's! We guarantee you will love your prints, or your prints and products are on us!</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/feat/feat3.jpg') }}" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">
@endsection
</div><!-- /.container -->
