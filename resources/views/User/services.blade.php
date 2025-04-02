@extends('layouts.User-layout')

@section('content')
    <!-- Service Hero Start -->
    <section class="petnest-about-us">
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
                        <h5>Services</h5>
                        <h1>Your pet's happiness <br class="d-xl-block d-none"> is our top priority</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/services/service1.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Hero End -->

    <!-- Petnest Services Start -->
    <section class="petnest-services petnest-services-page">
        <div class="petnest-services-buble">
            <!-- Bubble Animation Start -->
            <figure><img src="./assets/images/icon/bubble-1.svg" alt=""></figure>
            <figure><img src="./assets/images/icon/bubble-2.svg" alt=""></figure>
            <!-- Bubble Animation End -->
        </div>
        <div class="petnest-services-animation">
            <!-- Pet Toys Start -->
            <div class="petnest-bounce-animate">
                <figure><img src="./assets/images/icon/pet-toy01.svg" alt=""></figure>
            </div>
            <div class="petnest-bounce-animate">
                <figure><img src="./assets/images/icon/pet-toy02.svg" alt=""></figure>
            </div>
            <!-- Pet Toys End -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="petnest-heading petnest-heading-services">
                        <h5>Our Services</h5>
                        <h2>Complete Pet <br class="d-lg-block d-md-block d-none"> Wellness Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
                    <div class="petnest-services-grid">
                        <div class="row">
                        @foreach($services as $service)
    <div class="col-lg-4 col-md-4">
        <a  href="{{ route('appointment.show', $service->id) }}" class="petnest-services-wrapper" >
            <span><i class="{{ $service->icon }}"></i></span>
            <h3>{{ $service->name }}</h3>
        </a>
    </div>
@endforeach

{{-- Add this to check if services exist --}}
@if($services->isEmpty())
    <p>No services available.</p>
@endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Petnest Services End -->
@endsection
