
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
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>Edit User</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                        @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                        @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}">
                        @if ($errors->has('phone'))
                            <div class="text-danger">{{ $errors->first('phone') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $user->address) }}">
                        @if ($errors->has('address'))
                            <div class="text-danger">{{ $errors->first('address') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" name="role" class="form-control" required onchange="toggleEmployeeFields()">
                            <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                            <option value="employee" {{ old('role', $user->role) == 'employee' ? 'selected' : '' }}>Employee</option>
                        </select>
                        @if ($errors->has('role'))
                            <div class="text-danger">{{ $errors->first('role') }}</div>
                        @endif
                    </div>

                    <div id="employeeFields" @if(old('role', $user->role) == 'employee') style="display: block;" @else style="display: none;" @endif>

                        <div class="mb-3">
                            <label for="job_title" class="form-label">Job Title</label>
                            <input type="text" id="job_title" name="job_title" class="form-control" value="{{ old('job_title', $user->employee ? $user->employee->job_title : '') }}">
                            @if ($errors->has('job_title'))
                                <div class="text-danger">{{ $errors->first('job_title') }}</div>
                            @endif
                        </div>
                        
                    <div class="mb-3">
   
    
                        <div class="mb-3">
                            <label for="salary" class="form-label">Salary</label>
                            <input type="number" id="salary" name="salary" class="form-control" value="{{ old('salary', $user->employee ? $user->employee->salary : '') }}">
                            @if ($errors->has('salary'))
                                <div class="text-danger">{{ $errors->first('salary') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
    <label class="form-label">Status</label>
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="status" name="status" value="active"
            {{ old('status', optional($user->employee)->status) == 'active' ? 'checked' : '' }}>
        <label class="form-check-label" for="status">
            {{ old('status', optional($user->employee)->status) == 'active' ? 'Active' : 'Inactive' }}
        </label>
    </div>
</div>



                        <div class="mb-3">
                            <label for="service_id" class="form-label">Service</label>
                            <select id="service_id" name="service_id" class="form-control">
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{ old('service_id', $user->employee->service_id ?? '') == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('service_id'))
                                <div class="text-danger">{{ $errors->first('service_id') }}</div>
                            @endif
                        </div>

                    </div>


    <!-- Add hidden input to ensure status is always passed, even if checkbox is unchecked -->
    <input type="hidden" name="status" value="inactive">
</div>



                    <div class="mb-3">
                        <label for="image" class="form-label">Profile Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                        @if($user->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$user->image) }}" alt="User Image" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                        @if ($errors->has('password'))
                            <div class="text-danger">{{ $errors->first('password') }}</div>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white" style="background-color: #FF5B2E;">Update User</button>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleEmployeeFields() {
        var role = document.getElementById('role').value;
        var employeeFields = document.getElementById('employeeFields');
        if (role == 'employee') {
            employeeFields.style.display = 'block';
        } else {
            employeeFields.style.display = 'none';
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        toggleEmployeeFields();
    });
</script>

@endsection
