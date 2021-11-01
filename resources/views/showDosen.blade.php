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
  <h2>Dosen</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIDN</th>
        <th>Alamat</th>
        <th>Kontak</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>{{$Dosen->id}}</td>
        <td>{{$Dosen->nama}}</td>
        <td>{{$Dosen->nidn}}</td>
        <td>{{$Dosen->alamat}}</td>
        <td>{{$Dosen->kontak}}</td>
    </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-bacic">back</button>
</div>

</body>
</html>