@extends('layouts.app')
@section('title', $disclaimer['title'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/disclaimer.css') }}">
@endpush

@section('content')
    <section class="disclaimer-banner" style="background-image: url('{{ $bannerImage }}');">
        <div class="disclaimer-banner__overlay"></div>
        <div class="disclaimer-banner__content">
            <h1>{{ $disclaimer['title'] }}</h1>
            <div class="disclaimer-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>DISCLAIMER</span>
            </div>
        </div>
    </section>

    <section class="disclaimer-page">
        <div class="container">
            <div class="disclaimer-header-card">
                <div>
                    <span class="disclaimer-kicker">Policy Date</span>
                    <h2>{{ $disclaimer['date'] }}</h2>
                </div>
                <p>{{ $disclaimer['summary'] ?? 'Website information is provided for general informational, educational, and business reference purposes only.' }}</p>
            </div>

            <article class="disclaimer-intro">
                <span class="disclaimer-kicker">Introduction</span>
                @foreach ($disclaimer['intro'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </article>

            <div class="disclaimer-grid">
                @foreach ($disclaimer['sections'] as $section)
                    <article class="disclaimer-card">
                        <h2>{{ $section['title'] }}</h2>

                        @foreach (($section['body'] ?? []) as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach

                        @if (!empty($section['items']))
                            <ul class="disclaimer-list">
                                @foreach ($section['items'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if (!empty($section['note']))
                            <p class="disclaimer-note">{{ $section['note'] }}</p>
                        @endif

                        @if (!empty($section['contact']))
                            <div class="disclaimer-contact-box">
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
    </section>
@endsection
