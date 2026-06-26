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
    <div class="product-categories-area pt-115 pb-115">
        <div class="container">
            <div class="section-title-btn-wrap border-bottom-3 mb-50 pb-20">
                <div class="section-title-6">
                    <h2>Discover Our Product Categories</h2>
                </div>
                <div class="btn-style-7 btn-style-7-blue">
                    <a href="{{ url('/products') }}">View Products</a>
                </div>
            </div>
            <div class="product-categories-slider-1 nav-style-3">
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border border-blue mb-20">
                            <a href="{{ url('/products/printer') }}">
                                <img src="{{ asset('assets/images/product/printer.png') }}" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 product-content-blue text-center">
                            <h5><a href="{{ url('/products/printer') }}">Printer</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border border-blue mb-20">
                            <a href="{{ url('/products/thin-client') }}">
                                <img src="{{ asset('assets/images/product/thin_client.png') }}" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 product-content-blue text-center">
                            <h5><a href="{{ url('/products/thin-client') }}">Thin Client</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border border-blue mb-20">
                            <a href="{{ url('/products/desktops') }}">
                                <img src="{{ asset('assets/images/product/desktops.png') }}" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 product-content-blue text-center">
                            <h5><a href="{{ url('/products/desktops') }}">Desktops</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border border-blue mb-20">
                            <a href="{{ url('/products/scanner') }}">
                                <img src="{{ asset('assets/images/product/scanner.png') }}" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 product-content-blue text-center">
                            <h5><a href="{{ url('/products/scanner') }}">Scanner</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Banner Area-1 --}}
    <div class="banner-area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="{{ url('/products/printer') }}"><img src="assets/images/banner/b1-area1.png"
                                    alt=""></a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2><span>Made </span> For Better <br>Printing</h2>
                            <p>Solutions designed for clear output <br> and smooth daily workflows.
                            </p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="{{ url('/products') }}">Explore Products <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="{{ url('/products/desktops') }}"><img src="assets/images/banner/b2-area1.png"
                                    alt=""></a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2><span>Designed </span> To Do<br>More </h2>
                            <p>Dependable desktop solutions <br>built for productivity, multitasking, <br>and modern
                                workplace
                                demands.</p>
                            <div class="btn-style-4 ">
                                <a class="hover-red" href="{{ url('/products') }}">Explore Products <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Product Area--dynamics --}}
    <div class="product-area home-dynamic-products-area pb-120">
        <div class="container">
            <div class="section-title-6 section-title-6-xs mb-25 text-center">
                <h2>Selected For Your Needs</h2>
            </div>
            <div class="tab-style-9 nav mb-60">
                {{-- @dd($productTabs) --}}
                @foreach ($productTabs as $tabKey => $tab)
                    <a class="{{ $loop->first ? 'active' : '' }}" href="#{{ $tabKey }}" data-bs-toggle="tab">
                        {{ $tab['label'] }}
                    </a>
                @endforeach
            </div>
            <div class="tab-content jump">
                @foreach ($productTabs as $tabKey => $tab)
                    <div id="{{ $tabKey }}" class="tab-pane {{ $loop->first ? 'active' : '' }}">
                        <div class="product-slider-active-3 nav-style-3">
                            @forelse ($tab['products'] as $product)
                                @php
                                    $homeProductType = \Illuminate\Support\Str::slug($product->parent_cat ?: 'printer');
                                    $homeProductType = $homeProductType === 'thin-client' ? 'thin-client' : $homeProductType;
                                    $homeProductUrl = url("products/{$homeProductType}/details", $product->slug);
                                    $homeProductImages = collect([$product->img1, $product->img2, $product->img3, $product->img4])
                                        ->filter()
                                        ->map(function ($image) {
                                            $candidates = array_filter([
                                                $image,
                                                'assets/images/product/' . ltrim($image, '/'),
                                            ]);

                                            return collect($candidates)->first(fn ($candidate) => file_exists(public_path($candidate)));
                                        })
                                        ->filter()
                                        ->unique()
                                        ->values();

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
                                            <div class="product-price-4">
                                                <span
                                                    class="new-price">&#8377;{{ number_format($product->price, 2) }}</span>
                                            </div>
                                            <div class="home-card-stock-wrap">
                                                <span class="home-stock-badge">
                                                    {{ $product->stock_status === 'available' ? 'In Stock' : 'Out of Stock' }}
                                                </span>
                                            </div>
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
    </div>
    {{-- Banner Area-2 --}}
    <div class="banner-area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="{{ url('/products/thin-client') }}"><img src="assets/images/banner/b1-area2.png"
                                    alt=""></a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2><span>Small</span> Footprint, Big <br>Potential</h2>
                            <p>Designed for streamlined access <br> and workplace efficiency.
                            </p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="{{ url('/products') }}">Explore Products<i
                                        class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="{{ url('/products/scanner') }}"><img src="assets/images/banner/b2-area2.png"
                                    alt=""></a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2><span>Every </span> Detail <br>Preserved</h2>
                            <p>Built to simplify document <br> digitization and organization.
                            </p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="{{ url('/products') }}">Explore Products
                                    <i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Suggested Products---dynamics --}}
    <div class="product-area home-suggested-products-area pt-0 pb-0">
        <div class="container">
            <div class="section-title-6 section-title-6-xs mb-60 text-center">
                <h2>Sugguest today</h2>
            </div>

            <div class="row">

                @foreach ($suggestedProducts as $product)
                    @php
                        $homeProductType = \Illuminate\Support\Str::slug($product->parent_cat ?: 'printer');
                        $homeProductType = $homeProductType === 'thin-client' ? 'thin-client' : $homeProductType;
                        $homeProductUrl = url("products/{$homeProductType}/details", $product->slug);
                        $homeProductImages = collect([$product->img1, $product->img2, $product->img3, $product->img4])
                            ->filter()
                            ->map(function ($image) {
                                $candidates = array_filter([
                                    $image,
                                    'assets/images/product/' . ltrim($image, '/'),
                                ]);

                                return collect($candidates)->first(fn ($candidate) => file_exists(public_path($candidate)));
                            })
                            ->filter()
                            ->unique()
                            ->values();

                        $homeProductImage = $homeProductImages->first();
                    @endphp
                    <div class="custom-col-5">
                        <div class="single-product-wrap home-product-card mb-60">
                            <div class="product-img product-img-zoom mb-15">
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

                                <div class="product-price-4">
                                    <span>₹{{ number_format($product->price, 2) }}</span>
                                </div>

                                <div class="home-card-stock-wrap">
                                    <span class="home-stock-badge">
                                        {{ $product->stock_status === 'available' ? 'In Stock' : 'Out of Stock' }}
                                    </span>
                                </div>
                            </div>

                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none">
                                    <a class="blue" href="{{ $homeProductUrl }}">
                                        {{ $product->name }}
                                    </a>
                                </h3>


                                <div class="product-price-4">
                                    <span>₹{{ number_format($product->price, 2) }}</span>
                                </div>

                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">View Details</button>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
            <div class="more-product-btn text-center mb-15">
                <a href="{{ url('/products') }}">More Product</a>
            </div>
        </div>
    </div>

    {{-- Deal Area --}}
    <div class="deal-area pt-150 pb-130 bg-img" style="background-image:url(assets/images/bg/deal-area-bg.png);">
        <div class="container">
            <div class="deal-content-1">
                <span>FEATURED COLLECTION</span>
                <h2><span>Ideas Deserve</span> The <br>Right Tools</h2>
                <p>Explore technology solutions designed to support the way people create, connect, and work.
                </p>
                <div class="timer-wrap">
                    <h4>Expires in:</h4>
                    <div class="timer-style-1" id="timer-1-active"></div>
                </div>
                <div class="deal-btn">
                    <a href="{{ url('/products/printer') }}">Discover More</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Insights and Blogs Area--dynamic --}}
    <div class="blog-area bg-white mt-50">
        <div class="container">
            <div class="section-title-2 text-center mb-45">
                <h2><span>Ideas, Insights</span> & Blogs</h2>
                <p>Explore perspectives, product highlights, and technology discussions shaping modern workplaces.</p>
            </div>
            <div class="border-bottom-2 blog-area-pb home-blog-section">
                <div class="row">
                    @foreach ($blogPosts as $blogPost)
                        @php
                            $homeBlogImages = collect([$blogPost->image1, $blogPost->image2, $blogPost->image3])
                                ->filter()
                                ->map(function ($image) {
                                    $image = ltrim((string) $image, '/');
                                    $candidates = str_starts_with($image, 'assets/')
                                        ? [$image]
                                        : [$image, 'assets/images/blog/' . $image];

                                    return collect($candidates)->first(fn ($candidate) => file_exists(public_path($candidate)));
                                })
                                ->filter()
                                ->unique()
                                ->values();

                            $homeBlogImage = $homeBlogImages->first();
                        @endphp
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-wrap home-blog-card js-blog-gallery-card mb-30">
                                <div class="blog-img mb-25">
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
                                    <div class="blog-meta">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/blogs', $blogPost->slug) }}">
                                                    {{ $blogPost->heading }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <p>
                                        {{ \Illuminate\Support\Str::limit(strip_tags($blogPost->content), 100, '...') }}
                                    </p>

                                    <div class="mt-2">
                                        <a href="{{ url('/blogs', $blogPost->slug) }}"
                                            class="btn btn-sm btn-primary">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="more-blogs-btn text-center">
                    <a href="{{ url('/blogs') }}">More Blogs</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
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
