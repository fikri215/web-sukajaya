@extends('layouts.backend.master')
@section('title')
    Tentang Kami
@endsection

@section('head-script')
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Tentang Kami</h4>

        <!-- Card -->
        <div class="card">
            <div class="card-body">

                <div class="nav-align-top">
                    <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-about" aria-controls="navs-pills-top-about" aria-selected="true">About</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-image" aria-controls="navs-pills-top-image" aria-selected="false">Image </button>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="navs-pills-top-about" role="tabpanel">
                            <form action="{{ route('about.update', $about->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="title" class="form-label">Judul</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $about->title }}">
                                    @error('title')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="desc" class="form-label">Deskripsi</label>
                                    <textarea name="desc" cols="30" rows="10" class="form-control @error('desc') is-invalid @enderror">{{ $about->desc }}</textarea>
                                    @error('desc')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="navs-pills-top-image" role="tabpanel">
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label>
                                <div class="mb-2">
                                    <div id="existing-image">
                                        <img src="{{ $about->image ? asset('storage/uploads/images/profile/'.$about->image) : asset('backend/assets/img/no_image.png') }}" 
                                            alt="image" class="existing-image" style="max-width: 100%; max-height: 100px;">
                                    </div> 

                                    <img src="#" id="image-preview" alt="Preview Image" style="max-width: 100%; max-height: 100px; display: none;">
                                </div>
                                <form action="{{ route('about.update-image', $about->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" accept="image/*">
                                    @error('image')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
        <!-- /Card-->

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

            CKEDITOR.replace('desc');
        });
    </script>
@endpush