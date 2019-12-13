@php
    $ar_ustadz = DB::table('ustadz')
			->join('asal', 'ustadz.asal_id', '=', 'asal.id')
			->select('ustadz.*', 'ustadz.id', 'ustadz.nip', 'ustadz.nama','ustadz.jabatan', 'asal.nama AS asal', 'ustadz.foto')->get();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cetak Ustadz PDF</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A4 landscape }</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4 landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="">
      {{-- <table border="0" width="100%">
          <tr>
          <td width="15%" align="left"><img src="{{asset('img/ybmpln.png')}}" alt="" srcset=""></td>
          <td width="85%" align="center"><h1>PONPES TAHFIDZ PRENEUR YBM PLN</h1><h2>Cibeureum, Kec. Cisarua, Bogor, Jawa Barat 16750</h2></td>
          </tr>
          </table> --}}
          <hr>
    <center>
      <h1>Laporan Data Ustadz</h1>
    </center>
    <hr>
  <table border="1" cellpadding="3" cellspacing="3" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Id</th>
        <th>Nip</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Asal</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Hp</th>
        <th>Email</th>
        {{-- <th>Action</th> --}}
      </tr>
    </thead>
    <tbody>
      @foreach ($ar_ustadz as $s)
      <tr>
        <td>
          {{$loop->iteration}}
        </td>
        <td>
          {{$s->id}}
        </td>
        <td>
          {{$s->nip}}
        </td>
        <td>
          {{$s->nama}}
        </td>
        <td>
          {{$s->jabatan}}
        </td>
        <td>
          {{$s->asal}}
        </td>
        <td>
          {{$s->tmp_lahir}}
        </td>
        <td>
          {{$s->tgl_lahir}}
        </td>
        <td>
          {{$s->alamat}}
        </td>
        <td>
          {{$s->hp}}
        </td>
        <td>
          {{$s->email}}
        </td>
        {{-- <td>
          {{$s->foto}}
        </td> --}}
      </tr>
      @endforeach
    </tbody>
  </table>

  </section>

</body>

</html>