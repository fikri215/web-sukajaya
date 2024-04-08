@extends('layouts.backend.master')
@section('title')
    Management User
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Users</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="card-header">
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($users as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                @if ($item->role == 'admin')
                                    <td><span class="badge bg-label-success">{{ $item->role }}</span></td>
                                @elseif($item->role == 'editor')
                                    <td><span class="badge bg-label-secondary">{{ $item->role }}</span></td>
                                @else
                                    <td><span class="badge bg-label-warning">{{ $item->role }}</span></td>
                                @endif
                                <td>
                                    <a href="{{ route('admin.user.edit', $item->id) }}" class="btn btn-warning"><i class="bx bx-edit"></i></a>
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