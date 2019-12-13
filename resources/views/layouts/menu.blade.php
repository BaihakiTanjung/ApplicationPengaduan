<!--Double navigation-->

@php
    $totalpengaduanbelum = DB::table('pengaduan')->where('status', '=', 'Diproses')->count();
@endphp

<header>
    
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav ">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb-->
      <div class="breadcrumb-dn mr-auto">
        <p><b>Aplikasi Penggaduan Santri YBM PLN</b></p>
      </div>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        {{-- <li class="nav-item">
          <a class="nav-link"><i class="fas fa-envelope"></i> <span
              class="clearfix d-none d-sm-inline-block"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fas fa-comments"></i> <span
              class="clearfix d-none d-sm-inline-block"></span></a>
        </li>
         --}}
        @if (Auth::user()->role != "Santri")
        <li class="nav-item">
            <a href="{{url('pengaduan')}}" class="nav-link waves-effect waves-black">{{$totalpengaduanbelum}}
                 <i class="fas fa-envelope"></i>
               </a>
             </li>
        @else
        
        @endif
         
        <li class="nav-item dropdown avatar dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
         
          @if (!empty( Auth::user()->foto))
          <img src="{{asset('img')}}/{{ Auth::user()->foto}}" width="35px" height="35px" class="rounded-circle z-depth-0 mr-2"
          alt="avatar image">
          @else
          <img src="{{asset('img/user.png')}}" width="35px" height="35px" class="rounded-circle z-depth-0 mr-2"
          alt="avatar image">
          @endif
          {{-- <strong>{{Auth::user()->name}}</strong> --}}
        </a>
          <div class="dropdown-menu dropdown-danger dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="">

            @php
                $id = Auth::user()->id;
            @endphp    
            <a class="dropdown-item" href="{{route('pengguna1.edit', $id)}}">Profil</a>
            <a class="dropdown-item" href="/logout"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             Logout
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.Navbar -->
  </header>
  <!--/.Double navigation-->