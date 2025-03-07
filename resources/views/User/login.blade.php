@extends('layouts.User-layout')

@section('content')

    <!-- Login Hero Start -->
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
                        <h5>Log In</h5>
                        <h1>Log In to Your Pet <br class="d-xl-block d-none">Care Account</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/login/login-hero.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Hero End -->

    <!-- Login Start -->
    <section class="petnest-login-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-login-wrapper">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 d-md-block d-none">
                                <div class="login-page-slider owl-carousel">
                                    <div class="single-petnest-image">
                                        <figure><img src="./assets/images/login/login-01.png" alt=""></figure>
                                    </div>
                                    <div class="single-petnest-image">
                                        <figure><img src="./assets/images/gallery/images-12.png" alt=""></figure>
                                    </div>
                                    <div class="single-petnest-image">
                                        <figure><img src="./assets/images/gallery/images-11.png" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12">
                                <div class="petnest-login-right">
                                    <h5>Login</h5>
                                    <h3>Welcome Back!</h3>
                                    <a href="#" class="continue-with-google"> <figure><img src="./assets/images/icon/google.svg" alt=""></figure> Continue with google</a>
                                    <span class="login-or-divider">or</span>
                                    <form action="#">
                                        <label for="email">Email address</label>
                                        <div class="email-field">
                                            <input type="email" id="email" placeholder="info@gmail.com">
                                        </div>
                                        <label for="password">Password</label>
                                        <div class="password-field">
                                            <input type="password" id="password" placeholder="Enter Your Password">
                                        </div>
                                        <input type="submit" value="Login">
                                    </form>
                                    <p>Don’t have an account? <a href="signup.html">Register</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login End -->

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