@extends('layouts.app')

@section('content')
@include('users._home-navigation')
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="row g-6 mb-6">
            @role('Admin')
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Income</span>
                                <span class="h3 font-bold mb-0">₹99990</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <span class="badge badge-pill bg-soft-success text-success me-2">
                                <i class="bi bi-arrow-up me-1"></i>30%
                            </span>
                            <span class="text-nowrap text-xs text-muted">Since last month</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Clients</span>
                                <span class="h3 font-bold mb-0">215</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <span class="badge badge-pill bg-soft-success text-success me-2">
                                <i class="bi bi-arrow-up me-1"></i>23%
                            </span>
                            <span class="text-nowrap text-xs text-muted">Since last week</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col"><span class="h6 font-semibold text-muted text-sm d-block mb-2">Total
                                    hours</span> <span class="h3 font-bold mb-0">1.400</span></div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-info text-white text-lg rounded-circle"><i
                                        class="bi bi-clock-history"></i></div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm"><span class="badge badge-pill bg-soft-danger text-danger me-2"><i
                                    class="bi bi-arrow-down me-1"></i>-10% </span><span
                                class="text-nowrap text-xs text-muted">Since last month</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col"><span class="h6 font-semibold text-muted text-sm d-block mb-2">Work
                                    load</span> <span class="h3 font-bold mb-0">95%</span></div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-warning text-white text-lg rounded-circle"><i
                                        class="bi bi-minecart-loaded"></i></div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm"><span
                                class="badge badge-pill bg-soft-success text-success me-2"><i
                                    class="bi bi-arrow-up me-1"></i>15% </span><span
                                class="text-nowrap text-xs text-muted">Since yestearday</span></div>
                    </div>
                </div>
            </div>
            @endrole
            @role('Client')
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">My purchases</span>
                                <span class="h3 font-bold mb-0">1 item</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <span class="badge badge-pill bg-soft-danger text-danger me-2">
                                <i class="bi bi-cart4"></i>
                            </span>
                            <span class="text-nowrap text-xs text-muted">AMC not done</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Pending tickets</span>
                                <span class="h3 font-bold mb-0">0</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                    <i class="bi bi-ticket-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <span class="badge badge-pill bg-soft-success text-success me-2">
                                <i class="bi bi-check2-all"></i> 3
                            </span>
                            <span class="text-nowrap text-xs text-muted">resolved</span>
                        </div>
                    </div>
                </div>
            </div>
            @endrole
        </div>
    </div>
</main>
@endsection
