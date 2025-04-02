@extends('layouts.User-layout')

@section('content')
    <!-- Header End -->

    <!-- Service Veterinary Hero Start -->
    <section class="petnest-about-us petnest-services-hero petnest-services-veterinary-hero">
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
                        <h5>Services <span>/ Veterinary</span></h5>
                        <h1>Your Trusted Partner for Comprehensive Animal Health Solutions</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper about-petnest-veterinary-hero">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/services/service1.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Veterinary Hero End -->

    <!-- Petnest Veterinary Showcase Start -->
    <section class="petnest-grooming-showcase">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="petnest-showcase-gallery">
                        <div class="single-petnest-picture">
                            <figure><img src="./assets/images/services/veterinary01.png" alt=""></figure>
                            <a href="./assets/images/services/veterinary01.png" class="click-to-large"><span><i
                                        class="flaticon-add"></i></span></a>
                        </div>
                        <div class="petnest-showcase-gallery-bottom">
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/veterinary02.png" alt=""></figure>
                                <a href="./assets/images/services/veterinary02.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/veterinary03.png" alt=""></figure>
                                <a href="./assets/images/services/veterinary03.png" class="click-to-large"><span><i
                                            class="flaticon-add"></i></span></a>
                            </div>
                            <div class="single-petnest-picture">
                                <figure><img src="./assets/images/services/veterinary04.png" alt=""></figure>
                                <a href="./assets/images/services/veterinary04.png" class="click-to-large"><span><i
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
                        <h2>Pet Veterinary</h2>
                        <h3>$55.00 </h3>
                        <div class="grooming-options">
                            <h5>Veterinary Options</h5>
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
                                                <h3>Basic Veterinary</h3>
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
                                                <h3>Full Veterinary</h3>
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
    <!-- Petnest Veterinary Showcase End -->

    <!-- Service Veterinary Tab Start -->
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
                                <p>A veterinarian, also known as a vet, is a medical professional who provides care for
                                    animals. They diagnose and treat diseases, injuries, and other health problems in
                                    animals, and may also perform surgeries and other medical procedures.</p>
                                <div class="grooming-showcase">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="grooming-showcase-left">
                                                <p> Pet veterinary care is an important aspect of pet ownership, as it
                                                    helps ensure the health and well-being of pets. Vets can provide
                                                    preventive care, such as vaccinations and regular check-ups, as well
                                                    as diagnostic and therapeutic services for pets with illnesses or
                                                    injuries.</p>
                                                <p>It is important for pet owners to choose a reputable and experienced
                                                    veterinarian who is knowledgeable about the specific needs of their
                                                    pet's breed and species. Vets should be compassionate, patient, and
                                                    good communicators, and should be able to explain complex medical
                                                    issues in a clear and understandable manner.</p>
                                                <p>Vets can work in private practices, animal hospitals, or research
                                                    facilities, and may specialize in certain areas of veterinary
                                                    medicine, such as surgery, dentistry, or dermatology. Some may also
                                                    provide emergency care for pets, especially in cases of serious
                                                    illness or injury.</p>
                                                <p>Overall, pet veterinary care plays a crucial role in maintaining the
                                                    health and quality of life of pets. Regular visits to the vet can
                                                    help pet owners catch and treat health problems early, and can help
                                                    ensure that their pets live long and healthy lives.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="grooming-showcase-right">
                                                <figure><img src="./assets/images/services/veterinary-pet01.png" alt="">
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
                                        <li><span>Regular check-ups and preventive treatments, <br
                                                    class="d-md-block d-none"> such as vaccinations, can help prevent
                                                many <br class="d-md-block d-none">diseases and health problems in
                                                pets.</span></li>
                                        <li><span>Early detection and treatment of illnesses</span></li>
                                        <li><span>Vets can provide pain management <br class="d-md-block d-none"> and
                                                treatment for pets experiencing pain due to <br
                                                    class="d-md-block d-none"> injury or illnes</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade prodcut-add-info" id="petnest-add-info" role="tabpanel"
                                aria-labelledby="petnest-add-information" tabindex="0">
                                <div class="grooming-showcase">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="grooming-showcase-left grooming-showcase-left-requirements">
                                                <p>To provide quality pet veterinary care, a veterinary practice should
                                                    have the following requirements:</p>
                                                <ul>
                                                    <li>Qualified and licensed veterinarians: The veterinary practice
                                                        should have licensed and experienced veterinarians who have
                                                        received the proper education and training to diagnose and treat
                                                        pet health problems.</li>
                                                    <li>Adequate facilities and equipment: The veterinary practice
                                                        should have modern and well-equipped facilities, including exam
                                                        rooms, surgical suites, and diagnostic equipment, to provide
                                                        comprehensive care for pets.</li>
                                                    <li>Clean and safe environment: The veterinary practice should
                                                        maintain a clean and safe environment for pets, with adequate
                                                        ventilation, lighting, and temperature control.</li>
                                                    <li>Experienced and knowledgeable support staff: The veterinary
                                                        practice should have experienced and knowledgeable support
                                                        staff, including veterinary technicians and receptionists, who
                                                        can assist with the care of pets and provide information to pet
                                                        owners.</li>
                                                    <li>Availability of emergency services: The veterinary practice
                                                        should be equipped to provide emergency services and have
                                                        arrangements in place for after-hours care.</li>
                                                    <li>Comprehensive services: The veterinary practice should offer a
                                                        wide range of veterinary services, including preventive care,
                                                        diagnosis and treatment of illnesses, surgery, and behavioral
                                                        counseling.</li>
                                                    <li>Good communication skills: The veterinary practice should have
                                                        good communication skills and be able to explain complex medical
                                                        issues in a clear and understandable manner. They should also be
                                                        compassionate and patient with both pets and their owners.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="grooming-showcase-right">
                                                <figure><img src="./assets/images/services/veterinary-pet02.png" alt="">
                                                </figure>
                                                <h3>Figure: <span>Veterinary Pet</span></h3>
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
    <!-- Service Veterinary Tab End -->

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