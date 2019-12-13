@php
$santri = DB::table('santri')
->join('kategori', 'santri.kategori_id', '=', 'kategori.id')
->join('asal', 'santri.asal_id', '=', 'asal.id')
->select('santri.*', 'santri.id', 'santri.nis', 'santri.nama', 'asal.nama AS asal', 'kategori.nama AS kategori',
'santri.kelas', 'santri.foto')->get();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cetak Santri PDF</title>

  <!-- Normalize or reset CSS with your favorite library -->
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"> --}}

  <!-- Load paper.css for happy printing -->
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css"> --}}

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
      <h1>Laporan Data Santri</h1>
    </center>
    <hr>
  <table border="1" cellpadding="3" cellspacing="3" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Id</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Asal</th>
        <th>Kategori</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Hp</th>
        <th>Email</th>
        {{-- <th>Foto</th> --}}
        {{-- <th>Action</th> --}}
      </tr>
    </thead>
    <tbody>
      @foreach ($santri as $s)
      <tr>
        <td>
          {{$loop->iteration}}
        </td>
        <td>
          {{$s->id}}
        </td>
        <td>
          {{$s->nis}}
        </td>
        <td>
          {{$s->nama}}
        </td>
        <td>
          {{$s->asal}}
        </td>
        <td>
          {{$s->kategori}}
        </td>
        <td>
          {{$s->tmp_lahir}}
        </td>
        <td>
          {{$s->tgl_lahir}}
        </td>
        <td>
          {{$s->kelas}}
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