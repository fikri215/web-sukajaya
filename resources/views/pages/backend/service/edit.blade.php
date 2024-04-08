@extends('layouts.backend.master')
@section('title')
    Edit Service
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Service /</span> Edit Service</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="{{ route('service.update', $service) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="image" class="form-label">Gambar</label>
                    <div class="mb-3">
                        <div id="existing-image">
                            <img src="{{ asset('storage/uploads/images/service/'.$service->image) }}" alt="Service image" width="250" class="d-block mb-2">
                        </div>
                        <img id="image-preview" src="#" alt="Preview" width="250" class="mb-2" style="display:none;">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                        @error('image')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $service->title }}">
                        @error('title')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Deskripsi</label>
                        <textarea name="desc" rows="10" class="form-control @error('desc') is-invalid @enderror">{{ $service->desc }}</textarea>
                        @error('desc')
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

@push('scripts')
    <script>
        $(document).ready(function() {
            // Preview image
            $('#image').change(function() {
                var file = this.files[0];
                var imageUrl = URL.createObjectURL(file);

                $('#image-preview').attr('src', imageUrl).show();
                $('#existing-image').hide();
            });

        });
    </script>
@endpush