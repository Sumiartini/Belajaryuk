<h1>Tambah Kepribadian</h1>
<form method="post" action="/kepribadian">
@csrf
Nama : <input type="text" name="name"><br><br>
Deskripsi : <input type="text" name="description"><br><br>

<button type="submit">simpan</button>