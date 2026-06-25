@extends('layouts.app')
@section('title', $policy['title'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/privacy-policy.css') }}">
@endpush

@section('content')
    <section class="privacy-banner">
        <div class="privacy-banner__overlay"></div>
        <div class="privacy-banner__content">
            <h1>{{ $policy['title'] }}</h1>
            <div class="privacy-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>PRIVACY POLICY</span>
            </div>
        </div>
    </section>

    <section class="privacy-page">
        <div class="container">
            <div class="privacy-layout">
                <aside class="privacy-summary">
                    <span class="privacy-summary__label">Policy Date</span>
                    <strong>{{ $policy['date'] }}</strong>
                    <p>Review how Eagles Repair collects, uses, stores, shares, and protects website information.</p>
                    <a href="{{ url('/contact-us') }}">Contact Us</a>
                </aside>

                <div class="privacy-content">
                    <article class="privacy-card privacy-card--intro">
                        <span class="privacy-kicker">Introduction</span>
                        @foreach ($policy['intro'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </article>

                    @foreach ($policy['sections'] as $section)
                        <article class="privacy-card">
                            <h2>{{ $section['title'] }}</h2>

                            @foreach (($section['body'] ?? []) as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach

                            @if (!empty($section['groups']))
                                <div class="privacy-group-grid">
                                    @foreach ($section['groups'] as $group)
                                        <div class="privacy-mini-card">
                                            <h3>{{ $group['title'] }}</h3>
                                            @if (!empty($group['description']))
                                                <p>{{ $group['description'] }}</p>
                                            @endif
                                            @if (!empty($group['items']))
                                                <ul>
                                                    @foreach ($group['items'] as $item)
                                                        <li>{{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                            @if (!empty($group['note']))
                                                <p class="privacy-note">{{ $group['note'] }}</p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            @if (!empty($section['items']))
                                <ul class="privacy-list">
                                    @foreach ($section['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            @if (!empty($section['note']))
                                <p class="privacy-note">{{ $section['note'] }}</p>
                            @endif

                            @if (!empty($section['contact']))
                                <div class="privacy-contact-box">
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
