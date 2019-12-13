@extends('layouts.main')

@section('content')
<!-- Material form subscription -->
<div class="row">
        <div class="col-md-12"><a href="{{url('pengguna')}}" class="btn btn-outline-danger btn-rounded btn-block z-depth-0 my-4 waves-effect"
                type="submit">Kembali</a></div>
        </div>  
    
<div class="row">
    <div class="col-md-6">
        <div class="card">

            <h5 class="card-header danger-color-dark white-text text-center py-4">
                <strong>Detail pengguna</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5">

                <!-- Form -->
                <!-- Name -->
                <div class="md-form">
                    <input type="text" name="id" id="materialSubscriptionFormPasswords" class="form-control"
                        value="{{$pengguna ->id}}" disabled value="id">
                    <label for="materialSubscriptionFormPasswords">Id</label>
                </div>
                <div class="md-form">
                    <input type="text" value="{{$pengguna ->name}}" disabled name="nip" id="materialSubscriptionFormEmail"
                        class="form-control">
                    <label for="materialSubscriptionFormEmail">Nama</label>
                </div>
                <div class="md-form">
                    <input type="text" value="{{$pengguna ->nisn}}" disabled name="nip" id="materialSubscriptionFormEmail"
                        class="form-control">
                    <label for="materialSubscriptionFormEmail">Nisn</label>
                </div>
                <div class="md-form">
                    <input type="text" value="{{$pengguna ->email}}" disabled name="nama" id="materialSubscriptionFormEmail"
                        class="form-control">
                    <label for="materialSubscriptionFormEmail">Email</label>
                </div>
                <div class="md-form">
                    <input type="text" value="{{$pengguna ->role}}" disabled name="tempat" id="materialSubscriptionFormEmail"
                        class="form-control">
                    <label for="materialSubscriptionFormEmail">Role</label>
                </div>
                <!-- Form -->

            </div>

        </div>
    </div>
    <div class="col-md-6">
        <div class="card">

            <h5 class="card-header danger-color-dark white-text text-center py-4">
                <strong>Foto pengguna</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5">

                <!-- Form -->
                <div class="md-form">
                    @if (!empty($pengguna ->foto))
                    <img src="{{asset('img')}}/{{$pengguna ->foto}}" class="img-fluid img-thumbnail z-depth-2"
                        alt="Responsive image" width="500px" height="500px">

                    @else
                    <img src="{{asset('img/image_placeholder.jpg')}}" class="img-fluid img-thumbnail z-depth-2"
                        alt="Responsive image" width="500px" height="500px">

                    @endif
                </div>



                </form>
                <!-- Form -->

            </div>

        </div>
    </div>
</div>
<!-- Material form subscription -->
@endsection