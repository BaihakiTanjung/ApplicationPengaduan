<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
<link href="{{('mdbpro/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
<link href="{{('mdbpro/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
<link href="{{('mdbpro/css/bgstyle.css')}}" rel="stylesheet">
</head>

<body> 
  <!-- Main navigation -->
<header>
  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('https://i.pinimg.com/originals/90/58/9c/90589c53510ce2c39e3f37625445f2be.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row mt-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Aplikasi Pengaduan! </h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
            nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
            dolor molestiae, quisquam iste, maiores. Nulla.</h6>
            <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
            <form action={{route('login')}} method="post">
              @csrf
              <div class="card-body">
                <!--Header-->
                <div class="text-center">
                  <h3 class="white-text">
                    <i class="fa fa-user white-text"></i> Login:</h3>
                  <hr class="hr-light">
                </div>
                <!--Body-->
                <div class="md-form">
                  <i class="fa fa-envelope prefix white-text active"></i>
                  <input type="email" id="form2" class="white-text form-control">
                  <label for="form2" class="active">Your email</label>
                </div>
                <div class="md-form">
                  <i class="fa fa-lock prefix white-text active"></i>
                  <input type="password" id="form4" class="white-text form-control">
                  <label for="form4">Your password</label>
                </div>
                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-pink">Login</button>
                  <hr class="hr-light mb-3 mt-4">
                  <div class="inline-ul text-center d-flex justify-content-center">
                    <a class="p-2 m-2 tw-ic">
                      <i class="fab fa-twitter white-text"></i>
                    </a>
                    <a class="p-2 m-2 li-ic">
                      <i class="fab fa-linkedin-in white-text"> </i>
                    </a>
                    <a class="p-2 m-2 ins-ic">
                      <i class="fab fa-instagram white-text"> </i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.Form-->
          </form>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->
<!--Main Layout-->
<!--Main Layout-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
<script type="text/javascript" src="{{('mdbpro/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{('mdbpro/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{('mdbpro/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
<script type="text/javascript" src="{{('mdbpro/js/mdb.min.js')}}"></script>
</body>

</html>