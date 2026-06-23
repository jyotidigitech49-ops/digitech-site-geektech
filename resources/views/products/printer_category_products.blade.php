@extends('layouts.app')
@section('title', 'Products')
@section('content')

    {{-- Slider Area --}}
    <div class="slider-area">
        <div class="hero-slider-active-1 nav-style-1 dot-style-2 dot-style-2-position-2 dot-style-2-active-black">
            <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs"
                style="background-image:url(assets/images/slider/hm-4-slider-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                <h4 class="animated">Lookbook</h4>
                                <h1 class="animated">Denim Mixed <br>Layering Combine <br>collect</h1>
                                <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1" href="product-details.html">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs "
                style="background-image:url(assets/images/slider/hm-4-slider-2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                <h4 class="animated">Lookbook</h4>
                                <h1 class="animated">Denim Mixed <br>Layering Combine <br>collect</h1>
                                <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1" href="product-details.html">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- product-printer-category-area --}}

    {{-- <div class="product-area pt-115 pb-110">
        <div class="container">
            <div class="section-title-2 text-center mb-45">
                <h2><span></span> Product Categories Designed for Simplicity</h2>
                <p>Explore printer categories with simpler and smarter product navigation.</p>
            </div>

            <div
                class="product-slider-active dot-style-2 dot-style-2-position-static dot-style-2-mrg-1 dot-style-2-active-black">

                @foreach ($printerCategoriesAll as $category)
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-20">
                                <a href="{{ url('products', $category->url) }}">
                                    <img src="{{ asset($category->image) }}" alt="{{ $category->name }}">
                                </a>
                            </div>

                            <div class="product-content-2 text-center">
                                <h3>
                                    <a href="{{ url('products', $category->url) }}">
                                        <span class="blod">{{ $category->name }}</span>
                                    </a>
                                </h3>

                                <p>{{ $category->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div> --}}

    <div class="product-area pt-115 pb-110">
        <div class="container">
            <div class="section-title-2 text-center mb-45">
                <h2><span></span> Product Categories Designed for Simplicity</h2>
                <p>Explore printer categories with simpler and smarter product navigation.</p>
            </div>

            <div class="row">

                @foreach ($printerCategoriesAll as $category)
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="single-product-wrap h-100">
                            <div class="product-img product-img-zoom mb-20">
                                <a href="{{ url('products/printer/' . $category->url) }}">
                                    <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" class="img-fluid">
                                </a>
                            </div>

                            <div class="product-content-2 text-center">
                                <h3>
                                    <a href="{{ url('products/printer/' . $category->url) }}">
                                        <span class="blod">{{ $category->name }}</span>
                                    </a>
                                </h3>

                                <p>{{ Str::limit(strip_tags($category->description), 100) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    {{-- all-products-list --}}

    <div class="product-area pb-80">
        <div class="container">
            <div class="section-title-2 text-center mb-45">
                <h2><span>Showing</span> {{ $products->count() }} Products</h2>
                <p>Latest {{ $printerCategories->name }} Collection</p>
            </div>

            <div class="tab-content jump">
                <div id="product-1" class="tab-pane active">
                    <div class="row">

                        @foreach ($products as $product)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="{{ url('products/printer/details', $product->slug) }}">
                                            <img src="{{ asset($product->img1) }}" alt="{{ $product->name }}">
                                        </a>
                                    </div>

                                    <div class="product-content-wrap-2 text-center">
                                        <h3>
                                            <a href="{{ url('products/printer/details', $product->slug) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h3>

                                        <div class="product-price-2">
                                            <span>${{ number_format($product->price, 2) }}</span>
                                        </div>
                                    </div>

                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3>
                                            <a href="{{ url('products/printer/details', $product->slug) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h3>

                                        <div class="product-price-2">
                                            <span>${{ number_format($product->price, 2) }}</span>
                                        </div>

                                        <div class="pro-add-to-cart">
                                            <a href="{{ url('products/printer/details', $product->slug) }}">
                                                <button title="Add to Cart">View Details</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
