<!-- MOBILE MENU -->
<div class="fat-nav mobile-menu">
    <div class="fat-nav__wrapper">
        <ul>
            <li><a href="about-us.html">about us</a></li>
            <li><a href="our-services.html">our product</a></li>
            <li><a href="#">Booking inspection</a></li>
            <li><a href="faq.html">faq</a></li>
            <li><a href="contact-us.html">contact us</a></li>
            <li class="mt10"><span><a class="ctc" href="tel:0318711818"> 031-879 9999</a></span></li>
            <li><a href="#">Masuk</a></li>
            <li><a data-toggle="modal" data-target="#ModalRegistration">Daftar</a></li>
        </ul>
    </div>
</div>
<!-- MOBILE MENU END --> 
<nav class="navbar navbar-inverse navbar-fixed-top {{ (Request::path() == '/') ? '' : 'bg-white large'  }}" role="navigation">
    <div class="bgnav"></div>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend/img/logo.png') }}"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
                <li><a href="about-us.html">about us</a></li>
                <li><a href="our-services.html">our product</a></li>
                <li><a href="#">Booking inspection</a></li>
                <li><a href="faq.html">faq</a></li>
                <li><a href="contact-us.html">contact us</a></li>
                <li class="ctc"><span><a href="tel:0318711818"> 031-879 9999</a></span></li>
                <!--<li class="smd"><a href="#" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="smd"><a href="#" title=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li class="smd"><a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                @if(! session()->get('access_token'))
                    <li><a class="hover-cursor" data-toggle="modal" data-target="#ModalLogin">Masuk</a></li>
                    <li><a class="hover-cursor" data-toggle="modal" data-target="#ModalRegistration">Daftar</a></li>
                @else
                    <li class="nav-login">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            {{ session()->get('user.FullName') }}</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="http://localhost/svc-account/public/auth/logout">sign out</a>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
