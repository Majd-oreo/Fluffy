@extends('layouts.User-layout')

@section('content')

    <!-- Blog Hero Start -->
    <section class="petnest-about-us petnest-blog-about">
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
                        <h5>Blog Stories</h5>
                        <h1>Stay Informed,Read <br class="d-xl-block d-none">Our Pet Care Blog</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/blog/blog-hero01.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Hero End -->

    <!-- Blog Standard Start -->
    <section class="blog-standard">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="blog-standard-left">
                        <div class="single-blog-standard single-blog-single-post">
                            <figure><img src="./assets/images/blog/blog-standard01.png" alt=""></figure>
                            <div class="blog-info">
                                <div class="blog-post-time"><span>Jan 22, 2023</span></div>
                                <div class="blog-liner"></div>
                                <div class="blog-post-by"><span>by</span> Rebeca robi</div>
                                <div class="blog-post-comments"><i class="flaticon-speech-bubble"></i><span>04
                                        Comments</span></div>
                            </div>
                            <h3>Why it is worth having your dog groomed professionally ?</h3>
                            <p>Having your dog groomed professionally can bring numerous benefits to both you and your
                                furry friend. Here are just a few reasons why it is worth investing in professional
                                grooming services.</p>
                            <p>Professional grooming includes a thorough bathing and cleaning process, which helps
                                remove dirt, fleas, and other unwanted parasites that can cause skin irritation and
                                other health problems. A groomer can also identify any skin conditions or issues that
                                may need veterinary attention.</p>
                            <div class="quote">
                                <h3>Dictumst quisque sagittis purus sit amet volutpat consequat mauris nunc. Quis
                                    eleifend quam adipiscing.</h3>
                                <h4>Leslie Alexander</h4>
                            </div>
                            <h3>A tips, for Better Appearance ?</h3>
                            <p>A professional groomer will ensure that your dog's coat is trimmed and styled to its best
                                advantage. A well-groomed dog looks more attractive, feels more confident, and is
                                generally more comfortable</p>
                            <div class="care-option">
                                <ul>
                                    <li>Bonding Time</li>
                                    <li>Ease of Care</li>
                                </ul>
                            </div>
                            <p>Spending time at the grooming salon can be a bonding experience for you and your dog. You
                                get to spend quality time together, and your dog gets to socialize with other dogs and
                                people</p>
                            <div class="pet-blog-shots">
                                <div class="row">
                                    <div class="col-md-4">
                                        <figure><img src="./assets/images/blog/blog-post-shorts01.png" alt=""></figure>
                                    </div>
                                    <div class="col-md-8">
                                        <figure><img src="./assets/images/blog/blog-post-shorts02.png" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                            <h3>professional grooming services provide numerous benefits</h3>
                            <p>Regular grooming makes it easier for you to keep your dog clean and healthy. A
                                professional groomer can teach you how to properly care for your dog's coat, skin, and
                                nails between grooming sessions, so you can maintain your dog's appearance and health.
                                Regular grooming can reduce shedding, making it easier for you to keep your home clean.
                                This is especially important for people with allergies or those who have trouble keeping
                                up with the amount of fur that their dog sheds.</p>
                            <div class="blog-share-option blog-single-share-option">
                                <div class="blog-share-option-left-tags">
                                    <p>Tags : Dogs, Cat, <span>Pet</span></p>
                                </div>
                                <div class="blog-share-option-right">
                                    <a href="blog-single.html">Share <span><i class="flaticon-share"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="blog-standard-right">
                        <div class="blog-search-bar">
                            <input type="search" placeholder="Search">
                            <button type="submit"><span><i class="flaticon-search-1"></i></span></button>
                        </div>
                        <div class="blog-author">
                            <figure><img src="./assets/images/blog/autor.png" alt=""></figure>
                            <h3>Rebeca robi</h3>
                            <p>I'm Rebeca robi, and this is my creative space. I think that Services doesn’t have to
                                cost a fortune. I hope you enjoy and come back often.</p>
                        </div>
                        <div class="blog-category">
                            <h3>Category</h3>
                            <ul>
                                <li><a href="blog-grid.html">Medical Care <span>21</span></a></li>
                                <li><a href="blog-grid.html">Pet Walking <span>25</span></a></li>
                                <li><a href="blog-grid.html">Pet Bording <span>48</span></a></li>
                                <li><a href="blog-grid.html">Education Pet <span>39</span></a></li>
                                <li><a href="blog-grid.html">Pet Grooming <span>40</span></a></li>
                                <li><a href="blog-grid.html">Pet Daycare <span>40</span></a></li>
                            </ul>
                        </div>
                        <div class="blog-recent-post">
                            <h3>Recent Update</h3>
                            <a href="blog-single.html">
                                <div class="blog-recent-post-left">
                                    <figure><img src="./assets/images/blog/recent-post01.png" alt=""></figure>
                                </div>
                                <div class="blog-recent-post-right">
                                    <h4>Vivamus Ipsum Felis Elementum Sit Amet Augue</h4>
                                    <span>28 January, 2023</span>
                                </div>
                            </a>
                            <a href="blog-single.html">
                                <div class="blog-recent-post-left">
                                    <figure><img src="./assets/images/blog/recent-post02.png" alt=""></figure>
                                </div>
                                <div class="blog-recent-post-right">
                                    <h4>Vivamus Ipsum Felis Elementum Sit Amet Augue</h4>
                                    <span>28 January, 2023</span>
                                </div>
                            </a>
                            <a href="blog-single.html">
                                <div class="blog-recent-post-left">
                                    <figure><img src="./assets/images/blog/recent-post03.png" alt=""></figure>
                                </div>
                                <div class="blog-recent-post-right">
                                    <h4>Vivamus Ipsum Felis Elementum Sit Amet Augue</h4>
                                    <span>28 January, 2023</span>
                                </div>
                            </a>
                            <a href="blog-single.html">
                                <div class="blog-recent-post-left">
                                    <figure><img src="./assets/images/blog/recent-post04.png" alt=""></figure>
                                </div>
                                <div class="blog-recent-post-right">
                                    <h4>Vivamus Ipsum Felis Elementum Sit Amet Augue</h4>
                                    <span>28 January, 2023</span>
                                </div>
                            </a>
                        </div>
                        <div class="blog-tags">
                            <h3>Popular Tags</h3>
                            <div class="blog-tags-list">
                                <a href="blog-standard.html">Grooming</a>
                                <a href="blog-standard.html">Walking</a>
                                <a href="blog-standard.html">Daycare</a>
                                <a href="blog-standard.html">Boarding</a>
                                <a href="blog-standard.html">Vaccine</a>
                                <a href="blog-standard.html">Services</a>
                                <a href="blog-standard.html">Pet Health</a>
                                <a href="blog-standard.html">Medical</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comments Start -->
                <div class="col-xl-9 col-lg-10">
                    <div class="row">
                        <div class="petnest-blog-comments">
                            <h3>04 Comments</h3>
                            <div class="petnest-blog-s-comment">
                                <div class="row">
                                    <div class="col-md-2 col-3">
                                        <div class="petnest-blog-s-left">
                                            <figure><img src="./assets/images/blog/blog-profile01.png" alt=""></figure>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-9">
                                        <div class="petnest-blog-s-right">
                                            <h4><strong>Johan Martin</strong> - February 21, 2023</h4>
                                            <p>Korem Ipsn gravida nibh vel velit auctor aliquet.Aenean sollicitudin,
                                                lorem quis bibendum auci elit consequat ipsutis sem nibh.</p>
                                            <a href="#">Replay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="petnest-blog-s-comment petnest-blog-right-replay">
                                <div class="row">
                                    <div class="col-md-2 col-3">
                                        <div class="petnest-blog-s-left">
                                            <figure><img src="./assets/images/blog/blog-profile02.png" alt=""></figure>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-9">
                                        <div class="petnest-blog-s-right">
                                            <h4><strong>Johan Martin</strong> - February 21, 2023</h4>
                                            <p>Korem Ipsn gravida nibh vel velit auctor aliquet.Aenean sollicitudin,
                                                lorem quis bibendum auci elit consequat ipsutis sem nibh.</p>
                                            <a href="#">Replay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="petnest-blog-s-comment">
                                <div class="row">
                                    <div class="col-md-2 col-3">
                                        <div class="petnest-blog-s-left">
                                            <figure><img src="./assets/images/blog/blog-profile01.png" alt=""></figure>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-9">
                                        <div class="petnest-blog-s-right">
                                            <h4><strong>Johan Martin</strong> - February 28, 2023</h4>
                                            <p>Korem Ipsn gravida nibh vel velit auctor aliquet.Aenean sollicitudin,
                                                lorem quis bibendum auci elit consequat ipsutis sem nibh.</p>
                                            <a href="#">Replay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comments End -->
                <!-- Blog Comment Form Start -->
                <div class="col-lg-8">
                    <div class="blog-comments-petnest">
                        <h3>Leave A Comments</h3>
                        <form action="#">
                            <label for="name">Your full name*</label>
                            <input type="text" id="name">
                            <div class="comment-flex">
                                <div>
                                    <label for="name">Your full name*</label>
                                    <input type="text">
                                </div>
                                <div>
                                    <label for="site">Your website</label>
                                    <input type="text" id="site">
                                </div>
                            </div>
                            <label for="message">Write your comment</label>
                            <textarea id="message"></textarea>
                            <input type="submit" value="Post Comments">
                        </form>
                    </div>
                </div>
                <!-- Blog Comment Form End -->
            </div>
        </div>
    </section>
    <!-- Blog Standard End -->

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