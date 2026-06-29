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
        $typeName = $isAllProductsPage ? $productType->name ?? 'All Products' : $productType->name ?? 'Printer';
        $typeFallbackImage = match ($typeUrl) {
            'thin-client' => 'thin_client.png',
            'desktops' => 'desktops.png',
            'scanner' => 'scanner.png',
            default => 'printer.png',
        };
        $categoryImagePath = function ($image) {
            $image = trim(str_replace('\\', '/', (string) $image));
            $urlPath = parse_url($image, PHP_URL_PATH);
            $image = ltrim($urlPath ?: $image, '/');
            $image = preg_replace('#^public/#i', '', $image);

            if ($image === '') {
                return null;
            }

            if (! str_starts_with(strtolower($image), 'assets/')) {
                $image = 'assets/images/product/' . $image;
            }

            return $image;
        };
        $categoryImageMap = [
            'officejet-printer' => 'officejet-printer.png',
            'deskjet-printer' => 'deskjet.png',
        ];
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

    <section class="product-area product-category-showcase pt-115 pb-110">
        <div class="container">
            <div class="product-category-heading text-center">
                <span class="product-category-eyebrow">Explore Our Range</span>
                <h2>Product Categories <span>Designed for Simplicity</span></h2>
                <p>{{ $isAllProductsPage ? 'Explore all HP product types and filter products with simpler navigation.' : 'Explore HP categories with simpler and smarter product navigation.' }}
                </p>
            </div>

            <div class="printer-category-grid">

                @foreach ($printerCategories as $category)
                    @php
                        $categoryImage = $categoryImageMap[$category->url] ?? $category->image ?? $typeFallbackImage;
                        $categoryImage = $categoryImagePath($categoryImage) ?? $categoryImagePath($typeFallbackImage);
                        $categoryFallbackImage = asset($categoryImagePath($typeFallbackImage) ?? 'assets/images/product/printer.png');

                        if ($isAllProductsPage) {
                            $categoryUrl = url('/products') . '?type=' . $category->url;
                        } else {
                            $categoryUrl =
                                (int) $category->parent_id === 0
                                    ? url('products', $category->url)
                                    : url("products/{$typeUrl}", $category->url);
                        }

                        $categoryLabel = strtolower($category->name);
                        $categoryIcon = str_contains($categoryLabel, 'printer')
                            ? 'icon-printer'
                            : (str_contains($categoryLabel, 'scanner') ? 'icon-docs' : 'icon-screen-desktop');
                    @endphp
                    <div class="printer-category-item">
                        <div
                            class="single-product-wrap printer-category-card {{ $isAllProductsPage && $selectedType === $category->url ? 'active-filter-card' : '' }} mb-35">
                            <span class="printer-category-icon"><i class="{{ $categoryIcon }}"></i></span>
                            <div class="product-img product-img-zoom">
                                <a href="{{ $categoryUrl }}">
                                    <img src="{{ asset($categoryImage) }}"
                                        alt="{{ $category->name }}"
                                        onerror="this.onerror=null;this.src='{{ $categoryFallbackImage }}';">
                                </a>
                            </div>

                            <div class="product-content-2 text-center">
                                <h3>
                                    <a href="{{ $categoryUrl }}">
                                        <span class="blod">{{ $category->name }}</span>
                                    </a>
                                </h3>

                                <p>{{ $category->description }}</p>
                                <a class="printer-category-link" href="{{ $categoryUrl }}">
                                    Explore {{ $category->name }} <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    {{-- all-products-list --}}

    <div class="product-area printer-products-area compact-product-cards pb-80">
        <div class="container">
            <div class="product-collection-heading">
                <div class="product-collection-heading__copy">
                    <span class="product-collection-eyebrow">Curated Technology</span>
                    <h2>
                        Explore Our
                        <span>{{ $isAllProductsPage && ! $productType ? 'Product' : $typeName }} Collection</span>
                    </h2>
                    <p>{{ $isAllProductsPage ? ($productType ? 'Latest ' . $typeName . ' products selected for your needs.' : 'Explore our complete technology product collection.') : 'Latest ' . $typeName . ' products selected for home and office use.' }}
                    </p>
                </div>
                <div class="product-collection-count">
                    <strong>{{ $products->count() }}</strong>
                    <span>{{ \Illuminate\Support\Str::plural('Product', $products->count()) }}</span>
                </div>
            </div>

            <div class="tab-content jump">
                <div id="product-1" class="tab-pane active">
                    <div class="row">

                        @foreach ($products as $product)
                            @php
                                $productImages = collect($product->imagePaths());

                                $productImage = $productImages->first();

                                $productDetailsTypeUrl = $isAllProductsPage
                                    ? \Illuminate\Support\Str::slug($product->parent_cat ?: $typeUrl)
                                    : $typeUrl;
                            @endphp
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <article class="single-product-wrap printer-product-card theme-product-card js-product-gallery-card mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="{{ url("products/{$productDetailsTypeUrl}/details", $product->slug) }}">
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

                                    <div class="product-content-wrap-2 theme-product-card__content">
                                        <div class="printer-product-category">
                                            {{ $product->category_name ?? $product->parent_cat }}
                                        </div>

                                        <h3>
                                            <a
                                                href="{{ url("products/{$productDetailsTypeUrl}/details", $product->slug) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h3>

                                        <div class="product-price-2 printer-product-price-stock">
                                            <span>${{ number_format($product->price, 2) }}</span>
                                            <span class="printer-stock-badge {{ $product->stock_status === 'available' ? '' : 'is-unavailable' }}">
                                                {{ $product->stock_status === 'available' ? 'In Stock' : 'Out of Stock' }}
                                            </span>
                                        </div>
                                        <a class="theme-product-card__link"
                                            href="{{ url("products/{$productDetailsTypeUrl}/details", $product->slug) }}">
                                            <i class="icon-arrow-right-circle"></i>
                                            View Details
                                        </a>
                                    </div>
                                </article>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
