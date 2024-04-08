@extends('layouts.backend.master')
@section('title')
    Edit Category
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category /</span> Edit Category</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="{{ route('category.update', $category) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name }}">
                        @error('name')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection