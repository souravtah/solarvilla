@extends('layouts.guest')
@section('content')
<main>
    <section class="pt-4 pt-md-5">
        <div class="container">

            <!-- Content and form START -->
            <div class="row g-4">
                <div class="col-lg-6">
                    <!-- Title -->
                    <h1>Let's talk about solar panels</h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Contact form -->
                    <form class="mt-4 row" method="POST" action="{{ route('tickets.create_message') }}">
                        @csrf
                        <!-- Name -->
                        <div class="col-md-12 mb-4 form-control-bg-light">
                            <label class="form-label">Your name *</label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                        <!-- Phone -->
                        <div class="col-md-6 mb-4 form-control-bg-light">
                            <label class="form-label">Phone number (+91)</label>
                            <input name="phone" type="phone" class="form-control" required>
                        </div>
                        <!-- Email -->
                        <div class="col-md-6 mb-4 form-control-bg-light">
                            <label class="form-label">Email address *</label>
                            <input name="email" type="email" class="form-control" required>
                        </div>
                        <!-- Message -->
                        <div class="col-md-12 mb-4 form-control-bg-light">
                            <label class="form-label">Message *</label>
                            <textarea name="message" class="form-control" required rows="4"></textarea>
                        </div>
                        <!-- Button -->
                        <div>
                            <button class="btn btn-lg btn-primary mb-0" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

                <!-- Image -->
                <div class="col-lg-6 col-xl-5 text-center text-lg-end position-relative ms-auto">
                    <!-- Svg decoration -->
                    <figure class="position-absolute start-0 top-0 d-none d-md-block mt-n5 ms-n3">
                        <svg height="400" class="fill-primary opacity-2" viewBox="0 0 340 340">
                            <circle cx="194.2" cy="2.2" r="2.2"></circle>
                            <circle cx="2.2" cy="2.2" r="2.2"></circle>
                            <circle cx="218.2" cy="2.2" r="2.2"></circle>
                            <circle cx="26.2" cy="2.2" r="2.2"></circle>
                            <circle cx="242.2" cy="2.2" r="2.2"></circle>
                            <circle cx="50.2" cy="2.2" r="2.2"></circle>
                            <circle cx="266.2" cy="2.2" r="2.2"></circle>
                            <circle cx="74.2" cy="2.2" r="2.2"></circle>
                            <circle cx="290.2" cy="2.2" r="2.2"></circle>
                            <circle cx="98.2" cy="2.2" r="2.2"></circle>
                            <circle cx="314.2" cy="2.2" r="2.2"></circle>
                            <circle cx="122.2" cy="2.2" r="2.2"></circle>
                            <circle cx="338.2" cy="2.2" r="2.2"></circle>
                            <circle cx="146.2" cy="2.2" r="2.2"></circle>
                            <circle cx="170.2" cy="2.2" r="2.2"></circle>
                            <circle cx="194.2" cy="26.2" r="2.2"></circle>
                            <circle cx="2.2" cy="26.2" r="2.2"></circle>
                            <circle cx="218.2" cy="26.2" r="2.2"></circle>
                            <circle cx="26.2" cy="26.2" r="2.2"></circle>
                            <circle cx="242.2" cy="26.2" r="2.2"></circle>
                            <circle cx="50.2" cy="26.2" r="2.2"></circle>
                            <circle cx="266.2" cy="26.2" r="2.2"></circle>
                            <circle cx="74.2" cy="26.2" r="2.2"></circle>
                            <circle cx="290.2" cy="26.2" r="2.2"></circle>
                            <circle cx="98.2" cy="26.2" r="2.2"></circle>
                            <circle cx="314.2" cy="26.2" r="2.2"></circle>
                            <circle cx="122.2" cy="26.2" r="2.2"></circle>
                            <circle cx="338.2" cy="26.2" r="2.2"></circle>
                            <circle cx="146.2" cy="26.2" r="2.2"></circle>
                            <circle cx="170.2" cy="26.2" r="2.2"></circle>
                            <circle cx="194.2" cy="50.2" r="2.2"></circle>
                            <circle cx="2.2" cy="50.2" r="2.2"></circle>
                            <circle cx="218.2" cy="50.2" r="2.2"></circle>
                            <circle cx="26.2" cy="50.2" r="2.2"></circle>
                            <circle cx="242.2" cy="50.2" r="2.2"></circle>
                            <circle cx="50.2" cy="50.2" r="2.2"></circle>
                            <circle cx="266.2" cy="50.2" r="2.2"></circle>
                            <circle cx="74.2" cy="50.2" r="2.2"></circle>
                            <circle cx="290.2" cy="50.2" r="2.2"></circle>
                            <circle cx="98.2" cy="50.2" r="2.2"></circle>
                            <circle cx="314.2" cy="50.2" r="2.2"></circle>
                            <circle cx="122.2" cy="50.2" r="2.2"></circle>
                            <circle cx="338.2" cy="50.2" r="2.2"></circle>
                            <circle cx="146.2" cy="50.2" r="2.2"></circle>
                            <circle cx="170.2" cy="50.2" r="2.2"></circle>
                            <circle cx="194.2" cy="74.2" r="2.2"></circle>
                            <circle cx="2.2" cy="74.2" r="2.2"></circle>
                            <circle cx="218.2" cy="74.2" r="2.2"></circle>
                            <circle cx="26.2" cy="74.2" r="2.2"></circle>
                            <circle cx="242.2" cy="74.2" r="2.2"></circle>
                            <circle cx="50.2" cy="74.2" r="2.2"></circle>
                            <circle cx="266.2" cy="74.2" r="2.2"></circle>
                            <circle cx="74.2" cy="74.2" r="2.2"></circle>
                            <circle cx="290.2" cy="74.2" r="2.2"></circle>
                            <circle cx="98.2" cy="74.2" r="2.2"></circle>
                            <circle cx="314.2" cy="74.2" r="2.2"></circle>
                            <circle cx="122.2" cy="74.2" r="2.2"></circle>
                            <circle cx="338.2" cy="74.2" r="2.2"></circle>
                            <circle cx="146.2" cy="74.2" r="2.2"></circle>
                            <circle cx="170.2" cy="74.2" r="2.2"></circle>
                            <circle cx="194.2" cy="98.2" r="2.2"></circle>
                            <circle cx="2.2" cy="98.2" r="2.2"></circle>
                            <circle cx="218.2" cy="98.2" r="2.2"></circle>
                            <circle cx="26.2" cy="98.2" r="2.2"></circle>
                            <circle cx="242.2" cy="98.2" r="2.2"></circle>
                            <circle cx="50.2" cy="98.2" r="2.2"></circle>
                            <circle cx="266.2" cy="98.2" r="2.2"></circle>
                            <circle cx="74.2" cy="98.2" r="2.2"></circle>
                            <circle cx="290.2" cy="98.2" r="2.2"></circle>
                            <circle cx="98.2" cy="98.2" r="2.2"></circle>
                            <circle cx="314.2" cy="98.2" r="2.2"></circle>
                            <circle cx="122.2" cy="98.2" r="2.2"></circle>
                            <circle cx="338.2" cy="98.2" r="2.2"></circle>
                            <circle cx="146.2" cy="98.2" r="2.2"></circle>
                            <circle cx="170.2" cy="98.2" r="2.2"></circle>
                            <circle cx="194.2" cy="122.2" r="2.2"></circle>
                            <circle cx="2.2" cy="122.2" r="2.2"></circle>
                            <circle cx="218.2" cy="122.2" r="2.2"></circle>
                            <circle cx="26.2" cy="122.2" r="2.2"></circle>
                            <circle cx="242.2" cy="122.2" r="2.2"></circle>
                            <circle cx="50.2" cy="122.2" r="2.2"></circle>
                            <circle cx="266.2" cy="122.2" r="2.2"></circle>
                            <circle cx="74.2" cy="122.2" r="2.2"></circle>
                            <circle cx="290.2" cy="122.2" r="2.2"></circle>
                            <circle cx="98.2" cy="122.2" r="2.2"></circle>
                            <circle cx="314.2" cy="122.2" r="2.2"></circle>
                            <circle cx="122.2" cy="122.2" r="2.2"></circle>
                            <circle cx="338.2" cy="122.2" r="2.2"></circle>
                            <circle cx="146.2" cy="122.2" r="2.2"></circle>
                            <circle cx="170.2" cy="122.2" r="2.2"></circle>
                            <circle cx="194.2" cy="146.2" r="2.2"></circle>
                            <circle cx="2.2" cy="146.2" r="2.2"></circle>
                            <circle cx="218.2" cy="146.2" r="2.2"></circle>
                            <circle cx="26.2" cy="146.2" r="2.2"></circle>
                            <circle cx="242.2" cy="146.2" r="2.2"></circle>
                            <circle cx="50.2" cy="146.2" r="2.2"></circle>
                            <circle cx="266.2" cy="146.2" r="2.2"></circle>
                            <circle cx="74.2" cy="146.2" r="2.2"></circle>
                            <circle cx="290.2" cy="146.2" r="2.2"></circle>
                            <circle cx="98.2" cy="146.2" r="2.2"></circle>
                            <circle cx="314.2" cy="146.2" r="2.2"></circle>
                            <circle cx="122.2" cy="146.2" r="2.2"></circle>
                            <circle cx="338.2" cy="146.2" r="2.2"></circle>
                            <circle cx="146.2" cy="146.2" r="2.2"></circle>
                            <circle cx="170.2" cy="146.2" r="2.2"></circle>
                            <circle cx="194.2" cy="170.2" r="2.2"></circle>
                            <circle cx="2.2" cy="170.2" r="2.2"></circle>
                            <circle cx="218.2" cy="170.2" r="2.2"></circle>
                            <circle cx="26.2" cy="170.2" r="2.2"></circle>
                            <circle cx="242.2" cy="170.2" r="2.2"></circle>
                            <circle cx="50.2" cy="170.2" r="2.2"></circle>
                            <circle cx="266.2" cy="170.2" r="2.2"></circle>
                            <circle cx="74.2" cy="170.2" r="2.2"></circle>
                            <circle cx="290.2" cy="170.2" r="2.2"></circle>
                            <circle cx="98.2" cy="170.2" r="2.2"></circle>
                            <circle cx="314.2" cy="170.2" r="2.2"></circle>
                            <circle cx="122.2" cy="170.2" r="2.2"></circle>
                            <circle cx="338.2" cy="170.2" r="2.2"></circle>
                            <circle cx="146.2" cy="170.2" r="2.2"></circle>
                            <circle cx="170.2" cy="170.2" r="2.2"></circle>
                            <circle cx="194.2" cy="194.2" r="2.2"></circle>
                            <circle cx="2.2" cy="194.2" r="2.2"></circle>
                            <circle cx="218.2" cy="194.2" r="2.2"></circle>
                            <circle cx="26.2" cy="194.2" r="2.2"></circle>
                            <circle cx="242.2" cy="194.2" r="2.2"></circle>
                            <circle cx="50.2" cy="194.2" r="2.2"></circle>
                            <circle cx="266.2" cy="194.2" r="2.2"></circle>
                            <circle cx="74.2" cy="194.2" r="2.2"></circle>
                            <circle cx="290.2" cy="194.2" r="2.2"></circle>
                            <circle cx="98.2" cy="194.2" r="2.2"></circle>
                            <circle cx="314.2" cy="194.2" r="2.2"></circle>
                            <circle cx="122.2" cy="194.2" r="2.2"></circle>
                            <circle cx="338.2" cy="194.2" r="2.2"></circle>
                            <circle cx="146.2" cy="194.2" r="2.2"></circle>
                            <circle cx="170.2" cy="194.2" r="2.2"></circle>
                            <circle cx="194.2" cy="218.2" r="2.2"></circle>
                            <circle cx="2.2" cy="218.2" r="2.2"></circle>
                            <circle cx="218.2" cy="218.2" r="2.2"></circle>
                            <circle cx="26.2" cy="218.2" r="2.2"></circle>
                            <circle cx="242.2" cy="218.2" r="2.2"></circle>
                            <circle cx="50.2" cy="218.2" r="2.2"></circle>
                            <circle cx="266.2" cy="218.2" r="2.2"></circle>
                            <circle cx="74.2" cy="218.2" r="2.2"></circle>
                            <circle cx="290.2" cy="218.2" r="2.2"></circle>
                            <circle cx="98.2" cy="218.2" r="2.2"></circle>
                            <circle cx="314.2" cy="218.2" r="2.2"></circle>
                            <circle cx="122.2" cy="218.2" r="2.2"></circle>
                            <circle cx="338.2" cy="218.2" r="2.2"></circle>
                            <circle cx="146.2" cy="218.2" r="2.2"></circle>
                            <circle cx="170.2" cy="218.2" r="2.2"></circle>
                            <circle cx="194.2" cy="242.2" r="2.2"></circle>
                            <circle cx="2.2" cy="242.2" r="2.2"></circle>
                            <circle cx="218.2" cy="242.2" r="2.2"></circle>
                            <circle cx="26.2" cy="242.2" r="2.2"></circle>
                            <circle cx="242.2" cy="242.2" r="2.2"></circle>
                            <circle cx="50.2" cy="242.2" r="2.2"></circle>
                            <circle cx="266.2" cy="242.2" r="2.2"></circle>
                            <circle cx="74.2" cy="242.2" r="2.2"></circle>
                            <circle cx="290.2" cy="242.2" r="2.2"></circle>
                            <circle cx="98.2" cy="242.2" r="2.2"></circle>
                            <circle cx="314.2" cy="242.2" r="2.2"></circle>
                            <circle cx="122.2" cy="242.2" r="2.2"></circle>
                            <circle cx="338.2" cy="242.2" r="2.2"></circle>
                            <circle cx="146.2" cy="242.2" r="2.2"></circle>
                            <circle cx="170.2" cy="242.2" r="2.2"></circle>
                            <circle cx="194.2" cy="266.2" r="2.2"></circle>
                            <circle cx="2.2" cy="266.2" r="2.2"></circle>
                            <circle cx="218.2" cy="266.2" r="2.2"></circle>
                            <circle cx="26.2" cy="266.2" r="2.2"></circle>
                            <circle cx="242.2" cy="266.2" r="2.2"></circle>
                            <circle cx="50.2" cy="266.2" r="2.2"></circle>
                            <circle cx="266.2" cy="266.2" r="2.2"></circle>
                            <circle cx="74.2" cy="266.2" r="2.2"></circle>
                            <circle cx="290.2" cy="266.2" r="2.2"></circle>
                            <circle cx="98.2" cy="266.2" r="2.2"></circle>
                            <circle cx="314.2" cy="266.2" r="2.2"></circle>
                            <circle cx="122.2" cy="266.2" r="2.2"></circle>
                            <circle cx="338.2" cy="266.2" r="2.2"></circle>
                            <circle cx="146.2" cy="266.2" r="2.2"></circle>
                            <circle cx="170.2" cy="266.2" r="2.2"></circle>
                            <circle cx="194.2" cy="290.2" r="2.2"></circle>
                            <circle cx="2.2" cy="290.2" r="2.2"></circle>
                            <circle cx="218.2" cy="290.2" r="2.2"></circle>
                            <circle cx="26.2" cy="290.2" r="2.2"></circle>
                            <circle cx="242.2" cy="290.2" r="2.2"></circle>
                            <circle cx="50.2" cy="290.2" r="2.2"></circle>
                            <circle cx="266.2" cy="290.2" r="2.2"></circle>
                            <circle cx="74.2" cy="290.2" r="2.2"></circle>
                            <circle cx="290.2" cy="290.2" r="2.2"></circle>
                            <circle cx="98.2" cy="290.2" r="2.2"></circle>
                            <circle cx="314.2" cy="290.2" r="2.2"></circle>
                            <circle cx="122.2" cy="290.2" r="2.2"></circle>
                            <circle cx="338.2" cy="290.2" r="2.2"></circle>
                            <circle cx="146.2" cy="290.2" r="2.2"></circle>
                            <circle cx="170.2" cy="290.2" r="2.2"></circle>
                            <circle cx="194.2" cy="314.2" r="2.2"></circle>
                            <circle cx="2.2" cy="314.2" r="2.2"></circle>
                            <circle cx="218.2" cy="314.2" r="2.2"></circle>
                            <circle cx="26.2" cy="314.2" r="2.2"></circle>
                            <circle cx="242.2" cy="314.2" r="2.2"></circle>
                            <circle cx="50.2" cy="314.2" r="2.2"></circle>
                            <circle cx="266.2" cy="314.2" r="2.2"></circle>
                            <circle cx="74.2" cy="314.2" r="2.2"></circle>
                            <circle cx="290.2" cy="314.2" r="2.2"></circle>
                            <circle cx="98.2" cy="314.2" r="2.2"></circle>
                            <circle cx="314.2" cy="314.2" r="2.2"></circle>
                            <circle cx="122.2" cy="314.2" r="2.2"></circle>
                            <circle cx="338.2" cy="314.2" r="2.2"></circle>
                            <circle cx="146.2" cy="314.2" r="2.2"></circle>
                            <circle cx="170.2" cy="314.2" r="2.2"></circle>
                            <circle cx="194.2" cy="338.2" r="2.2"></circle>
                            <circle cx="2.2" cy="338.2" r="2.2"></circle>
                            <circle cx="218.2" cy="338.2" r="2.2"></circle>
                            <circle cx="26.2" cy="338.2" r="2.2"></circle>
                            <circle cx="242.2" cy="338.2" r="2.2"></circle>
                            <circle cx="50.2" cy="338.2" r="2.2"></circle>
                            <circle cx="266.2" cy="338.2" r="2.2"></circle>
                            <circle cx="74.2" cy="338.2" r="2.2"></circle>
                            <circle cx="290.2" cy="338.2" r="2.2"></circle>
                            <circle cx="98.2" cy="338.2" r="2.2"></circle>
                            <circle cx="314.2" cy="338.2" r="2.2"></circle>
                            <circle cx="122.2" cy="338.2" r="2.2"></circle>
                            <circle cx="338.2" cy="338.2" r="2.2"></circle>
                            <circle cx="146.2" cy="338.2" r="2.2"></circle>
                            <circle cx="170.2" cy="338.2" r="2.2"></circle>
                        </svg>
                    </figure>
                    <!-- Image -->
                    <img src="assets/images/about/05.jpg" class="rounded-3 position-relative" alt="">
                </div>
            </div>
            <!-- Content and form END -->

            <!-- Social links -->
            <div class="row g-4 align-items-center mt-5">
                <div class="col-lg-4">
                    <h5 class="mb-0">Another way to getting in touch</h5>
                </div>
                <!-- Social links -->
                <div class="col-lg-8">
                    <ul class="list-inline hstack flex-wrap gap-2 gap-lg-4 justify-content-lg-end h6 mb-0">
                        <li class="list-inline-item"> <a class="text-facebook" href="#"><i class="fa-brands fa-facebook-square"></i> Facebook</a> </li>
                        <li class="list-inline-item"> <a class="text-instagram-gradient" href="#"><i class="fa-brands fa-instagram-square"></i> Instagram</a> </li>
                        <li class="list-inline-item"> <a class="text-twitter" href="#"><i class="fa-brands fa-twitter-square"></i> Twitter</a> </li>
                        <li class="list-inline-item"> <a class="text-linkedin" href="#"><i class="fa-brands fa-linkedin"></i> Linkedin</a> </li>
                        <li class="list-inline-item"> <a class="text-whatsapp" href="#"><i class="fa-brands fa-whatsapp-square"></i> WhatsApp</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
@include('guests._footer')
<!-- Back to top -->
<div class="back-top"></div>
@endsection
