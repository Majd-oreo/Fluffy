@extends('layouts.User-layout')

@section('content')
    <!-- Sign Up Hero Start -->
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
                        <h5>Sign Up</h5>
                        <h1>Join the Pet Care <br class="d-xl-block d-none">Community</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/signup/signup-hero.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign Up Hero End -->

    <!-- Create Account Start -->
    <section class="petnest-login-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-login-wrapper">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 d-md-block d-none">
                                <div class="login-page-slider signup-slider owl-carousel">
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
                                    <h5>SIGN UP</h5>
                                    <h3>Create Account</h3>
                                    <form action="#">
                                        <div class="name-field">
                                            <div class="name-field-left">
                                                <label for="fName">First Name</label>
                                                <input type="text" id="fName" placeholder="First Name">
                                            </div>
                                            <div class="name-field-right">
                                                <label for="fName">Last Name</label>
                                                <input type="text" id="lName" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <label for="email">Email address</label>
                                        <div class="email-field">
                                            <input type="email" id="email" placeholder="youremail@gmail.com">
                                        </div>
                                        <label for="password">Password</label>
                                        <div class="password-field-new">
                                            <input type="password" id="password">
                                        </div>
                                        <label for="password">Confirm Password</label>
                                        <div class="password-field-confirm">
                                            <input type="password" id="confirmPassword">
                                        </div>
                                        <input type="submit" value="Login">
                                    </form>
                                    <p>Have an account? <a href="login.html">Sign In</a></p>
                                    <span class="login-or-divider">or</span>
                                    <a href="#" class="continue-with-google"> <figure><img src="./assets/images/icon/google.svg" alt=""></figure> Continue with google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Create Account End -->

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


   @endsection