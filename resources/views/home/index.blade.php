@extends('layouts.app')
@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endpush

@section('content')

    {{-- Slider area- --}}
    <div class="slider-area bg-gray-8 home-hero-area">
        <div class="container">
            <div class="hero-slider-active-2 nav-style-1 nav-style-1-modify-2 nav-style-1-blue">
                {{-- SLIDER-1 --}}
                <div class="single-hero-slider single-hero-slider-hm9 single-animation-wrap home-hero-slide">
                    <div class="row slider-animated-1 align-items-center">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="hero-slider-content-6 slider-content-hm9">
                                <h5 class="animated">Featured Solutions</h5>
                                <h1 class="animated">INNOVATION MADE <br>SIMPLE</h1>
                                <p class="animated">Discover innovative technology designed to simplify everyday experiences
                                    at home and work.</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-4 btn-1-blue btn-1-font-10"
                                        href="{{ url('/products') }}">Explore Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="hm9-hero-slider-img">
                                <img class="animated" src="{{ asset('assets/images/slider/home-slider-1.png') }}"
                                    alt="Featured technology products">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- SLIDER-2 --}}
                <div class="single-hero-slider single-hero-slider-hm9 single-animation-wrap home-hero-slide">
                    <div class="row slider-animated-1 align-items-center">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="hero-slider-content-6 slider-content-hm9">
                                <h5 class="animated">Technology Spotlight
                                </h5>
                                <h1 class="animated">BUILT FOR
                                    MODERN
                                    <br>LIVING
                                </h1>
                                <p class="animated">Explore solutions created to support convenience, connectivity, and
                                    everyday efficiency.
                                </p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-4 btn-1-blue btn-1-font-10"
                                        href="{{ url('/products/desktops') }}">Explore Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="hm9-hero-slider-img">
                                <img class="animated" src="{{ asset('assets/images/slider/home-slider-2.png') }}"
                                    alt="Desktop technology solutions">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- SLIDER-3 --}}

                <div class="single-hero-slider single-hero-slider-hm9 single-animation-wrap home-hero-slide">
                    <div class="row slider-animated-1 align-items-center">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="hero-slider-content-6 slider-content-hm9">
                                <h5 class="animated">Technology Essentials
                                </h5>
                                <h1 class="animated">RELIABLE
                                    SOLUTIONS

                                    <br>AHEAD
                                </h1>
                                <p class="animated">Find technology products that combine functionality, reliability, and
                                    practical everyday use.
                                </p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-4 btn-1-blue btn-1-font-10"
                                        href="{{ url('/products/thin-client') }}">Explore Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="hm9-hero-slider-img">
                                <img class="animated" src="{{ asset('assets/images/slider/home-slider-3.png') }}"
                                    alt="Reliable workplace technology solutions">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Service Area --}}
    <div class="service-area">
        <div class="container">
            <div class="service-wrap service-wrap-hm9">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap mb-30">
                            <div class="service-icon service-icon-blue">
                                <img class="animated" src="{{ asset('assets/images/icon-img/service-icon-1.png') }}"
                                    alt="">
                            </div>
                            <div class="service-content">
                                <h3>Product Information</h3>
                                <span>Explore product details.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap mb-30">
                            <div class="service-icon service-icon-blue">
                                <img class="animated" src="{{ asset('assets/images/icon-img/service-icon-2.png') }}"
                                    alt="">
                            </div>
                            <div class="service-content">
                                <h3>Easy Navigation</h3>
                                <span>Browse with ease.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap mb-30">
                            <div class="service-icon service-icon-blue">
                                <img class="animated" src="{{ asset('assets/images/icon-img/service-icon-3.png') }}"
                                    alt="">
                            </div>
                            <div class="service-content">
                                <h3>Multiple Categories
                                </h3>
                                <span>Browse technology solutions.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap mb-30">
                            <div class="service-icon service-icon-blue">
                                <img class="animated" src="{{ asset('assets/images/icon-img/service-icon-4.png') }}"
                                    alt="">
                            </div>
                            <div class="service-content">
                                <h3>Simple Enquiries</h3>
                                <span>Reach out anytime.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Product Categories --}}
    <section class="product-categories-area home-category-section">
        <div class="container">
            <div class="home-section-heading home-category-heading">
                <div>
                    <span class="home-section-eyebrow">Explore Our Range</span>
                    <h2>Discover Our <span>Product Categories</span></h2>
                    <p>Reliable devices and solutions designed for home, office, and everyday productivity.</p>
                </div>
                <a class="home-outline-link" href="{{ url('/products') }}">
                    View Products <i class="icon-arrow-right"></i>
                </a>
            </div>

            <div class="home-category-grid">
                @foreach ($homeCategories as $category)
                    @php
                        $categoryUrl = url('/products/' . $category->url);
                    @endphp
                    <article class="home-category-card">
                        <div class="home-category-media">
                            <div class="product-img">
                                <a href="{{ $categoryUrl }}">
                                    <img src="{{ $category->category_image_url }}" alt="{{ $category->name }}">
                                </a>
                            </div>
                        </div>
                        <div class="home-category-content">
                            <h3><a href="{{ $categoryUrl }}">{{ $category->name }}</a></h3>
                            <p>{{ $category->description }}</p>
                            <a class="home-category-link" href="{{ $categoryUrl }}">
                                Explore {{ $category->name }} <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Banner Area-1 --}}
    <section class="banner-area home-promo-section home-promo-section--first">
        <div class="container">
            <div class="row home-promo-grid">
                <div class="col-lg-6">
                    <article class="banner-wrap home-promo-card">
                        <div class="banner-img banner-img-zoom">
                            <a href="{{ url('/products/printer') }}">
                                <img src="{{ asset('assets/images/banner/b1-area1.png') }}" alt="Printer solutions">
                            </a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2>
                                <span class="home-promo-title-line"><b>Made</b> For</span>
                                <span class="home-promo-title-line home-promo-title-accent">Better Printing</span>
                            </h2>
                            <p>Solutions designed for clear output and smooth daily workflows.</p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="{{ url('/products/printer') }}">Explore Products <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6">
                    <article class="banner-wrap home-promo-card">
                        <div class="banner-img banner-img-zoom">
                            <a href="{{ url('/products/desktops') }}">
                                <img src="{{ asset('assets/images/banner/b2-area1.png') }}" alt="Desktop solutions">
                            </a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2>
                                <span class="home-promo-title-line"><b>Designed</b></span>
                                <span class="home-promo-title-line">To Do <strong>More</strong></span>
                            </h2>
                            <p>Dependable desktop solutions built for productivity, multitasking, and modern workplace demands.</p>
                            <div class="btn-style-4 ">
                                <a class="hover-red" href="{{ url('/products/desktops') }}">Explore Products <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    {{-- Product Area--dynamics --}}
    <section class="product-area home-dynamic-products-area">
        <div class="container">
            <div class="home-products-heading text-center">
                <span class="home-section-eyebrow">Selected For Your Needs</span>
                <h2>Shop Products by Your Needs</h2>
                <p>Explore printers, scanners, desktops, and thin clients selected for home and office use.</p>
            </div>
            <div class="tab-style-9 nav home-product-tabs">
                {{-- @dd($productTabs) --}}
                @foreach ($productTabs as $tabKey => $tab)
                    @php
                        $tabLabel = strtolower($tab['label']);
                        $tabIcon = str_contains($tabLabel, 'printer')
                            ? 'icon-printer'
                            : (str_contains($tabLabel, 'thin')
                                ? 'icon-screen-desktop'
                                : (str_contains($tabLabel, 'desktop')
                                    ? 'icon-screen-desktop'
                                    : (str_contains($tabLabel, 'scanner') ? 'icon-docs' : 'icon-star')));
                    @endphp
                    <a class="{{ $loop->first ? 'active' : '' }}" href="#{{ $tabKey }}" data-bs-toggle="tab">
                        <i class="{{ $tabIcon }}"></i>
                        {{ $tab['label'] }}
                    </a>
                @endforeach
            </div>
            <div class="tab-content jump">
                @foreach ($productTabs as $tabKey => $tab)
                    <div id="{{ $tabKey }}" class="tab-pane {{ $loop->first ? 'active' : '' }}">
                        <div class="home-needs-product-slider">
                            @forelse ($tab['products'] as $product)
                                @php
                                    $homeProductType = \Illuminate\Support\Str::slug($product->parent_cat ?: 'printer');
                                    $homeProductType = $homeProductType === 'thin-client' ? 'thin-client' : $homeProductType;
                                    $homeProductUrl = url("products/{$homeProductType}/details", $product->slug);
                                    $homeProductImages = collect($product->imagePaths());

                                    $homeProductImage = $homeProductImages->first();
                                @endphp
                                <div class="product-plr-1">
                                    <div class="single-product-wrap home-product-card">
                                        <div class="product-img product-img-zoom mb-20">
                                            <a href="{{ $homeProductUrl }}">
                                                @if ($homeProductImage)
                                                    <img class="home-product-gallery-img"
                                                        src="{{ asset($homeProductImage) }}"
                                                        alt="{{ $product->name }}"
                                                        data-default-src="{{ asset($homeProductImage) }}"
                                                        data-gallery='@json($homeProductImages->map(fn ($image) => asset($image))->values())'>
                                                @else
                                                    <span class="home-product-image-missing">{{ $product->name }}</span>
                                                @endif
                                            </a>

                                        </div>
                                        <div class="product-content-wrap-3">
                                            <div class="home-product-category">
                                                {{ $product->parent_cat }}
                                            </div>
                                            <h3 class="mrg-none">
                                                <a href="{{ $homeProductUrl }}">{{ $product->name }}</a>
                                            </h3>
                                            <div class="home-price-stock-row">
                                                <div class="product-price-4">
                                                    <span
                                                        class="new-price">${{ number_format($product->price, 2) }}</span>
                                                </div>
                                                <div class="home-card-stock-wrap">
                                                    <span class="home-stock-badge">
                                                        {{ $product->stock_status === 'available' ? 'In Stock' : 'Out of Stock' }}
                                                    </span>
                                                </div>
                                            </div>
                                            <a class="home-product-details-link" href="{{ $homeProductUrl }}">
                                                <i class="icon-arrow-right-circle"></i>
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="product-plr-1">
                                    <p>No products found.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    {{-- Banner Area-2 --}}
    <section class="banner-area home-promo-section home-promo-section--second">
        <div class="container">
            <div class="row home-promo-grid">
                <div class="col-lg-6">
                    <article class="banner-wrap home-promo-card">
                        <div class="banner-img banner-img-zoom">
                            <a href="{{ url('/products/thin-client') }}">
                                <img src="{{ asset('assets/images/banner/b1-area2.png') }}" alt="Thin client solutions">
                            </a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2>
                                <span class="home-promo-title-line"><b>Small</b> Footprint,</span>
                                <span class="home-promo-title-line">Big <strong>Potential</strong></span>
                            </h2>
                            <p>Designed for streamlined access and workplace efficiency.</p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="{{ url('/products/thin-client') }}">Explore Products<i
                                        class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6">
                    <article class="banner-wrap home-promo-card">
                        <div class="banner-img banner-img-zoom">
                            <a href="{{ url('/products/scanner') }}">
                                <img src="{{ asset('assets/images/banner/b2-area2.png') }}" alt="Scanner solutions">
                            </a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2>
                                <span class="home-promo-title-line"><b>Every</b> <strong>Detail</strong></span>
                                <span class="home-promo-title-line">Preserved</span>
                            </h2>
                            <p>Built to simplify document digitization and organization.</p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="{{ url('/products/scanner') }}">Explore Products
                                    <i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    {{-- Suggested products --}}
    <section class="product-area home-product-showcase home-suggested-products-area">
        <div class="container">
            <div class="home-showcase-heading text-center">
                <span class="home-showcase-icon"><i class="icon-star"></i></span>
                <h2>Suggested <span>For You</span></h2>
                <p>Handpicked products selected around everyday home and workplace needs.</p>
            </div>

            <div class="home-showcase-grid home-suggested-product-slider">

                @foreach ($suggestedProducts as $product)
                    @php
                        $homeProductType = \Illuminate\Support\Str::slug($product->parent_cat ?: 'printer');
                        $homeProductType = $homeProductType === 'thin-client' ? 'thin-client' : $homeProductType;
                        $homeProductUrl = url("products/{$homeProductType}/details", $product->slug);
                        $homeProductImages = collect($product->imagePaths());

                        $homeProductImage = $homeProductImages->first();
                    @endphp
                    <div>
                        <article class="single-product-wrap home-product-card home-showcase-card">
                            <div class="product-img product-img-zoom">
                                <a href="{{ $homeProductUrl }}">
                                    @if ($homeProductImage)
                                        <img class="home-product-gallery-img"
                                            src="{{ asset($homeProductImage) }}"
                                            alt="{{ $product->name }}"
                                            data-default-src="{{ asset($homeProductImage) }}"
                                            data-gallery='@json($homeProductImages->map(fn ($image) => asset($image))->values())'>
                                    @else
                                        <span class="home-product-image-missing">{{ $product->name }}</span>
                                    @endif
                                </a>

                            </div>

                            <div class="product-content-wrap-3">
                                <div class="home-product-category">
                                    {{ $product->parent_cat }}
                                </div>
                                <h3 class="mrg-none">
                                    <a class="blue" href="{{ $homeProductUrl }}">
                                        {{ $product->name }}
                                    </a>
                                </h3>

                                <div class="home-price-stock-row">
                                <div class="product-price-4">
                                    <span>${{ number_format($product->price, 2) }}</span>
                                </div>

                                <div class="home-card-stock-wrap">
                                    <span class="home-stock-badge">
                                        {{ $product->stock_status === 'available' ? 'In Stock' : 'Out of Stock' }}
                                    </span>
                                </div>
                                </div>
                                <a class="home-product-details-link" href="{{ $homeProductUrl }}">
                                    <i class="icon-arrow-right-circle"></i>
                                    View Details
                                </a>
                            </div>

                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none">
                                    <a class="blue" href="{{ $homeProductUrl }}">
                                        {{ $product->name }}
                                    </a>
                                </h3>


                                <div class="product-price-4">
                                    <span>${{ number_format($product->price, 2) }}</span>
                                </div>

                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">View Details</button>
                                </div>
                            </div>

                        </article>
                    </div>
                @endforeach

            </div>
            <div class="more-product-btn text-center">
                <a href="{{ url('/products') }}">View More Products <i class="icon-arrow-right"></i></a>
            </div>
        </div>
    </section>

    {{-- Additional products --}}
    {{-- <section class="product-area home-product-showcase home-more-products-area">
        <div class="container">
            <div class="home-showcase-heading text-center">
                <span class="home-showcase-icon"><i class="icon-handbag"></i></span>
                <h2>More <span>Products</span></h2>
                <p>Explore additional devices for home and office productivity.</p>
            </div>

            <div class="home-showcase-grid">
                @foreach ($suggestedProducts->slice(5, 5) as $product)
                    @php
                        $homeProductType = \Illuminate\Support\Str::slug($product->parent_cat ?: 'printer');
                        $homeProductType = $homeProductType === 'thin-client' ? 'thin-client' : $homeProductType;
                        $homeProductUrl = url("products/{$homeProductType}/details", $product->slug);
                        $homeProductImages = collect($product->imagePaths());
                        $homeProductImage = $homeProductImages->first();
                    @endphp

                    <article class="single-product-wrap home-product-card home-showcase-card">
                        <div class="product-img product-img-zoom">
                            <a href="{{ $homeProductUrl }}">
                                @if ($homeProductImage)
                                    <img class="home-product-gallery-img"
                                        src="{{ asset($homeProductImage) }}"
                                        alt="{{ $product->name }}"
                                        data-default-src="{{ asset($homeProductImage) }}"
                                        data-gallery='@json($homeProductImages->map(fn ($image) => asset($image))->values())'>
                                @else
                                    <span class="home-product-image-missing">{{ $product->name }}</span>
                                @endif
                            </a>
                        </div>

                        <div class="product-content-wrap-3">
                            <div class="home-product-category">{{ $product->parent_cat }}</div>
                            <h3>
                                <a href="{{ $homeProductUrl }}">{{ $product->name }}</a>
                            </h3>
                            <div class="home-price-stock-row">
                                <div class="product-price-4">
                                    <span>${{ number_format($product->price, 2) }}</span>
                                </div>
                                <div class="home-card-stock-wrap">
                                    <span class="home-stock-badge">
                                        {{ $product->stock_status === 'available' ? 'In Stock' : 'Out of Stock' }}
                                    </span>
                                </div>
                            </div>
                            <a class="home-product-details-link" href="{{ $homeProductUrl }}">
                                <i class="icon-arrow-right-circle"></i>
                                View Details
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="more-product-btn text-center">
                <a href="{{ url('/products') }}">View More Products <i class="icon-arrow-right"></i></a>
            </div>
        </div>
    </section> --}}

    {{-- Deal Area --}}
    <div class="deal-area pt-150 pb-130 bg-img" style="background-image:url(assets/images/bg/deal-area-bg.png);">
        <div class="container">
            <div class="deal-content-1">
                <span>FEATURED COLLECTION</span>
                <h2><span>Ideas Deserve</span> <br>The Right Tools</h2>
                <p>Explore technology solutions designed to support the way people create, connect, and work.
                </p>

                <div class="deal-btn">
                    <a href="{{ url('/contact-us') }}">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Insights and Blogs Area--dynamic --}}
    <section class="blog-area home-insights-section">
        <div class="container">
            <div class="home-insights-heading text-center">
                <span class="home-insights-heading__line"></span>
                <h2>Ideas, Insights & <span>Blogs</span></h2>
                <p>Explore perspectives, product highlights, and technology discussions shaping modern workplaces.</p>
            </div>
            <div class="home-blog-section">
                <div class="home-blog-grid home-blog-card-slider">
                    @foreach ($blogPosts as $blogPost)
                        @php
                            $homeBlogImages = collect($blogPost->imagePaths());

                            $homeBlogImage = $homeBlogImages->first();
                            $homeBlogDate = $blogPost->inserted_at
                                ? \Illuminate\Support\Carbon::parse($blogPost->inserted_at)->format('M d, Y')
                                : null;
                        @endphp
                        <div>
                            <article class="blog-wrap home-blog-card js-blog-gallery-card">
                                <div class="blog-img">
                                    <a href="{{ url('/blogs', $blogPost->slug) }}">
                                        @if ($homeBlogImage)
                                            <img class="js-blog-gallery-img"
                                                src="{{ asset($homeBlogImage) }}"
                                                alt="{{ $blogPost->heading }}"
                                                data-default-src="{{ asset($homeBlogImage) }}"
                                                data-gallery='@json($homeBlogImages->map(fn ($image) => asset($image))->values())'>
                                        @else
                                            <span class="home-blog-image-missing">{{ $blogPost->heading }}</span>
                                        @endif
                                    </a>
                                </div>

                                <div class="blog-content">
                                    <div class="home-blog-kicker">
                                        <span>Technology</span>
                                        @if ($homeBlogDate)
                                            <i></i>
                                            <time>{{ $homeBlogDate }}</time>
                                        @endif
                                    </div>

                                    <h3>
                                        <a href="{{ url('/blogs', $blogPost->slug) }}">
                                            {{ $blogPost->heading }}
                                        </a>
                                    </h3>

                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($blogPost->content), 120, '...') }}</p>

                                    <a href="{{ url('/blogs', $blogPost->slug) }}" class="home-blog-read">
                                        Read More <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>
                <div class="more-blogs-btn text-center">
                    <a href="{{ url('/blogs') }}">Explore More Blogs <i class="icon-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Banner Slider --}}
    <section class="home-footer-banner-section" aria-label="Featured solutions">
        <div class="home-footer-banner-slider">
            @foreach ($footerBanners as $banner)
                <div class="home-footer-banner-slide">
                    <a href="{{ $banner['url'] }}" aria-label="{{ $banner['alt'] }}">
                        <img src="{{ $banner['image'] }}" alt="{{ $banner['alt'] }}">
                    </a>
                </div>
            @endforeach
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function ($) {
            var sliders = $('.home-needs-product-slider');
            var suggestedSlider = $('.home-suggested-product-slider');
            var blogSlider = $('.home-blog-card-slider');
            var footerBannerSlider = $('.home-footer-banner-slider');

            sliders.not('.slick-initialized').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2200,
                speed: 550,
                arrows: false,
                dots: true,
                pauseOnHover: true,
                pauseOnFocus: true,
                adaptiveHeight: false,
                responsive: [
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            sliders.each(function () {
                if (!$(this).closest('.tab-pane').hasClass('active')) {
                    $(this).slick('slickPause');
                }
            });

            $('.home-product-tabs a[data-bs-toggle="tab"]').on('shown.bs.tab', function (event) {
                sliders.slick('slickPause');

                var activeSlider = $($(event.target).attr('href')).find('.home-needs-product-slider');
                activeSlider.slick('setPosition');
                activeSlider.slick('slickPlay');
            });

            suggestedSlider.not('.slick-initialized').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1400,
                speed: 450,
                arrows: false,
                dots: true,
                pauseOnHover: true,
                pauseOnFocus: true,
                adaptiveHeight: false,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            blogSlider.not('.slick-initialized').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1400,
                speed: 450,
                arrows: false,
                dots: true,
                pauseOnHover: true,
                pauseOnFocus: true,
                adaptiveHeight: false,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            footerBannerSlider.not('.slick-initialized').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2400,
                speed: 650,
                fade: true,
                cssEase: 'ease-in-out',
                arrows: false,
                dots: true,
                pauseOnHover: true,
                pauseOnFocus: true,
                adaptiveHeight: false
            });
        })(jQuery);

        document.querySelectorAll('.home-product-card').forEach(function (card) {
            var image = card.querySelector('.home-product-gallery-img');

            if (!image) {
                return;
            }

            var gallery = [];

            try {
                gallery = JSON.parse(image.dataset.gallery || '[]');
            } catch (error) {
                gallery = [];
            }

            gallery = gallery.filter(Boolean);

            if (gallery.length < 2) {
                return;
            }

            var timer = null;
            var index = 0;
            var defaultSrc = image.dataset.defaultSrc || gallery[0];

            function showNextImage() {
                index = (index + 1) % gallery.length;
                image.src = gallery[index];
            }

            card.addEventListener('mouseenter', function () {
                clearInterval(timer);
                index = 0;
                showNextImage();
                timer = setInterval(showNextImage, 850);
            });

            card.addEventListener('mouseleave', function () {
                clearInterval(timer);
                timer = null;
                index = 0;
                image.src = defaultSrc;
            });
        });
    </script>
@endpush
