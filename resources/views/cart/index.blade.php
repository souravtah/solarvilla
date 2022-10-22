@extends('layouts.app')
@section('content')
    <header>
        <div class="container-fluid">
            <div class="border-bottom pt-6">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-12">
                        <h1 class="h2 ls-tight">Prepare Cart</h1>
                    </div>
                </div>
                <ul class="nav nav-tabs overflow-x border-0">
                    <li class="nav-item"><a href="{{ route('products.index') }}" class="nav-link">View all</a></li>
                    <li class="nav-item"><a href="{{ route('carts.index') }}" class="nav-link active">My Cart
                            ({{ $cart_count }})</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="py-6 pb-6 bg-surface-secondary container">
        @if ($errors->any())
            <div class="alert alert-danger mb-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card border bg-light shadow-lg rounded-3 overflow-hidden">
            <div class="row">
                <!-- Content-->
                <section class="card-body col-lg-8 pt-2 pt-lg-4 pb-4 mb-3">
                    <div class="pt-2 px-4 pe-lg-0 ps-xl-5">
                        <!-- Header-->
                        <div class="d-flex flex-wrap justify-content-between align-items-center border-bottom pb-3">
                            <div class="py-1">
                                <a class="btn btn-warning btn-sm" href="{{ route('products.index') }}">
                                    <i class="bi bi-arrow-left-square"></i> Back to shopping
                                </a>
                            </div>
                            <div class="d-none d-sm-block py-1 fs-sm">You have {{ $cart_count }} products in your cart
                            </div>
                            <div class="py-1">
                                @if ($cart_count)
                                <form method="POST" action="{{ route('empty_cart') }}">
                                    @csrf
                                    @foreach ($product_ids as $id)
                                    <input type="hidden" name="productIds[]" value="{{ $id }}">
                                    @endforeach
                                    <button onclick="return confirm('Are you sure you want to empty cart ?')" type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Clear cart
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>
                        <!-- Product-->
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Item name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Access</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>@foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>24.06</td>
                                        <td>
                                            sss
                                        </td>
                                        <td>
                                            <div class="dropdown"><a href="#"
                                                    class="font-semibold text-heading text-primary-hover" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">Full Access<i
                                                        class="bi bi-chevron-down ms-2 text-xs"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Full access</a></li>
                                                    <li><a class="dropdown-item" href="#">Can view</a></li>
                                                    <li><a class="dropdown-item" href="#">Can edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Can publish</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            {{-- <a href="#" class="btn btn-sm btn-square btn-neutral me-1">
                                                <i class="bi bi-pencil"></i>
                                            </a> --}}
                                            <form method="POST" action="{{ route('delete_a_cart_item') }}">
                                                @csrf
                                                <input type="hidden" name="productId" value="{{ $product->id }}">
                                                <a href="{{ route('delete_a_cart_item') }}" type="button" class="btn btn-sm btn-square btn-danger"
                                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </form>
                                            {{-- <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button> --}}
                                        </td>
                                    </tr>@endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- <!-- Product-->
                        <div class="d-block d-sm-flex align-items-center py-4 border-bottom"><a
                                class="d-block position-relative mb-3 mb-sm-0 me-sm-4 ms-sm-0 mx-auto"
                                href="marketplace-single.html" style="width: 12.5rem;"><img class="rounded-3"
                                    src="img/marketplace/products/th06.jpg" alt="Product"><span
                                    class="btn btn-icon btn-danger position-absolute top-0 end-0 py-0 px-1 m-2"
                                    data-bs-toggle="tooltip" title="" data-bs-original-title="Remove from Favorites"
                                    aria-label="Remove from Favorites"><i class="ci-trash"></i></span></a>
                            <div class="text-center text-sm-start">
                                <h3 class="h6 product-title mb-2"><a href="marketplace-single.html">Project Devices Showcase
                                        (PSD)</a></h3>
                                <div class="d-inline-block text-accent">$18.<small>00</small></div><a
                                    class="d-inline-block text-accent fs-ms border-start ms-2 ps-2" href="#">by
                                    pixels</a>
                                <div class="form-inline pt-2">
                                    <select class="form-select form-select-sm my-1 me-2">
                                        <option>Standard license</option>
                                        <option>Extended license</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Product-->
                        <div class="d-block d-sm-flex align-items-center pt-4 pb-2"><a
                                class="d-block position-relative mb-3 mb-sm-0 me-sm-4 ms-sm-0 mx-auto"
                                href="marketplace-single.html" style="width: 12.5rem;"><img class="rounded-3"
                                    src="img/marketplace/products/th07.jpg" alt="Product"><span
                                    class="btn btn-icon btn-danger position-absolute top-0 end-0 py-0 px-1 m-2"
                                    data-bs-toggle="tooltip" title="" data-bs-original-title="Remove from Favorites"
                                    aria-label="Remove from Favorites"><i class="ci-trash"></i></span></a>
                            <div class="text-center text-sm-start">
                                <h3 class="h6 product-title mb-2"><a href="marketplace-single.html">Gravity Devices UI
                                        Mockup (PSD)</a></h3>
                                <div class="d-inline-block text-accent">$15.<small>00</small></div><a
                                    class="d-inline-block text-accent fs-ms border-start ms-2 ps-2" href="#">by
                                    pixels</a>
                                <div class="form-inline pt-2">
                                    <select class="form-select form-select-sm my-1 me-2">
                                        <option>Standard license</option>
                                        <option>Extended license</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </section>
                <!-- Sidebar-->
                <aside class="col-lg-4 ps-xl-5">
                    <hr class="d-lg-none">
                    <div class="p-4 h-100 ms-auto border-start">
                        <div class="px-lg-2">
                            <div class="text-center mb-4 py-3 border-bottom">
                                <h2 class="h6 mb-3 pb-1">Cart total</h2>
                                <h3 class="fw-normal">$56.<small>00</small></h3>
                            </div>
                            <div class="text-center mb-4 pb-3 border-bottom">
                                <h2 class="h6 mb-3 pb-1">Promo code</h2>
                                <form class="needs-validation pb-2" method="post" novalidate="">
                                    <div class="mb-3">
                                        <input class="form-control" type="text" placeholder="Promo code"
                                            required="">
                                        <div class="invalid-feedback">Please provide promo code.</div>
                                    </div>
                                    <button class="btn btn-secondary d-block w-100" type="submit">Apply promo
                                        code</button>
                                </form>
                            </div><a class="btn btn-primary btn-shadow d-block w-100 mt-4"
                                href="marketplace-checkout.html"><i class="ci-locked fs-lg me-2"></i>Secure Checkout</a>
                            <div class="text-center pt-2 pb-3"><small class="text-form text-muted">100% money back
                                    guarantee</small></div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
@endsection
