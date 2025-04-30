@extends('layouts.Admin-layout')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>{{ isset($service) ? 'Edit Service' : 'Create Service' }}</h4>
            </div>
            <div class="card-body">
                <form id="serviceForm" action="{{ isset($service) ? route('admin.services.update', $service->id) : route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($service))
                        @method('PUT')
                    @endif
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Service Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ isset($service) ? $service->name : '' }}">
                        <span id="nameError" class="text-danger small"></span>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Short Description</label>
                        <textarea id="description" name="description" class="form-control">{{ isset($service) ? $service->description : '' }}</textarea>
                        <span id="descriptionError" class="text-danger small"></span>
                    </div>

                    <div class="mb-3">
                        <label for="long_description" class="form-label">Long Description</label>
                        <textarea id="long_description" name="long_description" class="form-control">{{ isset($service) ? $service->long_description : '' }}</textarea>
                        <span id="longDescriptionError" class="text-danger small"></span>
                    </div>

                    <div class="mb-3">
                        <label for="icon" class="form-label">Service Icon</label>
                        <input type="file" id="icon" name="icon" class="form-control">
                        <span id="iconError" class="text-danger small"></span>

                        @if(isset($service) && $service->icon)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$service->icon) }}" alt="Service Icon" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">{{ isset($service) ? 'Update Service' : 'Create Service' }}</button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- JavaScript Validation --}}
<script>
document.getElementById('serviceForm').addEventListener('submit', function(e) {
    let hasError = false;

    // Clear previous errors
    document.getElementById('nameError').innerText = '';
    document.getElementById('descriptionError').innerText = '';
    document.getElementById('longDescriptionError').innerText = '';
    document.getElementById('iconError').innerText = '';

    // Validate name
    const name = document.getElementById('name').value.trim();
    if (!name) {
        document.getElementById('nameError').innerText = 'Service name is required.';
        hasError = true;
    }

    // Validate icon size/type if selected
    const iconInput = document.getElementById('icon');
    if (iconInput.files.length > 0) {
        const file = iconInput.files[0];
        const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'];
        if (!allowedTypes.includes(file.type)) {
            document.getElementById('iconError').innerText = 'Only JPG, PNG, GIF, or SVG files are allowed.';
            hasError = true;
        }
        if (file.size > 2 * 1024 * 1024) {
            document.getElementById('iconError').innerText = 'File size must be less than 2MB.';
            hasError = true;
        }
    }

    if (hasError) {
        e.preventDefault();
    }
});
</script>
@endsection
