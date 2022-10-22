@extends('layouts.app')
@section('content')
<header>
    <div class="container-fluid">
        <div class="border-bottom pt-6">
            <div class="row align-items-center">
                <div class="col-sm-12 col-12">
                    <h1 class="h2 ls-tight">Applications</h1>
                </div>
            </div>
            <ul class="nav nav-tabs overflow-x border-0">
                <li class="nav-item"><a href="#" class="nav-link active">View all</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Most recent</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Popular</a></li>
            </ul>
        </div>
    </div>
</header>
<main class="py-6 bg-surface-secondary">
    <div class="modal fade" id="modalAddProduct" tabindex="-1" aria-labelledby="modalAddProduct"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body px-12">
                    {{-- <div class="d-flex align-items-center justify-content-center gap-5 mt-8">
                        <div><img alt="..." class="avatar rounded" src="../../img/logos/clever-primary-sm.svg">
                        </div>
                        <div><i class="bi bi-arrow-left-right text-muted"></i></div>
                        <div><img alt="..." class="avatar rounded" src="../../img/social/github.svg"></div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                        <h5 class="text-center mt-6 mb-4">Connect Clever to you GitHub account</h5>
                        <div class="d-inline-flex align-items-center rounded-pill bg-surface-secondary">
                            <div><a href="#"
                                    class="avatar avatar-sm bg-warning rounded-circle text-white">JM</a></div>
                            <div class="ps-3 pe-4 d-none d-lg-block"><a href="#"
                                    class="h6 text-sm font-semibold">Julianne</a></div>
                        </div>
                    </div> --}}
                    <div class="mt-10">
                        <h6>GitHub would like to:</h6>
                        <ul class="list-unstyled mt-3">
                            <li class="py-1 d-flex align-items-center">
                                <div><span class="text-xl text-success me-3 svg-icon svg-align-baseline"><i
                                            class="bi bi-check"></i></span></div>
                                <p class="text-sm">Access your personal information</p>
                            </li>
                            {{-- <li class="py-1 d-flex align-items-center">
                                <div><span class="text-xl text-success me-3 svg-icon svg-align-baseline"><i
                                            class="bi bi-check"></i></span></div>
                                <p class="text-sm">Access your email address</p>
                            </li>
                            <li class="py-1 d-flex align-items-center">
                                <div><span class="text-xl text-success me-3 svg-icon svg-align-baseline"><i
                                            class="bi bi-check"></i></span></div>
                                <p class="text-sm">Send you security notifications</p>
                            </li>
                            <li class="py-1 d-flex align-items-center">
                                <div><span class="text-xl text-success me-3 svg-icon svg-align-baseline"><i
                                            class="bi bi-check"></i></span></div>
                                <p class="text-sm">Access your preferences</p>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-sm btn-neutral"
                        data-bs-dismiss="modal">Cancel</button> <button type="button"
                        class="btn btn-sm btn-primary">Allow access</button></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-2 vstack gap-3">
                <div class="d-md-block mb-6 collapse" id="collapse-page-filters" style="">
                    <div class="vstack gap-10">
                        <div>
                            <h5>Categories</h5>
                            <p class="text-sm text-muted mt-1">Show products in these categories:</p>
                            <div class="vstack gap-3 mt-4">
                                @foreach ($product_categories as $product_category)
                                <div class="form-item-checkable">
                                    <input class="form-item-check" type="radio" name="filter-category" id="filter-category-1">
                                    <label class="item w-full" for="filter-category-1">
                                        <span class="form-item-click d-flex align-items-center border border-primary-hover text-heading p-3 rounded-2">
                                            <i class="bi bi-bar-chart-line text-lg me-3"></i>
                                            <span class="text-body text-sm font-semibold">{{ $product_category->name }}</span>
                                        </span>
                                    </label>
                                </div>
                                @endforeach
                                {{-- <div class="form-item-checkable"><input class="form-item-check" type="radio"
                                        name="filter-category" id="filter-category-2"> <label class="item w-full"
                                        for="filter-category-2"><span
                                            class="form-item-click d-flex align-items-center border border-primary-hover text-heading p-3 rounded-2"><i
                                                class="bi bi-body-text text-xl me-3"></i> <span
                                                class="text-body text-sm font-semibold">CMS</span></span></label>
                                </div>
                                <div class="form-item-checkable"><input class="form-item-check" type="radio"
                                        name="filter-category" id="filter-category-3"> <label class="item w-full"
                                        for="filter-category-3"><span
                                            class="form-item-click d-flex align-items-center border border-primary-hover text-heading p-3 rounded-2"><i
                                                class="bi bi-hdd-stack text-xl me-3"></i> <span
                                                class="text-body text-sm font-semibold">Database</span></span></label>
                                </div>
                                <div class="form-item-checkable"><input class="form-item-check" type="radio"
                                        name="filter-category" id="filter-category-4"> <label class="item w-full"
                                        for="filter-category-4"><span
                                            class="form-item-click d-flex align-items-center border border-primary-hover text-heading p-3 rounded-2"><i
                                                class="bi bi-cart-4 text-lg me-3"></i> <span
                                                class="text-body text-sm font-semibold">E-commerce</span></span></label>
                                </div>
                                <div class="form-item-checkable"><input class="form-item-check" type="radio"
                                        name="filter-category" id="filter-category-5"> <label class="item w-full"
                                        for="filter-category-5"><span
                                            class="form-item-click d-flex align-items-center border border-primary-hover text-heading p-3 rounded-2"><i
                                                class="bi bi-credit-card text-xl me-3"></i> <span
                                                class="text-body text-sm font-semibold">Payment</span></span></label>
                                </div>
                                <div class="form-item-checkable"><input class="form-item-check" type="radio"
                                        name="filter-category" id="filter-category-6"> <label class="item w-full"
                                        for="filter-category-6"><span
                                            class="form-item-click d-flex align-items-center border border-primary-hover text-heading p-3 rounded-2"><i
                                                class="bi bi-shield-check text-xl me-3"></i> <span
                                                class="text-body text-sm font-semibold">Security</span></span></label>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <div>
                    <div class="d-flex flex-column flex-sm-row justify-content-between gap-3">
                        <div class="input-group input-group-sm input-group-inline"><span
                                class="input-group-text pe-2"><i class="bi bi-search"></i> </span><input
                                type="text" class="form-control" placeholder="Search" aria-label="Search">
                        </div><a href="#" class="btn btn-sm btn-warning text-nowrap">Search</a>
                    </div>
                    <div class="row g-3 g-xl-5 mt-1">
                        {{-- <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <img alt="..." class="w-10 h-10"
                                                src="../../img/social/airbnb.svg">
                                        </div>
                                        <div class="text-end">
                                            <div class="d-flex align-items-center text-success text-sm font-semibold">
                                                <i class="bi bi-check-circle-fill me-1"></i> <span>Installed</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">GitHub</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @foreach ($products as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <img alt="..." class="w-10 h-10" src="../../img/social/amazon.svg">
                                        </div>
                                        <div class="text-end">
                                            <button type="button" class="btn btn-sm btn-neutral rounded-pill" data-bs-toggle="modal"
                                                data-bs-target="#modalAddProduct">
                                                <i class="bi bi-cart-plus-fill"></i>
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">{{ $product->name }}</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{--
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/bootstrap.svg"></div>
                                        <div class="text-end">
                                            <div
                                                class="d-flex align-items-center text-success text-sm font-semibold">
                                                <i class="bi bi-check-circle-fill me-1"></i> <span>Installed</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">Bootstrap</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/dribbble.svg"></div>
                                        <div class="text-end"><button type="button"
                                                class="btn btn-sm btn-neutral rounded-pill" data-bs-toggle="modal"
                                                data-bs-target="#modalAddProduct"><i
                                                    class="bi bi-plus-lg me-1"></i> <span>Install</span></button>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">Dribbble</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/spotify.svg"></div>
                                        <div class="text-end"><button type="button"
                                                class="btn btn-sm btn-neutral rounded-pill" data-bs-toggle="modal"
                                                data-bs-target="#modalAddProduct"><i
                                                    class="bi bi-plus-lg me-1"></i> <span>Install</span></button>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">Spotify</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/uber.svg"></div>
                                        <div class="text-end">
                                            <div
                                                class="d-flex align-items-center text-success text-sm font-semibold">
                                                <i class="bi bi-check-circle-fill me-1"></i> <span>Installed</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">Uber</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/codepen.svg"></div>
                                        <div class="text-end"><button type="button"
                                                class="btn btn-sm btn-neutral rounded-pill" data-bs-toggle="modal"
                                                data-bs-target="#modalAddProduct"><i
                                                    class="bi bi-plus-lg me-1"></i> <span>Install</span></button>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">Codepen</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/slack.svg"></div>
                                        <div class="text-end">
                                            <div
                                                class="d-flex align-items-center text-success text-sm font-semibold">
                                                <i class="bi bi-check-circle-fill me-1"></i> <span>Installed</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">Slack</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/airbnb.svg"></div>
                                        <div class="text-end">
                                            <div
                                                class="d-flex align-items-center text-success text-sm font-semibold">
                                                <i class="bi bi-check-circle-fill me-1"></i> <span>Installed</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">GitHub</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/amazon.svg"></div>
                                        <div class="text-end"><button type="button"
                                                class="btn btn-sm btn-neutral rounded-pill" data-bs-toggle="modal"
                                                data-bs-target="#modalAddProduct"><i
                                                    class="bi bi-plus-lg me-1"></i> <span>Install</span></button>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">Amazon S3</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/bootstrap.svg"></div>
                                        <div class="text-end">
                                            <div
                                                class="d-flex align-items-center text-success text-sm font-semibold">
                                                <i class="bi bi-check-circle-fill me-1"></i> <span>Installed</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">Bootstrap</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/dribbble.svg"></div>
                                        <div class="text-end"><button type="button"
                                                class="btn btn-sm btn-neutral rounded-pill" data-bs-toggle="modal"
                                                data-bs-target="#modalAddProduct"><i
                                                    class="bi bi-plus-lg me-1"></i> <span>Install</span></button>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">Dribbble</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/codepen.svg"></div>
                                        <div class="text-end"><button type="button"
                                                class="btn btn-sm btn-neutral rounded-pill" data-bs-toggle="modal"
                                                data-bs-target="#modalAddProduct"><i
                                                    class="bi bi-plus-lg me-1"></i> <span>Install</span></button>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">Codepen</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-4-hover">
                                <div class="card-body pb-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><img alt="..." class="w-10 h-10"
                                                src="../../img/social/slack.svg"></div>
                                        <div class="text-end">
                                            <div
                                                class="d-flex align-items-center text-success text-sm font-semibold">
                                                <i class="bi bi-check-circle-fill me-1"></i> <span>Installed</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-2">Slack</h6>
                                        <p class="text-sm text-muted">In certain circumstances and owing to the
                                            claims of duty.</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
