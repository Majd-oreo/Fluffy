@extends('layouts.User-layout')

@section('content')

    <!-- Petnest Hero Start -->
    <section class="petnest-hero">
        <div class="animation-bubble">
            <!-- Bubble Animation Start -->
            <figure><img src="./assets/images/icon/bubble-1.svg" alt=""></figure>
            <figure><img src="./assets/images/icon/bubble-2.svg" alt=""></figure>
            <figure><img src="./assets/images/icon/bubble-3.svg" alt=""></figure>
            <!-- Bubble Animation End -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="petnest-hero-left">
                        <h1>Your pet is a part of <br class="d-lg-block d-none"> our family</h1>
                        <div class="petnest-hero-left-info">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="petnest-hero-description">
                                        <p>At Pet Care, we offer a variety of services including daily walks, playtime,
                                            grooming, feeding, medication administration, and comfortable boarding
                                            accommodations with every day supervision by our trained and loving staff</p>
                                        <div class="petnest-hero-btns">
                                            <a href="{{ route('user.services') }}" class="btn-primay">Our Services</a>
                                            <!-- <a href="book-schedule.html" class="btn-primay btn-primay-white">Book a
                                                Schedule</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="petnest-hero-left-img">
                                        <div class="petnest-bounce-animate">
                                            <figure><img src="./assets/images/icon/paws01.svg" alt=""></figure>
                                        </div>
                                        <figure><img src="./assets/images/home/home13.jpeg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="petnest-hero-right">
                        <div class="petnest-hero-img">
                            <figure><img src="./assets/images/home/home1.jpeg" alt=""></figure>
                            <figure class="petnest-bounce-animate"><img src="./assets/images/home/home6.jpeg"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Petnest Hero End -->

    <!-- Petnest Services Start -->
    <section class="petnest-services">
        <div class="petnest-services-buble">
            <!-- Bubble Animation Start -->
            <figure><img src="./assets/images/icon/bubble-1.svg" alt=""></figure>
            <figure><img src="./assets/images/icon/bubble-2.svg" alt=""></figure>
            <!-- Bubble Animation End -->
        </div>
        <div class="petnest-services-animation">
            <!-- Pet Toys Start -->
            <div class="petnest-bounce-animate">
                <figure><img src="./assets/images/icon/pet-toy01.svg" alt=""></figure>
            </div>
            <div class="petnest-bounce-animate">
                <figure><img src="./assets/images/icon/pet-toy02.svg" alt=""></figure>
            </div>
            <!-- Pet Toys End -->
        </div>
        <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="petnest-heading petnest-heading-services">
                <h5>Our Services</h5>
                <h2>Complete Pet <br class="d-lg-block d-md-block d-none"> Wellness Services</h2>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-12">
            <div class="petnest-options-list petnest-options-list-left">
                <div class="petnest-options-info">
                    <span><i class="flaticon-pet-grooming"></i></span>
                    <h3>Grooming</h3>
                </div>
                <div class="petnest-options-info">
                    <span><i class="flaticon-walking-with-dog"></i></span>
                    <h3>Walking</h3>
                </div>
                <div class="petnest-options-info">
                    <span><i class="flaticon-rescue-dog"></i></span>
                    <h3>Rescue</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="petnest-options text-center">
                <figure class="friendly-pet"><img src="./assets/images/home/home3.jpeg" alt=""></figure>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-12">
            <div class="petnest-options-list petnest-options-list-right">
                <div class="petnest-options-info">
                    <span><i class="flaticon-dog-training"></i></span>
                    <h3>Training</h3>
                </div>
                <div class="petnest-options-info">
                    <span><i class="flaticon-dog-house"></i></span>
                    <h3>Daycare</h3>
                </div>
                <div class="petnest-options-info">
                    <span><i class="flaticon-paw"></i></span>
                    <h3>Veterinary</h3>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
    </section>
    <!-- Petnest Services End -->

  <!-- Meet Petnest Team Start -->
