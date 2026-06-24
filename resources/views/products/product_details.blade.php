@extends('layouts.app')
@section('title', $detailsData['seo']['title'] ?? $detailsData['hero']['name'] ?? 'Product Details')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/product-details.css') }}">
@endpush

@section('content')
    @php
        $productAsset = function ($image) {
            $image = ltrim((string) $image, '/');
            $fallback = 'assets/images/product/printer.png';

            if ($image === '') {
                return asset($fallback);
            }

            $candidates = str_starts_with($image, 'assets/')
                ? [$image]
                : [$image, 'assets/images/product/' . $image];

            $path = collect($candidates)->first(fn ($candidate) => file_exists(public_path($candidate)));

            return asset($path ?: $fallback);
        };

        $blogAsset = function ($image) {
            $image = ltrim((string) $image, '/');
            $fallback = 'assets/images/blog/blog-1.jpg';

            if ($image === '') {
                return asset($fallback);
            }

            $candidates = str_starts_with($image, 'assets/')
                ? [$image]
                : [$image, 'assets/images/blog/' . $image];

            $path = collect($candidates)->first(fn ($candidate) => file_exists(public_path($candidate)));

            return asset($path ?: $fallback);
        };

        $hero = $detailsData['hero'] ?? [];
        $breadcrumb = $detailsData['breadcrumb'] ?? [];
        $overview = $detailsData['overview'] ?? [];
        $specificationDescription = $detailsData['specification_description'] ?? null;
        $printerImage = $productAsset($detailsData['gallery'][0]['image'] ?? null);
        $thumbs = [
            ['image' => asset('assets/images/product/printer.png'), 'label' => 'Printer front view'],
            ['image' => asset('assets/images/product/scanner.png'), 'label' => 'Scanner view'],
            ['image' => asset('assets/images/product/desktops.png'), 'label' => 'Desktop product view'],
            ['image' => asset('assets/images/product/thin_client.png'), 'label' => 'Thin client view'],
        ];

        $features = [
            ['title' => 'Reliable technology uniquely built to work at home', 'copy' => 'Say goodbye to noisy printing and stay focused on your work with quiet mode, dual-band Wi-Fi, and self-healing connectivity.'],
            ['title' => 'Print from your couch with the best print app', 'copy' => 'Print, scan, copy right from your smartphone with the best and easiest-to-use print app for home offices.'],
            ['title' => 'Always be ready to print. Never run out of ink.', 'copy' => 'With an Instant Ink subscription, you can get ink delivered directly to your door before you run out.'],
        ];
        $overviewNotes = [];

        $specTabs = [
            'top-specs' => [
                'label' => 'Top Specs',
                'rows' => [
                    ['Functions', 'Print, copy, scan'],
                    ['Print speed black (draft, letter)', 'Up to 29 ppm'],
                    ['Print speed color (draft, letter)', 'Up to 25 ppm'],
                    ['Print speed black (ISO, letter)', 'Up to 18 ppm'],
                    ['Print speed color (ISO)', 'Up to 10 ppm'],
                    ['Print speed duplex (letter)', 'Up to 10 ipm'],
                    ['First page out (ready)', 'Black: As fast as 15 sec'],
                    ['First page out color (letter, ready)', 'As fast as 18 sec'],
                    ['Borderless printing', 'Yes, on Photo and Brochure only, up to 8.5 x 11 in'],
                ],
            ],
            'all-specs' => [
                'label' => 'All Specs',
                'rows' => [
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
                ],
            ],
            'logistics' => [
                'label' => 'Logistics',
                'rows' => [
                    ['Package dimensions', '19.2 x 13.7 x 9.1 in'],
                    ['Package weight', '10.2 kg / 22.4 lb'],
                    ['Pallet dimensions', '48 x 40 x 76 in'],
                    ['Pallet weight', 'Approx. 410 kg'],
                    ['Units per pallet', '36 units'],
                    ['UPC number', '196337123456'],
                    ['Country of origin', 'Made in Thailand'],
                    ['What is in the box', 'Printer, setup cartridges, power cord, setup poster, reference guide'],
                    ['Shipping availability', 'Standard ground, expedited, and partner warehouse shipment'],
                ],
            ],
            'sustainability' => [
                'label' => 'Sustainability',
                'rows' => [
                    ['Energy star certified', 'Yes'],
                    ['EPEAT registered', 'Silver'],
                    ['Recycled plastic content', 'Contains recycled plastic in printer body components'],
                    ['Cartridge recycling', 'Recyclable through HP Planet Partners'],
                    ['Power supply type', 'Internal universal power supply'],
                    ['Power', 'Input voltage: 100 to 240 VAC, 50/60 Hz'],
                    ['Power consumption', '4.07 watts ready, 1.02 watts sleep, 0.11 watts manual-off'],
                    ['Operating humidity range', '20 to 80% RH'],
                    ['Operating temperature range', '41 to 104 degrees F'],
                ],
            ],
        ];

        $blogs = [
            ['title' => 'How the HP OfficeJet 8122e All-in-One...', 'copy' => 'Modern printing environments require devices that can support multiple document tasks without creating unnecessary workflow...', 'image' => $printerImage],
            ['title' => 'Why the HP OfficeJet 8122e All-in-One...', 'copy' => 'Document workflows now involve a combination of printing, scanning, copying, wireless accessibility, and digital file management...', 'image' => $printerImage],
            ['title' => 'Exploring Wireless Printing Features...', 'copy' => 'Wireless printing continues becoming one of the most practical features in modern document environments. Users increasingly...', 'image' => $printerImage],
            ['title' => 'How the HP OfficeJet 8122e All-in-One...', 'copy' => 'Modern printing systems are expected to provide more than basic document output. Users now look for devices that support...', 'image' => $printerImage],
        ];

        if (! empty($detailsData)) {
            $thumbs = collect($detailsData['gallery'] ?? [])
                ->map(fn ($thumb) => [
                    'image' => $productAsset($thumb['image'] ?? null),
                    'label' => $thumb['label'] ?? $thumb['alt'] ?? ($hero['name'] ?? 'Product image'),
                ])
                ->filter(fn ($thumb) => ! empty($thumb['image']))
                ->values()
                ->all();

            if (empty($thumbs)) {
                $thumbs = [['image' => asset('assets/images/product/printer.png'), 'label' => $hero['name'] ?? 'Product image']];
            }

            $features = collect($overview['features'] ?? [])
                ->filter(fn ($feature) => ! empty($feature['title']) || ! empty($feature['description']))
                ->map(fn ($feature) => [
                    'title' => $feature['title'] ?? '',
                    'copy' => $feature['description'] ?? '',
                ])
                ->values()
                ->all();

            $overviewNotes = collect($overview['notes'] ?? [])
                ->filter()
                ->values()
                ->all();

            if (! empty($detailsData['specifications'])) {
                $specTabs = collect($detailsData['specifications'])
                    ->map(fn ($tab) => [
                        'label' => $tab['label'] ?? 'Specifications',
                        'rows' => collect($tab['rows'] ?? [])
                            ->map(fn ($row) => [$row['headkey'] ?? '', $row['value'] ?? ''])
                            ->filter(fn ($row) => $row[0] !== '' || $row[1] !== '')
                            ->values()
                            ->all(),
                    ])
                    ->filter(fn ($tab) => ! empty($tab['rows']))
                    ->all();
            }

            $blogs = collect($detailsData['blogs'] ?? [])
                ->map(fn ($blog) => [
                    'title' => $blog['heading'] ?? 'Blog',
                    'copy' => \Illuminate\Support\Str::limit(strip_tags($blog['content'] ?? ''), 130),
                    'image' => $blogAsset($blog['image1'] ?? $blog['image2'] ?? $blog['image3'] ?? null),
                    'date' => ! empty($blog['inserted_at'])
                        ? \Illuminate\Support\Carbon::parse($blog['inserted_at'])->format('M d, Y')
                        : null,
                    'url' => ! empty($blog['slug']) ? url('blogs', $blog['slug']) : '#',
                ])
                ->values()
                ->all();
        }
    @endphp

    <div class="pd-page">
        <nav class="pd-breadcrumb" aria-label="breadcrumb">
            <div class="pd-container">
                <ol class="pd-breadcrumb-list">
                    <li><a href="#">{{ $breadcrumb['store'] ?? 'Product Store' }}</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="#">{{ $breadcrumb['parent_category'] ?? 'printer' }}</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="#">{{ $breadcrumb['category']['name'] ?? 'Officejet Printer' }}</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="active">{{ $breadcrumb['product_name'] ?? $hero['name'] ?? 'Product Details' }}</li>
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
                                        <button type="button" class="pd-thumb {{ $loop->first ? 'active' : '' }}" data-image="{{ $thumb['image'] }}" data-label="{{ $thumb['label'] }}" aria-label="{{ $thumb['label'] }}">
                                            <img src="{{ $thumb['image'] }}" alt="{{ $thumb['label'] }}">
                                        </button>
                                    @endforeach
                                    <button type="button" class="pd-thumb-nav" aria-label="Next image">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                </div>

                                <div class="pd-gallery-main">
                                    <img id="pd-main-image" src="{{ $thumbs[0]['image'] }}" alt="{{ $thumbs[0]['label'] }}">
                                </div>

                                <div class="pd-info">
                                    <div class="pd-info-main">
                                        <div class="pd-badge">
                                            <i class="fa-solid fa-share-nodes"></i>
                                            <span>{{ $hero['badge'] ?? 'Active Product Line' }}</span>
                                        </div>

                                        <h1 class="pd-title">{{ $hero['name'] ?? 'HP OfficeJet 8122e All-in-One Printer' }}</h1>

                                        <p class="pd-lifecycle">Corporate Availability lifecycle: <span>{{ $hero['lifecycle'] ?? 'May 31, 2020 - Dec 30, 2030' }}</span></p>

                                        <p class="pd-summary">{{ $hero['summary'] ?? 'Say hello to the professional color inkjet printer for your home office from America\'s most trusted printer brand, paired with the easiest-to-use print app. Enjoy easy printing designed to make you succeed at work.' }}</p>
                                    </div>

                                    <div class="pd-price-box">
                                        <hr class="pd-divider">
                                        <div class="pd-price-label">Estimated Contract List Price</div>
                                        <div class="pd-price">${{ number_format((float) ($hero['price'] ?? 207.70), 2) }}</div>
                                        <a href="{{ $hero['quote_url'] ?? url('/products-enquiry') }}" class="pd-quote">Get a Quote <i class="fa-solid fa-arrow-right-long"></i></a>
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

                            @if (! empty($overview['description']) || ! empty($overviewNotes))
                                <div class="pd-notes">
                                    <h3>Overview</h3>
                                    @if (! empty($overview['description']))
                                        <p>{!! nl2br(e($overview['description'])) !!}</p>
                                    @endif
                                    @foreach ($overviewNotes as $note)
                                        <p>{!! nl2br(e($note)) !!}</p>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <div id="specifications" class="pd-panel">
                            @if (! empty($specTabs))
                                <div class="pd-spec-tabs" role="tablist" aria-label="Specification groups">
                                    @foreach ($specTabs as $specTabId => $specTab)
                                        <button type="button" class="pd-spec-tab {{ $loop->first ? 'active' : '' }}" data-spec-panel="{{ $specTabId }}">{{ $specTab['label'] }}</button>
                                    @endforeach
                                </div>

                                @foreach ($specTabs as $specTabId => $specTab)
                                    <div id="{{ $specTabId }}" class="pd-spec-panel {{ $loop->first ? 'active' : '' }}">
                                        <table class="pd-spec-table">
                                            <tbody>
                                                @foreach ($specTab['rows'] as $spec)
                                                    <tr>
                                                        <th scope="row">{{ $spec[0] }}</th>
                                                        <td>{!! nl2br(e($spec[1])) !!}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endforeach
                            @else
                                <div class="pd-section-note">
                                    <h3>Specifications</h3>
                                    <p>No specifications are available for this product.</p>
                                </div>
                            @endif

                            @if (! empty($specificationDescription))
                                <div class="pd-section-note">
                                    <h3>Specifications</h3>
                                    <p>{!! nl2br(e($specificationDescription)) !!}</p>
                                </div>
                            @endif
                        </div>

                        <div id="blogs" class="pd-panel">
                            <div class="pd-blog-grid">
                                @forelse ($blogs as $blog)
                                    <article class="pd-blog-card">
                                        <div class="pd-blog-image">
                                            <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}">
                                        </div>
                                        <div class="pd-blog-body">
                                            @if (! empty($blog['date']))
                                                <div class="pd-blog-date"><i class="fa-regular fa-calendar"></i> {{ $blog['date'] }}</div>
                                            @endif
                                            <h2 class="pd-blog-title">{{ $blog['title'] }}</h2>
                                            <p class="pd-blog-copy">{{ $blog['copy'] }}</p>
                                            <a href="{{ $blog['url'] }}" class="pd-blog-link">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                                        </div>
                                    </article>
                                @empty
                                    <div class="pd-section-note">
                                        <h3>Blogs</h3>
                                        <p>No blogs are available for this product.</p>
                                    </div>
                                @endforelse
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
            const specTabs = document.querySelectorAll('.pd-spec-tab');
            const specPanels = document.querySelectorAll('.pd-spec-panel');

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
                        mainImage.alt = this.dataset.label || 'Product image';
                    }
                });
            });

            specTabs.forEach((tab) => {
                tab.addEventListener('click', function() {
                    const target = this.dataset.specPanel;

                    specTabs.forEach((item) => item.classList.remove('active'));
                    specPanels.forEach((panel) => panel.classList.remove('active'));

                    this.classList.add('active');
                    document.getElementById(target).classList.add('active');
                });
            });
        });
    </script>
@endpush
