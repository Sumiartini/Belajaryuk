@extends('layout.main')

@section('title','Detail Brand Skincare')

@section('container')
  <div class="container">
    <div class="col-6">
      <h3 class="mt-3">Detail Brand Skincare</h3>

      <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $brandSkincare->name}}</h5>
            <p class="card-text">{{ $brandSkincare->description }}</p>
            
            <a href="{{$brandSkincare->id}}/edit" class="btn btn-success">edit</a>

            <form action="{{$brandSkincare->id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">delete</button>
            </form>
            
            <a href="/brand-skincare" class="card-link">kembali</a>
        </div>
      </div>

    </div>
  </div>
@endsection