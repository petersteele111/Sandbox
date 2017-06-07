@extends('layouts.master')
@section('html-class') class="bg"
    @endsection
@section('title')
    Contact Us
    @endsection
@section('content')
<!-- Jumbotron -->

<div class="jumbotron jumbotron-fluid marg" style="background: rgba(255,255,255,0.5)">
    <div class="container">
        <h1 class="display-3">Contact</h1>
        <p class="lead font-weight-bold">14 Forest Lodge Road, Kincheloe, Michigan 49788 | (906)322-6742 | info@eupphoto.com</p>
    </div>
</div>

<!-- End Jumbotron -->

<!-- Start Portfolio -->
<div class="container">

    <div class="row">

        <form action="{{ route('contact') }}" method="POST" class="col-sm-12">
            <input type="hidden" {{ csrf_field() }} />
            <div class="form-group row">
                <label for="Fname" class="col-md-2 col-form-label col-form-label-lg">First<span style="color: red">*</span></label>
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-lg form-control-success" id="Fname" name="First_Name" placeholder="John">
                </div>

                <label for="Lname" class="col-md-2 col-form-label col-form-label-lg">Last<span style="color:red">*</span></label>
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-lg" id="Lname" name="Last_Name" placeholder="Doe">
                </div>
            </div>
            <div class="form-group row">
                <label for="Tel" class="col-md-2 col-form-label col-form-label-lg">Telephone</label>
                <div class="col-md-4">
                    <input type="tel" class="form-control form-control-lg form-control-success" id="Tel" name="Telephone" placeholder="XXX-XXX-XXXX">
                </div>

                <label for="Email" class="col-md-2 col-form-label col-form-label-lg">Email<span style="color:red">*</span></label>
                <div class="col-md-4">
                    <input type="email" class="form-control form-control-lg" id="Email" name="Email" placeholder="JaneDoe@example.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="Question" class="col-md-2 col-form-label col-form-label-lg">Question<span style="color:red">*</span></label>
                <div class="col-md-10">
                    <textarea class="form-control form-control-lg" id="Question" rows="10" name="Question" placeholder="Please ask your question here . . . ."></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-md-2 col-md-10">
                    <div class="g-recaptcha" data-sitekey="6LeAbRcUAAAAAG_qbNa-iPMG6ifHKfZTP4cnKpxN"></div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-md-2 col-md-10">
                    <button type="submit" class="btn btn-primary" name="submitted">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>

@endsection

