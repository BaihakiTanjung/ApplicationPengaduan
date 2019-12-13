@extends('layouts.main')

@php
$asal = App\Asal::all();
@endphp

@section('content')
<!-- Material form subscription -->
<div class="card">

    <h5 class="card-header danger-color-dark white-text text-center py-4">
        <strong>input Data ustadz</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-sm-5">

        <!-- Form -->
        <form role="form" method="POST" class="text-center" style="color: #757575;" action="{{route('ustadz.store')}}"
            enctype="multipart/form-data">
            @csrf
            <!-- Name -->
            <div class="md-form">
                <input type="text" name="id" id="materialSubscriptionFormPasswords" class="form-control"
                    value="{{ time() }}" disabled value="id" required>
                <label for="materialSubscriptionFormPasswords">Id</label>
            </div>
            <div class="md-form">
                <input type="number" name="nip" id="materialSubscriptionFormEmail" class="form-control" autofocus required>
                <label for="materialSubscriptionFormEmail">Nip</label>
            </div>
            <div class="md-form">
                <input type="text" name="nama" id="materialSubscriptionFormEmail" class="form-control" required>
                <label for="materialSubscriptionFormEmail">Nama</label>
            </div>
            <div class="md-form">
                <input type="text" name="jabatan" id="materialSubscriptionFormEmail" class="form-control" required>
                <label for="materialSubscriptionFormEmail">Jabatan</label>
            </div>
            <div class="md-form">
                <select name="asal" class="mdb-select md-form">
                  <option disabled selected>Asal</option>
                  @foreach ($asal as $a)
                  <option value="{{$a ->id}}">{{$a ->nama}}</option>
                  @endforeach
                </select>
            </div>
            <div class="md-form">
                <input type="text" name="tempat" id="materialSubscriptionFormEmail" class="form-control" required>
                <label for="materialSubscriptionFormEmail">Tempat Lahir</label>
            </div>
            <div class="md-form">
                <input placeholder="Plih Tanggal" name="tanggal" type="date" id="date-picker-example"
                    class="form-control datepicker" required>
            </div>
            <div class="md-form">
                <textarea name="alamat" id="form7" class="md-textarea form-control" rows="3" required></textarea>
                <label for="form7">Alamat</label>
            </div>
            <div class="md-form">
                <input type="number" name="hp" id="materialSubscriptionFormEmail" class="form-control" required>
                <label for="materialSubscriptionFormEmail">Hp</label>
            </div>
            <div class="md-form">
                <input type="text" name="email" id="materialSubscriptionFormEmail" class="form-control" required>
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