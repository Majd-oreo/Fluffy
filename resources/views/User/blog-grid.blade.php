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
                        <h1>Stay Informed, Read <br class="d-xl-block d-none">Our Pet Care Blog</h1>
                        <p>We believe that every pet deserves love and care, and we are dedicated to providing just that.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/blog/blo.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Hero End -->

    <!-- Blog Grid Start -->
    <section class="blog-grid">
        <div class="container">
            <div class="row">

                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="{{ route('blog.show', $blog->id) }}" class="single-petnest-blog single-petnest-blog-page">
                            <div class="petnest-blog-short-top">
                                <figure>
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                </figure>
                                <!-- Category Start -->
                                <span class="category-blog">{{ $blog->user->employee->service->name ?? 'General' }}</span>
                                <!-- Category End -->
                            </div>
                            <div class="petnest-blog-short-description">
                                <h5>{{ $blog->created_at->format('d M Y') }}</h5>
                                <h3>{{ $blog->title }}</h3>
                                <h4>By <span>{{ $blog->user->name }}</span></h4>
                            </div>
                        </a>
                    </div>
                @endforeach

                <div class="col-lg-12">
                    <!-- Pagination Start -->
                    <div class="petnest-blog-pagination">
                        {{ $blogs->links('pagination::bootstrap-4') }}
                    </div>
                    <!-- Pagination End -->
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Grid End -->

   

@endsection