<section class="meet-petnest-team">
    <div class="petnest-team-animation">
        <div>
            <figure><img src="./assets/images/icon/leash03.svg" alt=""></figure>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="petnest-heading petnest-heading-team">
                    <h5>Meet Our Team</h5>
                    <h2>Loving Care for Your<br class="d-lg-block d-md-block d-none"> Furry Friends</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="slider-team owl-carousel">
                    @foreach ($employees as $employee)
                    <div class="petnest-member-single">
                    <figure>
            <img src="{{ asset('storage/' . ($employee->image ?: 'Default-image.png')) }}" alt="">
        </figure>                               
                        <div class="divider"></div>
                        <h3>{{ $employee->name }}</h3>
                        <h5>{{ $employee->job_title}}</h5>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Meet Petnest Team End -->


    <!-- Petnest Story Start -->
    <section class="petnest-story">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="petnest-story-left">
                        <div>
                            <figure><img src="./assets/images/icon/paws02.svg" alt=""></figure>
                        </div>
                        <figure class="inspire-story"><img src="./assets/images/home/home8.jpeg" alt="">
                        </figure>
                        <figure class="cat-dogs-petnest petnest-bounce-animate"><img
                                src="./assets/images/icon/paws02.svg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="petnest-heading petnest-heading-story">
                        <h5>Our Story</h5>
                        <h2>Inspiring Journeys of <br class="d-xl-block d-lg-none d-md-block d-none"> Love and
                            Compassion</h2>
                        <p><strong>Once upon a time, I set out on a journey fueled by my love for animals and my passion for providing the best care possible. With experience in pet care and a deep respect for all creatures, I envisioned a place where pets would receive the attention, love, and treatment they truly deserve.

Today, that vision has grown into a trusted space for pet owners, where every furry friend is treated like family.</p>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Petnest Story End -->

    <!-- Trusted By Greatest Company Start -->
    <!-- <section class="petnest-trusted-company">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-trusted-company-wrapper">
                        <h4>Trusted by greatest companies</h4>
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="petnest-showcase-company owl-carousel">
                                    <div class="petnest-showcase-company-logo">
                                        <figure><img src="./assets/images/home/dummy-logo.png" alt=""></figure>
                                    </div>
                                    <div class="petnest-showcase-company-logo">
                                        <figure><img src="./assets/images/home/dummy-logo.png" alt=""></figure>
                                    </div>
                                    <div class="petnest-showcase-company-logo">
                                        <figure><img src="./assets/images/home/dummy-logo.png" alt=""></figure>
                                    </div>
                                    <div class="petnest-showcase-company-logo">
                                        <figure><img src="./assets/images/home/dummy-logo.png" alt=""></figure>
                                    </div>
                                    <div class="petnest-showcase-company-logo">
                                        <figure><img src="./assets/images/home/dummy-logo.png" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Trusted By Greatest Company End -->

