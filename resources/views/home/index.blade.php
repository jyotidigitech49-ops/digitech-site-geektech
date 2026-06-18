@extends('layouts.app')
@section('title', 'Home')

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}"> --}}
@endpush

@section('content')

    <div class="slider-area bg-gray-8">
        <div class="container">
            <div class="hero-slider-active-2 nav-style-1 nav-style-1-modify-2 nav-style-1-blue">
                {{-- SLIDER-1 --}}
                <div class="single-hero-slider single-hero-slider-hm9 single-animation-wrap">
                    <div class="row slider-animated-1">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="hero-slider-content-6 slider-content-hm9">
                                <h5 class="animated">Featured Solutions</h5>
                                <h1 class="animated">INNOVATION MADE <br>SIMPLE</h1>
                                <p class="animated">Discover innovative technology designed to simplify everyday experiences
                                    at home and work.</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-4 btn-1-blue btn-1-font-14"
                                        href="product-details.html">Explore Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="hm9-hero-slider-img">
                                <img class="animated" src="{{ asset('assets/images/slider/home-slider-1.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- SLIDER-2 --}}
                <div class="single-hero-slider single-hero-slider-hm9 single-animation-wrap">
                    <div class="row slider-animated-1">
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
                                    <a class="animated btn-1-padding-4 btn-1-blue btn-1-font-14"
                                        href="product-details.html">Explore Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="hm9-hero-slider-img">
                                <img class="animated" src="{{ asset('assets/images/slider/home-slider-2.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- SLIDER-3 --}}

                <div class="single-hero-slider single-hero-slider-hm9 single-animation-wrap">
                    <div class="row slider-animated-1">
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
                                    <a class="animated btn-1-padding-4 btn-1-blue btn-1-font-14"
                                        href="product-details.html">Explore Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="hm9-hero-slider-img">
                                <img class="animated" src="{{ asset('assets/images/slider/home-slider-3.png') }}"
                                    alt="">
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
                                <i class="icon-cursor"></i>
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
                                <i class="icon-reload"></i>
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
                                <i class="icon-lock"></i>
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
                                <i class="icon-tag"></i>
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
                    <a href="shop.html">View Products</a>
                </div>
            </div>
            <div class="product-categories-slider-1 nav-style-3">
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border border-blue mb-20">
                            <a href="shop.html">
                                <img src="{{ asset('assets/images/product/product-50.png') }}" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 product-content-blue text-center">
                            <h5><a href="shop.html">Printer</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border border-blue mb-20">
                            <a href="shop.html">
                                <img src="{{ asset('assets/images/product/product-51.png') }}" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 product-content-blue text-center">
                            <h5><a href="shop.html">Thin Client</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border border-blue mb-20">
                            <a href="shop.html">
                                <img src="{{ asset('assets/images/product/product-52.png') }}" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 product-content-blue text-center">
                            <h5><a href="shop.html">Desktops</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border border-blue mb-20">
                            <a href="shop.html">
                                <img src="{{ asset('assets/images/product/product-53.png') }}" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 product-content-blue text-center">
                            <h5><a href="shop.html">Scanner</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Banner Area --}}
    <div class="banner-area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="product-details.html"><img src="assets/images/banner/banner-10.jpg"
                                    alt=""></a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2><span>Made </span> For Better <br>Printing</h2>
                            <p>Solutions designed for clear output and smooth daily workflows.
                            </p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="product-details.html">Explore Products <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="product-details.html"><img src="assets/images/banner/banner-11.jpg"
                                    alt=""></a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2><span>Designed </span> To Do<br>More </h2>
                            <p>Dependable desktop solutions built for productivity, multitasking, and modern workplace
                                demands.</p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="product-details.html">Explore Products <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Product Area --}}
    <div class="product-area pb-120">
        <div class="container">
            <div class="section-title-6 section-title-6-xs mb-25 text-center">
                <h2>Selected For Your Needs</h2>
            </div>
            <div class="tab-style-9 nav mb-60">
                <a href="#product-7" data-bs-toggle="tab"> Featured </a>
                <a href="#product-8" data-bs-toggle="tab">Printers </a>
                <a href="#product-9" data-bs-toggle="tab"> Desktops </a>
                <a href="#product-10" data-bs-toggle="tab"> Thin Clients </a>
                <a href="#product-11" data-bs-toggle="tab"> Scanners </a>
            </div>
            <div class="tab-content jump">
                <div id="product-6" class="tab-pane active">
                    <div class="product-slider-active-3 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-41.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-40%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby
                                            Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-20%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-43.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry
                                            diapers</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-44.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic
                                            Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-45.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-35%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London
                                            Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-7" class="tab-pane">
                    <div class="product-slider-active-3 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-45.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-35%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London
                                            Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-44.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic
                                            Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-43.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry
                                            diapers</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-20%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-41.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-40%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby
                                            Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-8" class="tab-pane">
                    <div class="product-slider-active-3 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-20%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-41.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-40%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby
                                            Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-44.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic
                                            Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-43.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry
                                            diapers</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-45.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-35%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London
                                            Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-9" class="tab-pane">
                    <div class="product-slider-active-3 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-45.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-35%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London
                                            Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-41.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-40%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby
                                            Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-44.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic
                                            Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-20%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-43.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a>
                                    </h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers
                                            baby-dry diapers</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-10" class="tab-pane">
                    <div class="product-slider-active-3 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-43.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a>
                                    </h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers
                                            baby-dry diapers</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-44.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic
                                            Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-20%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-41.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-40%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby
                                            Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-45.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-35%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London
                                            Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-11" class="tab-pane">
                    <div class="product-slider-active-3 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-45.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-35%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London
                                            Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ella Beauty</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-20%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-44.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic
                                            Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$123.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">InterioUS</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-41.jpg') }}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-40%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby
                                            Milk</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">olabear.com</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-43.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a>
                                    </h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers
                                            baby-dry diapers</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50 </span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">Ugmonko</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/images/product/product-42.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe
                                            Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a href="#">jetapo shop</a></span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Banner Area --}}
    <div class="banner-area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="product-details.html"><img src="assets/images/banner/banner-10.jpg"
                                    alt=""></a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2><span>Small</span> Footprint, Big <br>Potential</h2>
                            <p>Designed for streamlined access and workplace efficiency.
                            </p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="product-details.html">Explore Products<i
                                        class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="product-details.html"><img src="assets/images/banner/banner-11.jpg"
                                    alt=""></a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2><span>Every </span> Detail <br>Preserved</h2>
                            <p>Built to simplify document digitization and organization.
                            </p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="product-details.html">Explore Products
                                    <i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Suggested Products --}}
      <div class="product-area pt-0 pb-0">
            <div class="container">
                <div class="section-title-6 section-title-6-xs mb-60 text-center">
                    <h2>Sugguest today</h2>
                </div>
                <div class="row">
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-62.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Mini Protector</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">USoffice</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Mini Protector</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">USoffice</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-63.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-64.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-65.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Mobile Tab A</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50  </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">USoffice</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Mobile Tab A</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50 </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">USoffice</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-66.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-67.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Brown T-shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">jetaposhop</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Brown T-shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">jetaposhop</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-68.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">olabear.com</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">olabear.com</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-69.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Adidas Grey Sport Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">olabear.com</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Adidas Grey Sport Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">olabear.com</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-70.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchose White Duffles</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50  </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">etaposhop</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchose White Duffles</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50 </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">etaposhop</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-71.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Rayban Round Sunglasses</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">sunglassjp</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Rayban Round Sunglasses</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">sunglassjp</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-72.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Comet Rice Cooker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Comet Rice Cooker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-73.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Ikea Set 24 Knifes</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">IKEASG</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Ikea Set 24 Knifes</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">IKEASG</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-74.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Pack 10 Utensils</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">IKEASG</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Pack 10 Utensils</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">IKEASG</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-75.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic Chair</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50  </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic Chair</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50 </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-76.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Black Leather Chair</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Black Leather Chair</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- Deal Area --}}
    <div class="deal-area pt-150 pb-130 bg-img" style="background-image:url(assets/images/bg/bg-1.jpg);">
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
                    <a href="product-details.html">Discover More</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Insights Area --}}
    <div class="blog-area bg-white mt-50">
        <div class="container">
            <div class="section-title-2 text-center mb-45">
                <h2><span>Ideas, Insights</span> & Blogs</h2>
                <p>Explore perspectives, product highlights, and technology discussions shaping modern workplaces.</p>
            </div>
            <div class="border-bottom-2 blog-area-pb">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-25">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-1.jpg"
                                        alt="blog-img"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">News </a></li>
                                        <li>May 25, 2022</li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg
                                        Show</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-25">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-2.jpg"
                                        alt="blog-img"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">Inspiration </a></li>
                                        <li>May 25, 2022</li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Basic colord mixed - trendind 2022</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-25">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-3.jpg"
                                        alt="blog-img"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">Lookbook </a></li>
                                        <li>May 25, 2022</li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2022, Activites Summer</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
