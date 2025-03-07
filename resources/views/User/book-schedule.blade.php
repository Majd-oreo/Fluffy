@extends('layouts.User-layout')

@section('content')
    <!-- Book Schedule Start -->
    <section class="book-schedule">
        <div class="book-sch-element">
            <figure><img src="./assets/images/icon/pet-love01.svg" alt=""></figure>
            <figure><img src="./assets/images/icon/pet-food.svg" alt=""></figure>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="book-schedule-heading">
                        <h2>Complete Pet <br class="d-md-block d-none"> Wellness Services</h2>
                        <p>1 Day FREE daycare trail for new clients!Reservation requared. Discount cannot be applied
                            during peak periods.</p>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <div class="schedule-form">
                        <form action="#">
                            <div class="pet-form-sep">
                                <div>
                                    <label for="pet">Pet</label>
                                    <input type="text" id="pet" placeholder="Dog / Cat">
                                </div>
                                <div>
                                    <label for="interested">Interested In</label>
                                    <select class="form-select" id="interested">
                                        <option selected>Pet Daycare</option>
                                        <option value="1">Daycare One</option>
                                        <option value="2">Daycare Two</option>
                                        <option value="3">Daycare Three</option>
                                    </select>
                                </div>
                            </div>
                            <label for="name">Name</label>
                            <input type="text" id="name" placeholder="Your Name">
                            <label for="email">Email / Phone</label>
                            <input type="email" id="email" placeholder="youremail@gmail.com">
                            <div class="pet-form-sep">
                                <div>
                                    <label for="date">Date</label>
                                    <input type="date" id="date">
                                </div>
                                <div>
                                    <label for="pet">Time</label>
                                    <input type="time">
                                </div>
                            </div>
                            <label for="message">Message</label>
                            <textarea placeholder="Message" id="message"></textarea>
                            <div class="submit-schedule">
                                <input type="submit" value="Cancel">
                                <input type="submit" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Book Schedule End -->

    <!-- Get Quote Start -->
    <section class="petnest-sch-quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="petnest-sch-quote-wrapper">
                        <h3>Get a quote</h3>
                        <p>Fill up the form and our Team will get back to you within 24 hours.</p>
                        <div class="petnest-option-contact">
                            <div class="list-info-contact list-info-contact-flex">
                                <a href="tel:+012348658910"><span><i class="flaticon-call"></i></span> +0123 4865
                                    8910</a>
                                <a href="mailto:hello@Petnest.co">
                                    <figure><img src="./assets/images/icon/mail-icon.svg" alt=""></figure>
                                    hello@Petnest.co
                                </a>
                            </div>
                            <div class="list-info-contact list-info-contact-location">
                                <a href="#">
                                    <figure><img src="./assets/images/icon/location.svg" alt=""></figure> 1/31 Shuvecha
                                    Gardean, Road No: 12 , House No: 3 , Dhaka - 1364
                                </a>
                            </div>
                            <div class="contact-page-social contact-schedule-social">
                                <ul>
                                    <li><a href="#"><span><i class="flaticon-facebook-circular-logo"></i></span></a>
                                    </li>
                                    <li><a href="#"><span><i class="flaticon-social-media"></i></span></a></li>
                                    <li><a href="#"><span><i class="flaticon-twitter"></i></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get Quote End -->

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