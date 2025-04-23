<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/petnest-logo.svg') }}" type="image/x-icon">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Chicle&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- FlatIcon -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Magnafic CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnafic.css') }}">
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/xzoom.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Mobile Menu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!-- Style Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Site Title -->
    <title>Fluffy Friends</title>
    
</head>
<style>
    .single-review-process-star span {
    cursor: pointer;
    color: #ccc; /* Default gray for unfilled stars */
}

.single-review-process-star span.active {
    color: gold; /* Gold for filled stars */
}



input[type="datetime-local"] {
    font-size: 1.2rem; 
    padding: 10px; 
    width: 100%;
}

.form-row {
    display: flex;
    justify-content: space-between; 
    gap: 20px;
}

.form-group {
    width: 48%; 
}

.form-group input {
    width: 100%; 
}

.form-group {
    margin-bottom: 15px;
}
.btn.btn-orange-primary {
    background-color: var(--orange-primary); 
    color: white;

}
.form-group select {
    font-size: 1.2rem;
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.form-group select:focus {
    border-color: var(--orange-primary);
}
.flaticon-star-2 {
    color: #ccc; 
}

.flaticon-star-2.filled {
    color: gold; 
}
/* WhatsApp button style to match profile button */
.whatsapp-btn {
        background-color: #6c757d; /* Bootstrap's secondary color */
        color: white;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        transition: all 0.3s ease;
    }

    .whatsapp-btn:hover {
        background-color: #5a6268; /* Darker shade for hover */
        color: white;
    }

    .whatsapp-btn i {
        font-size: 1.2rem;
    }
    /* Filter Section Styles */
.filter-card {
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
    padding: 20px;
    margin-bottom: 20px;
}

.filter-title {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
    padding-bottom: 8px;
    border-bottom: 1px solid #eee;
}

.category-list {
    max-height: 200px;
    overflow-y: auto;
    padding-right: 10px;
}

.category-list .form-check {
    margin-bottom: 10px;
}

.category-list .form-check-label {
    font-size: 14px;
    color: #555;
    cursor: pointer;
}

.price-range-inputs .form-control {
    padding: 8px 12px;
    font-size: 14px;
}

.filter-buttons .btn {
    padding: 10px;
    font-size: 14px;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.filter-buttons .btn i {
    vertical-align: middle;
}

/* Search Box */
.petnest-shop-search .input-group {
    border-radius: 6px;
    overflow: hidden;
}

.petnest-shop-search .form-control {
    border-right: 0;
}

.petnest-shop-search .btn {
    background-color: #4e54c8;
    border-color: #4e54c8;
}

/* Responsive Adjustments */
@media (max-width: 767px) {
    .filter-card {
        padding: 15px;
    }
    
    .category-list {
        max-height: 150px;
    }
}
</style>

<body class="home-bg">
    <!-- Petnest Search Bar Start -->
    <div class="petnest-serach-ui">
        <div class="petnest-search-close">
            <figure><img src="{{ asset('assets/images/icon/close.svg') }}" alt=""></figure>
        </div>
        <div class="petnest-search-wrapper">
            <div class="petnest-search-wrap">
                <h3>Search Anything About Pet</h3>
                <form action="#">
                    <input type="search" placeholder="Type Here...">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Petnest Search Bar End -->

    <!-- Header Start -->
    <header id="header-sticky" class="petnest-header">
        <div class="container position-relative">
            <div class="row d-flex align-items-center">
                <div class="col-lg-2">
                    <!-- Logo Start -->
                    <div class="petnest-logo">
                        <figure><a href="{{ route('home') }}"><img src="{{ asset('assets/images/fluffy-logo.png') }}" alt="PetNest"></a></figure>
                    </div>
                     <!-- Logo End -->
                </div>
                <div class="col-lg-6">
                    <div class="petnest-header-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ route('home') }}">Home</a>
                                  
                                </li>
                                <li><a href="{{ route('user.about-us') }}">About Us</li>
                                <li><a href="{{ route('user.services') }}">Services</a>
                                   
                                </li>
                                <li><a  href="{{ route('shop.index') }}">Shop</a></li>
                                                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-4">
    <div class="petnest-header-user-info">
    
    <div>
    <a href="https://wa.me/962770047312" target="_blank" class="btn  whatsapp-btn  " style="background-color: #FFEFEA;"type="button">
        <i class="fa-brands fa-whatsapp" style="color: black;"></i>
    </a>
</div>



                        <!-- <div class="search-top">
                            <button class="search-trigger"><span><i class="flaticon-search"></i></span></button>
                        </div> -->
                        <div class="user-top dropdown">
                            
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="flaticon-user"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                @auth
                                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('userappointment') }}">Appointments</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('pets.index') }}">Pets</a>
                                    </li>
                                    

                                    
                                @else
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                @endauth
                            </ul>
                        </div>
                        <div class="basket-top">
                            <button><span class="on-basket"><i class="flaticon-bag"></i></span></button>
                            <div class="petnest-basket">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="petnest-basket-inner">
                                            <div class="row d-flex align-items-center">
                                                <div class="product-in-basket">
                                                    <div class="row">
                                                        <div class="col-md-3 col-3">
                                                            <div class="petnest-basket-inner-left">
                                                                <figure><img src="{{ asset('assets/images/home/product01.png') }}" alt=""></figure>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9 col-9">
                                                            <div class="petnest-basket-inner-right">
                                                                <h4>Pilchard Prawn Jelly</h4>
                                                                <div class="petnest-total-ammount-home">
                                                                    <div class="qty-home">
                                                                        <span>Qty: <strong>1</strong></span>
                                                                    </div>
                                                                    <div class="total-price-qty">
                                                                        <span>120.00$</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="divider-qty-home"></div>
                                                <div class="col-md-3 col-3">
                                                    <div class="petnest-total-title">
                                                        <h5>Total</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <div class="petnest-total-sum">
                                                        <span>120.00$</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="basket-short-btn-wrap">
                                                        <div class="basket-short-btn">
                                                            <a href="cart.html" class="btn-primay btn-view-cart">View
                                                                Cart</a>
                                                        </div>
                                                        <div class="basket-short-btn">
                                                            <a href="checkout.html"
                                                                class="btn-primay btn-view-chekout">Check Out</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-us-top d-md-block d-none">
                            <a  href="{{ route('contact') }}" class="btn-primay">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>
