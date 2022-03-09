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
                      <th>Foto</th>
                      <th>Jenis Potong</th>
                      <th style="width: 200px">Harga</th>
                      <th style="width: 20px">Aksi</th>
                    </tr>
                  </thead>
                  @php $no = 1; @endphp
                  @foreach($menu as $a)
                  <tbody>
                    <tr>
                      <td>{{$no++}}</td>
                      <td>
                      <img src="assets/images/chicken/{{$a->men_image}}" style="max-height: 4rem; max-width: 4rem;">
                      </td>
                      <td>{{$a->men_cut_type}}</td>
                      <td>{{$a->men_price}}</td>
                      <td>
                        <a href="/edit-menu/{{$a->men_id}}" class="btn btn-success">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
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