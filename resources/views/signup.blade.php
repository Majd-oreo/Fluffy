@extends('layouts.User-layout')

@section('content')
    <!-- Sign Up Hero Start -->
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
                    <div class="about-petnest-left">
                        <h5>Sign Up</h5>
                        <h1>Join the Pet Care <br class="d-xl-block d-none">Community</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/signup/signup-hero.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign Up Hero End -->

    <section class="petnest-login-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="petnest-login-wrapper">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 d-md-block d-none">
                            <!-- Carousel code here -->
                        </div>
                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="petnest-login-right">
                                <h5>SIGN UP</h5>
                                <h3>Create Account</h3>
                                <form id="signupForm" action="{{ 'signup' }}" method="post">
                                    @csrf
                                    <div class="name-field">
                                        <div class="name-field-left">
                                            <label for="fName">Full Name</label>
                                            <input type="text" id="fName" name="name" placeholder="Full Name">
                                            <span id="nameError" class="error-message"></span>
                                        </div>
                                    </div>
                                    <label for="email">Email address</label>
                                    <div class="email-field">
                                        <input type="email" name="email" id="email" placeholder="youremail@gmail.com">
                                        <span id="emailError" class="error-message"></span>
                                    </div>
                                    <label for="password">Password</label>
                                    <div class="password-field-new">
                                        <input type="password" id="password" name="password">
                                        <span id="passwordError" class="error-message"></span>
                                    </div>
                                    <label for="password">Confirm Password</label>
                                    <div class="password-field-confirm" name="confirm">
                                        <input type="password" id="confirmPassword">
                                        <span id="confirmPasswordError" class="error-message"></span>
                                    </div>
                                    <label for="password">Address</label>
                                    <div class="address-field-new">
                                        <input type="text" id="address" name="address">
                                        <span id="addressError" class="error-message"></span>
                                    </div>
                                    <label for="email">Phone Number</label>
                                    <div class="email-field">
                                        <input type="number" name="phone" id="phone" placeholder="07........">
                                        <span id="phoneError" class="error-message"></span>
                                    </div>
                                    <input type="submit" value="Sign Up">
                                </form>
                                <p>Have an account? <a href="login.html">Sign In</a></p>
                                <span class="login-or-divider">or</span>
                                <a href="#" class="continue-with-google"> <figure><img src="./assets/images/icon/google.svg" alt=""></figure> Continue with google</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Create Account End -->


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


   @endsection
   <script>
   document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent default form submission
    let isValid = true;

    // Full Name validation (Must contain two words)
    const fullName = document.getElementById('fName').value;
    const nameError = document.getElementById('nameError');
    if (!/^[a-zA-Z]+\s[a-zA-Z]+$/.test(fullName)) {
        nameError.textContent = "Full name must contain first and last name.";
        isValid = false;
    } else {
        nameError.textContent = "";
    }

    // Email validation (must end with .pk)
    const email = document.getElementById('email').value;
    const emailError = document.getElementById('emailError');
    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email) || !email.endsWith('.pk')) {
        emailError.textContent = "Please enter a valid email with .pk.";
        isValid = false;
    } else {
        emailError.textContent = "";
    }

    // Password validation (at least 8 characters, 1 uppercase, 1 lowercase, 1 symbol)
    const password = document.getElementById('password').value;
    const passwordError = document.getElementById('passwordError');
    if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}/.test(password)) {
        passwordError.textContent = "Password must be at least 8 characters, contain uppercase, lowercase, and a symbol.";
        isValid = false;
    } else {
        passwordError.textContent = "";
    }

    // Confirm Password validation (must match password)
    const confirmPassword = document.getElementById('confirmPassword').value;
    const confirmPasswordError = document.getElementById('confirmPasswordError');
    if (confirmPassword !== password) {
        confirmPasswordError.textContent = "Passwords do not match.";
        isValid = false;
    } else {
        confirmPasswordError.textContent = "";
    }

    // Address validation (must not be empty)
    const address = document.getElementById('address').value;
    const addressError = document.getElementById('addressError');
    if (address.trim() === "") {
        addressError.textContent = "Address is required.";
        isValid = false;
    } else {
        addressError.textContent = "";
    }

    // Phone validation (Jordanian phone number)
    const phone = document.getElementById('phone').value;
    const phoneError = document.getElementById('phoneError');
    if (!/^07\d{8}$/.test(phone)) {
        phoneError.textContent = "Phone number must be a valid Jordanian number starting with 07.";
        isValid = false;
    } else {
        phoneError.textContent = "";
    }

    // Submit the form if all validations are passed
    if (isValid) {
        this.submit();  // Submit the form if valid
    }
});
</script>