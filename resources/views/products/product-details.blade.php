@extends('layouts.app')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Forma+DJR+Deck:wght@400;500;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <style>
        :root {
            --gtb-blue: #266bf9;
            --gtb-blue-hover: #0f4fd1;
            /* --gtb-blue-hover: #005f8f; */
            --gtb-dark: #000000;
            --gtb-gray-dark: #2c2c2c;
            --gtb-gray-medium: #767676;
            --gtb-gray-light: #f9f9f9;
            --gtb-border: #e4e4e4;
            --gtb-success: #1a73e8;
            --font-primary: 'Inter', sans-serif;
            --font-display: 'Inter', sans-serif;
            --transition-smooth: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.04);
            --shadow-md: 0 4px 20px rgba(0, 0, 0, 0.06);
        }



        /* Portal Breadcrumb Styling */
        .portal-breadcrumb {
            background-color: #ffffff;
            border-bottom: 1px solid var(--gtb-border);
            padding: 16px 0;
        }

        .breadcrumb-list1 {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            font-size: 13px;
            font-weight: 500;
        }

        .breadcrumb-item1 a {
            color: var(--gtb-gray-medium);
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .breadcrumb-item1 a:hover {
            color: var(--gtb-blue);
        }

        .breadcrumb-item1+.breadcrumb-item1::before {
            content: "\f105";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            padding: 0 12px;
            color: var(--gtb-gray-medium);
        }

        .breadcrumb-item1.active {
            color: var(--gtb-dark);
            font-weight: 600;
        }

        /* Enterprise Three-Column Master Layout */
        .portal-main-layout {
            padding: 60px 0 100px 0;
        }

        .sticky-column-wrapper {
            position: sticky;
            top: 105px;
            z-index: 10;
        }

        /* Premium Left Navigation Sidebar */
        .enterprise-sidebar {
            background: #ffffff;
            border: 1px solid var(--gtb-border);
            border-radius: 12px;
            padding: 12px;
            box-shadow: var(--shadow-sm);
        }

        .sidebar-tab-btn {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 14px 20px;
            margin-bottom: 6px;
            background: transparent;
            border: 2px solid transparent;
            border-radius: 8px;
            text-align: left;
            font-size: 14px;
            font-weight: 600;
            color: var(--gtb-gray-dark);
            transition: var(--transition-smooth);
        }

        .sidebar-tab-btn:last-child {
            margin-bottom: 0;
        }

        .sidebar-tab-btn:hover {
            background-color: var(--gtb-gray-light);
            color: var(--gtb-dark);
        }

        .sidebar-tab-btn.active {
            background-color: #ffffff;
            border-color: var(--gtb-blue);
            color: var(--gtb-blue);
            box-shadow: var(--shadow-sm);
        }

        .sidebar-tab-btn i {
            margin-right: 12px;
            font-size: 16px;
            width: 20px;
            text-align: center;
        }

        /* Swiper Dual-Gallery Engine (Center Column) */
        .gallery-master-container {
            display: flex;
            gap: 20px;
            height: 520px;
        }

        .thumbs-slider-wrapper {
            width: 85px;
            flex-shrink: 0;
            position: relative;
        }

        .main-preview-wrapper {
            flex-grow: 1;
            border: 1px solid var(--gtb-border);
            border-radius: 16px;
            background: #ffffff;
            overflow: hidden;
            position: relative;
        }

        .gallery-main-view {
            width: 100%;
            height: 100%;
        }

        .gallery-main-view .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            background: #ffffff;
        }

        .gallery-main-view .swiper-slide img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.5s ease;
        }

        .gallery-main-view .swiper-slide:hover img {
            transform: scale(1.03);
        }

        .gallery-thumbs-view {
            width: 100%;
            height: 100%;
        }

        .gallery-thumbs-view .swiper-slide {
            width: 100% !important;
            height: 85px !important;
            border: 1px solid var(--gtb-border);
            border-radius: 10px;
            cursor: pointer;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: #ffffff;
            transition: var(--transition-smooth);
        }

        .gallery-thumbs-view .swiper-slide-thumb-active {
            border-color: var(--gtb-blue);
            border-width: 2px;
            box-shadow: var(--shadow-sm);
        }

        .gallery-thumbs-view .swiper-slide img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .swiper-nav-btn {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 26px;
            height: 26px;
            background: #ffffff;
            border: 1px solid var(--gtb-border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            color: var(--gtb-gray-dark);
            z-index: 10;
            cursor: pointer;
            transition: var(--transition-smooth);
        }

        .swiper-nav-btn:hover {
            background-color: var(--gtb-blue);
            border-color: var(--gtb-blue);
            color: #ffffff;
        }

        .swiper-nav-prev {
            top: -15px;
        }

        .swiper-nav-next {
            bottom: -15px;
        }

        /* Enterprise Product Information Console (Right Column) */
        .info-panel-badge {
            display: inline-flex;
            align-items: center;
            padding: 6px 14px;
            background-color: var(--gtb-gray-light);
            border: 1px solid var(--gtb-border);
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            color: var(--gtb-gray-dark);
            margin-bottom: 20px;
        }

        .info-panel-badge i {
            color: #555555;
            margin-right: 6px;
            font-size: 10px;
        }

        .product-main-title {
            font-family: var(--font-display);
            font-size: 32px;
            font-weight: 700;
            letter-spacing: -0.02em;
            line-height: 1.2;
            margin-bottom: 8px;
            color: var(--gtb-dark);
        }

        .lifecycle-text {
            font-size: 13px;
            color: var(--gtb-gray-medium);
            font-weight: 500;
            margin-bottom: 24px;
        }

        .lifecycle-text span {
            color: var(--gtb-dark);
            font-weight: 600;
        }

        .product-brief-summary {
            font-size: 15px;
            line-height: 1.6;
            color: var(--gtb-gray-dark);
            margin-bottom: 30px;
            border-left: 3px solid var(--gtb-border);
            padding-left: 16px;
        }

        .commercial-pricing-zone {
            padding: 24px 0;
            border-top: 1px solid var(--gtb-border);
            margin-bottom: 10px;
        }

        .price-label {
            font-size: 13px;
            color: var(--gtb-gray-medium);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 4px;
        }

        .premium-list-price {
            font-size: 36px;
            font-weight: 700;
            color: var(--gtb-dark);
            font-family: var(--font-display);
            letter-spacing: -0.02em;
        }

        .btn-hp-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: var(--gtb-blue);
            color: #ffffff !important;
            font-size: 15px;
            font-weight: 600;
            padding: 15px 36px;
            border: none;
            border-radius: 30px;
            transition: var(--transition-smooth);
            box-shadow: 0 4px 14px rgba(0, 125, 186, 0.2);
        }

        .btn-hp-primary:hover {
            background-color: var(--gtb-blue-hover);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(0, 125, 186, 0.3);
        }

        .btn-hp-primary i {
            transition: transform 0.2s ease;
        }

        .btn-hp-primary:hover i {
            transform: translateX(4px);
        }

        /* Segment Views Global System */
        .portal-content-view {
            display: none;
            animation: fadeIn 0.4s ease forwards;
        }

        .portal-content-view.active-view {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Corporate Showcase Columns Component */
        .showcase-features-grid {
            padding: 50px 0;
            border-top: 1px solid var(--gtb-border);
            background-color: #ffffff;
        }

        .feature-showcase-card {
            padding: 0 24px;
            position: relative;
        }

        .feature-showcase-card:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 10%;
            height: 80%;
            width: 1px;
            background-color: var(--gtb-border);
        }

        .feature-showcase-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--gtb-dark);
            margin-bottom: 12px;
            letter-spacing: -0.01em;
        }

        .feature-showcase-desc {
            font-size: 14px;
            line-height: 1.6;
            color: var(--gtb-gray-medium);
        }

        /* Specifications Sub-System Component */
        .spec-category-bar {
            display: flex;
            border-bottom: 1px solid var(--gtb-border);
            margin-bottom: 30px;
            gap: 8px;
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: none;
        }

        .spec-category-bar::-webkit-scrollbar {
            display: none;
        }

        .spec-category-btn {
            background: transparent;
            border: none;
            padding: 12px 24px;
            font-size: 14px;
            font-weight: 600;
            color: var(--gtb-gray-medium);
            position: relative;
            transition: var(--transition-smooth);
        }

        .spec-category-btn:hover {
            color: var(--gtb-dark);
        }

        .spec-category-btn.active {
            color: var(--gtb-blue);
        }

        .spec-category-btn.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--gtb-blue);
        }

        .spec-matrix-table {
            width: 100%;
            margin-bottom: 0;
        }

        .spec-matrix-row {
            display: flex;
            padding: 18px 24px;
            /* border-bottom: 1px solid var(--gtb-border); */
            align-items: baseline;
            transition: var(--transition-smooth);
        }

        .spec-matrix-row:hover {
            background-color: var(--gtb-gray-light);
        }

        .spec-matrix-label {
            width: 30%;
            flex-shrink: 0;
            font-size: 14px;
            font-weight: 600;
            color: var(--gtb-dark);
            padding-right: 20px;
        }

        .spec-matrix-value {
            width: 70%;
            font-size: 14px;
            line-height: 1.6;
            color: var(--gtb-gray-dark);
        }

        /* Generic Template View Fallbacks */
        .enterprise-placeholder-card {
            border: 1px dashed var(--gtb-border);
            border-radius: 12px;
            padding: 60px;
            text-align: center;
            background-color: var(--gtb-gray-light);
        }

        .placeholder-icon {
            font-size: 40px;
            color: var(--gtb-gray-medium);
            margin-bottom: 16px;
        }

        /* Advanced Responsive Layout Engine Rules */
        @media (max-width: 1199px) {
            .product-main-title {
                font-size: 28px;
            }

            .gallery-master-container {
                height: 440px;
            }

            .gallery-thumbs-view .swiper-slide {
                height: 70px !important;
            }

            .thumbs-slider-wrapper {
                width: 70px;
            }
        }

        @media (max-width: 991px) {
            .portal-main-layout {
                padding: 40px 0 60px 0;
            }

            .sticky-column-wrapper {
                position: static;
                margin-bottom: 30px;
            }

            .enterprise-sidebar {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: auto;
                padding: 8px;
                gap: 8px;
                scrollbar-width: none;
            }

            .enterprise-sidebar::-webkit-scrollbar {
                display: none;
            }

            .sidebar-tab-btn {
                margin-bottom: 0;
                white-space: nowrap;
                width: auto;
                padding: 10px 18px;
            }

            .gallery-master-container {
                height: 500px;
                margin-bottom: 40px;
            }

            .feature-showcase-card {
                margin-bottom: 30px;
                padding: 0 15px;
            }

            .feature-showcase-card:not(:last-child)::after {
                display: none;
            }

            .showcase-features-grid {
                padding: 50px 0;
            }
        }

        @media (max-width: 767px) {
            .gallery-master-container {
                flex-direction: column-reverse;
                height: auto;
            }

            .thumbs-slider-wrapper {
                width: 100%;
                height: 75px;
            }

            .gallery-thumbs-view {
                display: flex;
            }

            .gallery-thumbs-view .swiper-slide {
                width: 75px !important;
                height: 100% !important;
            }

            .swiper-nav-btn {
                display: none !important;
            }

            .main-preview-wrapper {
                height: 360px;
            }

            .product-main-title {
                font-size: 24px;
            }

            .premium-list-price {
                font-size: 30px;
            }

            .spec-matrix-row {
                flex-direction: column;
                padding: 14px 16px;
            }

            .spec-matrix-label {
                width: 100%;
                padding-right: 0;
                margin-bottom: 4px;
                font-size: 13px;
            }

            .spec-matrix-value {
                width: 100%;
                font-size: 13px;
            }

            .enterprise-placeholder-card {
                padding: 30px 15px;
            }
        }

        /* SPEC TAB CONTENT */

        .spec-content {
            display: none;
            animation: fadeIn .3s ease;
        }

        .spec-content.active-spec-content {
            display: block;
        }

        /* BLOG SECTION */

        .blog-card-enterprise {
            background: #ffffff;
            border: 1px solid var(--gtb-border);
            border-radius: 18px;
            overflow: hidden;
            transition: var(--transition-smooth);
            height: 100%;
            box-shadow: var(--shadow-sm);
        }

        .blog-card-enterprise:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
        }

        .blog-card-image {
            position: relative;
            overflow: hidden;
            height: 220px;
        }

        .blog-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s ease;
        }

        .blog-card-enterprise:hover .blog-card-image img {
            transform: scale(1.06);
        }

        .blog-card-body {
            padding: 24px;
        }

        .blog-meta {
            margin-bottom: 12px;
        }

        .blog-meta span {
            font-size: 13px;
            color: var(--gtb-gray-medium);
            font-weight: 500;
        }

        .blog-meta i {
            margin-right: 6px;
        }

        .blog-title {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.4;
            color: var(--gtb-dark);
            margin-bottom: 14px;
        }

        .blog-desc {
            font-size: 14px;
            line-height: 1.7;
            color: var(--gtb-gray-medium);
            margin-bottom: 22px;
        }

        .blog-read-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 600;
            color: var(--gtb-blue);
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .blog-read-btn:hover {
            color: var(--gtb-blue-hover);
        }

        .blog-read-btn i {
            transition: transform .3s ease;
        }

        .blog-read-btn:hover i {
            transform: translateX(4px);
        }
    </style>


    <div class="main-wrapper">

        <nav class="portal-breadcrumb" aria-label="breadcrumb">
            <div class="container-fluid px-4 px-md-5">
                <ul class="breadcrumb-list1">
                    <li class="breadcrumb-item1"><a href="<?= site_url('products') ?>">Product Store</a></li>
                    <li class="breadcrumb-item1"><a href="<?= site_url('products/' . $product->parent_cat) ?>"><?= $product->parent_cat ?></a></li>
                    <li class="breadcrumb-item1"><a href="<?= site_url('products/' . $product->parent_cat . '/' . $category_info[$product->cat_id]->url) ?>"><?= $category_info[$product->cat_id]->name ?></a></li>
                    <li class="breadcrumb-item1 active" aria-current="page"><?= $product->name ?></li>
                </ul>
            </div>
        </nav>

        <main class="portal-main-layout">
            <div class="container-fluid px-4 px-md-5">
                <div class="row g-4">

                    <div class="col-lg-3 col-12">
                        <div class="sticky-column-wrapper">
                            <nav class="enterprise-sidebar" aria-label="Product Sections Navigation">
                                <button class="sidebar-tab-btn active" data-target="view-overview">
                                    <i class="fa-solid fa-layer-group"></i>Overview
                                </button>
                                <button class="sidebar-tab-btn" data-target="view-specifications">
                                    <i class="fa-solid fa-sliders"></i>Specifications
                                </button>
                                <button class="sidebar-tab-btn" data-target="view-blogs">
                                    <i class="fa-solid fa-blog"></i>Blogs
                                </button>
                            </nav>
                        </div>
                    </div>

                    <div class="col-lg-9 col-12">

                        <div id="view-overview" class="portal-content-view active-view">
                            <div class="row g-4">

                                <div class="col-xl-7 col-md-12">
                                    <div class="gallery-master-container">

                                        <div class="thumbs-slider-wrapper">
                                            <div class="swiper-nav-btn swiper-nav-prev" id="thumb-prev-trigger">
                                                <i class="fa-solid fa-chevron-up"></i>
                                            </div>
                                            <div class="swiper gallery-thumbs-view">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="<?= base_url() ?>assets/images/product-image/<?= esc($product->img1) ?>" alt="<?= $product->name ?>">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="<?= base_url() ?>assets/images/product-image/<?= esc($product->img2) ?>" alt="<?= $product->name ?>">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="<?= base_url() ?>assets/images/product-image/<?= esc($product->img3) ?>" alt="<?= $product->name ?>">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="<?= base_url() ?>assets/images/product-image/<?= esc($product->img4) ?>" alt="<?= $product->name ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-nav-btn swiper-nav-next" id="thumb-next-trigger">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </div>

                                        <div class="main-preview-wrapper">
                                            <div class="swiper gallery-main-view">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="<?= base_url() ?>assets/images/product-image/<?= esc($product->img1) ?>" alt="<?= $product->name ?>">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="<?= base_url() ?>assets/images/product-image/<?= esc($product->img2) ?>" alt="<?= $product->name ?>">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="<?= base_url() ?>assets/images/product-image/<?= esc($product->img3) ?>" alt="<?= $product->name ?>">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="<?= base_url() ?>assets/images/product-image/<?= esc($product->img4) ?>" alt="<?= $product->name ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-5 col-md-12">
                                    <div class="product-commercial-profile">
                                        <div class="info-panel-badge">
                                            <i class="fa-solid fa-circle-nodes"></i> Active Product Line
                                        </div>

                                        <h1 class="product-main-title"><?= $product->name ?></h1>

                                        <div class="lifecycle-text">
                                            Corporate Availability lifecycle: <span>May 31, 2020 - Dec 30, 2030</span>
                                        </div>

                                        <p class="product-brief-summary">
                                            <?= nl2br($product->short_description) ?>
                                        </p>

                                        <div class="commercial-pricing-zone">
                                            <div class="price-label">Estimated Contract List Price</div>
                                            <div class="premium-list-price">$<?= number_format($product->price, 2) ?></div>
                                        </div>

                                        <div class="action-dock pt-3">
                                            <a href="<?= base_url('product/enquiry/' . $product->slug) ?>" class="btn btn-hp-primary">
                                                Get a Quote &nbsp;<i class="fa-solid fa-arrow-right-long"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row showcase-features-grid mt-5">
                                <?php foreach ($product_overview as $overview): ?>
                                    <div class="col-md-4 col-12 mb-4">
                                        <div class="feature-showcase-card">
                                            <h3 class="feature-showcase-title"><?= $overview->headkey ?></h3>
                                            <p class="feature-showcase-desc"><?= $overview->value ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="row showcase-features-grid">
                                <strong>Overview</strong>
                                <p><?= nl2br($product->overview_description) ?></p>
                            </div>
                        </div>

                        <!-- SPECIFICATION TAB SECTION -->
                        <div id="view-specifications" class="portal-content-view">

                            <div class="enterprise-spec-block mb-5">

                                <?php
                                // UNIQUE TABS NIKAL LO
                                $spec_tabs = [];

                                if (!empty($product_specification)) {
                                    foreach ($product_specification as $spec) {

                                        // TAB NAME FORMAT
                                        $tab_key = $spec->tab;

                                        // BUTTON TITLE
                                        $tab_title = ucwords(str_replace('-', ' ', $tab_key));

                                        $spec_tabs[$tab_key] = $tab_title;
                                    }
                                }
                                ?>

                                <!-- TOP TAB BUTTONS -->
                                <div class="spec-category-bar">

                                    <?php
                                    $first_tab = true;

                                    foreach ($spec_tabs as $tab_key => $tab_title):
                                    ?>

                                        <button
                                            class="spec-category-btn <?= $first_tab ? 'active' : '' ?>"
                                            data-spec-target="<?= $tab_key ?>">

                                            <?= $tab_title ?>

                                        </button>

                                    <?php
                                        $first_tab = false;
                                    endforeach;
                                    ?>

                                </div>


                                <!-- TAB CONTENTS -->
                                <?php
                                $first_content = true;

                                foreach ($spec_tabs as $tab_key => $tab_title):
                                ?>

                                    <div
                                        class="spec-content <?= $first_content ? 'active-spec-content' : '' ?>"
                                        id="<?= $tab_key ?>">

                                        <div class="spec-matrix-table">

                                            <?php foreach ($product_specification as $spec): ?>

                                                <?php if ($spec->tab == $tab_key): ?>

                                                    <div class="spec-matrix-row">

                                                        <div class="spec-matrix-label">
                                                            <?= $spec->headkey ?>
                                                        </div>

                                                        <div class="spec-matrix-value">
                                                            <?= $spec->value ?>
                                                        </div>

                                                    </div>

                                                <?php endif; ?>

                                            <?php endforeach; ?>

                                        </div>

                                    </div>

                                <?php
                                    $first_content = false;
                                endforeach;
                                ?>

                            </div>

                            <div class="row showcase-features-grid">
                                <strong>Specifications</strong>
                                <p><?= nl2br($product->specification_description) ?></p>
                            </div>

                        </div>

                        <div id="view-blogs" class="portal-content-view">

                            <div class="row g-4">

                                <?php $blogs = explode(',', $product->blog_ids);
                                foreach ($blogs as $blog_id) { ?>


                                    <!-- BLOG CARD 1 -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="blog-card-enterprise">

                                            <div class="blog-card-image">
                                                <img src="<?= base_url() ?>assets/images/blog-image/<?= esc($blog_info[$blog_id]->image1) ?>"
                                                    alt="Printer Technology Blog">
                                            </div>

                                            <div class="blog-card-body">

                                                <div class="blog-meta">
                                                    <span><i class="fa-regular fa-calendar"></i><?= date('M d, Y', strtotime($blog_info[$blog_id]->inserted_at)) ?></span>
                                                </div>

                                                <h3 class="blog-title">
                                                    <?= character_limiter(strip_tags($blog_info[$blog_id]->heading), 35) ?>
                                                </h3>

                                                <p class="blog-desc">
                                                    <?= character_limiter(strip_tags($blog_info[$blog_id]->content), 120) ?>
                                                </p>
                                                <a href="<?= base_url('blogs/' . $blog_info[$blog_id]->slug) ?>" class="blog-read-btn">
                                                    Read More
                                                    <i class="fa-solid fa-arrow-right-long"></i>
                                                </a>

                                            </div>

                                        </div>
                                    </div>

                                <?php } ?>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </main>

    </div>

