@extends('layouts.master')
@section('title','Daftar Pesanan')
@section('breadcrumb')
<li class="breadcrumb-item active">Daftar Pesanan</li>
@endsection
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Pesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px" rowspan="2">#</th>
                      <th rowspan="2">Tanggal</th>
                      <th rowspan="2">Nama Pelanggan</th>
                      <th colspan="2" class="text-center">Terjual</th>
                      <th rowspan="2">Total</th>
                      <th rowspan="2">Aksi</th>
                    </tr>
                    <tr>
                      <th>Jenis Potong</th>
                      <th>Jumlah</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>03/03/2022</td>
                      <td>Sumi</td>
                      <td>
                        Dada <br>  
                        Sayap
                      </td>
                      <td>10</td>
                      <td>Rp. 150.000</td>
                      <td>
                        <a href="/detail-pesanan" class="btn btn-primary">Detail</a>
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