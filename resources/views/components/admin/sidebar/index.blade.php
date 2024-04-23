<!-- Sidebar -->
<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="/">BEM-FRS</a>
            {{-- <a href=".">
          <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a> --}}
        </h1>
        {{-- ########## MOBILE NAVBAR --}}
        <div class="flex-row navbar-nav d-lg-none">
            <x-admin.navbar.themetoggle></x-admin.navbar.themetoggle>
            <x-admin.navbar.dropdown></x-admin.navbar.dropdown>
        </div>
        {{-- ########## END MOBILE NAVBAR --}}
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/users">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Pengguna
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                <path d="M12 12l8 -4.5" />
                                <path d="M12 12l0 9" />
                                <path d="M12 12l-8 -4.5" />
                                <path d="M16 5.25l-8 4.5" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Interface
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="./accordion.html">
                                    Accordion
                                </a>
                                <a class="dropdown-item" href="./blank.html">
                                    Blank page
                                </a>
                                <a class="dropdown-item" href="./badges.html">
                                    Badges
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./buttons.html">
                                    Buttons
                                </a>
                                <div class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#sidebar-cards"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" role="button"
                                        aria-expanded="false">
                                        Cards
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="./cards.html" class="dropdown-item">
                                            Sample cards
                                        </a>
                                        <a href="./card-actions.html" class="dropdown-item">
                                            Card actions
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a href="./cards-masonry.html" class="dropdown-item">
                                            Cards Masonry
                                        </a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="./colors.html">
                                    Colors
                                </a>
                                <a class="dropdown-item" href="./datagrid.html">
                                    Data grid
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./datatables.html">
                                    Datatables
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./dropdowns.html">
                                    Dropdowns
                                </a>
                                <a class="dropdown-item" href="./modals.html">
                                    Modals
                                </a>
                                <a class="dropdown-item" href="./maps.html">
                                    Maps
                                </a>
                                <a class="dropdown-item" href="./map-fullsize.html">
                                    Map fullsize
                                </a>
                                <a class="dropdown-item" href="./maps-vector.html">
                                    Vector maps
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./navigation.html">
                                    Navigation
                                </a>
                                <a class="dropdown-item" href="./charts.html">
                                    Charts
                                </a>
                                <a class="dropdown-item" href="./pagination.html">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                                    Pagination
                                </a>
                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="./placeholder.html">
                                    Placeholder
                                </a>
                                <a class="dropdown-item" href="./steps.html">
                                    Steps
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./stars-rating.html">
                                    Stars rating
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./tabs.html">
                                    Tabs
                                </a>
                                <a class="dropdown-item" href="./tables.html">
                                    Tables
                                </a>
                                <a class="dropdown-item" href="./carousel.html">
                                    Carousel
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./lists.html">
                                    Lists
                                </a>
                                <a class="dropdown-item" href="./typography.html">
                                    Typography
                                </a>
                                <a class="dropdown-item" href="./offcanvas.html">
                                    Offcanvas
                                </a>
                                <a class="dropdown-item" href="./markdown.html">
                                    Markdown
                                </a>
                                <a class="dropdown-item" href="./dropzone.html">
                                    Dropzone
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./lightbox.html">
                                    Lightbox
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./tinymce.html">
                                    TinyMCE
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./inline-player.html">
                                    Inline player
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <div class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" role="button"
                                        aria-expanded="false">
                                        Authentication
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="./sign-in.html" class="dropdown-item">
                                            Sign in
                                        </a>
                                        <a href="./sign-in-link.html" class="dropdown-item">
                                            Sign in link
                                        </a>
                                        <a href="./sign-in-illustration.html" class="dropdown-item">
                                            Sign in with illustration
                                        </a>
                                        <a href="./sign-in-cover.html" class="dropdown-item">
                                            Sign in with cover
                                        </a>
                                        <a href="./sign-up.html" class="dropdown-item">
                                            Sign up
                                        </a>
                                        <a href="./forgot-password.html" class="dropdown-item">
                                            Forgot password
                                        </a>
                                        <a href="./terms-of-service.html" class="dropdown-item">
                                            Terms of service
                                        </a>
                                        <a href="./auth-lock.html" class="dropdown-item">
                                            Lock screen
                                        </a>
                                    </div>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#sidebar-error"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" role="button"
                                        aria-expanded="false">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/file-minus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                            <path
                                                d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                            <path d="M9 14l6 0" />
                                        </svg>
                                        Error pages
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="./error-404.html" class="dropdown-item">
                                            404 page
                                        </a>
                                        <a href="./error-500.html" class="dropdown-item">
                                            500 page
                                        </a>
                                        <a href="./error-maintenance.html" class="dropdown-item">
                                            Maintenance page
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./form-elements.html">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 11l3 3l8 -8" />
                                <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Forms
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
