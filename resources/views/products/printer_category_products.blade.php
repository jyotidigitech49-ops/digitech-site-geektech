@extends('layouts.app')
@section('title', 'Products')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/products-printer.css') }}">
@endpush

@section('content')
    @php
        $typeUrl = $productType->url ?? 'printer';
        $typeName = $productType->name ?? 'Printer';
        $typeFallbackImage = match ($typeUrl) {
            'thin-client' => 'thin_client.png',
            'desktops' => 'desktops.png',
            'scanner' => 'scanner.png',
            default => 'printer.png',
        };
    @endphp

    {{-- Slider Area --}}
    <div class="slider-area product-hero-slider-area">
        <div class="hero-slider-active-1 nav-style-1 dot-style-2 dot-style-2-position-2 dot-style-2-active-black">
            @foreach (($heroBanners ?? []) as $banner)
                <div class="single-hero-slider single-animation-wrap product-hero-slide">
                    <a href="{{ $banner['url'] }}" class="product-hero-banner-link" aria-label="{{ $typeName }} banner">
                        <img src="{{ asset($banner['image']) }}" alt="{{ $typeName }} banner {{ $loop->iteration }}">
                    </a>
                </div>
            @endforeach
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

            <div class="printer-category-grid">

                @foreach ($printerCategoriesAll as $category)
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

                        $categoryUrl = (int) $category->parent_id === 0
                            ? url('products', $category->url)
                            : url("products/{$typeUrl}", $category->url);
                    @endphp
                    <div class="printer-category-item">
                        <div class="single-product-wrap printer-category-card h-100">
                            <div class="product-img product-img-zoom mb-20">
                                <a href="{{ $categoryUrl }}">
                                    <img src="{{ asset('assets/images/product/' . $categoryImage) }}" alt="{{ $category->name }}" class="img-fluid">
                                </a>
                            </div>

                            <div class="product-content-2 text-center">
                                <h3>
                                    <a href="{{ $categoryUrl }}">
                                        <span class="blod">{{ $category->name }}</span>
                                    </a>
                                </h3>

                                <p>{{ Str::limit(strip_tags($category->description), 100) }}</p>
                                <span class="printer-shop-badge">Shop</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    {{-- all-products-list --}}

    <div class="product-area printer-products-area pb-80">
        <div class="container">
            <div class="section-title-2 text-center mb-45">
                <h2><span>Showing</span> {{ $products->count() }} Products</h2>
                <p>Latest {{ $printerCategories->name ?? $typeName }} Collection</p>
            </div>

            <div class="tab-content jump">
                <div id="product-1" class="tab-pane active">
                    <div class="row">

                        @foreach ($products as $product)
                            @php
                                $productImages = collect([$product->img1, $product->img2, $product->img3, $product->img4])
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

                                $productImage = $productImages->first();
                            @endphp
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap printer-product-card js-product-gallery-card mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="{{ url("products/{$typeUrl}/details", $product->slug) }}">
                                            @if ($productImage)
                                                <img class="js-product-gallery-img"
                                                    src="{{ asset($productImage) }}"
                                                    alt="{{ $product->name }}"
                                                    data-default-src="{{ asset($productImage) }}"
                                                    data-gallery='@json($productImages->map(fn ($image) => asset($image))->values())'>
                                            @else
                                                <span class="printer-product-image-missing">{{ $product->name }}</span>
                                            @endif
                                        </a>
                                    </div>

                                    <div class="product-content-wrap-2 text-center">
                                        <div class="printer-product-category">
                                            {{ $product->category_name ?? $product->parent_cat }}
                                        </div>

                                        <h3>
                                            <a href="{{ url("products/{$typeUrl}/details", $product->slug) }}">
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
                                            <a href="{{ url("products/{$typeUrl}/details", $product->slug) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h3>

                                        <div class="product-price-2">
                                            <span>${{ number_format($product->price, 2) }}</span>
                                        </div>

                                        <div class="pro-add-to-cart">
                                            <a href="{{ url("products/{$typeUrl}/details", $product->slug) }}">
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