<!-- Client Feedback Start -->
<section class="petnest-client-feedback py-4">
    <div class="petnest-feedback-animation d-flex justify-content-center gap-3 mb-4">
        <div>
            <figure><img src="./assets/images/icon/paws01.svg" alt="Paw icon" style="width: 30px;"></figure>
        </div>
        <div>
            <figure><img src="./assets/images/icon/pet-love01.svg" alt="Pet love icon" style="width: 30px;"></figure>
        </div>
    </div>

    <div class="container">

        <div class="row justify-content-center">
        <h1 class="text-center mb-5">Users Feedback</h1>

            <div class="col-lg-10 col-xl-9">
                <div class="petnest-client-feedback-slide owl-carousel">

                    @foreach ($reviews as $review)
                    <div class="petnest-client-single-slider p-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="petnest-client-feedback-left pe-md-4">
                                    <h2 class="h4 mb-5">{{ $review->service->name ?? 'General Service' }}</h2>
                                    <p class="mb-3">{{ $review->comment }}</p>
                                    <div class="text-warning" style="font-size: 1.1rem;">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="fa{{ $i < $review->rating ? 's' : 'r' }} fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3 mt-md-0">
                                <div class="petnest-client-feedback-right text-center">
                                    <figure class="mb-3">
                                        <img src="{{ asset('storage/' . ($review->user->image ?? 'default.png')) }}" 
                                             alt="{{ $review->user->name??'User' }}" 
                                             class="rounded-circle" 
                                             style="width: 80px; height: 80px; object-fit: cover;">
                                    </figure>
                                    <div class="petnest-client-feedback-description">
                                        <h3 class="h5 mb-1">{{ $review->user->name ??'User'}}</h3>
                                        <p class="small text-muted">{{ $review->user->role ?? 'Customer' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Client Feedback End -->
<br>
    <!-- Petnest Faq Start -->
    <section class="petnest-faq">
        <div class="container">
            <div class="row">
                <div class="petnest-faq-inner">
                    <div class="petnest-faq-buble-animation">
                        <!-- Bubble Animation Start -->
                        <figure><img src="./assets/images/icon/bubble-1.svg" alt=""></figure>
                        <figure><img src="./assets/images/icon/bubble-2.svg" alt=""></figure>
                        <!-- Bubble Animation End -->
                    </div>
                    <div class="petnest-faq-animation">
                        <div class="petnest-bounce-animate">
                            <figure><img src="./assets/images/icon/leash.svg" alt=""></figure>
                        </div>
                        <div class="petnest-bounce-animate">
                            <figure><img src="./assets/images/icon/pet-toy01.svg" alt=""></figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="petnest-heading petnest-heading-faq">
                                <h5>FAQ</h5>
                                <h2>Your Questions, Our <br class="d-xl-block d-none">Answers</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="petnest-faq-left">
                                <figure><img src="./assets/images/home/home14.png" alt=""></figure>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="petnest-faq-right">
                                <div class="accordion" id="accordionPetnest">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#petnestFaqOne" aria-expanded="true"
                                                aria-controls="petnestFaqOne">
                                                Q. What services do you offer for pet care??
                                            </button>
                                        </h2>
                                        <div id="petnestFaqOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionPetnest">
                                            <div class="accordion-body">
                                                Pet care agencies provide various services for pet owners, including pet
                                                sitting, where a pet sitter visits the owner's home to care for the pet
                                                while the owner is away, dog walking, overnight pet care, feeding,
                                                administering medications, and more.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#petnestFaqTwo"
                                                aria-expanded="false" aria-controls="petnestFaqTwo">
                                                Q. Are your pet care providers trained and <br
                                                    class="d-md-block d-none"> experienced?
                                            </button>
                                        </h2>
                                        <div id="petnestFaqTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionPetnest">
                                            <div class="accordion-body">
                                                Pet care agencies provide various services for pet owners, including pet
                                                sitting, where a pet sitter visits the owner's home to care for the pet
                                                while the owner is away, dog walking, overnight pet care, feeding,
                                                administering medications, and more.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#petnestFaqThree"
                                                aria-expanded="false" aria-controls="petnestFaqThree">
                                                Q. How do you handle emergency situations <br class="d-md-block d-none">
                                                during pet sitting?
                                            </button>
                                        </h2>
                                        <div id="petnestFaqThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionPetnest">
                                            <div class="accordion-body">
                                                Pet care agencies provide various services for pet owners, including pet
                                                sitting, where a pet sitter visits the owner's home to care for the pet
                                                while the owner is away, dog walking, overnight pet care, feeding,
                                                administering medications, and more.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#petnestFaqFour"
                                                aria-expanded="false" aria-controls="petnestFaqFour">
                                                Q. What is your policy on administering <br class="d-md-block d-none">
                                                medication to pets?
                                            </button>
                                        </h2>
                                        <div id="petnestFaqFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionPetnest">
                                            <div class="accordion-body">
                                                Pet care agencies provide various services for pet owners, including pet
                                                sitting, where a pet sitter visits the owner's home to care for the pet
                                                while the owner is away, dog walking, overnight pet care, feeding,
                                                administering medications, and more.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#petnestFaqFive"
                                                aria-expanded="false" aria-controls="petnestFaqFive">
                                                Q. Do you provide pet care for special <br class="d-md-block d-none">
                                                needs animals?
                                            </button>
                                        </h2>
                                        <div id="petnestFaqFive" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive" data-bs-parent="#accordionPetnest">
                                            <div class="accordion-body">
                                                Pet care agencies provide various services for pet owners, including pet
                                                sitting, where a pet sitter visits the owner's home to care for the pet
                                                while the owner is away, dog walking, overnight pet care, feeding,
                                                administering medications, and more.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Petnest Faq End -->

    <!-- Petnest Newsletter Start -->
    <!-- <section class="petnest-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-news-form">
                        <div class="petnest-newsletter-animation">
                            <div class="petnest-bounce-animate">
                                <figure><img src="./assets/images/icon/training01.svg" alt=""></figure>
                            </div>
                            <div class="petnest-bounce-animate">
                                <figure><img src="./assets/images/icon/pet-food.svg" alt=""></figure>
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
    <!-- Petnest Newsletter End -->

    <!-- Blog Stories Start -->
    <section class="petnest-blog petnest-blog-v2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="petnest-heading petnest-heading-blog petnest-heading-blog-v2">
                    <h5>Blog Stories</h5>
                    <h2>Loving Care for Every <br class="d-md-block d-none"> Whisker and Tail</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="petnest-blog-listing">
                    <div class="row petnest-blog-listing-slider owl-carousel">
                        @foreach($blogs as $blog)
                            <a href="{{ route('blog.show', $blog->id) }}" class="single-petnest-blog">
                                <div class="petnest-blog-short-top">
                                    <figure>
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                    </figure>
                                    <span class="category-blog">{{ $blog->user->employee->service->name }}</span>

                                    <!-- Service Name Start -->
                                    <!-- Service Name End -->
                                </div>
                                <div class="petnest-blog-short-description">
                                    <h5>{{ $blog->created_at }}</h5>
                                    <h3>{{ $blog->title }}</h3>
                                    <h4>By <span>{{ $blog->user->name }}</span></h4>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Blog Stories End -->

    <!-- Follow Our Instagram Start -->
   
    <!-- Follow Our Instagram End -->

  

@endsection