@extends('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // --- GALERIE SLIDER MOTORIZATION (SWIPER ENGINE) ---
            let thumbsDirection = 'vertical';

            // Runtime dynamic viewport check to configure the gallery layout directions
            if (window.innerWidth <= 767) {
                thumbsDirection = 'horizontal';
            }

            const galleryThumbs = new Swiper('.gallery-thumbs-view', {
                direction: thumbsDirection,
                slidesPerView: 'auto',
                spaceBetween: 12,
                freeMode: true,
                watchSlidesProgress: true,
                navigation: {
                    nextEl: '#thumb-next-trigger',
                    prevEl: '#thumb-prev-trigger',
                },
                breakpoints: {
                    0: {
                        direction: 'horizontal',
                        spaceBetween: 8
                    },
                    768: {
                        direction: 'vertical',
                        spaceBetween: 12
                    }
                }
            });

            const galleryMain = new Swiper('.gallery-main-view', {
                spaceBetween: 20,
                grabCursor: true,
                effect: 'slide',
                thumbs: {
                    swiper: galleryThumbs,
                }
            });

            // --- VIEW SYSTEM SWITCH CONTROLLER ---
            const tabButtons = document.querySelectorAll('.sidebar-tab-btn');
            const viewPanels = document.querySelectorAll('.portal-content-view');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetViewId = this.getAttribute('data-target');

                    // Lower active states on navigation actions
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    viewPanels.forEach(panel => panel.classList.remove('active-view'));

                    // Raise active state on selected contextual route
                    this.classList.add('active');
                    const targetPanel = document.getElementById(targetViewId);
                    if (targetPanel) {
                        targetPanel.classList.add('active-view');

                        // Recalculate layout metrics if initializing slider arrays within hidden states
                        if (targetViewId === 'view-overview') {
                            galleryMain.update();
                            galleryThumbs.update();
                        }
                    }
                });
            });

            // --- SPECIFICATION VIEWPORT FILTER SUBSYSTEM ---
            const specSubCategoryButtons = document.querySelectorAll('.spec-category-btn');

            specSubCategoryButtons.forEach(subBtn => {
                subBtn.addEventListener('click', function() {
                    specSubCategoryButtons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    // Additional enterprise table data filters can be added here if needed
                });
            });

            // Runtime window geometry dynamic re-allocation watch logic
            window.addEventListener('resize', function() {
                if (window.innerWidth <= 767) {
                    if (galleryThumbs.params.direction !== 'horizontal') {
                        galleryThumbs.changeDirection('horizontal');
                    }
                } else {
                    if (galleryThumbs.params.direction !== 'vertical') {
                        galleryThumbs.changeDirection('vertical');
                    }
                }
            });

        });
    </script>

    <script>
        // SPECIFICATION INNER TABS

        const specButtons = document.querySelectorAll(".spec-category-btn");
        const specContents = document.querySelectorAll(".spec-content");

        specButtons.forEach(button => {

            button.addEventListener("click", function() {

                const target = this.getAttribute("data-spec-target");

                // remove active
                specButtons.forEach(btn =>
                    btn.classList.remove("active")
                );

                specContents.forEach(content =>
                    content.classList.remove("active-spec-content")
                );

                // add active
                this.classList.add("active");

                document.getElementById(target)
                    .classList.add("active-spec-content");

            });

        });
    </script>


@endsection
