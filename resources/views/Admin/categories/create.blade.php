@extends('layouts.Admin-layout')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>{{ isset($category) ? 'Edit Category' : 'Create Category' }}</h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ isset($category) ? route('admin.categories.update', $category->id) : route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    @if(isset($category))
                        @method('PUT')
                    @endif
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ isset($category) ? $category->name : '' }}" required>
                        <small class="text-danger d-none" id="nameError">Category name is required.</small>
                    </div>

                    <div class="mb-3">
                        <label for="service_id" class="form-label">Service</label>
                        <select id="service_id" name="service_id" class="form-control" required>
                            <option value="">Select Service</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ isset($category) && $category->service_id == $service->id ? 'selected' : '' }}>
                                    {{ $service->name }}
                                </option>
                            @endforeach
                        </select>
                        <small class="text-danger d-none" id="serviceError">Please select a service.</small>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" name="description" class="form-control">{{ isset($category) ? $category->description : '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" id="price" name="price" class="form-control" value="{{ isset($category) ? $category->price : '' }}" required min="0">
                        <small class="text-danger d-none" id="priceError">Price is required and must be a positive number.</small>
                    </div>

                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration (in minutes)</label>
                        <input type="number" id="duration" name="duration" class="form-control" value="{{ isset($category) ? $category->duration : '' }}" min="1">
                        <small class="text-danger d-none" id="durationError">Duration must be a positive number.</small>
                    </div>

                    <div class="mb-3">
                        <label for="icon" class="form-label">Category Icon</label>
                        <input type="file" id="icon" name="icon" class="form-control">
                        @if(isset($category) && $category->icon)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$category->icon) }}" alt="Category Icon" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                        <small class="text-danger d-none" id="iconError">Please upload a valid image (jpg, jpeg, png, gif, svg) up to 2MB.</small>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">{{ isset($category) ? 'Update Category' : 'Create Category' }}</button>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        let valid = true;
        
        // Validate Category Name
        const name = document.getElementById('name').value.trim();
        const nameError = document.getElementById('nameError');
        if (name === '') {
            nameError.classList.remove('d-none');
            valid = false;
        } else {
            nameError.classList.add('d-none');
        }

        // Validate Service Selection
        const serviceId = document.getElementById('service_id').value;
        const serviceError = document.getElementById('serviceError');
        if (serviceId === '') {
            serviceError.classList.remove('d-none');
            valid = false;
        } else {
            serviceError.classList.add('d-none');
        }

        // Validate Price
        const price = document.getElementById('price').value.trim();
        const priceError = document.getElementById('priceError');
        if (price === '' || isNaN(price) || price < 0) {
            priceError.classList.remove('d-none');
            valid = false;
        } else {
            priceError.classList.add('d-none');
        }

        // Validate Duration
        const duration = document.getElementById('duration').value.trim();
        const durationError = document.getElementById('durationError');
        if (duration && (isNaN(duration) || duration < 1)) {
            durationError.classList.remove('d-none');
            valid = false;
        } else {
            durationError.classList.add('d-none');
        }

        // Validate Icon File (optional)
        const iconInput = document.getElementById('icon');
        const iconError = document.getElementById('iconError');
        const file = iconInput.files[0];
        
        if (file) {
            const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'];
            const maxSize = 2 * 1024 * 1024; // 2MB

            if (!allowedTypes.includes(file.type)) {
                iconError.textContent = "Please upload a valid image (jpg, jpeg, png, gif, svg).";
                iconError.classList.remove('d-none');
                valid = false;
            } else if (file.size > maxSize) {
                iconError.textContent = "The file size must be less than 2MB.";
                iconError.classList.remove('d-none');
                valid = false;
            } else {
                iconError.classList.add('d-none');
            }
        }

        return valid;
    }
</script>
@endsection
