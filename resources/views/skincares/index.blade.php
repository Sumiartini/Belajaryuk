@extends('layout.main')

@section('title','Daftar Skincare')

@section('container')
  <div class="container">
    <div class="col-10">
      <h3 class="mt-3">Daftar Skincare</h3>

      <table class="table">
       <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>    
                <th scope="col">Nama Produk</th> 
                <th scope="col">Komposisi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($skincare as $skin)
            <tr>  
                <th scope="col">{{ $loop->iteration }}</th> <!-- loop iteration yg dia mengetahui sekarang ini iterasi keberapa -->
                <td>{{ $skin->name }}</td>
                <td>{{ $skin->ingredient }}</td>
                <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>

      </table>

    </div>
  </div>
@endsection