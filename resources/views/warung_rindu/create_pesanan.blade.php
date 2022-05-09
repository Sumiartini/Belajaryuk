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
                      <label for="">Nama Pelanggan<span style="color:red"> *</span></label>
                      <input type="text" name="cus_name" value="{{ old('cus_name') }}" class="form-control @error('cus_name') is-invalid @enderror" id="" placeholder="Masukan Nama">
                      @error('cus_name')
                          <p>
                              <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                          </p>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                      <label for="">Jenis Potong<span style="color:red"> *</span></label>
                      <select name="ord_men_id[]" class="form-control @error('ord_men_id[]') is-invalid @enderror">
                        <option disabled="true" selected="true"> Pilih Jenis Potong </option>
                        @foreach($menu as $a)
                        <option value="{{$a->men_id}}">{{$a->men_cut_type}}</option>
                        @endforeach
                      </select>
                      @error('ord_men_id[]')
                          <p>
                              <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                          </p>
                      @enderror
                  </div>
                  <div class="col-sm-3">
                      <label for="">Banyak Beli<span style="color:red"> *</span></label>
                      <input type="number" placeholder="Masukan Banyak Beli" class="form-control @error('ord_quantity[]') is-invalid @enderror" name="ord_quantity[]"  id="" value="">
                      @error('ord_quantity[]')
                          <p>
                              <strong style="font-size: 80%;color: #dc3545;">{{$message}}</strong>
                          </p>
                      @enderror
                  </div>
                </div>

                <div class="order"></div>

                <div style="margin-top : 10px;"> 
                  <a href="#" class="addtypecut text-primary"><i class="fas fa-plus"></i> Tambah Jenis Potong</a> 
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-md" style="float : right;" >Simpan</button>
                </div>
              </div>
              </form>
            </div>
            <!-- /.card -->
</section>

@endsection

@section('js')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript">
    $('.addtypecut').on('click', function(){
      addtypecut();
    });
    function addtypecut(){
      var order = '<div class="row" style="margin-top : 10px;"><div class="col-sm-3"><label for="">Jenis Potong<span style="color:red"> *</span></label><select name="ord_men_id[]" class="form-control"><option disabled="true" selected="true"> Pilih Jenis Potong </option>@foreach($menu as $a)<option value="{{$a->men_id}}">{{$a->men_cut_type}}</option>@endforeach</select></div><div class="col-sm-3"><label for="">Banyak Beli<span style="color:red"> *</span></label><input type="number" placeholder="Masukan Banyak Beli" class="form-control" name="ord_quantity[]"  id="" value=""></div><a href="#" class="remove text-danger"><div style="margin-top : 40px;"><i class="fas fa-trash"></i></div></a></div>';
      $('.order').append(order);
    };
    $('.remove').live('click', function(){
      $(this).parent().remove();
    });
  </script>
@endsection