@extends('layouts.app')
@section('content')
    <header>
        <div class="container-fluid">
            <div class="border-bottom pt-6">
                <div class="row align-items-center">
                    <div class="col-sm col-12">
                        <h1 class="h2 ls-tight">Product Listing</h1>
                    </div>
                    <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                        <div class="hstack gap-2 justify-content-sm-end">
                            {{-- <a href="#modalExport" class="btn btn-sm btn-neutral border-base" data-bs-toggle="modal">
                            <span class="pe-2"><i class="bi bi-people-fill"></i>
                            </span>
                            <span>Share</span>
                        </a> --}}
                            <a href="#offcanvasCreate" class="btn btn-sm btn-primary" data-bs-toggle="offcanvas">
                                <span class="pe-2"><i class="bi bi-plus-square-dotted"></i> </span>
                                <span>Create</span>
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs overflow-x border-0">
                    <li class="nav-item"><a href="{{ route('products.product-listing') }}"
                            class="nav-link {{ Route::currentRouteNamed('products.product-listing') ? 'active font-bold' : '' }}">View
                            all</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="py-6 bg-surface-secondary">
        <form method="POST" action="{{ route('products.store') }}">
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
                id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel">
                <div class="offcanvas-header border-bottom py-4 bg-surface-secondary">
                    <h5 class="offcanvas-title" id="offcanvasCreateLabel">Add a new product</h5>
                    <button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                @csrf
                <div class="offcanvas-body vstack gap-5">
                    <div class="row g-5">
                        {{-- <div class="col-md-8">
                            <div>
                                <label class="form-label">Title</label>
                                <select class="form-select" name="title">
                                    <option value="1" selected>Mr</option>
                                    <option value="2">Mrs</option>
                                    <option value="3">Miss</option>
                                    <option value="4">Dr</option>
                                    <option value="5">Er</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <div>
                                <label class="form-label">Product Name *</label>
                                <input type="text" name="name" class="form-control" maxlength="25" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <label class="form-label">Select Product category *</label>
                            <select name="product_category_id" class="form-select" aria-label="" required>
                                @foreach ($product_categories as $product_category)
                                <option value="{{ $product_category->id }}">{{ $product_category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="form-label">Price (₹) *</label>
                                <input  type="number" min="0" value="0" name="price" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label" for="last_name">Short description (optional)</label>
                            <input type="text" name="short_description" class="form-control" maxlength="191">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label" for="last_name">Long description (optional)</label>
                            <input type="text" name="long_description" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer py-2 bg-surface-secondary">
                    <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                </div>
            </div>
        </form>
        @foreach ($products as $product)
            <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
                <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
                    id="offcanvas{{ $product->id }}" aria-labelledby="offcanvasCreateLabel">
                    <div class="offcanvas-header border-bottom py-4 bg-surface-secondary">
                        <h5 class="offcanvas-title" id="offcanvasCreateLabel">Edit product</h5>
                        <button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                    <div class="offcanvas-body vstack gap-5">
                        <div class="row g-5">
                            <div class="col-md-12">
                                <div class="row">
                                    <label class="form-label">Product Name</label>
                                    <input type="text" name="name" class="form-control" maxlength="25" required
                                        value="{{ $product->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label class="form-label">Select Product category *</label>
                                <select name="product_category_id" class="form-select" aria-label="" required>
                                    @foreach ($product_categories as $product_category)
                                    <option value="{{ $product_category->id }}"  {{ $product->product_category_id == $product_category->id ? 'selected="selected"' : '' }}>{{ $product_category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <label class="form-label">Price (₹) *</label>
                                    <input  type="number" min="0" value="{{ $product->price }}" name="price" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label" for="last_name">Short description (optional)</label>
                                <input type="text" name="short_description" class="form-control" maxlength="191" value="{{ $product->short_description }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label" for="last_name">Long description (optional)</label>
                                <input type="text" name="long_description" class="form-control" value="{{ $product->long_description }}">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer py-2 bg-surface-secondary">
                        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </div>
            </form>
        @endforeach
        <div class="modal fade" id="modalExport" tabindex="-1" aria-labelledby="modalExport" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <div class="icon icon-shape rounded-3 bg-soft-primary text-primary text-lg me-4"><i
                                class="bi bi-globe"></i></div>
                        <div>
                            <h5 class="mb-1">Share to web</h5><small class="d-block text-xs text-muted">Publish and
                                share
                                link with anyone</small>
                        </div>
                        <div class="ms-auto">
                            <div class="form-check form-switch me-n2"><input class="form-check-input" type="checkbox"
                                    id="flexSwitchCheckChecked" checked="checked"> <label class="form-check-label"
                                    for="flexSwitchCheckChecked"></label></div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center mb-5">
                            <div>
                                <p class="text-sm">Anyone with this link <span class="font-bold text-heading">can
                                        view</span></p>
                            </div>
                            <div class="ms-auto"><a href="#" class="text-sm font-semibold">Settings</a></div>
                        </div>
                        <div>
                            <div class="input-group input-group-inline"><input type="email" class="form-control"
                                    placeholder="username" value="https://webpixels.io/your-amazing-link"> <span
                                    class="input-group-text"><i class="bi bi-clipboard"></i></span></div><span
                                class="mt-2 valid-feedback">Looks good!</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="me-auto"><a href="#" class="text-sm font-semibold"><i
                                    class="bi bi-clipboard me-2"></i>Copy link</a></div><button type="button"
                            class="btn btn-sm btn-neutral" data-bs-dismiss="modal">Close</button> <button type="button"
                            class="btn btn-sm btn-success">Share file</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="vstack gap-4">
                <div class="d-flex justify-content-between flex-column flex-sm-row gap-3">
                    <div class="hstack gap-2">
                        <div class="input-group input-group-sm input-group-inline">
                            <span class="input-group-text pe-2">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="email" class="form-control" placeholder="Search" aria-label="Search">
                        </div>
                        <div>
                            <button type="button" class="btn btn-sm px-3 btn-neutral d-flex align-items-center">
                                {{-- <i class="bi bi-funnel me-2"></i> --}}
                                <span>Search</span>
                                {{-- <span class="vr opacity-20 mx-3"></span> <span class="text-xs text-primary">2</span> --}}
                            </button>
                        </div>
                    </div>
                    <div class="btn-group">
                        {{-- <a href="#" class="btn btn-sm btn-neutral">
                        <i class="bi bi-cloud-download me-2"></i>Download all
                    </a> --}}
                        {{-- <a href="#" class="btn btn-sm btn-neutral"><i class="bi bi-gear-wide me-2"></i>Settings
                    </a> --}}
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header border-bottom d-flex align-items-center">
                        <h5 class="me-auto">Total {{ $total_products }} products</h5>
                        @if (session('status'))
                            <span class="me-auto text-success">
                                {{ session('status') }}
                            </span>
                        @endif
                        {{-- <div class="dropdown"><a class="text-muted" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>
                        <div class="dropdown-menu"><a href="#!" class="dropdown-item">Action </a><a href="#!"
                                class="dropdown-item">Another action </a><a href="#!" class="dropdown-item">Something
                                else here</a></div>
                    </div> --}}
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Category Name</th>
                                    <th scope="col">Price (₹)</th>
                                    <th scope="col">Short description</th>
                                    <th scope="col">Deleted at</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td>
                                            <p class="text-heading font-semibold">
                                                <span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">{{ Str::limit($product->name, 20) }}</span>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-heading font-semibold">
                                                <span class="badge text-uppercase bg-soft-{{ $product->product_category?->name ? 'primary' : 'danger' }} text-primary rounded-pill">{{ $product->product_category?->name ?? 'No Category' }}</span>
                                            </p>
                                        </td>
                                        <td>
                                            <span class="text-heading font-semibold">{{ $product->price ?? '0' }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-heading font-semibold">{{ Str::limit($product->short_description, 20) ?? 'No description' }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-heading font-semibold">{{ $product->deleted_at?->diffForHumans() ?? 'Active' }}</span>
                                        </td>
                                        @if (is_null($product->deleted_at))
                                            <td class="p-1 text-end">
                                                <a href="#offcanvas{{ $product->id }}"
                                                    class="btn btn-sm btn-square btn-success" data-bs-toggle="offcanvas">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                            </td>
                                        @else
                                            <td class="p-1 text-end">

                                            </td>
                                        @endif
                                        @if (!is_null($product->deleted_at))
                                            <td class="p-0">
                                                <a type="submit" href="{{ route('products.restore', $product->id) }}"
                                                    onclick="return confirm('Are you sure you want to restore ?')"
                                                    class="btn btn-sm btn-square btn-primary">
                                                    <i class="bi bi-arrow-counterclockwise"></i>
                                                </a>
                                            </td>
                                        @else
                                            <td class="p-0">
                                                <form method="POST"
                                                    action="{{ route('products.destroy', $product->id) }}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit"
                                                        onclick="return confirm('Are you sure you want to delete ?')"
                                                        class="btn btn-sm btn-square btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @empty
                                    <tr>
                                        <th scope="col" rowspan="5">No User</th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer border-0 py-5">
                        <span class="text-muted text-sm">
                            {{ $products->links() }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
