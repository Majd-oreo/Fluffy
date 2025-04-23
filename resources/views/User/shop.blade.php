@extends('layouts.User-layout')

@section('content')
<style>
    
</style>
<!-- Shop Hero Start -->
<section class="petnest-about-us petnest-hero-shop">
    <div class="animation-bubble">
        <figure><img src="./assets/images/icon/bubble-1.svg" alt=""></figure>
        <figure><img src="./assets/images/icon/bubble-2.svg" alt=""></figure>
        <figure><img src="./assets/images/icon/bubble-3.svg" alt=""></figure>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="about-petnest-left">
                    <h5>Shop</h5>
                    <h1>Shop for Your Furry <br class="d-lg-block d-none">Friend</h1>
                    <p>We believe that every pet deserves love and care, and we are dedicated to providing just that</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="about-petnest-right-wrapper">
                    <div class="about-petnest-right">
                        <figure><img src="./assets/images/shop/shop-hero.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Hero End -->

<!-- Shop Product Start -->
<section class="petnest-shop">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 col-md-4">
                <div class="petnest-shop-left">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('shop.index') }}">
                        <div class="petnest-shop-search mb-4">
                            <div class="input-group">
                                <input type="search" name="search" class="form-control" placeholder="Search products..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary"><i class="flaticon-search-1"></i></button>
                            </div>
                        </div>

                        <!-- Category Dropdown -->
                        <div class="filter-card mb-4">
                            <div class="filter-section mb-4">
                                <h5 class="filter-title">Category</h5>
                                <select name="category" class="form-control" onchange="this.form.submit()">
                                    <option value="">All Categories</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Sort by Price -->
                            <div class="petnest-shop-sort mb-4">
                                <select name="sort_price" class="form-control" onchange="this.form.submit()">
                                    <option value="">Sort by Price</option>
                                    <option value="asc" {{ request('sort_price') == 'asc' ? 'selected' : '' }}>Low to High</option>
                                    <option value="desc" {{ request('sort_price') == 'desc' ? 'selected' : '' }}>High to Low</option>
                                </select>
                            </div>

                            <!-- Reset Filters -->
                            <div class="filter-buttons">
                                <a href="{{ route('shop.index') }}" class="btn btn-outline-secondary btn-block">
                                    <i class="flaticon-close me-2"></i> Reset Filters
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Main Product Grid -->
            <div class="col-lg-9 col-md-8">
                <div class="petnest-shop-right">
                    <div class="petnest-shop-top-bar mb-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-5 col-md-5">
                                <div class="petnest-shop-top-sh-result">
                                    <h4>Showing {{ $products->count() }} of {{ $products->total() }} results</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="petnest-shop-all-product">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="petnest-shop-single-product">
                                        <div class="petnest-shop-pro-img">
                                        <figure>
    <a href="{{ route('shop.show', $product->id) }}">
        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}">
    </a>
</figure>

                                           
                                            <div class="view-to-full">
                                                <a href="{{ route('shop.show', $product->id) }}"><i class="flaticon-view"></i></a>
                                            </div>
                                        </div>
                                        <div class="petnest-shop-pro-desc">
                                            <div class="petnest-shop-pro-rev">
                                                <div class="petnest-shop-pro-star">
                                                    @php
                                                        $averageRating = round($product->average_rating);
                                                    @endphp
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $averageRating)
                                                            <span><i class="flaticon-star" style="color: #FFD700;"></i></span>
                                                        @else
                                                            <span><i class="flaticon-star" style="color: #ddd;"></i></span>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span class="review-have">({{ $product->reviews_count ?? 0 }})</span>
                                            </div>
                                            <h3>
    <a href="{{ route('shop.show', $product->id) }}">{{ $product->name }}</a>
</h3>
                                            <p class="text-muted mb-1">Category: {{ $product->category->name }}</p>
                                            <div class="petnest-shop-pro-price">
                                                <span class="previous-price">${{ number_format($product->price, 2) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="petnest-blog-pagination petnest-shop-pagination text-center">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            @if ($products->onFirstPage())
                <li class="page-item disabled"><span class="page-link">«</span></li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $products->previousPageUrl() }}" rel="prev">«</a>
                </li>
            @endif

            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                @if ($page == $products->currentPage())
                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            @if ($products->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next">»</a>
                </li>
            @else
                <li class="page-item disabled"><span class="page-link">»</span></li>
            @endif
        </ul>
    </nav>
</div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Product End -->

<!-- Newsletter -->

<!-- Newsletter End -->

@endsection
