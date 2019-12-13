@extends('layouts.main')

@php
$judul = ['No','Nama Pelapor','Jenis','Tanggal Pengaduan','Tanggapan','Action'];
@endphp

@section('content')
<div class="container">
  <div class="row" >
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb danger-color-dark">
          <li class="breadcrumb-item"><a class="white-text" href="#">Home</a><i class="fas fa-angle-right mx-2"
              aria-hidden="true"></i></li>
          <li class=""><a class="white-text" href="#">User</a><i class="fas fa-angle-right mx-2" aria-hidden="true"></i>
          </li>
          <li class="breadcrumb-item text-light active">Laporan Pengaduan</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
        <a href="{{ url('pengaduanpdf') }}">
        <button class="btn btn-primary btn-block"><i class="fas fa-print mr-1"></i> Cetak</button></a>
        <br>
        <a href="{{ url('pengaduanexcel') }}">
        <button class="btn btn-primary  btn-block"><i class="fas fa-file-excel mr-1"></i> Excel</button></a>
    </div>
    <div class="col-md-10">
      <!-- Table with panel -->
      <br>
      <div class="card card-cascade narrower">

        <!--Card image-->
        <div
          class="view view-cascade gradient-card-header danger-color-dark narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

          <a href="" class="white-text mx-3">Table Laporan Pengaduan</a>

          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="fas fa-info-circle mt-0"></i>
          </button>

        </div>
        <!--/Card image-->

        <div class="px-4">

          <div class="table-wrapper table-responsive-md w-auto">
            <!--Table-->
            <table id="datatable1" class="table table-hover mb-0">

              <!--Table head-->
              <thead>
                <tr>
                  @foreach ($judul as $j)
                  <th class="">
                    <a>{{$j}}
                    </a>
                  </th>
                  @endforeach
                </tr>
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>
                @foreach ($pengaduan as $p)
                <tr>
                  <td>{{$p ->id}}</td>
                  <td>{{$p ->namausers}}</td>
                  <td>{{$p ->namajenis}}</td>
                  <td>{{$p ->tgl_pengaduan}}</td>
                  @if ($p ->status != "Diproses")
                  <td>Sudah Ditanggapi</td>
                  @else
                  <td>Belum Ditanggapi</td>
                  @endif
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger btn-sm">Action</button>
                      <button type="button"
                        class="btn btn-danger btn-sm text-white dropdown-toggle dropdown-toggle-split"
                        id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        data-reference="parent">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                        <a class="dropdown-item" href="{{route('pengaduan.show', $p ->id)}}"><i
                            class="fas fa-info mr-1"></i> Detail</a>
                        {{-- <a class="dropdown-item" href="{{route('santri.edit', $p ->id)}}"><i
                          class="fas fa-edit mr-1"></i>Edit</a> --}}
                        @if (empty($p ->jawaban))
                        <a class="dropdown-item" href="{{route('pengaduan.edit', $p ->id)}}"><i
                          class="fas fa-eye mr-1"></i> Tanggapan</a>
                        @else
                        
                        @endif
                    
                        <a href="#" class="dropdown-item hapus" link="pengaduan" hapus-id="{{$p ->id}}"><i
                            class="fas fa-trash mr-1"></i> Delete</a>
                        {{-- <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div> --}}
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
              <!--Table body-->
            </table>
            <!--Table-->
          </div>

        </div>

      </div>
      <!-- Table with panel -->
    </div>
  </div>
</div>
@endsection