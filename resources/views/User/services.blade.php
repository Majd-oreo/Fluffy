@extends('layouts.User-layout')

@section('content')
    <!-- Service Hero Start -->
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
                        <h5>Services</h5>
                        <h1>Your pet's happiness <br class="d-xl-block d-none"> is our top priority</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/services/services-hero.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Hero End -->

    <!-- Petnest Services Start -->
    <section class="petnest-services petnest-services-page">
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
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
                    <div class="petnest-services-grid">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <a href="service-grooming.html" class="petnest-services-wrapper bg-lavender">
                                    <span><i class="flaticon-pet-grooming"></i></span>
                                    <h3>Grooming</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="service-walking.html" class="petnest-services-wrapper bg-menthol">
                                    <span><i class="flaticon-walking-with-dog"></i></span>
                                    <h3>Walking</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="service-rescue.html" class="petnest-services-wrapper bg-vodka">
                                    <span><i class="flaticon-rescue-dog"></i></span>
                                    <h3>Rescue</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="service-training.html" class="petnest-services-wrapper bg-pastel-orange">
                                    <span><i class="flaticon-dog-training"></i></span>
                                    <h3>Training</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="service-daycare.html" class="petnest-services-wrapper bg-fluorescent-blue">
                                    <span><i class="flaticon-dog-house"></i></span>
                                    <h3>Daycare</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="service-veterinary.html" class="petnest-services-wrapper bg-peach">
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
    <!-- Petnest Services End -->


    <!-- Petnest Newsletter Start -->
    <section class="petnest-newsletter petnest-newsletter-about">
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
    </section>
    <!-- Petnest Newsletter End -->


    <!-- Follow Our Instagram Start -->
    @endsection