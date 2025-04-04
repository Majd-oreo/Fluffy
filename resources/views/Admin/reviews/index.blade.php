<style>
    .pagination .page-link {
        color: #ff5b2e;
        border: 1px solid #ddd;
    }

    .pagination .page-link:hover {
        background-color: #ff5b2e;
        color: white;
    }

    .pagination .page-item.active .page-link {
        background-color: #ff5b2e;
        border-color: #ff5b2e;
        color: white;
    }
</style>

@extends('layouts.Admin-layout')

@section('content')

<div class="container-fluid">

    <form method="GET" action="{{ route('admin.reviews.index') }}" class="row mb-4">
        <div class="col-md-3">
            <input type="text" name="name" class="form-control" placeholder="Search by user..." value="{{ request('name') }}">
        </div>
        <div class="col-md-3">
            <select name="service_id" class="form-control" onchange="this.form.submit()">
                <option value="">Filter by service</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ request('service_id') == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
        <select name="rating_sort" class="form-control" onchange="this.form.submit()">
            <option value="">Sort by Rating</option>
            <option value="asc" {{ request('rating_sort') == 'asc' ? 'selected' : '' }}>Low to High</option>
            <option value="desc" {{ request('rating_sort') == 'desc' ? 'selected' : '' }}>High to Low</option>
        </select>
    </div>
        <div class="col-md-2">
            <button class="btn" style="background-color: #FF5B2E; color: white;">Filter</button>
            <a href="{{ route('admin.reviews.index') }}" class="btn" style="background-color: #FF5B2E;color:white">Reset</a>
        </div>
        
    </form>

    <div class="row" id="reviewList">
    @if($reviews->isEmpty())
        <div class="col-12 text-center">
            <p>No reviews found</p>
        </div>
    @else
        @foreach($reviews as $review)
            <div class="col-xl-3 col-md-4 col-sm-6 mb-4 review-card" data-name="{{ strtolower($review->user->name) }}">
                <div class="card shadow h-100 py-3">
                    <div class="card-body text-center">
                        <img src="{{ $review->user->avatar ? asset('storage/'.$review->user->avatar) : asset('assets/images/Default.png') }}" 
                             class="rounded-circle mb-3" style="width: 80px; height: 80px;" alt="User Avatar">

                        <h5 class="card-title">{{ $review->user->name }}</h5>
                        <p class="card-text text-muted">{{ $review->service->name }}</p>
                        <p class="card-text">Rating: {{ $review->rating }} / 5</p>
                        <p class="card-text">{{ Str::limit($review->comment, 50) }}</p>

                        <div class="d-flex justify-content-center align-items-center">
                            <button type="button" class="btn btn-info btn-sm mx-2" data-bs-toggle="modal" data-bs-target="#reviewModal-{{ $review->id }}">
                                <i class="fas fa-eye"></i> View
                            </button>

                            <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" class="d-inline-block" id="deleteForm-{{ $review->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm mx-2 delete-btn" data-id="{{ $review->id }}">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="reviewModal-{{ $review->id }}" tabindex="-1" aria-labelledby="reviewModalLabel-{{ $review->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reviewModalLabel-{{ $review->id }}" style="color: #FF5B2E;">Review Details - {{ $review->user->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Service:</strong> {{ $review->service->name }}</p>
                            <p><strong>Rating:</strong> {{ $review->rating }} / 5</p>
                            <p><strong>Comment:</strong> {{ $review->comment ?? 'No Comment' }}</p>
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
        {{ $reviews->links('pagination::bootstrap-4') }}
    </div>
</div>

<script>
   document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function () {
            let reviewId = this.getAttribute("data-id");

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
                    document.getElementById("deleteForm-" + reviewId).submit();
                }
            });
        });
    });
});
</script>

@endsection
