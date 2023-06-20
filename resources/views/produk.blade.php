@extends('navbar2')
@section('navbar2')
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin: 5px;
    }
    
    </style>
        
    <form action="{{url('produk/cari')}}" method="get">
        @csrf
        <input type="search" name="cari " id="cari" value="{{$cari}}">
        <input type="submit" value="Cari Produk" class="btn btn-primary btn-sm" type="button">    
        
    </form>
<a href="{{url('produk/add')}}"class="btn btn-primary btn-sm" type="button">Tambah Produk</a>
    
<div class="card">
    <div class=" card-body">
       <div class="table-responsive">
 <table class=" table table-hover table-bordered table-striped">
        
        <tr class="col-2 text-center">
            <th>no</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        @foreach ($produk as $key => $item )
        <tr class="col-2 text-center">
            <td>{{ $key+1}}</td>
            <td>{{ $item->nama}}</td>
            <td>{{ $item->deskripsi}}</td>
            <td>{{ $item->harga}}</td>
            <td>
                <img src="/storage/{{ $item->foto}}" alt="" width="50">
            </td>
               <td>
                    <a href="produk/hapus/{{ $item->id}}>" onclick=" return window.confirm('bner ek dihapus?')" class="btn btn-success btn-sm" type="button">Hapus</a>
                    <a href="produk/edit/{{ $item->id}}" class="btn btn-primary btn-sm" type="button">Edit</a>
               </td>
        </tr>
        
        @endforeach
    </table>
       </div>
    </div>
</div>

    @endsection
       
      