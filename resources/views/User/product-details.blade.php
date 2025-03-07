@extends('layouts.User-layout')

@section('content')

    <!-- Product Detail Hero Start -->
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
                    <div class="about-petnest-left inner-page">
                        <h5>Shop <span>/ Product Details</span></h5>
                        <h1>Shop for Your Furry <br class="d-xl-block d-none">Friend</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/shop/shop-hero.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Detail Hero End -->

    <!-- Product Details Start -->
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-left">
                        <div class="product-highlight">
                            <img class="xzoom" src="./assets/images/shop/product300.png"
                                xoriginal="./assets/images/shop/product300.png" alt="" />
                        </div>
                        <div class="xzoom-thumbs">
                            <a href="./assets/images/shop/product05.png">
                                <img class="xzoom-gallery" src="./assets/images/shop/product05.png"
                                    xpreview="./assets/images/shop/product05.png" alt="">
                            </a>
                            <a href="./assets/images/shop/product06.png">
                                <img class="xzoom-gallery" src="./assets/images/shop/product06.png" alt="">
                            </a>
                            <a href="./assets/images/shop/product02.png">
                                <img class="xzoom-gallery" src="./assets/images/shop/product02.png" alt="">
                            </a>
                            <a href="./assets/images/shop/product04.png">
                                <img class="xzoom-gallery" src="./assets/images/shop/product04.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-right">
                        <h2>Pilchard In Prawn Jelly</h2>
                        <h3>120.00$</h3>
                        <div class="product-total-rev">
                            <div class="star-of-product">
                                <span><i class="flaticon-star"></i></span>
                                <span><i class="flaticon-star"></i></span>
                                <span><i class="flaticon-star"></i></span>
                                <span><i class="flaticon-star"></i></span>
                                <span><i class="flaticon-star"></i></span>
                            </div>
                            <span>(48 Customer Review)</span>
                        </div>
                        <p>Pilchard in Prawn Jelly cat food is a type of wet cat food that is typically made from fish
                            and seafood-based ingredients. The main ingredient in this type of cat food is often
                            pilchards or sardines, which are small, oily fish that are rich in essential nutrients like
                            omega-3 fatty acids, protein, and vitamins.</p>
                        <h5>SKU:<span>001</span></h5>
                        <h5>Categories:<span>Pet Food, Cat Food, Fish, Prawn Jelly</span></h5>
                        <h6>Available:<span>89</span></h6>
                        <div class="pet-food-quantity">
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
                                <a href="cart.html" class="btn-add-to-cart">Add To Cart</a>
                                <a href="checkout.html" class="btn-add-to-cart btn-buy-nw">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details End -->

    <!-- Product Tab Start -->
    <section class="product-desc-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="prduct-desc-wrap">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="petnest-des-tab" data-bs-toggle="pill"
                                    data-bs-target="#petnest-desc" type="button" role="tab" aria-controls="petnest-desc"
                                    aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="petnest-add-information" data-bs-toggle="pill"
                                    data-bs-target="#petnest-add-info" type="button" role="tab"
                                    aria-controls="petnest-add-info" aria-selected="false">Additional
                                    Information</button>
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
                                <p>Pilchard in Prawn Jelly cat food is a popular option for cat owners who are looking
                                    for a nutritious and tasty wet food for their feline companions. This type of cat
                                    food is made with pilchards or sardines, which are small, oily fish that are rich in
                                    essential nutrients like omega-3 fatty acids, protein, and vitamins. The prawn jelly
                                    in the food adds hydration and flavor, as well as additional nutrients like calcium,
                                    phosphorus, and iodine.</p>
                                <p>One of the benefits of Pilchard in Prawn Jelly cat food is that it is a high-protein
                                    diet that can help to maintain muscle mass, support healthy skin and coat, and
                                    provide energy for active cats. The omega-3 fatty acids in the fish can also support
                                    heart health and brain function, and help to reduce inflammation in the body.
                                    Additionally, the prawn jelly in the food provides a source of hydration, which can
                                    be especially important for cats who do not drink enough water on their own.</p>
                                <p>Another advantage of Pilchard in Prawn Jelly cat food is that it is often
                                    well-received by cats. Many cats find the taste of fish and seafood-based foods to
                                    be irresistible, making this type of cat food an excellent choice for picky eaters.
                                    Additionally, the jelly in the food can help to make the food more palatable and
                                    appealing, even to cats who are not usually fans of wet food.</p>
                                <p>In conclusion, Pilchard in Prawn Jelly cat food is a nutritious and delicious option
                                    for cat owners who want to provide their feline companions with a high-quality diet
                                    that supports overall health and wellness. Whether you have a picky eater or an
                                    active cat who needs a protein-rich diet, this type of cat food is a great choice to
                                    consider.</p>
                            </div>
                            <div class="tab-pane fade prodcut-add-info" id="petnest-add-info" role="tabpanel"
                                aria-labelledby="petnest-add-information" tabindex="0">
                                <p>Here is some additional information about Pilchard in Prawn Jelly cat food:</p>
                                <ul>
                                    <li>Ingredient Quality: When choosing Pilchard in Prawn Jelly cat food, it is
                                        important to look for a brand that uses high-quality ingredients. Look for
                                        brands that use whole pilchards or sardines, rather than fish meal or
                                        by-products, and that use human-grade prawn jelly. Avoid brands that use
                                        artificial preservatives, colors, or flavors.</li>
                                    <li>Nutritional Value: Pilchard in Prawn Jelly cat food can provide a variety of
                                        essential nutrients for your cat, including protein, omega-3 fatty acids,
                                        vitamins, and minerals. However, it is important to choose a brand that is
                                        formulated to meet your cat's specific nutritional needs, such as age, weight,
                                        and health status.</li>
                                    <li>Feeding Recommendations: The amount of Pilchard in Prawn Jelly cat food that
                                        your cat needs will depend on their age, weight, and activity level. It is
                                        important to follow the feeding recommendations on the cat food package, or to
                                        consult with your veterinarian for specific feeding guidelines. Wet food should
                                        be fed in moderation, as it can contribute to weight gain and urinary problems
                                        if fed in excess.</li>
                                    <li>Shelf Life: Pilchard in Prawn Jelly cat food is a perishable product, and it is
                                        important to store it properly to maintain its freshness and prevent spoilage.
                                        Store opened cans of cat food in the refrigerator, and use within three to five
                                        days. Unopened cans of cat food can be stored in a cool, dry place, but it is
                                        recommended to check the expiration date and use the food before it expires.
                                    </li>
                                    <li>Alternative Options: If your cat is not a fan of Pilchard in Prawn Jelly cat
                                        food, there are many other options to choose from. Other popular types of wet
                                        cat food include chicken, turkey, beef, and lamb in gravy, as well as specialty
                                        diets like low-crab, low-fat, and high-protein formulas.</li>
                                </ul>
                                <p>By keeping these factors in mind, you can choose the right Pilchard in Prawn Jelly
                                    cat food for your feline companion and provide them with a nutritious and delicious
                                    diet that supports their overall health and well-being.</p>
                                <div class="product-table">
                                    <h3>Product Information</h3>
                                    <div class="petnest-table table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Protein</th>
                                                    <td>25%, to build and repair tissues, produce enzymes, and maintain
                                                        healthy organs.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Fats</th>
                                                    <td>0.5%, They also help keep the skin and coat healthy.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Carbohydrates</th>
                                                    <td>10%, provide energy and help pets maintain healthy weight and
                                                        keep good the digestive system.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Minerals</th>
                                                    <td>20%,Help building strong bones, maintaining healthy muscles, and
                                                        regulating the body's fluid balance.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Minerals</th>
                                                    <td>15.5%, Essential for a variety of functions in the body,
                                                        including the immune system, metabolism, and growth.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Animale</th>
                                                    <td>For Cat</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade petnest-des-reviews" id="petnest-review-page" role="tabpanel"
                                aria-labelledby="petnest-rev-tab" tabindex="0">
                                <div class="petnest-product-reviews">
                                    <div class="single-review-process">
                                        <div class="single-review-process-left">
                                            <figure><img src="./assets/images/shop/rev-prof01.png" alt=""></figure>
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
                                            <figure><img src="./assets/images/blog/blog-profile01.png" alt=""></figure>
                                        </div>
                                        <div class="single-review-process-right">
                                            <h4><span>Otto</span> - 01 days ago</h4>
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
    <!-- Product Tab End -->


    <!-- Related Product Start -->
    <section class="petnest-related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-heading text-center">
                        <h5>Best Product</h5>
                        <h2>Related Products</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="petnest-shop-single-product">
                        <div class="petnest-shop-pro-img">
                            <figure><img src="./assets/images/shop/product02.png" alt=""></figure>
                            <div class="add-to-wistlist">
                                <a href="wishlist.html" class="save-for-later active"><span><i
                                            class="flaticon-heart"></i></span></a>
                                <a href="cart.html" class="add-to-cart"><span><i
                                            class="flaticon-shopping-cart"></i></span></a>
                            </div>
                            <div class="view-to-full">
                                <a href="product-details.html"><span><i class="flaticon-view"></i></span></a>
                            </div>
                        </div>
                        <div class="petnest-shop-pro-desc">
                            <div class="petnest-shop-pro-rev">
                                <div class="petnest-shop-pro-star">
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                </div>
                                <span class="review-have">(48)</span>
                            </div>
                            <a href="product-details.html">
                                <h3>Brit Premium</h3>
                            </a>
                            <div class="petnest-shop-pro-price">
                                <span class="previous-price">156.00$</span>
                                <span class="discount-price">130.00$</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="petnest-shop-single-product">
                        <div class="petnest-shop-pro-img">
                            <figure><img src="./assets/images/shop/product03.png" alt=""></figure>
                            <div class="ribbon-new">
                                <span>New</span>
                            </div>
                            <div class="add-to-wistlist">
                                <a href="wishlist.html" class="save-for-later"><span><i
                                            class="flaticon-heart"></i></span></a>
                                <a href="cart.html" class="add-to-cart"><span><i
                                            class="flaticon-shopping-cart"></i></span></a>
                            </div>
                            <div class="view-to-full">
                                <a href="product-details.html"><span><i class="flaticon-view"></i></span></a>
                            </div>
                        </div>
                        <div class="petnest-shop-pro-desc">
                            <div class="petnest-shop-pro-rev">
                                <div class="petnest-shop-pro-star">
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span class="fourth-star"><i class="flaticon-star"></i></span>
                                </div>
                                <span class="review-have">(56)</span>
                            </div>
                            <a href="product-details.html">
                                <h3>Carriers - Pets</h3>
                            </a>
                            <div class="petnest-shop-pro-price">
                                <span class="previous-price">139.00$</span>
                                <span class="discount-price">120.00$</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="petnest-shop-single-product">
                        <div class="petnest-shop-pro-img">
                            <figure><img src="./assets/images/shop/product04.png" alt=""></figure>
                            <div class="add-to-wistlist">
                                <a href="wishlist.html" class="save-for-later"><span><i
                                            class="flaticon-heart"></i></span></a>
                                <a href="cart.html" class="add-to-cart"><span><i
                                            class="flaticon-shopping-cart"></i></span></a>
                            </div>
                            <div class="view-to-full">
                                <a href="product-details.html"><span><i class="flaticon-view"></i></span></a>
                            </div>
                        </div>
                        <div class="petnest-shop-pro-desc">
                            <div class="petnest-shop-pro-rev">
                                <div class="petnest-shop-pro-star">
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                </div>
                                <span class="review-have">(56)</span>
                            </div>
                            <a href="product-details.html">
                                <h3>Drools Wags</h3>
                            </a>
                            <div class="petnest-shop-pro-price">
                                <span class="previous-price">211.00$</span>
                                <span class="discount-price">200.00$</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="petnest-shop-single-product">
                        <div class="petnest-shop-pro-img">
                            <figure><img src="./assets/images/shop/product05.png" alt=""></figure>
                            <div class="ribbon-new">
                                <span>New</span>
                            </div>
                            <div class="add-to-wistlist">
                                <a href="wishlist.html" class="save-for-later active"><span><i
                                            class="flaticon-heart"></i></span></a>
                                <a href="cart.html" class="add-to-cart"><span><i
                                            class="flaticon-shopping-cart"></i></span></a>
                            </div>
                            <div class="view-to-full">
                                <a href="product-details.html"><span><i class="flaticon-view"></i></span></a>
                            </div>
                        </div>
                        <div class="petnest-shop-pro-desc">
                            <div class="petnest-shop-pro-rev">
                                <div class="petnest-shop-pro-star">
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                    <span><i class="flaticon-star"></i></span>
                                </div>
                                <span class="review-have">(56)</span>
                            </div>
                            <a href="product-details.html">
                                <h3>Chicken Potato</h3>
                            </a>
                            <div class="petnest-shop-pro-price">
                                <span class="previous-price">149.00$</span>
                                <span class="discount-price">130.00$</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product End -->

    <!-- Petnest Newsletter Start -->
    <section class="petnest-newsletter petnest-newsletter-shop">
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