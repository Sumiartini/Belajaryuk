@extends('layouts.master')
@section('title','Tambah Menu')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/list-menu">Daftar Menu</a></li>
<li class="breadcrumb-item active">Tambah Menu</li>
@endsection
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/create-menu" method="post">
                @csrf
                <div class="card-body">
                <label>Foto menu<span style="color:red"> *</span></label>
                  <div class="form-group">

                      <div class="col-sm-4">
                          <img class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px" />
                          <input type="file" required name="men_image" id="preview_gambar" class="@error('') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg onchange="document.getElementById('men_image').value=this.value" /><br>
                          @error('')
                          <p>
                              <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                          </p>
                          @enderror
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Potong<span style="color:red"> *</span></label>
                    <input type="text" name="men_cut_type" class="form-control" id="exampleInputPassword1" placeholder="Jenis" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga<span style="color:red"> *</span></label>
                    <input type="text" name="men_price" class="form-control" id="exampleInputPassword1" placeholder="Harga" required>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</section>
@endsection