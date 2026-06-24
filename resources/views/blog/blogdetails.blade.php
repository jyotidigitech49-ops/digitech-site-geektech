@extends('layouts.app')
@section('title', $blogDetails['heading'] ?? 'Blog Details')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/blogdetails.css') }}">
@endpush

@section('content')
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
                            <div class="blog-details-img">
                                <img alt="{{ $blogDetails['heading'] ?? 'Blog image' }}" src="{{ $blogDetails['images']['main'] }}">
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

                        <div class="dec-img-wrapper">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="dec-img mb-50">
                                        <img alt="{{ $blogDetails['heading'] ?? 'Blog image' }}" src="{{ $blogDetails['images']['secondary'] }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="dec-img mb-50">
                                        <img alt="{{ $blogDetails['heading'] ?? 'Blog image' }}" src="{{ $blogDetails['images']['third'] }}">
                                    </div>
                                </div>
                            </div>

                            @if (! empty($blogDetails['excerpt']))
                                <p>{{ $blogDetails['excerpt'] }}</p>
                            @endif
                        </div>

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
