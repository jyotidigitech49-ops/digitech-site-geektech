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

    <div class="breadcrumb-area bg-gray blog-details-breadcrumb">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="active">{{ $blogDetails['heading'] ?? 'Blog details' }}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="blog-area blog-details-page pt-120 pb-120">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <div class="blog-details-wrapper">
                        <div class="blog-details-top">
                            <div class="blog-details-img js-blog-gallery-card">
                                @if ($mainBlogImage)
                                    <img class="js-blog-gallery-img"
                                        alt="{{ $blogDetails['heading'] ?? 'Blog image' }}"
                                        src="{{ $mainBlogImage }}"
                                        data-default-src="{{ $mainBlogImage }}"
                                        data-gallery='@json($blogImages)'>
                                @else
                                    <span class="blog-details-image-missing">{{ $blogDetails['heading'] ?? 'Blog image' }}</span>
                                @endif
                            </div>
                            <div class="blog-details-content">
                                <div class="blog-meta-2">
                                    <ul>
                                        <li>{{ $blogDetails['category'] ?? 'News' }}</li>
                                        @if (! empty($blogDetails['date']))
                                            <li>{{ $blogDetails['date'] }}</li>
                                        @endif
                                    </ul>
                                </div>

                                <h1>{{ $blogDetails['heading'] }}</h1>
                                {!! $blogDetails['content'] !!}
                            </div>
                        </div>

                        @if ($detailImages->isNotEmpty() || ! empty($blogDetails['excerpt']))
                            <div class="dec-img-wrapper">
                                @if ($detailImages->isNotEmpty())
                                    <div class="row">
                                        @foreach ($detailImages as $detailImage)
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="dec-img mb-50">
                                                    <img alt="{{ $blogDetails['heading'] ?? 'Blog image' }}" src="{{ $detailImage }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if (! empty($blogDetails['excerpt']))
                                    <p>{{ $blogDetails['excerpt'] }}</p>
                                @endif
                            </div>
                        @endif

                        <div class="next-previous-post">
                            @if (! empty($blogDetails['previous']))
                                <a href="{{ $blogDetails['previous']['url'] }}"><i class="fa fa-angle-left"></i> prev post</a>
                            @else
                                <span></span>
                            @endif

                            @if (! empty($blogDetails['next']))
                                <a href="{{ $blogDetails['next']['url'] }}">next post <i class="fa fa-angle-right"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
