<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Laundry </title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="content-wrapper">
<div class="container">
<style>
	table{
		font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	}

	table,td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
</style>
<section class="content">
<div class="box">
<div class="box-header">
<h3 class="box-tittle">Daftar Laundry-an</h3>



<table class="table table-stripped">

	<thead>
 		<tr>
			<th>nama pelanggan</th>
			<th>no telp</th>
			<th>total berat</th>
			<th>total harga</th>
			<th>status</th>
			<th>Aksi</th>
		</tr>
		</thead>
		@foreach($laundry as $key)
	<tbody>
		<tr>
			<td>{{$key->nama_pelanggan}}</td>
			<td>{{$key->no_telp}}</td>
			<td>{{$key->total_berat}}</td>
			<td>{{$key->total_harga}}</td>
			<td>{{$key->status}}</td>
			<td>
			 	@if(Auth::user()->role == "1")
				<a href="{{route('editLaundry',[$key->id])}}"><button>edit</button>
				<span class="sr-only">(current)</span>
				</a>
				@endif

				@if(Auth::user()->role == "1")
				<a href="{{route('deleteLaundry',[$key->id])}}" onclick="return confirm('hapus?')"><button>delete</button>
				<span class="sr-only">(current)</span>
				</a>
				@endif

				@if(Auth::user()->role == "1")
	<span class="sr-only">(current)</span>
	</a>
	@endif
			</td>
		</tr>
			@endforeach
	</tbody>
</table>
	</div>
	@if(Auth::user()->role == "1")
	<a href="{{url('Laundry/create')}}"><button>tambah</button>
	<span class="sr-only">(current)</span>
	</a>
	@endif
	
<a href="{{ route('pdfall',[$key->id])}}" style="margin-left:700px"><button class="btn btn-success">Print</button></a>
<a href="{{url('home')}}"><button>Home</button></a>
	</div>
	</section>
	</div>

	</div>

</body>
</html>