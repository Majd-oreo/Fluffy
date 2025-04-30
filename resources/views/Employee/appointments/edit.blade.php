@extends('layouts.employee-layout')

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

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form id="editAppointmentForm" action="{{ route('employee.appointments.update', $appointment->id) }}" method="POST">
                    @csrf
                    @method('PUT')  

                    <div class="mb-3">
                        <p for="user_id" class="form-label">User</p>
                        @if ($appointment->user)
                            {{ $appointment->user->name }}
                        @else
                            <span style="color: gray;">Deleted User</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <p for="pet_id" class="form-label">Pet</p>
                        @if ($appointment->pet)
                            {{ $appointment->pet->name }}
                        @else
                            <span style="color: gray;">Deleted Pet</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="service_id" class="form-label">Service</label>
                        <select id="service_id" name="service_id" class="form-control" required>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ $appointment->service_id == $service->id ? 'selected' : '' }}>{{ $service->name ?? "Deleted Service" }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select id="category_id" name="category_id" class="form-control">
                            <option value="">None</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $appointment->category_id == $category->id ? 'selected' : '' }}>{{ $category->name ?? "Deleted Category" }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="start_time" class="form-label">Start Time</label>
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
                        <a href="{{ route('employee.appointments.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('editAppointmentForm').addEventListener('submit', function(event) {
        const startTime = document.getElementById('start_time').value;
        const status = document.getElementById('status').value;
        const service = document.getElementById('service_id').value;
        const errorContainer = document.querySelector('.client-error-message');

        if (errorContainer) {
            errorContainer.remove();
        }

        const errors = [];

        if (!startTime) {
            errors.push("Start time is required.");
        } else {
            const date = new Date(startTime);
            const hour = date.getHours();
            if (hour < 10 || hour >= 18) {
                errors.push("Appointment must be between 10 AM and 6 PM.");
            }
        }

        if (!status) {
            errors.push("Status is required.");
        }

        if (!service) {
            errors.push("Service is required.");
        }

        if (errors.length > 0) {
            event.preventDefault();

            const alertDiv = document.createElement('div');
            alertDiv.className = 'alert alert-danger client-error-message';
            const ul = document.createElement('ul');

            errors.forEach(function(error) {
                const li = document.createElement('li');
                li.textContent = error;
                ul.appendChild(li);
            });

            alertDiv.appendChild(ul);
            document.querySelector('.card-body').prepend(alertDiv);
        }
    });
</script>

@endsection
