@extends('layouts.app')
@section('title', 'Contact')
@section('content')

    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact Us </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-area pt-115 pb-120">
        <div class="container">
            <div class="contact-info-wrap-3 pb-85">
                <h3>contact info</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-contact-info-3 text-center mb-30">
                            <i class="icon-location-pin "></i>
                            <h4>our address</h4>
                            <p>77 seventh Street, USA. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-contact-info-3 extra-contact-info text-center mb-30">
                            <ul>
                                <li><i class="icon-screen-smartphone"></i> 716-298-1822 </li>
                                <li><i class="icon-envelope "></i> <a href="#"> info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-contact-info-3 text-center mb-30">
                            <i class="icon-clock "></i>
                            <h4>openning hour</h4>
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
                <iframe class="map-size"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.693667617067!2d144.946279515845!3d-37.82064364221098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4cee0cec83%3A0xd019c5f69915a4a0!2sCollins%20St%2C%20West%20Melbourne%20VIC%203003%2C%20Australia!5e0!3m2!1sen!2sbd!4v1607512676761!5m2!1sen!2sbd">
                </iframe>
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
                var formData = $(this).serialize();
                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#success-message').html(
                            '<p class="text-success">Your message has been sent successfully!</p>'
                            );
                        $('#contact-form')[0].reset();
                    },
                    error: function(xhr) {
                        $('#success-message').html(
                            '<p class="text-danger">An error occurred while sending your message.</p>'
                            );
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
