@extends('layouts.employee-layout')

@section('content')

<div class="container-fluid py-4" style="min-height: 100vh">

    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('employee.reviews.index') }}" class="row g-3 mb-4">
        <div class="col-12 col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Search by user..." value="{{ request('name') }}">
        </div>
        <div class="col-12 col-md-4">
            <select name="rating_sort" class="form-select" onchange="this.form.submit()">
                <option value="">Sort by Rating</option>
                <option value="asc" {{ request('rating_sort') == 'asc' ? 'selected' : '' }}>Low to High</option>
                <option value="desc" {{ request('rating_sort') == 'desc' ? 'selected' : '' }}>High to Low</option>
            </select>
        </div>
        <div class="col-12 col-md-2 d-flex gap-2">
            <button class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-filter me-1"></i> Filter
            </button>
            <a href="{{ route('employee.reviews.index') }}" class="btn flex-grow-1" style="background-color: #FF5B2E; color: white;">
                <i class="fas fa-sync-alt me-1"></i> Reset
            </a>
        </div>
    </form>

    <!-- Reviews Grid -->
    <div class="row g-4" id="reviewList">
        @if($reviews->isEmpty())
            <div class="col-12 text-center py-5">
                <div class="alert alert-info">No reviews found matching your criteria</div>
            </div>
        @else
            @foreach($reviews as $review)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 review-card" data-name="{{ strtolower($review->user->name) }}">
                    <div class="card shadow h-100">
                        <div class="card-body d-flex flex-column align-items-center text-center p-3">
                            <!-- User Avatar -->
                            <img src="{{ $review->user->avatar ? asset('storage/'.$review->user->avatar) : asset('assets/images/Default.png') }}" 
                                 class="rounded-circle mb-3 object-fit-cover" 
                                 style="width: 80px; height: 80px;" 
                                 alt="User Avatar">

                            <!-- Review Info -->
                            <h5 class="card-title mb-1">{{ $review->user->name }}</h5>
                            <p class="text-muted small mb-2">{{ $review->service->name }}</p>
                            
                            <!-- Star Rating -->
                            <div class="mb-2">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star {{ $i <= $review->rating ? 'text-warning' : 'text-secondary' }}"></i>
                                @endfor
                                <span class="ms-1">({{ $review->rating }}/5)</span>
                            </div>
                            
                            <!-- Comment Preview -->
                            <p class="card-text small flex-grow-1">
                                {{ Str::limit($review->comment, 80) }}
                            </p>

                            <!-- Action Button -->
                            <div class="d-flex justify-content-center w-100">
                                <button type="button" class="btn btn-info btn-sm flex-grow-1" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#reviewModal-{{ $review->id }}">
                                    <i class="fas fa-eye me-1"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for review details -->
                <div class="modal fade" id="reviewModal-{{ $review->id }}" tabindex="-1" 
                     aria-labelledby="reviewModalLabel-{{ $review->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="reviewModalLabel-{{ $review->id }}" style="color: #FF5B2E;">
                                    <i class="fas fa-star me-2"></i>Review by {{ $review->user->name }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center mb-4">
                                    <img src="{{ $review->user->avatar ? asset('storage/'.$review->user->avatar) : asset('assets/images/Default.png') }}" 
                                         class="rounded-circle mb-3" 
                                         style="width: 100px; height: 100px; object-fit: cover;" 
                                         alt="User Avatar">
                                    <h5>{{ $review->user->name }}</h5>
                                    <div class="d-flex justify-content-center align-items-center">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star fa-lg {{ $i <= $review->rating ? 'text-warning' : 'text-secondary' }}"></i>
                                        @endfor
                                        <span class="ms-2 fw-bold">{{ $review->rating }}/5</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p><strong><i class="fas fa-concierge-bell me-2"></i>Service:</strong></p>
                                        <p class="text-muted">{{ $review->service->name }}</p>
                                        
                                        <p><strong><i class="fas fa-comment me-2"></i>Comment:</strong></p>
                                        <div class="bg-light p-3 rounded">
                                            {{ $review->comment ?? 'No comment provided' }}
                                        </div>
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
        {{ $reviews->links('pagination::bootstrap-5') }}
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Responsive adjustments
        function adjustCardLayout() {
            const cards = document.querySelectorAll('.review-card');
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