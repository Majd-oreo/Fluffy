@extends('layouts.User-layout')

@section('content')
<style>
    .petnest-blog-single h1 {
        font-size: 3rem;
        font-weight: bold;
        color: #222;
        margin-bottom: 1.5rem;
    }

    .blog-meta {
        font-size: 0.95rem;
        color: #777;
    }

    .blog-meta strong {
        color: #2bcc91;
    }

    .blog-image img {
        max-height: 450px; 
        width: 40%;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 10px;
    }

    .blog-content {
        color: #444;
        font-size: 1.1rem;
        line-height: 1.9;
        white-space: pre-line;
        margin-top: 2rem;
    }

    .btn-outline-secondary {
        transition: all 0.3s ease;
        border-radius: 8px;
    }

    .btn-outline-secondary:hover {
        background-color: #2bcc91;
        color: white;
        border-color: #2bcc91;
    }

</style>

<section class="petnest-blog-single py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Blog Title -->
              

                <!-- Blog Image -->
                <div class="blog-image text-center mb-3">
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                </div>

                <!-- Blog Meta -->
                <div class="blog-meta text-center mb-5">
                    <span>By <strong style="color: #FF5B2E;">{{ $blog->user->name }}</strong></span> |
                    <span>{{ $blog->created_at->format('F j, Y') }}</span> |
                    <span class="badge" style="background-color:#FF5B2E">{{ $blog->user->employee->service->name ?? 'General' }}</span>
                </div>
                <div class="text-center mb-4">
                    <h5>{{ $blog->title }}</h5>
                </div>
                <!-- Blog Content -->
                <div class="blog-content">
                    {!! nl2br(e($blog->content)) !!}
                </div>

                <!-- Back Button -->
                <div class="mt-5 text-center">
                    <a href="{{ route('home') }}#blog" class="btn btn-outline-secondary">← Back to Blog Stories</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
