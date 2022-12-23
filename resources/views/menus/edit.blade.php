@extends('layouts.master')

@section('judul', 'Edit Menu')

@section('content')
    <h2>Update New Movie</h2>
    <form action="{{ route('menus.update', ['menu' => $menu->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                    value="{{ old('nama') ?? $menu->nama }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="rekomendasi">Rekomendasi</label>
                <input type="text" class="form-control @error('rekomendasi') is-invalid @enderror" name="rekomendasi" id="rekomendasi"
                    value="{{ old('rekomendasi') ?? $menu->rekomendasi }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="harga">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga"
                    value="{{ old('harga') ?? $menu->harga }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
    </form>
@endsection
