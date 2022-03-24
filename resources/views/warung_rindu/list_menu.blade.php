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
                <a href="/list-menu/create" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah Menu</a>
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
                      <th style="width: 200px">Stok</th>
                      <th style="width: 100px">Aksi</th>
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
                      <td>{{$a->men_stock}}</td>
                      <td>
                        <a href="/list-menu/{{ $a->men_id }}/edit" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                        <form action="/list-menu/{{ $a->men_id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                        </form>
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