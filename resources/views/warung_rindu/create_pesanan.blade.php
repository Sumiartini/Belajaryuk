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
              
                <div class="card-body">
                 
                <div class="row"> 
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Pelanggan</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                    </div>
                  </div>
                </div>

                <!-- dinamis form -->
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">Jenis Potong</label>
                        <select class="form-control">
                          <option>Sayap</option>
                          <option>Paha</option>
                          <option>Dada</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="">Banyak Beli</label>
                        <input type="number" placeholder="Enter task" class="form-control form-control-sm" name="cost"  id="cost" value="">
                        <font style="color:red"> {{ $errors->has('cost') ?  $errors->first('cost') : '' }} </font>
                    </div>
                    <div class="col-sm-3">
                        <label for="">Harga</label>
                        <input type="" placeholder="Enter task" class="form-control form-control-sm" name="cost"  id="cost" value="">
                        <font style="color:red"> {{ $errors->has('cost') ?  $errors->first('cost') : '' }} </font>
                    </div>
                    <div class="col-sm-3" style="margin-top:26px;">
                        <button id="addMore" class="btn btn-success btn-sm">Add More </button>
                    </div>
                </div>
                <div class="row" style="margin-top:26px;">
                    <div class="col-md-12">


                  <form action="{{ route('task') }}" method="post">
                    @csrf
                    
                    <table class="table table-sm table-bordered" style="display: none;">
                    <thead>
                        <tr>
                            <th>Jenis Potong</th>
                            <th>Banyak Beli</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody id="addRow" class="addRow">

                    </tbody>
                    <tbody>
                      <tr>
                        <td colspan="2" class="text-right">
                            <strong>Total:</strong> 
                        </td>
                        <td>
                            <input type="number" id="estimated_ammount" class="estimated_ammount" value="0" readonly>
                        </td>
                      </tr>
                    </tbody>

                    </table>
                  <button type="submit" class="btn btn-success btn-sm">Submit</button>
                  </form>

                    </div>
                  </div>
                  <!-- akhir form dinamis -->
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div> -->
              
            </div>
            <!-- /.card -->
</section>
@endsection