@extends('layouts.app')
@section('title', 'HP OfficeJet 8122e All-in-One Printer')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --pd-blue: #2f73ff;
            --pd-text: #0b0b0f;
            --pd-muted: #777980;
            --pd-line: #e7e7e9;
            --pd-soft: #f7f8fa;
            --pd-shadow: 0 14px 35px rgba(15, 23, 42, 0.06);
        }

        .pd-page {
            font-family: 'Inter', sans-serif;
            color: var(--pd-text);
            background: #fff;
        }

        .pd-breadcrumb {
            border-top: 1px solid #f0f0f0;
            border-bottom: 1px solid var(--pd-line);
            padding: 25px 0;
            background: #fff;
        }

        .pd-container {
            max-width: 1860px;
            margin: 0 auto;
            padding: 0 46px;
        }

        .pd-breadcrumb-list {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 14px;
            list-style: none;
            margin: 0;
            padding: 0;
            font-size: 14px;
            font-weight: 700;
        }

        .pd-breadcrumb-list a {
            color: #777;
            text-decoration: none;
        }

        .pd-breadcrumb-list i {
            color: #777;
            font-size: 13px;
        }

        .pd-breadcrumb-list .active {
            color: #050505;
        }

        .pd-main {
            padding: 76px 0 88px;
        }

        .pd-layout {
            display: grid;
            grid-template-columns: 430px minmax(0, 1fr);
            gap: 48px;
            align-items: start;
        }

        .pd-sidebar-wrap {
            position: sticky;
            top: 104px;
        }

        .pd-sidebar {
            border: 1px solid var(--pd-line);
            border-radius: 16px;
            box-shadow: var(--pd-shadow);
            padding: 18px;
            background: #fff;
        }

        .pd-tab-btn {
            display: flex;
            align-items: center;
            gap: 18px;
            width: 100%;
            min-height: 82px;
            border: 2px solid transparent;
            border-radius: 10px;
            background: transparent;
            color: #2d2d31;
            padding: 0 34px;
            text-align: left;
            font-size: 17px;
            font-weight: 800;
            transition: border-color .2s ease, color .2s ease, background .2s ease;
        }

        .pd-tab-btn + .pd-tab-btn {
            margin-top: 12px;
        }

        .pd-tab-btn i {
            width: 24px;
            font-size: 18px;
            text-align: center;
        }

        .pd-tab-btn:hover,
        .pd-tab-btn.active {
            border-color: var(--pd-blue);
            color: var(--pd-blue);
            background: #fff;
        }

        .pd-panel {
            display: none;
        }

        .pd-panel.active {
            display: block;
        }

        .pd-overview-grid {
            display: grid;
            grid-template-columns: 128px minmax(420px, 1fr) minmax(360px, 520px);
            gap: 32px;
            align-items: start;
        }

        .pd-thumbs {
            position: relative;
            display: grid;
            gap: 20px;
            justify-items: center;
        }

        .pd-thumb-nav {
            width: 38px;
            height: 38px;
            border: 1px solid var(--pd-line);
            border-radius: 50%;
            background: #fff;
            display: grid;
            place-items: center;
            color: #222;
            font-size: 15px;
            box-shadow: 0 8px 22px rgba(15, 23, 42, 0.08);
        }

        .pd-thumb {
            width: 126px;
            height: 126px;
            border: 1px solid var(--pd-line);
            border-radius: 12px;
            background: #fff;
            display: grid;
            place-items: center;
            padding: 16px;
            cursor: pointer;
            transition: border-color .2s ease, transform .2s ease;
        }

        .pd-thumb.active,
        .pd-thumb:hover {
            border: 3px solid var(--pd-blue);
        }

        .pd-thumb img {
            max-width: 100%;
            max-height: 78px;
            object-fit: contain;
        }

        .pd-gallery-main {
            min-height: 520px;
            border: 1px solid var(--pd-line);
            border-radius: 16px;
            background: #fff;
            display: grid;
            place-items: center;
            padding: 56px;
        }

        .pd-gallery-main img {
            width: min(520px, 86%);
            max-height: 390px;
            object-fit: contain;
        }

        .pd-info {
            padding-top: 0;
        }

        .pd-badge {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            min-height: 66px;
            padding: 0 28px;
            border: 1px solid var(--pd-line);
            border-radius: 999px;
            color: #2d2d31;
            font-size: 18px;
            font-weight: 800;
            background: #fff;
        }

        .pd-title {
            margin: 34px 0 20px;
            font-size: clamp(38px, 3.2vw, 58px);
            line-height: 1.08;
            letter-spacing: 0;
            font-weight: 800;
        }

        .pd-lifecycle {
            font-size: 19px;
            line-height: 1.8;
            color: #777;
            font-weight: 800;
        }

        .pd-lifecycle span {
            color: #0b0b0f;
        }

        .pd-summary {
            margin: 34px 0 38px;
            padding-left: 28px;
            border-left: 5px solid #e7e7e9;
            color: #303036;
            font-size: 24px;
            line-height: 1.52;
            font-weight: 500;
        }

        .pd-divider {
            border: 0;
            border-top: 1px solid var(--pd-line);
            margin: 0 0 32px;
        }

        .pd-price-label {
            color: #777;
            font-size: 18px;
            font-weight: 800;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .pd-price {
            margin-top: 10px;
            font-size: 42px;
            line-height: 1;
            font-weight: 800;
        }

        .pd-quote {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 30px;
            padding: 15px 30px;
            border-radius: 999px;
            background: var(--pd-blue);
            color: #fff;
            font-size: 14px;
            font-weight: 800;
            text-decoration: none;
            box-shadow: 0 10px 22px rgba(47, 115, 255, .24);
        }

        .pd-feature-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 46px;
            margin-top: 46px;
            padding: 38px 0 42px;
            border-top: 1px solid var(--pd-line);
            border-bottom: 1px solid var(--pd-line);
        }

        .pd-feature-title {
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .pd-feature-copy {
            margin: 0;
            color: #666a72;
            font-size: 13px;
            line-height: 1.7;
        }

        .pd-notes {
            padding-top: 34px;
            color: #555a63;
            font-size: 13px;
            line-height: 1.9;
        }

        .pd-notes h3 {
            font-size: 15px;
            font-weight: 800;
            margin-bottom: 12px;
            color: #202026;
        }

        .pd-spec-tabs {
            display: flex;
            gap: 42px;
            align-items: center;
            border-bottom: 1px solid var(--pd-line);
            margin-bottom: 24px;
        }

        .pd-spec-tab {
            border: 0;
            background: transparent;
            padding: 0 0 22px;
            color: #666a72;
            font-size: 13px;
            font-weight: 800;
        }

        .pd-spec-tab.active {
            color: var(--pd-blue);
        }

        .pd-spec-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        .pd-spec-table tr:nth-child(10n) {
            background: #f7f7f8;
        }

        .pd-spec-table th,
        .pd-spec-table td {
            padding: 18px 28px;
            vertical-align: top;
            border: 0;
        }

        .pd-spec-table th {
            width: 34%;
            color: #24262b;
            font-weight: 800;
        }

        .pd-spec-table td {
            color: #50555f;
            line-height: 1.65;
            font-weight: 500;
        }

        .pd-section-note {
            border-top: 1px solid var(--pd-line);
            margin-top: 38px;
            padding-top: 30px;
            color: #555a63;
            font-size: 13px;
            line-height: 1.9;
        }

        .pd-section-note h3 {
            color: #202026;
            font-size: 15px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .pd-blog-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 30px;
        }

        .pd-blog-card {
            border: 1px solid var(--pd-line);
            border-radius: 16px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 10px 26px rgba(15, 23, 42, .04);
        }

        .pd-blog-image {
            height: 220px;
            display: grid;
            place-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #edf1f4, #cfd6dd);
        }

        .pd-blog-image img {
            width: 82%;
            max-height: 155px;
            object-fit: contain;
            filter: drop-shadow(0 18px 18px rgba(0, 0, 0, .16));
        }

        .pd-blog-body {
            padding: 28px 30px 32px;
        }

        .pd-blog-date {
            display: flex;
            align-items: center;
            gap: 9px;
            color: #858585;
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 22px;
        }

        .pd-blog-title {
            min-height: 72px;
            color: #09090a;
            font-size: 22px;
            line-height: 1.28;
            font-weight: 800;
            margin: 0 0 20px;
        }

        .pd-blog-copy {
            min-height: 112px;
            color: #777980;
            font-size: 16px;
            line-height: 1.55;
            margin: 0 0 24px;
        }

        .pd-blog-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--pd-blue);
            font-size: 16px;
            font-weight: 800;
            text-decoration: none;
        }

        @media (max-width: 1399px) {
            .pd-layout {
                grid-template-columns: 320px minmax(0, 1fr);
                gap: 30px;
            }

            .pd-overview-grid {
                grid-template-columns: 106px minmax(330px, 1fr);
            }

            .pd-info {
                grid-column: 1 / -1;
                display: grid;
                grid-template-columns: minmax(0, 1fr) 280px;
                gap: 24px;
                align-items: start;
            }

            .pd-info-main {
                min-width: 0;
            }

            .pd-price-box {
                padding-top: 28px;
            }

            .pd-blog-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 991px) {
            .pd-container {
                padding: 0 22px;
            }

            .pd-main {
                padding-top: 38px;
            }

            .pd-layout,
            .pd-overview-grid,
            .pd-info {
                grid-template-columns: 1fr;
            }

            .pd-sidebar-wrap {
                position: static;
            }

            .pd-sidebar {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 8px;
                padding: 10px;
            }

            .pd-tab-btn {
                justify-content: center;
                min-height: 58px;
                padding: 0 10px;
                font-size: 13px;
                gap: 8px;
            }

            .pd-tab-btn + .pd-tab-btn {
                margin-top: 0;
            }

            .pd-thumbs {
                grid-template-columns: repeat(4, 1fr);
            }

            .pd-thumb-nav {
                display: none;
            }

            .pd-thumb {
                width: 100%;
                height: 92px;
            }

            .pd-gallery-main {
                min-height: 360px;
                padding: 30px;
            }

            .pd-title {
                font-size: 36px;
            }

            .pd-summary {
                font-size: 18px;
            }

            .pd-feature-grid,
            .pd-blog-grid {
                grid-template-columns: 1fr;
            }

            .pd-spec-tabs {
                gap: 22px;
                overflow-x: auto;
            }

            .pd-spec-table th,
            .pd-spec-table td {
                display: block;
                width: 100%;
                padding: 12px 16px;
            }

            .pd-spec-table td {
                padding-top: 0;
            }
        }

        @media (max-width: 575px) {
            .pd-breadcrumb-list {
                font-size: 12px;
                gap: 8px;
            }

            .pd-sidebar {
                grid-template-columns: 1fr;
            }

            .pd-title {
                font-size: 31px;
            }

            .pd-badge {
                min-height: 50px;
                font-size: 14px;
            }
        }
    </style>
