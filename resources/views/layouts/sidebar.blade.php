<!-- Sidebar navigation -->
<!-- SideNav slide-out button -->
<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav fixed" style="background-image: url('{{asset('/img/sidenav1.png')}}');">
  <ul class="custom-scrollbar">
    <!-- Logo -->
    <li>
      <div class="logo-wrapper waves-light">
        <a href="#"><img src="{{asset('img/logo.png')}}" class="img-fluid flex-center"></a>
      </div>
    </li>
    <!--/. Logo -->
    <!--Search Form-->
    <li>
      {{-- <form class="search-form" role="search">
        <div class="form-group md-form mt-0 pt-1 waves-light">
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </form> --}}
    </li>
    <!--/.Search Form-->
    <!-- Side navigation links -->
    <li>
      <hr class="white">
      @auth

      <ul class="collapsible collapsible-accordion">
        <li><a class="collapsible-header"></i> Pengguna</a>
        </li>
        <li><a href="{{url('beranda')}}" class="collapsible-header waves-effect arrow-r"><i class="fas fa-home"></i>
            Beranda</a>
        </li>
        <li><a href="{{url('carapengunaan')}}" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-book"></i> Cara Penggunaan</a>
        </li>
        <li><a href="{{route('pengaduan.create')}}" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-edit"></i>Form Pengaduan</a>
        </li>
        <li><a href="{{url('pengaduan1')}}" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-envelope"></i>Pengaduan Saya</a>
        </li>

        @if ( Auth::user()->role != "Santri")
        <li><a class="collapsible-header"></i> Administrator</a>
        <li><a href="{{url('pengaduan')}}" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-envelope"></i>Laporan Pengaduan</a>
        </li>

        @endif
        @if ( Auth::user()->role != "Santri")
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-user"></i> Data Pengguna
            <i class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              @if ( Auth::user()->role == "Admin")
              <li><a href="{{url('pengguna')}}" class="waves-effect">User</a>
              </li> 
              @endif     
              <li><a href="{{url('santri')}}" class="waves-effect">Santri</a>
        </li>
        <li><a href="{{url('ustadz')}}" class="waves-effect">Ustadz</a>
        </li>
      </ul>
</div>
</li>
@endif
@if ( Auth::user()->role != "Santri")
<li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-database"></i> Data Master
    <i class="fas fa-angle-down rotate-icon"></i></a>
  <div class="collapsible-body">
    <ul>
      <li><a href="{{url('asal')}}" class="waves-effect">Asal</a>
      </li>
      <li><a href="{{url('kategori')}}" class="waves-effect">Kategori</a>
      </li>
      <li><a href="{{url('jenis')}}" class="waves-effect">Jenis</a>
      </li>
    </ul>
  </div>
</li>
@endif
<li><a class="collapsible-header"></i> Semua Pengguna</a>

<li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-eye"></i> Tentang Aplikasi<i
      class="fas fa-angle-down rotate-icon"></i></a>
  <div class="collapsible-body">
    <ul>
      <li><a href="{{url('createdby')}}" class="waves-effect">Tim Aplikasi</a>
      </li>
    </ul>
  </div>
</li>
<li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-envelope"></i> Contact<i
      class="fas fa-angle-down rotate-icon"></i></a>
  <div class="collapsible-body">
    <ul>
    <li><a href="{{url('contact')}}" class="waves-effect">Hubungi Kami</a>
      </li>
    </ul>
  </div>
</li>
@endauth
</ul>
</li>
<!--/. Side navigation links -->
</ul>
<div class="sidenav-bg mask-strong"></div>
</div>
<!--/. Sidebar navigation -->
<!--/. Sidebar navigation -->