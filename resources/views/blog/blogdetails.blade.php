@extends('layouts.app')
@section('title', $blogDetails['heading'] ?? 'Blog Details')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/blogdetails.css') }}">
@endpush

@section('content')
    @php
        $blogImages = collect($blogDetails['images'] ?? [])->filter()->values();
        $mainBlogImage = $blogImages->first();
        $detailImages = $blogImages->slice(1)->values();
    @endphp

    <section class="blog-details-banner" style="background-image: url('{{ $bannerImage }}');">
        <div class="blog-details-banner__overlay"></div>
        <div class="blog-details-banner__content">
            <h1>Blog Details</h1>
            <div class="blog-details-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <a href="{{ url('/blogs') }}">BLOGS</a>
                <span>//</span>
                <span>ARTICLE</span>
            </div>
        </div>
    </section>

    <main class="blog-details-page">
        <div class="container">
            <article class="blog-article">
                <header class="blog-article-cover">
                    <div class="blog-article-cover__media">
                        @if ($mainBlogImage)
                            <img
                                alt="{{ $blogDetails['heading'] ?? 'Blog image' }}"
                                src="{{ $mainBlogImage }}">
                        @else
                            <span class="blog-details-image-missing">{{ $blogDetails['heading'] ?? 'Blog image' }}</span>
                        @endif
                    </div>

                    <div class="blog-article-cover__content">
                        <div class="blog-article-meta">
                            <span><i class="icon-book-open"></i>{{ $blogDetails['category'] ?? 'News' }}</span>
                            @if (! empty($blogDetails['date']))
                                <span><i class="icon-calendar"></i>{{ $blogDetails['date'] }}</span>
                            @endif
                        </div>
                        <h2>{{ $blogDetails['heading'] }}</h2>
                        @if (! empty($blogDetails['excerpt']))
                            <p>{{ $blogDetails['excerpt'] }}</p>
                        @endif
                        <a class="blog-back-link" href="{{ url('/blogs') }}">
                            <i class="icon-grid"></i>
                            All Blogs
                        </a>
                    </div>
                </header>

                <div class="blog-article-body">
                    <div class="blog-article-body__heading">
                        <span>Article</span>
                        <h3>Complete Details</h3>
                    </div>
                    <div class="blog-article-sections">
                        @forelse ($blogDetails['content_sections'] ?? [] as $section)
                            <section class="blog-article-section">
                                <h4>{{ $section['title'] }}</h4>
                                <div class="blog-article-section__content">
                                    {!! $section['content'] !!}
                                </div>
                            </section>
                        @empty
                            <section class="blog-article-section">
                                <h4>Article Details</h4>
                                <div class="blog-article-section__content">
                                    {!! $blogDetails['content'] !!}
                                </div>
                            </section>
                        @endforelse
                    </div>
                </div>

                @if ($detailImages->isNotEmpty())
                    <section class="blog-detail-gallery" aria-label="Article gallery">
                        <div class="blog-detail-gallery__heading">
                            <span>Gallery</span>
                            <h3>More From This Story</h3>
                        </div>
                        <div class="row">
                            @foreach ($detailImages as $detailImage)
                                <div class="col-md-6 col-12">
                                    <div class="blog-detail-gallery__image">
                                        <img alt="{{ $blogDetails['heading'] ?? 'Blog image' }}" src="{{ $detailImage }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif

                <nav class="blog-post-navigation" aria-label="Blog post navigation">
                    @if (! empty($blogDetails['previous']))
                        <a class="blog-post-navigation__item blog-post-navigation__item--previous"
                            href="{{ $blogDetails['previous']['url'] }}">
                            <i class="icon-arrow-left"></i>
                            <span>
                                <small>Previous Article</small>
                                <strong>{{ $blogDetails['previous']['heading'] }}</strong>
                            </span>
                        </a>
                    @else
                        <span></span>
                    @endif

                    @if (! empty($blogDetails['next']))
                        <a class="blog-post-navigation__item blog-post-navigation__item--next"
                            href="{{ $blogDetails['next']['url'] }}">
                            <span>
                                <small>Next Article</small>
                                <strong>{{ $blogDetails['next']['heading'] }}</strong>
                            </span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    @endif
                </nav>
            </article>
        </div>
    </main>
@endsection
