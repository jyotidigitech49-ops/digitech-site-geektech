@extends('layouts.app')
@section('title', $dmcaPolicy['title'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/dmca-copyright-policy.css') }}">
@endpush

@section('content')
    <section class="dmca-policy-banner" style="background-image: url('{{ $bannerImage }}');">
        <div class="dmca-policy-banner__overlay"></div>
        <div class="dmca-policy-banner__content">
            <h1>{{ $dmcaPolicy['title'] }}</h1>
            <div class="dmca-policy-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>DMCA COPYRIGHT POLICY</span>
            </div>
        </div>
    </section>

    <section class="dmca-policy-page">
        <div class="container">
            <div class="dmca-policy-layout">
                <aside class="dmca-policy-summary">
                    <span class="dmca-policy-kicker">Policy Date</span>
                    <strong>{{ $dmcaPolicy['date'] }}</strong>
                    <p>{{ $dmcaPolicy['summary'] }}</p>
                    <a href="{{ url('/contact-us') }}">Contact Us</a>
                </aside>

                <div class="dmca-policy-content">
                    <article class="dmca-policy-intro">
                        <span class="dmca-policy-kicker">Introduction</span>
                        @foreach ($dmcaPolicy['intro'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </article>

                    <div class="dmca-policy-grid">
                        @foreach ($dmcaPolicy['sections'] as $section)
                            <article class="dmca-policy-card {{ !empty($section['highlight']) ? 'dmca-policy-card--highlight' : '' }}">
                                <h2>{{ $section['title'] }}</h2>

                                @foreach (($section['body'] ?? []) as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach

                                @if (!empty($section['items']))
                                    <ul class="dmca-policy-list">
                                        @foreach ($section['items'] as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                @if (!empty($section['note']))
                                    <p class="dmca-policy-note">{{ $section['note'] }}</p>
                                @endif

                                @if (!empty($section['contact']))
                                    <div class="dmca-policy-contact">
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
