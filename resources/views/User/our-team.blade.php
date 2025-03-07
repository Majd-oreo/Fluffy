@extends('layouts.User-layout')

@section('content')

    <!-- Our Team Hero Start -->
    <section class="petnest-about-us petnest-cart-abut">
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
                        <h5>Team Member</h5>
                        <h1>Meet Our Dedicated <br class="d-xl-block d-none">Team Member</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/team/hero-team.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team Hero End -->

    <!-- Meet Petnest Team Start -->
    <section class="meet-petnest-team meet-petnest-team-page">
        <div class="petnest-team-animation petnest-team-animation-snd">
            <div>
                <figure><img src="./assets/images/icon/leash03.svg" alt=""></figure>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-heading petnest-heading-team text-center">
                        <h2>Meet Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-team-page owl-carousel">
                        <div class="our-team-page-slider">
                            <div class="petnest-member-single">
                                <figure><img src="./assets/images/home/team-profile-1.png" alt=""></figure>
                                <h4>Nutritionists</h4>
                                    <div class="divider"></div>
                                    <h3>Noria</h3>
                            </div>
                            <div class="petnest-member-single">
                                <figure><img src="./assets/images/home/team-profile-4.png" alt=""></figure>
                                <h4>Trainers</h4>
                                    <div class="divider"></div>
                                    <h3>Shahir</h3>
                            </div>
                        </div>
                        <div class="our-team-page-slider">
                            <div class="petnest-member-single">
                                <figure><img src="./assets/images/home/team-profile-2.png" alt=""></figure>
                                <h4>Veterinarians</h4>
                                    <div class="divider"></div>
                                    <h3>Zoras</h3>
                            </div>
                            <div class="petnest-member-single">
                                <figure><img src="./assets/images/home/team-profile-5.png" alt=""></figure>
                                <h4>Behaviorists</h4>
                                    <div class="divider"></div>
                                    <h3>Zenifer</h3>
                            </div>
                        </div>
                        <div class="our-team-page-slider">
                            <div class="petnest-member-single">
                                <figure><img src="./assets/images/home/team-profile-3.png" alt=""></figure>
                                <h4>Groomers</h4>
                                    <div class="divider"></div>
                                    <h3>Tania</h3>
                            </div>
                            <div class="petnest-member-single">
                                <figure><img src="./assets/images/home/team-profile-6.png" alt=""></figure>
                                <h4>Technicians</h4>
                                    <div class="divider"></div>
                                    <h3>Rigan</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Meet Petnest Team End -->

    <!-- Petnest Newsletter Start -->
    <section class="petnest-newsletter petnest-newsletter-contact">
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