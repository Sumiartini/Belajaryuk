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
                 
                <div class="row"> 
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                    </div>
                  </div>
                </div>
                <div class="row">  
                  <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                      <label>Jenis Potong</label>
                      <select class="form-control">
                        <option>Sayap</option>
                        <option>Paha</option>
                        <option>Dada</option>
                      </select>
                    </div>
                  </div>  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Banyak Beli</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Banyak Beli">
                    </div>
                  </div>
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