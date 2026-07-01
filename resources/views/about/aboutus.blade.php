@extends('layouts.app')
@section('title','About Us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/aboutus.css') }}">
@endpush

@section('content')

{{-- Page Banner --}}
    <section class="about-page-banner" style="background-image: url('{{ $bannerImage }}');">
        <div class="about-page-banner__overlay"></div>
        <div class="about-page-banner__content">
            <h1>About Us</h1>
            <div class="about-page-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>ABOUT US</span>
            </div>
        </div>
    </section>

    <section class="about-hero">
        <div class="container">
            <div class="about-hero__grid">
                <div class="about-brand-card">
                    <div class="about-brand-card__image">
                        <img src="{{ $heroImage }}" alt="Printer collection">
                    </div>
                </div>

                <div class="about-hero__content">
                    <span class="about-eyebrow">{{ $intro['eyebrow'] }}</span>
                    <h1>{{ $intro['title'] }}</h1>
                    <p>{{ $intro['description'] }}</p>
                    <a class="about-primary-btn" href="{{ url('/products') }}">Explore Products</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-feature-section">
        <div class="container">
            <div class="about-feature-grid">
                @foreach ($features as $feature)
                    <div class="about-feature-card">
                        <span class="about-feature-card__icon"><i class="{{ $feature['icon'] }}"></i></span>
                        <div>
                            <h3>{{ $feature['title'] }}</h3>
                            <p>{{ $feature['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- banner section cards --}}
    <section class="about-banner-section">
        <div class="container">
            <div class="about-banner-grid">
                @foreach ($banners as $banner)
                    <article class="about-banner">
                        <div class="about-banner__content">
                            <span>{{ $banner['label'] }}</span>
                            <h2>{{ $banner['title'] }}</h2>
                            <p>{{ $banner['description'] }}</p>
                            <a href="{{ $banner['url'] }}">{{ $banner['button'] }} <i class="icon-arrow-right"></i></a>
                        </div>
                        <div class="about-banner__image">
                            <img src="{{ $banner['image'] }}" alt="{{ $banner['title'] }}">
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="about-details-section">
        <div class="container">
            <div class="about-details-grid">
                <article class="about-copy-card about-copy-card--large">
                    <span class="about-copy-card__number">01</span>
                    <h2>{{ $collection['title'] }}</h2>
                    <p>{{ $collection['description'] }}</p>
                </article>

                <article class="about-copy-card">
                    <span class="about-copy-card__number">02</span>
                    <h2>{{ $whyChoose['title'] }}</h2>
                    <p>{{ $whyChoose['description'] }}</p>
                </article>
            </div>

            <div class="about-choice-grid">
                @foreach ($whyChoose['points'] as $point)
                    <article class="about-choice-card">
                        <span></span>
                        <h3>{{ $point['title'] }}</h3>
                        <p>{{ $point['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA -banner-Section --}}
    <section class="about-cta-section">
        <div class="container">
            <div class="about-cta">
                <div class="about-cta__content">
                    <h2>{{ $cta['title'] }}</h2>
                    <p>{!! $cta['description'] !!}</p>
                    <a class="about-primary-btn about-primary-btn--light" href="{{ $cta['url'] }}">{{ $cta['button'] }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
