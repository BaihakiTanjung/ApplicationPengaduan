@extends('layouts.main')
@foreach ($pengguna as $p)
@section('content')
<!-- Material form subscription -->

<div class="card">
    <h5 class="card-header danger-color-dark white-text text-center py-4">
        <strong>Detail Pengaduan</strong>
    </h5>
    <!--Card content-->
    <div class="card-body px-lg-5">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" method="POST" action="{{route('pengguna.update', $p ->id)}}"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <!-- Name -->
            {{-- <div class="md-form mt-3"> --}}
            <input name="name" value="{{$p ->name}}" type="hidden" id="materialSubscriptionFormPasswords"
                class="form-control">
            <input name="nisn" value="{{$p ->nisn}}" type="hidden" id="materialSubscriptionFormPasswords"
                class="form-control">
            {{-- <input  value="{{$nama ->nama}}" type="text" id="materialSubscriptionFormPasswords"
            class="form-control" > --}}
            {{-- <label for="materialSubscriptionFormPasswords">Jenis Pengaduan</label> --}}
            {{-- </div> --}}

            <!-- E-mai -->
            {{-- <div  class="md-form"></div> --}}
            <input name="email" value="{{$p ->email}}" type="hidden" id="materialSubscriptionFormEmail"
                class="form-control">
            {{-- <input  value="{{$nama2 ->name}}" type="text" id="materialSubscriptionFormEmail" class="form-control" >
            --}}
            {{-- <label for="materialSubscriptionFormEmail">User Pelapor</label> --}}
            {{-- </div> --}}

            {{-- <div  class="md-form"> --}}
            <input name="password" value="{{$p ->password}}" type="hidden" id="materialSubscriptionFormEmail"
                class="form-control">
            {{-- <label for="materialSubscriptionFormEmail">Tanggal</label> --}}
            {{-- </div> --}}

            {{-- <div class="md-form"> --}}
            {{-- <label for="materialContactFormMessage">Keterangan</label> --}}
            {{-- </div> --}}
            {{-- <h3>Bukti</h3> --}}
            {{-- <div class="md-form"> --}}
            {{-- <img src="{{asset('img')}}/{{$p ->bukti}}" --}}
            {{-- class="img-fluid z-depth-1" alt="Responsive image" width="250px" height="250px"> --}}
            {{-- </div> --}}
            {{-- <input name="status" value="Diterima" type="hidden" id="materialSubscriptionFormEmail" class="form-control" > --}}
            <select name="role" class="mdb-select md-form">
                <option disabled selected>Role</option>
                <option value="Ustadz">Ustadz</option>
                <option value="Admin">Admin</option>
                <option value="Santri">Santri</option>
            </select>

            <!-- Sign in button -->
            <button class="btn btn-outline-danger btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Ganti
                Role
            </button>

        </form>
    </div>
</div>
@endforeach
<!-- Material form subscription -->
@endsection