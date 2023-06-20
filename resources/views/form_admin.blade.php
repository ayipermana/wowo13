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
        <td>type user</td>
        <td>
            <input type="radio" name="type_user" id="type_user" value="admin" {{ $admin->type_user=="admin"?"checked":""}}>admin
            <input type="radio" name="type_user" id="type_user" value="member" {{ $admin->type_user=="member"?"checked":""}}>member
        </td>
    </tr>
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama" id="nama" value="{{ $admin->nama}}"></td>
    </tr>
    <tr>
        <td>email</td>
        <td><input type="email" name="email" id="email" value="{{ $admin->email}}"></td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="password" name="password" id="password" value="{{$admin->password}}"></td>
    </tr>
    <tr>
        <td>no tlp</td>
        <td><input type="text" name="no_tlp" id="no_tlp" value="{{ $admin->no_tlp}}"></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><textarea name="alamat" id="alamat" cols="30" rows="10">{{ $admin->alamat}}</textarea></td>
    </tr>
    <tr>
        <td>foto</td>
        <td><input type="file" name="foto" id="foto"></td>
    </tr>
    <tr>
        <td><input type="submit" value="simpan"></td>
    </tr>
</table>
</form>



        
