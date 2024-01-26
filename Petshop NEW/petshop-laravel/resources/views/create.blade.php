@extends('layouts.dashboard.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Inventory</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ url('/dashboard') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>

@endsection
