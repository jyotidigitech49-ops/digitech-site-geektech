@extends('layouts.app')
@section('title', 'Faq')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/faq.css') }}">
@endpush

@section('content')
    <section class="faq-hero" style="background-image: url('{{ $bannerImage }}');">
        <div class="faq-hero__overlay"></div>
        <div class="faq-hero__content">
            <h1>Faq</h1>
            <div class="faq-hero__breadcrumb">
                <a href="{{ url('/') }}">HOME</a>
                <span>//</span>
                <span>FAQ</span>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="faq-container">
            <div class="faq-intro">
                <h2>Everything You Need to Know</h2>
                <p>Find answers to common questions about Eagles Repair, website information, content accessibility, privacy, and how visitors can use the platform for technology-related resources.</p>
            </div>

            <div class="faq-accordion" id="faqAccordion">
                @foreach ($faqs as $faq)
                    <div class="faq-item">
                        <button class="faq-question {{ $loop->first ? '' : 'collapsed' }}" type="button" data-faq-target="#faq-{{ $loop->iteration }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="faq-{{ $loop->iteration }}">
                            <span><strong>{{ $loop->iteration }} .</strong> {{ $faq['question'] }}</span>
                            <span class="faq-question__icon" aria-hidden="true"></span>
                        </button>
                        <div id="faq-{{ $loop->iteration }}" class="collapse {{ $loop->first ? 'show' : '' }}">
                            <div class="faq-answer">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.faq-question').forEach(function (button) {
                button.addEventListener('click', function () {
                    var target = document.querySelector(button.getAttribute('data-faq-target'));

                    if (!target) {
                        return;
                    }

                    var isOpen = target.classList.contains('show');

                    target.classList.toggle('show', !isOpen);
                    button.classList.toggle('collapsed', isOpen);
                    button.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
                });
            });
        });
    </script>
@endpush
