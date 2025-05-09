@extends('layouts.User-layout')

@section('content')
<style>
    /* Premium Color Scheme */
    :root {
        --primary: #FF5B2E;
        --primary-light: #FFF0ED;
        --primary-dark: #d44927;
        --secondary: #2B2E4A;
        --accent: #E84545;
        --light: #F9F9F9;
        --dark: #1A1A2E;
        --text: #4A4A4A;
        --text-light: #777777;
    }

    /* Elegant Typography */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&family=Poppins:wght@300;400;500;600&display=swap');
    
    body {
        font-family: 'Poppins', sans-serif;
        color: var(--text);
        line-height: 1.7;
    }
    
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        color: var(--secondary);
    }
    
    /* Hero Section */
    .blog-hero {
        background: linear-gradient(135deg, var(--primary-light) 0%, rgba(255,255,255,1) 100%);
        padding: 6rem 0;
        position: relative;
        overflow: hidden;
    }
    
    .blog-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ff5b2e' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        opacity: 0.3;
    }
    
    .hero-title {
        font-size: 3.5rem;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        position: relative;
        display: inline-block;
    }
    
    .hero-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 80px;
        height: 4px;
        background: var(--primary);
    }
    
    /* Blog Content */
    .blog-content {
        padding: 5rem 0;
    }
    
    .article-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 0; /* Remove bottom margin */
    }
    
    .article-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    
    .article-image {
        width: 100%;
        height: 500px;
        object-fit: cover;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .article-body {
        padding: 2.5rem;
    }
    
    .meta-info {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
        font-size: 0.9rem;
        color: var(--text-light);
    }
    
    .meta-info i {
        margin-right: 0.5rem;
        color: var(--primary);
    }
    
    .article-title {
        font-size: 2.2rem;
        margin-bottom: 1.5rem;
        line-height: 1.3;
    }
    
    .article-content {
        font-size: 1.1rem;
        line-height: 1.8;
        color: var(--text);
    }
    
    .article-content p {
        margin-bottom: 1.5rem;
    }
    
    .service-highlight {
        background: var(--primary-light);
        border-left: 4px solid var(--primary);
        padding: 1.5rem;
        border-radius: 0 8px 8px 0;
        margin: 2rem 0;
    }
    
    /* Author Card */
    .author-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        position: sticky;
        top: 2rem;
        margin-left: 2rem;
        height: fit-content;
    }
    
    .author-image {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid white;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        margin: 0 auto 1.5rem;
        display: block;
    }
    
    .author-name {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        text-align: center;
    }
    
    .author-role {
        color: var(--primary);
        font-weight: 500;
        margin-bottom: 1rem;
        display: block;
        text-align: center;
    }
    
    .divider {
        width: 50px;
        height: 3px;
        background: var(--primary);
        margin: 1.5rem auto;
        opacity: 0.3;
    }
    
    .author-bio {
        font-style: italic;
        color: var(--text-light);
        margin-bottom: 1.5rem;
        text-align: center;
    }
    
    /* Button Styling */
    .btn-primary {
        background-color: var(--primary);
        border-color: var(--primary);
    }
    
    .btn-primary:hover {
        background-color: var(--primary-dark);
        border-color: var(--primary-dark);
    }
    
    /* Related Articles */
    .related-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .related-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .related-card img {
        height: 200px;
        object-fit: cover;
    }
    
    .related-card .card-title {
        color: var(--secondary);
        transition: color 0.3s ease;
    }
    
    .related-card:hover .card-title {
        color: var(--primary);
    }
    
    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 2.8rem;
        }
        
        .article-image {
            height: 400px;
        }
        
        .author-card {
            margin-left: 1.5rem;
            padding: 1.5rem;
        }
    }
    
    @media (max-width: 768px) {
        .blog-hero {
            padding: 4rem 0;
        }
        
        .hero-title {
            font-size: 2.2rem;
        }
        
        .article-image {
            height: 350px;
        }
        
        .article-body {
            padding: 1.5rem;
        }
        
        .author-card {
            margin-left: 0;
            margin-top: 2rem;
            position: static;
        }
    }
</style>

<!-- Premium Hero Section -->
<section class="blog-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h5 class="text-uppercase text-danger mb-3" style="letter-spacing: 2px;">Pet Care Blog</h5>
                <h1 class="hero-title">Stay Informed With Our Expert Insights</h1>
                <p class="lead text-muted mb-4">Discover the latest in pet care, health tips, and professional advice from our team of veterinary experts.</p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="{{ asset('assets/images/blog/blogss.png') }}" alt="Happy pets" class="img-fluid rounded-4 shadow-lg">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Premium Blog Content -->
<section class="blog-content" id="article">
    <div class="container">
        <div class="row">
            <!-- Main Content Column -->
            <div class="col-lg-8">
                <article class="article-card">
                    <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/images/default-blog.jpeg') }}" alt="{{ $blog->title }}" class="article-image">
                    
                    <div class="article-body">
                        <div class="meta-info">
                            <span><i class="bi bi-calendar-event"></i> {{ $blog->created_at->format('F j, Y') }}</span>
                            <span class="mx-2">•</span>
                            <span><i class="bi bi-person-circle"></i> By {{ $blog->user->name }}</span>
                            <span class="mx-2">•</span>
                            <span><i class="bi bi-clock-history"></i> {{ round(str_word_count(strip_tags($blog->content))) / 200 }} min read</span>
                        </div>
                        
                        <h2 class="article-title">{{ $blog->title }}</h2>
                        
                        <div class="article-content">
                            {!! $blog->content !!}
                            
                            <div class="service-highlight">
                                <h5 class="text-primary mb-2">{{ $blog->user->employee->service->name ?? 'Our Services' }}</h5>
                                <p class="mb-0">{{ $blog->user->employee->service->long_description ?? 'We provide comprehensive care for your beloved pets with our expert team.' }}</p>
                            </div>
                            
                            {!! $blog->content_other !!}
                        </div>
                    </div>
                </article>
                
                <!-- Related Articles -->
                @if($relatedBlogs->count())
                <div class="mt-5">
                    <h4 class="mb-4">You Might Also Like</h4>
                    <div class="row">
                        @foreach($relatedBlogs as $related)
                        <div class="col-md-6 mb-4">
                            <a href="{{ route('blog.show', $related->id) }}" class="text-decoration-none">
                                <div class="card related-card h-100 border-0 shadow-sm">
                                    <img src="{{ $related->image ? asset('storage/' . $related->image) : asset('assets/images/default-blog.jpeg') }}" 
                                         class="card-img-top" 
                                         alt="{{ $related->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $related->title }}</h5>
                                        <p class="card-text text-muted small">{{ Str::limit(strip_tags($related->content), 100) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            
            <!-- Author Profile Column -->
            <div class="col-lg-4">
                <div class="author-card">
                    <img src="{{ $blog->user->image ? asset('storage/' . $blog->user->image) : asset('storage/defaults/user.png') }}" alt="{{ $blog->user->name }}" class="author-image">
                    <h4 class="author-name">{{ $blog->user->name }}</h4>
                    <span class="author-role">{{ ucfirst($blog->user->role) }} Specialist</span>
                    <div class="divider"></div>
                    <p class="author-bio">{{ $blog->user->employee->service->description ?? 'Certified pet care professional with years of experience.' }}</p>
                    
                    <div class="social-links d-flex justify-content-center gap-3">
                        <a href="#" class="text-primary"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-primary"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-primary"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-primary"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection