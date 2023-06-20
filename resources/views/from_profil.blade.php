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

<a href="{{ url('profil')}}"><button>kembali</button></a>   
 <form action="{{ $action}}" method="POST" enctype="multipart/form-data">
@csrf
   <div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <form action="">
                <div class="mb-3">
                    <label for=""class="form-label">Nis</label>
                    <input type="text" name="nis" id="nis" class="form-control" value="{{$nis}}" placeholder="masukan nis">
                </div>
                <div class="mb-3">
                    <label for=""class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{$nama}}" placeholder="masukan nama">
                </div> 
                <div class="mb-3">
                    <label for=""class="form-label">Ttl</label>
                    <input type="text" name="ttl" id="ttl" class="form-control" value="{{$ttl}}" placeholder="masukan ttl">
                </div>
                <div class="mb-3">
                    <label for=""class="form-label">Sekolah</label>
                    <input type="text" name="sekolah" id="sekolah" class="form-control" value="{{$sekolah}}" placeholder="masukan sekolah">
                </div> 
                <div class="mb-3">
                    <label for=""class="form-label">Jenis kelamin</label>
                    <select name="jk" id="jk" class="form-select">
                        <option value="">jenis kelamin</option>
                        <option value="L"{{$jk=='L'?'selected':''}}>Laki laki</option>
                        <option value="P"{{$jk=='P'?'selected':''}}>Perempuan</option>

                    </select>
                </div>
                <div class="mb-3">
                    <label for=""class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{$alamat}}" placeholder="masukan alamat">
                </div> 
                <div class="mb-3">
                    <label for=""class="form-label">About</label>
                    <input type="text" name="about" id="about" class="form-control" value="{{$about}}" placeholder="masukan about">
                </div> 
                <div class="mb-3">
                    <label for=""class="form-label">Foto</label>
                    <img src="storage/{{$foto}}" width="50" height="100" alt="">
                   <input type="file" name="foto" id="foto" class="form-control">
                </div> 
                <tr>
                    <td>
                        <a href=" "class="btn btn-primary btn-sm" type="submit"value="simpan">Simpan</a>
                        
                        <a href=" "class="btn btn-primary btn-sm" type="submit"value="edit">edit</a>
                    </td>
                </tr>
                
                    
                        
                    
                
            </form>
        </div>
    </div>
</div>
</form>
@endsection
                   
                   

                        

               












