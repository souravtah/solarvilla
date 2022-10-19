@extends('layouts.app')
@section('content')
<header>
    <div class="container-fluid">
        <div class="border-bottom py-6">
            <div class="row align-items-center">
                <div class="col-sm col-12">
                    <h1 class="h2 ls-tight">Ticket status: {{ $ticket_status }}</h1>
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
                    <div class="card border">
                        <div class="card-body">
                            <h5 class="mb-6">Your support ticket status progress is as follows:</h5>
                            <div class="list-group list-group-flush list-group-borderless ms-4">
                                <?php
                                    $icon_bg = 'primary';
                                    $text_to_show = [
                                                        [
                                                            true    => 'You have raised a support ticket to Solarvilla Support Team. <i class="text-primary bi bi-ticket-perforated-fill"></i>',
                                                            false   => 'No support ticket has been raised. <i class="text-primary bi bi-ticket-perforated-fill"></i>'
                                                        ],
                                                        [
                                                            true    => 'Your requisition has been verified. <i class="text-primary bi bi-person-check-fill"></i>',
                                                            false   => 'Your requisition would be verified. <i class="text-primary bi bi-person-x-fill"></i>'
                                                        ],
                                                        [
                                                            true    => 'You have been assigned an executive. <i class="text-primary bi bi-person-check-fill"></i>',
                                                            false   => 'You would be assigned an executive. <i class="text-primary bi bi-person-x-fill"></i>'
                                                        ],
                                                        [
                                                            true    => 'The executive team has contacted you & visited your place. <i class="text-primary bi bi-people-fill"></i>',
                                                            false   => 'The executive team would contact you & visit your place. <i class="text-primary bi bi-people-fill"></i>'
                                                        ],
                                                        [
                                                            true    => 'Your ticked has been closed & resolved. You have received a feedback call from Solarvilla. <i class="text-primary bi bi-card-heading"></i>',
                                                            false   => 'Your ticked is yet to be closed & resolved. You would receive a feedback call from Solarvilla. <i class="text-primary bi bi-check2-all"></i>'
                                                        ],

                                    ];
                                ?>
                                @cannot('manage tickets')
                                <?php $proceed_to_next_step = false;?>
                                @endcannot
                                @can('manage tickets')
                                <?php $proceed_to_next_step = true;?>
                                @endcan
                                @foreach ($ticket_labels as $ticket_label)
                                <div class="list-group-item px-2 py-0">
                                    <div class="border-start">
                                        <div class="d-flex ms-n6 pb-6">
                                            <div class="flex-none me-3">
                                                <div class="icon icon-shape text-base w-12 h-12 bg-soft-{{ $icon_bg }} text-primary rounded-circle">
                                                    <i class="bi bi-{{ $loop->iteration }}-circle"></i>
                                                </div>
                                            </div>
                                            @if (in_array($ticket_label, $current_ticket_labels))
                                            <div>
                                                @if($loop->iteration == 1)<small class="d-block mb-1 text-muted">{{ \Carbon\Carbon::parse($ticket->created_at)->diffForHumans() }}</small>@endif
                                                <div class="text-sm">
                                                    <span class="text-heading text-sm font-bold">{!!  $text_to_show[$loop->index][true]  !!}</span>
                                                    @if (max($current_ticket_labels) == $ticket_label && $ticket_label != 5)
                                                        @if($proceed_to_next_step)
                                                        <div class="d-inline-block mx-1">
                                                            <a href="#" class="badge rounded-pill bg-success bg-opacity-20 bg-opacity-100-hover text-success text-white-hover">Proceed to next step</a>
                                                        </div>
                                                        @endif
                                                    <?php $proceed_to_next_step = false; $icon_bg = 'secondary'; ?>
                                                    @else
                                                    <?php $icon_bg = 'primary'; ?>
                                                    @endif
                                                </div>
                                                <div class="d-flex gap-2 mt-2">
                                                    <div class="position-relative bg-light border border-dashed border-primary-hover rounded-pill">
                                                        <div class="py-2 px-3 d-flex align-items-center">
                                                            <div class="me-2">
                                                                You have been notified via email/SMS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="flex-fill">
                                                <small class="d-block mb-1 text-muted">Yet to be completed</small>
                                                <div class="text-sm">
                                                    <span class="text-heading text-sm font-bold">{!! $text_to_show[$loop->index][false] !!}</span>
                                                </div>
                                                <div class="mt-2">
                                                    <p class="text-sm text-muted">You would be notified once this part of the process is completed</p>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="list-group-item px-2 py-0">
                                    <div class="border-start">
                                        <div class="d-flex ms-n6 pb-6">
                                            <div class="flex-none me-3">
                                                <div class="icon icon-shape text-base w-12 h-12 bg bg-soft-secondary text-primary rounded-circle">
                                                    <i class="bi bi-2-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-fill">
                                                <small class="d-block mb-1 text-muted">Yet to be completed</small>
                                                <div class="text-sm">
                                                    <span class="text-heading text-sm font-bold">Your requisition would be verified. <i class="text-primary bi bi-person-check-fill"></i></span>
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
                                                <div class="icon icon-shape text-base w-12 h-12 bgbg-soft-secondary text-primary rounded-circle">
                                                    <i class="bi bi-3-circle"></i>
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
                                                    <i class="bi bi-4-circle"></i></div>
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
                                                    <i class="bi bi-5-circle"></i></div>
                                            </div>
                                            <div class="flex-fill"><small class="d-block mb-1 text-muted">Yet to be completed</small>
                                                <div class="text-sm">
                                                    <span class="font-bold">Your ticked has been closed & resolved. You would receive a feedback call <i class="text-primary bi bi-telephone-inbound-fill"></i> from Solarvilla</span>
                                                </div>
                                                <div class="mt-2">
                                                    <p class="text-sm text-muted">You would be notified once this part of the process is completed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
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
