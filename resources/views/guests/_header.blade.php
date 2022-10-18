<!-- Header START -->
<header class="navbar-light header-sticky">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ route('index_page') }}">
                <img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/solarvilla/logo/solarvilla-logo-light.webp') }}" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/solarvilla/logo/solarvilla-logo-dark.webp') }}" alt="logo">
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
                    class="d-none d-sm-inline-block small">My Account</span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll me-auto">

                    <!-- Nav item products -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productsMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Our Products</a>
                        <ul class="dropdown-menu" aria-labelledby="productsMenu">
                            <li>
                                <a class="dropdown-item" href="#">Product List</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Product Annual Maintenance (AMC)</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Download Brochure</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Nav item Help -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="HelpMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Product Help</a>
                        <ul class="dropdown-menu" aria-labelledby="HelpMenu">
                            <li> <a class="dropdown-item" href="#">Get Support</a></li>
                            <li> <a class="dropdown-item" href="#">Terms & Conditions</a></li>
                            <li> <a class="dropdown-item" href="#">Privacy Policy</a></li>
                            <li> <a class="dropdown-item" href="#">Refund Policy</a></li>
                        </ul>
                    </li>
                    <!-- Nav item About -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="AboutMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Mission SolarVilla</a>
                        <ul class="dropdown-menu" aria-labelledby="AboutMenu">
                            <li> <a class="dropdown-item" href="#">About Us</a></li>
                            <li> <a class="dropdown-item" href="#">CEO Speaks</a></li>
                            <li> <a class="dropdown-item" href="#">Write to us</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Nav category menu START -->
            <div class="navbar-collapse collapse" id="navbarCategoryCollapse">
                <ul class="navbar-nav navbar-nav-scroll nav-pills-primary-soft text-center ms-auto p-2 p-xl-0">
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
                    <!-- Dark mode switch START -->
                    <li class="nav-item">
                        <div class="modeswitch-wrap" id="darkModeSwitch">
                            <div class="modeswitch-item mt-2">
                                <div class="modeswitch-icon"></div>
                            </div>
                            <span>Dark mode</span>
                        </div>
                    </li>
                    <!-- Dark mode switch END -->
                </ul>
            </div>
            <!-- Nav category menu END -->

            <!-- Profile and Notification START -->
            {{-- <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">



            </ul> --}}
            <!-- Profile and Notification START -->

        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<div id="sticky-space" class="" style="height: 0px;"></div>
<!-- Header END -->
