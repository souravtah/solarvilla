@extends('layouts.app')

@section('content')
<header>
    <div class="container-fluid">
        <div class="border-bottom pt-6">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12">
                    <h1 class="h2 ls-tight">Welcome back to SolarVilla <i class="bi bi-house-heart"></i></h1>
                </div>
                <div class="col-sm-6 col-12"></div>
            </div>
            <ul class="nav nav-tabs overflow-x border-0">
                @role('Client')
                <li class="nav-item"><a href="general.html" class="nav-link active"><i class="bi bi-question-diamond"></i> Get Help</a></li>
                <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
                <li class="nav-item"><a href="billing.html" class="nav-link">Billing</a></li>
                <li class="nav-item"><a href="security.html" class="nav-link">Security</a></li>
                <li class="nav-item"><a href="notifications.html" class="nav-link">Notifications</a></li>
                @endrole
            </ul>
        </div>
    </div>
</header>
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="row g-6 mb-6">
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
        </div>
    </div>
</main>
@endsection
