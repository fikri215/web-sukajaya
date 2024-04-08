@extends('layouts.backend.master')
@section('title', 'Dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Dashboard</h4>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img
                                src="{{ asset('assets/img/icons/unicons/user-square.svg') }}"
                                alt="Credit Card"
                                class="rounded"
                                />
                            </div>
                        </div>
                        <span>User</span>
                        <h3 class="card-title text-nowrap mb-1"></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img
                                src="{{ asset('/assets/img/icons/unicons/bookmark.svg') }}"
                                alt="Credit Card"
                                class="rounded"
                                />
                            </div>
                        </div>
                        <span>Category</span>
                        <h3 class="card-title text-nowrap mb-1"></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img
                                src="{{ asset('assets/img/icons/unicons/newspaper.svg') }}"
                                alt="Credit Card"
                                class="rounded"
                                />
                            </div>
                        </div>
                        <span>News</span>
                        <h3 class="card-title text-nowrap mb-1"></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection