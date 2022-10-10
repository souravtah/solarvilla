@extends('layouts.app')

@section('content')
@include('users._home-navigation')
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="row g-6 mb-6">
            @role('Client')
            <div class="col-xl-3 col-sm-6 col-12">
                <a href="{{ route('tickets.create') }}">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">0 open tickets</span>
                                    <span class="h3 font-bold mb-0">Raise a support ticket</span>
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
                </a>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <a href="#!">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">5 calls made</span>
                                    <span class="h3 font-bold mb-0">Request a support call</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                        <i class="bi bi-telephone-inbound-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 mb-0 text-sm">
                                <span class="badge badge-pill bg-soft-success text-success me-2">
                                    <i class="bi bi-check2-all"></i>
                                </span>
                                <span class="text-nowrap text-xs text-muted">We will get back to you</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endrole
        </div>
    </div>
</main>
@endsection
