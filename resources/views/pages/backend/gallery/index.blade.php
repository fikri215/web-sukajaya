@extends('layouts.backend.master')
@section('title')
    Gallery
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Gallery</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="card-header">
                <a href="{{ route('gallery.create') }}" class="btn btn-primary"><i class='bx bx-add-to-queue'></i> Add Gallery</a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            {{-- <th>Nama</th>
                            <th>Deskripsi</th> --}}
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($gallery as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('storage/uploads/images/gallery/'.$item->image) }}" alt="service" width="100">
                                </td>
                                {{-- <td>{{ $item->title }}</td>
                                <td>{{ $item->desc }}</td> --}}
                                <td>{{ $item->category->name }}</td>
                                <td>
                                    <form action="{{ route('gallery.destroy', $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bx bx-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No data available</td>
                        </tr>
                        @endforelse
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
@endsection