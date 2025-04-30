@extends('layouts.Admin-layout')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>Edit Appointment</h4>
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
                <form action="{{ route('admin.appointments.update', $appointment->id) }}" method="POST" onsubmit="return validateForm()">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="user_id" class="form-label">User</label>
                        <p class="form-control-plaintext">{{ $appointment->user->name??'Deleted User' }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pet</label>
                        <p class="form-control-plaintext">{{ $appointment->pet->name??'Deleted Pet' }}</p>
                    </div>

                    <div class="mb-3">
                        <label for="service_id" class="form-label">Service</label>
                        <select id="service_id" name="service_id" class="form-control" required>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ $appointment->service_id == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select id="category_id" name="category_id" class="form-control">
                            <option value="">None</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $appointment->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="start_time" class="form-label">Time</label>
                        <input type="datetime-local" id="start_time" name="start_time" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($appointment->start_time)) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" name="status" class="form-control" required>
                            <option value="Pending" {{ $appointment->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Completed" {{ $appointment->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                            <option value="Canceled" {{ $appointment->status == 'Canceled' ? 'selected' : '' }}>Canceled</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">Update Appointment</button>
                        <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        // Clear previous error messages
        let errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(msg => msg.remove());

        // Get form elements
        let serviceId = document.getElementById('service_id').value.trim();
        let categoryId = document.getElementById('category_id').value.trim();
        let startTime = document.getElementById('start_time').value.trim();
        let status = document.getElementById('status').value.trim();

        let isValid = true;

        // Validate Service Selection
        if (!serviceId) {
            isValid = false;
            let serviceField = document.getElementById('service_id');
            let errorMessage = document.createElement('div');
            errorMessage.classList.add('error-message', 'text-danger');
            errorMessage.textContent = 'Service is required.';
            serviceField.insertAdjacentElement('afterend', errorMessage);
        }

        // Validate Time Selection
        if (!startTime) {
            isValid = false;
            let startTimeField = document.getElementById('start_time');
            let errorMessage = document.createElement('div');
            errorMessage.classList.add('error-message', 'text-danger');
            errorMessage.textContent = 'Start Time is required.';
            startTimeField.insertAdjacentElement('afterend', errorMessage);
        }

        // Validate Status Selection
        if (!status) {
            isValid = false;
            let statusField = document.getElementById('status');
            let errorMessage = document.createElement('div');
            errorMessage.classList.add('error-message', 'text-danger');
            errorMessage.textContent = 'Status is required.';
            statusField.insertAdjacentElement('afterend', errorMessage);
        }

        return isValid;
    }
</script>

@endsection
