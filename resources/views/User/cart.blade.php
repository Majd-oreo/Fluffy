

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
                        <h5>Shop <span>/ Cart</span></h5>
                        <h1>Shop for Your Furry <br class="d-xl-block d-none">Friend</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/shop/cart-hero.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Detail Hero End -->

    <!-- Petnest Cart List Start -->
    <div class="petnest-cart-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-cart-table ">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Discount Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <button type="button">
                                                <img class="trash-bin-00" src="./assets/images/icon/trash-bin.svg"
                                                        alt="">
                                                <img class="trash-bin-01"
                                                        src="./assets/images/icon/trash-bin-hover.svg" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="cart-visual">
                                                <figure><img src="./assets/images/shop/product01.png" alt=""></figure>
                                                Pilchard Jelly
                                            </div>
                                        </td>
                                        <td>149.00$</td>
                                        <td>120.00$</td>
                                        <td>
                                            <div class="pet-food-quantity">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-left-minus btn-number"
                                                            data-type="minus" data-field="">
                                                            <span><i class="flaticon-minus"></i></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="2" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-right-plus btn-number"
                                                            data-type="plus" data-field="">
                                                            <span><i class="flaticon-add"></i></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>120.00$</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button">
                                                <img class="trash-bin-00" src="./assets/images/icon/trash-bin.svg"
                                                        alt="">
                                                <img class="trash-bin-01"
                                                        src="./assets/images/icon/trash-bin-hover.svg" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="cart-visual">
                                                <figure><img src="./assets/images/shop/product02.png" alt=""></figure>
                                                Cat Food
                                            </div>
                                        </td>
                                        <td>130.00$</td>
                                        <td>110.00$</td>
                                        <td>
                                            <div class="pet-food-quantity">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-left-minus btn-number"
                                                            data-type="minus" data-field="">
                                                            <span><i class="flaticon-minus"></i></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="2" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-right-plus btn-number"
                                                            data-type="plus" data-field="">
                                                            <span><i class="flaticon-add"></i></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>110.00$</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button">
                                                <img class="trash-bin-00" src="./assets/images/icon/trash-bin.svg"
                                                        alt="">
                                                <img class="trash-bin-01"
                                                    src="./assets/images/icon/trash-bin-hover.svg" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="cart-visual">
                                                <figure><img src="./assets/images/shop/product13.png" alt=""></figure>
                                                Pedigree Wags
                                            </div>
                                        </td>
                                        <td>145.00$</td>
                                        <td>125.00$</td>
                                        <td>
                                            <div class="pet-food-quantity">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-left-minus btn-number"
                                                            data-type="minus" data-field="">
                                                            <span><i class="flaticon-minus"></i></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="2" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-right-plus btn-number"
                                                            data-type="plus" data-field="">
                                                            <span><i class="flaticon-add"></i></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>125.00$</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button">
                                                <img class="trash-bin-00" src="./assets/images/icon/trash-bin.svg"
                                                        alt="">
                                                <img class="trash-bin-01"
                                                    src="./assets/images/icon/trash-bin-hover.svg" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="cart-visual">
                                                <figure><img src="./assets/images/shop/product06.png" alt=""></figure>
                                                Pedigree Wags
                                            </div>
                                        </td>
                                        <td>150.00$</td>
                                        <td>140.00$</td>
                                        <td>
                                            <div class="pet-food-quantity">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-left-minus btn-number"
                                                            data-type="minus" data-field="">
                                                            <span><i class="flaticon-minus"></i></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="2" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-right-plus btn-number"
                                                            data-type="plus" data-field="">
                                                            <span><i class="flaticon-add"></i></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>140.00$</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button">
                                                <img class="trash-bin-00" src="./assets/images/icon/trash-bin.svg"
                                                        alt="">
                                                <img class="trash-bin-01"
                                                    src="./assets/images/icon/trash-bin-hover.svg" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="cart-visual">
                                                <figure><img src="./assets/images/shop/product03.png" alt=""></figure>
                                                Carriers - Pets
                                            </div>
                                        </td>
                                        <td>139.00$</td>
                                        <td>120.00$</td>
                                        <td>
                                            <div class="pet-food-quantity">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-left-minus btn-number"
                                                            data-type="minus" data-field="">
                                                            <span><i class="flaticon-minus"></i></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="2" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-right-plus btn-number"
                                                            data-type="plus" data-field="">
                                                            <span><i class="flaticon-add"></i></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>120.00$</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="continue-shop">
                            <a href="shop.html" class="btn-add-to-cart btn-continue">Continue To shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Petnest Cart List End -->

    <!-- Cart Total Start -->
    <section class="cart-totals">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cart-total-wrap">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="cart-total-left">
                                    <h2>Coupon</h2>
                                    <p>Enter your coupon code if you have one</p>
                                    <form action="#">
                                        <input type="text" placeholder="Coupon code">
                                        <a href="#" class="btn-add-to-cart btn-coupon">Apply Coupon</a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1 col-md-6">
                                <div class="cart-total-right">
                                    <h3>Cart Totals</h3>
                                    <div class="cart-subtotal">
                                        <div class="subtotal">
                                            <div>
                                                <h4>Subtotal:</h4>
                                            </div>
                                            <div><span>260.00$</span></div>
                                        </div>
                                        <div class="extra-fee">
                                            <div>
                                                <h4>Extra fee <span>( tax excl.)</span></h4>
                                            </div>
                                            <div><span>20.00$</span></div>
                                        </div>
                                        <div class="cart-main-balance">
                                            <div>
                                                <h4>Total :</h4>
                                            </div>
                                            <div><span>190.00$</span></div>
                                        </div>
                                    </div>
                                    <a href="checkout.html" class="btn-add-to-cart btn-checkout">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Total End -->

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