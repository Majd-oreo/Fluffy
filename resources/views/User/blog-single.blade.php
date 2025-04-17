@extends('layouts.User-layout')

@section('content')

<!-- Blog Hero Section -->
<section class="petnest-about-us petnest-blog-about position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: -1;">
        <img src="{{ asset('assets/images/icon/bubble-bg.svg') }}" alt="Background" class="w-100 h-100 object-fit-cover opacity-25">
    </div>

    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div>
                    <h5>Pet Care Blog</h5>
                    <h1 class="display-4 fw-bold mb-3">Stay Informed<br> With Our Blog</h1>
                    <p class="text-muted">Because every pet deserves love, attention, and well-informed care.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/images/blog/blogss.png') }}" alt="Blog image" class="img-fluid rounded-4 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Blog Content Section -->
<section class="blog-standard py-5 bg-light">
    <div class="container">
        <div class="row gy-4">
            <!-- Blog Content -->
            <div class="col-lg-8">
                <div class="bg-white rounded-4 shadow p-4">
                    <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('storage/defaults/blog-default.png') }}" alt="{{ $blog->title }}" class="img-fluid rounded mb-4" style="height:500px;" width="100%">

                    <div class="d-flex align-items-center gap-3 mb-3 text-muted small">
                        <span><i class="bi bi-calendar-event"></i> {{ $blog->created_at->format('F j, Y') }}</span>
                        <span class="vr"></span>
                        <span><strong>By</strong><i class="bi bi-person-circle"></i> {{ $blog->user->name }}</span>
                    </div>

                    <h2 class="fw-bold mb-3">{{ $blog->title }}</h2>
                    <p class="lh-lg">{!! nl2br(e($blog->content)) !!}</p>
                    <p class="lh-lg">{!! nl2br(e($blog->content_other)) !!}</p>


                    <hr class="my-4">

                    <div class="bg-danger bg-opacity-10 rounded-3 p-3">
                        <h5 class="fw-bold  mb-1" style="color: #FF5B2E;">{{ $blog->user->employee->service->name ?? 'General Service' }}</h5>
                        <p class="mb-0">{{ $blog->user->employee->service->long_description ?? 'No description provided.' }}</p>

                    </div>
                </div>
            </div>

            <!-- Author Card -->
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow p-4 text-center">
                    <figure class="mb-3">
                        <img src="{{ $blog->user->image ? asset('storage/' . $blog->user->image) : asset('storage/defaults/user.png') }}" alt="User Image" class="img-fluid rounded-circle shadow" style="width: 140px; height: 140px; object-fit: cover;">
                    </figure>
                    <h4 class="fw-bold">{{ $blog->user->name }}</h4>
                    <p class="text-muted mb-2">{{ ucfirst($blog->user->role) }}</p>
                    <div class="divider mx-auto my-2" style="width: 40px; height: 3px; background-color: #FF5B2E;"></div>
                    <p class="small text-muted fst-italic"><p class="mb-0">{{ $blog->user->employee->service->description ?? 'No description provided.' }}</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
