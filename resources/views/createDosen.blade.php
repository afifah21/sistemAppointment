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
</head>
    <title>{{$title}}</title>
    <form action="{{ url('Dosen/tambah')}}" method="POST" enctype="multipart/form-data">
  @csrf
<body>
<form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Nama:</label>
    <div class="col-sm-10">
      <input type="nama" class="form-control" id="nama" placeholder="Nama" name="name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nidn">NIDN:</label>
    <div class="col-sm-10">
      <input type="nidn" class="form-control" id="nidn" placeholder="NIDN" name="nidn">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="kontak">Kontak:</label>
    <div class="col-sm-10">
      <input type="kontak" class="form-control" id="kontak" placeholder="kontak" name="phone">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="alamat">Alamat:</label>
    <div class="col-sm-10">
      <input type="alamat" class="form-control" id="alamat" placeholder="" name="address">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="back" class="btn btn-bacic">Back</button>
    </div>
  </div>

</form>
</body>
</html>