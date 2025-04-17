@extends('layouts.Admin-layout')

@section('content')

<div class="container-fluid py-4" style="min-height: 100vh">

    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('admin.blogs.index') }}" class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <input type="text" name="title" class="form-control" placeholder="Search by title..." value="{{ request('title') }}">
        </div>
        <div class="col-12 col-md-3">
            <select name="user_id" class="form-select">
                <option value="">Select Employee</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-md-3">
            <select name="service_type" class="form-select">
                <option value="">Select Service</option>
                @foreach($services as $service)
                    <option value="{{ $service->name }}" {{ request('service_type') == $service->name ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-md-2 d-flex gap-2">
            <button class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-filter me-1"></i> Filter
            </button>
            <a href="{{ route('admin.blogs.index') }}" class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-sync-alt me-1"></i> Reset
            </a>
        </div>
    </form>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Employee Blogs</h2>
    </div>

    <!-- Blogs Grid -->
    <div class="row g-4" id="blogList">
        @if($blogs->isEmpty())
            <div class="col-12 text-center py-5">
                <div class="alert alert-info">No blogs found matching your criteria</div>
            </div>
        @else
            @foreach($blogs as $blog)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 blog-card">
                    <div class="card shadow h-100">
                        <div class="card-body d-flex flex-column p-3">
                            <!-- Blog Info -->
                            <h5 class="card-title mb-2">{{ $blog->title }}</h5>
                            
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge bg-primary rounded-pill">
                                    {{ $blog->service->name }}
                                </span>
                                <span class="badge bg-secondary rounded-pill">
                                    {{ $blog->user->name }}
                                </span>
                            </div>
                            
                            <!-- Preview Content -->
                            <div class="mb-3 flex-grow-1">
                                <p class="card-text text-muted small">
                                    {{ Str::limit($blog->content, 100) }}
                                </p>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <!-- View Button -->
                                <button type="button" class="btn btn-info btn-sm flex-grow-1" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#blogModal-{{ $blog->id }}">
                                    <i class="fas fa-eye me-1"></i> View
                                </button>

                                <!-- Delete Button -->
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" 
                                      method="POST" 
                                      class="d-inline-block flex-grow-1 delete-form" 
                                      id="deleteForm-{{ $blog->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" 
                                            class="btn btn-danger btn-sm w-100 delete-btn" 
                                            data-id="{{ $blog->id }}">
                                        <i class="fas fa-trash-alt me-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for blog details -->
                <div class="modal fade" id="blogModal-{{ $blog->id }}" tabindex="-1" 
                     aria-labelledby="blogModalLabel-{{ $blog->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="blogModalLabel-{{ $blog->id }}" style="color: #FF5B2E;">
                                    <i class="fas fa-blog me-2"></i>{{ $blog->title }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong><i class="fas fa-tag me-2"></i>Service Type:</strong></p>
                                        <p class="text-muted">{{ $blog->service->name }}</p>
                                        
                                        <p><strong><i class="fas fa-user me-2"></i>Author:</strong></p>
                                        <p class="text-muted">{{ $blog->user->name }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong><i class="fas fa-calendar me-2"></i>Created At:</strong></p>
                                        <p class="text-muted">{{ $blog->created_at->format('M d, Y') }}</p>
                                        
                                        <p><strong><i class="fas fa-clock me-2"></i>Last Updated:</strong></p>
                                        <p class="text-muted">{{ $blog->updated_at->format('M d, Y') }}</p>
                                    </div>
                                </div>
                                
                                <div class="mt-4">
                                    <p><strong><i class="fas fa-align-left me-2"></i>Content:</strong></p>
                                    <div class="bg-light p-3 rounded">
                                        {{ $blog->content }}
                                    </div>
                                </div>
                                  
                                <div class="mt-4">
                                    <p><strong><i class="fas fa-align-left me-2"></i>Content:</strong></p>
                                    <div class="bg-light p-3 rounded">
                                        {{ $blog->content_other }}
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $blogs->links('pagination::bootstrap-5') }}
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Delete confirmation
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function () {
                let blogId = this.getAttribute("data-id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "This will permanently delete the blog!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#FF5B2E",
                    cancelButtonColor: "#6c757d",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel",
                    backdrop: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("deleteForm-" + blogId).submit();
                    }
                });
            });
        });

        // Responsive adjustments
        function adjustCardLayout() {
            const cards = document.querySelectorAll('.blog-card');
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