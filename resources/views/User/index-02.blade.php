@extends('layouts.User-layout')

@section('content')

    <!-- Petnest Hero Start -->
    <section class="petnest-herov2">
        <div class="animation-hero-bubble-v2">
            <figure><img src="./assets/images/icon/bubble-5.svg" alt=""></figure>
            <figure><img src="./assets/images/icon/bubble-6.svg" alt=""></figure>
            <figure><img src="./assets/images/icon/bubble-7.svg" alt=""></figure>
            <figure><img src="./assets/images/icon/bubble-8.svg" alt=""></figure>
        </div>
        <div class="animation-hero-v2">
            <figure class="petnest-bounce-animate"><img src="./assets/images/icon/pet-toy-cl01.svg" alt=""></figure>
            <figure class="petnest-bounce-animate"><img src="./assets/images/icon/pet-toy-cl02.svg" alt=""></figure>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="petnest-herov2-wrapper">
                        <h1>Your pet is a part of <br class="d-md-block d-none"> our family</h1>
                        <p>At Pet Care, we offer a variety of services including daily walks, playtime, grooming,
                            feeding, medication administration, and comfortable boarding accommodations with 24/7
                            supervision by our trained and loving staff</p>
                        <div class="petnest-hero-btns petnest-hero-btnsv2">
                            <a href="services.html" class="btn-primay">Our Services</a>
                            <a href="book-schedule.html" class="btn-primay btn-primay-white">Book a Schedule</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="petnest-feature-pets">
                        <figure><img src="./assets/images/home-v2/hero-v2-feature.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Petnest Hero End -->

    <!-- Our Services Start -->
    <section class="our-servicesv2">
        <div class="anim-service-v2">
            <figure class="petnest-bounce-animate"><img src="./assets/images/home-v2/circle-paw.png" alt=""></figure>
            <figure class="petnest-bounce-animate"><img src="./assets/images/home-v2/circle-paw02.png" alt=""></figure>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading-v2 text-center">
                        <h5>Our Services</h5>
                        <h2>Complete Pet Wellness <br class="d-lg-block d-md-block d-none"> Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
                    <div class="petnest-services-grid petnest-services-grid-v2">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <a href="service-grooming.html"
                                    class="petnest-services-wrapper petnest-services-wrapper-v2 bg-ghost-white">
                                    <span><i class="flaticon-pet-grooming"></i></span>
                                    <h3>Grooming</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="service-walking.html"
                                    class="petnest-services-wrapper petnest-services-wrapper-v2 bg-honeydew">
                                    <span><i class="flaticon-walking-with-dog"></i></span>
                                    <h3>Walking</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="service-rescue.html"
                                    class="petnest-services-wrapper petnest-services-wrapper-v2 bg-ghost-w-snd">
                                    <span><i class="flaticon-rescue-dog"></i></span>
                                    <h3>Rescue</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="service-training.html"
                                    class="petnest-services-wrapper petnest-services-wrapper-v2 bg-old-lace">
                                    <span><i class="flaticon-dog-training"></i></span>
                                    <h3>Training</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="service-daycare.html"
                                    class="petnest-services-wrapper petnest-services-wrapper-v2 bg-bubbles">
                                    <span><i class="flaticon-dog-house"></i></span>
                                    <h3>Daycare</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="service-veterinary.html"
                                    class="petnest-services-wrapper petnest-services-wrapper-v2 bg-cornsilk">
                                    <span><i class="flaticon-paw"></i></span>
                                    <h3>Veterinary</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Services End -->

    <!-- Meet Our Team Start -->
    <section class="meet-our-teamv2">
        <div class="anim-team-v2">
            <figure><img src="./assets/images/icon/leash04.svg" alt=""></figure>
            <figure><img src="./assets/images/icon/leash05.svg" alt=""></figure>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading-v2 text-center">
                        <h5>Meet Our Team</h5>
                        <h2>Loving Care for Your <br class="d-lg-block d-md-block d-none"> Furry Friends</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="team-singlev2 team-ontopv2">
                        <figure><img src="./assets/images/home-v2/member01.png" alt=""></figure>
                        <h3>Tania</h3>
                        <h5>Groomers</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-singlev2">
                        <figure><img src="./assets/images/home-v2/member02.png" alt=""></figure>
                        <h3>Zoras</h3>
                        <h5>Veterinarians</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-singlev2">
                        <figure><img src="./assets/images/home-v2/member03.png" alt=""></figure>
                        <h3>Noria</h3>
                        <h5>Nutritionists</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-singlev2 team-ontopv2">
                        <figure><img src="./assets/images/home-v2/member04.png" alt=""></figure>
                        <h3>Fateha</h3>
                        <h5>Representatives</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Meet Our Team End -->

    <!-- Our Story Start -->
    <section class="our-storyv2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 order-lg-0 order-1">
                    <div class="our-storyv2-left">
                        <div class="section-heading-v2">
                            <h5>Our Story</h5>
                            <h2>Inspiring Journeys of Love <br class="d-xl-block d-none"> and Compassion</h2>
                            <p>Once upon a time, a group of animal lovers came together with a common goal: to provide
                                the best possible care for pets. These passionate individuals had years of experience in
                                the pet care industry, and we were driven by a deep love and respect for all creatures
                                great and small.</p>
                            <a href="about-us.html" class="btn-primay-v2">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 order-lg-1 order-0">
                    <div class="our-storyv2-right">
                        <figure class="petnest-bounce-animate"><img src="./assets/images/home-v2/our-story-v2.png"
                                alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Story End -->

    <!-- Trusted By Greatest Company Start -->
    <section class="petnest-trusted-company petnest-trusted-company-v2">
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
    </section>
    <!-- Trusted By Greatest Company End -->

    <!-- Client Feedback Start -->
    <section class="client-feedback-v2">
        <div class="pet-feedback-anim">
            <figure><img src="./assets/images/icon/puppy01.svg" alt=""></figure>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-client-v2 owl-carousel">
                        <div class="single-slide-v2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-slide-v2-left">
                                        <figure><img src="./assets/images/home-v2/client-feedback01.png" alt="">
                                        </figure>
                                        <div class="client-feedback-des">
                                            <h3>Anton</h3>
                                            <h4>Product Manager</h4>
                                        </div>
                                        <p>I have been using this pet care agency for over a year now and I am
                                            thoroughly impressed with their service. My pets are always happy and well
                                            taken care of when I return home</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section-heading-v2 single-slide-v2-right">
                                        <h5>Clients Feedback</h5>
                                        <h2>My Preferred Pet Care <br class="d-xl-block d-none"> Services</h2>
                                        <p>When a client likes a pet care service, it is a testament to the quality of
                                            care and attention provided to their pet. A satisfied client is one who has
                                            seen firsthand the benefits of the service and the positive impact it has
                                            had on their pet's overall well-being.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide-v2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-slide-v2-left">
                                        <figure><img src="./assets/images/home-v2/client-feedback02.png" alt="">
                                        </figure>
                                        <div class="client-feedback-des">
                                            <h3>Micky</h3>
                                            <h4>Realstate Expert</h4>
                                        </div>
                                        <p>I have been using this pet care agency for over a year now and I am
                                            thoroughly impressed with their service. My pets are always happy and well
                                            taken care of when I return home</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section-heading-v2 single-slide-v2-right">
                                        <h5>Clients Feedback</h5>
                                        <h2>The Best Pet Care for <br class="d-xl-block d-none"> My Furry Friend</h2>
                                        <p>When a client likes a pet care service, it is a testament to the quality of
                                            care and attention provided to their pet. A satisfied client is one who has
                                            seen firsthand the benefits of the service and the positive impact it has
                                            had on their pet's overall well-being.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide-v2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-slide-v2-left">
                                        <figure><img src="./assets/images/home-v2/client-feedback03.png" alt="">
                                        </figure>
                                        <div class="client-feedback-des">
                                            <h3>Mick</h3>
                                            <h4>Music Producer</h4>
                                        </div>
                                        <p>I have been using this pet care agency for over a year now and I am
                                            thoroughly impressed with their service. My pets are always happy and well
                                            taken care of when I return home</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section-heading-v2 single-slide-v2-right">
                                        <h5>Clients Feedback</h5>
                                        <h2>My Trusted Pet Care <br class="d-xl-block d-none"> Partner</h2>
                                        <p>When a client likes a pet care service, it is a testament to the quality of
                                            care and attention provided to their pet. A satisfied client is one who has
                                            seen firsthand the benefits of the service and the positive impact it has
                                            had on their pet's overall well-being.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide-v2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-slide-v2-left">
                                        <figure><img src="./assets/images/home-v2/client-feedback04.png" alt="">
                                        </figure>
                                        <div class="client-feedback-des">
                                            <h3>Nick</h3>
                                            <h4>VFX Specialist</h4>
                                        </div>
                                        <p>I have been using this pet care agency for over a year now and I am
                                            thoroughly impressed with their service. My pets are always happy and well
                                            taken care of when I return home</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section-heading-v2 single-slide-v2-right">
                                        <h5>Clients Feedback</h5>
                                        <h2>My Reliable Pet Care <br class="d-xl-block d-none"> Solution</h2>
                                        <p>When a client likes a pet care service, it is a testament to the quality of
                                            care and attention provided to their pet. A satisfied client is one who has
                                            seen firsthand the benefits of the service and the positive impact it has
                                            had on their pet's overall well-being.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Feedback End -->

    <!-- Petnest Faq Start -->
    <section class="faq-v2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading-v2 text-center">
                        <h5>FAQ</h5>
                        <h2>Your Questions, Our <br class="d-lg-block d-md-block d-none"> Answers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-faq-right petnest-faq-v2">
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
                                        sitting, where a pet sitter visits the owner's home to care for the pet while
                                        the owner is away, dog walking, overnight pet care, feeding, administering
                                        medications, and more.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#petnestFaqTwo" aria-expanded="false"
                                        aria-controls="petnestFaqTwo">
                                        Q. Are your pet care providers trained and experienced?
                                    </button>
                                </h2>
                                <div id="petnestFaqTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionPetnest">
                                    <div class="accordion-body">
                                        Pet care agencies provide various services for pet owners, including pet
                                        sitting, where a pet sitter visits the owner's home to care for the pet while
                                        the owner is away, dog walking, overnight pet care, feeding, administering
                                        medications, and more.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#petnestFaqThree" aria-expanded="false"
                                        aria-controls="petnestFaqThree">
                                        Q. How do you handle emergency situations during pet sitting?
                                    </button>
                                </h2>
                                <div id="petnestFaqThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionPetnest">
                                    <div class="accordion-body">
                                        Pet care agencies provide various services for pet owners, including pet
                                        sitting, where a pet sitter visits the owner's home to care for the pet while
                                        the owner is away, dog walking, overnight pet care, feeding, administering
                                        medications, and more.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#petnestFaqFour" aria-expanded="false"
                                        aria-controls="petnestFaqFour">
                                        Q. What is your policy on administering medication to pets?
                                    </button>
                                </h2>
                                <div id="petnestFaqFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionPetnest">
                                    <div class="accordion-body">
                                        Pet care agencies provide various services for pet owners, including pet
                                        sitting, where a pet sitter visits the owner's home to care for the pet while
                                        the owner is away, dog walking, overnight pet care, feeding, administering
                                        medications, and more.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#petnestFaqFive" aria-expanded="false"
                                        aria-controls="petnestFaqFive">
                                        Q. Do you provide pet care for special needs animals?
                                    </button>
                                </h2>
                                <div id="petnestFaqFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionPetnest">
                                    <div class="accordion-body">
                                        Pet care agencies provide various services for pet owners, including pet
                                        sitting, where a pet sitter visits the owner's home to care for the pet while
                                        the owner is away, dog walking, overnight pet care, feeding, administering
                                        medications, and more.
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
    <section class="petnest-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-news-form petnest-news-form-v2">
                        <div class="petnest-newsletter-animation">
                            <div class="petnest-bounce-animate">
                                <figure><img src="./assets/images/icon/training02.svg" alt=""></figure>
                            </div>
                            <div class="petnest-bounce-animate">
                                <figure><img src="./assets/images/icon/pet-food02.svg" alt=""></figure>
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
                            <a href="blog-single.html" class="single-petnest-blog">
                                <div class="petnest-blog-short-top">
                                    <figure><img src="./assets/images/home/blog01.png" alt=""></figure>
                                    <!-- Category Start -->
                                    <span class="category-blog">Dog</span>
                                    <!-- Category End -->
                                </div>
                                <div class="petnest-blog-short-description">
                                    <h5>12 Jan 2023</h5>
                                    <h3>Why it is worth having your dog groomed professionally</h3>
                                    <h4>By <span>Rebeca robi</span></h4>
                                </div>
                            </a>
                            <a href="blog-single.html" class="single-petnest-blog">
                                <div class="petnest-blog-short-top">
                                    <figure><img src="./assets/images/home/blog02.png" alt=""></figure>
                                    <!-- Category Start -->
                                    <span class="category-blog">Pet</span>
                                    <!-- Category End -->
                                </div>
                                <div class="petnest-blog-short-description">
                                    <h5>08 Jan 2023</h5>
                                    <h3>How to buy safest toy for your pet?</h3>
                                    <h4>By <span>Sami sarowar </span></h4>
                                </div>
                            </a>
                            <a href="blog-single.html" class="single-petnest-blog">
                                <div class="petnest-blog-short-top">
                                    <figure><img src="./assets/images/home/blog03.png" alt=""></figure>
                                    <!-- Category Start -->
                                    <span class="category-blog">Cat</span>
                                    <!-- Category End -->
                                </div>
                                <div class="petnest-blog-short-description">
                                    <h5>09 Jan 2023</h5>
                                    <h3>My cat sleeps constantly, when should i do?</h3>
                                    <h4>By <span>Zakas rai</span></h4>
                                </div>
                            </a>
                            <a href="blog-single.html" class="single-petnest-blog">
                                <div class="petnest-blog-short-top">
                                    <figure><img src="./assets/images/home/blog01.png" alt=""></figure>
                                    <!-- Category Start -->
                                    <span class="category-blog">Dog</span>
                                    <!-- Category End -->
                                </div>
                                <div class="petnest-blog-short-description">
                                    <h5>12 Jan 2023</h5>
                                    <h3>Why it is worth having your dog groomed professionally</h3>
                                    <h4>By <span>Rebeca robi</span></h4>
                                </div>
                            </a>
                            <a href="blog-single.html" class="single-petnest-blog">
                                <div class="petnest-blog-short-top">
                                    <figure><img src="./assets/images/home/blog02.png" alt=""></figure>
                                    <!-- Category Start -->
                                    <span class="category-blog">Pet</span>
                                    <!-- Category End -->
                                </div>
                                <div class="petnest-blog-short-description">
                                    <h5>08 Jan 2023</h5>
                                    <h3>How to buy safest toy for your pet?</h3>
                                    <h4>By <span>Sami sarowar </span></h4>
                                </div>
                            </a>
                            <a href="blog-single.html" class="single-petnest-blog">
                                <div class="petnest-blog-short-top">
                                    <figure><img src="./assets/images/home/blog03.png" alt=""></figure>
                                    <!-- Category Start -->
                                    <span class="category-blog">Cat</span>
                                    <!-- Category End -->
                                </div>
                                <div class="petnest-blog-short-description">
                                    <h5>09 Jan 2023</h5>
                                    <h3>My cat sleeps constantly, when should i do?</h3>
                                    <h4>By <span>Zakas rai</span></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Stories End -->

    <!-- Follow Our Instagram Start -->
    @endsection