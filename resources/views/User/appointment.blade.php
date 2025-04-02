@extends('layouts.User-layout')

@section('content')
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
                        <h5><a {{ route('user.services') }} style="cursor: pointer;">Services</a>/ <span>{{ $service->name }}</span></h5>
                        <h1>Professional Pet <br class="d-xl-block d-none"> {{ $service->name }} Services for <br class="d-xl-block d-none"> Your Furry Friend</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper about-petnest-walking">
                        <div class="about-petnest-right">
                            <figure><img src="{{ asset('assets/images/services/services-hero03.png') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Walking Hero End -->

    <!-- Petnest Walking Showcase Start -->
    <section class="petnest-grooming-showcase">
        <div class="container">
            <h1>{{ $service->name }}</h1>
            <p>{{ $service->description }}</p>
            <p><strong>Price:</strong> ${{ $service->price }}</p>
            <p><strong>Duration:</strong> {{ $service->duration }} minutes</p>

            <h3>Gallery</h3>
            <div class="gallery">
                @foreach($service->images as $image)
                    <div class="gallery-item">
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Service Image" width="300">
                    </div>
                @endforeach
            </div>

            <h3>Book an Appointment</h3>
            <form action="{{ route('book.appointment') }}" method="POST" id="appointmentForm">
                @csrf
                <input type="hidden" name="service_id" value="{{ $service->id }}">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="start_time">Start Time</label>
                        <input type="datetime-local" name="start_time" id="start_time" class="form-control" required min="{{ \Carbon\Carbon::now()->format('Y-m-d\TH:i') }}">
                    </div>
                    <div class="form-group col-md-6">
                    @if(auth()->check()) 
    <label for="pet">Pet</label>
    <select name="pet_id" id="pet" class="form-control" required>
        @foreach (auth()->user()->pets as $pet)
            <option value="{{ $pet->id }}">{{ $pet->name }}</option>
        @endforeach
    </select>
@else
    <div class="alert alert-warning">
        You need to <a href="{{ route('login') }}">log in</a> to book an appointment.
    </div>
@endif
</div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="client_name">Your Name</label>
                        <input type="text" name="client_name" id="client_name" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="client_email">Your Email</label>
                        <input type="email" name="client_email" id="client_email" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="category">Select Category</label>
