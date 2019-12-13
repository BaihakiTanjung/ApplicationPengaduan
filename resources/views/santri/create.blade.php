@extends('layouts.main')

@php
$asal = App\Asal::all();
$kategori = App\kategori::all();
@endphp

@section('content')
<!-- Material form subscription -->
<div class="card">

  <h5 class="card-header danger-color-dark white-text text-center py-4">
    <strong>Tambah Data Santri</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-sm-5">

  @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

    <!-- Form -->
    <form role="form" method="POST" class="text-center" style="color: #757575;" action="{{route('santri.store')}}"  enctype="multipart/form-data">
      @csrf
      <!-- Name -->
      <div class="md-form">
        <input type="text" name="id" id="materialSubscriptionFormPasswords" class="form-control" value="{{ time() }}"
          disabled>
        <label for="materialSubscriptionFormPasswords">ID</label>
      </div>

      <!-- E-mai -->
      <div class="md-form">
        <input type="text" name="nis" id="materialSubscriptionFormEmail" class="form-control" autofocus>
        <label for="materialSubscriptionFormEmail">Nis</label>
      </div>

      <!-- E-mai -->
      <div class="md-form">
        <input type="text" name="nama" id="materialSubscriptionFormEmail" class="form-control">
        <label for="materialSubscriptionFormEmail">Nama</label>
      </div>

      <!-- E-mai -->
      <div class="md-form">
        <input type="text" name="tempat" id="materialSubscriptionFormEmail" class="form-control">
        <label for="materialSubscriptionFormEmail">Tempat Lahir</label>
      </div>

      <div class="md-form">
          <input placeholder="Plih Tanggal" name="tanggal" type="date" id="date-picker-example" class="form-control datepicker">
        </div>
      {{-- <div class="md-form">
        <input type="date" name="tanggal" id="materialSubscriptionFormEmail" class="form-control">
        <label for="materialSubscriptionFormEmail">Tanggal</label>
      </div> --}}

      <div class="md-form">
        <select name="asal" class="mdb-select md-form">
          <option disabled selected>Asal</option>
          @foreach ($asal as $a)
          <option value="{{$a ->id}}">{{$a ->nama}}</option>
          @endforeach
        </select>

      <div class="md-form">
        <select name="kategori" class="mdb-select md-form">
          <option disabled selected>Kategori</option>
          @foreach ($kategori as $a)
          <option value="{{$a ->id}}">{{$a ->nama}}</option>
          @endforeach
        </select>
      </div>

      {{-- <div class="md-form float-left">
        <div class="form-check">
          @foreach ($kategori as $k)  
        <input type="radio" value="{{$k ->id}}" class="form-check-input" id="materialGroupExample{{$k ->id}}" name="kategori">
        <label class="form-check-label" for="materialGroupExample{{$k ->id}}">{{$k ->nama}}</label>
          @endforeach
        </div>
      </div>
       --}}
      <div class="md-form">
        <input type="text" name="kelas" id="materialSubscriptionFormEmail" class="form-control">
        <label for="materialSubscriptionFormEmail">Kelas</label>
      </div>

      <div class="md-form">
        <textarea name="alamat" id="form7" class="md-textarea form-control" rows="3"></textarea>
        <label for="form7">Alamat</label>
      </div>

      <div class="md-form">
        <input type="text" name="hp" id="materialSubscriptionFormEmail" class="form-control">
        <label for="materialSubscriptionFormEmail">Hp</label>
      </div>

      <div class="md-form">
        <input type="text" name="email" id="materialSubscriptionFormEmail" class="form-control">
        <label for="materialSubscriptionFormEmail">Email</label>
      </div>

      <div class="md-form">
        <div class="file-field">
          <div class="btn danger-color-dark btn-sm float-left">
              <span class="white-text"><i class="fas fa-cloud-upload-alt mr-2 white-text"
                aria-hidden="true"></i>Pilih File</span>
            <input type="file" name="foto" multiple>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload Foto">
          </div>
        </div>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-danger btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit"
        name="proses">Submit</button>

    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form subscription -->
@endsection