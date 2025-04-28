@extends('layouts.User-layout')

@section('content')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    window.onload = function() {
        emailjs.init("d9_DxVu3e_9NxnNPa"); 

        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            let name = document.getElementById('name').value.trim();
            let email = document.getElementById('mail').value.trim();
            let message = document.getElementById('message').value.trim();
            
            if (name === "" || email === "" || message === "") {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'All fields are required!'
                });
                return;
            }
            
            emailjs.sendForm('service_ap8mtxr', 'template_gdbl4dz', this)
                .then(() => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: 'Your message has been sent successfully!'
                    });
                    document.getElementById('contact-form').reset();
                }, (error) => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed...',
                        text: 'Failed to send message. Please try again later.'
                    });
                    console.error('FAILED...', error);
                });
        });
    };
</script>
<!-- Contact US Hero Start -->
<section class="petnest-about-us petnest-about-contact">
    <div class="animation-bubble">
        <figure><img src="./assets/images/icon/bubble-1.svg" alt=""></figure>
        <figure><img src="./assets/images/icon/bubble-2.svg" alt=""></figure>
        <figure><img src="./assets/images/icon/bubble-3.svg" alt=""></figure>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="about-petnest-left">
                    <h5>Contact Us</h5>
                    <h1>Contact Us for Your <br class="d-xl-block d-none"> Pet Care Needs</h1>
                    <p>We believe that every pet deserves love and care, and we are dedicated to providing just that</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="about-petnest-right-wrapper">
                    <div class="about-petnest-right">
                        <figure><img src="./assets/images/contact/contact.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US Hero End -->

<!-- Petnest Contact Form Start -->
<section class="petnest-contact-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="petnest-contact-wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="petnest-contact-left">
                                <form id="contact-form">
                                <label for="name">Your Name</label>
<input type="text" id="name" name="name" placeholder="Your Name" required>

<label for="mail">Mail</label>
<input type="email" id="mail" name="email" placeholder="youremail@gmail.com" required>

<label for="message">Message</label>
<textarea id="message" name="message" placeholder="Message" required></textarea>


                                    <input type="submit" value="Send Message">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="petnest-contact-right">
                                <h3>Get a Quote</h3>
                                <p>Fill up the form and our team will get back to you within 24 hours.</p>
                                <div class="list-info-contact">
                                    <a href="tel:+012348658910"><span><i class="flaticon-call"></i></span> 0770047312</a>
                                </div>
                                <div class="list-info-contact">
                                    <a href="mailto:majdaalkaseeh@gmail.com">
                                        <figure><img src="./assets/images/icon/mail-icon.svg" alt=""></figure>
                                        majdalkaseeh@gmail.com
                                    </a>
                                </div>
                                <div class="list-info-contact">
                                    <a href="#">
                                        <figure><img src="./assets/images/icon/location.svg" alt=""></figure>
                                        Jordan/Alsalt/EskanAlmuhandesen
                                    </a>
                                </div>
                                <div class="contact-page-social">
                                    <ul>
                                        <li><a href="#"><span><i class="flaticon-facebook-circular-logo"></i></span></a></li>
                                        <li><a href="#"><span><i class="flaticon-social-media"></i></span></a></li>
                                        <li><a href="#"><span><i class="flaticon-twitter"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Petnest Contact Form End -->

<!-- Petnest Contact Map Start -->
<div class="petnest-contact-map">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="petnest-contact-map-wrapper">
                <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3387.028148987351!2d35.6939088!3d32.0123833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151cbd005a25ff41%3A0x14897dc66dd85669!2sFluffy%20Friends!5e0!3m2!1sen!2sjo!4v1713348901993!5m2!1sen!2sjo" 
    width="100%" height="445" style="border:0;" allowfullscreen="" loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
</iframe>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Petnest Contact Map End -->

<!-- Petnest Newsletter Start -->
<!-- <section class="petnest-newsletter petnest-newsletter-contact">
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
</section> -->
<!-- Petnest Newsletter End -->

@endsection
