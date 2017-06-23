<div class="container-fluid">
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/"><img src="{{ asset('/images/logo/logo.png') }}" class="img-fluid" alt="EUP Photography Logo" /></a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portfolio">Portfolio</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>-->
            <li class="nav-item">
                <a href="about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="contact" class="nav-link">Contact</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="https://www.facebook.com/eupphotography" target="_blank"><i id="social-fb" class="fa fa-facebook-square fa-2x social" style="color: #3b5998; margin: .3rem;"></i></a>
            <a href="https://twitter.com/eupphotography" target="_blank"><i id="social-tw" class="fa fa-twitter-square fa-2x social" style="color: #00aced; margin: .3rem;"></i></a>
            <a href="https://plus.google.com/+Eupphoto" target="_blank"><i id="social-gp" class="fa fa-google-plus-square fa-2x social" style="color: #D84B37; margin: .3rem;"></i></a>
            <a href="mailto:info@eupphoto.com" target="_blank"><i id="social-em" class="fa fa-envelope-square fa-2x social" style="color: #FFFFFF; margin: .3rem;"></i></a></li>
            @if(Auth::check())

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" id="account" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="account">
                        <li><a href="home" class="dropdown-item">Dashboard</a></li>
                        <li><a href="logout" class="dropdown-item">Logout</a></li>
                    </ul>
                </li>
                 @else
                 <li class="dropdown">
                     <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" id="account" aria-haspopup="true" aria-expanded="false">
                      Account
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="account">
                         <li><a href="login" class="dropdown-item">Sign In</a></li>
                         <li><a href="register" class="dropdown-item">Register</a></li>
                     </ul>
                 </li>
            @endif
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
        </form>-->
    </div>
</nav>
    </div>