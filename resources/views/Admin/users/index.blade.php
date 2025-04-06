@extends('layouts.Admin-layout')

@section('content')

<div class="container-fluid">

    <form method="GET" action="{{ route('admin.users.index') }}" class="row mb-4">
        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Search by name..." value="{{ request('name') }}">
        </div>
        <div class="col-md-4">
            <select name="role" class="form-control" onchange="this.form.submit()">
                <option value="">Filter by role</option>
                <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>User</option>
                <option value="employee" {{ request('role') == 'employee' ? 'selected' : '' }}>Employee</option>
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn" style="background-color: #FF5B2E; color: white;">Filter</button>
            <a href="{{ route('admin.users.index') }}" class="btn" style="background-color: #FF5B2E;color:white">
                Reset
            </a>
        </div>
    </form>

    <div class="mb-4">
        <a href="{{ route('admin.users.create') }}" class="btn btn-lg" style="background-color: #FF5B2E; color: white;">
            <i class="fas fa-plus-circle"></i> Add User
        </a>
    </div>

    <div class="row" id="userList">
        @if($users->isEmpty())
            <div class="col-12 text-center">
                <p>No users found</p>
            </div>
        @else
            @foreach($users as $user)
                <div class="col-xl-3 col-md-4 col-sm-6 mb-4 user-card" data-name="{{ strtolower($user->name) }}" data-role="{{ strtolower($user->role) }}">
                    <div class="card shadow h-100 py-3">
                        <div class="card-body text-center">
                            <img src="{{ $user->image ? asset('storage/'.$user->image) : asset('assets/images/Default.png') }}" 
                                 class="rounded-circle mb-3" style="width: 100px; height: 100px;" alt="User Image">

                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text text-muted">{{ $user->role }}</p>

                            <div class="d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-info btn-sm mx-2" data-bs-toggle="modal" data-bs-target="#userModal-{{ $user->id }}">
                                    <i class="fas fa-eye"></i> View
                                </button>

                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm mx-2">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline-block" id="deleteForm-{{ $user->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm mx-2 delete-btn" data-id="{{ $user->id }}">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Modal for user details -->
                <div class="modal fade" id="userModal-{{ $user->id }}" tabindex="-1" aria-labelledby="userModalLabel-{{ $user->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="userModalLabel-{{ $user->id }}" style="color: #FF5B2E;">User Details - {{ $user->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Image:</strong></p>
                                <img src="{{ $user->image ? asset('storage/'.$user->image) : asset('assets/images/Default.png') }}" 
                                     class="rounded-circle mb-3" style="width: 100px; height: 100px;" alt="User Image">
                                
                                <p><strong>Name:</strong> {{ $user->name }}</p>
                                <p><strong>Role:</strong> {{ $user->role }}</p>
                                <p><strong>Email:</strong> {{ $user->email }}</p>
                                <p><strong>Phone:</strong> {{ $user->phone }}</p>
                                <p><strong>Address:</strong> {{ $user->address ?? 'No Address' }}</p>

                                @if($user->role == 'employee')
                                    <p><strong>Salary:</strong> {{ $user->employee->salary ?? 'Not Available' }}</p>
                                    <p><strong>Status:</strong> 
                                        {{ optional($user->employee)->status == 'active' ? 'Active' : 'Inactive' }}
                                    </p>
                                    <p><strong>Job Title:</strong> {{ $user->employee->job_title ?? 'Not Available'}}</p>

                                    <p><strong>Service Name:</strong> 
                                        @if($user->employee && $user->employee->service_id)
                                            {{ $user->employee->service->name ?? 'No Service Assigned' }}
                                        @else
                                            Not Available
                                        @endif
                                    </p>
                                @endif

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #FF5B2E; color: white;">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        <div class="text-center mt-4">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function () {
                let userId = this.getAttribute("data-id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "This action cannot be undone!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#FF5B2E",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel"
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("deleteForm-" + userId).submit();
                    }
                });
            });
        });
    });
</script>

@endsection
