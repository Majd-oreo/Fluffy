@extends('layouts.User-layout')

@section('content')

    <!-- Shop Hero Start -->
    <section class="petnest-about-us petnest-hero-shop">
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
                        <h5>Shop</h5>
                        <h1>Shop for Your Furry <br class="d-lg-block d-none">Friend</h1>
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
    <!-- Shop Hero End -->

    <!-- Shop Product Start -->
    <section class="petnest-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="petnest-shop-left">
                        <div class="petnest-shop-search">
                            <input type="search" placeholder="Search">
                            <button type="submit"><i class="flaticon-search-1"></i></button>
                        </div>
                        <h3>Price Range</h3>
                        <div class="petnest-shop-pricerange">
                            <div class="slider">
                                <div class="progress"></div>
                            </div>
                            <div class="range-input">
                                <input type="range" class="range-min" min="0" max="460" value="0" step="1">
                                <input type="range" class="range-max" min="0" max="460" value="350" step="1">
                            </div>
                            <div class="price-input">
                                <div class="field">
                                    $
                                    <input type="number" class="input-min" value="0">
                                </div>
                                <div class="field">
                                    $
                                    <input type="number" class="input-max" value="350">
                                </div>
                            </div>
                        </div>
                        <h3>Category</h3>
                        <div class="petnest-product-cheking">
                            <label class="form-control">
                                Pet Food
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Canned Food
                                <input type="checkbox" name="checkbox-checked" checked />
                            </label>
                            <label class="form-control">
                                Pet Toy
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Vet Authorized Diets
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Pet Supplements
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Accessories for pet
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                        </div>
                        <h3>Brand</h3>
                        <div class="petnest-product-cheking">
                            <label class="form-control">
                                fancy Feast
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Pet Dreams
                                <input type="checkbox" name="checkbox-checked" checked />
                            </label>
                            <label class="form-control">
                                Purina Pro Plan
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Gentle Giants
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Stella & Chewy’s
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                        </div>
                        <h3>Health Consideration</h3>
                        <div class="petnest-product-cheking">
                            <label class="form-control">
                                Brain Development
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Allergies
                                <input type="checkbox" name="checkbox-checked" checked />
                            </label>
                            <label class="form-control">
                                Bladder
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Bone Development
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Dehydration
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                        </div>
                        <h3>Flavor</h3>
                        <div class="petnest-product-cheking">
                            <label class="form-control">
                                Beef
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Chicken
                                <input type="checkbox" name="checkbox-checked" checked />
                            </label>
                            <label class="form-control">
                                Fish
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Duck
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                            <label class="form-control">
                                Others
                                <input type="checkbox" name="checkbox-checked" />
                            </label>
                        </div>
                        <h3>Top Sale</h3>
                        <div class="petnest-sells-product-left">
                            <a href="product-details.html" class="petnest-sells-product-single">
                                <figure><img src="./assets/images/shop/product-sm01.png" alt=""></figure>
                                <div>
                                    <h4>Pet Brush</h4>
                                    <span>20.00$</span>
                                </div>
                            </a>
                            <a href="product-details.html" class="petnest-sells-product-single">
                                <figure><img src="./assets/images/shop/product-sm02.png" alt=""></figure>
                                <div>
                                    <h4>Pet Brush</h4>
                                    <span>40.00$</span>
                                </div>
                            </a>
                            <a href="product-details.html" class="petnest-sells-product-single">
                                <figure><img src="./assets/images/shop/product-sm03.png" alt=""></figure>
                                <div>
                                    <h4>Pet Food</h4>
                                    <span>100.00$</span>
                                </div>
                            </a>
                            <a href="product-details.html" class="petnest-sells-product-single">
                                <figure><img src="./assets/images/shop/product-sm04.png" alt=""></figure>
                                <div>
                                    <h4>Pet lesh</h4>
                                    <span>70.00$</span>
                                </div>
                            </a>
                        </div>
                        <h3>Popular Tags</h3>
                        <div class="petnest-sells-product-tags">
                            <a href="#">Lifestyle</a>
                            <a href="#">Life</a>
                            <a href="#">Daycare</a>
                            <a href="#">Ads</a>
                            <a href="#">Business</a>
                            <a href="#">Fashion</a>
                            <a href="#">Advertisement</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="petnest-shop-right">
                        <div class="petnest-shop-top-bar">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-5 col-md-5">
                                    <div class="petnest-shop-top-sh-result">
                                        <h4>Showing 01-10 of 16 result</h4>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7">
                                    <div class="petnest-shop-top-sorting">
                                        <h4>Short By</h4>
                                        <select class="form-select">
                                            <option selected>Default</option>
                                            <option value="1">Grid</option>
                                            <option value="2">Row</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="petnest-shop-all-product">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                            <figure><img src="./assets/images/shop/product01.png" alt=""></figure>
                                            <div class="add-to-wistlist">
                                                <a href="wishlist.html" class="save-for-later"><span><i
                                                            class="flaticon-heart"></i></span></a>
                                                <a href="cart.html" class="add-to-cart"><span><i
                                                            class="flaticon-shopping-cart"></i></span></a>
                                            </div>
                                            <div class="view-to-full">
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <h3>Pilchard Prawn Jelly</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">130.00$</span>
                                                <span class="discount-price">120.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
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
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                <div class="col-lg-4 col-md-6">
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
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                <div class="col-lg-4 col-md-6">
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
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                <div class="col-lg-4 col-md-6">
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
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <h3>Beyond Chicken Potato</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">149.00$</span>
                                                <span class="discount-price">130.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                            <figure><img src="./assets/images/shop/product06.png" alt=""></figure>
                                            <div class="add-to-wistlist">
                                                <a href="wishlist.html" class="save-for-later"><span><i
                                                            class="flaticon-heart"></i></span></a>
                                                <a href="cart.html" class="add-to-cart"><span><i
                                                            class="flaticon-shopping-cart"></i></span></a>
                                            </div>
                                            <div class="view-to-full">
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <h3>Pedigree Wags</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">139.00$</span>
                                                <span class="discount-price">120.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                            <figure><img src="./assets/images/shop/product07.png" alt=""></figure>
                                            <div class="ribbon-sell">
                                                <span>Sell</span>
                                            </div>
                                            <div class="add-to-wistlist">
                                                <a href="wishlist.html" class="save-for-later"><span><i
                                                            class="flaticon-heart"></i></span></a>
                                                <a href="cart.html" class="add-to-cart"><span><i
                                                            class="flaticon-shopping-cart"></i></span></a>
                                            </div>
                                            <div class="view-to-full">
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <h3>Ferplast Cat Journey Bag</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">99.00$</span>
                                                <span class="discount-price">79.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                            <figure><img src="./assets/images/shop/product08.png" alt=""></figure>
                                            <div class="add-to-wistlist">
                                                <a href="wishlist.html" class="save-for-later"><span><i
                                                            class="flaticon-heart"></i></span></a>
                                                <a href="cart.html" class="add-to-cart"><span><i
                                                            class="flaticon-shopping-cart"></i></span></a>
                                            </div>
                                            <div class="view-to-full">
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <h3>Jungle Excellence Of Nature</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">119.00$</span>
                                                <span class="discount-price">100.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                            <figure><img src="./assets/images/shop/product09.png" alt=""></figure>
                                            <div class="add-to-wistlist">
                                                <a href="wishlist.html" class="save-for-later"><span><i
                                                            class="flaticon-heart"></i></span></a>
                                                <a href="cart.html" class="add-to-cart"><span><i
                                                            class="flaticon-shopping-cart"></i></span></a>
                                            </div>
                                            <div class="view-to-full">
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <h3>Weruva Pates Slide Fortuni</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">139.00$</span>
                                                <span class="discount-price">120.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                            <figure><img src="./assets/images/shop/product10.png" alt=""></figure>
                                            <div class="add-to-wistlist">
                                                <a href="wishlist.html" class="save-for-later"><span><i
                                                            class="flaticon-heart"></i></span></a>
                                                <a href="cart.html" class="add-to-cart"><span><i
                                                            class="flaticon-shopping-cart"></i></span></a>
                                            </div>
                                            <div class="view-to-full">
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <h3>Adjustable soft collar with bell</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">149.00$</span>
                                                <span class="discount-price">120.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                            <figure><img src="./assets/images/shop/product11.png" alt=""></figure>
                                            <div class="ribbon-sell">
                                                <span>Sell</span>
                                            </div>
                                            <div class="add-to-wistlist">
                                                <a href="wishlist.html" class="save-for-later"><span><i
                                                            class="flaticon-heart"></i></span></a>
                                                <a href="cart.html" class="add-to-cart"><span><i
                                                            class="flaticon-shopping-cart"></i></span></a>
                                            </div>
                                            <div class="view-to-full">
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <h3>cat dog collar with bell</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">129.00$</span>
                                                <span class="discount-price">120.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                            <figure><img src="./assets/images/shop/product12.png" alt=""></figure>
                                            <div class="add-to-wistlist">
                                                <a href="wishlist.html" class="save-for-later"><span><i
                                                            class="flaticon-heart"></i></span></a>
                                                <a href="cart.html" class="add-to-cart"><span><i
                                                            class="flaticon-shopping-cart"></i></span></a>
                                            </div>
                                            <div class="view-to-full">
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <h3>cat dog collar with bell</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">169.00$</span>
                                                <span class="discount-price">140.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                            <figure><img src="./assets/images/shop/product13.png" alt=""></figure>
                                            <div class="add-to-wistlist">
                                                <a href="wishlist.html" class="save-for-later active"><span><i
                                                            class="flaticon-heart"></i></span></a>
                                                <a href="cart.html" class="add-to-cart active"><span><i
                                                            class="flaticon-shopping-cart"></i></span></a>
                                            </div>
                                            <div class="view-to-full">
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <h3>Pedigree Wags</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">139.00$</span>
                                                <span class="discount-price">120.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                            <figure><img src="./assets/images/shop/product14.png" alt=""></figure>
                                            <div class="add-to-wistlist">
                                                <a href="wishlist.html" class="save-for-later"><span><i
                                                            class="flaticon-heart"></i></span></a>
                                                <a href="cart.html" class="add-to-cart"><span><i
                                                            class="flaticon-shopping-cart"></i></span></a>
                                            </div>
                                            <div class="view-to-full">
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <span class="review-have">(36)</span>
                                            </div>
                                            <a href="product-details.html">
                                                <h3>Midwest Homes</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">149.00$</span>
                                                <span class="discount-price">130.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                            <figure><img src="./assets/images/shop/product15.png" alt=""></figure>
                                            <div class="ribbon-new">
                                                <span>Sell</span>
                                            </div>
                                            <div class="add-to-wistlist">
                                                <a href="wishlist.html" class="save-for-later"><span><i
                                                            class="flaticon-heart"></i></span></a>
                                                <a href="cart.html" class="add-to-cart"><span><i
                                                            class="flaticon-shopping-cart"></i></span></a>
                                            </div>
                                            <div class="view-to-full">
                                                <a href="product-details.html"><span><i
                                                            class="flaticon-view"></i></span></a>
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
                                                <span class="review-have">(60)</span>
                                            </div>
                                            <a href="product-details.html">
                                                <h3>Sardine salmon jelly</h3>
                                            </a>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">149.00$</span>
                                                <span class="discount-price">130.00$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- Pagination Start -->
                                    <div class="petnest-blog-pagination petnest-shop-pagination">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#"><span><i
                                                                class="flaticon-left-chevron"></i></span> Prev</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next <span><i
                                                                class="flaticon-left-chevron"></i></span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Pagination End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Product End -->

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


    <!-- Follow Our Instagram Start -->
    @endsection