

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
<form action="{{url('profil/cari')}}" method="get">
   @csrf
   <input type="search" name="cari" id="cari" value="{{$cari}}">
   <input type="submit" value="cari" class="btn btn-primary btn-sm" type="button">    
   
</form>
<a href="{{url('profil/add')}}"class="btn btn-primary btn-sm" type="button">Tambah Data Siswa</a>

<div class="card">
   <div class=" card-body">
      <div class="table-responsive">
<table class=" table table-hover table-bordered table-striped">

<tr class="col-2 text-center">
   <th>NO</th>
   <th>NIS</th>
   <th>NAMA</th>
   <th>jk</th>
   <th>TTL</th>
   <th>ALAMAT</th>
   <th>SEKOLAH</th>
   <th>ABOUT</th>
   <th>PHOTO</th>
   <th>AKSI</th>

</tr>
 @foreach($profil as $key =>$item)
 <tr class="col-2 text-center">
      <td>{{ $key+1}}</td>
      <td>{{ $item->nis}}</td>
      <td>{{ $item->nama}}</td>
      <td>{{ $item->jk=='L'?'laki-laki':'perempuan'}}</td>
      <td>{{ $item->ttl}}</td>
      <td>{{ $item->alamat}}</td>
      <td>{{ $item->sekolah}}</td>
      <td>{{ $item->about}}</td>
      <td>
         <img src="/storage/{{ $item->foto}}" alt="" width="50">
      </td>
      <td><a href="/profil/hapus/{{ $item->nis}}>" onclick=" return window.confirm('bner ek dihapus?')" class="btn btn-success btn-sm" type="button">Hapus</a>
         <a href="profil/edit/{{ $item->nis}}" class="btn btn-primary btn-sm" type="button">Edit</a>
      </td>
      </tr>
@endforeach
</table>
   </div>
  </div>
</div>
<div class=" text-center">
   Total Siswa:{{$profil->count()}} <br>
   Total Perhalaman: {{ $profil->perpage()}}

</div>
{{$profil->links()}}
<div class="container-fluid">
   <footer class="py-3 my-3 borderd-top">
     <p class="text-center">&copy;2023 <a href="https://instagram.com/wowo_ez?igshid=zDdkNtziNTM=" target="_blank" class="fe-bold text-decoration-none">SMK YPC TASIKMALAYA</a></p>
      
   </footer>
 </div>

</body>
</html>
@endsection

















