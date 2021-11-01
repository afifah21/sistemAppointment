<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
  <form action="{{ url('Mahasiswa/ubah/'.$mahasiswa->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
</head>
<body>
<form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Nama:</label>
    <div class="col-sm-10">
      <input value="{{$mahasiswa->nama}}" type="nama" class="form-control" id="nama" placeholder="Nama" name="name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nim">NIM:</label>
    <div class="col-sm-10">
      <input value="{{$mahasiswa->nim}}" type="nim" class="form-control" id="nim" placeholder="NIM" name="nim">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="tanggal_lahir">Tanggal Lahir:</label>
    <div class="col-sm-10">
      <input value="{{$mahasiswa->tanggal_lahir}}" type="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="2021-02-02" name="ttl">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="tahun_masuk">Tahun Masuk:</label>
    <div class="col-sm-10">
      <input value="{{$mahasiswa->tahun_masuk}}" type="tahun_masuk" class="form-control" id="tahun_masuk" placeholder="tahun_masuk" name="tahun">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="alamat">Alamat:</label>
    <div class="col-sm-10">
      <input value="{{$mahasiswa->alamat}}" type="alamat" class="form-control" id="alamat" placeholder="" name="address">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>