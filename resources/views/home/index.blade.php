@extends('layouts.app')
@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endpush

@section('content')

    {{-- Slider area- --}}
    <section class="home-main-slider-area" aria-label="Featured technology">
        <div class="home-main-slider">
            <a class="home-main-slide" href="{{ url('/products') }}" aria-label="Explore featured technology solutions">
                <img src="{{ asset('assets/images/slider/hb1.webp') }}"
                    alt="Innovation made simple - explore featured technology solutions">
            </a>
            <a class="home-main-slide" href="{{ url('/products/printer') }}" aria-label="Explore modern printer solutions">
                <img src="{{ asset('assets/images/slider/hb2.webp') }}"
                    alt="Built for modern living - explore modern printer solutions">
            </a>
            <a class="home-main-slide" href="{{ url('/products/thin-client') }}"
                aria-label="Explore reliable technology essentials">
                <img src="{{ asset('assets/images/slider/hb3.webp') }}"
                    alt="Reliable solutions ahead - explore technology essentials">
            </a>
        </div>
    </section>
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
                    <h2>Discover Our Product Categories</h2>
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
                                <img src="{{ asset('assets/images/banner/banner1-area1.webp') }}" alt="Printer solutions">
                            </a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2>
                                <span class="home-promo-title-line">Made For</span>
                                <span class="home-promo-title-line">Better Printing</span>
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
                                <img src="{{ asset('assets/images/banner/banner2-area1.webp') }}" alt="Desktop solutions">
                            </a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2>
                                <span class="home-promo-title-line">Designed To</span>
                                <span class="home-promo-title-line">Do More</span>
                            </h2>
                            <p>Dependable desktop solutions built for productivity, multitasking, and modern workplace
                                demands.</p>
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
                {{-- <span class="home-section-eyebrow">Selected For Your Needs</span> --}}
                <h2>Selected For Your Needs</h2>
                <p>Explore printers, scanners, desktops, and thin clients selected for home and office use.</p>
            </div>
            @php
                $defaultProductTab = collect($productTabs)->search(
                    fn($tab) => strtolower(trim($tab['label'])) === 'printer',
                );
                $defaultProductTab = $defaultProductTab !== false ? $defaultProductTab : array_key_first($productTabs);
            @endphp
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
                                    : (str_contains($tabLabel, 'scanner')
                                        ? 'icon-docs'
                                        : 'icon-star')));
                    @endphp
                    <a class="{{ $tabKey === $defaultProductTab ? 'active' : '' }}" href="#{{ $tabKey }}"
                        data-bs-toggle="tab">
                        <i class="{{ $tabIcon }}"></i>
                        {{ \Illuminate\Support\Str::title(str_replace(['-', '_'], ' ', $tab['label'])) }}
                    </a>
                @endforeach
            </div>
            <div class="tab-content jump">
                @foreach ($productTabs as $tabKey => $tab)
                    <div id="{{ $tabKey }}" class="tab-pane {{ $tabKey === $defaultProductTab ? 'active' : '' }}">
                        <div class="home-needs-product-slider">
                            @forelse ($tab['products'] as $product)
                                @php
                                    $homeProductType = \Illuminate\Support\Str::slug($product->parent_cat ?: 'printer');
                                    $homeProductType =
                                        $homeProductType === 'thin-client' ? 'thin-client' : $homeProductType;
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
                                                        src="{{ asset($homeProductImage) }}" alt="{{ $product->name }}"
                                                        data-default-src="{{ asset($homeProductImage) }}"
                                                        data-gallery='@json($homeProductImages->map(fn($image) => asset($image))->values())'>
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
                                <img src="{{ asset('assets/images/banner/banner1-area2.webp') }}" alt="Thin client solutions">
                            </a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2>
                                <span class="home-promo-title-line">Small Footprint,</span>
                                <span class="home-promo-title-line">Big Potential</span>
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
                                <img src="{{ asset('assets/images/banner/banner2-area2.webp') }}" alt="Scanner solutions">
                            </a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2>
                                <span class="home-promo-title-line">Every Detail</strong></span>
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
                <h2>Browse Product Range</h2>
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
                                        <img class="home-product-gallery-img" src="{{ asset($homeProductImage) }}"
                                            alt="{{ $product->name }}" data-default-src="{{ asset($homeProductImage) }}"
                                            data-gallery='@json($homeProductImages->map(fn($image) => asset($image))->values())'>
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
    <section class="home-deal-image-banner" aria-label="Featured collection">
        <a href="{{ url('/contact-us') }}" aria-label="Contact us about our featured collection">
            <img src="{{ asset('assets/images/bg/deal-area-img.png') }}"
                alt="Ideas deserve the right tools - explore featured technology solutions">
        </a>
    </section>
    {{-- Insights and Blogs Area--dynamic --}}
    <section class="blog-area home-insights-section">
        <div class="container">
            <div class="home-insights-heading text-center">
                <span class="home-insights-heading__line"></span>
                <h2>Ideas, Insights & Blogs</h2>
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
                                            <img class="js-blog-gallery-img" src="{{ asset($homeBlogImage) }}"
                                                alt="{{ $blogPost->heading }}"
                                                data-default-src="{{ asset($homeBlogImage) }}"
                                                data-gallery='@json($homeBlogImages->map(fn($image) => asset($image))->values())'>
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
        document.addEventListener('DOMContentLoaded', function() {
            $('.home-main-slider').not('.slick-initialized').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1600,
                speed: 500,
                arrows: false,
                dots: true,
                swipe: true,
                touchMove: true,
                pauseOnHover: false,
                pauseOnFocus: false
            });
        });
    </script>
    <script>
        (function($) {
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
                responsive: [{
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

            sliders.each(function() {
                if (!$(this).closest('.tab-pane').hasClass('active')) {
                    $(this).slick('slickPause');
                }
            });

            $('.home-product-tabs a[data-bs-toggle="tab"]').on('shown.bs.tab', function(event) {
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
                responsive: [{
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
                responsive: [{
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

        document.querySelectorAll('.home-product-card').forEach(function(card) {
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

            card.addEventListener('mouseenter', function() {
                clearInterval(timer);
                index = 0;
                showNextImage();
                timer = setInterval(showNextImage, 850);
            });

            card.addEventListener('mouseleave', function() {
                clearInterval(timer);
                timer = null;
                index = 0;
                image.src = defaultSrc;
            });
        });
    </script>
@endpush
