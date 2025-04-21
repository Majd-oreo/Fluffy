@extends('layouts.Admin-layout')

@section('content')

<div class="container-fluid py-4" style="min-height: 100vh">

    <!-- Search Form -->
    <form method="GET" action="{{ route('admin.services.index') }}" class="row g-3 mb-4">
        <div class="col-12 col-md-8">
            <input type="text" name="name" class="form-control" placeholder="Search by name..." value="{{ request('name') }}">
        </div>
        <div class="col-12 col-md-4 d-flex gap-2">
            <button class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-filter me-1"></i> Filter
            </button>
            <a href="{{ route('admin.services.index') }}" class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-sync-alt me-1"></i> Reset
            </a>
        </div>
    </form>

    <!-- Add Service Button -->
    <div class="mb-4">
        <a href="{{ route('admin.services.create') }}" class="btn" style="background-color: #FF5B2E; color: white;">
            <i class="fas fa-plus-circle me-2"></i> Add Service
        </a>
    </div>

    <!-- Services Grid -->
    <div class="row g-4" id="serviceList">
        @if($services->isEmpty())
            <div class="col-12 text-center py-5">
                <div class="alert alert-info">No services found matching your criteria</div>
            </div>
        @else
            @foreach($services as $service)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 service-card" data-name="{{ strtolower($service->name) }}">
                    <div class="card shadow h-100">
                        <div class="card-body d-flex flex-column align-items-center text-center p-3">
                            <!-- Service Icon -->
                            <img src="{{ $service->icon ? asset('storage/'.$service->icon) : asset('assets/images/Default.png') }}" 
                                 class="rounded-circle mb-3 object-fit-cover" 
                                 style="width: 80px; height: 80px;" 
                                 alt="Service Icon">

                            <!-- Service Info -->
                            <h5 class="card-title mb-1">{{ $service->name }}</h5>
                            <div class="d-flex flex-wrap justify-content-center gap-2 mb-2">
                                
                              
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex flex-wrap justify-content-center gap-2 mt-auto w-100">
                                <!-- View Button -->
                                <button type="button" class="btn btn-info btn-sm flex-grow-1" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#serviceModal-{{ $service->id }}">
                                    <i class="fas fa-eye me-1"></i> View
                                </button>

                                <!-- Edit Button -->
                                <a href="{{ route('admin.services.edit', $service->id) }}" 
                                   class="btn btn-warning btn-sm flex-grow-1">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('admin.services.destroy', $service->id) }}" 
                                      method="POST" 
                                      class="d-inline-block flex-grow-1 delete-form" 
                                      id="deleteForm-{{ $service->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" 
                                            class="btn btn-danger btn-sm w-100 delete-btn" 
                                            data-id="{{ $service->id }}">
                                        <i class="fas fa-trash-alt me-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for service details -->
                <div class="modal fade" id="serviceModal-{{ $service->id }}" tabindex="-1" 
                     aria-labelledby="serviceModalLabel-{{ $service->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="serviceModalLabel-{{ $service->id }}" style="color: #FF5B2E;">
                                    <i class="fas fa-concierge-bell me-2"></i>{{ $service->name }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <img src="{{ $service->icon ? asset('storage/'.$service->icon) : asset('assets/images/Default.png') }}" 
                                             class="rounded-circle mb-3" 
                                             style="width: 150px; height: 150px; object-fit: cover;" 
                                             alt="Service Icon">
                                        <div class="d-flex justify-content-center gap-2 mb-3">
                                           
                                            <!-- <span class="badge bg-success rounded-pill">
                                                {{ $service->employees_count }} staff
                                            </span> -->
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="mb-3"><i class="fas fa-info-circle me-2"></i>Description</h6>
                                        <div class="bg-light p-3 rounded mb-3">
                                            {{ $service->description ?? 'No description available' }}
                                        </div>

                                        <h6 class="mb-3"><i class="fas fa-align-left me-2"></i>Details</h6>
                                        <div class="bg-light p-3 rounded mb-3">
                                            {{ $service->long_description ?? 'No details available' }}
                                        </div>

                                        <h6 class="mb-3"><i class="fas fa-users me-2"></i>Assigned Staff</h6>
                                        @if($service->employees->isNotEmpty())
                                            <div class="table-responsive">
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($service->employees as $employee)
                                                        <tr>
                                                            <td>{{ $employee->name }}</td>
                                                            <td>{{ $employee->employee->job_title ?? 'N/A' }}</td>
                                                            <td>
                                                                <span class="badge bg-{{ $employee->employee->status == 'active' ? 'success' : 'secondary' }}">
                                                                    {{ ucfirst($employee->employee->status ?? 'inactive') }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <div class="alert alert-warning mb-0">
                                                No staff assigned to this service
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn" style="background-color: #FF5B2E; color: white;">
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
        {{ $services->links('pagination::bootstrap-5') }}
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Delete confirmation
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function () {
                let serviceId = this.getAttribute("data-id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "This will permanently delete the service!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#FF5B2E",
                    cancelButtonColor: "#6c757d",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel",
                    backdrop: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("deleteForm-" + serviceId).submit();
                    }
                });
            });
        });

        // Responsive adjustments
        function adjustCardLayout() {
            const cards = document.querySelectorAll('.service-card');
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