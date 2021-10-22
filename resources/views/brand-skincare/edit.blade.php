@extends('layout.main')

@section('title','Form Ubah Brand Skincare')

@section('container')
  <div class="container">
    <div class="col-6">
      <h3 class="mt-3">Form Ubah Brand Skincare</h3>

      <form method="post" action="/brand-skincare/{{ $brandSkincare->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nama" value="{{ $brandSkincare->name }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" value="{{ $brandSkincare->description }}">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">simpan</button>
      </form>

    </div>
  </div>
@endsection