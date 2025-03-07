@extends('layouts.User-layout')

@section('content')
    <!-- Contact US Hero Start -->
    <section class="petnest-about-us petnest-about-contact">
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
                        <h5>Contact Us</h5>
                        <h1>Contact Us for Your <br class="d-xl-block d-none"> Pet Care Needs</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/contact/contact-hero.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact US Hero End -->

    <!-- Petnest Contact Form Start -->
    <section class="petnest-contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-contact-wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="petnest-contact-left">
                                    <form action="#">
                                        <label for="name">Your Name</label>
                                        <input type="text" id="name" placeholder="Your Name">
                                        <label for="mail">Mail</label>
                                        <input type="email" id="mail" placeholder="youremail@gmail.com">
                                        <label for="message">Message</label>
                                        <textarea placeholder="Message" id="message"></textarea>
                                        <input type="submit" value="Send Message">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="petnest-contact-right">
                                    <h3>Get a quote</h3>
                                    <p>Fill up the form and our Team will get back to you within 24 hours.</p>
                                    <div class="list-info-contact">
                                        <a href="tel:+012348658910"><span><i class="flaticon-call"></i></span> +0123
                                            4865 8910</a>
                                    </div>
                                    <div class="list-info-contact">
                                        <a href="mailto:hello@Petnest.co">
                                            <figure><img src="./assets/images/icon/mail-icon.svg" alt=""></figure>
                                            hello@Petnest.co
                                        </a>
                                    </div>
                                    <div class="list-info-contact">
                                        <a href="#">
                                            <figure><img src="./assets/images/icon/location.svg" alt=""></figure> 1/31
                                            Shuvecha Gardean, Road No: 12 , House No: 3 , Dhaka - 1364
                                        </a>
                                    </div>
                                    <div class="contact-page-social">
                                        <ul>
                                            <li><a href="#"><span><i
                                                            class="flaticon-facebook-circular-logo"></i></span></a></li>
                                            <li><a href="#"><span><i class="flaticon-social-media"></i></span></a></li>
                                            <li><a href="#"><span><i class="flaticon-twitter"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Petnest Contact Form End -->

    <!-- Petnest Contact Map Start -->
    <div class="petnest-contact-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-contact-map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41671.680576354214!2d-123.14794936749854!3d49.24834668546389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3%3A0xbb9196ea9b81f38b!2sVancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sbd!4v1677163972165!5m2!1sen!2sbd"
                            width="100" height="445" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Petnest Contact Map End -->

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