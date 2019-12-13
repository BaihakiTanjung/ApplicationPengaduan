@extends('layouts.main')

@php
    $judul = array('No','Id','Nama Asal','Action');
@endphp

@section('content')
<div class="container">
    <div class="row  animated fadeInRight">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb danger-color-dark">
                  <li class="breadcrumb-item"><a class="white-text" href="#">Home</a><i class="fas fa-angle-right mx-2"
                      aria-hidden="true"></i></li>
                  <li class=""><a class="white-text" href="#">Master</a><i class="fas fa-angle-right mx-2"
                      aria-hidden="true"></i></li>
                      <li class=""><a class="white-text" href="#">Admin</a><i class="fas fa-angle-right mx-2"
                        aria-hidden="true"></i></li>
                  <li class="breadcrumb-item text-light active">Data Jenis</li>
                </ol>
              </nav>
      </div>
    </div>
  <div class="row">
<!-- Table with panel -->
<div class="col-md-2  animated fadeInLeft delay-1s">
  <a href="{{route('jenis.create')}}" class="btn btn-success btn-block"><i class="fas fa-plus mr-1"></i> Tambah</a>
  <br>
  <br>
  <a href="{{url('jenispdf')}}" class="btn btn-primary btn-block"><i class="fas fa-print mr-1"></i> Cetak</a>
  <br>
  <br>
  <a href="{{url('jenisexcel')}}" class="btn btn-primary  btn-block"><i class="fas fa-file-excel mr-1"></i> Excel</a>
</div>
<div class="col-md-10  animated fadeInUp delay-1s">
<br>
<div class="card card-cascade narrower">
<!-- Table with panel -->

  <!--Card image-->
  <div
    class="view view-cascade gradient-card-header danger-color-dark narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">



    <a href="" class="white-text mx-3">Table Data Jenis</a>

    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-info-circle mt-0"></i>
      </button>

  </div>
  <!--/Card image-->

  <div class="px-4">

    <div class="table-responsive table-wrapper">
      <!--Table-->
      <table id="datatable" class="table table-hover mb-0 data">

        <!--Table head-->
        <thead>
          <tr>
            @foreach ($judul as $j)   
            <th class="th-lg">
              {{$j}}
            </th>
            @endforeach
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
          @foreach ($jenis as $j)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$j->id}}</td>
            <td>{{$j ->nama}}</td>
            <td>
                <a href="{{route('jenis.edit', $j ->id)}}" class="btn btn-yellow btn-sm"><i class="fas fa-edit mr-1"></i> Edit</a>
                <a href="#" class="btn btn-red btn-sm hapus" link="jenis" hapus-id="{{$j ->id}}"><i class="fas fa-trash mr-1"></i>
                  Delete</a>
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
@endsection