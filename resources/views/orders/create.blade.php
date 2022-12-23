@extends('layouts.master')

@section('title', 'Add New Movie')

@section('content')
    <h2>Add New Menu</h2>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="status">Status</label>
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
