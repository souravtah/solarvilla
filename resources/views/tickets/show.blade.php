@extends('layouts.app')
@section('content')
<header>
    <div class="container-fluid">
        <div class="border-bottom py-6">
            <div class="row align-items-center">
                <div class="col-sm col-12">
                    <h1 class="h2 ls-tight">Ticket status</h1>
                </div>
            </div>
            @if (session('status'))
            <span class="me-auto text-success">
                    {{ session('status') }}
            </span>
            @endif
        </div>
    </div>
</header>
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="row g-6">
            <div class="col-xl-8">
                <div class="vstack gap-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-6">Your support ticket status progress is as follows:</h5>
                            <div class="list-group list-group-flush list-group-borderless ms-4">
                                <div class="list-group-item px-2 py-0">
                                    <div class="border-start">
                                        <div class="d-flex ms-n6 pb-6">
                                            <div class="flex-none me-3">
                                                <div class="icon icon-shape text-base w-12 h-12 bg-soft-primary text-primary rounded-circle">
                                                    <i class="bi bi-1-circle"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <small class="d-block mb-1 text-muted">{{ \Carbon\Carbon::parse($ticket->created_at)->diffForHumans() }}</small>
                                                <div>You've raised a support ticket <i class="bi bi-ticket-perforated-fill text-primary"></i> to Solarvilla Support Team</div>
                                                {{-- <div class="d-flex gap-2 mt-2">
                                                    <div class="position-relative bg-light border border-dashed border-warning-hover rounded-pill">
                                                        <div class="py-2 px-3 d-flex align-items-center">
                                                            <div class="me-2">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item px-2 py-0">
                                    <div class="border-start">
                                        <div class="d-flex ms-n6 pb-6">
                                            <div class="flex-none me-3">
                                                <div class="icon icon-shape text-base w-12 h-12 bgbg-soft-secondary text-primary rounded-circle">
                                                    <i class="bi bi-2-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-fill">
                                                <small class="d-block mb-1 text-muted">Yet to be completed</small>
                                                <div class="text-sm">
                                                    <span class="text-heading text-sm font-bold">You would be assigned an executive <i class="text-primary bi bi-person-check-fill"></i></span>
                                                </div>
                                                <div class="mt-2">
                                                    <p class="text-sm text-muted">You would be notified once this part of the process is completed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item px-2 py-0">
                                    <div class="border-start">
                                        <div class="d-flex ms-n6 pb-6">
                                            <div class="flex-none me-3">
                                                <div
                                                    class="icon icon-shape text-base w-12 h-12 bg-soft-secondary text-primary rounded-circle">
                                                    <i class="bi bi-3-circle"></i></div>
                                            </div>
                                            <div class="flex-fill">
                                                <small class="d-block mb-1 text-muted">Yet to be completed</small>
                                                <div class="text-sm"><span class="font-bold">The executive team would contact you <i class="text-primary bi bi-calendar-check-fill"></i> & visit your place <i class="text-primary bi bi-tools"></i></span>
                                                </div>
                                                <div class="mt-2">
                                                    <p class="text-sm text-muted">You would be notified once this part of the process is completed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item px-2 py-0">
                                    <div class="border-start">
                                        <div class="d-flex ms-n6 pb-6">
                                            <div class="flex-none me-3">
                                                <div
                                                    class="icon icon-shape text-base w-12 h-12 bg-soft-secondary text-primary rounded-circle">
                                                    <i class="bi bi-4-circle"></i></div>
                                            </div>
                                            <div class="flex-fill"><small class="d-block mb-1 text-muted">Yet to be completed</small>
                                                <div class="text-sm">
                                                    <span class="font-bold">You would receive a feedback call <i class="text-primary bi bi-telephone-inbound-fill"></i> from Solarvilla</span>
                                                </div>
                                                <div class="mt-2">
                                                    <p class="text-sm text-muted">You would be notified once this part of the process is completed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">

            </div>
        </div>
    </div>
</main>
@endsection
