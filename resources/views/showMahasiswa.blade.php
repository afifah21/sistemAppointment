<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Mahasiswa</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Tahun Masuk</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$Mahasiswa->id}}</td>
        <td>{{$Mahasiswa->nama}}</td>
        <td>{{$Mahasiswa->nim}}</td>
        <td>{{$Mahasiswa->alamat}}</td>
        <td>{{$Mahasiswa->tanggal_lahir}}</td>
        <td>{{$Mahasiswa->tahun_masuk}}</td> 
    </tr>
    </tbody>
  </table>
  <a href='/Mahasiswa'>
  <button type="button" class="btn btn-bacic">back</button> </a>
</div>

</body>
</html>