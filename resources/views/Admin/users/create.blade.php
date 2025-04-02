@extends('layouts.Admin-layout')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
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
                <form action="{{ isset($user) ? route('admin.users.update', $user->id) : route('admin.users.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    @if(isset($user))
                        @method('PUT')
                    @endif
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ isset($user) ? $user->name : '' }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ isset($user) ? $user->email : '' }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{ isset($user) ? $user->phone : '' }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" id="address" name="address" class="form-control" value="{{ isset($user) ? $user->address : '' }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" name="role" class="form-control" required onchange="toggleEmployeeFields()">
                            <option value="admin" {{ isset($user) && $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ isset($user) && $user->role == 'user' ? 'selected' : '' }}>User</option>
                            <option value="employee" {{ isset($user) && $user->role == 'employee' ? 'selected' : '' }}>Employee</option>
                        </select>
                    </div>

                    <div id="employeeFields" style="display: none;">
                        <div class="mb-3">
                            <label for="job_title" class="form-label">Job Title</label>
                            <input type="text" id="job_title" name="job_title" class="form-control" value="{{ isset($employee) ? $employee->job_title : '' }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="salary" class="form-label">Salary</label>
                            <input type="number" id="salary" name="salary" class="form-control" step="0.01" value="{{ isset($employee) ? $employee->salary : '' }}">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" 
                               @if(!isset($user)) required @endif placeholder="Leave blank to keep current password">
                    </div>
                    
                    <div class="mb-3">
                        <label for="image" class="form-label">Profile Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                        @if(isset($user) && $user->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$user->image) }}" alt="User Image" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">{{ isset($user) ? 'Update User' : 'Create User' }}</button>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        let name = document.getElementById('name').value.trim();
        let email = document.getElementById('email').value.trim();
        if (name === "" || email === "") {
            alert("Name and Email are required fields.");
            return false;
        }
        return true;
    }

    function toggleEmployeeFields() {
        let role = document.getElementById('role').value;
        let employeeFields = document.getElementById('employeeFields');
        if (role === 'employee') {
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
