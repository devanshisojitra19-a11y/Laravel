@extends('admin.layout')

@section('title', 'Edit Doctor')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body p-4">
                <form action="{{ route('admin.doctors.update', $doctor) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $doctor->name) }}" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Specialty</label>
                            <input type="text" name="specialty" class="form-control @error('specialty') is-invalid @enderror" value="{{ old('specialty', $doctor->specialty) }}" required>
                            @error('specialty') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Credentials (e.g. MD, PhD)</label>
                            <input type="text" name="credentials" class="form-control @error('credentials') is-invalid @enderror" value="{{ old('credentials', $doctor->credentials) }}" required>
                            @error('credentials') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Experience (e.g. 10 years)</label>
                            <input type="text" name="experience" class="form-control @error('experience') is-invalid @enderror" value="{{ old('experience', $doctor->experience) }}" required>
                            @error('experience') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Rating (0-5)</label>
                            <input type="number" step="0.1" name="rating" class="form-control @error('rating') is-invalid @enderror" value="{{ old('rating', $doctor->rating) }}" required>
                            @error('rating') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Patients Count</label>
                            <input type="number" name="patients_count" class="form-control @error('patients_count') is-invalid @enderror" value="{{ old('patients_count', $doctor->patients_count) }}" required>
                            @error('patients_count') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="active" {{ $doctor->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="busy" {{ $doctor->status == 'busy' ? 'selected' : '' }}>Busy</option>
                                <option value="offline" {{ $doctor->status == 'offline' ? 'selected' : '' }}>Offline</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Image Path</label>
                        <input type="text" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image', $doctor->image) }}">
                        @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Update Doctor</button>
                        <a href="{{ route('admin.settings') }}" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
