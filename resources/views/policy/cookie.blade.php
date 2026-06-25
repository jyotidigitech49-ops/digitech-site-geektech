@extends('layouts.app')
@section('title', $cookiePolicy['title'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/cookie-policy.css') }}">
@endpush

@section('content')
    <section class="cookie-banner">
        <div class="cookie-banner__overlay"></div>
        <div class="cookie-banner__content">
            <h1>{{ $cookiePolicy['title'] }}</h1>
            <div class="cookie-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>COOKIE POLICY</span>
            </div>
        </div>
    </section>

    <section class="cookie-page">
        <div class="container">
            <div class="cookie-layout">
                <aside class="cookie-summary">
                    <span class="cookie-kicker">Policy Date</span>
                    <strong>{{ $cookiePolicy['date'] }}</strong>
                    <p>Understand how cookies support performance, security, preferences, and website improvements.</p>
                    <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                </aside>

                <div class="cookie-content">
                    <article class="cookie-intro-card">
                        <span class="cookie-kicker">Introduction</span>
                        @foreach ($cookiePolicy['intro'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </article>

                    @foreach ($cookiePolicy['sections'] as $section)
                        <article class="cookie-card">
                            <h2>{{ $section['title'] }}</h2>

                            @foreach (($section['body'] ?? []) as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach

                            @if (!empty($section['groups']))
                                <div class="cookie-type-grid">
                                    @foreach ($section['groups'] as $group)
                                        <div class="cookie-type-card">
                                            <span class="cookie-type-card__icon"></span>
                                            <h3>{{ $group['title'] }}</h3>
                                            <p>{{ $group['description'] }}</p>

                                            @if (!empty($group['items']))
                                                <ul>
                                                    @foreach ($group['items'] as $item)
                                                        <li>{{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif

                                            @if (!empty($group['note']))
                                                <p class="cookie-note">{{ $group['note'] }}</p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            @if (!empty($section['items']))
                                <ul class="cookie-list">
                                    @foreach ($section['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            @if (!empty($section['contact']))
                                <div class="cookie-contact-box">
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
    </section>
@endsection
