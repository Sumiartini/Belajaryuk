<h1>Ubah Kepribadian</h1>
<form method="post" action="/kepribadian/{{$ID->id}}">
@csrf
<input type="hidden" name="id" value="{{$ID->id}}">
Nama : <input type="text" name="name" value="{{$ID->name}}"><br><br>
Deskripsi : <input type="text" name="description" value="{{$ID->description}}"><br><br>

<button type="submit">simpan</button>