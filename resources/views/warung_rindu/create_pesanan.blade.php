@extends('layouts.master')
@section('title','Tambah Pesanan')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/list-pesanan">Daftar Pesanan</a></li>
<li class="breadcrumb-item active">Tambah Pesanan</li>
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
                <h3 class="card-title">Tambah Pesanan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/list-pesanan/create" method="post">
              @csrf
              <div class="card-body">
                 
                <div class="row"> 
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Nama Pelanggan</label>
                      <input type="text" name="ord_customer_name" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">Jenis Potong</label>
                        <select name="ord_men_id" class="form-control">
                          <option disabled="true" selected="true"> Pilih Jenis Potong </option>
                          @foreach($menu as $a)
                          <option value="{{$a->men_id}}">{{$a->men_cut_type}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="">Banyak Beli</label>
                        <input type="number" placeholder="Masukan Banyak Beli" class="form-control" name="ord_quantity"  id="" value="">
                    </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" float= right; >Simpan</button>
                </div>
              </div>
              </form>
            </div>
            <!-- /.card -->
</section>
@endsection