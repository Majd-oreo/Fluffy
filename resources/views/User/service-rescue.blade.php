@extends('layouts.User-layout')

@section('content')
    <!-- Service Rescue Hero Start -->
    <section class="petnest-about-us petnest-services-hero petnest-services-rescue-hero">
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
                    <div class="about-petnest-left inner-page">
                        <h5>Services <span>/ Rescue</span></h5>
                        <h1>Dedicated Emergency <br class="d-xl-block d-none"> Response for All</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper rescue-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/services/services-hero07.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Rescue Hero End -->

    <!-- Petnest Rescue Showcase Start -->
    <section class="petnest-grooming-showcase">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="petnest-showcase-gallery petnest-showcase-rescue-gallery">
                        <div class="single-petnest-picture">
                            <figure><img src="./assets/images/services/rescue01.png" alt=""></figure>
                            <a href="./assets/images/services/rescue01.png" class="click-to-large"><span><i
                                        class="flaticon-add"></i></span></a>
                        </div>
                        <div class="petnest-showcase-gallery-bottom">
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/rescue02.png" alt=""></figure>
                                <a href="./assets/images/services/rescue02.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/rescue03.png" alt=""></figure>
                                <a href="./assets/images/services/rescue03.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/rescue04.png" alt=""></figure>
                                <a href="./assets/images/services/rescue04.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="petnest-grooming-pay rescue-right-box">
                        <div class="button-right"><button class="wishlist-grooming wishlist-grooming-added"><span><i
                                        class="flaticon-heart"></i></span></button></div>
                        <h4>All day / 24h open for rescue</h4>
                        <h2>Pet Rescue</h2>
                        <h3>It’s Free of Charge</h3>
                        <form action="#">
                            <div class="grooming-cart rescue-input">
                                <h5>Name</h5>
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="grooming-cart rescue-input">
                                <h5>Email or Phone Number</h5>
                                <input type="text" placeholder="Email or Number">
                            </div>
                            <div class="grooming-cart rescue-input">
                                <h5>Description</h5>
                                <textarea placeholder="This is..."></textarea>
                            </div>
                            <input class="btn-add-to-cart btn-rescue" type="submit" value="Send Message">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Petnest Rescue Showcase End -->

    <!-- Petnest Emergency Start -->
    <section class="petnest-emergency">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-emergency-wrap">
                        <div class="petnest-emergency-bg">
                            <figure><img src="./assets/images/icon/pet-love01.svg" alt=""></figure>
                            <figure><img src="./assets/images/icon/pet-toy01.svg" alt=""></figure>
                        </div>
                        <h2>For an Emergency <br class="d-md-block d-none"> Rescue</h2>
                        <h3>Call Us</h3>
                        <a href="#" class="btn-emer-number">
                            <span><i class="flaticon-phone"></i></span>
                            895-746-654
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Petnest Emergency End -->

    <!-- Grooming Tab Start -->
    <section class="product-desc-page services-desc-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="prduct-desc-wrap services-desc-wrap">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="petnest-rev-tab" data-bs-toggle="pill"
                                    data-bs-target="#petnest-review-page" type="button" role="tab"
                                    aria-controls="petnest-review-page" aria-selected="true">Reviews (02)</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show petnest-des-reviews active" id="petnest-review-page"
                                role="tabpanel" aria-labelledby="petnest-rev-tab" tabindex="0">
                                <div class="petnest-product-reviews">
                                    <div class="single-review-process">
                                        <div class="single-review-process-left">
                                            <figure><img src="./assets/images/services/grooming-review01.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="single-review-process-right">
                                            <h4><span>Johan Martin</span> - 06 days ago</h4>
                                            <div class="single-review-process-star">
                                                <span><i class="flaticon-star-2"></i></span>
                                                <span><i class="flaticon-star-2"></i></span>
                                                <span><i class="flaticon-star-2"></i></span>
                                                <span><i class="flaticon-star-2"></i></span>
                                                <span><i class="flaticon-star-half-empty"></i></span>
                                            </div>
                                            <p>Pilchard in Prawn Jelly cat food is a type of wet cat food that is
                                                typically made from fish and seafood-based ingredients.</p>
                                        </div>
                                    </div>
                                    <div class="single-review-process">
                                        <div class="single-review-process-left">
                                            <figure><img src="./assets/images/services/grooming-review02.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="single-review-process-right">
                                            <h4><span>Keniya Role</span> - 01 days ago</h4>
                                            <div class="single-review-process-star">
                                                <span><i class="flaticon-star-2"></i></span>
                                                <span><i class="flaticon-star-2"></i></span>
                                                <span><i class="flaticon-star-2"></i></span>
                                                <span><i class="flaticon-star-2"></i></span>
                                                <span><i class="flaticon-star-half-empty"></i></span>
                                            </div>
                                            <p>The main ingredient in this type of cat food is often pilchards or
                                                sardines, which are small, oily fish that are rich in essential
                                                nutrients like omega-3 fatty acids, protein, and vitamins.</p>
                                        </div>
                                    </div>
                                    <!-- Add Product Review Form Start -->
                                    <div class="col-lg-8">
                                        <div class="blog-comments-petnest product-add-rev">
                                            <h3>Add a review</h3>
                                            <p>Your email address will not be published. Required fields are marked *
                                            </p>
                                            <form action="#">
                                                <div class="comment-flex">
                                                    <div>
                                                        <label for="name">Your full name</label>
                                                        <input type="text" id="name">
                                                    </div>
                                                    <div>
                                                        <label for="email">Your email*</label>
                                                        <input type="email" id="email">
                                                    </div>
                                                </div>
                                                <label for="message">Write your review*</label>
                                                <textarea id="message"></textarea>
                                                <div class="give-rating">
                                                    <div>
                                                        <h4>Your Rating</h4>
                                                    </div>
                                                    <div class="single-review-process-star">
                                                        <span><i class="flaticon-star-2"></i></span>
                                                        <span><i class="flaticon-star-2"></i></span>
                                                        <span><i class="flaticon-star-2"></i></span>
                                                        <span><i class="flaticon-star-2"></i></span>
                                                        <span><i class="flaticon-star-half-empty"></i></span>
                                                    </div>
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
    <!-- Grooming Tab End -->

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


  @endsection