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
              <form action="/list-menu/{{ $menu->men_id }}/edit" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <label>Foto menu<span style="color:red"> *</span></label>
                  <div class="form-group">

                      <div class="col-sm-4">
                          <img src="../../assets/images/chicken/{{$menu->men_image}}" class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px" />
                          <input type="file" value="{{ $menu->men_image }}" name="men_image" id="preview_gambar" class="@error('') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg onchange="document.getElementById('men_image').value=this.value" /><br>
                          @error('')
                          <p>
                              <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                          </p>
                          @enderror
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <label>Jenis Potong<span style="color:red"> *</span></label>
                      <input type="text" value="{{ $menu->men_cut_type }}" name="men_cut_type" class="form-control" id="" placeholder="Jenis Potong" required>  
                    </div>
                    <div class="col-4">
                      <label>Harga<span style="color:red"> *</span></label>
                      <input type="text" value="{{ $menu->men_price }}" name="men_price" class="form-control" id="" placeholder="Harga" required>  
                    </div> 
                    <div class="col-4">
                      <label>Stok</label>
                      <input type="text" value="{{ $menu->men_stock }}" name="men_stock" class="form-control" id="" placeholder="Stok">
                    </div>  
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" style="float : right;">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</section>
@endsection