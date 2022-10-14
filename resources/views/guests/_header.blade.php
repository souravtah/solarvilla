<!-- Header START -->
<header class="navbar-light header-sticky">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ route('index_page') }}">
                <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto ms-sm-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="d-none d-sm-inline-block small">Menu</span>
            </button>

            <!-- Responsive category toggler -->
            <button class="navbar-toggler ms-sm-auto mx-3 me-md-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCategoryCollapse" aria-controls="navbarCategoryCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-grid-3x3-gap-fill fa-fw"></i><span
                    class="d-none d-sm-inline-block small">Category</span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll me-auto">

                    <!-- Nav item Listing -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="listingMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Listings</a>
                        <ul class="dropdown-menu" aria-labelledby="listingMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Hotel</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="index.html">Hotel Home</a></li>
                                    <li> <a class="dropdown-item" href="index-hotel-chain.html">Hotel Chain</a></li>
                                    <li> <a class="dropdown-item" href="index-resort.html">Hotel Resort</a></li>
                                    <li> <a class="dropdown-item" href="hotel-grid.html">Hotel Grid</a></li>
                                    <li> <a class="dropdown-item" href="hotel-list.html">Hotel List</a></li>
                                    <li> <a class="dropdown-item" href="hotel-detail.html">Hotel Detail</a></li>
                                    <li> <a class="dropdown-item" href="room-detail.html">Room Detail</a></li>
                                    <li> <a class="dropdown-item" href="hotel-booking.html">Hotel Booking</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Flight</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="index-flight.html">Flight Home</a></li>
                                    <li> <a class="dropdown-item" href="flight-list.html">Flight List</a></li>
                                    <li> <a class="dropdown-item" href="flight-detail.html">Flight Detail</a></li>
                                    <li> <a class="dropdown-item" href="flight-booking.html">Flight Booking</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Tour</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="index-tour.html">Tour Home</a></li>
                                    <li> <a class="dropdown-item" href="tour-grid.html">Tour Grid</a></li>
                                    <li> <a class="dropdown-item" href="tour-detail.html">Tour Detail</a></li>
                                    <li> <a class="dropdown-item" href="tour-booking.html">Tour Booking</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Cab</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="index-cab.html">Cab Home</a></li>
                                    <li> <a class="dropdown-item" href="cab-list.html">Cab List</a></li>
                                    <li> <a class="dropdown-item" href="cab-detail.html">Cab Detail</a></li>
                                    <li> <a class="dropdown-item" href="cab-booking.html">Cab Booking</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Add Listing</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="join-us.html">Join us</a></li>
                                    <li> <a class="dropdown-item" href="add-listing.html">Add Listing</a></li>
                                    <li> <a class="dropdown-item" href="add-listing-minimal.html">Add Listing
                                            Minimal</a></li>
                                    <li> <a class="dropdown-item" href="listing-added.html">Listing Added</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Hero</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="hero-inline-form.html">Hero Inline
                                            Form</a></li>
                                    <li> <a class="dropdown-item" href="hero-multiple-search.html">Hero Multiple
                                            Search</a></li>
                                    <li> <a class="dropdown-item" href="hero-image-gallery.html">Hero Image
                                            Gallery</a></li>
                                    <li> <a class="dropdown-item" href="hero-split.html">Hero Split</a></li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="booking-confirm.html">Booking Confirmed</a></li>
                            <li> <a class="dropdown-item" href="compare-listing.html">Compare Listing</a></li>
                            <li> <a class="dropdown-item" href="offer-detail.html">Offer Detail</a></li>
                        </ul>
                    </li>

                    <!-- Nav item Pages -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu" aria-labelledby="pagesMenu">

                            <li> <a class="dropdown-item" href="about.html">About</a></li>
                            <li> <a class="dropdown-item" href="contact.html">Contact</a></li>
                            <li> <a class="dropdown-item" href="contact-2.html">Contact 2</a></li>
                            <li> <a class="dropdown-item" href="team.html">Our Team</a></li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="sign-in.html">Sign In</a></li>
                                    <li> <a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                                    <li> <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="two-factor-auth.html">Two factor
                                            authentication</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Blog</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="blog.html">Blog</a></li>
                                    <li> <a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Help</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="help-center.html">Help Center</a></li>
                                    <li> <a class="dropdown-item" href="help-detail.html">Help Detail</a></li>
                                    <li> <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="terms-of-service.html">Terms of
                                            Service</a></li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="pricing.html">Pricing</a></li>
                            <li> <a class="dropdown-item" href="faq.html">FAQs</a></li>
                            <li> <a class="dropdown-item" href="error.html">Error 404</a></li>
                            <li> <a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>

                    <!-- Nav item Account -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accounntMenu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                        <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">User Profile</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="account-profile.html">My Profile</a> </li>
                                    <li> <a class="dropdown-item" href="account-bookings.html">My Bookings</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="account-travelers.html">Travelers</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="account-payment-details.html">Payment
                                            Details</a> </li>
                                    <li> <a class="dropdown-item" href="account-wishlist.html">Wishlist</a> </li>
                                    <li> <a class="dropdown-item" href="account-settings.html">Settings</a> </li>
                                    <li> <a class="dropdown-item" href="account-delete.html">Delete Profile</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Agent Dashboard</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="agent-dashboard.html">Dashboard</a> </li>
                                    <li> <a class="dropdown-item" href="agent-listings.html">Listings</a> </li>
                                    <li> <a class="dropdown-item" href="agent-bookings.html">Bookings</a> </li>
                                    <li> <a class="dropdown-item" href="agent-activities.html">Activities</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="agent-earnings.html">Earnings</a> </li>
                                    <li> <a class="dropdown-item" href="agent-reviews.html">Reviews</a> </li>
                                    <li> <a class="dropdown-item" href="agent-settings.html">Settings</a> </li>
                                </ul>
                            </li>

                            <li>
                                <div class="dropdown-item">Master Admin <small>(Coming Soon)</small></div>
                            </li>
                        </ul>
                    </li>

                    <!-- Nav item link-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
                            <li>
                                <a class="dropdown-item" href="../support.webestica.com/index.html" target="_blank">
                                    <i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="docs/index.html" target="_blank">
                                    <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="rtl/index.html" target="_blank">
                                    <i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../themes.getbootstrap.com/store/webestica/index.html"
                                    target="_blank">
                                    <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Booking!
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="docs/alerts.html" target="_blank">
                                    <i class="text-orange fa-fw bi bi-puzzle-fill me-2"></i>Components
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Nav category menu START -->
            <div class="navbar-collapse collapse" id="navbarCategoryCollapse">
                <ul class="navbar-nav navbar-nav-scroll nav-pills-primary-soft text-center ms-auto p-2 p-xl-0">
                    <!-- Nav item Hotel -->
                    {{-- <li class="nav-item"> <a class="nav-link" href="index.html"><i
                                class="fa-solid fa-hotel me-2"></i>Hotel</a> </li> --}}

                    <!-- Nav item Flight -->
                    {{-- <li class="nav-item"> <a class="nav-link" href="index-flight.html"><i
                                class="fa-solid fa-plane me-2"></i>Flight</a> </li> --}}

                    <!-- Nav item Tour -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right me-2"></i> Login
                        </a>
                    </li>

                    <!-- Nav item Cabs -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('register') }}">
                            <i class="bi bi-person-heart me-2"></i> Register
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Nav category menu END -->

            <!-- Profile and Notification START -->
            <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

                <!-- Notification dropdown START -->
                {{-- <li class="nav-item dropdown ms-0 ms-md-3">
                    <!-- Notification button -->
                    <a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="bi bi-bell fa-fw"></i>
                    </a>
                    <!-- Notification dote -->
                    <span class="notif-badge animation-blink"></span>

                    <!-- Notification dropdown menu START -->
                    <div
                        class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                                <h6 class="m-0">Notifications <span
                                        class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                                <a class="small" href="#">Clear all</a>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush list-unstyled p-2">
                                    <!-- Notification item -->
                                    <li>
                                        <a href="#"
                                            class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
                                            <h6 class="mb-2">New! Booking flights from New York ✈️</h6>
                                            <p class="mb-0 small">Find the flexible ticket on flights around the
                                                world. Start searching today</p>
                                            <span>Wednesday</span>
                                        </a>
                                    </li>
                                    <!-- Notification item -->
                                    <li>
                                        <a href="#"
                                            class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
                                            <h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more on a
                                                stay</h6>
                                            <span>15 Nov 2022</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer -->
                            <div class="card-footer text-center border-top">
                                <a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming
                                    activity</a>
                            </div>
                        </div>
                    </div>
                    <!-- Notification dropdown menu END -->
                </li> --}}
                <!-- Notification dropdown END -->

                <!-- Dark mode switch START -->
                <li class="nav-item ms-3">
                    <div class="modeswitch-wrap" id="darkModeSwitch">
                        <div class="modeswitch-item">
                            <div class="modeswitch-icon"></div>
                        </div>
                        <span>Dark mode</span>
                    </div>
                </li>
                <!-- Dark mode switch END -->

                <!-- Profile dropdown START -->
                {{-- <li class="nav-item ms-3 dropdown">
                    <!-- Avatar -->
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                        data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="avatar-img rounded-2" src="assets/images/avatar/01.jpg" alt="avatar">
                    </a>

                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                        aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg"
                                        alt="avatar">
                                </div>
                                <div>
                                    <a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
                                    <p class="small m-0">example@gmail.com</p>
                                </div>
                            </div>
                        </li>

                        <!-- Links -->
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My
                                Bookings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My
                                Wishlist</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help
                                Center</a></li>
                        <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i
                                    class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <!-- Dark mode switch START -->
                        <li>
                            <div class="modeswitch-wrap" id="darkModeSwitch">
                                <div class="modeswitch-item">
                                    <div class="modeswitch-icon"></div>
                                </div>
                                <span>Dark mode</span>
                            </div>
                        </li>
                        <!-- Dark mode switch END -->
                    </ul>
                </li> --}}
                <!-- Profile dropdown END -->
            </ul>
            <!-- Profile and Notification START -->

        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<div id="sticky-space" class="" style="height: 0px;"></div>
<!-- Header END -->
