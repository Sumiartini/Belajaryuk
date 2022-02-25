@extends('layouts.master')
@section('title','Tambah Pesanan')
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Pesanan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Banyak Jenis</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Banyak Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Potong</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Jenis Potong">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Banyak Beli</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Banyak Beli">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection