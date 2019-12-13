@extends('layouts.main')

@php
$asal = App\Asal::all();
$kategori = App\kategori::all();
@endphp

@section('content')
<!-- Material form subscription -->
<div class="card">

    <h5 class="card-header danger-color-dark white-text text-center py-4">
        <strong>Edit Data Ustadz</strong>
    </h5>
    @foreach ($ustadz as $s)
    <!--Card content-->
    <div class="card-body px-sm-5">

        <!-- Form -->
        <form role="form" method="POST" class="text-center" style="color: #757575;" enctype="multipart/form-data"
            action="{{route('ustadz.update', $s ->id)}}">
            @method('put')
            @csrf
            <!-- Name -->
            <div class="md-form">
                <input type="text" name="id" id="materialSubscriptionFormPasswords" class="form-control"
                    value="{{($s ->id)}}" disabled>
                <label for="materialSubscriptionFormPasswords">ID</label>
            </div>

            <!-- E-mai -->
            <div class="md-form">
                <input type="text" name="nip" id="materialSubscriptionFormEmail" class="form-control"
                    value="{{($s ->nip)}}" autofocus>
                <label for="materialSubscriptionFormEmail">Nip</label>
            </div>

            <!-- E-mai -->
            <div class="md-form">
                <input type="text" name="nama" id="materialSubscriptionFormEmail" class="form-control"
                    value="{{($s ->nama)}}">
                <label for="materialSubscriptionFormEmail">Nama</label>
            </div>
            <div class="md-form">
                <input type="text" name="jabatan" id="materialSubscriptionFormEmail" class="form-control"
                    value="{{($s ->jabatan)}}">
                <label for="materialSubscriptionFormEmail">Jabatan</label>
            </div>
            <div class="md-form">
                <select name="asal" class="mdb-select md-form colorful-select dropdown-danger">
                    <option disabled selected>Asal</option>
                    @foreach ($asal as $a)
                    @php
                    $sel = ($s->asal_id == $a['id']) ? 'selected' : '';
                    @endphp
                    <option value="{{$a ->id}}" {{$sel}} >{{$a ->nama}}</option>
                    @endforeach
                </select>
            </div>
                <!-- E-mai -->
                <div class="md-form">
                    <input type="text" name="tempat" id="materialSubscriptionFormEmail" class="form-control"
                        value="{{($s ->tmp_lahir)}}">
                    <label for="materialSubscriptionFormEmail">Tempat Lahir</label>
                </div>

                <div class="md-form">
                    <input placeholder="Plih Tanggal" name="tanggal" type="date" value="{{$s->tgl_lahir}}"
                        id="date-picker-example" data-value="[2015/6/1]" class="form-control datepicker">
                </div>

                <div class="md-form">
                <textarea name="alamat" id="form7" class="md-textarea form-control" rows="3" required>{{$s ->alamat}}</textarea>
                    <label for="form7">Alamat</label>
                </div>

                <div class="md-form">
                    <input type="text" name="hp" id="materialSubscriptionFormEmail" class="form-control"
                        value="{{($s ->hp)}}">
                    <label for="materialSubscriptionFormEmail">Hp</label>
                </div>

                <div class="md-form">
                    <input type="email" name="email" id="materialSubscriptionFormEmail" class="form-control"
                        value="{{($s ->email)}}">
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
    @endforeach
</div>
<!-- Material form subscription -->
@endsection