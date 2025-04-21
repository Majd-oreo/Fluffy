@extends('layouts.Admin-layout')

@section('content')

<div class="container-fluid py-4" style="min-height: 100vh">

    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('admin.appointments.index') }}" class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <input type="text" name="name" class="form-control" placeholder="Search by user name..." value="{{ request('name') }}">
        </div>
        <div class="col-12 col-md-2">
            <input type="date" name="date" class="form-control" value="{{ request('date') }}">
        </div>
        <div class="col-12 col-md-3">
            <select name="service" class="form-select">
                <option value="">All Services</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ request('service') == $service->id ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-md-2">
    <input type="text" name="appointment_id" class="form-control" placeholder="Appointment ID..." value="{{ request('appointment_id') }}">
</div>
        <div class="col-12 col-md-2 d-flex gap-2">
            <button class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-filter me-1"></i> Filter
            </button>
            <a href="{{ route('admin.appointments.index') }}" class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-sync-alt me-1"></i> Reset
            </a>
        </div>
    </form>

    <!-- Page Header -->
    <div class="mb-4">
        <h1>Users Appointments</h1>
    </div>

    <!-- Appointments Grid -->
    <div class="row g-4" id="appointmentList">
        @if($appointments->isEmpty())
            <div class="col-12 text-center py-5">
                <div class="alert alert-info">No appointments found matching your criteria</div>
            </div>
        @else
            @foreach($appointments as $appointment)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 appointment-card" data-name="{{ strtolower($appointment->user->name) }}">
                    <div class="card shadow h-100">
                        <div class="card-body d-flex flex-column p-3">
                            <!-- Appointment Info -->
                            <h5 class="card-title mb-2">{{ $appointment->user->name }} </h5>
                            
                            <div class="d-flex flex-wrap gap-2 mb-2">
                                <span class="badge bg-primary rounded-pill">
                                    {{ $appointment->service->name }}
                                </span>
                                <span class="badge rounded-pill 
                                    @if($appointment->status == 'completed') bg-success
                                    @elseif($appointment->status == 'canceled') bg-danger
                                    @else bg-warning text-dark @endif">
                                    {{ ucfirst($appointment->status) }}
                                </span>
                            </div>
                            
                            <p class="mb-1"><strong>Pet:</strong> {{ $appointment->pet->name }}</p>
                            <p class="mb-3"><strong>Time:</strong> {{ $appointment->start_time}}</p>
                            
                            <p class="mb-3"><strong>ID:</strong> {{ $appointment->id}}</p>

                            <!-- Action Buttons -->
                            <div class="d-flex flex-wrap justify-content-center gap-2 mt-auto">
                                <!-- View Button -->
                                <button type="button" class="btn btn-info btn-sm flex-grow-1" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#appointmentModal-{{ $appointment->id }}">
                                    <i class="fas fa-eye me-1"></i> View
                                </button>

                                <!-- Edit Button -->
                                <a href="{{ route('admin.appointments.edit', $appointment->id) }}" 
                                   class="btn btn-warning btn-sm flex-grow-1">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" 
                                      method="POST" 
                                      class="d-inline-block flex-grow-1 delete-form" 
                                      id="deleteForm-{{ $appointment->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" 
                                            class="btn btn-danger btn-sm w-100 delete-btn" 
                                            data-id="{{ $appointment->id }}">
                                        <i class="fas fa-trash-alt me-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for appointment details -->
                <div class="modal fade" id="appointmentModal-{{ $appointment->id }}" tabindex="-1" 
                     aria-labelledby="appointmentModalLabel-{{ $appointment->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="appointmentModalLabel-{{ $appointment->id }}" style="color: #FF5B2E;">
                                    <i class="fas fa-calendar-check me-2"></i>Appointment Details({{ $appointment->id }})
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center mb-4">
                                    @if($appointment->pet->image)
                                        <img src="{{ asset('storage/' . $appointment->pet->image) }}" 
                                             class="img-fluid rounded mb-3" 
                                             style="max-height: 150px; width: auto;" 
                                             alt="{{ $appointment->pet->name }}">
                                    @endif
                                    <h5>{{ $appointment->user->name }}</h5>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong><i class="fas fa-paw me-2"></i>Pet:</strong></p>
                                        <p class="text-muted">{{ $appointment->pet->name }}</p>
                                        
                                        <p><strong><i class="fas fa-concierge-bell me-2"></i>Service:</strong></p>
                                        <p class="text-muted">{{ $appointment->service->name }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong><i class="fas fa-clock me-2"></i>Time:</strong></p>
                                        <p class="text-muted">{{ $appointment->start_time }}</p>
                                        
                                        <p><strong><i class="fas fa-info-circle me-2"></i>Status:</strong></p>
                                        <p>
                                            <span class="badge rounded-pill 
                                                @if($appointment->status == 'completed') bg-success
                                                @elseif($appointment->status == 'canceled') bg-danger
                                                @else bg-warning text-dark @endif">
                                                {{ ucfirst($appointment->status) }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="{{ route('admin.appointments.edit', $appointment->id) }}" class="btn" style="background-color: #FF5B2E; color: white;">
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
        {{ $appointments->links('pagination::bootstrap-5') }}
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Delete confirmation
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function () {
                let appointmentId = this.getAttribute("data-id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "This will permanently delete the appointment!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#FF5B2E",
                    cancelButtonColor: "#6c757d",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel",
                    backdrop: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("deleteForm-" + appointmentId).submit();
                    }
                });
            });
        });

        // Responsive adjustments
        function adjustCardLayout() {
            const cards = document.querySelectorAll('.appointment-card');
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