@extends('layouts.app')
@section('title', 'Products')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/products-printer.css') }}">
@endpush

@section('content')
    @php
        $isAllProductsPage = $isAllProductsPage ?? false;
        $selectedType = $selectedType ?? null;
        $typeUrl = $productType->url ?? 'printer';
        $typeName = $isAllProductsPage ? ($productType->name ?? 'All Products') : ($productType->name ?? 'Printer');
        $typeFallbackImage = match ($typeUrl) {
            'thin-client' => 'thin_client.png',
            'desktops' => 'desktops.png',
            'scanner' => 'scanner.png',
            default => 'printer.png',
        };
    @endphp

    {{-- Slider Area --}}
    <div class="slider-area">
        <div class="hero-slider-active-1 nav-style-1 dot-style-2 dot-style-2-position-2 dot-style-2-active-black">
            <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs"
                style="background-image:url({{ asset('assets/images/slider/hm-4-slider-1.jpg') }});">
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
                style="background-image:url({{ asset('assets/images/slider/hm-4-slider-2.jpg') }});">
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
                    <p>Explore HP categories with simpler and smarter product navigation.</p>
                </div>
                <div class="product-slider-active dot-style-2 dot-style-2-position-static dot-style-2-mrg-1 dot-style-2-active-black">
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-20">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-9.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content-2 text-center">
                                <h3><a href="product-details.html"><span class="blod">Men</span> Clothings <span class="available-product">(56)</span></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    {{-- product-printer-category-area --}}

    <div class="product-area pt-115 pb-110">
        <div class="container">
            <div class="section-title-2 text-center mb-45">
                <h2><span></span> Product Categories Designed for Simplicity</h2>
                <p>{{ $isAllProductsPage ? 'Explore all HP product types and filter products with simpler navigation.' : 'Explore HP categories with simpler and smarter product navigation.' }}</p>
            </div>

            <div class="printer-category-grid">

                @foreach ($printerCategories as $category)
                    @php
                        $categoryImageCandidates = array_filter([
                            $category->image,
                            pathinfo($category->image ?? '', PATHINFO_FILENAME) . '.png',
                            str_replace('-', '_', pathinfo($category->image ?? '', PATHINFO_FILENAME)) . '.png',
                            str_replace('-printer', '', pathinfo($category->image ?? '', PATHINFO_FILENAME)) . '.png',
                            $typeFallbackImage,
                            'printer.png',
                        ]);

                        $categoryImage = collect($categoryImageCandidates)
                            ->first(fn ($image) => file_exists(public_path('assets/images/product/' . $image)));

                        if ($isAllProductsPage) {
                            $categoryUrl = url('/products') . '?type=' . $category->url;
                        } else {
                            $categoryUrl = (int) $category->parent_id === 0
                                ? url('products', $category->url)
                                : url("products/{$typeUrl}", $category->url);
                        }
                    @endphp
                    <div class="printer-category-item">
                        <div class="single-product-wrap printer-category-card {{ $isAllProductsPage && $selectedType === $category->url ? 'active-filter-card' : '' }} mb-35">
                            <div class="product-img product-img-zoom mb-20">
                                <a href="{{ $categoryUrl }}">
                                <img src="{{ asset('assets/images/product/' . $categoryImage) }}" alt="{{ $category->name }}">
                                </a>
                            </div>

                            <div class="product-content-2 text-center">
                                <h3>
                                    <a href="{{ $categoryUrl }}">
                                    <span class="blod">{{ $category->name }}</span>
                                    </a>
                                </h3>

                                <p>{{ $category->description }}</p>
                                <span class="printer-shop-badge">Shop</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    {{-- all-products-list --}}

    {{-- <div class="product-area pb-80">
            <div class="container">
                <div class="section-title-2 text-center mb-45">
                    <h2><span>Showing</span> 16 Products</h2>
                    <p>Latest Printer Collection</p>
                </div>
                <div class="tab-content jump">
                    <div id="product-1" class="tab-pane active">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-13.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="product-2" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-20.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="product-3" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-16.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="product-4" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-14.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="product-5" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-15.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    {{-- all-products-list --}}

    <div class="product-area printer-products-area pb-80">
        <div class="container">
            <div class="section-title-2 text-center mb-45">
                <h2><span>Showing</span> {{ $products->count() }} Products</h2>
                <p>{{ $isAllProductsPage ? ($productType ? 'Latest ' . $typeName . ' Collection' : 'All Product Collection') : 'Latest ' . $typeName . ' Collection' }}</p>
            </div>

            <div class="tab-content jump">
                <div id="product-1" class="tab-pane active">
                    <div class="row">

                        @foreach ($products as $product)
                            @php
                                $productImageCandidates = array_filter([
                                    $product->img1,
                                    'assets/images/product/' . ltrim($product->img1 ?? '', '/'),
                                    'assets/images/product/' . $typeFallbackImage,
                                    'assets/images/product/printer.png',
                                    'assets/images/product/product-1.jpg',
                                ]);

                                $productImage = collect($productImageCandidates)
                                    ->first(fn ($image) => file_exists(public_path($image))) ?? 'assets/images/product/product-1.jpg';

                                $productDetailsTypeUrl = $isAllProductsPage
                                    ? \Illuminate\Support\Str::slug($product->parent_cat ?: $typeUrl)
                                    : $typeUrl;
                            @endphp
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap printer-product-card mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="{{ url("products/{$productDetailsTypeUrl}/details", $product->slug) }}">
                                            <img src="{{ asset($productImage) }}" alt="{{ $product->name }}">
                                        </a>
                                    </div>

                                    <div class="product-content-wrap-2 text-center">
                                        <div class="printer-product-category">
                                            {{ $product->category_name ?? $product->parent_cat }}
                                        </div>

                                        <h3>
                                            <a href="{{ url("products/{$productDetailsTypeUrl}/details", $product->slug) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h3>

                                        <div class="product-price-2 printer-product-price-stock">
                                            <span>${{ number_format($product->price, 2) }}</span>
                                            <span class="printer-stock-badge">
                                                {{ $product->stock_status === 'available' ? 'In Stock' : 'Out of Stock' }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="printer-product-category">
                                            {{ $product->category_name ?? $product->parent_cat }}
                                        </div>

                                        <h3>
                                            <a href="{{ url("products/{$productDetailsTypeUrl}/details", $product->slug) }}">
                                                {{ $product->name }}
                                                </a>
                                        </h3>

                                        <div class="product-price-2">
                                            <span>${{ number_format($product->price, 2) }}</span>
                                        </div>

                                        <div class="pro-add-to-cart">
                                           <a href="{{ url("products/{$productDetailsTypeUrl}/details", $product->slug) }}">
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
