@extends('layouts.User-layout')

@section('content')
    <!-- Header End -->

    <!-- Service Training Hero Start -->
    <section class="petnest-about-us petnest-services-hero petnest-services-training-hero">
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
                        <h5>Services <span>/ Training</span></h5>
                        <h1>Professional Training <br class="d-xl-block d-none"> for Your Canine <br
                                class="d-xl-block d-none"> Companion</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper about-petnest-grooming about-petnest-services">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/services/services-hero04.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Training Hero End -->

    <!-- Petnest Training Showcase Start -->
    <section class="petnest-grooming-showcase">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="petnest-showcase-gallery">
                        <div class="single-petnest-picture">
                            <figure><img src="./assets/images/services/training01.png" alt=""></figure>
                            <a href="./assets/images/services/training01.png" class="click-to-large"><span><i
                                        class="flaticon-add"></i></span></a>
                        </div>
                        <div class="petnest-showcase-gallery-bottom">
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/training02.png" alt=""></figure>
                                <a href="./assets/images/services/training02.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/training03.png" alt=""></figure>
                                <a href="./assets/images/services/training03.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/training04.png" alt=""></figure>
                                <a href="./assets/images/services/training04.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="petnest-grooming-pay">
                        <div class="button-right"><button class="wishlist-grooming wishlist-grooming-added"><span><i
                                        class="flaticon-heart"></i></span></button></div>
                        <h4>All day / 9.00 am - 7.00 pm</h4>
                        <h2>Pet Training</h2>
                        <h3>$78.00</h3>
                        <div class="grooming-options">
                            <h5>Training Options</h5>
                            <button class="btn btn-petoptions" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePetnest01" aria-expanded="false"
                                aria-controls="collapsePetnest01">
                                Choose an option
                            </button>
                            <div class="collapse main-petnest-service" id="collapsePetnest01">
                                <div class="card card-body">
                                    <!-- Single Options Start -->
                                    <div class="single-pet-options">
                                        <div class="petnest-op-name">
                                            <div class="single-petnest-inculde">
                                                <label class="form-control">
                                                    <input type="checkbox" name="checkbox-checked">
                                                </label>
                                                <h3>Pet Training</h3>
                                            </div>
                                            <button class="btn btn-down-to-show" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOptions01" aria-expanded="false"
                                                aria-controls="collapseOptions01">
                                                <span><i class="flaticon-down-arrow"></i></span>
                                            </button>
                                        </div>
                                        <div class="collapse" id="collapseOptions01">
                                            <div class="service-given">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <ul>
                                                            <li>Bath & blow dry</li>
                                                            <li>Ear cleaning</li>
                                                            <li>Nail clipping</li>
                                                            <li>Choose an option</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <ul>
                                                            <li>Paw pad trim</li>
                                                            <li>Anal gland expression</li>
                                                            <li>Blueberry facial</li>
                                                            <li>Sanitary facial</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Options End -->
                                    <!-- Single Options Start -->
                                    <div class="single-pet-options">
                                        <div class="petnest-op-name">
                                            <div class="single-petnest-inculde">
                                                <label class="form-control">
                                                    <input type="checkbox" name="checkbox-checked">
                                                </label>
                                                <h3>Full Training</h3>
                                            </div>
                                            <button class="btn btn-down-to-show" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOptions02" aria-expanded="false"
                                                aria-controls="collapseOptions02">
                                                <span><i class="flaticon-down-arrow"></i></span>
                                            </button>
                                        </div>
                                        <div class="collapse" id="collapseOptions02">
                                            <div class="service-given">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <ul>
                                                            <li>Custom cut & style</li>
                                                            <li>Bath & blow dry</li>
                                                            <li>Ear cleaning</li>
                                                            <li>Nail clipping</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <ul>
                                                            <li>Sanitary trim</li>
                                                            <li>Anal gland expression</li>
                                                            <li>Blueberry facial</li>
                                                            <li>Paw pad trim</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Options End -->
                                </div>
                            </div>
                        </div>
                        <div class="grooming-cart service-pick-date">
                            <h5>Date</h5>
                            <div>
                                <input type="date">
                                <span>to</span>
                                <input type="date">
                            </div>
                        </div>
                        <div class="pet-food-quantity pet-grooming-quantity">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn-number" data-type="minus"
                                        data-field="">
                                        <span><i class="flaticon-minus"></i></span>
                                    </button>
                                </span>
                                <input type="text" id="quantity" name="quantity" class="form-control input-number"
                                    value="2" min="1" max="100">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn-number" data-type="plus"
                                        data-field="">
                                        <span><i class="flaticon-add"></i></span>
                                    </button>
                                </span>
                            </div>
                            <div class="product-details-btns">
                                <a href="cart.html" class="btn-add-to-cart"><span><i
                                            class="flaticon-shopping-cart"></i></span> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Petnest Training Showcase End -->

    <!-- Service Training Tab Start -->
    <section class="product-desc-page services-desc-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="prduct-desc-wrap services-desc-wrap">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="petnest-des-tab" data-bs-toggle="pill"
                                    data-bs-target="#petnest-desc" type="button" role="tab" aria-controls="petnest-desc"
                                    aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="petnest-add-information" data-bs-toggle="pill"
                                    data-bs-target="#petnest-add-info" type="button" role="tab"
                                    aria-controls="petnest-add-info" aria-selected="false">Requirements</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="petnest-rev-tab" data-bs-toggle="pill"
                                    data-bs-target="#petnest-review-page" type="button" role="tab"
                                    aria-controls="petnest-review-page" aria-selected="false">Reviews (02)</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show product-description active" id="petnest-desc" role="tabpanel"
                                aria-labelledby="petnest-des-tab" tabindex="0">
                                <p>Pet care training is the process of teaching a pet how to be well-behaved and to
                                    perform specific tasks or behaviors. Proper pet care training is important for the
                                    health, safety, and happiness of both the pet and the owner.</p>
                                <div class="grooming-showcase">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="grooming-showcase-left">
                                                <p> Teaching a pet where and when to relieve themselves is an important
                                                    aspect of pet care training. This will help prevent accidents and
                                                    keep your home clean. Teaching basic obedience commands, such as
                                                    "sit," "stay," and "come," will help establish a clear line of
                                                    communication between you and your pet.</p>
                                                <p>Leash training helps ensure that your pet is safe and under control
                                                    while walking. It also helps prevent dangerous or disruptive
                                                    behavior while outside.
                                                    Socializing your pet with other animals and people is important for
                                                    their overall well-being and happiness.</p>
                                                <p>Pet care training requires patience, consistency, and positive
                                                    reinforcement. Seeking the help of a professional pet trainer may be
                                                    beneficial for owners who need additional guidance or support.
                                                    Proper pet care training will help create a happy and healthy
                                                    relationship between you and your pet</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="grooming-showcase-right">
                                                <figure><img src="./assets/images/services/training-pet01.png" alt="">
                                                </figure>
                                                <h3>Figure: <span>Training Pet</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grooming-benifits">
                                    <figure><img src="./assets/images/icon/pet-love01.svg" alt=""></figure>
                                    <figure><img src="./assets/images/icon/pet-toy01.svg" alt=""></figure>
                                    <h3>Benefits</h3>
                                    <ul>
                                        <li><span>Plans focused on mental and <br class="d-md-block d-none"> physical
                                                stimulation using our <br class="d-md-block d-none"> Elements of a Great
                                                Dog tool</span></li>
                                        <li><span>Offerings to fit all needs</span></li>
                                        <li><span>Behavior monitoring through <br class="d-md-block d-none"> New Dog
                                                Integration and <br class="d-md-block d-none"> ongoing Behavior
                                                Evaluations</span></li>
                                        <li><span>Convenient virtual appointments</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade prodcut-add-info" id="petnest-add-info" role="tabpanel"
                                aria-labelledby="petnest-add-information" tabindex="0">
                                <div class="grooming-showcase">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div
                                                class="grooming-showcase-left grooming-showcase-left-requirements service-training-pick">
                                                <p>Whether you have a new puppy or your old friend has picked up some
                                                    bad habits, we’re here to help. Our training team has over 1,000
                                                    hours of experience, is GADT certified, ABC certified, CGC Evaluator
                                                    certified, and specializes in a full range of positive reinforcement
                                                    training – including puppy basics, advanced obedience and adolescent
                                                    behavior modification.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <div class="grooming-showcase-left grooming-showcase-left-requirements">
                                                <ul>
                                                    <li>Patience: Training a pet takes time and patience. Be prepared to
                                                        spend time with your pet and be patient as they learn new
                                                        behaviors.</li>
                                                    <li>Consistency: Consistently use the same commands and rewards to
                                                        reinforce positive behavior.</li>
                                                    <li>Positive Reinforcement: Use positive reinforcement, such as
                                                        treats and praise, to encourage and reinforce desired behaviors.
                                                    </li>
                                                    <li>Clear Communication: Clearly communicate commands and
                                                        expectations to your pet. Use a firm but kind tone.</li>
                                                    <li>Understanding of animal behavior: Knowledge of animal behavior
                                                        and body language will help you better understand and
                                                        communicate with your pet.</li>
                                                    <li>Proper Equipment: Use appropriate training equipment, such as a
                                                        leash, collar, or harness, to ensure safe and effective training
                                                        sessions.</li>
                                                    <li>Professional Help: Consider seeking the help of a professional
                                                        trainer if you need additional guidance or support.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="grooming-showcase-right">
                                                <figure><img src="./assets/images/services/training-pet02.png" alt="">
                                                </figure>
                                                <h3>Figure: <span>Training Pet</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grooming-requarement">
                                    <h4>Health:</h4>
                                    <p>All dogs must be free from parasites, ticks/fleas, and communicable diseases. Any
                                        dog that poses a risk to the health of the other dogs in our care will not be
                                        accepted at check-in. If our staff finds reason for concern while your dog is in
                                        Throw Me A Bone’s care, he/she will be separated from the group and we will
                                        contact you about picking them up and/or seeing a veterinarian. We will gladly
                                        welcome your dog back once they are healthy again and no longer pose a risk of
                                        infection.</p>
                                    <h4>Vaccinations:</h4>
                                    <p>We want all dogs to be safe and healthy. As such, and in compliance with the New
                                        York City Department of Health (NYCDOH) and the recommendation of the American
                                        Veterinary Medical Association, we require proof of the following vaccinations
                                        from your veterinarian prior to using any of our services.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade petnest-des-reviews" id="petnest-review-page" role="tabpanel"
                                aria-labelledby="petnest-rev-tab" tabindex="0">
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
    <!-- Service Training Tab End -->

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