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

    <main class="quote-document">
        <div class="quote-document__inner">
            <h1>{{ $quotePolicy['title'] }}</h1>
            <p class="quote-document__date">Date: {{ $quotePolicy['date'] }}</p>

            <section class="quote-document__section">
                <h2>Introduction</h2>
                @foreach ($quotePolicy['intro'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </section>

            @foreach ($quotePolicy['sections'] as $section)
                <section class="quote-document__section">
                    <h2>{{ $section['title'] }}</h2>

                    @foreach (($section['body'] ?? []) as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach

                    @if (!empty($section['items']))
                        <ul>
                            @foreach ($section['items'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif

                    @if (!empty($section['note']))
                        <p>{{ $section['note'] }}</p>
                    @endif

                    @foreach (($section['notes'] ?? []) as $note)
                        <p>{{ $note }}</p>
                    @endforeach

                    @if (!empty($section['link']))
                        <p>
                            <a href="{{ $section['link']['url'] }}">{{ $section['link']['label'] }}</a>
                        </p>
                    @endif

                    @if (!empty($section['contact']))
                        <div class="quote-document__contact">
                            @foreach ($section['contact'] as $label => $value)
                                <p>
                                    <strong>{{ $label }}</strong>
                                    <span>{{ $value }}</span>
                                </p>
                            @endforeach
                        </div>
                    @endif
                </section>
            @endforeach
        </div>
    </main>
@endsection
