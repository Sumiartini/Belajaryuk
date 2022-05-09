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
              <form action="/list-menu/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <label>Foto menu<span style="color:red"> *</span></label>
                  <div class="form-group">

                      <div class="col-sm-4">
                          <img class="img-thumbnail" id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px" />
                          <input type="file" required name="men_image" id="preview_gambar" class="@error('men_image') is-invalid @enderror" accept="image/x-png,image/gif,image/jpeg" onchange="document.getElementById('men_image').value=this.value" /><br>
                          @error('men_image')
                          <p>
                              <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                          </p>
                          @enderror
                      </div>
                  </div>
                
                  <div class="row">
                    <div class="col-4">
                      <label>Jenis Potong<span style="color:red"> *</span></label>
                      <input type="text" name="men_cut_type" value="{{ old('men_cut_type') }}" class="form-control @error('men_cut_type') is-invalid @enderror" placeholder="Jenis Potong" > 
                      @error('men_cut_type')
                          <p>
                              <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                          </p>
                      @enderror 
                    </div>
                    <div class="col-4">
                      <label>Harga<span style="color:red"> *</span></label>
                      <input type="number" name="men_price" value="{{ old('men_price') }}" class="form-control @error('men_price') is-invalid @enderror" placeholder="Harga" >  
                      @error('men_price')
                          <p>
                              <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                          </p>
                      @enderror
                    </div> 
                    <div class="col-4">
                      <label>Stok</label>
                      <input type="number" name="men_stock" value="{{ old('men_stock') }}" class="form-control" id="" placeholder="Stok">
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

