@extends('layouts.main')
@php
$nama=\App\Jenis::where('id',$pengaduan ->jenis_pengaduan_id)->first();
$nama2=\App\User::where('id',$pengaduan ->users_id)->first();
$ustadz =\App\Ustadz::where('id', $pengaduan ->ustadz_id)->first();

@endphp
@section('content')
<div class="row animated fadeInRight">
    <div class="col-md-12"><a href="{{url('pengaduan1')}}" class="btn btn-outline-danger btn-rounded btn-block z-depth-0 my-4 waves-effect"
            type="submit">Kembali</a></div>
    </div>  
<div class="row">
    <div class="col-md-6 animated fadeInUp">
        <div class="card">

            <h5 class="card-header danger-color-dark white-text text-center py-4">
            <strong>Detail Pengaduan</strong>
            </h5>
        
            <!--Card content-->
            <div class="card-body px-lg-5">
        
                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="#!">
                    <!-- Name -->
                    <div class="md-form mt-3">
                    <input value="{{$nama ->nama}}" type="text" id="materialSubscriptionFormPasswords" class="form-control" disabled>
                        <label for="materialSubscriptionFormPasswords">Jenis Pengaduan</label>
                    </div>
        
                    <!-- E-mai -->
                    <div  class="md-form">
                        <input value="{{$nama2 ->name}}" type="email" id="materialSubscriptionFormEmail" class="form-control" disabled>
                        <label for="materialSubscriptionFormEmail">User Pelapor</label>
                    </div>
        
                    <div  class="md-form">
                        <input value="{{$pengaduan ->tgl_pengaduan}}" type="email" id="materialSubscriptionFormEmail" class="form-control" disabled>
                        <label for="materialSubscriptionFormEmail">Tanggal</label>
                    </div>
        
                    <div class="md-form">
                        <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3" disabled>{{$pengaduan ->keterangan}}</textarea>
                        <label for="materialContactFormMessage">Keterangan</label>
                    </div>

                    @if ( $pengaduan ->status != "Diproses")
                    <div class="md-form">
                    <input value="{{$pengaduan ->status}}" type="email" id="materialSubscriptionFormEmail"
                        class="form-control" disabled>
                    <label for="materialSubscriptionFormEmail">Status</label>
                </div>
                <div class="md-form">
                    <input value="{{$ustadz ->nama}}" type="email" id="materialSubscriptionFormEmail" class="form-control"
                        disabled>
                    <label for="materialSubscriptionFormEmail">Ustadz</label>
                </div>
    
                <div class="md-form mt-4">
                    <textarea name="jawaban" id="materialContactFormMessage" class="form-control md-textarea" rows="3"
                        disabled>{{$pengaduan ->jawaban}}</textarea>
                    <label for="materialContactFormMessage">Tanggapan</label>
                </div>
    
                @else
    
                @endif
                </form>
                <!-- Form -->
        
            </div>
        
        </div>
    </div>
    <div class="col-md-6 animated fadeInRight">
        <div class="card">

            <h5 class="card-header danger-color-dark white-text text-center py-4">
            <strong>Foto Bukti</strong>
            </h5>
        
            <!--Card content-->
            <div class="card-body px-lg-5">
        
                <!-- Form -->
                @if (!empty($pengaduan ->bukti))
                <div class="md-form">
                        <img src="{{asset('img')}}/{{$pengaduan ->bukti}}" class="img-fluid img-thumbnail z-depth-2" alt="Responsive image"
                            width="500px" height="500px">
                    </div>
    
                    @else 
                    <div class="md-form">
                            <img src="{{asset('img/image_placeholder.jpg')}}" class="img-fluid img-thumbnail z-depth-2" alt="Responsive image"
                                width="500px" height="500px">
                        </div>
                @endif
        
                    
        
                </form>
                <!-- Form -->
        
            </div>
        
        </div>
    </div>
</div>

<!-- Material form subscription -->
@endsection