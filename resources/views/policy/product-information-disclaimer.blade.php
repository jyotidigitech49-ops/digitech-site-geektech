@extends('layouts.app')
@section('title', $productDisclaimer['title'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/product-information-disclaimer.css') }}">
@endpush

@section('content')
    <section class="product-info-policy-banner">
        <div class="product-info-policy-banner__overlay"></div>
        <div class="product-info-policy-banner__content">
            <h1>{{ $productDisclaimer['title'] }}</h1>
            <div class="product-info-policy-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>PRODUCT INFORMATION DISCLAIMER</span>
            </div>
        </div>
    </section>

    <section class="product-info-policy-page">
        <div class="container">
            <div class="product-info-policy-layout">
                <aside class="product-info-policy-summary">
                    <span class="product-info-policy-kicker">Disclaimer Date</span>
                    <strong>{{ $productDisclaimer['date'] }}</strong>
                    <p>Product names, specifications, images, compatibility notes, and availability details are shared for reference only.</p>
                    <a href="{{ url('/products') }}">Browse Products</a>
                </aside>

                <div class="product-info-policy-content">
                    <article class="product-info-policy-intro">
                        <span class="product-info-policy-kicker">Introduction</span>
                        @foreach ($productDisclaimer['intro'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </article>

                    <div class="product-info-policy-grid">
                        @foreach ($productDisclaimer['sections'] as $section)
                            <article class="product-info-policy-card {{ !empty($section['highlight']) ? 'product-info-policy-card--highlight' : '' }}">
                                <h2>{{ $section['title'] }}</h2>

                                @foreach (($section['body'] ?? []) as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach

                                @if (!empty($section['items']))
                                    <ul class="product-info-policy-list">
                                        @foreach ($section['items'] as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                @if (!empty($section['note']))
                                    <p class="product-info-policy-note">{{ $section['note'] }}</p>
                                @endif

                                @if (!empty($section['contact']))
                                    <div class="product-info-policy-contact">
                                        @foreach ($section['contact'] as $label => $value)
                                            <div>
                                                <span>{{ $label }}</span>
                                                <strong>{{ $value }}</strong>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
