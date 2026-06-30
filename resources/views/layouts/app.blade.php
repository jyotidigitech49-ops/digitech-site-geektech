<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    @php
        $metaTitle = $pageMeta['title'] ?? trim($__env->yieldContent('title', 'Eagles Repair'));
        $metaDescription = $pageMeta['description']
            ?? trim($__env->yieldContent('meta_description', 'Browse printers, desktops, scanners, and business technology solutions.'));
        $metaCanonical = $pageMeta['canonical'] ?? request()->url();
        $metaType = $pageMeta['type'] ?? 'website';
        $metaImage = $pageMeta['image'] ?? asset('assets/images/products_banners/pr01.png');
    @endphp
    <title>{{ $metaTitle }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription }}">
    <link rel="canonical" href="{{ $metaCanonical }}">

    <meta property="og:title" content="{{ $metaTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:type" content="{{ $metaType }}">
    <meta property="og:url" content="{{ $metaCanonical }}">
    <meta property="og:image" content="{{ $metaImage }}">
    <meta property="og:image:alt" content="{{ $metaTitle }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $metaTitle }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $metaImage }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/elegant.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/linear-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/easyzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/footer.css') }}">
    @stack('styles')
</head>

<body>
    <div class="main-wrapper">

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </div>

    <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-v3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-v3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/sticky-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/easyzoom.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        document.querySelectorAll('.js-product-gallery-card').forEach(function (card) {
            var image = card.querySelector('.js-product-gallery-img');

            if (!image) {
                return;
            }

            var gallery = [];

            try {
                gallery = JSON.parse(image.dataset.gallery || '[]');
            } catch (error) {
                gallery = [];
            }

            gallery = gallery.filter(Boolean);

            if (gallery.length < 2) {
                return;
            }

            var timer = null;
            var index = 0;
            var defaultSrc = image.dataset.defaultSrc || gallery[0];

            function showNextImage() {
                index = (index + 1) % gallery.length;
                image.src = gallery[index];
            }

            card.addEventListener('mouseenter', function () {
                clearInterval(timer);
                index = 0;
                showNextImage();
                timer = setInterval(showNextImage, 850);
            });

            card.addEventListener('mouseleave', function () {
                clearInterval(timer);
                timer = null;
                index = 0;
                image.src = defaultSrc;
            });
        });

        document.querySelectorAll('.js-blog-gallery-card').forEach(function (card) {
            var image = card.querySelector('.js-blog-gallery-img');

            if (!image) {
                return;
            }

            var gallery = [];

            try {
                gallery = JSON.parse(image.dataset.gallery || '[]');
            } catch (error) {
                gallery = [];
            }

            gallery = gallery.filter(Boolean);

            if (gallery.length < 2) {
                return;
            }

            var timer = null;
            var index = 0;
            var defaultSrc = image.dataset.defaultSrc || gallery[0];

            function showNextImage() {
                index = (index + 1) % gallery.length;
                image.src = gallery[index];
            }

            card.addEventListener('mouseenter', function () {
                clearInterval(timer);
                index = 0;
                showNextImage();
                timer = setInterval(showNextImage, 850);
            });

            card.addEventListener('mouseleave', function () {
                clearInterval(timer);
                timer = null;
                index = 0;
                image.src = defaultSrc;
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
