@extends('layouts.User-layout')

@section('content')

    <!-- Wishlist Hero Start -->
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
                        <h5>Shop <span>/ Checkout</span></h5>
                        <h1>Shop for Your Furry <br class="d-xl-block d-none">Friend</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/shop/checkout-hero.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Wishlist Hero End -->

    <!-- Billing Details Start -->
    <section class="petnest-billing-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="billing-details-left">
                        <p>Have a coupon? <a href="cart.html">Click here to enter your code.</a></p>
                        <div class="billing-details">
                            <h3>Billing Details</h3>
                            <form action="#">
                                <label for="name">Name*</label>
                                <input type="text" id="name">
                                <div class="multi-field">
                                    <div>
                                        <label for="cName">Company name (optional)</label>
                                        <input type="text" id="cName">
                                    </div>
                                    <div>
                                        <label for="country">Country / Region *</label>
                                        <input type="text" id="country">
                                    </div>
                                </div>
                                <label for="stAddress">Street address *</label>
                                <input type="text" id="stAddress">
                                <div class="multi-field">
                                    <div>
                                        <label for="city">Town / City *</label>
                                        <input type="text" id="city">
                                    </div>
                                    <div>
                                        <label for="zip">ZIP Code *</label>
                                        <input type="text" id="zip">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="additional-info">
                            <h3>Additional Information</h3>
                            <form action="#">
                                <div class="multi-field">
                                    <div>
                                        <label for="phone">Phone *</label>
                                        <input type="number" id="phone">
                                        <label class="form-control">
                                            <input type="checkbox" name="checkbox-checked" checked="">
                                            Create an account?
                                        </label>
                                    </div>
                                    <div>
                                        <label for="email">Email address *</label>
                                        <input type="email" id="email">
                                        <label class="form-control">
                                            <input type="checkbox" name="checkbox-checked">
                                            Ship to a different address?
                                        </label>
                                    </div>
                                </div>
                                <label for="orderNote">Order notes (optional)</label>
                                <textarea id="orderNote"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="billing-details-right">
                        <div class="your-order">
                            <h3>Your Order</h3>
                            <div class="your-order-heading">
                                <div>
                                    <h4>Product</h4>
                                </div>
                                <div>
                                    <h4>Total</h4>
                                </div>
                            </div>
                            <div class="your-product">
                                <div>
                                    <div>
                                        <h4>Pedigree Wags</h4>
                                    </div>
                                    <div><span>130.00$</span></div>
                                </div>
                                <div>
                                    <div>
                                        <h4>Pilchard Jelly</h4>
                                    </div>
                                    <div><span>120.00$</span></div>
                                </div>
                                <div>
                                    <div>
                                        <h4>Cat Food</h4>
                                    </div>
                                    <div><span>110.00$</span></div>
                                </div>
                            </div>
                            <div class="subtotal-page">
                                <div>
                                    <div>
                                        <h3>Subtotal:</h3>
                                    </div>
                                    <div><span>360.00$</span></div>
                                </div>
                            </div>
                            <div class="extra-fee-pay">
                                <div>
                                    <div>
                                        <h3>Extra fee ( tax excl.)</h3>
                                    </div>
                                    <div><span>20.00$</span></div>
                                </div>
                            </div>
                            <div class="total-sum">
                                <div>
                                    <h3>Total</h3>
                                </div>
                                <div><span>380.00$</span></div>
                            </div>
                        </div>
                        <div class="payment-methods">
                            <div>
                                <label class="form-control">
                                    <input type="checkbox" name="checkbox-checked">
                                </label>
                                <h4>Check payments</h4>
                                <p>Please send a check to Store Name, Store Street, Store Town.</p>
                            </div>
                            <div>
                                <label class="form-control">
                                    <input type="checkbox" name="checkbox-checked">
                                </label>
                                <h4>Cash on delivery</h4>
                                <p>Pay with cash upon delivery.</p>
                            </div>
                            <div>
                                <label class="form-control">
                                    <input type="checkbox" name="checkbox-checked">
                                </label>
                                <div>
                                    <h4>PayPal</h4>
                                    <figure><img src="./assets/images/shop/payment-method.png" alt=""></figure>
                                </div>
                                <a href="#" class="w-paypal">What is PayPal</a>
                            </div>
                            <div>
                                <label class="form-control">
                                    <input type="checkbox" name="checkbox-checked">
                                </label>
                                <p>I have read and agree to the website <a href="#">Terms and conditions</a></p>
                            </div>
                            <div class="pay-check"><a href="#" class="btn-add-to-cart btn-checkout-main">Proceed to
                                    Checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Billing Details End -->

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