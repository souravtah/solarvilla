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
                                        <i class="bi bi-arrow-left-square"></i> Add more products
                                    </a>
                                </div>
                                <div class="d-none d-sm-block py-1 fs-sm">You have {{ $cart_count }} products in your cart
                                </div>
                                <div class="py-1">
                                    @if ($cart_count)
                                    <form id="emptyCart" method="POST" action="{{ route('empty_cart') }}">
                                        @csrf
                                        @foreach ($product_ids as $id)
                                        <input type="hidden" name="product_id[]" value="{{ $id }}">
                                        @endforeach
                                        <button onclick="myFunctionFormEmptyCart()" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Clear cart
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                            <form id="cartEvaluation" method="POST" action="{{ route('carts.store') }}">
                                @csrf
                            <!-- Product-->
                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Item name</th>
                                            <th scope="col">Price in Rupees(₹)</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Item Description</th>
                                            <th scope="col">Less(₹)</th>
                                        </tr>
                                    </thead>
                                    <tbody>@foreach ($products as $product)
                                        <tr>
                                            <input type="hidden" name="product_id[]" value="{{ $product->id }}" readonly>
                                            <td nowrap><input type="text" name="product_name[]" value="{{ $product->name }}" readonly></td>
                                            <td><input type="number" class="form-control px-0" name="price[]" min="1" value="{{ $product->price }}" nowrap></td>
                                            <td><input type="number" class="form-control px-0" name="quantity[]" min="1" value="1"></td>
                                            <td><input type="text" class="form-control px-0" name="description[]" value="{{ $product->short_description }}"></td>
                                            <td><input type="number" class="form-control px-0" name="discount[]" min="0" value="0"></td>
                                            {{-- <td class="text-end">
                                                <form id="removeACartItem{{ $product->id }}" method="POST" action="{{ route('delete_a_cart_item') }}">
                                                    @csrf
                                                    <input type="hidden" id="{{ $product->id }}" name="productId" value="{{ $product->id }}">
                                                    <button onclick="myFunctionFormRemoveACartItem({{ $product->id }})" class="btn btn-sm btn-square btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td> --}}
                                        </tr>@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Sidebar-->
                    <aside class="col-lg-4 ps-xl-5">
                        <hr class="d-lg-none">
                        <div class="p-4 h-100 ms-auto border-start">
                            <div class="text-center px-lg-2">
                                <button onclick="myFunctionFormEvaluateCartItems()" class="btn btn-primary btn-shadow d-block w-100 mt-4">
                                    <i class="bi bi-shield-check"></i> Checkout & Generate Invoice <i class="bi bi-filetype-pdf"></i>
                                </button>
                                <div class="text-center pt-2 pb-3">
                                    <small class="text-form text-muted">100% value for money guaranteed</small>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </form>
        </div>
    </main>
    <script type="text/javascript">

        function myFunctionFormRemoveACartItem(productId) {
            var formRemoveACartItem = document.getElementById("removeACartItem" + productId);
            formRemoveACartItem.submit();
        }

        function myFunctionFormEvaluateCartItems() {
            var formCartEvaluation = document.getElementById("cartEvaluation");
            formCartEvaluation.submit();
        }

        function myFunctionFormEmptyCart() {
            var formEmptyCart = document.getElementById("emptyCart");
            formEmptyCart.submit();
        }

    </script>
@endsection
