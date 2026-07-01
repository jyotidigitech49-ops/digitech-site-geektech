@extends('layouts.app')
@section('title', $quotePolicy['title'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/quote-request-policy.css') }}">
@endpush

@section('content')
    <section class="quote-policy-banner" style="background-image: url('{{ $bannerImage }}');">
        <div class="quote-policy-banner__overlay"></div>
        <div class="quote-policy-banner__content">
            <h1>{{ $quotePolicy['title'] }}</h1>
            <div class="quote-policy-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>QUOTE REQUEST POLICY</span>
            </div>
        </div>
    </section>

    <section class="quote-policy-page">
        <div class="container">
            <div class="quote-policy-layout">
                <aside class="quote-policy-summary">
                    <span class="quote-policy-kicker">Date</span>
                    <strong>{{ $quotePolicy['date'] }}</strong>
                </aside>

                <div class="quote-policy-content">
                    <article class="quote-policy-intro">
                        <span class="quote-policy-kicker">Introduction</span>
                        @foreach ($quotePolicy['intro'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </article>

                    <div class="quote-policy-grid">
                        @foreach ($quotePolicy['sections'] as $section)
                            <article class="quote-policy-card {{ !empty($section['highlight']) ? 'quote-policy-card--highlight' : '' }}">
                                <h2>{{ $section['title'] }}</h2>

                                @foreach (($section['body'] ?? []) as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach

                                @if (!empty($section['items']))
                                    <ul class="quote-policy-list">
                                        @foreach ($section['items'] as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                @if (!empty($section['note']))
                                    <p class="quote-policy-note">{{ $section['note'] }}</p>
                                @endif

                                @foreach (($section['notes'] ?? []) as $note)
                                    <p class="quote-policy-note">{{ $note }}</p>
                                @endforeach

                                @if (!empty($section['link']))
                                    <a class="quote-policy-inline-link" href="{{ $section['link']['url'] }}">{{ $section['link']['label'] }}</a>
                                @endif

                                @if (!empty($section['contact']))
                                    <div class="quote-policy-contact">
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
