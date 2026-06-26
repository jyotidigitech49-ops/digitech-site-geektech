@extends('layouts.app')
@section('title', 'Blogs')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/blog-list.css') }}">
@endpush

@section('content')

    <section class="blog-list-hero">
        <div class="container">
            <div class="blog-list-hero-content text-center">
                <span>Geek Techbuzz Insights</span>
                <h1>Ideas, Insights & Blogs</h1>
                <p>Explore product highlights, technology guides, and practical updates for smarter digital workflows.</p>
            </div>
        </div>
    </section>

    <section class="blog-list-area">
        <div class="container">
            <div class="section-title-2 text-center mb-45">
                <h2><span>All</span> Blogs</h2>
                <p>Browse the latest articles and open any story for complete details.</p>
            </div>

            <div class="row">
                @forelse ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        @php
                            $blogImages = collect($blog['images'] ?? [])->filter()->values();
                            $blogImage = $blogImages->first();
                        @endphp
                        <article class="blog-list-card js-blog-gallery-card">
                            <a class="blog-list-img" href="{{ $blog['url'] }}">
                                @if ($blogImage)
                                    <img class="js-blog-gallery-img"
                                        src="{{ $blogImage }}"
                                        alt="{{ $blog['heading'] }}"
                                        data-default-src="{{ $blogImage }}"
                                        data-gallery='@json($blogImages)'>
                                @else
                                    <span class="blog-list-image-missing">{{ $blog['heading'] }}</span>
                                @endif
                            </a>

                            <div class="blog-list-content">
                                @if ($blog['date'])
                                    <div class="blog-list-date">
                                        <i class="icon-calendar"></i>
                                        {{ $blog['date'] }}
                                    </div>
                                @endif

                                <h3>
                                    <a href="{{ $blog['url'] }}">{{ $blog['heading'] }}</a>
                                </h3>

                                <p>{{ $blog['excerpt'] }}</p>

                                <a class="blog-list-read" href="{{ $blog['url'] }}">
                                    Read More <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="blog-empty-state text-center">
                            No blogs found.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection
