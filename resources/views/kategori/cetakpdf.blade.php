<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
	<center>
		<h1>Laporan Data Kategori</h1>
	</center>
  <table border="1" cellpadding="10" cellspacing="5" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Id</th>
        <th>Nama</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kategori as $s)
      <tr>
        <td>
          {{$loop->iteration}}
        </td>
        <td>
          {{$s->id}}
        </td>
        <td>
          {{$s->nama}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>