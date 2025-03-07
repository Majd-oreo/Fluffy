@extends('layouts.User-layout')

@section('content')
    <!-- Header End -->

    <!-- Service Daycare Hero Start -->
    <section class="petnest-about-us petnest-services-hero petnest-services-daycare-hero">
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
                        <h5>Services <span>/ Daycare</span></h5>
                        <h1>Professional Training <br class="d-xl-block d-none"> for Your Canine <br
                                class="d-xl-block d-none"> Companion</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper about-petnest-grooming about-petnest-services">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/services/services-hero05.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Daycare Hero End -->

    <!-- Petnest Daycare Showcase Start -->
    <section class="petnest-grooming-showcase">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="petnest-showcase-gallery">
                        <div class="single-petnest-picture">
                            <figure><img src="./assets/images/services/daycare01.png" alt=""></figure>
                            <a href="./assets/images/services/daycare01.png" class="click-to-large"><span><i
                                        class="flaticon-add"></i></span></a>
                        </div>
                        <div class="petnest-showcase-gallery-bottom">
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/daycare02.png" alt=""></figure>
                                <a href="./assets/images/services/daycare02.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/daycare03.png" alt=""></figure>
                                <a href="./assets/images/services/daycare03.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/daycare04.png" alt=""></figure>
                                <a href="./assets/images/services/daycare04.png" class="click-to-large"><span><i
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
                        <h2>Day Care</h2>
                        <h3>$55.00 </h3>
                        <div class="grooming-options">
                            <h5>Daycare Options</h5>
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
                                                <h3>Basic Daycare</h3>
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
                                                <h3>Full Daycare</h3>
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
    <!-- Petnest Daycare Showcase End -->

    <!-- Service Daycare Tab Start -->
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
                                <p>Your dog will love playing all day with like-minded furry friends in our safe and
                                    supervised playrooms. Not only can you check in on how they are doing via our play
                                    cams, we will provide daily report cards with photos so you can rest assured they
                                    are having the time of their life.</p>
                                <div class="grooming-showcase">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="grooming-showcase-left">
                                                <p> Pet day care is a service that provides temporary care for pets,
                                                    typically during the day while their owners are at work or running
                                                    errands. It offers a safe, supervised environment for pets to play,
                                                    interact with other animals, and receive attention and exercise.</p>
                                                <p>Pet day care centers typically have staff trained in pet care, and
                                                    often offer a range of services, such as feeding, grooming, and
                                                    administering medication. Some centers also offer additional
                                                    services, such as training or overnight care.</p>
                                                <p>The benefits of pet day care include providing socialization and
                                                    exercise for pets, reducing the stress of being alone all day, and
                                                    giving owners peace of mind that their pet is being well taken care
                                                    of. It is important for pet owners to choose a reputable pet day
                                                    care center with qualified staff and a safe, clean environment.</p>
                                                <p>Overall, pet day care can be a valuable resource for pet owners who
                                                    want to provide their pets with the best possible care</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="grooming-showcase-right">
                                                <figure><img src="./assets/images/services/daycare-pet01.png" alt="">
                                                </figure>
                                                <h3>Figure: <span>Daycare Pet</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grooming-benifits">
                                    <figure><img src="./assets/images/icon/pet-love01.svg" alt=""></figure>
                                    <figure><img src="./assets/images/icon/pet-toy01.svg" alt=""></figure>
                                    <h3>Benefits</h3>
                                    <ul>
                                        <li><span>Off-leash exercise and socialization</span></li>
                                        <li><span>Trainer supervised play</span></li>
                                        <li><span>In-house veterinary supervision</span></li>
                                        <li><span>Complimentary New Dog Integration <br class="d-md-block d-none"> and
                                                Behavior Evaluations</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade prodcut-add-info" id="petnest-add-info" role="tabpanel"
                                aria-labelledby="petnest-add-information" tabindex="0">
                                <div class="grooming-showcase">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="grooming-showcase-left grooming-showcase-left-requirements">
                                                <p>Pet day care centers have certain requirements for pets to ensure the
                                                    safety and well-being of all animals in their care. These
                                                    requirements may include:</p>
                                                <ul>
                                                    <li>Vaccinations: Pets should be up-to-date on all vaccinations,
                                                        including rabies, distemper, and bordello.</li>
                                                    <li>Health certificate: Some centers may require a recent health
                                                        certificate from a veterinarian, indicating that the pet is in
                                                        good health and free from any communicable diseases.</li>
                                                    <li>Behavioral assessment: Some pet day care centers may require a
                                                        behavioral assessment to evaluate the pet's temperament and
                                                        compatibility with other animals.</li>
                                                    <li>Proof of spaying/neutering: Some centers may require proof that
                                                        the pet has been spayed or neutered.</li>
                                                    <li>Flea and tick prevention: Pets should be on a flea and tick
                                                        prevention program to protect themselves and other animals.</li>
                                                    <li>Leash or carrier: Pets should be transported to the day care
                                                        center in a carrier or on a leash.</li>
                                                    <li>Proof of ownership: Pet owners may need to provide proof of
                                                        ownership, such as a bill of sale or adoption papers.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="grooming-showcase-right">
                                                <figure><img src="./assets/images/services/daycare-pet02.png" alt="">
                                                </figure>
                                                <h3>Figure: <span>Daycare Pet</span></h3>
                                            </div>
                                        </div>
                                    </div>
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
    <!-- Service Daycare Tab End -->

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