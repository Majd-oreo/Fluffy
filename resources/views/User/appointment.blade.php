@extends('layouts.User-layout')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<style>
    /* Form container styling */
    #appointmentForm {
        background: #ffffff;
        border: 1px solid #e0e0e0;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
    }

    /* Input and select fields */
    #appointmentForm .form-control {
        border: 1px solid #ced4da;
        border-radius: 0.5rem;
        padding: 0.6rem 1rem;
        font-size: 1rem;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    #appointmentForm .form-control:focus {
        border-color: #e64a1f;
        box-shadow: 0 0 0 0.2rem rgba(204, 67, 21, 0.25);
    }

    /* Labels */
    #appointmentForm .form-label {
        font-weight: 600;
        color: #333;
    }

    /* Appointment alert */
    #appointmentForm .alert-danger {
        background-color: #ffe9e6;
        color: #c0392b;
        border-left: 5px solid #c0392b;
        font-weight: 500;
    }

    /* Button */
    #appointmentForm .btn-orange-primary {
        background-color: #ff5b2e;
        color: #fff;
        font-weight: bold;
        border-radius: 0.5rem;
        padding: 0.6rem 1.5rem;
        transition: background-color 0.3s ease-in-out;
    }

    #appointmentForm .btn-orange-primary:hover {
        background-color: #e64a1f;
    }

    /* Price & Duration text */
    #category-price,
    #category-duration {
        font-weight: bold;
        color: #e64a1f;
    }

    /* Custom datetime picker styling */
    .flatpickr-calendar {
        border-radius: 0.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .flatpickr-day.selected {
        background: #ff5b2e;
        border-color: #ff5b2e;
    }

    .flatpickr-day.today {
        border-color: #ff5b2e;
    }

    .flatpickr-day.today:hover {
        background: #ff5b2e;
        color: white;
    }

    .flatpickr-time input:hover {
        background: #ffe9e6;
    }

    .flatpickr-time .flatpickr-time-separator,
    .flatpickr-time .flatpickr-am-pm {
        color: #ff5b2e;
    }

    .flatpickr-day.inRange {
        box-shadow: -5px 0 0 #ffe9e6, 5px 0 0 #ffe9e6;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Header End -->

<!-- Service Walking Hero Start -->
<section class="petnest-about-us petnest-services-hero petnest-services-veterinary-hero">
    <div class="animation-bubble">
        <!-- Bubble Animation Start -->
        <figure><img src="{{ asset('assets/images/icon/bubble-1.svg') }}" alt=""></figure>
        <figure><img src="{{ asset('assets/images/icon/bubble-2.svg') }}" alt=""></figure>
        <figure><img src="{{ asset('assets/images/icon/bubble-3.svg') }}" alt=""></figure>
        <!-- Bubble Animation End -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="about-petnest-left inner-page">
                    <h5><a href="{{ route('user.services') }}" style="cursor: pointer; color:dimgray;">Services</a> / <span>{{ $service->name }}</span></h5>
                    <h1>Professional Pet <br class="d-xl-block d-none"> {{ $service->name }} Services for <br class="d-xl-block d-none"> Your Furry Friend</h1>
                    <p>We believe that every pet deserves love and care, and we are dedicated to providing just that.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="about-petnest-right-wrapper about-petnest-walking">
                    <div class="about-petnest-right">
                        <figure>
                            <img src="{{ $service->categories->isNotEmpty() ? asset('storage/' . $service->categories->first()->icon) : asset('storage/Default.png') }}" alt="{{ $service->categories->first()->name ?? 'Category' }}" class="i">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Walking Hero End -->

<!-- Petnest Walking Showcase Start -->
<section class="petnest-grooming-showcase py-5">
    <div class="container">
        <h1 class="mb-4">{{ $service->name }}</h1>
        <p class="lead">{{ $service->description }}</p>

        <h3 class="mt-5">Book an Appointment</h3>
        <form action="{{ route('book.appointment') }}" method="POST" id="appointmentForm" class="p-4 bg-light rounded shadow-sm">
            @csrf
            <input type="hidden" name="service_id" value="{{ $service->id }}">
            <div class="alert alert-danger mb-4">
                <i class="fas fa-clock me-2"></i> Please note our working hours are between 10:00 AM and 6:00 PM. Appointments outside these hours cannot be booked.
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="start_time" class="form-label">Appointment Time</label>
                    <input type="datetime-local" name="start_time" id="start_time" class="form-control" required min="{{ \Carbon\Carbon::now()->format('Y-m-d\TH:i') }}">
                </div>

                <div class="col-md-6 mb-3">
                    @if(auth()->check()) 
                        <label for="pet" class="form-label">Select Pet</label>
                        <select name="pet_id" id="pet" class="form-control" required>
                            @foreach (auth()->user()->pets as $pet)
                                <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                            @endforeach
                        </select>
                    @else
                        <div class="alert alert-warning mt-2">
                            You need to <a href="{{ route('login') }}">log in</a> to book an appointment.
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="category-select" class="form-label">Select Category</label>
                    <select id="category-select" name="category_id" class="form-control" required>
                        <option value="">-- Select a Category --</option>
                        @foreach($service->categories as $category)
                            <option value="{{ $category->id }}" data-price="{{ $category->price }}" data-duration="{{$category->duration}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <p class="mt-2">
                        <strong>Price:</strong> <span id="category-price">_</span>$
                    </p>
                    <p class="mt-2">
                        <strong>Duration:</strong><span id="category-duration"></span> Minutes
                    </p>
                </div>
            </div>

            <button type="submit" class="btn btn-orange-primary w-75 mt-5 center">Book Appointment</button>
        </form>
    </div>
</section>
<!-- Petnest Walking Showcase End -->

    <!-- Petnest Walking Showcase End -->

    <!-- Service Walking Tab Start -->
    <section class="product-desc-page services-desc-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="prduct-desc-wrap services-desc-wrap">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="petnest-des-tab" data-bs-toggle="pill"
                                    data-bs-target="#petnest-desc" type="button" role="tab" aria-controls="petnest-desc"
                                    aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="petnest-rev-tab" data-bs-toggle="pill"
                                    data-bs-target="#petnest-review-page" type="button" role="tab"
                                    aria-controls="petnest-review-page" aria-selected="false">Reviews </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show product-description active" id="petnest-desc" role="tabpanel"
                                aria-labelledby="petnest-des-tab" tabindex="0">
                                <p>{{ $service->description }}</p>
                                <div class="grooming-showcase">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="grooming-showcase-left">
                                                <p>{{ $service->long_description }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="grooming-showcase-right">
                                                @if($service->images->count() > 0)
                                                    <div class="gallery-item">
                                                        <img src="{{ asset('storage/' . $service->images->first()->image_path) }}" alt="{{ $service->name }} Image" width="300">
                                                    </div>
                                                @endif
                                                <h3>Figure: <span>{{ $service->name }} Pet</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade petnest-des-reviews" id="petnest-review-page" role="tabpanel"
                                 aria-labelledby="petnest-rev-tab" tabindex="0">
                                <div class="petnest-product-reviews">
                                    @if ($service->reviews->isEmpty())
                                        <p>There are no reviews yet.</p>
                                    @else
                                        @foreach ($service->reviews as $review)
                                            <div class="single-review-process">
                                                <div class="single-review-process-left">
                                                    <figure>
                                                    <img src="{{ isset($review->user) && $review->user->image ? asset('storage/' . $review->user->image) : asset('assets/images/Default.png') }}" alt="Profile Picture">
                                                    </figure>
                                                </div>
                                                <div class="single-review-process-right">
                                                    <h4><span>{{ $review->user->name??'User' }}</span> - {{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</h4>
                                                    <div class="single-review-process-star">
                                                        @for ($i = 0; $i < 5; $i++)
                                                            <span><i class="flaticon-star-2 {{ $i < $review->rating ? 'filled' : '' }}"></i></span>
                                                        @endfor
                                                    </div>
                                                    <p>{{ $review->comment }}</p>

                                                    @if(auth()->check() && auth()->id() == $review->user_id)
                                                        <div class="d-flex gap-2 mt-3">
                                                        <form action="{{ route('appointment.review.delete', ['review' => $review->id]) }}" method="POST" class="delete-review-form" onsubmit="return confirmDelete(event)">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger">
        <i class="fas fa-trash-alt"></i> Delete
    </button>
</form>

                                                            
                                                        </div>

                                                        
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach

                                        
                                    @endif
                                
                                </div>

                                <!-- Add or Update Review Form -->
                                @if(auth()->check() && $existingReview = $service->reviews->where('user_id', auth()->id())->first())
    <div class="col-lg-8">
        <div class="blog-comments-petnest product-add-rev">
            <h3>Update your review</h3>
            <form action="{{ route('appointment.review', ['service_id' => $service->id]) }}" method="POST">
            @csrf
                @method('PUT')
                <input type="hidden" name="service_id" value="{{ $service->id }}">

                <label for="comment">Write your review*</label>
                <textarea id="comment" name="comment" required>{{ $existingReview->comment }}</textarea>

                <h4>Your Rating</h4>
                <div class="give-rating">
                    <div class="single-review-process-star" id="starRating">
                        @for ($i = 1; $i <= 5; $i++)
                            <span data-value="{{ $i }}"><i class="flaticon-star-2 {{ $i <= $existingReview->rating ? 'filled' : '' }}"></i></span>
                        @endfor
                    </div>
                    <input type="hidden" name="rating" id="rating" value="{{ $existingReview->rating }}" required>
                </div>

                <input type="submit" value="Update Review">
            </form>
        </div>
    </div>
@else
    <div class="col-lg-8">
        <div class="blog-comments-petnest product-add-rev">
            <h3>Add a review</h3>
            <form action="{{ route('appointment.review', ['service_id' => $service->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="service_id" value="{{ $service->id }}">

                <label for="comment">Write your review*</label>
                <textarea id="comment" name="comment" required></textarea>

                <h4>Your Rating</h4>
                <div class="give-rating">
                    <div class="single-review-process-star" id="starRating">
                        <span data-value="1"><i class="flaticon-star-2"></i></span>
                        <span data-value="2"><i class="flaticon-star-2"></i></span>
                        <span data-value="3"><i class="flaticon-star-2"></i></span>
                        <span data-value="4"><i class="flaticon-star-2"></i></span>
                        <span data-value="5"><i class="flaticon-star-2"></i></span>
                    </div>
                    <input type="hidden" name="rating" id="rating" required>
                </div>

                <input type="submit" value="Post Review">
            </form>
        </div>
    </div>
@endif

                            </div> <!-- Review Tab End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Walking Tab End -->

    <!-- Newsletter Start -->
    <!-- <section class="petnest-newsletter petnest-newsletter-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-news-form">
                        <div class="petnest-newsletter-animation">
                            <div class="petnest-bounce-animate">
                                <figure><img src="{{ asset('assets/images/icon/training01.svg') }}" alt=""></figure>
                            </div>
                            <div class="petnest-bounce-animate">
                                <figure><img src="{{ asset('assets/images/icon/pet-food.svg') }}" alt=""></figure>
                            </div>
                        </div>
                        <h2>Subscribe Newsletter <br class="d-md-block d-none"> & get News</h2>
                        <form action="#">
                            <input type="email" placeholder="Enter your E-mail">
                            <input type="submit" value="Subscribe Now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Newsletter End -->

  
@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Booking Error',
            text: '{{ session("error") }}',
        });
    </script>
@endif

@if(session('booking_error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Booking Conflict',
            text: '{{ session("booking_error") }}',
            confirmButtonColor: '#ff5b2e'
        });
    </script>
@endif

@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Appointment Booked!',
            text: '{{ session("success") }}',
            confirmButtonColor: '#2bcc91'
        });
    </script>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize Flatpickr with custom configuration
        const startTimeInput = flatpickr("#start_time", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            minDate: "today",
            minTime: "10:00",
            maxTime: "18:00",
            time_24hr: false,
            minuteIncrement: 15,
            allowInput: true,
            clickOpens: true,
            onClose: function(selectedDates, dateStr, instance) {
                // Calendar will automatically close after selection
            },
            onDayCreate: function(dObj, dStr, fp, dayElem) {
                // Highlight today's date
                if (dayElem.dateObj.getDate() === (new Date()).getDate() && 
                    dayElem.dateObj.getMonth() === (new Date()).getMonth() && 
                    dayElem.dateObj.getFullYear() === (new Date()).getFullYear()) {
                    dayElem.classList.add("today");
                }
            }
        });

        const categorySelect = document.getElementById('category-select');
        const priceSpan = document.getElementById('category-price');
        const durationSpan = document.getElementById('category-duration');

        categorySelect.addEventListener('change', function () {
            const selectedOption = categorySelect.options[categorySelect.selectedIndex];
            const price = selectedOption.getAttribute('data-price');
            const duration = selectedOption.getAttribute('data-duration');

            priceSpan.textContent = price ? price : 'N/A';
            durationSpan.textContent = duration ? duration : 'N/A';
        });

        // Form submission validation
        document.getElementById('appointmentForm')?.addEventListener('submit', function (event) {
            const startTime = new Date(document.getElementById('start_time').value);
            const hour = startTime.getHours();
            const minute = startTime.getMinutes();

            if (hour < 10 || (hour === 18 && minute > 0) || hour > 18) {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Time',
                    text: 'Appointments must be between 10:00 AM and 6:00 PM',
                    confirmButtonColor: '#ff5b2e'
                });
            }
        });

        // Star rating functionality (keep your existing code)
        document.querySelectorAll('#starRating span').forEach(function (star) {
            star.addEventListener('click', function () {
                const value = this.getAttribute('data-value');
                document.getElementById('rating').value = value;

                document.querySelectorAll('#starRating i').forEach(function (icon, index) {
                    if (index < value) {
                        icon.classList.add('filled');
                    } else {
                        icon.classList.remove('filled');
                    }
                });
            });
        });
    });

    function confirmDelete(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e3342f',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit();
            }
        });
    }
</script>

@endsection
