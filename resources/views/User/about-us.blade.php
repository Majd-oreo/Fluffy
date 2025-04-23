@extends('layouts.User-layout')

@section('content')

    <!-- About US Start -->
    <section class="petnest-about-us">
        <div class="animation-bubble">
            <!-- Bubble Animation Start -->
            <figure><img src="./assets/images/icon/bubble-1.svg" alt=""></figure>
            <figure><img src="./assets/images/icon/bubble-2.svg" alt=""></figure>
            <figure><img src="./assets/images/icon/bubble-3.svg" alt=""></figure>
            <!-- Bubble Animation End -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-left">
                        <h5>About Us</h5>
                        <h1>Your pet's happiness <br class="d-xl-block d-none"> is our top priority</h1>
                        <p>we are committed to providing top-quality care for your beloved pets. From expert veterinary services to grooming and premium pet products, we ensure that every pet receives the love, attention, and professional care they deserve. Your pet’s health, comfort, and happiness are our priority—because they’re family.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/about/about.jpeg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About US End -->

    <!-- About Petnest Story Start -->
    <section class="about-petnest-story">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="petnest-heading petnest-heading-story">
                        <h5>Our Story</h5>
                        <h2>Inspiring Journeys of <br class="d-lg-block d-md-block d-none"> Love and Compassion</h2>
                        <p><strong>Once upon a time, a group of animal lovers came together with a common goal:</strong>
                            to provide the best possible care for pets. These passionate individuals had years of
                            experience in the pet care industry, and we were driven by a deep love and respect for all
                            creatures great and small.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center story-petnest-about">
                <div class="col-lg-3 col-md-3">
                    <div class="petnest-pets petnest-pets-left">
                        <figure><img src="./assets/images/about/about3.jpeg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="petnest-success-count">
<p>                    Our mission goes beyond providing services—it’s about building a community rooted in kindness. Whether it's a gentle grooming session, a warm bath, or simply a listening ear for a concerned pet parent, we approach every interaction with empathy and dedication.
</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="petnest-pets petnest-pets-right">
                        <figure><img src="./assets/images/about/about2.jpeg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Petnest Story End -->

    <!-- Meet Petnest Team Start -->
    <!-- Meet Petnest Team Start -->
<section class="meet-petnest-team meet-petnest-team-about">
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
                <div class="slider-team">
                    @foreach ($employees as $employee)
                        <div class="petnest-member-single">
                        <figure>
                        <img src="{{ asset('storage/' . ($employee->image ?: 'Default.png')) }}" alt="">
                        </figure>                           
                            <div class="divider"></div>
                            <h3>{{ $employee->name }}</h3>
                            <h5>{{ $employee->employee->job_title }}</h5>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Meet Petnest Team End -->

    <!-- Meet Petnest Team End -->


    <!-- Trusted By Greatest Company Start
    <section class="petnest-trusted-company">
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
    <!-- <section class="petnest-client-feedback">
        <div class="petnest-feedback-animation">
            <div>
                <figure><img src="./assets/images/icon/paws01.svg" alt=""></figure>
            </div>
            <div>
                <figure><img src="./assets/images/icon/pet-love01.svg" alt=""></figure>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-client-feedback-slide owl-carousel">
                        <div class="petnest-client-single-slider">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="petnest-client-feedback-left">
                                        <h5>Clients Feedback</h5>
                                        <h2>My Preferred Pet <br class="d-xl-block d-none"> Care Services</h2>
                                        <p>I have been using this pet care agency for over a year now and I am
                                            thoroughly impressed with their service. My pets are always happy and well
                                            taken care of when I return home</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="petnest-client-feedback-right">
                                        <figure><img src="./assets/images/home/client01.png" alt=""></figure>
                                        <div class="petnest-client-feedback-description">
                                            <h3>Anton</h3>
                                            <p>Product Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="petnest-client-single-slider">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="petnest-client-feedback-left">
                                        <h5>Clients Feedback</h5>
                                        <h2>The Best Pet Care for <br class="d-lg-block d-none"> My Furry Friend</h2>
                                        <p>I have been so impressed with this pet care agency. The staff is kind,
                                            knowledgeable and clearly loves animals. I never have to worry about my pets
                                            while I am away</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="petnest-client-feedback-right">
                                        <figure><img src="./assets/images/home/client02.png" alt=""></figure>
                                        <div class="petnest-client-feedback-description">
                                            <h3>Lina</h3>
                                            <p>Retail Marketer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="petnest-client-single-slider">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="petnest-client-feedback-left">
                                        <h5>Clients Feedback</h5>
                                        <h2>My Trusted Pet Care <br class="d-xl-block d-none"> Partner</h2>
                                        <p>I highly recommend this pet care agency! They have a professional and caring
                                            approach, and my pets have been very happy and comfortable in their care</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="petnest-client-feedback-right">
                                        <figure><img src="./assets/images/home/client03.png" alt=""></figure>
                                        <div class="petnest-client-feedback-description">
                                            <h3>Mikel</h3>
                                            <p>Music Specialist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="petnest-client-single-slider">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="petnest-client-feedback-left">
                                        <h5>Clients Feedback</h5>
                                        <h2>My Reliable Pet Care <br class="d-xl-block d-none"> Solution</h2>
                                        <p>I have never felt so confident leaving my pets in someone else's care. This
                                            pet care agency always goes above and beyond to make sure my pets are happy
                                            and healthy</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="petnest-client-feedback-right">
                                        <figure><img src="./assets/images/home/client04.png" alt=""></figure>
                                        <div class="petnest-client-feedback-description">
                                            <h3>Jordan</h3>
                                            <p>VFX Specialist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Client Feedback End -->


    <!-- Petnest Newsletter Start -->
    <!-- <section class="petnest-newsletter petnest-newsletter-about">
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


   @endsection