@extends('layouts.main')

@php
$judul = array('No','Nis','Nama','TTL','Action');
@endphp

@section('content')
<div class="container">
    <div class="row animated fadeInRight">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb danger-color-dark">
                  <li class="breadcrumb-item"><a class="white-text" href="#">Home</a><i class="fas fa-angle-right mx-2"
                      aria-hidden="true"></i></li>
                  <li class=""><a class="white-text" href="#">Admin</a><i class="fas fa-angle-right mx-2"
                      aria-hidden="true"></i></li>
                  <li class="breadcrumb-item text-light active">Data Santri</li>
                </ol>
              </nav>
      </div>
    </div>
  <div class="row">
    <div class="col-md-2 animated fadeInLeft delay-1s">
      <a href="{{route('santri.create')}}" class="btn btn-success btn-block"><i class="fas fa-plus mr-1"></i> Tambah</a>
      <br>
      <br>
      <a href="{{url('santripdf')}}" class="btn btn-primary btn-block"><i class="fas fa-print mr-1"></i> Cetak</a>
      <br>
      <br>
      <a href="{{url('santriexcel')}}" class="btn btn-primary  btn-block"><i class="fas fa-file-excel mr-1"></i>
        Excel</a>
    </div>
    <div class="col-md-10 animated fadeInUp delay-1s" >
      <!-- Table with panel -->
      <br>
      <div class="card card-cascade narrower">

        <!--Card image-->
        <div
          class="view view-cascade gradient-card-header danger-color-dark narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

          <a href="" class="white-text mx-3">Table Santri</a>

          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="fas fa-info-circle mt-0"></i>
          </button>

        </div>
        <!--/Card image-->

        <div class="px-4">

          <div class="table-wrapper table-responsive">
            <!--Table-->
            <table id="datatable" class="table table-hover mb-0">

              <!--Table head-->
              <thead>
                <tr>
                  @foreach ($judul as $j)
                  <th class="th-md">
                    {{$j}}
                  </th>
                  @endforeach
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>
                @foreach ($santri as $s)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  {{-- <td>{{ $s ->id }}</td> --}}
                  <td>{{ $s ->nis }}</td>
                  <td>{{ $s ->nama }}</td>
                  <td>{{ $s ->tmp_lahir }}, {{ $s ->tgl_lahir }} </td>
                  {{-- <td>{{ $s ->asal }}</td> --}}
                  {{-- <td>{{ $s ->kelas }}</td> --}}
                  {{-- <td>{{ $s ->alamat }}</td> --}}
                  {{-- <td>{{ $s ->hp }}</td> --}}
                  {{-- <td>{{ $s ->email }}</td> --}}
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger btn-sm">Action</button>
                      <button type="button" class="btn btn-danger btn-sm text-white dropdown-toggle dropdown-toggle-split"
                        id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        data-reference="parent">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item modalPoll-1" href="{{route('santri.show', $s->id)}}"><i class="fas fa-eye mr-1"></i>Detail</a>
                        <a class="dropdown-item" href="{{route('santri.edit', $s ->id)}}"><i class="fas fa-edit mr-1"></i>Edit</a>
                        <a href="#" class="dropdown-item hapus" link="santri" hapus-id="{{$s ->id}}"><i class="fas fa-trash mr-1"></i>Delete</a>
                        {{-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div> --}}
                    </div>
                  </td>
          </div>

          {{-- <a href="{{route('santri.edit', $s ->id)}}" class="btn btn-primary btn-sm"><i
            class="fas fa-eye mr-1"></i> Detail</a>
          <a href="{{route('santri.edit', $s ->id)}}" class="btn btn-yellow btn-sm"><i class="fas fa-edit mr-1"></i>
            Edit</a>
          <a href="#" class="btn btn-red btn-sm hapus" link="santri" hapus-id="{{$s ->id}}"><i
              class="fas fa-trash mr-1"></i>
            Delete</a> --}}
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
@endsection