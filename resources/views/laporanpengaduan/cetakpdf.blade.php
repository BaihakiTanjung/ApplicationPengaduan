@php
  $pengaduan = DB::table('pengaduan')
            ->join('jenis', 'pengaduan.jenis_pengaduan_id', '=', 'jenis.id')
            ->join('users', 'pengaduan.users_id', '=', 'users.id')
            ->select('pengaduan.*', 'pengaduan.id', 'jenis.nama AS namajenis', 'users.name AS namausers', 'pengaduan.tgl_pengaduan', 'pengaduan.keterangan', 'pengaduan.status', 'pengaduan.bukti')->get();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cetak Pengaduan PDF</title>

  {{-- <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css"> --}}

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A4 landscape }</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4 landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section>
      {{-- <table border="0" width="100%">
          <tr>
          <td width="15%" align="left"><img src="{{asset('img/ybmpln.png')}}" alt="" srcset=""></td>
          <td width="85%" align="center"><h1>PONPES TAHFIDZ PRENEUR YBM PLN</h1><h2>Cibeureum, Kec. Cisarua, Bogor, Jawa Barat 16750</h2></td>
          </tr>
          </table> --}}
          <hr>
    <center>
      <h1>Laporan Data Pengaduan</h1>
    </center>
    <hr>
  <table border="1" cellpadding="3" cellspacing="3" width="100%">
    <thead>
      <tr>
          <th>No</th>
          <th>Jenis</th>
          <th>Nama Pelapor</th>
          <th>Tanggal</th>
          <th>Keterangan</th>
          <th>Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pengaduan as $s)
    
        <tr>
          <td>
            {{$loop->iteration}}
          </td>
          <td>
            {{$s->namajenis}}
          </td>
          <td>
            {{$s->namausers}}
          </td>
          <td>
            {{$s->tgl_pengaduan}}
          </td>
          <td>
            {{$s->keterangan}}
          </td>
          <td>
            {{$s->status}}
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  </section>

</body>

</html>
