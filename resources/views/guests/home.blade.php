@extends('layouts.guest')

@section('content')


<!-- **************** MAIN CONTENT START **************** -->
<main>
    <section class="pt-4 pt-md-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-xl-10">
                    <!-- Title -->
                    <h1>World is shifting to Solar energy <i class="bi bi-house-heart-fill"></i>.<br>Are you?</h1>
                    <p class="lead mb-0">Let's join hands to make your place cost efficient, energy efficient & easier to manage. Install our Solar panel for your Homes, Businesses, Farms.</p>
                </div>
            </div>

            <!-- Contact info -->
            <div class="row g-4">

                <!-- Contact item START -->
                <div class="col-md-6 col-xl-6">
                    <div class="card card-body shadow text-center align-items-center h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mb-2"><i class="bi bi-ticket-perforated-fill fs-5"></i></i></div>
                        <!-- Title -->
                        <h5>Check status of your support ticket</h5>
                        <p>Support ticket let us assist you better on your journey of transforming into renewable energy.</p>
                        <!-- Buttons -->
                        <a href="{{ route('tickets.view_ticket_status') }}" class="btn btn-link text-decoration-underline p-0 mb-0"><i class="bi bi-ticket-perforated me-1"></i></i>Click here</a>
                    </div>
                </div>
                <!-- Contact item END -->

                <!-- Contact item START -->
                <div class="col-md-6 col-xl-6">
                    <div class="card card-body shadow text-center align-items-center h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mb-2"><i class="bi bi-headset fs-5"></i></div>
                        <!-- Title -->
                        <h5>Call us</h5>
                        <p>Alternatively you may call us directly by clicking on the numbers given below</p>
                        <!-- Buttons -->
                        <div class="d-grid gap-3 d-sm-block">
                            <a href="tel:09876543210" class="btn btn-sm btn-primary-soft"><i class="bi bi-phone me-2"></i>Click to call +91 9876543210</a>
                            <a href="tel:09876543210" class="btn btn-sm btn-light"><i class="bi bi-telephone-outbound-fill me-2"></i></i>Click to call +91 9876543210</a>
                        </div>
                    </div>
                </div>
                <!-- Contact item END -->

                <!-- Contact item END -->
            </div>
        </div>
    </section>

    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Vector image START -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('assets/images/solarvilla/product_images/image_index_page.jpg') }}" class="rounded-3" alt="">
                </div>
                <!-- Vector image END -->

                <!-- Contact form START -->
                <div class="col-lg-6">
                    <div class="card bg-light p-4">
                        <!-- Svg decoration -->
                        <figure class="position-absolute end-0 bottom-0 mb-n4 me-n2">
                            <svg class="fill-orange" width="104.2px" height="95.2px">
                                <circle cx="2.6" cy="92.6" r="2.6"></circle>
                                <circle cx="2.6" cy="77.6" r="2.6"></circle>
                                <circle cx="2.6" cy="62.6" r="2.6"></circle>
                                <circle cx="2.6" cy="47.6" r="2.6"></circle>
                                <circle cx="2.6" cy="32.6" r="2.6"></circle>
                                <circle cx="2.6" cy="17.6" r="2.6"></circle>
                                <circle cx="2.6" cy="2.6" r="2.6"></circle>
                                <circle cx="22.4" cy="92.6" r="2.6"></circle>
                                <circle cx="22.4" cy="77.6" r="2.6"></circle>
                                <circle cx="22.4" cy="62.6" r="2.6"></circle>
                                <circle cx="22.4" cy="47.6" r="2.6"></circle>
                                <circle cx="22.4" cy="32.6" r="2.6"></circle>
                                <circle cx="22.4" cy="17.6" r="2.6"></circle>
                                <circle cx="22.4" cy="2.6" r="2.6"></circle>
                                <circle cx="42.2" cy="92.6" r="2.6"></circle>
                                <circle cx="42.2" cy="77.6" r="2.6"></circle>
                                <circle cx="42.2" cy="62.6" r="2.6"></circle>
                                <circle cx="42.2" cy="47.6" r="2.6"></circle>
                                <circle cx="42.2" cy="32.6" r="2.6"></circle>
                                <circle cx="42.2" cy="17.6" r="2.6"></circle>
                                <circle cx="42.2" cy="2.6" r="2.6"></circle>
                                <circle cx="62" cy="92.6" r="2.6"></circle>
                                <circle cx="62" cy="77.6" r="2.6"></circle>
                                <circle cx="62" cy="62.6" r="2.6"></circle>
                                <circle cx="62" cy="47.6" r="2.6"></circle>
                                <circle cx="62" cy="32.6" r="2.6"></circle>
                                <circle cx="62" cy="17.6" r="2.6"></circle>
                                <circle cx="62" cy="2.6" r="2.6"></circle>
                                <circle cx="81.8" cy="92.6" r="2.6"></circle>
                                <circle cx="81.8" cy="77.6" r="2.6"></circle>
                                <circle cx="81.8" cy="62.6" r="2.6"></circle>
                                <circle cx="81.8" cy="47.6" r="2.6"></circle>
                                <circle cx="81.8" cy="32.6" r="2.6"></circle>
                                <circle cx="81.8" cy="17.6" r="2.6"></circle>
                                <circle cx="81.8" cy="2.6" r="2.6"></circle>
                                <circle cx="101.7" cy="92.6" r="2.6"></circle>
                                <circle cx="101.7" cy="77.6" r="2.6"></circle>
                                <circle cx="101.7" cy="62.6" r="2.6"></circle>
                                <circle cx="101.7" cy="47.6" r="2.6"></circle>
                                <circle cx="101.7" cy="32.6" r="2.6"></circle>
                                <circle cx="101.7" cy="17.6" r="2.6"></circle>
                                <circle cx="101.7" cy="2.6" r="2.6"></circle>
                            </svg>
                        </figure>

                        <!-- Card header -->
                        <div class="card-header bg-light p-0 pb-3">
                            <h3 class="mb-0">Get your custom quote</h3>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body p-0">
                            <form class="row g-4">
                                <!-- Name -->
                                <div class="col-md-6">
                                    <label class="form-label">Your name *</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label class="form-label">Mobile number (+91)*</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <!-- Mobile number -->
                                <div class="col-12">
                                    <label class="form-label">Email address *</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <!-- Message -->
                                <div class="col-6">
                                    <label class="form-label">Your Power consumption (in KV)</label>
                                    <input type="text" class="form-control">
                                </div>
                                <!-- Message -->
                                <div class="col-6">
                                    <label class="form-label">Your avg monthly electricity bill</label>
                                    <input type="text" class="form-control">
                                </div>
                                <!-- Checkbox -->
                                <div class="col-12 form-check ms-2">
                                    <input type="checkbox" class="form-check-input" id="submitQuote" checked>
                                    <label class="form-check-label" for="submitQuote">
                                        By submitting this form you agree to our terms and conditions.
                                    </label>
                                </div>
                                <!-- Button -->
                                <div class="col-12">
                                    <button class="btn btn-dark mb-0" type="button">Email me the quote</button>
                                </div>
                            </form>
                        </div>
                        <!-- Card body END -->
                    </div>
                </div>
                <!-- Contact form END -->
            </div>
        </div>
    </section>

    <!-- =======================
    Fleet START -->
    <section class="pt-0 pt-md-5">
        <div class="container">

            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Our Solar Products</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="{{ asset('assets\images\solarvilla\product_images\images (10).jpeg') }}" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">Solar Lamp Post</a></h5>
                            <span>(6 Types)</span>
                        </div>
                    </div>
                </div>

                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="{{ asset('assets\images\solarvilla\product_images\images (10).jpeg') }}" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">Micro</a></h5>
                            <span>(8 Cars)</span>
                        </div>
                    </div>
                </div>

                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="{{ asset('assets\images\solarvilla\product_images\images (10).jpeg') }}" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">CUV</a></h5>
                            <span>(4 Cars)</span>
                        </div>
                    </div>
                </div>

                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="{{ asset('assets\images\solarvilla\product_images\images (10).jpeg') }}" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">SUV</a></h5>
                            <span>(5 Cars)</span>
                        </div>
                    </div>
                </div>

                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="{{ asset('assets\images\solarvilla\product_images\images (10).jpeg') }}" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">Pick up</a></h5>
                            <span>(3 Pickup Truck)</span>
                        </div>
                    </div>
                </div>

                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="{{ asset('assets\images\solarvilla\product_images\images (10).jpeg') }}" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">Coupe</a></h5>
                            <span>(9 Cars)</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =======================
    Fleet END -->

    <!-- =======================
    Why Choose Us START -->
    <section class="pt-0 pt-xl-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-3 mb-sm-4">
                <div class="col-12 text-center">
                    <h2>Why Choose SolarVilla</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4"><i
                                class="bi bi-lightning-fill fs-5"></i></div>
                        <h5>Best service</h5>
                        <p class="mb-0">Our after sale service is the best in the trade. SolarVilla family has served over 120+ customers.</p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mb-4"><i
                                class="fa-solid fa-leaf fs-5"></i></div>
                        <h5>Economical Trip</h5>
                        <p class="mb-0">Extremity now strangers contained breakfast him discourse additions
                            Sincerity.</p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-warning bg-opacity-15 text-warning rounded-circle mb-4"><i
                                class="bi bi-life-preserver fs-5"></i></div>
                        <h5>Secure and Safer</h5>
                        <p class="mb-0">Perpetual extremity now strangers contained breakfast him discourse
                            additions.</p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mb-4"><i
                                class="fa-solid fa-car fs-5"></i></div>
                        <h5>Vehicle Options</h5>
                        <p class="mb-0">The Prosperous impression had conviction For every delay in they
                            Extremity now. </p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-circle mb-4"><i
                                class="fa-solid fa-wifi fs-5"></i></div>
                        <h5>Cab Entertainment</h5>
                        <p class="mb-0">Extremity now strangers contained breakfast him discourse additions
                            Sincerity.</p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mb-4"><i
                                class="fa-solid fa-wheelchair fs-5"></i></div>
                        <h5>Polite Driver</h5>
                        <p class="mb-0">Perpetual extremity now strangers contained breakfast him discourse
                            additions.</p>
                    </div>
                    <!-- Card END -->
                </div>

            </div> <!-- Row END -->

        </div>
    </section>
    <!-- =======================
    Why Choose Us END -->

    <!-- =======================
    Action box START -->
    {{-- <section class="pt-0 pt-lg-8">
        <div class="container position-relative">
            <!-- Mockup -->
            <div class="position-absolute bottom-0 end-0 z-index-99 me-8 d-none d-lg-block">
                <img src="assets/images/element/01.png" class="h-400px mb-3" alt="">
            </div>

            <div class="row">
                <div class="col-12">

                    <div class="bg-light rounded-2 position-relative overflow-hidden p-4 p-sm-5">
                        <!-- SVG decoration -->
                        <figure class="position-absolute bottom-0 start-0 mb-n1">
                            <svg class="fill-primary" width="77px" height="77px">
                                <path
                                    d="M76.997,41.258 L45.173,41.258 L67.676,63.760 L63.763,67.673 L41.261,45.171 L41.261,76.994 L35.728,76.994 L35.728,45.171 L13.226,67.673 L9.313,63.760 L31.816,41.258 L-0.007,41.258 L-0.007,35.725 L31.816,35.725 L9.313,13.223 L13.226,9.311 L35.728,31.813 L35.728,-0.010 L41.261,-0.010 L41.261,31.813 L63.763,9.311 L67.676,13.223 L45.174,35.725 L76.997,35.725 L76.997,41.258 Z">
                                </path>
                            </svg>
                        </figure>

                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-50 translate-middle ms-9">
                            <svg class="fill-warning" width="191.7px" height="211px" viewBox="0 0 191.7 211">
                                <path
                                    d="M183.4,105.8c0-0.8-0.1-1.4-0.2-2c-0.2-1-0.5-2-0.8-3c-0.3-1.5-1-2.9-1.5-4.3c-0.2-0.5-0.3-1-0.6-1.4 c-0.3-0.4-0.5-0.9-0.7-1.4c0-0.1-0.1-0.2-0.3-0.1c0.1,0.2,0,0.4,0.2,0.7c0.5,1.1,0.9,2.2,1.3,3.3c0.5,1.2,0.8,2.4,1.2,3.6 c0.2,0.7,0.4,1.3,0.6,2C182.7,104,182.8,104.9,183.4,105.8 M120.9,62.4c0.3,0,0.5,0.3,0.8,0.2c0.4-0.1,0.6-0.4,1-0.6 c0.5-0.3,0.6-0.7,0.6-1.2c0-0.4,0.3-0.3,0.5-0.4c0-0.8,0-1.6-0.8-2.2C122.4,59.6,121.1,60.7,120.9,62.4 M148.7,166.5 c-1.9,0.9-5.9,4.1-6.5,5.8c0.5-0.3,1.1-0.4,1.2-1c0.1-0.2,0.4-0.4,0.6-0.6c0.2-0.3,0.6,0,0.9-0.3c0.2-0.3,0.7-0.5,0.9-0.8 c0.2-0.5,0.7-0.5,1-0.8c0.2-0.3,0.5-0.7,0.9-0.8c0.4-0.2,0.4-0.7,0.9-0.7c0.5,0,0.4-0.7,0.8-0.6c0.4-0.5,1.1-0.7,1.5-1.2 c0.1-0.2,0.2-0.3,0-0.5c-0.5,0.1-0.9,0.5-1.3,0.8c-0.3,0-0.4-0.4-0.7-0.2c0,0-0.1,0-0.1,0.1C148.7,165.8,148.7,166.1,148.7,166.5  M159,171.3c-1.2,0.4-1.8,1.5-2.8,2.1c-1,0.6-1.9,1.4-2.9,2.2c-1,0.8-1.9,1.6-2.8,2.4c0.2,0.1,0.4,0.1,0.6,0 c0.7-0.7,1.8-0.6,2.3-1.5c0.7,0,1-0.6,1.4-0.9c0.3-0.3,0.7-0.4,1-0.4c0.3-0.5,0.6-0.8,1-1c0.4-0.2,0.6-0.7,1.1-0.8 c-0.3-0.7-0.3-0.7,0.7-1c0-0.2-0.3-0.2-0.2-0.5C158.6,171.7,158.8,171.5,159,171.3 M127.8,135.8c1.4-1.9,2.6-3.9,3.7-5.9 c1.3-2.5,2.5-5,3.8-7.4c0.1-0.3,0.2-0.5,0-0.8c-2.7,4.5-5,9.1-7.4,13.6C127.7,135.4,127.8,135.6,127.8,135.8 M38.9,72.2 c-0.4,0.4-0.8,0.8-1.2,1.2c-0.3,0.4-0.8,0.7-1.1,1.1c-0.5,0.5-0.8,1.2-1.3,1.7c-1,1-1.9,2.1-2.8,3.2c-1.4,1.7-2.4,3.7-3.6,5.6 c-0.3,0.4-0.5,0.9-0.7,1.4c3.7-4.5,6.8-9.5,10.8-13.8C39.1,72.5,39,72.3,38.9,72.2 M94.1,198.1c0.1,0.4,0.1,0.6,0.2,0.8 c-0.6,0-0.2,0.9-0.9,1c-0.7,0-1.4-0.1-2.2,0.2c-0.4,0.1-0.3,0.3-0.2,0.5c0.6,0,1.2,0.1,1.6-0.3c0.3,0.1,0.1,0.4,0.4,0.5 c0.8,0,1.6,0.2,2.3,0c0.8-0.3,1.5-0.1,2.2-0.2c0.8,0,1.5,0,2.3,0c0.2,0,0.4,0,0.6,0c0.1,0,0.1-0.1,0.2-0.1c0-0.2,0.1-0.4,0-0.6 c-0.7,0.3-0.7,0.2-1.2-0.2c-0.3-0.2,0-0.4,0-0.5c-0.1-0.4-0.6-0.2-0.9-0.4c-0.2-0.1,0.2-0.5-0.2-0.6c-0.2,0.4,0.2,0.9-0.4,1.2 c-0.6-0.3-0.6-0.3-1.1,0.4c0,0.3,0.5,0,0.5,0.4c-0.3,0-0.6,0.2-0.7-0.3c0-0.2-0.5-0.3-0.6-0.4c-0.3,0-0.3,0.3-0.5,0.2 c-0.3-0.2-0.3-0.6-0.5-0.8c0.1-0.2,0.4-0.3,0.4-0.5c-0.4-0.2-0.5,0.3-0.8,0.2C94.4,198.4,94.3,198.3,94.1,198.1 M101.9,167.3 c0-0.9,0.6-1.5,0.8-2.3c0.2-1,0.6-2,0.8-2.9c0.2-0.8,0.5-1.7,0.6-2.5c0.2-0.9,0.5-1.7,0.7-2.6c0.2-0.9,0.4-1.8,0.7-2.7 c0.2-0.5,0.4-1,0.5-1.5c0.1-0.6,0.2-1.2,0.5-1.7c0.3-0.5,0-1.3,0.7-1.7c0.2-0.1,0.1-0.4,0-0.6c0-0.1-0.2-0.2-0.1-0.3 c0.5-0.5,0.3-1.2,0.6-1.8c-0.2,0-0.4,0-0.5,0.3c-0.4,1.3-0.9,2.6-1.4,3.9c-0.1,0.5-0.4,0.9-0.3,1.4c-0.6,1-0.7,2.1-0.9,3.1 c-0.2,1.1-0.6,2.1-0.8,3.2c-0.6,2.3-1.1,4.7-1.9,7C102.1,166.1,101.4,166.6,101.9,167.3 M23.2,154c-0.1-0.3-0.2-0.6-0.4-0.8 c-0.1-0.1-0.3-0.1-0.4-0.3c-0.3-1.1-0.6-2.1-1-3.1c-0.2-0.5-0.3-1.1-0.7-1.5c-1.1-1.2-2.1-2.4-3.2-3.7c-0.1-0.1-0.3-0.2-0.3-0.4 c0-0.3-0.3-0.4-0.4-0.5c-0.1-0.1-0.2-0.4-0.6-0.4c0.7,1.7,1.6,3.2,2.5,4.7c0.9,1.4,1.7,2.9,2.7,4.2c0.4,0.6,0.8,1.3,1.1,2 c0,0.1,0.2,0.1,0.2,0.2C23,154.2,23.1,154.1,23.2,154 M90.5,85.8c0.5-0.1,0.4-0.6,0.7-0.8c0.3-0.2,0.5-0.6,0.8-0.9 c0.9-1.2,1.8-2.4,2.8-3.6c0.7-0.9,1.4-1.7,2-2.6c0.6-0.9,1.4-1.7,1.9-2.6c0.5-0.9,1.4-1.5,1.7-2.5c-0.6-0.4-1-0.4-1.5,0.1 c-0.7,0.8-1.3,1.7-1.9,2.5c-0.4,0.6-0.8,1.2-1.2,1.8c-0.9,1.1-1.6,2.3-2.4,3.5c-0.9,1.4-1.8,2.9-2.8,4.3 C90.5,85.3,90.4,85.5,90.5,85.8 M140.6,176.1c0.5-0.5,1.1-0.7,1.7-1c0.7-0.4,1.3-0.8,1.9-1.2c0.3-0.1,0.2-0.6,0.6-0.5 c0.6-1.2,1.7-1.9,2.8-2.7c0.1,0.1,0.3,0.2,0.4,0.3c0.1-0.1,0.2-0.2,0.3-0.3c-0.1-0.1-0.2-0.2-0.2-0.3c0.2-0.3,0.6,0.1,0.7-0.3 c-0.1-0.1-0.3-0.1-0.4-0.2c0-0.7,0-0.7,0.7-0.9c0.1,0,0.2-0.1,0.2-0.2c0-0.2-0.2-0.3-0.2-0.4c0.1-0.3,0.7-0.4,0.4-0.8 c-0.8,0.3-1.2,0.9-1.8,1.4c-0.7,0.5-1.4,1-2,1.6c-0.6,0.6-1.2,1.1-1.9,1.6c-0.7,0.6-1.5,1.1-2.2,1.7c-0.2,0.2-0.4,0.6-0.7,0.7 c-0.4,0.1-0.6,0.4-0.8,0.6c-0.3,0.3-0.5,0.5-0.8,0.8C139.7,176.4,140.2,175.5,140.6,176.1 M130.5,206.4c0.2,0.2,0.5,0.1,0.7,0 c1-0.4,2-0.7,3-1.1c1.8-0.6,3.5-1.4,5.2-2.2c2.9-1.3,5.8-2.8,8.5-4.4c1.2-0.7,2.3-1.4,3.5-2.2c1.2-0.8,2.4-1.7,3.6-2.6 c1.2-0.8,2.2-1.7,3.3-2.6c0.9-0.7,1.7-1.6,2.7-2.2c0.2-0.1,0.4-0.3,0.5-0.5c0.2-0.2,0.4-0.3,0.5-0.5c-0.3-0.2-0.4,0-0.5,0.1 c-0.5,0.6-1.1,1-1.7,1.4c-1.4,1-2.7,2.2-4.1,3.2c-0.7,0.6-1.5,1.2-2.2,1.7c-1.8,1.1-3.4,2.3-5.2,3.3c-2.4,1.4-4.8,2.7-7.2,4.1 c-0.6,0.3-1.2,0.4-1.8,0.7c-1.2,0.7-2.5,1.3-3.8,1.8c-1,0.3-1.9,0.9-2.9,1.2C131.8,205.8,131.1,206,130.5,206.4 M10.6,79.8 c0.1-0.1,0.3-0.3,0.4-0.4c-0.3-0.2-0.3-0.5-0.4-0.8c0.2-0.5,0.8,0.1,0.9-0.5c-0.1-0.2-0.4,0-0.5-0.3c-0.1-0.4,0.2-0.7,0.4-1 c0.2-0.1,0.4,0.1,0.6-0.1c-0.2-0.3-0.4-0.5-0.1-0.8c0.4-0.6,0.6-1.5,1.2-1.9c0.2-0.2,0.1-0.5,0.4-0.7c-0.2-0.6,0.3-1,0.5-1.4 c0.8-1.4,1.6-2.8,2.4-4.1c1.2-1.8,2.3-3.5,3.6-5.2c0.9-1.1,1.7-2.4,2.8-3.4c0.2-0.2,0.2-0.3,0-0.4c-4.4,3.8-7.5,8.7-10,13.9 c-0.2-0.2-0.3-0.3-0.5-0.2c-0.2,0.4-0.3,0.8-0.6,1.2c-0.3,0.5-0.3,0.8,0,1.2c-0.2,0.5-0.5,0.9-0.6,1.2c-0.2,0-0.5,0-0.5,0.1 c-0.3,0.6-0.8,1.1-0.6,1.8c-0.5,0-0.5,0.5-0.7,0.7c0.2,0.4-0.6,0.7-0.1,1.2c0.3,0.4,0.1,0.7-0.3,0.9c-0.1-0.1-0.1-0.1-0.2-0.2 c0,0.4-0.5,0.5-0.3,0.9c0.2,0.2,0.3-0.3,0.5,0C8.6,82,8.4,82.7,8,83.3c-0.2,0.4-0.2,0.7-0.1,1.1c0.3-0.5,0.3-1,0.9-1.2 c-0.2-0.2-0.4-0.3-0.1-0.6c0.2-0.3,0.5-0.2,0.8-0.3c0.1,0,0.1-0.1,0.1-0.2c-0.1-0.1-0.3-0.1-0.5-0.2c0.5-0.9,0.8-1.8,1.4-2.6 C10.5,79.6,10.5,79.7,10.6,79.8 M21.4,74.7c0.9-0.5,1.3-1.4,2-2c0.5-0.5,1-1.2,1.5-1.8c0.5-0.7,1.1-1.2,1.6-1.9 c0.7-1,1.5-1.9,2.3-2.8c0.2-0.2,0.5-0.4,0.7-0.7c0.3-0.7,1-1.1,1.5-1.7c0.5-0.6,0.8-1.3,1.4-1.7c0.2-0.1,0.4-0.1,0.5-0.4 c0.7-1,1.8-1.7,2.4-2.8c0.5-0.1,0.5-0.6,0.8-0.9c0.3-0.3,0.6-0.6,0.9-0.9c-0.6-0.3-0.7,0.3-1,0.4c-1.2,0.7-2.3,1.5-3.4,2.5 c-2,1.8-3.8,3.9-5.5,6c-0.4,0.5-0.9,1-1.3,1.5c-1.3,1.8-2.6,3.7-3.9,5.6C21.8,73.6,21.6,74,21.4,74.7 M65.2,30.8 c-0.5-0.4-0.8-0.2-1.1,0.1v0.8c-0.7,0-0.6,1-1.2,1.3c-0.6,0.2-1,0.8-1.4,1.3c0.1,0.3,0.5,0.1,0.6,0.4c0.4-0.4,0.7-0.9,1.3-0.8v-0.6 c0.5-0.1,0.8-0.5,1.1-0.8c0.3-0.3,0.9-0.3,0.9-0.9c0.6,0.1,0.6-0.6,1-0.8c0.4-0.2,0.7-0.6,1-0.9c0.3-0.3,0.6-0.8,0.9-1.1 c0.3-0.3,0.5-0.7,0.9-1c0.4-0.3,0.9-0.4,1-0.9c0.2-0.5,0.6-0.7,1-0.9c-0.2-0.8,0.4-0.8,1-0.9c-0.1-0.1-0.2-0.2-0.2-0.2 c0-0.3,0.3-0.1,0.4-0.3c0.2-0.5,0.5-1.1,1-1.4c0.6-0.3,0.8-0.9,1.3-1.3c1.7-1.7,3.4-3.3,5.2-4.9c0.1-0.1,0.2-0.3,0.4-0.3 c0.8-0.2,1.2-0.8,1.8-1.3c0.6-0.5,1.2-1.1,1.8-1.5c1-0.6,1.9-1.2,2.7-2c0.2,0.1,0.2,0.2,0.3,0.2c0.5-0.4,0.8-1,1.3-1.1 c0.6-0.1,0.8-0.6,1.4-1c-1.2,0.1-1.2,0.1-1.8,0.7c-0.4-0.3-0.8,0.3-1.2,0c-0.1,0.4,0,1-0.8,1c-0.1,0-0.3,0.1-0.3,0.2 c-0.3,0.8-1.1,1-1.7,1.4c-0.5,0.4-1,0.8-1.6,0.6c-0.3,0.6-0.6,1-1.1,1.2c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1,0.3-0.3,0.6-0.4,0.9 c-0.4,0-0.8,0.2-1.1,0.4v0.5c-0.4,0.1-0.6,0.3-0.8,0.6c-0.2,0.2-0.6,0.2-0.7,0.7c-0.1,0.3-0.5,0.5-0.7,0.8c-0.3,0.1-0.6-0.1-0.9,0.1 c0.2,0.1,0.4,0.1,0.7,0.3c-0.7,0-0.7,0.5-0.9,0.8c-0.5,0.4-0.9,0.9-1.4,1.4c0.2,0.5-0.5,0.2-0.5,0.6c0,0.5-0.6,0-0.7,0.4 c0.1,0.1,0.1,0.2,0.1,0.1c-0.6,0.6-1.1,1.1-1.7,1.7c-0.1,0.2-0.2-0.3-0.4-0.1c-0.3,0.3,0.6,0.5,0.1,0.8c-0.2,0-0.2-0.3-0.4-0.1 c-0.1,0.2,0.1,0.5-0.2,0.7c-0.1-0.2-0.3-0.3-0.4-0.3C70,25,70,25.1,70,25.2c0,0.5-0.1,1-0.7,1.2c0,0.5-0.5,0.5-0.8,0.8 c-0.2,0.3-0.6,0.5-0.8,0.9C67.1,29.1,66,29.8,65.2,30.8 M1.2,100.8c-0.3-0.2-0.3-0.6-0.2-0.9c0.6-1.7,0.8-3.5,1.3-5.2 C2.6,93.9,2.8,93,3,92c0.1-0.8,0.5-1.4,0.6-2.2C3.7,89,4,88.2,4.2,87.4c0.2-0.7,0.5-1.3,0.7-2c0.3-1,0.6-2,1-3 c0.2-0.6,0.4-1.3,0.8-1.8c0.1-0.1,0.1-0.3,0.1-0.4c0.2-0.6,0.4-1.2,0.7-1.8c0.6-1.2,1.1-2.5,1.7-3.7c0.5-0.9,0.9-1.8,1.3-2.6 c0.4-0.8,0.8-1.7,1.3-2.5c1-1.9,2.2-3.8,3.5-5.6c1-1.4,2.1-2.7,3.2-4c0.9-1.1,1.8-2.1,2.9-3c0.8-0.7,1.6-1.6,2.5-2.2 c0.8-0.6,1.7-1.3,2.5-1.9c1.9-1.4,3.9-2.8,5.9-4.1c1.2-0.8,2.4-1.5,3.6-2.3c1.4-0.9,2.8-1.6,4.2-2.5c0.8-0.5,1.7-1,2.6-1.4 c0.8-0.5,1.7-0.8,2.5-1.3c0.8-0.5,1.7-0.9,2.5-1.3c0.8-0.4,1.5-1,2.5-1.1c0.4-0.7,1.2-0.7,1.8-1c0.6-0.3,1.2-0.6,1.8-1 c0.6-0.4,1.2-0.7,1.8-1.1c1.2-0.7,2.3-1.5,3.5-2.2c0.7-0.4,1.2-1.1,1.9-1.5c1.3-0.9,2.4-2,3.5-3.1c0.4-0.5,0.9-0.9,1.4-1.2 c0.4-0.2,0.4-0.7,0.8-1c0.6-0.5,1-1,1.6-1.5c0.2-0.2,0.3-0.3,0.3-0.6c0.3,0,0.4,0,0.6-0.1c0.2-0.2-0.1-0.2-0.1-0.3 c0.2-0.2,0.3-0.5,0.7-0.6c0.3-0.1,0.3-0.5,0.5-0.7c0.6-0.4,0.7-1.3,1.5-1.5c0.2-0.7,0.8-1.1,1.2-1.7c0.2-0.3,0.5-0.5,0.8-0.6 c0.3-0.1,0.1-0.7,0.6-0.6c0.5-1.1,1.6-1.6,2.4-2.3c1.4-1.2,2.6-2.4,4.2-3.4c0.8-0.5,1.5-1.2,2.2-1.7c1.8-1.1,3.5-2.3,5.4-3.2 c0.8-0.4,1.5-0.9,2.3-1.3c1.7-0.8,3.3-1.5,5.1-2.2c0.3-0.1,0.6-0.3,1-0.2c0.4,0.1,0.6-0.4,0.9-0.5c0.4-0.1,0.9-0.1,1.3-0.3 c0.2-0.1,0.7-0.2,1-0.3c0.9-0.5,2-0.4,2.9-0.9c0.3-0.2,0.8-0.1,1.1-0.1c1.2-0.1,2.4-0.7,3.6-0.6c0.7,0,1.3-0.1,1.9-0.4 c0.2-0.1,0.4-0.2,0.6-0.1c0.6,0.2,1.1,0,1.6,0c0.6,0,1.1-0.3,1.7-0.2c0.6,0,1.3,0.2,1.8,0c1-0.3,2-0.2,3-0.2c0.5,0,1-0.2,1.5,0.2 c0.2,0.2,0.5-0.5,0.8-0.1c0.2,0.2,0.5,0.2,0.7,0c0.3-0.1,0.6,0.3,0.8,0.1c0.2-0.2,0.6-0.4,0.7-0.2c0.2,0.4,0.6-0.1,0.7,0.2 c0,0,0.1,0,0.1,0c1.1-0.1,2.1,0.3,3.2,0.3c0.6,0,1.3,0.1,1.9,0.3c0.6,0.2,1.2,0.3,1.8,0.4c1,0.2,2,0.6,3,0.8c0.3,0,0.3,0.7,0.8,0.3 c0.2,0.4,0.6,0.1,0.9,0.2c0.2,0.1,0.4,0.3,0.6,0.5c0.6-0.1,1.1,0.2,1.7,0.4c1.1,0.4,2.2,0.9,3.3,1.5c1.4,0.8,2.9,1.5,4.1,2.8 c0.2,0.3,0.5,0,0.8,0.2c1.3,1.2,2.8,2.2,3.9,3.6c0.5,0.6,1.2,1,1.7,1.6c1,1.2,2.1,2.3,3,3.6c0.5,0.8,1.1,1.6,1.7,2.4 c1.1,1.7,2.1,3.4,2.8,5.3c0.5,1.4,1,2.8,1.4,4.3c0.1,0.5,0.1,1,0.2,1.5c0.2,0.5,0.2,0.9,0.2,1.4c0,0.4,0.3,0.6,0.3,1 c-0.1,0.3-0.1,0.7,0.2,1c0.1,0.2,0,0.5,0,0.8c0,0.4,0.1,0.8,0,1.2c-0.1,0.3,0.4,0.6,0,0.9c0.4,0.3,0.2,0.7,0.2,1.1 c0,0.4,0,0.7,0,1.1v1.2c0,0.4-0.1,0.8,0,1.1c0.2,0.6,0.1,1.3,0.2,1.9c0.1,0.7,0.1,1.5,0,2.2c0,0.6,0.4,1.2,0.3,1.9 c-0.1,0.6-0.2,1.3,0,1.9c0.2,0.7,0,1.4,0.3,2c0.3,0.7,0,1.4,0.2,2c0.4,1.4,0.4,2.8,0.8,4.2c0.5,1.7,0.7,3.5,1.3,5.2 c0.4,1.1,0.8,2.2,1.1,3.3c0.4,1.1,0.9,2.1,1.5,3.2c0.7,1.3,1.5,2.5,2.4,3.6c0.9,1.2,1.9,2.2,2.8,3.3c0.4,0.5,0.9,1,1.3,1.5 c0.4,0.6,1.1,1,1.5,1.6c1.1,1.5,2.5,2.6,3.5,4.2c1.7,1.6,2.7,3.6,4.1,5.4c0.7,0.9,1.2,1.9,1.7,2.9c1,1.6,1.8,3.3,2.6,5 c0.8,1.6,1.4,3.2,1.9,4.8c0.4,1.2,0.7,2.4,1.1,3.6c0.2,0.5-0.1,1,0.3,1.4c0,1.1,0.6,2.2,0.5,3.3c0.4,0.7,0.3,1.4,0.2,2.1 c0,0.5,0.4,0.9,0.3,1.5c-0.1,0.5-0.2,1.1,0,1.6c0.3,0.8,0.2,1.7,0.2,2.5c0,1.9,0,3.8,0,5.7c0,0.6,0.2,1.3-0.1,1.9 c-0.3,0.5,0.1,1.2-0.3,1.7c-0.1,0.2,0.2,0.3,0.2,0.6c-0.1,0.5,0.2,1.1-0.2,1.6c-0.3,0.4,0.1,1-0.3,1.5c-0.2,0.3,0.6,0.7,0,1 c0.1,0.7-0.1,1.3-0.2,2c-0.1,0.5,0.2,1.1-0.2,1.6c-0.3,0.5,0.2,1.1-0.3,1.6c0.2,0.8-0.3,1.5-0.3,2.3c0,0.6-0.2,1.2-0.3,1.8 c-0.2,0.9-0.4,1.9-0.6,2.8c-0.1,0.3-0.2,0.7-0.3,1c-0.1,0.2-0.3,0.3-0.3,0.5c0,1.5-0.5,2.9-1,4.3c-0.3,0.8-0.5,1.7-0.9,2.6 c-0.1,0.2-0.1,0.6-0.3,0.8c-0.5,0.6-0.7,1.4-0.9,2.2c-0.1,0.4-0.3,0.8-0.5,1.1c0,0.1-0.2,0.1-0.2,0.2c0,1.1-0.7,1.9-1.1,2.8 c-0.4,0.9-1,1.7-1.3,2.6c-0.8,1.8-1.9,3.4-2.7,5.2c-0.3,0.6-0.7,1.1-0.9,1.5c-0.1,0.4,0.2,0.4,0.2,0.8c-0.1,0.3-0.3,0.4-0.7,0.5 c0.2,0.9-0.5,1.5-0.9,2.1c-0.9,1.6-1.9,3.1-3,4.6c-0.7,1-1.4,2-2.2,2.9c-2.6,2.9-5.3,5.6-8.1,8.3c-1.1,1-2.1,2.1-3.3,3 c-1,0.8-1.9,1.7-2.9,2.4c-2.3,1.8-4.7,3.5-7.1,5.1c-1.9,1.2-3.8,2.3-5.8,3.4c-1.2,0.7-2.5,1.4-3.8,1.9c-2.1,1-4.2,1.9-6.3,2.7 c-2,0.8-4.1,1.2-6.1,2.1c-1.3,0-2.5,0.8-3.8,0.8c-0.6,0.4-1.3,0.3-1.9,0.4c-0.6,0.1-1.3,0.4-2,0.3c-0.3,0-0.6,0.3-1,0.2 c-0.3-0.1-0.7-0.1-1,0.2c-0.3-0.4-0.5,0.2-0.8,0.1c-0.3-0.1-0.8-0.1-1.1,0c-0.8,0.3-1.6,0-2.3,0.3c-0.8,0.3-1.5,0-2.2,0.2 c-0.9,0.3-1.7-0.2-2.5,0c-0.1,0-0.2-0.1-0.3-0.2c-0.2,0.1-0.1,0.3-0.2,0.4c-0.3-0.2-0.5-0.4-0.8-0.4c-0.3-0.1-0.7,0-1.2,0 c-0.2,0.2-0.4,0.5-0.6,0.8c-0.5-0.1-0.9,0.1-1.3-0.2c-0.2-0.1-0.6,0.1-0.9,0.1c-0.4,0.1-0.8-0.4-1.1-0.2c-0.4,0.3-0.8,0.2-1.2,0.2 c-3.5,0-7.1,0-10.6,0c-0.4,0-0.8,0.2-1.1-0.2c-0.4,0.6-0.7-0.1-1.1,0c-0.4,0.1-0.7-0.1-1.1-0.2c-0.6-0.2-1.4,0-2.1-0.1 c-0.5,0-0.9,0.1-1.4-0.2c-0.4-0.2-0.9-0.1-1.4-0.2c-0.6-0.1-1.2-0.3-1.8-0.3c-0.4,0-0.8,0-1.3-0.2c-0.3-0.2-0.8,0.1-1.1-0.3 c-0.8,0-1.6-0.3-2.4-0.5c-1.9-0.4-3.7-1-5.6-1.6c-1.5-0.5-3.1-1-4.6-1.6c-0.5-0.2-1-0.4-1.5-0.6c-1.7-0.8-3.5-1.5-5.1-2.4 c-1.4-0.8-2.9-1.6-4.3-2.5c-0.7-0.5-1.6-0.8-2.4-1.3c-1.8-1.1-3.7-2.2-5.4-3.4c-1.5-1.1-3.1-2.1-4.4-3.4c-0.3-0.4-0.8-0.6-1.2-0.9 c-0.4-0.4-0.8-0.9-1.2-1.2c-0.6-0.4-1.1-1-1.6-1.4c-0.4-0.3-0.4-1-1.1-1.2c-0.5-0.1-0.5-0.9-1.1-1.1c-0.2-0.8-1-0.9-1.4-1.6 c-0.4-0.7-1-1.1-1.6-1.7c-0.5-0.5-1.2-1-1.6-1.7c-0.9-1.1-2-2-2.8-3.1c-0.8-1-1.9-1.9-2.5-3.1c-0.1-0.3-0.4-0.2-0.6-0.3 c-0.2-0.2-0.1-0.4-0.3-0.6c-0.7-0.7-1.3-1.4-2-2.2c-0.9-1.1-1.7-2.2-2.6-3.3c-1.4-1.7-2.6-3.5-3.8-5.3c-0.8-1.2-1.5-2.4-2.3-3.6 c-0.9-1.4-1.7-2.8-2.6-4.2c-0.6-1.1-1.2-2.2-1.8-3.3c-0.5-0.9-1-1.7-1.5-2.5c-0.7-1.2-1.4-2.3-2.1-3.5c-1-1.6-1.9-3.3-2.8-5.1 c-0.4-0.9-0.8-1.8-1.2-2.7c-0.2-0.6-0.4-1.2-0.7-1.8c-0.6-1.1-0.8-2.4-1.2-3.5c-0.1-0.4-0.2-0.8-0.3-1.2c-0.1-0.4-0.2-0.7-0.2-1.1 c-0.2-1.1-0.2-2.3-0.7-3.4c0-0.1,0-0.2,0-0.2c0.1-1.3-0.4-2.5-0.3-3.8c0.1-1.1-0.4-2.3-0.2-3.4c-0.4-0.7-0.1-1.4-0.3-2.1 c-0.4-1.8-0.2-3.7-0.2-5.5c0-1.8,0-3.7,0-5.5c0-1.3,0.3-2.5,0.5-3.8c0-0.3,0.2-0.6,0.2-0.9C0.7,101.7,0.9,101.2,1.2,100.8">
                                </path>
                            </svg>
                        </figure>

                        <!-- SVG decoration -->
                        <figure class="position-absolute bottom-0 end-0 me-6 mb-n6 d-none d-sm-block">
                            <svg class="fill-info" width="189.7px" height="182.4px" viewBox="0 0 189.7 182.4">
                                <path
                                    d="M27.2,37.9c-1.9,1.4-3.2,2.6-4,4.4c-0.2,0.5-0.5,1,0.1,1.4c0.3,0.2,1.1,0,1.1,0C24.5,41.4,28.1,41.2,27.2,37.9 M159.4,152.4c0.3,0.2,0.5,0.4,0.8,0.7c3.5-2.6,6.5-5.7,8.8-9.4c-1.7,1.2-3,2.8-4.5,4.2C162.8,149.5,161.1,150.9,159.4,152.4 M58.2,69.6c3.4-5.2,7.7-9.9,9.5-15.9C62.7,57.9,60.6,63.8,58.2,69.6 M133.9,106.2c-3.2,4-7.8,7.2-8.4,13 C129.3,115.5,132.8,111.6,133.9,106.2 M31.5,33.9c7.9-6.7,17-11.9,24.2-19.6C46.5,19.6,37.9,25.4,31.5,33.9 M154.5,109.5 c-7.4,9.6-14.7,18.9-21.9,28.2C146.6,125.7,153.4,116.8,154.5,109.5 M34.4,70.2c0.4-0.2,0.9-0.4,1-0.7C39,59,46.4,51.4,54.4,44 c4-3.6,6.6-8.5,10.1-13.8C53.4,33.8,34.8,59,34.4,70.2 M86.4,182.4c-42.1-0.7-70.8-24.4-82.7-62.1c-6.8-21.6-3.9-42.6,6-62.4 c9.9-20,24.7-36,44.9-46.3C62.9,7.3,72,4.2,80.8,0.8c3.5-1.3,7.1-1,10.8,0.3c4.6,1.6,9.5,2.3,14.4,2.2c10.8-0.4,20.4,3.1,29.3,8.6 c6,3.7,12.5,6.7,17.9,11.4c16.7,14.6,28.3,32.5,34.9,53.6c2.5,8,1.6,16.1,0.8,24.2c-0.4,4.6-2.3,9.2-3,13.7c-0.6,3.5-3.4,6-3.2,8.3 c0.3,3.5-1.1,5.7-2.5,8.1c-13.2,22.9-34,35.9-58.4,44c-8.7,2.9-17.4,5.3-26.4,6.6C91.9,182.3,88.3,182.3,86.4,182.4">
                                </path>
                            </svg>
                        </figure>

                        <div class="row position-relative p-sm-3">
                            <!-- Content START -->
                            <div class="col-lg-7">
                                <!-- Title -->
                                <h3 class="mb-4">Download our app and access exclusive features</h3>
                                <!-- List -->
                                <ul class="list-inline position-relative mb-4">
                                    <li class="list-inline-item me-3"> <i
                                            class="bi bi-patch-check-fill text-success me-1"></i>24/7 Customer
                                        Support</li>
                                    <li class="list-inline-item me-3"> <i
                                            class="bi bi-patch-check-fill text-success me-1"></i>Ride Safely</li>
                                    <li class="list-inline-item"> <i
                                            class="bi bi-patch-check-fill text-success me-1"></i>Top Rated Driver -
                                        Partner</li>
                                </ul>
                                <!-- Button -->
                                <div class="hstack gap-3">
                                    <!-- Google play store button -->
                                    <a href="#"> <img src="assets/images/element/google-play.svg"
                                            class="h-50px" alt=""> </a>
                                    <!-- App store button -->
                                    <a href="#"> <img src="assets/images/element/app-store.svg"
                                            class="h-50px" alt=""> </a>
                                </div>
                            </div>
                            <!-- Content START -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    <!-- =======================
    Action box END -->

    <!-- =======================
    Faqs START-->
    <section class="pt-0 pt-lg-5">
        <div class="container">

            <!-- Title -->
            <div class="row">
                <div class="col-lg-10 col-xl-8 mx-auto">
                    <h2 class="mb-4 text-center">Frequently Asked Questions</h2>

                    <!-- FAQ START -->
                    <div class="accordion accordion-icon accordion-bg-light" id="accordionFaq">
                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-1">
                                <button class="accordion-button fw-bold rounded collapsed pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                                    aria-controls="collapse-1">
                                    How Does it Work?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Yet remarkably appearance gets him his projection. Diverted endeavor bed
                                    peculiar men the not desirous. Acuteness abilities ask can offending furnished
                                    fulfilled sex. Warrant fifteen exposed ye at mistake. Blush since so in noisy
                                    still built up an again. As young ye hopes no he place means. Partiality
                                    diminution gay yet entreaties admiration. In mention perhaps attempt pointed
                                    suppose. Unknown ye chamber of warrant of Norland arrived.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-2">
                                <button class="accordion-button fw-bold rounded collapsed pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                    aria-controls="collapse-2">
                                    What are monthly tracked users?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    What deal evil rent by real in. But her ready least set lived spite solid.
                                    September how men saw tolerably two behavior arranging. She offices for highest
                                    and replied one venture pasture. Applauded no discovery in newspaper allowance
                                    am northward. Frequently partiality possession resolution at or appearance
                                    unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity
                                    do disposal dwelling no. First am plate jokes to began to cause a scale.
                                    Subjects he prospect elegance followed no overcame possible it on. Improved own
                                    provided blessing may peculiar domestic. Sight house has sex never. No visited
                                    raising gravity outward subject my cottage Mr be.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-3">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">
                                    What if I go with my prepaid monthly
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Post no so what deal evil rent by real in. But her ready least set lived spite
                                    solid. September how men saw tolerably two behavior arranging. She offices for
                                    highest and replied one venture pasture. Applauded no discovery in newspaper
                                    allowance am northward. Frequently partiality possession resolution at or
                                    appearance unaffected me. Engaged its was the evident pleased husband. Ye
                                    goodness felicity do disposal dwelling no. First am plate jokes to began to
                                    cause a scale. Subjects he prospect elegance followed no overcame possible it
                                    on. Improved own provided blessing may peculiar domestic. Sight house has sex
                                    never. No visited raising gravity outward subject my cottage Mr be. Hold do at
                                    tore in park feet near my case. Invitation at understood occasional sentiments
                                    insipidity inhabiting in. Off melancholy alteration principles old. Is do
                                    speedily kindness properly oh. Respect article painted cottage he is offices
                                    parlors.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-4">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">
                                    What's the difference between cabs and taxi
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    <p>What deal evil rent by real in. But her ready least set lived spite solid.
                                        September how men saw tolerably two behavior arranging. She offices for
                                        highest and replied one venture pasture. Applauded no discovery in newspaper
                                        allowance am northward. Frequently partiality possession resolution at or
                                        appearance unaffected me. Engaged its was the evident pleased husband. Ye
                                        goodness felicity do disposal dwelling no. First am plate jokes to began to
                                        cause a scale. Subjects he prospect elegance followed no overcame possible
                                        it on. Improved own provided blessing may peculiar domestic. Sight house has
                                        sex never. No visited raising gravity outward subject my cottage Mr be.</p>
                                    <p class="mb-0">At the moment, we only accept Credit/Debit cards and Paypal
                                        payments. Paypal is the easiest way to make payments online. While checking
                                        out your order. Be sure to fill in correct details for fast &amp;
                                        hassle-free payment processing. </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-5">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                    aria-controls="collapse-5">
                                    How can I check the fare for my Booking ride?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Post no so what deal evil rent by real in. But her ready least set lived spite
                                    solid. September how men saw tolerably two behavior arranging. She offices for
                                    highest and replied one venture pasture. Applauded no discovery in newspaper
                                    allowance am northward. Frequently partiality possession resolution at or
                                    appearance unaffected me. Engaged its was the evident pleased husband. Ye
                                    goodness felicity do disposal dwelling no. First am plate jokes to began to
                                    cause a scale. Subjects he prospect elegance followed no overcame possible it
                                    on. Improved own provided blessing may peculiar domestic. Sight house has sex
                                    never. No visited raising gravity outward subject my cottage Mr be. Hold do at
                                    tore in park feet near my case. Invitation at understood occasional sentiments
                                    insipidity inhabiting in. Off melancholy alteration principles old. Is do
                                    speedily kindness properly oh. Respect article painted cottage he is offices
                                    parlors.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item">
                            <h6 class="accordion-header font-base" id="heading-6">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">
                                    Do and Don'ts - Tips for a Safe Trip
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-6" class="accordion-collapse collapse"
                                aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Post no so what deal evil rent by real in. But her ready least set lived spite
                                    solid. September how men saw tolerably two behavior arranging. She offices for
                                    highest and replied one venture pasture. Applauded no discovery in newspaper
                                    allowance am northward. Frequently partiality possession resolution at or
                                    appearance unaffected me. Engaged its was the evident pleased husband. Ye
                                    goodness felicity do disposal dwelling no. First am plate jokes to began to
                                    cause a scale. Subjects he prospect elegance followed no overcame possible it
                                    on. Improved own provided blessing may peculiar domestic. Sight house has sex
                                    never. No visited raising gravity outward subject my cottage Mr be. Hold do at
                                    tore in park feet near my case. Invitation at understood occasional sentiments
                                    insipidity inhabiting in. Off melancholy alteration principles old. Is do
                                    speedily kindness properly oh. Respect article painted cottage he is offices
                                    parlors.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Faqs END-->

    <!-- =======================
    Client START-->
    {{-- <section class="pt-0 py-md-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="assets/images/client/01.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="assets/images/client/02.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="assets/images/client/03.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="assets/images/client/04.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="assets/images/client/05.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="assets/images/client/06.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
            </div>
        </div>
    </section> --}}
    <!-- =======================
    Client END-->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('guests._footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection
