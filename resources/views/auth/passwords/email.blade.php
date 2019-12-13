<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content='#BE0A31' name='theme-color'/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/logofavicon.png')}}">
    <title>Email Aplikasi Pengaduan</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('mdbpro/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('mdbpro/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('mdbpro/css/bgstyle.css')}}" rel="stylesheet">
    <style>

        html,
        body,
        header,
        .view {
          height: 100%;
        }
      
        @media (max-width: 740px) {
          html,
          body,
          header,
          .view {
            height: 1100px;
          }
        }
        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .view {
            height: 700px;
          }
        }
      
        .top-nav-collapse {
          background-color: #39448c !important;
        }
      
        .navbar:not(.top-nav-collapse) {
          background: transparent !important;
        }
      
        @media (max-width: 991px) {
         .navbar:not(.top-nav-collapse) {
          background: #39448c !important;
         }
        }
      
        h6 {
          line-height: 1.7;
        }
      
      </style>
</head>

<body>
    <!-- Main navigation -->
    <header>
        <!-- Navbar -->
        <!-- Full Page Intro -->
        <div class="view"
            style="background-image: url('{{asset('/img/1234.png')}}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container">
                    <!--Grid row-->
                    <div class="row mt-5">
                        <!--Grid column-->
                        {{-- <img src="{{asset('img/baihaki2.png')}}" class="img-fluid" alt="Responsive image"> --}}
                        <div class="col-md-7 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Aplikasi
                                Pengaduan!!</h1>
                            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Sebuah aplikasi untuk membantu santri
                                memberitahu
                                secara anonim maupun tidak, disertai permintaan oleh pihak yang berkepentingan kepada
                                ustadz atau pihak
                                yang berwenang untuk menindak lanjuti suatu pengaduan</h6>
                            <a href="#" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Silahkan
                                Login</a>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-5 col-xl-5 mb-4">
                            <!--Form-->
                            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="card-body">
                                            @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <!--Header-->
                                        <div class="text-center">
                                            <h3 class="white-text">
                                                <i class="fa fa-key white-text"></i> Reset Password:</h3>
                                            <hr class="hr-light">
                                        </div>
                                        <!--Body-->
                                        <div class="md-form">
                                            <i class="fa fa-envelope prefix white-text active"></i>
                                            <input type="email" name="email" id="email"
                                                class="white-text form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <label for="form2" class="active mt-1"> Email Anda..</label>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-red mb-3">Send Password Reset Link</button>
                                            <hr class="hr-light mb-3 mt-4">
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
    <script type="text/javascript" src="{{asset('mdbpro/js/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('mdbpro/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('mdbpro/js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('mdbpro/js/mdb.min.js')}}"></script>
    <script>
        new WOW().init();
        </script>
</body>

</html>