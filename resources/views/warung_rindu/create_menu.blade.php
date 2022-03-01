@extends('layouts.master')
@section('title','Tambah Menu')
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
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Harga">
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