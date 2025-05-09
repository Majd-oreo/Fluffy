@extends('layouts.Admin-layout')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>Edit Category</h4>
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
                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    @method('PUT')  
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="service_id" class="form-label">Service</label>
                        <select id="service_id" name="service_id" class="form-control" required>
                            <option value="">Select Service</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ $category->service_id == $service->id ? 'selected' : '' }}>
                                    {{ $service->name??'Deleted Service' }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" name="description" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price ($)</label>
                        <input type="number" id="price" name="price" class="form-control" value="{{ $category->price }}" min="0" required>
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration (minutes)</label>
                        <input type="number" id="duration" name="duration" class="form-control" value="{{ $category->duration }}" min="1">
                    </div>
                    <div class="mb-3">
                        <label for="icon" class="form-label">Category Icon</label>
                        <input type="file" id="icon" name="icon" class="form-control">
                        @if($category->icon)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$category->icon) }}" alt="Category Icon" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">Update Category</button>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        // Get form elements
        let name = document.getElementById('name').value.trim();
        let serviceId = document.getElementById('service_id').value.trim();
        let price = document.getElementById('price').value.trim();
        let duration = document.getElementById('duration').value.trim();

        // Flag to check if form is valid
        let isValid = true;

        // Clear previous error messages
        let errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(msg => msg.remove());

        // Validate Category Name
        if (!name) {
            isValid = false;
            let nameField = document.getElementById('name');
            let errorMessage = document.createElement('div');
            errorMessage.classList.add('error-message', 'text-danger');
            errorMessage.textContent = 'Category Name is required.';
            nameField.insertAdjacentElement('afterend', errorMessage);
        }

        // Validate Service Selection
        if (!serviceId) {
            isValid = false;
            let serviceField = document.getElementById('service_id');
            let errorMessage = document.createElement('div');
            errorMessage.classList.add('error-message', 'text-danger');
            errorMessage.textContent = 'Service is required.';
            serviceField.insertAdjacentElement('afterend', errorMessage);
        }

        // Validate Price
        if (!price || price <= 0) {
            isValid = false;
            let priceField = document.getElementById('price');
            let errorMessage = document.createElement('div');
            errorMessage.classList.add('error-message', 'text-danger');
            errorMessage.textContent = 'Price is required and must be greater than zero.';
            priceField.insertAdjacentElement('afterend', errorMessage);
        }

        // Validate Duration (optional, but should be greater than 0 if filled)
        if (duration && duration <= 0) {
            isValid = false;
            let durationField = document.getElementById('duration');
            let errorMessage = document.createElement('div');
            errorMessage.classList.add('error-message', 'text-danger');
            errorMessage.textContent = 'Duration should be greater than zero.';
            durationField.insertAdjacentElement('afterend', errorMessage);
        }

        return isValid;
    }
</script>
@endsection
