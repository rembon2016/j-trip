@extends('admin.layouts.master')
@section('title', 'Customer Feedback')

@section('content')
{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Customer Feedback</li>
    </ol>
</nav>

<!-- Tabel Customer Feedback -->
<div class="card">
    <div class="d-flex align-items-center justify-content-between pe-4">
        <h5 class="card-header mb-0">Customer Feedback</h5>
        <div class="d-flex align-items-center gap-2">
            
        </div>
    </div>
    <div class="card-body pt-1">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover simple-dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>last Name</th>
                        <th>Phone</th>
                        <th>Tour</th>
                        <th>Bulan Keberangkatan</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->first_name }}</td>
                            <td>{{ $item->last_name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->tour->title }}</td>
                            <td>{{ $item->departure_month }}</td>
                            <td>
                                <div class="d-flex flex-wrap align-items-center justify-content-center gap-2">
                                    <a href="{{ route('admin.customer-feedback.detail', $item->id) }}" class="btn btn-secondary btn-icon btn-sm" data-type="modal" data-modal-size="sm" data-modal-title="Detail Feedback" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Detail Feedback">
                                        <i class="bx bx-search-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Tabel Customer Feedback -->
@endsection