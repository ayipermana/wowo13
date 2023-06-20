

@extends("template") 
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
<style type="text/css">
.pagination li{
   float: left;
   list-style-type: none;
   margin: 10px;
}
   </style>
<form action="{{url('portofolio/cari')}}" method="get">
   @csrf
   <input type="search" name="cari" id="cari" value="{{$cari}}">
   <input type="submit" value="cari" class="btn btn-primary btn-sm" type="button">    
   
</form>
<a href="{{url('portofolio/add')}}"class="btn btn-primary btn-sm" type="button">Tambah Data Siswa</a>

<div class="card">
   <div class=" card-body">
      <div class="table-responsive">
<table class=" table table-hover table-bordered table-striped">

<tr class="col-2 text-center">
   <th>NO</th>
   <th>NAMA PORTOFOLIO</th>
   <th>KATEGORI</th>
   <th>DESKRIPSI</th>
   <th>FOTO</th>
   <th>AKSI</th>

</tr>
 @foreach($portofolio as $key =>$item)
 <tr class="col-2 text-center">
      <td>{{ $key+1}}</td>
      <td>{{ $item->nama_portofolio}}</td>
      <td>{{ $item->kategori}}</td>
      <td>{{ $item->deskripsi}}</td>
      <td>
         <img src="/storage/{{ $item->foto}}" alt="" width="50">
      </td>
      <td><a href="/portofolio/hapus/{{ $item->id}}>" onclick=" return window.confirm('bner ek dihapus?')" class="btn btn-success btn-sm" type="button">Hapus</a>
         <a href="/portofolio/edit/{{ $item->id}}" class="btn btn-primary btn-sm" type="button">Edit</a>
      </td>
      </tr>
@endforeach
</table>
   </div>
  </div>
</div>
{{-- <div class=" text-center">
   Total Siswa:{{$portofolio->count()}} <br>
   Total Perhalaman: {{ $portofolio->perpage()}}

</div> --}}
{{$portofolio->links()}}
<div class="container-fluid">
   <footer class="py-3 my-3 borderd-top">
     <p class="text-center">&copy;2023 <a href="https://instagram.com/wowo_ez?igshid=zDdkNtziNTM=" target="_blank" class="fe-bold text-decoration-none">Ayi Permana</a></p>
      
   </footer>
 </div>
 

</body>
</html>
@endsection

















