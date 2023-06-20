@if ($errors->any())
<div class="alert alert-danger">
<ul>
   @foreach($errors->all() as $error)
   <li>{{ $error}}</li>
   @endforeach
</ul>
</div>
@endif

<form action="{{ $action}}" method="POST" enctype="multipart/form-data">
@csrf
<table>
    <tr>
        <td>foto</td>
        <td><input type="file" name="foto" id="foto"></td>
    </tr>
    
   <tr>
       <td>nama</td>
       <td><input type="text" name="nama" id="nama" value="{{ $produk->nama}}"></td>
   </tr>
   <tr>
      <td>deskripsi</td>
      <td><input type="text" name="deskripsi" id="deskripsi" value="{{ $produk->deskripsi}}"></td>
   </tr>
   <tr>
      <td>harga</td>
      <td><input type="text" name="harga" id="harga" value="{{ $produk->harga}}"></td>
   </tr>
<tr>
       <td><input type="submit" value="simpan"></td>
   </tr>
</table>
</form>