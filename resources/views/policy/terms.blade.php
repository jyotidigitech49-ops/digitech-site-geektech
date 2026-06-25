@extends('layouts.app')
@section('title', $terms['title'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/terms-conditions.css') }}">
@endpush

@section('content')
    <section class="terms-banner">
        <div class="terms-banner__overlay"></div>
        <div class="terms-banner__content">
            <h1>{{ $terms['title'] }}</h1>
            <div class="terms-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>TERMS AND CONDITIONS</span>
            </div>
        </div>
    </section>

    <section class="terms-page">
        <div class="container">
            <div class="terms-layout">
                <aside class="terms-summary">
                    <span class="terms-summary__label">Effective Date</span>
                    <strong>{{ $terms['date'] }}</strong>
                    <p>Understand the rules, responsibilities, and conditions for using Eagles Repair.</p>
                    <a href="{{ url('/contact-us') }}">Contact Us</a>
                </aside>

                <div class="terms-content">
                    <article class="terms-card terms-card--intro">
                        <span class="terms-kicker">Introduction</span>
                        @foreach ($terms['intro'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </article>

                    @foreach ($terms['sections'] as $section)
                        <article class="terms-card">
                            <h2>{{ $section['title'] }}</h2>

                            @foreach (($section['body'] ?? []) as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach

                            @if (!empty($section['items']))
                                <ul class="terms-list">
                                    @foreach ($section['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            @if (!empty($section['note']))
                                <p class="terms-note">{{ $section['note'] }}</p>
                            @endif

                            @if (!empty($section['link']))
                                <a class="terms-inline-link" href="{{ $section['link']['url'] }}">{{ $section['link']['label'] }}</a>
                            @endif

                            @if (!empty($section['contact']))
                                <div class="terms-contact-box">
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
