@extends('layouts.Admin-layout')

@section('content')

<div class="container-fluid py-4" style="min-height: 105vh">

    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('admin.users.index') }}" class="row g-3 mb-4">
        <div class="col-12 col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Search by name..." value="{{ request('name') }}">
        </div>
        <div class="col-12 col-md-4">
            <select name="role" class="form-select" onchange="this.form.submit()">
                <option value="">Filter by role</option>
                <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>User</option>
                <option value="employee" {{ request('role') == 'employee' ? 'selected' : '' }}>Employee</option>
            </select>
        </div>
        <div class="col-12 col-md-2 d-flex gap-2">
            <button class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">Filter</button>
            <a href="{{ route('admin.users.index') }}" class="btn flex-grow-1" style="background-color: #FF5B2E;color:white">
                Reset
            </a>
        </div>
    </form>

    <!-- Add User Button -->
    <div class="mb-4">
        <a href="{{ route('admin.users.create') }}" class="btn" style="background-color: #FF5B2E; color: white;">
            <i class="fas fa-plus-circle me-2"></i> Add User
        </a>
    </div>

    <!-- Users Grid -->
    <div class="row g-4" id="userList">
        @if($users->isEmpty())
            <div class="col-12 text-center py-5">
                <div class="alert alert-info">No users found matching your criteria</div>
            </div>
        @else
            @foreach($users as $user)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 user-card" 
                     data-name="{{ strtolower($user->name) }}" 
                     data-role="{{ strtolower($user->role) }}">
                    
                    <div class="card shadow h-100">
                        <div class="card-body d-flex flex-column align-items-center text-center p-3">
                            <!-- User Image -->
                            <img src="{{ $user->image ? asset('storage/'.$user->image) : asset('assets/images/Default.png') }}" 
                                 class="rounded-circle mb-3 object-fit-cover" 
                                 style="width: 80px; height: 80px;" 
                                 alt="User Image">

                            <!-- User Info -->
                            <h5 class="card-title mb-1">{{ $user->name }}</h5>
                            <div class="d-flex gap-2 mb-2">
                                <span class="badge rounded-pill 
                                    @if($user->role == 'admin') bg-danger 
                                    @elseif($user->role == 'employee') bg-primary 
                                    @else bg-success @endif">
                                    {{ ucfirst($user->role) }}
                                </span>
                                @if($user->role == 'employee')
                                <span class="badge rounded-pill 
                                    @if(optional($user->employee)->status == 'active') bg-success
                                    @else bg-secondary @endif">
                                    {{ optional($user->employee)->status ?? 'N/A' }}
                                </span>
                                @endif
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex flex-wrap justify-content-center gap-2 mt-auto w-100">
                                <!-- View Button -->
                                <button type="button" class="btn btn-info btn-sm flex-grow-1" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#userModal-{{ $user->id }}">
                                    <i class="fas fa-eye me-1"></i> View
                                </button>

                                <!-- Edit Button -->
                                <a href="{{ route('admin.users.edit', $user->id) }}" 
                                   class="btn btn-warning btn-sm flex-grow-1">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('admin.users.destroy', $user->id) }}" 
                                      method="POST" 
                                      class="d-inline-block flex-grow-1 delete-form" 
                                      id="deleteForm-{{ $user->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" 
                                            class="btn btn-danger btn-sm w-100 delete-btn" 
                                            data-id="{{ $user->id }}">
                                        <i class="fas fa-trash-alt me-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for user details -->
                <div class="modal fade" id="userModal-{{ $user->id }}" tabindex="-1" 
                     aria-labelledby="userModalLabel-{{ $user->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="userModalLabel-{{ $user->id }}" style="color: #FF5B2E;">
                                    <i class="fas fa-user-circle me-2"></i>{{ $user->name }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center mb-4">
                                    <img src="{{ $user->image ? asset('storage/'.$user->image) : asset('assets/images/Default.png') }}" 
                                         class="rounded-circle mb-2" 
                                         style="width: 120px; height: 120px; object-fit: cover;" 
                                         alt="User Image">
                                    <h5>{{ $user->name }}</h5>
                                    <span class="badge bg-{{ $user->role == 'admin' ? 'danger' : ($user->role == 'employee' ? 'primary' : 'success') }}">
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong><i class="fas fa-envelope me-2"></i>Email:</strong></p>
                                        <p class="text-muted">{{ $user->email }}</p>
                                        
                                        <p><strong><i class="fas fa-phone me-2"></i>Phone:</strong></p>
                                        <p class="text-muted">{{ $user->phone ?? 'N/A' }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong><i class="fas fa-map-marker-alt me-2"></i>Address:</strong></p>
                                        <p class="text-muted">{{ $user->address ?? 'N/A' }}</p>
                                    </div>
                                </div>

                                @if($user->role == 'employee')
                                    <hr>
                                    <h6 class="mb-3"><i class="fas fa-briefcase me-2"></i>Employee Details</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Status:</strong></p>
                                            <p>
                                                <span class="badge bg-{{ optional($user->employee)->status == 'active' ? 'success' : 'secondary' }}">
                                                    {{ optional($user->employee)->status == 'active' ? 'Active' : 'Inactive' }}
                                                </span>
                                            </p>
                                            
                                            <p><strong>Salary:</strong></p>
                                            <p class="text-muted">{{ $user->employee->salary ? '$'.number_format($user->employee->salary, 2) : 'N/A' }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Job Title:</strong></p>
                                            <p class="text-muted">{{ $user->employee->job_title ?? 'N/A' }}</p>
                                            
                                            <p><strong>Service:</strong></p>
                                            <p class="text-muted">
                                                @if($user->employee && $user->employee->service_id)
                                                    {{ $user->employee->service->name ?? 'No Service' }}
                                                @else
                                                    Not Assigned
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn" style="background-color: #FF5B2E; color: white;">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $users->links('pagination::bootstrap-5') }}
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Delete confirmation
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function () {
                let userId = this.getAttribute("data-id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "This will permanently delete the user!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#FF5B2E",
                    cancelButtonColor: "#6c757d",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel",
                    backdrop: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("deleteForm-" + userId).submit();
                    }
                });
            });
        });

        // Responsive adjustments
        function adjustCardLayout() {
            const cards = document.querySelectorAll('.user-card');
            const screenWidth = window.innerWidth;
            
            if (screenWidth < 576) {
                // Mobile view - single column
                cards.forEach(card => {
                    card.classList.remove('col-sm-6', 'col-md-4', 'col-lg-3');
                    card.classList.add('col-12');
                });
            } else if (screenWidth < 768) {
                // Small devices - 2 columns
                cards.forEach(card => {
                    card.classList.remove('col-12', 'col-md-4', 'col-lg-3');
                    card.classList.add('col-sm-6');
                });
            } else if (screenWidth < 992) {
                // Medium devices - 3 columns
                cards.forEach(card => {
                    card.classList.remove('col-12', 'col-sm-6', 'col-lg-3');
                    card.classList.add('col-md-4');
                });
            } else {
                // Large devices - 4 columns
                cards.forEach(card => {
                    card.classList.remove('col-12', 'col-sm-6', 'col-md-4');
                    card.classList.add('col-lg-3');
                });
            }
        }

        // Initial adjustment
        adjustCardLayout();
        
        // Adjust on window resize
        window.addEventListener('resize', adjustCardLayout);
    });
</script>

<style>
    /* Custom styles for better card appearance */
    .card {
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .card-body {
        padding: 1.5rem;
    }
    
    .badge {
        font-weight: 500;
        padding: 0.35em 0.65em;
    }
    
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
    
    .object-fit-cover {
        object-fit: cover;
    }
    
    @media (max-width: 767.98px) {
        .card {
            margin-bottom: 1rem;
        }
        
        .btn-sm {
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
        }
    }
</style>

@endsection