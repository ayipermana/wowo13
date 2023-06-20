@extends('template') 
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>    
</div> 
@endif

<a href="{{ url('portofolio')}}"><button>kembali</button></a>   
 <form action="{{ $action}}" method="POST" enctype="multipart/form-data">
@csrf
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama_portofolio" id="nama_portofolio"  value="{{ $portofolio->nama_portofolio}}" ></td>
            
        </tr>
        <tr>
            <td>kategori</td>
            <td><input type="text" name="kategori" id="kategori" value="{{ $portofolio->kategori}}"></td>
               
        </tr>
        <tr>
            <td>deskripsi</td>
            <td><input type="text" name="deskripsi" id="deskripsi" value="{{ $portofolio->deskripsi}}"></td>

           
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto" id="foto"></td>
        </tr>
        <tr>
            <td colspan="2">
                 <input type="submit" value="{{$tombol}}">
            </td>
        </tr>

    </table>
</form>
@endsection










