@extends('layouts.employee-layout')

@section('content')

<div class="container-fluid py-4" style="min-height: 100vh">

    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('employee.pets.index') }}" class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <input type="text" name="name" class="form-control" placeholder="Search by name..." value="{{ request('name') }}">
        </div>
        <div class="col-12 col-md-3">
            <select name="type" class="form-select" onchange="this.form.submit()">
                <option value="">Filter by type</option>
                <option value="Cat" {{ request('type') == 'Cat' ? 'selected' : '' }}>Cat</option>
                <option value="Dog" {{ request('type') == 'Dog' ? 'selected' : '' }}>Dog</option>
                <option value="Bird" {{ request('type') == 'Bird' ? 'selected' : '' }}>Bird</option>
                <option value="Rabbit" {{ request('type') == 'Rabbit' ? 'selected' : '' }}>Rabbit</option>
            </select>
        </div>
        <div class="col-12 col-md-3">
            <select id="user_id" name="user_id" class="form-select">
                <option value="">Select Owner</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                        {{ $user->name??"Deleted User" }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-md-2 d-flex gap-2">
            <button class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-filter me-1"></i> Filter
            </button>
            <a href="{{ route('employee.pets.index') }}" class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-sync-alt me-1"></i> Reset
            </a>
        </div>
    </form>

    <!-- Add Pet Button -->
    <div class="mb-4">
        <a href="{{ route('employee.pets.create') }}" class="btn" style="background-color: #FF5B2E; color: white;">
            <i class="fas fa-plus-circle me-2"></i> Add Pet
        </a>
    </div>

    <!-- Pets Grid -->
    <div class="row g-4" id="petList">
        @if($pets->isEmpty())
            <div class="col-12 text-center py-5">
                <div class="alert alert-info">No pets found matching your criteria</div>
            </div>
        @else
            @foreach($pets as $pet)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pet-card" data-name="{{ strtolower($pet->name) }}" data-type="{{ strtolower($pet->type) }}">
                    <div class="card shadow h-100">
                        <div class="card-body d-flex flex-column align-items-center text-center p-3">
                            <!-- Pet Image -->
                            <img src="{{ $pet->image ? asset('storage/'.$pet->image) : asset('assets/images/Default.png') }}" 
                                 class="rounded-circle mb-3 object-fit-cover" 
                                 style="width: 80px; height: 80px;" 
                                 alt="Pet Image">

                            <!-- Pet Info -->
                            <h5 class="card-title mb-1">{{ $pet->name }}</h5>
                            <div class="d-flex flex-wrap justify-content-center gap-2 mb-2">
                                <span class="badge rounded-pill 
                                    @if($pet->type == 'Dog') bg-primary
                                    @elseif($pet->type == 'Cat') bg-info
                                    @elseif($pet->type == 'Bird') bg-warning text-dark
                                    @else bg-secondary @endif">
                                    {{ $pet->type }}
                                </span>
                                <span class="badge bg-dark rounded-pill">
                                    {{ $pet->user->name??"Deleted Pet" }}
                                </span>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex flex-wrap justify-content-center gap-2 mt-auto w-100">
                                <!-- View Button -->
                                <button type="button" class="btn btn-info btn-sm flex-grow-1" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#petModal-{{ $pet->id }}">
                                    <i class="fas fa-eye me-1"></i> View
                                </button>

                                <!-- Edit Button -->
                                <a href="{{ route('employee.pets.edit', $pet->id) }}" 
                                   class="btn btn-warning btn-sm flex-grow-1">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('employee.pets.destroy', $pet->id) }}" 
                                      method="POST" 
                                      class="d-inline-block flex-grow-1 delete-form" 
                                      id="deleteForm-{{ $pet->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" 
                                            class="btn btn-danger btn-sm w-100 delete-btn" 
                                            data-id="{{ $pet->id }}">
                                        <i class="fas fa-trash-alt me-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for pet details -->
                <div class="modal fade" id="petModal-{{ $pet->id }}" tabindex="-1" 
                     aria-labelledby="petModalLabel-{{ $pet->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="petModalLabel-{{ $pet->id }}" style="color: #FF5B2E;">
                                    <i class="fas fa-paw me-2"></i>{{ $pet->name }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <img src="{{ $pet->image ? asset('storage/'.$pet->image) : asset('assets/images/Default.png') }}" 
                                             class="rounded-circle mb-3" 
                                             style="width: 150px; height: 150px; object-fit: cover;" 
                                             alt="Pet Image">
                                        <div class="d-flex justify-content-center gap-2 mb-3">
                                            <span class="badge rounded-pill 
                                                @if($pet->type == 'Dog') bg-primary
                                                @elseif($pet->type == 'Cat') bg-info
                                                @elseif($pet->type == 'Bird') bg-warning text-dark
                                                @else bg-secondary @endif">
                                                {{ $pet->type }}
                                            </span>
                                            <span class="badge bg-dark rounded-pill">
                                                {{ $pet->user->name??"Deleted Pet" }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><strong><i class="fas fa-dna me-2"></i>Breed:</strong></p>
                                                <p class="text-muted">{{ $pet->breed ?? 'N/A' }}</p>
                                                
                                                <p><strong><i class="fas fa-birthday-cake me-2"></i>Age:</strong></p>
                                                <p class="text-muted">{{ $pet->age ?? 'N/A' }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong><i class="fas fa-weight me-2"></i>Weight:</strong></p>
                                                <p class="text-muted">{{ $pet->weight ? $pet->weight.' kg' : 'N/A' }}</p>
                                                
                                                <p><strong><i class="fas fa-user me-2"></i>Owner:</strong></p>
                                                <p class="text-muted">{{ $pet->user->name??"Deleted Pet" }}</p>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <p><strong><i class="fas fa-file-medical me-2"></i>Medical History:</strong></p>
                                            <div class="bg-light p-3 rounded">
                                                {{ $pet->medical_history ?? 'No medical history recorded' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="{{ route('employee.pets.edit', $pet->id) }}" class="btn" style="background-color: #FF5B2E; color: white;">
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
        {{ $pets->links('pagination::bootstrap-5') }}
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Delete confirmation
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function () {
                let petId = this.getAttribute("data-id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "This will permanently delete the pet!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#FF5B2E",
                    cancelButtonColor: "#6c757d",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel",
                    backdrop: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("deleteForm-" + petId).submit();
                    }
                });
            });
        });

        // Responsive adjustments
        function adjustCardLayout() {
            const cards = document.querySelectorAll('.pet-card');
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