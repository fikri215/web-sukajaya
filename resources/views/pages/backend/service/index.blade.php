@extends('layouts.backend.master')
@section('title')
    Layanan Kami
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Layanan Kami</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="card-header">
                <a href="{{ route('service.create') }}" class="btn btn-primary"><i class='bx bx-add-to-queue'></i> Add Service</a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($service as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <img src="{{ asset('storage/uploads/images/service/'.$item->image) }}" alt="service" width="100">
                                </td>
                                <td>{{ $item->desc ?? '-' }}</td>
                                <td>
                                    <a href="{{ route('service.edit', $item->id) }}" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                                    <form action="{{ route('service.destroy', $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bx bx-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">No data available</td>
                        </tr>
                        @endforelse
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
@endsection