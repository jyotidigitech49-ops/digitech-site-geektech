@extends('layouts.app')
@section('title', $warrantyPolicy['title'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/warranty-manufacturer-information.css') }}">
@endpush

@section('content')
    <section class="warranty-policy-banner">
        <div class="warranty-policy-banner__overlay"></div>
        <div class="warranty-policy-banner__content">
            <h1>{{ $warrantyPolicy['title'] }}</h1>
            <div class="warranty-policy-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>WARRANTY AND MANUFACTURER INFORMATION</span>
            </div>
        </div>
    </section>

    <section class="warranty-policy-page">
        <div class="container">
            <div class="warranty-policy-layout">
                <aside class="warranty-policy-summary">
                    <span class="warranty-policy-kicker">Disclaimer Date</span>
                    <strong>{{ $warrantyPolicy['date'] }}</strong>
                    <p>{{ $warrantyPolicy['summary'] }}</p>
                    <a href="{{ url('/products') }}">Browse Products</a>
                </aside>

                <div class="warranty-policy-content">
                    <article class="warranty-policy-intro">
                        <span class="warranty-policy-kicker">Introduction</span>
                        @foreach ($warrantyPolicy['intro'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </article>

                    <div class="warranty-policy-grid">
                        @foreach ($warrantyPolicy['sections'] as $section)
                            <article class="warranty-policy-card {{ !empty($section['highlight']) ? 'warranty-policy-card--highlight' : '' }}">
                                <h2>{{ $section['title'] }}</h2>

                                @foreach (($section['body'] ?? []) as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach

                                @if (!empty($section['items']))
                                    <ul class="warranty-policy-list">
                                        @foreach ($section['items'] as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                @if (!empty($section['note']))
                                    <p class="warranty-policy-note">{{ $section['note'] }}</p>
                                @endif

                                @if (!empty($section['contact']))
                                    <div class="warranty-policy-contact">
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
