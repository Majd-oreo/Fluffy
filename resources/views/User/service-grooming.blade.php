@extends('layouts.User-layout')

@section('content')
    <!-- Header End -->

    <!-- Service Grooming Hero Start -->
    <section class="petnest-about-us petnest-services-hero petnest-services-grooming-hero">
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
                        <h5>Services <span>/ Grooming</span></h5>
                        <h1>Your pet's happiness <br class="d-xl-block d-none"> is our top priority</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper about-petnest-grooming">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/services/services-hero02.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Grooming Hero End -->

    <!-- Petnest Grooming Showcase Start -->
    <section class="petnest-grooming-showcase">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="petnest-showcase-gallery">
                        <div class="single-petnest-picture">
                            <figure><img src="./assets/images/services/grooming01.png" alt=""></figure>
                            <a href="./assets/images/services/grooming01.png" class="click-to-large"><span><i
                                        class="flaticon-add"></i></span></a>
                        </div>
                        <div class="petnest-showcase-gallery-bottom">
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/grooming02.png" alt=""></figure>
                                <a href="./assets/images/services/grooming02.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/grooming03.png" alt=""></figure>
                                <a href="./assets/images/services/grooming03.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/grooming04.png" alt=""></figure>
                                <a href="./assets/images/services/grooming04.png" class="click-to-large"><span><i
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
                        <h2>Pet Grooming</h2>
                        <h3>$65.00</h3>
                        <div class="grooming-options">
                            <h5>Grooming Options</h5>
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
                                                    <input type="checkbox" name="checkbox-checked" checked>
                                                </label>
                                                <h3>Basic Bath</h3>
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
                                                <h3>Full Groom</h3>
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
                        <div class="grooming-cart">
                            <h5>Date</h5>
                            <input type="date">
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
    <!-- Petnest Grooming Showcase End -->

    <!-- Service Grooming Tab Start -->
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
                                <p>Our grooming service offers convenience, comfort and style. We use hypoallergenic and
                                    all-natural oatmeal shampoos for a safe and luxurious experience. In-home available
                                    for an additional fee. Priced by breed and weight. By appointment only, no walk-ins
                                </p>
                                <div class="grooming-showcase">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="grooming-showcase-left">
                                                <p>Our pet care service provides various forms of care for pets,
                                                    including feeding, exercise, grooming, and overall well-being. This
                                                    type of service can be provided in the pet owner's home or at a
                                                    facility, such as a pet hotel or boarding kennel. We also offer
                                                    additional services such as training, transportation, and medical
                                                    care. We are specialize in caring for a specific type of animal,
                                                    such as cats or dogs, while others may be able to care for a variety
                                                    of different types of pets. The level of our care and type of
                                                    services offered will vary depending on the specific pet care
                                                    service.</p>
                                                <p>This Pet care services can be a great option for busy pet owners who
                                                    are unable to provide the necessary care for their pets due to work
                                                    or other commitments. They can also be a helpful resource for pet
                                                    owners who are traveling and need someone to look after their pets
                                                    while they are away.</p>
                                                <p>There is often ask some questions about the pet care service and we
                                                    always try to give all the answer of their questions. Before taking
                                                    services it is important to know about the service process and its
                                                    advantages or disadvantages. Here is some questions and answers we
                                                    set as standard.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="grooming-showcase-right">
                                                <figure><img src="./assets/images/services/grooming-pet.png" alt="">
                                                </figure>
                                                <h3>Figure: <span>Grooming Pet</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grooming-benifits">
                                    <figure><img src="./assets/images/icon/pet-love01.svg" alt=""></figure>
                                    <figure><img src="./assets/images/icon/pet-toy01.svg" alt=""></figure>
                                    <h3>Benefits</h3>
                                    <ul>
                                        <li><span>Every grooming comes with our <br class="d-md-block d-none"> Grooming
                                                Quality Guarantee</span></li>
                                        <li><span>Experience with most breeds</span></li>
                                        <li><span>Experience with challenging dogs</span></li>
                                        <li><span>Over 25 years of experience</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade prodcut-add-info" id="petnest-add-info" role="tabpanel"
                                aria-labelledby="petnest-add-information" tabindex="0">
                                <div class="grooming-showcase">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="grooming-showcase-left grooming-showcase-left-requirements">
                                                <p>Pet grooming requirements vary depending on the type of pet and its
                                                    breed, <br class="d-block-lg d-none"> but in general, the following
                                                    items are necessary:</p>
                                                <ul>
                                                    <li>Brushes or combs: For removing tangles and mats from fur.</li>
                                                    <li>Shampoo and conditioner: For cleaning and moisturizing the pet's
                                                        skin and fur.</li>
                                                    <li>Scissors or clippers: For trimming fur or cutting nails.</li>
                                                    <li>Nail trimmers: For safely cutting a pet's nails.</li>
                                                    <li>Ear cleaning solution: For cleaning a pet's ears and preventing
                                                        infections.</li>
                                                    <li>Towels: For drying the pet after a bath.</li>
                                                    <li>A non-slip surface: For the pet's safety and comfort during
                                                        grooming.</li>
                                                </ul>
                                                <p>It's also important to have a calm and quiet environment for grooming
                                                    and to
                                                    approach the process slowly <br class="d-block-lg d-none"> and
                                                    gently to avoid causing stress to the pet.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="grooming-showcase-right">
                                                <figure><img src="./assets/images/services/grooming-pet02.png" alt="">
                                                </figure>
                                                <h3>Figure: <span>Grooming Pet</span></h3>
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
    <!-- Service Grooming Tab End -->

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