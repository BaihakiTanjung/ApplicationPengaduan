@extends('layouts.main')

@section('content')
<div class="container">
        <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb danger-color-dark">
                          <li class="breadcrumb-item"><a class="white-text" href="#">Home</a><i class="fas fa-angle-right mx-2"
                              aria-hidden="true"></i></li>
                          <li class=""><a class="white-text" href="#">Admin</a><i class="fas fa-angle-right mx-2"
                              aria-hidden="true"></i></li>
                          <li class="breadcrumb-item text-light active">Data Admin</li>
                        </ol>
                      </nav>
              </div>
            </div>
    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-success  btn-block"><i class="fas fa-plus mr-1"></i> Tambah</button>
            <br>  
            <button class="btn btn-primary btn-block"><i class="fas fa-print mr-1"></i> Cetak</button>
            <br>
            <button class="btn btn-primary  btn-block"><i class="fas fa-file-excel mr-1"></i> Excel</button>
        </div>
        <div class="col-md-10">
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
                    
                    <div class="table-wrapper table-responsive">
                        <!--Table-->
                        <table class="table table-hover mb-0">

                            <!--Table head-->
                            <thead>
                                <tr>
                                    <th class="th-lg">
                                        <a>First Name
                                            <i class="fas fa-sort ml-1"></i>
                                        </a>
                                    </th>
                                    <th class="th-lg">
                                        <a href="">Last Name
                                            <i class="fas fa-sort ml-1"></i>
                                        </a>
                                    </th>
                                    <th class="th-lg">
                                        <a href="">Username
                                            <i class="fas fa-sort ml-1"></i>
                                        </a>
                                    </th>
                                    <th class="th-lg">
                                        <a href="">Username
                                            <i class="fas fa-sort ml-1"></i>
                                        </a>
                                    </th>
                                    <th class="th-lg">
                                        <a href="">Username
                                            <i class="fas fa-sort ml-1"></i>
                                        </a>
                                    </th>
                                    <th class="th-lg">
                                        <a href="">Username
                                            <i class="fas fa-sort ml-1"></i>
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>Paul</td>
                                    <td>Topolski</td>
                                    <td>@P_Topolski</td>
                                    <td>Paul</td>
                                    <td>Topolski</td>
                                    <td>@P_Topolski</td>
                                </tr>
                                <tr>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
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