@endpush

@section('content')
    @php
        $printerImage = asset('assets/images/product/printer.png');
        $thumbs = [
            ['image' => $printerImage, 'label' => 'Front view'],
            ['image' => $printerImage, 'label' => 'Rear view'],
            ['image' => $printerImage, 'label' => 'Scanner view'],
            ['image' => $printerImage, 'label' => 'Tray view'],
        ];

        $features = [
            ['title' => 'Reliable technology uniquely built to work at home', 'copy' => 'Say goodbye to noisy printing and stay focused on your work with quiet mode, dual-band Wi-Fi, and self-healing connectivity.'],
            ['title' => 'Print from your couch with the best print app', 'copy' => 'Print, scan, copy right from your smartphone with the best and easiest-to-use print app for home offices.'],
            ['title' => 'Always be ready to print. Never run out of ink.', 'copy' => 'With an Instant Ink subscription, you can get ink delivered directly to your door before you run out.'],
        ];

        $specs = [
            ['Functions', 'Print, copy, scan'],
            ['Print speed black (draft, letter)', 'Up to 29 ppm'],
            ['Print speed color (draft, letter)', 'Up to 25 ppm'],
            ['Print speed black (ISO, letter)', 'Up to 18 ppm'],
            ['Print speed color (ISO)', 'Up to 10 ppm'],
            ['Print speed duplex (letter)', 'Up to 10 ipm'],
            ['First page out (ready)', 'Black: As fast as 15 sec'],
            ['First page out color (letter, ready)', 'As fast as 18 sec'],
            ['Borderless printing', 'Yes, on Photo and Brochure only, up to 8.5 x 11 in'],
            ['Duplex printing', 'Automatic standard'],
            ['Duty cycle (monthly, letter)', 'Up to 20,000 pages. Duty cycle is the maximum number of pages that can be printed in a month.'],
            ['Recommended monthly page volume', 'Up to 800 pages for optimum device performance.'],
            ['Print technology', 'HP Thermal Inkjet'],
            ['Network capabilities', 'Yes, via built-in Ethernet and wireless 802.11 a/b/g/n/ac'],
            ['Wireless capability', 'Yes, built-in Wi-Fi 802.11 a/b/g/n/ac'],
            ['Print quality black (best)', '1200 x 1200 rendered dpi'],
            ['Print quality color (best)', 'Up to 4800 x 1200 optimized dpi on HP Advance Photo Paper'],
            ['Processor speed', '1.2 GHz'],
            ['Print languages', 'HP PCL3 GUI'],
            ['Mobile printing capability', 'Chrome OS, HP app, Apple AirPrint, Wi-Fi Direct Printing, Mopria certified'],
            ['Display', '2.7 in capacitive touchscreen CGD'],
            ['Connectivity, standard', '1 Ethernet, 1 Hi-Speed USB 2.0, host Wi-Fi 802.11 a/b/g/n/ac'],
            ['Memory', '512 MB'],
            ['Input capacity', 'Up to 225 sheets'],
            ['Output capacity', 'Up to 60 sheets'],
            ['Scan speed (normal, letter)', 'Up to 8 ppm black and up to 3.5 ppm color'],
            ['Power supply type', 'Internal universal power supply'],
            ['Power', 'Input voltage: 100 to 240 VAC, 50/60 Hz'],
            ['Power consumption', '4.07 watts ready, 1.02 watts sleep, 0.11 watts manual-off'],
            ['Energy star certified', 'Yes'],
            ['Sustainability specifications', 'Forest First product, recyclable through HP Planet Partners, contains recycled plastic.'],
            ['Operating humidity range', '20 to 80% RH'],
            ['Operating temperature range', '41 to 104 degrees F'],
            ['Replacement cartridges', 'HP 923 Black, Cyan, Magenta, and Yellow Original Ink Cartridges'],
            ['Manufacturer Warranty', 'One-year limited hardware warranty with support options.'],
            ['Weight', '8.0 kg / 17.6 lb'],
        ];

        $blogs = [
            ['title' => 'How the HP OfficeJet 8122e All-in-One...', 'copy' => 'Modern printing environments require devices that can support multiple document tasks without creating unnecessary workflow...', 'image' => $printerImage],
            ['title' => 'Why the HP OfficeJet 8122e All-in-One...', 'copy' => 'Document workflows now involve a combination of printing, scanning, copying, wireless accessibility, and digital file management...', 'image' => $printerImage],
            ['title' => 'Exploring Wireless Printing Features...', 'copy' => 'Wireless printing continues becoming one of the most practical features in modern document environments. Users increasingly...', 'image' => $printerImage],
            ['title' => 'How the HP OfficeJet 8122e All-in-One...', 'copy' => 'Modern printing systems are expected to provide more than basic document output. Users now look for devices that support...', 'image' => $printerImage],
        ];
    @endphp

    <div class="pd-page">
        <nav class="pd-breadcrumb" aria-label="breadcrumb">
            <div class="pd-container">
                <ol class="pd-breadcrumb-list">
                    <li><a href="#">Product Store</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="#">printer</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="#">Officejet Printer</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="active">HP OfficeJet 8122e All-in-One Printer</li>
                </ol>
            </div>
        </nav>

        <main class="pd-main">
            <div class="pd-container">
                <div class="pd-layout">
                    <aside class="pd-sidebar-wrap">
                        <div class="pd-sidebar" aria-label="Product sections">
                            <button type="button" class="pd-tab-btn active" data-panel="overview">
                                <i class="fa-solid fa-layer-group"></i>
                                <span>Overview</span>
                            </button>
                            <button type="button" class="pd-tab-btn" data-panel="specifications">
                                <i class="fa-solid fa-sliders"></i>
                                <span>Specifications</span>
                            </button>
                            <button type="button" class="pd-tab-btn" data-panel="blogs">
                                <i class="fa-solid fa-blog"></i>
                                <span>Blogs</span>
                            </button>
                        </div>
                    </aside>

                    <section class="pd-content">
                        <div id="overview" class="pd-panel active">
                            <div class="pd-overview-grid">
                                <div class="pd-thumbs" aria-label="Product gallery thumbnails">
                                    <button type="button" class="pd-thumb-nav" aria-label="Previous image">
                                        <i class="fa-solid fa-chevron-up"></i>
                                    </button>
                                    @foreach ($thumbs as $thumb)
                                        <button type="button" class="pd-thumb {{ $loop->first ? 'active' : '' }}" data-image="{{ $thumb['image'] }}" aria-label="{{ $thumb['label'] }}">
                                            <img src="{{ $thumb['image'] }}" alt="{{ $thumb['label'] }}">
                                        </button>
                                    @endforeach
                                    <button type="button" class="pd-thumb-nav" aria-label="Next image">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                </div>

                                <div class="pd-gallery-main">
                                    <img id="pd-main-image" src="{{ $printerImage }}" alt="HP OfficeJet 8122e All-in-One Printer">
                                </div>

                                <div class="pd-info">
                                    <div class="pd-info-main">
                                        <div class="pd-badge">
                                            <i class="fa-solid fa-share-nodes"></i>
                                            <span>Active Product Line</span>
                                        </div>

                                        <h1 class="pd-title">HP OfficeJet 8122e All-in-One Printer</h1>

                                        <p class="pd-lifecycle">Corporate Availability lifecycle: <span>May 31, 2020 - Dec 30, 2030</span></p>

                                        <p class="pd-summary">Say hello to the professional color inkjet printer for your home office from America's most trusted printer brand, paired with the easiest-to-use print app. Enjoy easy printing designed to make you succeed at work.</p>
                                    </div>

                                    <div class="pd-price-box">
                                        <hr class="pd-divider">
                                        <div class="pd-price-label">Estimated Contract List Price</div>
                                        <div class="pd-price">$207.70</div>
                                        <a href="#" class="pd-quote">Get a Quote <i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="pd-feature-grid">
                                @foreach ($features as $feature)
                                    <article>
                                        <h2 class="pd-feature-title">{{ $feature['title'] }}</h2>
                                        <p class="pd-feature-copy">{{ $feature['copy'] }}</p>
                                    </article>
                                @endforeach
                            </div>

                            <div class="pd-notes">
                                <h3>Overview</h3>
                                <p>[1] Based on 2022 Q4 shipments in the IDC Worldwide Quarterly Hardcopy Peripherals Tracker. Includes shipments of all printing devices.</p>
                                <p>[2] Compared to OEM printing apps for the majority of top-selling, network-capable inkjet/laser printers and all-in-ones for the home and office.</p>
                                <p>[3] HP OfficeJet Pro printer series has self-healing Wi-Fi, HP's best and most reliable wireless technology to experience uninterrupted printing.</p>
                                <p>[4] Instant Ink is the world's first smart ink delivery service based on the number of people who have signed up for service.</p>
                            </div>
                        </div>

                        <div id="specifications" class="pd-panel">
                            <div class="pd-spec-tabs" role="tablist" aria-label="Specification groups">
                                <button type="button" class="pd-spec-tab active">Top Specs</button>
                                <button type="button" class="pd-spec-tab">All Specs</button>
                                <button type="button" class="pd-spec-tab">Logistics</button>
                                <button type="button" class="pd-spec-tab">Sustainability</button>
                            </div>

                            <table class="pd-spec-table">
                                <tbody>
                                    @foreach ($specs as $spec)
                                        <tr>
                                            <th scope="row">{{ $spec[0] }}</th>
                                            <td>{{ $spec[1] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="pd-section-note">
                                <h3>Specifications</h3>
                                <p>[1] Dimensions vary as per configuration.</p>
                                <p>[2] Weight varies as per configuration.</p>
                                <p>[3] Power requirements are based on the country/region where the printer is sold. Do not convert operating voltages.</p>
                                <p>[4] Wireless performance is dependent upon physical environment and distance from the access point.</p>
                                <p>Legal disclaimer: Product image may differ from actual product.</p>
                            </div>
                        </div>

                        <div id="blogs" class="pd-panel">
                            <div class="pd-blog-grid">
                                @foreach ($blogs as $blog)
                                    <article class="pd-blog-card">
                                        <div class="pd-blog-image">
                                            <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}">
                                        </div>
                                        <div class="pd-blog-body">
                                            <div class="pd-blog-date"><i class="fa-regular fa-calendar"></i> May 29, 2026</div>
                                            <h2 class="pd-blog-title">{{ $blog['title'] }}</h2>
                                            <p class="pd-blog-copy">{{ $blog['copy'] }}</p>
                                            <a href="#" class="pd-blog-link">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.pd-tab-btn');
            const panels = document.querySelectorAll('.pd-panel');
            const thumbs = document.querySelectorAll('.pd-thumb');
            const mainImage = document.getElementById('pd-main-image');

            tabs.forEach((tab) => {
                tab.addEventListener('click', function() {
                    const target = this.dataset.panel;

                    tabs.forEach((item) => item.classList.remove('active'));
                    panels.forEach((panel) => panel.classList.remove('active'));

                    this.classList.add('active');
                    document.getElementById(target).classList.add('active');
                });
            });

            thumbs.forEach((thumb) => {
                thumb.addEventListener('click', function() {
                    thumbs.forEach((item) => item.classList.remove('active'));
                    this.classList.add('active');

                    if (mainImage && this.dataset.image) {
                        mainImage.src = this.dataset.image;
                    }
                });
            });
        });
    </script>
@endpush