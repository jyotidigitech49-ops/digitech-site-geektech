@extends('layouts.app')
@section('title', 'Website Sitemap')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/sitemap.css') }}">
@endpush

@section('content')
    <section class="sitemap-page">
        <div class="sitemap-shell">
            <div class="sitemap-heading">
                <span class="sitemap-kicker">Explore</span>
                <h1>Website Sitemap</h1>
                <p>Easily explore all pages, categories, products, blogs, and important resources of Geek Techbuzz.</p>
            </div>

            <div class="sitemap-search">
                <input type="search" id="sitemapSearch" placeholder="Search sitemap links..." aria-label="Search sitemap links">
                <span class="sitemap-search__icon"></span>
            </div>

            <div class="sitemap-grid" id="sitemapGrid">
                <article class="sitemap-card">
                    <div class="sitemap-card__top">
                        <span class="sitemap-card__mark sitemap-card__mark--pages"></span>
                        <h2>Main Pages</h2>
                    </div>
                    <ul class="sitemap-list">
                        @foreach ($mainPages as $page)
                            <li class="sitemap-entry" data-sitemap-text="{{ strtolower($page['title']) }}">
                                <a class="sitemap-link" href="{{ $page['url'] }}">{{ $page['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </article>

                <article class="sitemap-card sitemap-card--featured">
                    <div class="sitemap-card__top">
                        <span class="sitemap-card__mark sitemap-card__mark--products"></span>
                        <h2>Product Categories</h2>
                    </div>
                    <ul class="sitemap-list sitemap-list--tree">
                        @foreach ($productCategories as $category)
                            <li class="sitemap-entry" data-sitemap-text="{{ $category['search_text'] }}">
                                <a class="sitemap-group" href="{{ $category['url'] }}">{{ $category['title'] }}</a>

                                @if (!empty($category['children']))
                                    <ul class="sitemap-sublist">
                                        @foreach ($category['children'] as $child)
                                            <li>
                                                <a class="sitemap-link" href="{{ $child['url'] }}">{{ $child['title'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </article>

                <article class="sitemap-card">
                    <div class="sitemap-card__top">
                        <span class="sitemap-card__mark sitemap-card__mark--policies"></span>
                        <h2>Important Policies</h2>
                    </div>
                    <ul class="sitemap-list">
                        @foreach ($policies as $policy)
                            <li class="sitemap-entry" data-sitemap-text="{{ strtolower($policy['title']) }}">
                                <a class="sitemap-doc" href="{{ $policy['url'] }}">{{ $policy['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </article>
            </div>

            <p class="sitemap-empty" id="sitemapEmpty">No sitemap links found.</p>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var searchInput = document.getElementById('sitemapSearch');
            var entries = Array.prototype.slice.call(document.querySelectorAll('.sitemap-entry'));
            var cards = Array.prototype.slice.call(document.querySelectorAll('.sitemap-card'));
            var emptyState = document.getElementById('sitemapEmpty');

            if (!searchInput) {
                return;
            }

            searchInput.addEventListener('input', function () {
                var query = searchInput.value.trim().toLowerCase();
                var visibleCount = 0;

                entries.forEach(function (entry) {
                    var text = entry.getAttribute('data-sitemap-text') || entry.textContent.toLowerCase();
                    var isVisible = !query || text.indexOf(query) !== -1;

                    entry.hidden = !isVisible;
                    if (isVisible) {
                        visibleCount++;
                    }
                });

                cards.forEach(function (card) {
                    var hasVisibleEntry = card.querySelector('.sitemap-entry:not([hidden])');
                    card.hidden = !hasVisibleEntry;
                });

                emptyState.classList.toggle('is-visible', visibleCount === 0);
            });
        });
    </script>
@endpush
