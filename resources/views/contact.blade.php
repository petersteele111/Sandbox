@extends('master.master')
<html class="bg">
@section('title')
    Contact Us
    @endsection
@section('content')
<!-- Jumbotron -->

<div class="jumbotron jumbotron-fluid marg" style="background: rgba(255,255,255,0.5)">
    <div class="container">
        <h1 class="display-3">Contact</h1>
        <p class="lead font-weight-bold">202 E. Easterday Ave. Sault Ste. Marie, MI 49783 | (906)203-4209 | info@eupphoto.com</p>
    </div>
</div>

<!-- End Jumbotron -->

<!-- Start Portfolio -->
<div class="container">

    <div class="row">

        <form action="ProcessForm.php" method="POST" class="col-sm-12">
            <input type="hidden" name="recipient" value="0" />
            <input type="hidden" name="required" value="First_Name, Last_Name, Email, Question" />
            <input type="hidden" name="exclude" value="g-recaptcha-response" />
            <input type="hidden" name="email_only" value="Email" />
            <input type="hidden" name="recipient_name" value="EUPPhotography" />
            <input type="hidden" name="link_url" value="http://www.eupphotography.com" />
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
</html>
