<style type="text/css">
.pagination li{
    float: left;
    list-style-type: none;
    margin: 5px;
}

</style>
@extends('navbar2')
@section('navbar2')

<form action="{{url('admin/cari')}}" method="get">
    @csrf
    <input type="search" name="cari" id="cari" value="{{$cari}}">
    <input type="submit" value="cari" class="btn btn-primary btn-sm" type="button">    
    
 </form>
<a href="{{url('admin/add')}}"class="btn btn-primary btn-sm" type="button">Tambah Admin</a>
 
<div class="card">
    <div class=" card-body">
       <div class="table-responsive">
 <table class=" table table-hover table-bordered table-striped">

    <tr class="col-2 text-center">
        <th>No</th>
        <th>Type</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>No Tlp</th>
        <th>Alamat</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    @foreach ($admin as $key => $item )
    <tr class="col-2 text-center">
        <td>{{ $key+1}}</td>
        <td>{{ $item->type_user}}</td>
        <td>{{ $item->nama}}</td>
        <td>{{ $item->email}}</td>
        <td>{{ $item->password}}</td>
        <td>{{ $item->no_tlp}}</td>
        <td>{{ $item->alamat}}</td>
        <td>
           <img src="/storage/{{ $item->foto}}" alt="" width="50">
           <td><a href="admin/hapus/{{ $item->id}}>" onclick=" return window.confirm('bner ek dihapus?')" class="btn btn-success btn-sm" type="button">Hapus</a>
            <a href="admin/edit/{{ $item->id}}" class="btn btn-primary btn-sm" type="button">Edit</a>
         </td>
    </tr>
    @endforeach
</table>
       </div>
    </div>
</div>


   @endsection




