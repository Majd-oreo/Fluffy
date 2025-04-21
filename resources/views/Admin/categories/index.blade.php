@extends('layouts.Admin-layout')

@section('content')

<div class="container-fluid py-4" style="min-height: 105vh">

    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('admin.categories.index') }}" class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <input type="text" name="name" class="form-control" placeholder="Search by name..." value="{{ request('name') }}">
        </div>
        <div class="col-12 col-md-4">
            <select name="service_id" class="form-select" onchange="this.form.submit()">
                <option value="">Filter by service</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ request('service_id') == $service->id ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-md-4 d-flex gap-2">
            <button class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-filter me-1"></i> Filter
            </button>
            <a href="{{ route('admin.categories.index') }}" class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-sync-alt me-1"></i> Reset
            </a>
        </div>
    </form>

    <!-- Add Category Button -->
    <div class="mb-4">
        <a href="{{ route('admin.categories.create') }}" class="btn" style="background-color: #FF5B2E; color: white;">
            <i class="fas fa-plus-circle me-2"></i> Add Category
        </a>
    </div>

    <!-- Categories Grid -->
    <div class="row g-4" id="categoryList">
        @if($categories->isEmpty())
            <div class="col-12 text-center py-5">
                <div class="alert alert-info">No categories found matching your criteria</div>
            </div>
        @else
            @foreach($categories as $category)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 category-card" data-name="{{ strtolower($category->name) }}">
                    <div class="card shadow h-100">
                        <div class="card-body d-flex flex-column align-items-center text-center p-3">
                            <!-- Category Icon -->
                            <img src="{{ $category->icon ? asset('storage/'.$category->icon) : asset('assets/images/Default.png') }}" 
                                 class="rounded-circle mb-3 object-fit-cover" 
                                 style="width: 80px; height: 80px;" 
                                 alt="Category Icon">

                            <!-- Category Info -->
                            <h5 class="card-title mb-1">{{ $category->name }}</h5>
                            <div class="d-flex flex-wrap justify-content-center gap-2 mb-2">
                                <span class="badge bg-primary rounded-pill">
                                    {{ $category->service->name }}
                                </span>
                                <span class="badge bg-success rounded-pill">
                                    ${{ number_format($category->price, 2) }}
                                </span>
                                <span class="badge bg-primary rounded-pill">
                                                {{ $category->duration }} mins
                                            </span>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex flex-wrap justify-content-center gap-2 mt-auto w-100">
                                <!-- View Button -->
                                <button type="button" class="btn btn-info btn-sm flex-grow-1" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#categoryModal-{{ $category->id }}">
                                    <i class="fas fa-eye me-1"></i> View
                                </button>

                                <!-- Edit Button -->
                                <a href="{{ route('admin.categories.edit', $category->id) }}" 
                                   class="btn btn-warning btn-sm flex-grow-1">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" 
                                      method="POST" 
                                      class="d-inline-block flex-grow-1 delete-form" 
                                      id="deleteForm-{{ $category->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" 
                                            class="btn btn-danger btn-sm w-100 delete-btn" 
                                            data-id="{{ $category->id }}">
                                        <i class="fas fa-trash-alt me-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for category details -->
                <div class="modal fade" id="categoryModal-{{ $category->id }}" tabindex="-1" 
                     aria-labelledby="categoryModalLabel-{{ $category->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="categoryModalLabel-{{ $category->id }}" style="color: #FF5B2E;">
                                    <i class="fas fa-tag me-2"></i>{{ $category->name }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center mb-4">
                                    <img src="{{ $category->icon ? asset('storage/'.$category->icon) : asset('assets/images/Default.png') }}" 
                                         class="rounded-circle mb-2" 
                                         style="width: 120px; height: 120px; object-fit: cover;" 
                                         alt="Category Icon">
                                    <h5>{{ $category->name }}</h5>
                                    <div class="d-flex justify-content-center gap-2">
                                        <span class="badge bg-primary rounded-pill">
                                            {{ $category->service->name }}
                                        </span>
                                        <span class="badge bg-success rounded-pill">
                                            ${{ number_format($category->price, 2) }}
                                        </span>
                                        <span class="badge bg-primary rounded-pill">
                                                {{ $category->duration }} mins
                                            </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p><strong><i class="fas fa-info-circle me-2"></i>Description:</strong></p>
                                        <div class="bg-light p-3 rounded">
                                            {{ $category->description ?? 'No description available' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn" style="background-color: #FF5B2E; color: white;">
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
        {{ $categories->links('pagination::bootstrap-5') }}
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Delete confirmation
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function () {
                let categoryId = this.getAttribute("data-id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "This will permanently delete the category!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#FF5B2E",
                    cancelButtonColor: "#6c757d",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel",
                    backdrop: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("deleteForm-" + categoryId).submit();
                    }
                });
            });
        });

        // Responsive adjustments
        function adjustCardLayout() {
            const cards = document.querySelectorAll('.category-card');
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