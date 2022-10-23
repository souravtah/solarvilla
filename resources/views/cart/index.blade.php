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
                                        <input type="hidden" name="productIds[]" value="{{ $id }}">
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
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Description</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>@foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td><input type="number" class="form-control" name="price[]" value="{{ $product->price }}"></td>
                                            <td><input type="number" class="form-control" name="quantity[]" value="1"></td>
                                            <td><input type="text" class="form-control" name="description[]" value="{{ $product->short_description }}"></td>
                                            <td class="text-end">
                                                <form id="removeACartItem" method="POST" action="{{ route('delete_a_cart_item') }}">
                                                    @csrf
                                                    <input type="hidden" name="productId" value="{{ $product->id }}">
                                                    {{-- <a href="{{ route('delete_a_cart_item') }}" type="button" class="btn btn-sm btn-square btn-danger"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                        <i class="bi bi-trash"></i>
                                                    </a> --}}
                                                    <button onclick="myFunctionFormRemoveACartItem()" class="btn btn-sm btn-square btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
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
                            <div class="px-lg-2">
                                <button onclick="myFunctionFormEvaluateCartItems()" class="btn btn-primary btn-shadow d-block w-100 mt-4">
                                    <i class="ci-locked fs-lg me-2"></i>Secure Checkout
                                </button>
                                <div class="text-center pt-2 pb-3">
                                    <small class="text-form text-muted">100% money back guarantee</small>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </form>
        </div>
    </main>
    <script type="text/javascript">

        function myFunctionFormRemoveACartItem() {
            var formRemoveACartItem = document.getElementById("removeACartItem");
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
