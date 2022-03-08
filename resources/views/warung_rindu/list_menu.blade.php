@extends('layouts.master')
@section('title','Daftar Menu')
@section('breadcrumb')
<li class="breadcrumb-item active">Daftar Menu</li>
@endsection
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Menu</h3>
                <a href="/create-menu" class="btn btn-primary float-right">Tambah</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Jenis Potong</th>
                      <th style="width: 200px">Harga</th>
                      <th style="width: 20px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Sayap</td>
                      <td>Rp. 15.000</td>
                      <td>
                        <a href="/edit-menu" class="btn btn-success">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Dada</td>
                      <td>Rp. 15.000</td>
                      <td>
                        <a href="/edit-menu" class="btn btn-success">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Paha atas</td>
                      <td>Rp. 15.000</td>
                      <td>
                        <a href="/edit-menu" class="btn btn-success">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Paha bawah</td>
                      <td>Rp. 15.000</td>
                      <td>
                        <a href="/edit-menu" class="btn btn-success">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
</section>
@endsection