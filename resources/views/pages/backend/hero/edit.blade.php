@extends('layouts.backend.master')
@section('title')
    Hero
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Hero</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="{{ route('hero.update', $hero->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="image" class="form-label">Banner</label>
                    <div class="mb-3">
                        <div id="existing-image">
                            <img src="{{ $hero->image ? asset('storage/uploads/banner/'.$hero->image) :  asset('backend/assets/img/no_image.png') }}" alt="Banner" width="250" class="d-block mb-2">
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
                        <label for="title1" class="form-label">Text 1</label>
                        <input type="text" class="form-control @error('title1') is-invalid @enderror" name="title1" value="{{ $hero->title1 }}">
                        @error('title1')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title2" class="form-label">Text 2</label>
                        <input type="text" class="form-control @error('title2') is-invalid @enderror" name="title2" value="{{ $hero->title2 }}">
                        @error('title2')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title3" class="form-label">Text 3</label>
                        <input type="text" class="form-control @error('title3') is-invalid @enderror" name="title3" value="{{ $hero->title3 }}">
                        @error('title3')
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