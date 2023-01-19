<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="modal fade" id="modalCall" tabindex="-1" aria-labelledby="modalCall" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <div class="icon icon-shape rounded-3 bg-soft-primary text-primary text-lg me-4">
                            <i class="bi bi-telephone-outbound-fill"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Call SolarVilla Helpline</h5>
                            <small class="d-block text-xs text-muted">Usual wait time: less than 01 minute</small>
                        </div>
                        <div class="ms-auto">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="me-auto">
                            <a href="tel:09876543210" class="btn btn-warning btn-sm w-full mt-3">
                                <i class="bi bi-telephone-outbound-fill"></i>&nbsp; Call +919876543210
                            </a>
                        </div>
                        <button type="button" class="btn btn-neutral btn-sm mt-3" data-bs-dismiss="modal">
                            <i class="bi bi-x-square"></i>&nbsp; Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalRequestCall" tabindex="-1" aria-labelledby="modalRequestCall" style="display: none;"
            aria-hidden="true">
            <form method="POST" action="{{ route('tickets.create_call') }}">
            @csrf
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <div class="icon icon-shape rounded-3 bg-soft-primary text-primary text-lg me-4">
                            <i class="bi bi-telephone-outbound-fill"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Request a call back</h5>
                            <small class="d-block text-xs text-muted">Schedule your convenient date & time for us to call you</small>
                        </div>
                        <div class="ms-auto">

                        </div>
                    </div>
                    <div class="modal-body">
                        <h6 class="pb-4">Ticket type</h6>
                        <div>
                            <select class="form-select" name="category">
                                @foreach ($ticket_categories as $ticket_category)
                                <option value="{{ $ticket_category->id }}">{{ $ticket_category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <h6 class="pt-4 text-sm text-muted font-semibold">Due date (optional)</h6>
                        <div class="mt-1">
                            <div class="datetimepicker d-flex gap-2 align-items-center">
                                <input type="text" id="inputDateTime" name="due_date" class="form-control form-control-flush text-sm text-muted font-semibold flatpickr-input"
                                    placeholder="Select date" data-input="">
                                    {{-- <a href="#" class="text-muted text-primary-hover" data-toggle="">
                                        <i class="bi bi-calendar-event"></i>
                                    </a> --}}
                                </div>
                        </div>
                        {{-- <link rel=stylesheet href=https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/confirmDate/confirmDate.css> --}}
                        {{-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> --}}
                        {{-- <script src="{{ asset('assets/vendor/flatpickr/css/flatpickr.min.css') }}"></script> --}}
                        {{-- <script src="{{ asset('assets/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
                        <script type="text/javascript">
                            const myInput = document.querySelector("#inputDateTime");
                            myInput.flatpickr({
                                altInput: true,
                                altFormat: "F j, Y h:i K",
                                dateFormat: "Y-m-d H:i",
                                minDate: "today",
                                enableTime: true,
                                minTime: "10:00",
                                maxTime: "20:30",
                                // "plugins": [new confirmDatePlugin({})]
                                // confirmText: "OK ",
                                // showAlways: false,
                            });
                        </script> --}}
                    </div>
                    <div class="modal-footer">
                        <div class="me-auto">
                            <button type="submit" class="btn btn-warning btn-sm w-full mt-3">
                                <i class="bi bi-telephone-inbound-fill"></i>&nbsp; Request a Call
                            </button>
                        </div>
                        <button type="button" class="btn btn-neutral btn-sm mt-3" data-bs-dismiss="modal">
                            <i class="bi bi-x-square"></i>&nbsp; Close
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <div class="row g-6 mb-6">
            @role('Client')
                <div class="col-xl-3 col-sm-6 col-12">
                    <a href="{{ route('tickets.create') }}">
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">{{ $opened_tickets }} opened tickets</span>
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
                                        <i class="bi bi-check2-all"></i>
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">We will get back to you</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <a href="#modalRequestCall" data-bs-toggle="modal">
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">{{ $opened_calls }} calls requested</span>
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
                <div class="col-xl-3 col-sm-6 col-12">
                    <a href="#modalCall" data-bs-toggle="modal">
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Ready to call</span>
                                        <span class="h3 font-bold mb-0">Call Solarvilla Helpline</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                            <i class="bi bi-telephone-outbound-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-check2-all"></i>
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Usual waiting time is 01 minute</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endrole
        </div>
    </div>
</main>
