@extends('layouts.app')
@section('title', $disclaimer['title'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/trademark-disclaimer.css') }}">
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

    <main class="trademark-document">
        <div class="trademark-document__inner">
            <h1>{{ $disclaimer['title'] }}</h1>
            <p class="trademark-document__date">Date: {{ $disclaimer['date'] }}</p>

            <section class="trademark-document__section">
                <h2>Introduction</h2>
                @foreach ($disclaimer['intro'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </section>

            @foreach ($disclaimer['sections'] as $section)
                <section class="trademark-document__section">
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

                    @if (!empty($section['secondary_description']))
                        <p>{{ $section['secondary_description'] }}</p>
                    @endif

                    @if (!empty($section['secondary_items']))
                        <ul>
                            @foreach ($section['secondary_items'] as $item)
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

                    @if (!empty($section['contact']))
                        <div class="trademark-document__contact">
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
