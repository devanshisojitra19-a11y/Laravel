@extends('admin.layout')

@section('title', 'Settings - Find A Doctor')

@section('content')
<div class="card">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-bold">Manage Doctors</h5>
        <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary btn-sm">
            <i class="bi bi-plus-circle"></i> Add Doctor
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Specialty</th>
                        <th>Experience</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($doctors as $doctor)
                    <tr>
                        <td>
                            <img src="{{ asset($doctor->image) }}" alt="" class="rounded-circle" width="40" height="40" style="object-fit: cover;">
                        </td>
                        <td>
                            <div class="fw-bold">{{ $doctor->name }}</div>
                            <small class="text-muted">{{ $doctor->credentials }}</small>
                        </td>
                        <td>{{ $doctor->specialty }}</td>
                        <td>{{ $doctor->experience }}</td>
                        <td>
                            <span class="badge bg-warning text-dark">
                                <i class="bi bi-star-fill"></i> {{ $doctor->rating }}
                            </span>
                        </td>
                        <td>
                            @if($doctor->status == 'active')
                                <span class="badge bg-success">Active</span>
                            @elseif($doctor->status == 'busy')
                                <span class="badge bg-danger">Busy</span>
                            @else
                                <span class="badge bg-secondary">Offline</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.doctors.edit', $doctor) }}" class="btn btn-sm btn-edit me-2">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('admin.doctors.destroy', $doctor) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-delete">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-4 text-muted">No data available</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
