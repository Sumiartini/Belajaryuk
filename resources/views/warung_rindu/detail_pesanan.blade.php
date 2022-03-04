@extends('layouts.master')
@section('title','Detail Pesanan')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Detail Pesanan
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">

                                        <div class="row">
                                            <dt class="col-sm-6"> Nama Pelanggan </dt>
                                            <dd class="col-sm-6"> Sumi </dd>
                                        </div>
                                    
                                    </div>
                                    <div class="container-fluid">
                                        <table id="tProduct" class="table table-striped responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> Jenis Potong</th>
                                                    <th> Banyak Beli </th>
                                                    <th> Harga </th>
                                                    <th> Sub Total </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>dada</td>
                                                    <td>5</td>
                                                    <td>Rp. 15.000</td>
                                                    <td>Rp. 75.000</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>sayap</td>
                                                    <td>5</td>
                                                    <td>Rp. 15.000</td>
                                                    <td>Rp. 75.000</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="4">Total </th>
                                                    <td>Rp. 150.000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
    </div>
</section>
<!-- /.content -->
@endsection