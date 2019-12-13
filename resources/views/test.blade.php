@extends('layouts.main')

@section('content')
<div class="card card-cascade wider reverse my-4 pb-5">

    <!--Card image-->
    <div class="view view-cascade overlay wow fadeIn">
      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(1).jpg" class="img-fluid">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--/Card image-->

    <!--Card content-->
    <div class="card-body card-body-cascade text-center wow fadeIn" data-wow-delay="0.2s">
      <!--Title-->
      <h4 class="card-title"><strong>My adventure</strong></h4>
      <h5 class="blue-text"><strong>Photography</strong></h5>

      <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
        laudantium, totam rem aperiam.
      </p>

      <a class="btn btn-primary btn-lg">Primary button</a>
      <a class="btn btn-secondary btn-lg">Secondary button</a>
      <a class="btn btn-default btn-lg">Default button</a>

    </div>
    <!--/.Card content-->

  </div>
@endsection
