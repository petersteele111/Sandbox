@extends('layouts.master')

@section('description')
EUP Photography photographs Michgigans Upper Peninsula. Based out of Sault Ste. Marie, we specialize in family, landscape, and wildlife photos.
@endsection

@section('title')
    Photography for Michigan's Upper Peninsula
@endsection

@section('css')
    <link type="text/css" href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
@endsection


@section('status')
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

                        <h3>Old Barn</h3>
                        <p>We love photographing Michigans Upper Peninsula. Based in the Eastern Upper Peninsula out of Sault Ste. Marie, we service the EUP and lower Northern Michigan.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid imgcustom" src="{{ asset('/images/Slider/Slide%202.jpg') }}" alt="Pictured Rock - Lovers Leap">
                    <div class="carousel-caption slidecap">

                        <h3>Portraits</h3>
                        <p>As a photographer in Sault Ste. Marie, we get plenty of snow for great portraits up to 6 months of the year!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid imgcustom" src="{{ asset('/images/Slider/Slide%203.jpg') }}" alt="MAcro Buds">
                    <div class="carousel-caption slidecap">

                        <h3>Spring Buds</h3>
                        <p>Spring in the EUP is a beautiful thing. This is when we are most busy photographing families, landscapes, and more!</p>
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
    @endsection
