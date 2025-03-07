@extends('layouts.User-layout')

@section('content')

    <!-- Our Gallery Hero Start -->
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
                        <h5>Our Gallery</h5>
                        <h1>A Peek into Our Pet <br class="d-xl-block d-none"> Gallery</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/gallery/gallery-hero.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Gallery Hero End -->

    <!-- Discover Our Gallery Start -->
    <section class="meet-petnest-team gallery-pet-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-heading petnest-heading-gallery text-center">
                        <h2>Discover Our Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="gallery-filter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".grooming">Grooming</li>
                        <li data-filter=".walking">Walking</li>
                        <li data-filter=".daycare">Daycare</li>
                        <li data-filter=".veterinary">Veterinary</li>
                        <li data-filter=".boarding">Boarding</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-list">
                        <div class="single-gallery-photo gallery-large grooming daycare *">
                            <img src="./assets/images/gallery/images-01.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-01.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                        <div class="single-gallery-photo gallery-medium daycare veterinary boarding *">
                            <img src="./assets/images/gallery/images-02.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-02.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                        <div class="single-gallery-photo walking *">
                            <img src="./assets/images/gallery/images-03.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-03.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                        <div class="single-gallery-photo veterinary *">
                            <img src="./assets/images/gallery/images-04.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-04.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                        <div class="single-gallery-photo gallery-medium boarding *">
                            <img src="./assets/images/gallery/images-05.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-05.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                        <div class="single-gallery-photo gallery-large walking *">
                            <img src="./assets/images/gallery/images-06.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-06.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                        <div class="single-gallery-photo gallery-large grooming walking daycare veterinary boarding *">
                            <img src="./assets/images/gallery/images-07.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-07.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                        <div class="single-gallery-photo gallery-medium grooming walking daycare veterinary boarding *">
                            <img src="./assets/images/gallery/images-08.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-08.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                        <div class="single-gallery-photo grooming walking daycare veterinary boarding *">
                            <img src="./assets/images/gallery/images-09.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-09.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                        <div class="single-gallery-photo grooming walking daycare veterinary boarding *">
                            <img src="./assets/images/gallery/images-10.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-10.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                        <div class="single-gallery-photo gallery-medium grooming walking daycare veterinary boarding *">
                            <img src="./assets/images/gallery/images-11.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-12.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                        <div class="single-gallery-photo gallery-large grooming walking daycare veterinary boarding *">
                            <img src="./assets/images/gallery/images-12.png" alt="">
                            <!-- Gallery Inner Image -->
                            <div class="show-image-gallery">
                                <a href="./assets/images/gallery/images-12.png" class="click-to-large"><i
                                        class="flaticon-search-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discover Our Gallery End -->

    <!-- Petnest Newsletter Start -->
    <section class="petnest-newsletter petnest-newsletter-gallery">
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