@extends('layouts.app')
@section('title', 'Blog Details')

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/pages/blogdetails.css') }}"> --}}
@endpush

@section('content')
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Blog details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <div class="blog-details-wrapper">
                        <div class="blog-details-top">
                            <div class="blog-details-img">
                                <img alt="" src="assets/images/blog/blog-details.jpg">
                            </div>
                            <div class="blog-details-content">
                                <div class="blog-meta-2">
                                    <ul>
                                        <li>News</li>
                                        <li>May 25, 2022</li>
                                    </ul>
                                </div>
                                <h1>Five things you only know if you’re at Chanel's Hamburg Show</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprhendit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qei officia deser mollit
                                    anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam. </p>
                                <blockquote>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor
                                    incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud.</blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>
                        </div>
                        <div class="dec-img-wrapper">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="dec-img mb-50">
                                        <img alt="" src="assets/images/blog/blog-details-2.jpg">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="dec-img mb-50">
                                        <img alt="" src="assets/images/blog/blog-details-3.jpg">
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>

                        <div class="next-previous-post">
                            <a href="#"> <i class="fa fa-angle-left"></i> prev post</a>
                            <a href="#">next post <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
