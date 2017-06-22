@extends('layouts.master')

@section('description')
EUP Photography services all of Michigan and is an award winning photo studio. Learn more here.
@endsection

@section('title')
    About Us
    @endsection
@section('css')
    <link type="text/css" href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
    @endsection
@section('content')

    <!-- Jumbotron -->

<div class="jumbotron jumbotron-fluid marg">
    <div class="container">
        <h1 class="display-3">About Us</h1>
        <p class="lead">Capturing the beauty and the residents of the EUP, one photo at a time!</p>
    </div>
</div>

<!-- End Jumbotron -->

<div class="container">

    <div class="row">
        <div class="col-sm-4">

            <a href="images/about/about%201.jpg" data-lightbox="about" data-title="Self Portrait"><img src="images/about/about%201.jpg" class="img-fluid img-fill"></a>

        </div>
        <div class="col-sm-8">
            <p>EUP Photography is a photography service for all of Michigan, that focuses primarily on the Eastern Upper Peninsula(EUP). We do everything from Portraits to Landscape and everything in between. We love making memories for our clients. Established prior as Peter Steele Photography, it evolved into EUP Photography once photographer Peter Steele relocated to the gorgeous and historical town of Sault Ste. Marie, Michigan. The goals of EUP Photography are to create memories, document the beautiful landscapes and people of the area, and to provide affordable photography services to the residents of Michigan.</p>

            <p>Starting off in Gatlinburg, Tennessee, we primarily focused on landscape photography in the beginning. That has changed over the years as more equipment was added and we now specialize in portraits as well. With a strong background in photoshop and photo editing in general, anything is possible. From glamour style beauty shots, to minimal touchups for realistic portraits and everything in between. We know you will be satisfied with our work, so why not give us a call!</p>

            <p> Thank you for stopping by our website and we hope you enjoy the photo’s we have on display. If you would like to contact us for some photos you want done, please head over to our contact us page. You can also buy any of our landscape images on our store! We look forward to working with you soon.</p>
        </div>
    </div>

</div>
    @endsection

