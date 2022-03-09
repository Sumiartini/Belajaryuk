@extends('layouts.master')
@section('title','Edit Menu')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/list-menu">Daftar Menu</a></li>
<li class="breadcrumb-item active">Edit Menu</li>
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
                <h3 class="card-title">Edit Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/edit-menu/{{ $menu->men_id }}" method="post">
              @csrf
                <div class="card-body">
                <label>Foto menu<span style="color:red"> *</span></label>
                  <div class="form-group">

                      <div class="col-sm-4">
                          <img class="img-thumbnail" id="" style="object-fit: cover; height: 200px; width: 200px" />
                          <input type="file" value="{{ $menu->men_image }}" name="men_image" id="preview_gambar" class="@error('') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg onchange="document.getElementById('usr_profile_picture').value=this.value" /><br>
                          @error('')
                          <p>
                              <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                          </p>
                          @enderror
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis</label>
                    <input type="text" value="{{ $menu->men_cut_type }}" name="men_cut_type" class="form-control" id="exampleInputPassword1" placeholder="Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" value="{{ $menu->men_price }}" name="men_price" class="form-control" id="exampleInputPassword1" placeholder="Harga">
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