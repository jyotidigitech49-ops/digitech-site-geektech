@extends('layouts.app')
@section('title', 'Contact Us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/contact.css') }}">
@endpush

@section('content')

    <section class="contact-banner">
        <div class="contact-banner__overlay"></div>
        <div class="contact-banner__content">
            <h1>Contact Us</h1>
            <div class="contact-banner__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>CONTACT US</span>
            </div>
        </div>
    </section>

    <div class="contact-area pt-115 pb-120">
        <div class="container">
            <div class="contact-info-wrap-3 pb-85">
                <h3>contact info</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-contact-info-3 text-center mb-30">
                            <i class="icon-location-pin "></i>
                            <h4>our address</h4>
                            <p>196 Tosto RD, Beaufort, NC 28526</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-contact-info-3 extra-contact-info text-center mb-30">
                            <ul>
                                <li><i class="icon-screen-smartphone"></i> Contact our support team </li>
                                <li><i class="icon-envelope "></i> <a href="mailto:info@geektechbuzz.us">info@geektechbuzz.us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-contact-info-3 text-center mb-30">
                            <i class="icon-clock "></i>
                            <h4>opening hours</h4>
                            <p>Monday - Friday. 9:00am - 5:00pm </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="get-in-touch-wrap">
                <h3>Get In Touch</h3>
                <div class="contact-from contact-shadow">
                    <form id="contact-form" action="{{ url('/contact-submit') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input name="name" type="text" placeholder="Name">
                                <small class="text-danger name_error"></small>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input name="email" type="email" placeholder="Email">
                                <small class="text-danger email_error"></small>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <input name="subject" type="text" placeholder="Subject">
                                <small class="text-danger subject_error"></small>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <textarea name="message" placeholder="Your Message"></textarea>
                                <small class="text-danger message_error"></small>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button class="submit" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                    {{-- <p class="form-messege"></p> --}}
                    <div id="success-message"></div>
                </div>
            </div>
            <div class="contact-map pt-120">
                <div class="contact-map-card">
                    <div class="contact-map-info">
                        <span>Our Location</span>
                        <h3>Visit Eagles Repair</h3>
                        <p>Find us at 196 Tosto RD, Beaufort, NC 28526. Use the map below for quick directions and nearby location context.</p>
                        <a href="https://www.google.com/maps/search/?api=1&query=196%20Tosto%20RD%2C%20Beaufort%2C%20NC%2028526" target="_blank" rel="noopener">Open in Google Maps</a>
                    </div>
                    <div class="contact-map-frame">
                        <iframe class="map-size"
                            src="https://www.google.com/maps?q=196%20Tosto%20RD%2C%20Beaufort%2C%20NC%2028526&output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contact-form').on('submit', function(e) {
                e.preventDefault();

                $('.text-danger').text('');
                $('#success-message').html('');

                const form = $(this);
                const submitButton = form.find('.submit');

                $.ajax({
                    url: form.attr('action'),
                    method: 'POST',
                    data: form.serialize(),
                    dataType: 'json',
                    headers: {
                        'Accept': 'application/json'
                    },
                    beforeSend: function() {
                        submitButton.prop('disabled', true).text('Sending...');
                    },
                    success: function(response) {
                        $('#success-message').html(
                            '<p class="text-success">' + (response.message || 'Your message has been sent successfully!') + '</p>'
                        );
                        form[0].reset();
                    },
                    error: function(xhr) {
                        if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                $('.' + key + '_error').text(value[0]);
                            });
                        } else {
                            $('#success-message').html(
                                '<p class="text-danger">Something went wrong. Please try again.</p>'
                            );
                        }
                    },
                    complete: function() {
                        submitButton.prop('disabled', false).text('Send Message');
                    }
                });
            });
        });

        // $(document).ready(function() {

        //     $('#contact-form').on('submit', function(e) {
        //         e.preventDefault();

        //         $('.text-danger').text('');
        //         $('#success-message').html('');

        //         $.ajax({
        //             url: $(this).attr('action'),
        //             method: 'POST',
        //             data: $(this).serialize(),

        //             beforeSend: function() {
        //                 $('.submit').prop('disabled', true).text('Sending...');
        //             },

        //             success: function(response) {
        //                 $('#success-message').html(
        //                     '<p class="text-success">' + response.message + '</p>'
        //                 );

        //                 $('#contact-form')[0].reset();
        //             },

        //             error: function(xhr) {
        //                 if (xhr.status === 422) {
        //                     let errors = xhr.responseJSON.errors;

        //                     $.each(errors, function(key, value) {
        //                         $('.' + key + '_error').text(value[0]);
        //                     });
        //                 } else {
        //                     $('#success-message').html(
        //                         '<p class="text-danger">Something went wrong. Please try again.</p>'
        //                     );
        //                 }
        //             },

        //             complete: function() {
        //                 $('.submit').prop('disabled', false).text('Send Message');
        //             }
        //         });
        //     });

        // });
    </script>
@endpush
