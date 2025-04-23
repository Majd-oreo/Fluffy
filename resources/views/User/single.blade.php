@extends('layouts.User-layout')

@section('content')
<style>
    .product-details h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 1rem;
        color: #333;
    }

    .product-price h3 {
        font-size: 1.75rem;
        color: #FF5B2E;
        margin-bottom: 1.5rem;
        font-weight: 600;
    }

    .product-image img {
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }

    .product-image img:hover {
        transform: scale(1.02);
    }

    .product-category {
        font-size: 1.1rem;
        color: #6c757d;
        margin-bottom: 0.75rem;
    }

    .product-rating i {
        font-size: 1.2rem;
        color: #FFD700;
    }

    .product-rating .text-muted {
        font-size: 1rem;
        color: #6c757d;
    }

    .review-form .form-group {
        margin-bottom: 1.5rem;
    }

    .review-form textarea {
        height: 120px;
        resize: none;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 15px;
    }

    .review-form .stars {
        display: flex;
        gap: 5px;
        margin-bottom: 15px;
    }

    .stars i {
        font-size: 1.5rem;
        cursor: pointer;
        color: #ddd;
        transition: color 0.2s;
    }

    .stars i.selected {
        color: #FFD700;
    }

    /* Primary Button Styles */
    .btn-primary {
        background-color: #FF5B2E;
        border-color: #FF5B2E;
        color: white;
        padding: 10px 25px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }

    .btn-primary:hover {
        background-color: #e04a1e;
        border-color: #e04a1e;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(255, 91, 46, 0.2);
    }

    .btn-primary i {
        margin-right: 8px;
    }

    /* Submit Review Button */
    .btn-submit-review {
        background-color: #FF5B2E;
        color: white;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-submit-review:hover {
        background-color: #e04a1e;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(255, 91, 46, 0.2);
    }

    /* Section Styling */
    .petnest-single-product {
        background-color: #f9f9f9;
        padding: 40px 0;
    }

    /* Review Section */
    .review-section {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        margin-top: 40px;
    }

    .review-section h4 {
        color: #333;
        margin-bottom: 20px;
        font-weight: 600;
    }

    /* Responsive Adjustments */
    @media (max-width: 767px) {
        .product-details {
            margin-top: 30px;
        }
        
        .product-details h2 {
            font-size: 1.8rem;
        }
        
        .btn-primary, .btn-submit-review {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<section class="petnest-single-product py-5">
    <div class="container">
        <div class="row">
            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="product-image">
                    <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded" alt="{{ $product->name }}">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-6">
                <div class="product-details">
                    <h2>{{ $product->name }}</h2>

                    <div class="product-category text-muted mb-2">
                        Category: <strong>{{ $product->category->name }}</strong>
                    </div>

                    <div class="product-rating mb-3">
                        @php $averageRating = round($product->average_rating); @endphp
                        <div class="stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="flaticon-star {{ $i <= $averageRating ? 'selected' : '' }}" data-id="{{ $i }}"></i>
                            @endfor
                        </div>
                        <span class="text-muted ms-2">({{ $product->reviews_count ?? 0 }} reviews)</span>
                    </div>

                    <div class="product-price mb-3">
                        <h3>${{ number_format($product->price, 2) }}</h3>
                    </div>

                    <p class="mb-4">
                        {{ $product->description ?? 'No description available.' }}
                    </p>

                  
                    @guest
    <button type="button" class="btn btn-primary" id="guest-cart-button">
        <i class="flaticon-shopping-cart me-2"></i> Add to Cart
    </button>
@endguest

@auth
    <form action="{{ route('cart.add', $product->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">
            <i class="flaticon-shopping-cart me-2"></i> Add to Cart
        </button>
    </form>
@endauth

                </div>
            </div>
        </div>

        <!-- Review Section -->
        <div class="row mt-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            <div class="col-12">
                <div class="review-section">
                    <h4>Write a Review</h4>
                    <form method="POST" action="{{ route('review.store', $product->id) }}" class="review-form">
                    @csrf
                        <input type="hidden" name="rating" id="rating" value="5">

                        <div class="stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="flaticon-star" data-id="{{ $i }}"></i>
                            @endfor
                        </div>

                        <div class="form-group">
                            <textarea name="comment" class="form-control" placeholder="Write your comment here..." required></textarea>
                        </div>

                        <button type="submit" class="btn-submit-review">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    document.querySelectorAll('.stars i').forEach((star, index) => {
        star.addEventListener('click', function() {
            const selectedStars = document.querySelectorAll('.stars i.selected');
            selectedStars.forEach(star => star.classList.remove('selected'));
            for (let i = 0; i <= index; i++) {
                document.querySelectorAll('.stars i')[i].classList.add('selected');
            }
        });
    });
    const guestCartBtn = document.getElementById('guest-cart-button');
    if (guestCartBtn) {
        guestCartBtn.addEventListener('click', function () {
            Swal.fire({
                icon: 'warning',
                title: 'Login Required',
                text: 'You need to log in to add items to your cart.',
                confirmButtonColor: '#FF5B2E',
                confirmButtonText: 'Go to Login'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('login') }}";
                }
            });
        });
        
    }
    
</script>

@endsection