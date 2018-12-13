<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
<div class="content-wrapper">
<h3> * </h3>
<form method="post" action="{{ route('update') }}">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$laundry->id}}">

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Nama Pelanggan</label> 
<input type="text" name="nama_pelanggan" value="{{$laundry->nama_pelanggan}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Nomor Telpon</label> 
<input type="text" name="no_telp" value="{{$laundry->no_telp}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Total Berat</label> 
<input type="text" name="total_berat" value="{{$laundry->total_berat}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="total_harga">Total Harga</label> 
<input id="total_harga" class="form-control" type="text" name="total_harga" value="{{ $laundry->total_harga }}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Status Laundry</label> 
<input type="text" name="status" value="{{$laundry->status}}">
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