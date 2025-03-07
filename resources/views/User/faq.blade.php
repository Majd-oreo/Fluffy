@extends('layouts.User-layout')

@section('content')

    <!-- Faq Hero Start -->
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
                        <h5>FAQ</h5>
                        <h1>Answers at Your <br class="d-xl-block d-none">Fingertips</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/faq/faq-hero.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Hero End -->

    <!-- Petnest Faq Start -->
    <section class="petnest-faq">
        <div class="container">
            <div class="row">
                <div class="petnest-faq-inner">
                    <div class="petnest-faq-buble-animation">
                        <!-- Bubble Animation Start -->
                        <figure><img src="./assets/images/icon/bubble-1.svg" alt=""></figure>
                        <figure><img src="./assets/images/icon/bubble-2.svg" alt=""></figure>
                        <!-- Bubble Animation End -->
                    </div>
                    <div class="petnest-faq-animation">
                        <div class="petnest-bounce-animate">
                            <figure><img src="./assets/images/icon/leash.svg" alt=""></figure>
                        </div>
                        <div class="petnest-bounce-animate">
                            <figure><img src="./assets/images/icon/pet-toy01.svg" alt=""></figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="petnest-heading petnest-heading-faq">
                                <h5>FAQ</h5>
                                <h2>Your Questions, Our <br class="d-xl-block d-none">Answers</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="petnest-faq-left">
                                <figure><img src="./assets/images/home/faq-petnest.png" alt=""></figure>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="petnest-faq-right">
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
                                                sitting, where a pet sitter visits the owner's home to care for the pet
                                                while the owner is away, dog walking, overnight pet care, feeding,
                                                administering medications, and more.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#petnestFaqTwo"
                                                aria-expanded="false" aria-controls="petnestFaqTwo">
                                                Q. Are your pet care providers trained and <br
                                                    class="d-md-block d-none"> experienced?
                                            </button>
                                        </h2>
                                        <div id="petnestFaqTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionPetnest">
                                            <div class="accordion-body">
                                                Pet care agencies provide various services for pet owners, including pet
                                                sitting, where a pet sitter visits the owner's home to care for the pet
                                                while the owner is away, dog walking, overnight pet care, feeding,
                                                administering medications, and more.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#petnestFaqThree"
                                                aria-expanded="false" aria-controls="petnestFaqThree">
                                                Q. How do you handle emergency situations <br class="d-md-block d-none">
                                                during pet sitting?
                                            </button>
                                        </h2>
                                        <div id="petnestFaqThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionPetnest">
                                            <div class="accordion-body">
                                                Pet care agencies provide various services for pet owners, including pet
                                                sitting, where a pet sitter visits the owner's home to care for the pet
                                                while the owner is away, dog walking, overnight pet care, feeding,
                                                administering medications, and more.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#petnestFaqFour"
                                                aria-expanded="false" aria-controls="petnestFaqFour">
                                                Q. What is your policy on administering <br class="d-md-block d-none">
                                                medication to pets?
                                            </button>
                                        </h2>
                                        <div id="petnestFaqFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionPetnest">
                                            <div class="accordion-body">
                                                Pet care agencies provide various services for pet owners, including pet
                                                sitting, where a pet sitter visits the owner's home to care for the pet
                                                while the owner is away, dog walking, overnight pet care, feeding,
                                                administering medications, and more.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#petnestFaqFive"
                                                aria-expanded="false" aria-controls="petnestFaqFive">
                                                Q. Do you provide pet care for special <br class="d-md-block d-none">
                                                needs animals?
                                            </button>
                                        </h2>
                                        <div id="petnestFaqFive" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive" data-bs-parent="#accordionPetnest">
                                            <div class="accordion-body">
                                                Pet care agencies provide various services for pet owners, including pet
                                                sitting, where a pet sitter visits the owner's home to care for the pet
                                                while the owner is away, dog walking, overnight pet care, feeding,
                                                administering medications, and more.
                                            </div>
                                        </div>
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