@extends('layouts.Admin-layout')

@section('content')
<style>
    .form-check-input:checked {
        background-color: #FF5B2E;
        border-color: #FF5B2E;
    }
    .form-check-input {
        width: 3rem;
        height: 1.5rem;
        cursor: pointer;
    }
    .form-check-input:focus {
        box-shadow: none;
    }
    .form-check-label {
        font-weight: 500;
    }
</style>

<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>{{ isset($user) ? 'Edit User' : 'Create User' }}</h4>
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

                <form action="{{ isset($user) ? route('admin.users.update', $user->id) : route('admin.users.store') }}" 
                      method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    @if(isset($user))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" 
                            value="{{ old('name', $user->name ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" 
                            value="{{ old('email', $user->email ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control"
                            value="{{ old('phone', $user->phone ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" id="address" name="address" class="form-control"
                            value="{{ old('address', $user->address ?? '') }}">
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" name="role" class="form-control" required onchange="toggleEmployeeFields()">
                            <option value="">Select Role</option>
                            <option value="admin" {{ old('role', $user->role ?? '') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ old('role', $user->role ?? '') == 'user' ? 'selected' : '' }}>User</option>
                            <option value="employee" {{ old('role', $user->role ?? '') == 'employee' ? 'selected' : '' }}>Employee</option>
                        </select>
                    </div>

                    <div id="employeeFields" style="display: none;">
                        <div class="mb-3">
                            <label for="job_title" class="form-label">Job Title</label>
                            <input type="text" id="job_title" name="job_title" class="form-control" 
                                value="{{ old('job_title', $employee->job_title ?? '') }}">
                        </div>

                        <div class="mb-3">
                            <label for="salary" class="form-label">Salary</label>
                            <input type="number" id="salary" name="salary" class="form-control" step="0.01"
                                value="{{ old('salary', $employee->salary ?? '') }}">
                        </div>

                        <div class="mb-3">
                            <label for="service_id" class="form-label">Service</label>
                            <select id="service_id" name="service_id" class="form-control">
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" 
                                        {{ old('service_id', $employee->service_id ?? '') == $service->id ? 'selected' : '' }}>
                                        {{ $service->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">Status</label>
                            <div class="form-check form-switch d-flex align-items-center gap-2">
                                <input class="form-check-input" type="checkbox" id="status" name="status"
                                    {{ old('status', $employee->status ?? 'active') == 'active' ? 'checked' : '' }}>
                                <span id="status-label">
                                    {{ old('status', $employee->status ?? 'active') == 'active' ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control"
                            @if(!isset($user)) required @endif
                            placeholder="Leave blank to keep current password">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Profile Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                        @if(isset($user) && $user->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $user->image) }}" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E;">
                            {{ isset($user) ? 'Update User' : 'Create User' }}
                        </button>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary btn-lg">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleEmployeeFields() {
        const role = document.getElementById('role').value;
        const employeeFields = document.getElementById('employeeFields');
        employeeFields.style.display = (role === 'employee') ? 'block' : 'none';
    }

    document.addEventListener("DOMContentLoaded", function () {
        toggleEmployeeFields();
        const statusToggle = document.getElementById('status');
        const statusLabel = document.getElementById('status-label');
        if (statusToggle) {
            statusToggle.addEventListener('change', function () {
                statusLabel.textContent = this.checked ? 'Active' : 'Inactive';
            });
        }
    });
</script>
@endsection
