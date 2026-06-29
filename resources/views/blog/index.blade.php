@extends('layouts.app')
@section('title', 'Blogs')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/blog-list.css') }}">
@endpush

@section('content')

    <section class="blog-list-banner" style="background-image: url('{{ $bannerImage }}');">
        <div class="blog-list-banner__overlay"></div>
        <div class="blog-list-banner__content">
            <h1>Blogs</h1>
            <div class="blog-list-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>BLOGS</span>
            </div>
        </div>
    </section>

    <section class="blog-list-area">
        <div class="container">
            <div class="blog-list-heading text-center">
                <span class="blog-list-heading__eyebrow">Latest Insights</span>
                <h2>Explore Our <span>Blogs</span></h2>
                <p>Product knowledge, practical technology guides, and useful updates in one place.</p>
            </div>

            <div class="row blog-list-grid">
                @forelse ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        @php
                            $blogImages = collect($blog['images'] ?? [])->filter()->values();
                            $blogImage = $blogImages->first();
                        @endphp
                        <article class="blog-list-card js-blog-gallery-card">
                            <a class="blog-list-img" href="{{ $blog['url'] }}">
                                <span class="blog-list-category">
                                    <i class="icon-book-open"></i>
                                    Insights
                                </span>
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
                                <div class="blog-list-meta">
                                    @if ($blog['date'])
                                        <span>
                                            <i class="icon-calendar"></i>
                                            {{ $blog['date'] }}
                                        </span>
                                    @endif
                                    <span><i class="icon-clock"></i> Quick read</span>
                                </div>

                                <h3>
                                    <a href="{{ $blog['url'] }}">{{ $blog['heading'] }}</a>
                                </h3>

                                <p>{{ $blog['excerpt'] }}</p>

                                <a class="blog-list-read" href="{{ $blog['url'] }}">
                                    Read Article <i class="icon-arrow-right"></i>
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
