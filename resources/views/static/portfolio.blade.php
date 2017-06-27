@extends('layouts.master')

@section('description')
    View our quality of work in this portfolio and see why we are one of the best photographers in Michigan.
@endsection

@section('title')
    Portfolio
@endsection
@section('css')
    <link type="text/css" href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
    @endsection

@section('content')
<!-- Jumbotron -->

<div class="jumbotron jumbotron-fluid marg">
    <div class="container">
        <h1 class="display-3">Portfolio</h1>
        <p class="lead">Some of our work, to give you an idea of the quality of images we produce.</p>
    </div>
</div>

<!-- End Jumbotron -->

<!-- Start Portfolio -->
<div class="container">
    <div class="album text-muted">
        <div class="container">

            <div class="row">
                <div class="card col-sm-12 col-md-4">
                    <a href="images/portfolio/port%201%20f.jpg" data-lightbox="portfolio" data-title="Old Barn"><img src="images/portfolio/port%201%20f.jpg" alt="Old Barn" class="img-fluid img-fill rounded" /></a>
                </div>
                <div class="card col-sm-12 col-md-4">
                    <a href="images/portfolio/port%202%20f.jpg" data-lightbox="portfolio" data-title="Pictured Rocks"><img src="images/portfolio/port%202%20f.jpg" alt="Pictured Rocks"  class="img-fluid img-fill rounded"/></a>
                </div>
                <div class="card col-sm-12 col-md-4">
                    <a href="images/portfolio/port%203%20f.jpg" data-lightbox="portfolio" data-title="Spring Buds"><img src="images/portfolio/port%203%20f.jpg" alt="Spring Buds" class="img-fluid img-fill rounded"/></a>
                </div>
            </div>
            <div class="row">
                <div class="card col-sm-12 col-md-4">
                    <a href="images/portfolio/port%204%20f.jpg" data-lightbox="portfolio" data-title="Tahquamenon Falls - Upper"><img src="images/portfolio/port%204%20f.jpg" alt="Tahquamenon Falls - Upper" class="img-fluid img-fill rounded"/></a>
                </div>
                <div class="card col-sm-12 col-md-4">
                    <a href="images/portfolio/port%205%20f.jpg" data-lightbox="portfolio" data-title="Seagull Portrait"><img src="images/portfolio/port%205%20f.jpg" alt="Seagull Portrait" class="img-fluid img-fill rounded"/></a>
                </div>
                <div class="card col-sm-12 col-md-4">
                    <a href="images/portfolio/port%206%20f.jpg" data-lightbox="portfolio" data-title="World's Saddest Coyote"><img src="images/portfolio/port%206%20f.jpg" alt="World's Saddest Coyote" class="img-fluid img-fill rounded"/></a>
                </div>
            </div>
            <div class="row">
                <div class="card col-sm-12 col-md-4">
                    <a href="images/portfolio/port%207%20f.jpg" data-lightbox="portfolio" data-title="Old Man"><img src="images/portfolio/port%207%20f.jpg" alt="Old Man" class="img-fluid img-fill rounded"/></a>
                </div>
                <div class="card col-sm-12 col-md-4">
                    <a href="images/portfolio/port%2010%20f.jpg" data-lightbox="portfolio" data-title="Studio Headshot"><img src="images/portfolio/port%2010%20f.jpg" alt="Outdoor Portrait" class="img-fluid img-fill rounded"/></a>
                </div>
                <div class="card col-sm-12 col-md-4">
                    <a href="images/portfolio/port%209%20f.jpg" data-lightbox="portfolio" data-title="Sunset Portrait"><img src="images/portfolio/port%209%20f.jpg" alt="Sunset Portrait" class="img-fluid img-fill rounded"/></a>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- End Portfolio -->
@endsection

