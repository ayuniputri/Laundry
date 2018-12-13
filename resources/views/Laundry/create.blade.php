<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
<div class="content-wrapper">
<h3>Laundry</h3>
<form method="post" action="{{url('Laundry/save')}}">

{{ csrf_field() }}


<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="nama_pelanggan">Nama Pelanggan</label> 
<input id="namapelanggan" class="form-control" type="text" name="nama_pelanggan">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="no_telp">Nomor Telpon</label> 
<input id="no_telp" class="form-control" type="text" name="no_telp">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="total_berat">Total Berat</label> 
<input id="total_berat" class="form-control" type="text" name="total_berat">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="total_harga">Total Harga</label> 
<input id="total_harga" class="form-control" type="text" name="total_harga">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="status">Status</label> 
<input id="status" class="form-control" type="text" name="status">
</div>
</div>


<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<button type="submit">masukan data</button>
</div>
</div>



</div>
</div>
</form>
</div>
</div>
</body>
</html>