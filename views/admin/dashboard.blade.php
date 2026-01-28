@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card p-4 text-center">
            <div class="display-4 text-accent mb-2">
                <i class="bi bi-people"></i>
            </div>
            <h3 class="fw-bold">{{ $doctorsCount }}</h3>
            <p class="text-muted mb-0">Total Doctors</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-4 text-center">
            <div class="display-4 text-accent mb-2">
                <i class="bi bi-envelope-paper"></i>
            </div>
            <h3 class="fw-bold">{{ $contactsCount }}</h3>
            <p class="text-muted mb-0">Contact Messages</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-4 text-center">
            <div class="display-4 text-accent mb-2">
                <i class="bi bi-calendar-check"></i>
            </div>
            <h3 class="fw-bold">0</h3>
            <p class="text-muted mb-0">New Appointments</p>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card p-4">
            <h4 class="fw-bold mb-4">Quick Actions</h4>
            <div class="d-flex gap-3">
                <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Add New Doctor
                </a>
                <a href="{{ route('admin.contact-us') }}" class="btn btn-outline-primary">
                    <i class="bi bi-eye"></i> View Messages
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
