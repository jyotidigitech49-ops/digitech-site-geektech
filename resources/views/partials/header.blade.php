<header class="header-area">
            <div class="header-large-device">

                <div class="header-middle header-middle-padding-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="categori-search-wrap categori-search-wrap-modify-3">
                                    <div class="categori-style-1">
                                        <select class="nice-select nice-select-style-1 global-search-category" name="category" form="desktop-global-search-form">
                                            <option value="all">All Categories</option>
                                            <option value="printer">PRINTERS</option>
                                            <option value="desktops">DESKTOPS</option>
                                            <option value="thin-client">THIN CLIENT</option>
                                            <option value="scanner">SCANNERS</option>
                                        </select>
                                    </div>
                                    <div class="search-wrap-3">
                                        <form action="{{ url('/search') }}" method="GET" class="global-search-form" id="desktop-global-search-form">
                                            <input placeholder="Search Products..." type="text" name="q" list="global-search-products">
                                            <button class="blue"><i class="lnr lnr-magnifier"></i></button>
                                        </form>
                                    </div>
                                    <datalist id="global-search-products">
                                        <option value="Printer">
                                        <option value="Officejet Printer">
                                        <option value="Laser Printer">
                                        <option value="Inkjet Printer">
                                        <option value="Deskjet Printer">
                                        <option value="Desktops">
                                        <option value="Thin Client">
                                        <option value="Scanner">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom bg-blue">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="main-categori-wrap main-categori-wrap-modify-2">
                                    <a class="categori-show categori-blue" href="#">All Departments <i class="icon-arrow-down icon-right"></i></a>
                                    <div class="category-menu-2 category-menu-2-blue categori-hide categori-not-visible-2">
                                        <nav>
                                            <ul>
                                                <li><a href="{{ url('/products/printer') }}"><i class="icon-energy"></i>PRINTERS</a></li>
                                                <li><a href="{{ url('/products/desktops') }}"><i class="icon-handbag"></i>DESKTOPS</a></li>
                                                <li><a href="{{ url('/products/thin-client') }}"><i class="icon-home"></i>THIN CLIENT</a></li>
                                                <li><a href="{{ url('/products/scanner') }}"><i class="icon-game-controller"></i>SCANNERS</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="main-menu main-menu-white main-menu-padding-1 main-menu-font-size-14 main-menu-lh-5">
                                    <nav>
                                        <ul>
                                            <li><a href="{{ url('/products/printer') }}">PRINTERS</a>
                                                <ul class="sub-menu-style">
                                                    <li><a href="{{ url('/products/printer/officejet-printer') }}">Officejet Printer</a></li>
                                                    <li><a href="{{ url('/products/printer/laserjet-printer') }}">Laser Printer</a></li>
                                                    <li><a href="{{ url('/products/printer/inkjet-printer') }}">Inkjet Printer</a></li>
                                                    <li><a href="{{ url('/products/printer/deskjet-printer') }}">Deskjet Printer</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/products/desktops') }}">DESKTOPS</a>

                                            </li>
                                            <li><a href="{{ url('/products/thin-client') }}">THIN CLIENT</a></li>

                                            <li><a href="{{ url('/products/scanner') }}">SCANNERS</a>

                                            </li>
                                            <li><a href="{{ url('/blogs') }}">BLOGS</a></li>
                                            <li><a href="{{ url('contact-us') }}">CONTACT US</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="mobile-logo">
                                <a href="{{ url('/') }}">
                                    <img alt="Eagles Repair" src="{{ asset('assets/images/logo/logo.png') }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="header-action header-action-flex">
                                <div class="same-style-2 main-menu-icon">
                                    <a class="mobile-header-button-active" href="#" aria-label="Open navigation">
                                        <i class="icon-menu"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close" aria-label="Close navigation"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form global-search-form" action="{{ url('/search') }}" method="GET">
                            <input type="hidden" name="category" value="all">
                            <input type="text" name="q" placeholder="Search products..." list="global-search-products">
                            <button class="button-search" type="submit" aria-label="Search products">
                                <i class="icon-magnifier"></i>
                            </button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <nav>
                            <ul class="mobile-menu">
                                <li><a href="{{ url('/') }}">HOME</a></li>
                                <li class="menu-item-has-children"><a href="{{ url('/products/printer') }}">PRINTERS</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/products/printer/officejet-printer') }}">Officejet Printer</a></li>
                                        <li><a href="{{ url('/products/printer/laserjet-printer') }}">Laser Printer</a></li>
                                        <li><a href="{{ url('/products/printer/inkjet-printer') }}">Inkjet Printer</a></li>
                                        <li><a href="{{ url('/products/printer/deskjet-printer') }}">Deskjet Printer</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/products/desktops') }}">DESKTOPS</a></li>
                                <li><a href="{{ url('/products/thin-client') }}">THIN CLIENT</a></li>
                                <li><a href="{{ url('/products/scanner') }}">SCANNERS</a></li>
                                <li><a href="{{ url('/blogs') }}">BLOGS</a></li>
                                <li><a href="{{ url('/about-us') }}">ABOUT US</a></li>
                                <li><a href="{{ url('/faqs') }}">FAQS</a></li>
                                <li><a href="{{ url('/contact-us') }}">CONTACT US</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-contact-info mobile-header-padding-border-4 site-mobile-contact">
                        <ul>
                            <li>
                                <i class="icon-envelope-open"></i>
                                <a href="mailto:info@geektechbuzz.us">info@geektechbuzz.us</a>
                            </li>
                            <li><i class="icon-home"></i>196 Tosto RD, Beaufort, NC 28526</li>
                            <li><i class="icon-clock"></i>Monday - Friday, 9:00am - 5:00pm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


@push('scripts')
    <script>
        document.querySelectorAll('.global-search-form').forEach(function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();

                var searchInput = form.querySelector('input[name="q"]');
                var categoryInput = form.elements.category || document.querySelector('[form="' + form.id + '"][name="category"]');
                var searchValue = searchInput ? searchInput.value.trim() : '';
                var categoryValue = categoryInput ? categoryInput.value.trim() : 'all';
                var pathValue = searchValue || (categoryValue !== 'all' ? categoryValue : '');
                var searchUrl = '{{ url('/search') }}';

                if (pathValue) {
                    searchUrl += '/' + encodeURIComponent(
                        pathValue
                            .toLowerCase()
                            .replace(/&/g, 'and')
                            .replace(/[^a-z0-9]+/g, '-')
                            .replace(/^-+|-+$/g, '')
                    );
                }

                if (searchValue && categoryValue && categoryValue !== 'all') {
                    searchUrl += '?category=' + encodeURIComponent(categoryValue);
                }

                window.location.href = searchUrl;
            });
        });
    </script>
@endpush
