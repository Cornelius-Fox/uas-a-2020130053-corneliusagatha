@extends('layouts.master')

@section('title', 'Add New Movie')

@section('content')
    <h2>Add New Menu</h2>
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                    value="{{ old('nama') }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="rekomendasi">Rekomendasi</label>
                <input type="text" class="form-control @error('rekomendasi') is-invalid @enderror" name="rekomendasi" id="rekomendasi"
                    value="{{ old('rekomendasi') }}">
                    @error('rekomendasi')
                        <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="harga">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga"
                    value="{{ old('harga') }}">
                    @error('harga')
                        <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="status">status</label>
                <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status"
                    value="{{ old('status') }}">
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
    </form>
@endsection
