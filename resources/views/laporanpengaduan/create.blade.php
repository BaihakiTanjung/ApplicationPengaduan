@extends('layouts.main')

@php
$jenis = App\Jenis::all();
$santri = App\Santri::all();
@endphp

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 animated fadeInRight">
      <nav aria-label="breadcrumb ">
        <ol class="breadcrumb danger-color-dark">
          <li class=""><a class="white-text" href="#">Home</a><i class="fas fa-angle-right mx-2" aria-hidden="true"></i>
          </li>
          <li class="active"><a class="white-text" href="#">Form Pengaduan</a></li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12  animated fadeInUp ">
      <!-- Table with panel -->
      <br>
      <div class="card card-cascade narrower">

        <!--Card image-->
        <div
          class="view view-cascade gradient-card-header danger-color-dark narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

          <a href="" class="white-text mx-3">Form Pengaduan</a>

          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="fas fa-info-circle mt-0"></i>
          </button>

        </div>
        <!--/Card image-->

        <div class="card-body px-lg-5 pt-0">

          <!-- Form -->
          <form role="form" action="{{route('pengaduan.store')}}" method="POST" class="text-center"
            style="color: #757575;" enctype="multipart/form-data">
            @csrf
            <div class="md-form">
              <input name="users" type="hidden" value="{{Auth::user()->id}}" id="inputMDEx" class="form-control">
            </div>
            <!-- Name -->

            <div class="md-form">
              <textarea rows="3" name="keterangan" id="materialContactFormMessage" class="form-control md-textarea"
              value="{{ old('keterangan')}}" autofocus required></textarea>

              <label for="materialContactFormMessage">Ketik Pengaduan Anda...</label>
            </div>

            <select name="jenis" class="mdb-select md-form colorful-select dropdown-danger" required>
              <option value="{{ old('jenis')}}"" disabled selected>Jenis Pengaduan</option>
              @foreach ($jenis as $j)
              <option value="{{$j ->id}}">{{$j ->nama}}</option>
              @endforeach
            </select>

            <!-- E-mail -->
            <!--Blue select-->
            {{-- <select name="santri" class="mdb-select md-form colorful-select dropdown-danger">
              <option value="" disabled selected>Nama Santri</option>
              @foreach ($santri as $s)
              <option value="{{$s ->id}}">{{$s ->nama}}</option>
            @endforeach
            </select> --}}

            <!--/Blue select-->

            <div class="md-form">
              <input placeholder="Plih Tanggal..." name="tanggal" type="date" id="date-picker-example"
                class="form-control datepicker @error('tanggal') is-invalid @enderror" value="{{ old('tanggal')}}">
                @error('tanggal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <!--Message-->

            <div class="md-form">
              <div class="file-field">
                <div class="btn danger-color btn-sm float-left">
                  <span class="white-text"><i class="fas fa-cloud-upload-alt mr-2 white-text"
                      aria-hidden="true"></i>Pilih File</span>
                  <input name="foto" type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Upload Foto Bukti...">
                </div>
              </div>
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-danger btn-rounded btn-block z-depth-0 my-4 waves-effect"
              type="submit">Kirim</button>

          </form>
          <!-- Form -->

        </div>

      </div>
      <!-- Table with panel -->
    </div>
  </div>
</div>
@endsection