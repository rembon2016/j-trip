@extends('admin.layouts.master')
@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-4">
        <a href="{{ route('admin.users.administrator.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Jumlah Administrator</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_admin'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-user-pin bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-4">
        <a href="{{ route('admin.users.staff.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Jumlah Staff</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_staff'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection