@extends('layouts.User-layout')

@section('content')

<!-- Our Team Hero Start -->

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
                    <h5>Team Member</h5>
                    <h1>Meet Our Dedicated <br class="d-xl-block d-none">Team Member</h1>
                    <p>We believe that every pet deserves love and care, and we are dedicated to providing just that</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="about-petnest-right-wrapper">
                    <div class="about-petnest-right">
                        <figure><img src="./assets/images/team.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Team Hero End -->

<!-- Meet Petnest Team Start -->

<section class="meet-petnest-team meet-petnest-team-page">
    <div class="petnest-team-animation petnest-team-animation-snd">
        <div>
            <figure><img src="./assets/images/icon/leash03.svg" alt=""></figure>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="petnest-heading petnest-heading-team text-center">
                    <h2>Meet Our Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="slider-team-page owl-carousel">
                    @foreach($employees as $employee)
                    <div class="our-team-page-slider">
                        <div class="petnest-member-single">
                            <figure>                        <img src="{{ asset('storage/' . ($employee->image ?: 'Default.png')) }}" alt="">
                            </figure>
                            <h5>{{ $employee->employee->job_title }}</h5>
                            <div class="divider"></div>
                            <h3>{{ $employee->name }}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Meet Petnest Team End -->

@endsection
