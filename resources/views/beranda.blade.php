@extends('layouts.main')

@php
$totalpengaduan = DB::table('pengaduan')->count();
$totaluser = DB::table('users')->count();
$totalpengaduansudah = DB::table('pengaduan')->where('status', '!=', 'Diproses')->count();
$totalustadz = DB::table('users')->where('role', '=', 'ustadz')->count();
@endphp

@section('content')
<div class="container">
  <div class="row  animated fadeInRight">
    <div class="col-md mb-4">
      <div class="card-header" role="tab" id="headingOne1" style="background-color:#BE0A31;">
        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
          aria-controls="collapseOne1">
          <h5 class="mb-0 text-white m-1">
            <b>Informasi Aplikasi </b>

          </h5>
        </a>
      </div>
    </div>
  </div>
  <div class="row  wow fadeInRight delay-1s">
    <div class="col-md-12">
      <canvas id="barChart" height="105px"></canvas>
    </div>
    </div>
    <hr>
  </div>
  <div class="row">
    <div class="col-md-4 wow fadeInUp delay-1s">
      <div class="card mb-2">

        <!-- Card Data -->
        <div class="row mt-3">

          <div class="col-md-5 col-5 text-left pl-4">

            <a type="button" class="btn-floating btn-lg danger-color ml-4"><i class="fas fa-edit"
                aria-hidden="true"></i></a>

          </div>

          <div class="col-md-7 col-7 text-right pr-5">
            <h5 class="ml-4 mt-4 mb-2 font-weight-bold">{{$totalpengaduan}} </h5>
            <p class="font-small grey-text">Total Pengaduan</p>
          </div>

        </div>
        <!-- Card Data -->

        <!-- Card content -->
        <div class="row my-3">

          <div class="col-md-7 col-7 text-left pl-4">

            {{-- <p class="font-small font-up ml-4 font-weight-bold">Last month</p> --}}

          </div>

          <div class="col-md-5 col-5 text-right pr-5">

            {{-- <p class="font-small grey-text">145,567</p> --}}
          </div>

        </div>
        <!-- Card content -->

      </div>
    </div>
    <div class="col-md-4 wow fadeInUp delay-2s">
      <div class="card mb-2">

        <!-- Card Data -->
        <div class="row mt-3">

          <div class="col-md-5 col-5 text-left pl-4">

            <a type="button" class="btn-floating btn-lg danger-color ml-4"><i class="fas fa-user"
                aria-hidden="true"></i></a>

          </div>

          <div class="col-md-7 col-7 text-right pr-5">

            <h5 class="ml-4 mt-4 mb-2 font-weight-bold">{{$totaluser}} </h5>

            <p class="font-small grey-text">Total User</p>
          </div>

        </div>
        <!-- Card Data -->

        <!-- Card content -->
        <div class="row my-3">

          <div class="col-md-7 col-7 text-left pl-4">

            {{-- <p class="font-small font-up ml-4 font-weight-bold">Last month</p> --}}

          </div>

          <div class="col-md-5 col-5 text-right pr-5">

            {{-- <p class="font-small grey-text">145,567</p> --}}
          </div>

        </div>
        <!-- Card content -->

      </div>
    </div>
    <div class="col-md-4 wow fadeInUp delay-3s">
      <div class="card mb-2">

        <!-- Card Data -->
        <div class="row mt-3">

          <div class="col-md-5 col-5 text-left pl-4">

            <a type="button" class="btn-floating btn-lg danger-color ml-4"><i class="fas fa-user-graduate"
                aria-hidden="true"></i></a>

          </div>

          <div class="col-md-7 col-7 text-right pr-5">

            <h5 class="ml-4 mt-4 mb-2 font-weight-bold">{{$totalustadz}} </h5>

            <p class="font-small grey-text">Total Ustadz</p>
          </div>

        </div>
        <!-- Card Data -->

        <!-- Card content -->
        <div class="row my-3">

          <div class="col-md-7 col-7 text-left pl-4">

            {{-- <p class="font-small font-up ml-4 font-weight-bold">Last month</p> --}}

          </div>

          <div class="col-md-5 col-5 text-right pr-5">

            {{-- <p class="font-small grey-text">145,567</p> --}}
          </div>

        </div>
        <!-- Card content -->

      </div>
    </div>
  </div>
  <hr>
  <div class="row  wow fadeInRight">
    <div class="col-sm-12">
      <!--Accordion wrapper-->
      <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card">

          <!-- Card header -->
          <div class="card-header" role="tab" id="headingOne1" style="background-color:#BE0A31;">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
              aria-controls="collapseOne1">
              <h5 class="mb-0 text-white">
                <b>Program Kerja YBM PLN </b><i class="fas fa-angle-down rotate-icon"></i>
              </h5>
            </a>
          </div>

          <!-- Card body -->
          <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
            data-parent="#accordionEx">
            <div class="card-body">
              <!--Carousel Wrapper-->
              <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-2" data-slide-to="1"></li>
                  <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="view">
                      <img class="d-block w-100"
                        src="https://ybmpln.org/uploads/images/posts/thumbs/5a8a518731-600x300.png" alt="First slide">
                      <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                      {{-- <h3 class="h3-responsive">Light mask</h3>
              <p>First text</p> --}}
                    </div>
                  </div>
                  <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                      <img class="d-block w-100"
                        src="https://ybmpln.org/uploads/images/posts/thumbs/16d38a1b6b-600x300.png" alt="Second slide">
                      <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                      {{-- <h3 class="h3-responsive">Strong mask</h3>
              <p>Secondary text</p> --}}
                    </div>
                  </div>
                  <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                      <img class="d-block w-100"
                        src="https://ybmpln.org/uploads/images/posts/thumbs/ebca204ac1-600x300.png" alt="Third slide">
                      <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                      {{-- <h3 class="h3-responsive">Slight mask</h3>
              <p>Third text</p> --}}
                    </div>
                  </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
              </div>
              <!--/.Carousel Wrapper-->
            </div>
          </div>
        </div>

      </div>
      <!-- Accordion card -->


    </div>
  </div>
  <div class="row">
    <div class="col-sm-7 wow fadeInRight">
      <br>
      <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card">

          <!-- Card header -->
          <div class="card-header" role="ta" id="headingOne1" style="background-color:#BE0A31;">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
              aria-controls="collapseOne1">
              <h5 class="mb-0 text-white">
                <b>Bantuan YBM PLN </b><i class="fas fa-angle-down rotate-icon"></i>
              </h5>
            </a>
          </div>

          <!-- Card body -->
          <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
            data-parent="#accordionEx">
            <div class="card-body">
              <!--Carousel Wrapper-->
              <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                  <a class="btn-floating btn-danger" href="#multi-item-example" data-slide="prev"><i
                      class="fas fa-chevron-left"></i></a>
                  <a class="btn-floating btn-danger" href="#multi-item-example" data-slide="next"><i
                      class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                  <li data-target="#multi-item-example" data-slide-to="1"></li>
                  <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                  <!--First slide-->
                  <div class="carousel-item active">

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://ybmpln.org/uploads/images/posts/thumbs/f21930ae13-730x400.jpeg"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">MODAL USAHA KEPADA MUSTAHIK</h5>
                          <p class="card-text">Surabaya (09/10), Telah dilakukan penyaluran zakat, kali ini penerima
                            manfaat mendapatkan pemberdayaan ekonomi berupa bantuan modal usaha kacamata dan parfum.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://ybmpln.org/uploads/images/posts/thumbs/4fde40d6aa-730x400.jpeg"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">PEMBIAYAAN RUMAH SAKIT KORBAN KECELAKAAN DHUAFA</h5>
                          <p class="card-text">Bangil (08/10), YBM PLN memberikan bantuan pembiayaan rumah sakit korban
                            kecelakaan dhuafa, dalam Program kesehatan YBM PLN ini penerima manfaat yaitu Asnaf miskin
                            alias dhuafa atas nama Sochib Hidayat.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://ybmpln.org/uploads/images/posts/thumbs/0ca98e1f12-730x400.jpeg"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">WISATA EDUKASI UNTUK ANAK YATIM DAN DHUAFA</h5>
                          <p class="card-text">Jakarta (7/10), Yayasan Baitul Mal PLN bekerjasama dengan Badan Eksekutif
                            Mahasiswa (BEM) KBM STEI SEBI mengadakan Program SUMRINGAH (Senyum Riang Anak Hebat) yang
                            mengajak 100 anak Yatim dan dhuafa wisata edukasi ke Kidzania Jakarta.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!--/.First slide-->

                  <!--Second slide-->
                  <div class="carousel-item">

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">INDONESIA BERCAHAYA PERSEMBAHAN YBM PLN UNTUK NEGERI</h5>
                          <p class="card-text">Samarinda - Kaltim (6/10) - Yayasan Baitul Maal PLN (YBM PLN) sebagai
                            lembaga amil zakat berbasis korporat bekerjasama dgn Yayasan Askar Kauny dan DKM Baitul
                            Mutaqien Islamic Center Samarinda.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://ybmpln.org/uploads/images/posts/thumbs/11ea10acfa-730x400.JPG"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">LIBUR BERBAGI BERSAMA ANAK ANAK DHUAFA</h5>
                          <p class="card-text">Jakarta (5/10)- Dalam rangka berbagi kebahagiaan dan menjejak manfaat
                            untuk anak-anak dhuafa, YBM PLN mengadakan acara Libur Berbagi bersama adik-adik dari 9
                            sekolah/yayasan binaan YBM PLN yang tergabung dalam Forum Komunikasi Mitra (Forkomit). Acara
                            dilangsungkan di masjid Al-Hidayah Gandaria City.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://ybmpln.org/uploads/images/posts/thumbs/c4c7c4b7a6-730x400.jpg"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">YBM PLN PEDULI TERHADAP TEMPAT TINGGAL JANDA TUA DHUAFA</h5>
                          <p class="card-text">melalui amil nya menjejakkan manfaat lewat program sosial kemanusiaan YBM
                            PLN yakni bantuan renovasi atap rumah ibu farida (61th) yang berstatus sebagai janda tua
                            yang tergolong dalam asnaf miskin.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!--/.Second slide-->

                  <!--Third slide-->
                  <div class="carousel-item">

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://ybmpln.org/uploads/images/posts/thumbs/65a085dd4b-730x400.jpg"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">YBM PLN RESMIKAN PESANTREN TAHFIDZ DAN ENTREPRENEUR DI BOGOR</h5>
                          <p class="card-text">Cisarua (2/10)- YBM PLN meresmikan Pesantren Tahfidz dan Entrepreneur di
                            Cisarua Bogor. Hadir dalam acara ini beberapa Direksi PLN yaitu Direktur Keuangan yang
                            sekaligus Pembina YBM PLN Sarwono Sudarto, Direktur HCM Muhamad Ali, dan Direktur Bisnis
                            Regional Jawa Bagian Tengah Amir Rosidin.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://ybmpln.org/uploads/images/posts/thumbs/d800fbeab6-730x400.JPG"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">TINGKATKAN EKONOMI MASYARAKAT DENGAN BUDIDAYA KOPI LIBERIKA MERANTI
                          </h5>
                          <p class="card-text">Kepulauan Meranti adalah salah satu kabupaten di provinsi Riau, dengan
                            ibu kotanya adalah Selatpanjang. Di tanah sumatera, tepatnya di salah satu pulau di
                            kabupaten meranti terdapat kopi unik yang tak kalah dari kopi-kopi yang ada di Indonesia.
                          </p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://ybmpln.org/uploads/images/posts/thumbs/7389f9fa98-730x400.jpeg"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">YBM PLN ADAKAN PELATIHAN SERVICE AC UNTUK KEMANDIRIAN DHUAFA</h5>
                          <p class="card-text">Tanggerang (30/9) YBM PLN Bersama Master Ac memberikan pelatihan teknisi
                            Air conditioning (AC) untuk 30 peserta. Pelatihan ini merupakan program pemberdayaan ekonomi
                            untuk membantu masyarakat dalam bentuk skill dan bantuan modal peralatan service.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!--/.Third slide-->

                </div>
                <!--/.Slides-->

              </div>
              <!--/.Carousel Wrapper-->

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 wow fadeInUp">
      <!-- Card -->
      <br>
      <ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab"
            aria-controls="home-md" aria-selected="true">Struktur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab"
            aria-controls="profile-md" aria-selected="false">Visi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#contact-md" role="tab"
            aria-controls="contact-md" aria-selected="false">Misi</a>
        </li>
      </ul>
      <div class="tab-content card pt-5" id="myTabContentMD">
        <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
          <h5 class="text-center h5-responsive">Struktur Organisasi YBM PLN</h5>
          <img src="https://ybmpln.org/uploads/filemanager/images/struktur%20ybmpln%282%29.png"
            alt="Struktur Organisasi" class="img-fluid pb-3" alt="Responsive image">
        </div>
        <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
          <ul>
            <li>Menjadi lembaga pengelola ZIS (zakat, infak, shadaqoh) terdepan yang amanah, profesional dan transparan
              di lingkungan PT PLN (Persero) dalam memberdayakan mustahik menjadi muzakki.</li>
          </ul>
        </div>
        <div class="tab-pane fade" id="contact-md" role="tabpanel" aria-labelledby="contact-tab-md">
          <ul>
            <li>Melaksanakan pengelolaan zakat infaq, shodaqoh dan wakaf secara amanah, profesional dan transparan
              sesuai tuntunan syari’ah.</li>
            <li>Mengoptimalkan potensi zakat infaq, shodaqoh dan wakaf pegawai PT PLN (Persero) yang beragama Islam atau
              muzakki lainnya.</li>
            <li>Memberikan informasi, pembelajaran, pemberdayaan dan pembinaan kepada mustahik dan masyarakat luas.</li>
            <li>Memberdayakan mustahik menjadi muzakki.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div>
    @endsection