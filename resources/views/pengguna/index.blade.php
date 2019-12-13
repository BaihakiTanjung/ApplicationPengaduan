@extends('layouts.main')

@php
    $judul = ['Id','Nama','Nisn','Role','Email','Action'];
@endphp

@section('content')
<div class="container">
    <div class="row  animated fadeInRight">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb danger-color-dark">
                  <li class="breadcrumb-item"><a class="white-text" href="#">Home</a><i class="fas fa-angle-right mx-2"
                      aria-hidden="true"></i></li>
                  <li class=""><a class="white-text" href="#">Admin</a><i class="fas fa-angle-right mx-2"
                      aria-hidden="true"></i></li>
                  <li class="breadcrumb-item text-light active">Data Pengguna</li>
                </ol>
              </nav>
      </div>
    </div>
  <div class="row animated fadeInUp delay-1s">
    <div class="col-md-12">
      <!-- Table with panel -->
      <br>
      <div class="card card-cascade narrower">

        <!--Card image-->
        <div
          class="view view-cascade gradient-card-header danger-color-dark narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

          <a href="" class="white-text mx-3">Table Pengaduan</a>

          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="fas fa-info-circle mt-0"></i>
          </button>

        </div>
        <!--/Card image-->

        <div class="px-4">

          <div class="table-wrapper table-responsive w-auto">
            <!--Table-->
            <table id="datatable" class="table table-hover mb-0 ">

              <!--Table head-->
              <thead>
                <tr>
                  @foreach ($judul as $j)
                      
                  
                  <th class="th-md">
                    <a>{{$j}}
                    </a>
                  </th>
                  @endforeach
                </tr>
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>   
                @foreach ($pengguna as $u)
                    
                
                <tr>
                  <td>{{$u ->id}}</td>
                  <td>{{$u ->name}}</td>
                  <td>{{$u ->nisn}}</td>
                  <td>{{$u ->role}}</td>
                  <td>{{$u ->email}}</td>
                {{-- <td><img src="{{'img'}}/{{$u ->foto}}" height="30px" width="30px" alt="" srcset=""></td> --}}
                  <td>
                  <div class="btn-group">
                      <button type="button" class="btn btn-danger btn-sm">Action</button>
                      <button type="button" class="btn btn-danger btn-sm text-white dropdown-toggle dropdown-toggle-split"
                        id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        data-reference="parent">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                        <a class="dropdown-item" href="{{ route('pengguna.show', $u ->id) }}" value=""><i class="fas fa-eye mr-1"></i>Detail</a>
                        <a class="dropdown-item" href="{{route('pengguna.edit', $u ->id)}}"><i class="fas fa-edit mr-1"></i>Ganti Role</a>
                        <a href="#" class="dropdown-item hapus" link="pengguna" hapus-id="{{$u ->id}}"><i class="fas fa-trash mr-1"></i>Delete</a>
                        {{-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div> --}}
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