<select name="category_id" id="category" class="form-control" required>
    @foreach ($service->categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>




                    </div>
                </div>
                <button type="submit" class="btn btn-orange-primary">Book Appointment</button>
            </form>

            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </section>
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
@endif                                                <h3>Figure: <span>{{ $service->name }} Pet</span></h3>
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
            <!-- Loop through all reviews related to the service -->
            @foreach ($service->reviews as $review)
                <div class="single-review-process">
                    <div class="single-review-process-left">
                        <figure>
                            <img src="{{ $review->user->image ? asset('storage/' . $review->user->image) : asset('assets/images/Default.png') }}" alt="Profile Picture">
                        </figure>
                    </div>
                    <div class="single-review-process-right">
                        <h4><span>{{ $review->user->name }}</span> - {{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</h4>
                        <div class="single-review-process-star">
                            @for ($i = 0; $i < 5; $i++)
                                <span><i class="flaticon-star-2 {{ $i < $review->rating ? 'filled' : '' }}"></i></span>
                            @endfor
                        </div>
                        <p>{{ $review->comment }}</p>
                    </div>
                </div>
            @endforeach
        @endif
                                    <!-- Add Product Review Form Start -->
                                    <div class="col-lg-8">
                                        <div class="blog-comments-petnest product-add-rev">
                                            <h3>Add a review</h3>
                                            <form action="{{ route('appointment.review', ['service_id' => $service->id]) }}" method="POST">
                                            @csrf
            <input type="hidden" name="service_id" value="{{ $service->id }}">

            <div class="comment-flex">
                <div>
                    <label for="name">Your full name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Your email*</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>

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
                                    <!-- Add Product Review Form End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Walking Tab End -->

    <!-- Petnest Newsletter Start -->
    <section class="petnest-newsletter petnest-newsletter-about">
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
    </section>
    <!-- Petnest Newsletter End -->
    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Booking Error',
            text: '{{ session('error') }}',
        });
    </script>
@endif


<script>
   document.addEventListener("DOMContentLoaded", function () {
    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Booking Error',
            text: '{{ session('error') }}',
        });
    @endif

    const appointmentForm = document.getElementById('appointmentForm');
    const startTimeInput = document.getElementById('start_time');
    const categorySelect = document.getElementById('category');
    const clientNameInput = document.getElementById('client_name');
    const clientEmailInput = document.getElementById('client_email');

    appointmentForm.addEventListener('submit', function(event) {
        let isValid = true;

        const startTime = new Date(startTimeInput.value); // Local time from the input
        const selectedHour = startTime.getHours(); // Local hours
        const selectedMinute = startTime.getMinutes(); // Local minutes

        // Validate the time selection (between 10 AM and 6 PM)
        if (selectedHour < 10 || (selectedHour === 18 && selectedMinute > 0) || selectedHour > 18) {
            isValid = false;
            Swal.fire({
                icon: 'error',
                title: 'Invalid Appointment Time',
                text: 'Please select a time between 10 AM and 6 PM.',
            });
        }

        // Validate category selection
        if (!categorySelect.value) {
            isValid = false;
            Swal.fire({
                icon: 'error',
                title: 'Category Required',
                text: 'Please select a category for the service.',
            });
        }

        // Validate client name
        if (!clientNameInput.value.trim()) {
            isValid = false;
            Swal.fire({
                icon: 'error',
                title: 'Name Required',
                text: 'Please enter your name.',
            });
        }

        // Validate client email
        if (!clientEmailInput.value.trim() || !/\S+@\S+\.\S+/.test(clientEmailInput.value)) {
            isValid = false;
            Swal.fire({
                icon: 'error',
                title: 'Invalid Email',
                text: 'Please enter a valid email address.',
            });
        }

        // Prevent form submission if validation fails
        if (!isValid) {
            event.preventDefault();
        }
    });

    @if(auth()->check())
        const stars = document.querySelectorAll("#starRating span");
        const ratingInput = document.getElementById("rating");
        const reviewForm = document.querySelector('form[action="{{ route('appointment.review', ['service_id' => $service->id]) }}"]');

        const hasAppointment = {{ $hasAppointment ? 'true' : 'false' }};

        if (!hasAppointment) {
            reviewForm.addEventListener('submit', function(event) {
                event.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'No Appointment Found',
                    text: 'You must have an appointment before you can submit a review. Please book an appointment first.',
                });
            });
        }

        stars.forEach(star => {
            star.addEventListener("click", function () {
                const ratingValue = this.getAttribute("data-value");
                ratingInput.value = ratingValue;

                stars.forEach(s => s.classList.remove("active"));
                for (let i = 0; i < ratingValue; i++) {
                    stars[i].classList.add("active");
                }
            });
        });
    @else
        Swal.fire({
            icon: 'warning',
            title: 'Login Required',
            text: 'You must be logged in to book an appointment. Please login first.',
        }).then(function () {
            window.location.href = "{{ route('login') }}";
        });
    @endif
});
</script>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection

<style>
    .single-review-process-star span {
    cursor: pointer;
    color: gray;
}

.single-review-process-star span.active {
    color: gold;
}

input[type="datetime-local"] {
    font-size: 1.2rem; 
    padding: 10px; 
    width: 100%;
}

.form-row {
    display: flex;
    justify-content: space-between; 
    gap: 20px;
}

.form-group {
    width: 48%; 
}

.form-group input {
    width: 100%; 
}

.form-group {
    margin-bottom: 15px;
}
.btn.btn-orange-primary {
    background-color: var(--orange-primary); 
    color: white;

}
.form-group select {
    font-size: 1.2rem;
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.form-group select:focus {
    border-color: var(--orange-primary);
}


</style>