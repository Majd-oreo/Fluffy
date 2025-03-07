@extends('layouts.User-layout')

@section('content')
    <!-- Header End -->

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
                        <h5>Shop <span>/ Wish List</span></h5>
                        <h1>Shop for Your Furry <br class="d-xl-block d-none">Friend</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/shop/wishlist-hero.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Wishlist Hero End -->

    <!-- Petnest Cart List Start -->
    <div class="petnest-cart-list petnest-wish-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-cart-table petnest-wishlist-table">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Stock Status</th>
                                        <th scope="col">Add To Cart</th>
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
                                                Pedigree Wags
                                            </div>
                                        </td>
                                        <td>149.00$</td>
                                        <td class="in-stock">In Stock</td>
                                        <td><a href="cart.html" class="basktet"><span><i
                                                        class="flaticon-shopping-cart"></i></span></a></td>
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
                                        <td>140.00$</td>
                                        <td class="out-stock">Out Of Stock</td>
                                        <td><a href="cart.html" class="basktet"><span><i
                                                        class="flaticon-shopping-cart"></i></span></a></td>
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
                                                Pilchard Jelly
                                            </div>
                                        </td>
                                        <td>100.00$</td>
                                        <td class="in-stock">In Stock</td>
                                        <td><a href="cart.html" class="basktet"><span><i
                                                        class="flaticon-shopping-cart"></i></span></a></td>
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
                                                <figure><img src="./assets/images/shop/product01.png" alt=""></figure>
                                                Pedigree Wags
                                            </div>
                                        </td>
                                        <td>200.00$</td>
                                        <td class="out-stock">Out Of Stock</td>
                                        <td><a href="cart.html" class="basktet"><span><i
                                                        class="flaticon-shopping-cart"></i></span></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Petnest Cart List End -->


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