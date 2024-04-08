@extends('layouts.backend.master')
@section('title')
    Setting Website
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Profile Website</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="card-body">

                <div class="nav-align-top">
                    <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="true">Profile</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-logo" aria-controls="navs-pills-top-logo" aria-selected="false">Logo </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-pills-top-profile" role="tabpanel">
                            <form action="{{ route('setting.update', $setting->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                
                                <div class="mb-3">
                                    <label for="title" class="form-label">Judul</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $setting->title }}">
                                    @error('title')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $setting->address }}">
                                     @error('address')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="city" class="form-label">Kota</label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $setting->city }}">
                                     @error('city')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Telpon</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $setting->phone }}">
                                     @error('phone')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $setting->email }}">
                                     @error('email')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ $setting->instagram }}">
                                     @error('instagram')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
            
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="navs-pills-top-logo" role="tabpanel">
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <div class="mb-2">
                                    <div id="existing-logo">
                                        <img src="{{ $setting->logo ? asset('storage/uploads/logo/'.$setting->logo) : asset('backend/assets/img/no_image.png') }}" 
                                            alt="logo" class="existing-logo" style="max-width: 100%; max-height: 100px;">
                                        @if($setting->logo)
                                        <form action="{{ route('setting.delete-logo', $setting->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button class="btn btn-danger" type="submit"><i class="bx bx-trash"></i></button>
                                        </form>
                                        @endif
                                    </div> 

                                    <img src="#" id="logo-preview" alt="Preview Image" style="max-width: 100%; max-height: 100px; display: none;">
                                </div>
                                <form action="{{ route('setting.update-logo', $setting->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="logo" accept="image/*">
                                    @error('logo')
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
        <!-- /Basic Bootstrap Table -->
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Preview logo
            $('#logo').change(function() {
                var file = this.files[0];
                var imageUrl = URL.createObjectURL(file);

                $('#logo-preview').attr('src', imageUrl).show();
                $('.existing-logo').hide();
            });

        });
    </script>
@endpush