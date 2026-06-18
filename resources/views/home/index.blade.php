@extends('layouts.app')
@section('title','Home')

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}"> --}}
@endpush

@section('content')

<div class="slider-area bg-gray-8">
            <div class="container">
                <div class="hero-slider-active-2 nav-style-1 nav-style-1-modify-2 nav-style-1-blue">
                    <div class="single-hero-slider single-hero-slider-hm9 single-animation-wrap">
                        <div class="row slider-animated-1">
                            <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                                <div class="hero-slider-content-6 slider-content-hm9">
                                    <h5 class="animated">New Arrivals</h5>
                                    <h1 class="animated">Home Secure <br>camera</h1>
                                    <p class="animated">Prodctect your house with home secure wifi camere indoor/outdoor</p>
                                    <div class="btn-style-1">
                                        <a class="animated btn-1-padding-4 btn-1-blue btn-1-font-14" href="product-details.html">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                                <div class="hm9-hero-slider-img">
                                    <img class="animated" src="{{ asset('assets/images/slider/hm-9-slider-1.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-hero-slider single-hero-slider-hm9 single-animation-wrap">
                        <div class="row slider-animated-1">
                            <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                                <div class="hero-slider-content-6 slider-content-hm9">
                                    <h5 class="animated">New Arrivals</h5>
                                    <h1 class="animated">Home Secure <br>camera</h1>
                                    <p class="animated">Prodctect your house with home secure wifi camere indoor/outdoor</p>
                                    <div class="btn-style-1">
                                        <a class="animated btn-1-padding-4 btn-1-blue btn-1-font-14" href="product-details.html">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                                <div class="hm9-hero-slider-img">
                                    <img class="animated" src="{{ asset('assets/images/slider/hm-9-slider-1.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <h3>Free Shipping</h3>
                                    <span>Orders over $100</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon service-icon-blue">
                                    <i class="icon-reload"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Free Returns</h3>
                                    <span>Within 30 days</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon service-icon-blue">
                                    <i class="icon-lock"></i>
                                </div>
                                <div class="service-content">
                                    <h3>100% Secure</h3>
                                    <span>Payment Online</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon service-icon-blue">
                                    <i class="icon-tag"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Best Price</h3>
                                    <span>Guaranteed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-categories-area pt-115 pb-115">
            <div class="container">
                <div class="section-title-btn-wrap border-bottom-3 mb-50 pb-20">
                    <div class="section-title-6">
                        <h2>Popular Categories</h2>
                    </div>
                    <div class="btn-style-7 btn-style-7-blue">
                        <a href="shop.html">All Product</a>
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
                                <h5><a href="shop.html">Fashion</a></h5>
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
                                <h5><a href="shop.html">Electronic</a></h5>
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
                                <h5><a href="shop.html">computer</a></h5>
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
                                <h5><a href="shop.html">beauty</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="{{ asset('assets/images/product/product-54.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">sport</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="{{ asset('assets/images/product/product-55.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">baby</a></h5>
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
                                <h5><a href="shop.html">computer</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="banner-area pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="product-details.html"><img src="assets/images/banner/banner-10.jpg" alt=""></a>
                            </div>
                            <div class="banner-content-11 banner-content-11-modify">
                                <h2><span>Zara</span> Pattern Boxed <br>Underwear</h2>
                                <p>Stretch, & Fress cool</p>
                                <div class="btn-style-4">
                                    <a class="hover-red" href="product-details.html">Shop now <i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="product-details.html"><img src="assets/images/banner/banner-11.jpg" alt=""></a>
                            </div>
                            <div class="banner-content-11 banner-content-11-modify">
                                <h2><span>Basic</span> Color<br>Caps</h2>
                                <p>Less is more!</p>
                                <div class="btn-style-4">
                                    <a class="hover-red" href="product-details.html">Shop now <i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-120">
            <div class="container">
                <div class="section-title-6 section-title-6-xs mb-25 text-center">
                    <h2>best seller in last month</h2>
                </div>
                <div class="tab-style-9 nav mb-60">
                    <a class="active" href="#product-6" data-bs-toggle="tab">Top 20 </a>
                    <a href="#product-7" data-bs-toggle="tab"> Electronic </a>
                    <a href="#product-8" data-bs-toggle="tab">Apparel </a>
                    <a href="#product-9" data-bs-toggle="tab"> Computer </a>
                    <a href="#product-10" data-bs-toggle="tab"> Cookware </a>
                    <a href="#product-11" data-bs-toggle="tab"> Baby </a>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
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
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
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
         <div class="deal-area">
            <div class="container">
                <div class="deal-slider-active nav-style-1 nav-style-1-modify nav-style-1-blue">
                    <div class="single-deal-wrap bg-img" style="background-image:url({{ asset('assets/images/bg/bg-2.jpg') }});">
                        <div class="deal-content-1 deal-content-1-modify">
                            <span>deal of the day</span>
                            <h2><span>50% OFF</span> Basic <br>Tee Flavor</h2>
                            <div class="timer-wrap">
                                <h4>Expires in:</h4>
                                <div class="timer-style-1" id="timer-1-active"></div>
                            </div>
                        </div>
                    </div>
                    <div class="single-deal-wrap bg-img" style="background-image:url({{ asset('assets/images/bg/bg-2.jpg') }});">
                        <div class="deal-content-1 deal-content-1-modify">
                            <span>deal of the day</span>
                            <h2><span>50% OFF</span> Basic <br>Tee Flavor</h2>
                            <div class="timer-wrap">
                                <h4>Expires in:</h4>
                                <div class="timer-style-1" id="timer-3-active"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="product-area pb-110 mt-50">
            <div class="container">
                <div class="section-title-tab-wrap border-bottom-3 mb-30 pb-20">
                    <div class="section-title-6">
                        <h2><i class="icon-screen-desktop"></i> consumer electric</h2>
                    </div>
                    <div class="tab-style-8 nav tab-res-mrg">
                        <a class="active" href="#product-6" data-bs-toggle="tab">Televisions </a>
                        <a href="#product-7" data-bs-toggle="tab"> Air Conditions </a>
                        <a href="#product-8" data-bs-toggle="tab">Washing Machine </a>
                        <a href="#product-9" data-bs-toggle="tab">Laptop </a>
                        <a href="#product-10" data-bs-toggle="tab"> Computer </a>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="product-6" class="tab-pane active">
                        <div class="product-slider-active-3 nav-style-3">
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-62.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">Epson</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Mini Protector</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">Epson</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Mini Protector</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-63.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-64.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">apple</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">apple</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-65.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">norda </a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone Tab A</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">norda </a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone Tab A</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-66.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">DJ II</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">DJ II</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-63.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-66.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">DJ II</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">DJ II</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-65.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">norda </a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone Tab A</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">norda </a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone Tab A</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-64.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">apple</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">apple</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-63.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-62.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">Epson</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Mini Protector</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">Epson</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Mini Protector</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-63.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-65.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">norda </a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone Tab A</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">norda </a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone Tab A</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-66.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">DJ II</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">DJ II</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-63.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-64.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">apple</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">apple</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-62.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">Epson</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Mini Protector</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">Epson</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Mini Protector</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-63.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-63.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-64.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">apple</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">apple</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-65.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">norda </a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone Tab A</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">norda </a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone Tab A</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-62.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">Epson</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Mini Protector</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">Epson</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Mini Protector</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-66.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">DJ II</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">DJ II</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-63.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-64.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">apple</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">apple</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-65.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">norda </a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone Tab A</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">norda </a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Phone Tab A</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-63.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-62.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">Epson</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Mini Protector</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">Epson</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Mini Protector</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-66.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">DJ II</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">DJ II</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
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
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product/product-63.jpg') }}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue" href="shop.html">nikon</a>
                                        </div>
                                        <h3><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
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
        <div class="deal-area pt-150 pb-130 bg-img" style="background-image:url(assets/images/bg/bg-1.jpg);">
            <div class="container">
                <div class="deal-content-1">
                    <span>deal of the day</span>
                    <h2><span>50% OFF</span> Basic <br>Tee Flavor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipis elit. Nunc imperdiet, nulla.</p>
                    <div class="timer-wrap">
                        <h4>Expires in:</h4>
                        <div class="timer-style-1" id="timer-1-active"></div>
                    </div>
                    <div class="deal-btn">
                        <a href="product-details.html">Buy now</a>
                    </div>
                </div>
            </div>
        </div>
         <div class="blog-area pt-115 pb-75">
            <div class="container">
                <div class="section-title-tab-wrap mb-55">
                    <div class="section-title-4">
                        <h2>press & looks</h2>
                    </div>
                    <div class="btn-style-6 ml-60">
                        <a href="blog-details.html">All articles</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-25">
                                <a href="blog-details.html"><img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="blog-img"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">News </a></li>
                                        <li>May 25, 2022</li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg Show</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-25">
                                <a href="blog-details.html"><img src="{{ asset('assets/images/blog/blog-2.jpg') }}" alt="blog-img"></a>
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
                                <a href="blog-details.html"><img src="{{ asset('assets/images/blog/blog-3.jpg') }}" alt="blog-img"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">Lookbook </a></li>
                                        <li>May 25, 2022</li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2022, Activites Summer</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
