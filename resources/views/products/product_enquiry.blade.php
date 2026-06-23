@extends('layouts.app')
@section('title', 'Blog Details')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/product-enquiry.css') }}">
@endpush

@section('content')

<section class="product-enquiry-section">
    <div class="container">
        <div class="row justify-content-center align-items-start g-4">

            <!-- Enquiry Summary -->
            <div class="col-lg-5 col-md-6">
                <h3 class="section-heading">Enquiry Summary</h3>

                <div class="summary-box">
                    <div class="summary-header d-flex justify-content-between">
                        <h6>Product Details</h6>
                        <h6>Info</h6>
                    </div>

                    <div class="summary-product d-flex align-items-center">
                        <div class="product-img">
                            <img src="printer.png" alt="HP LaserJet Printer">
                        </div>
                        <h5>HP LaserJet M209dw Printer</h5>
                    </div>

                    <div class="summary-row d-flex justify-content-between">
                        <strong>Category</strong>
                        <span>Printer</span>
                    </div>

                    <div class="summary-row d-flex justify-content-between">
                        <strong>Support</strong>
                        <span>Dedicated Product Assistance</span>
                    </div>

                    <div class="summary-row d-flex justify-content-between">
                        <strong>Response Time</strong>
                        <span class="blue-text">Response Within 24 Hours</span>
                    </div>

                    <div class="why-box">
                        <h4>Why Enquire With Geek Techbuzz?</h4>

                        <ul>
                            <li>Genuine HP Product Categories</li>
                            <li>Faster Business Enquiry Responses</li>
                            <li>Bulk Quantity Enquiry Support</li>
                            <li>Organized Product Accessibility</li>
                            <li>Dedicated Quote Assistance</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Product Enquiry Form -->
            <div class="col-lg-7 col-md-6">
                <h3 class="section-heading">Product Enquiry Form</h3>

                <p class="form-description">
                    Submit your enquiry details, and our team will review your request regarding
                    product availability, specifications, and quotation-related information.
                </p>

                <form>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label">First Name *</label>
                            <input type="text" class="form-control" placeholder="Enter first name">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Last Name *</label>
                            <input type="text" class="form-control" placeholder="Enter last name">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email Address *</label>
                            <input type="email" class="form-control" placeholder="Enter email address">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Phone Number *</label>
                            <input type="text" class="form-control" placeholder="Enter phone number">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Required Quantity *</label>
                            <input type="number" class="form-control" placeholder="Enter quantity">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Company Name</label>
                            <input type="text" class="form-control" placeholder="Enter company name">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Enquiry Message *</label>
                            <textarea class="form-control enquiry-textarea" placeholder="Write your product enquiry, specifications, requirements, bulk quantity details, etc."></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="submit-btn">
                                Submit Enquiry
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
