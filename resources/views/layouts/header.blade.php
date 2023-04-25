<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Bel Alliance consulting</title>
</head>

<body>

  <div class="lines-wrap">
    <div class="lines-inner">
      <div class="lines"></div>
    </div>
  </div>
  <!-- END lines -->

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
      <div class="site-navigation">
        <a href="{{ route('welcome') }}"class="logo m-0 text-primary ">Bel Alliance <span class="text-primary">.</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-block text-left float-right site-menu">
          <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
    
          <li><a href="{{ route('acheter') }}">Buy</a></li>
          <li><a href="{{ route('louer') }}">Rent</a></li>
          <li><a href="{{ route('apropos') }}">About</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
@guest
        <li><a href="signup.html">Sign up</a></li> 
          <li class="cta-button active"><a href="login.html">Login</a></li>

@endguest
      
        </ul>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </nav>

@yield('ici')


<div class="site-footer">
  <div class="inner first">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="widget">
            <h3 class="heading">About Bel Alliance</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
          <div class="widget">
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 pl-lg-5">
          <div class="widget">
            <h3 class="heading">Pages</h3>
            <ul class="links list-unstyled">
              <li><a href="#">Acheter une proprieté</a></li>
              <li><a href="#">Vendre une proprieté</a></li>
         
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-2">
          <div class="widget">
            <h3 class="heading">Resources</h3>
            <ul class="links list-unstyled">
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget">
            <h3 class="heading">Contact</h3>
            <ul class="list-unstyled quick-info links">
              <li class="email"><a href="#">belalliance56@gmail.com</a></li>
              <li class="phone"><a href="#">+229 96549112/a></li>
              <li class="address"><a href="#"> Cadjèhoun, von opposé à Pavillon bleu, Bénin</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="inner dark">
    <div class="container">
      <div class="row text-center text-md-left">
        <div class="col-md-6 mb-3 mb-md-0">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. 
          </p>
        </div>
        <div class="col-md-6 text-md-right">
          <a href="#" class="mx-2">Terms</a>
          <a href="#" class="mx-2">Privacy</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="overlayer"></div>
<div class="loader">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jarallax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/custom.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
</body>

</html>



























<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"btn btn-primary id="exampleModalLabel">Envoyez un message à Bel Alliance Consulting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
         <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>









