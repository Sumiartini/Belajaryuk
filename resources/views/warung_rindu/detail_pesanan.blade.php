@extends('layouts.master')
@section('title','Detail Pesanan')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/list-pesanan">Daftar Pesanan</a></li>
<li class="breadcrumb-item active">Detail Pesanan</li>
@endsection
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
                            @php
                                $no = 1;
                            @endphp
                            
                            
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">

                                        <div class="row">
                                            <dt class="col-sm-6"> Nama Pelanggan </dt>
                                            @foreach($customer as $a)
                                            <dd class="col-sm-6"> {{$a->cus_name}} </dd>
                                            @endforeach
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
                                                @foreach($pesanan as $a)
                                                @php
                                                    $sub = $a->men_price*$a->ord_quantity;
                                                @endphp
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$a->men_cut_type}}</td>
                                                    <td>{{$a->ord_quantity}}</td>
                                                    <td>Rp. {{$a->men_price}}</td>
                                                    <td>Rp. {{$sub}}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <th colspan="4">Total </th>
                                                    <td>Rp. {{$totalHarga}}</td>
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