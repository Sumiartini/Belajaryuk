@extends('layout.main')

@section('title','Brand Skincare')

@section('container')
  <div class="container">
    <div class="col-6">
      <h3 class="mt-3">Brand Skincare</h3>
      
      <a href="/brand-skincare/create" class="btn btn-primary my-3">Tambah Brand</a>
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif

      <ol class="list-group list-group-numbered">
        @foreach($brandskincares as $bs)
        <li class="list-group-item d-flex justify-content-between align-items-start">    
            <div class="fw-bold">
            {{$bs->name}}
            </div>
            <a href="/brand-skincare/{{ $bs->id }}" class="badge badge-info">detail</a>
        </li>
        @endforeach
        </ol>

    </div>
  </div>
@endsection