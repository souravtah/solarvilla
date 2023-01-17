@extends('layouts.app')
@section('content')
    <div class="flex-lg-1 h-screen overflow-y-lg-auto">
        <header>
            <div class="container-fluid">
                <div class="border-bottom pt-6">
                    <div class="row align-items-center">
                        <div class="col-sm col-12">
                            <h1 class="h2 ls-tight">Invoices/Challan</h1>
                        </div>
                        <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                            {{-- <div class="hstack gap-2 justify-content-sm-end"><a href="#modalExport"
                                    class="btn btn-sm btn-neutral border-base" data-bs-toggle="modal"><span
                                        class="pe-2"><i class="bi bi-people-fill"></i> </span><span>Share</span> </a><a
                                    href="#offcanvasCreate" class="btn btn-sm btn-primary"
                                    data-bs-toggle="offcanvas"><span class="pe-2"><i
                                            class="bi bi-plus-square-dotted"></i> </span><span>Create</span></a>
                            </div> --}}
                        </div>
                    </div>
                    <ul class="nav nav-tabs overflow-x border-0">
                        <li class="nav-item"><a href="{{ route('invoices.index') }}" class="nav-link active">View all</a></li>
                        {{-- <li class="nav-item"><a href="#" class="nav-link">Most recent</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Popular</a></li> --}}
                    </ul>
                </div>
            </div>
        </header>
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <div class="vstack gap-4">
                    <div class="d-flex justify-content-between flex-column flex-sm-row gap-3">
                        <div class="hstack gap-2">
                            <div class="input-group input-group-sm input-group-inline">
                                <span class="input-group-text pe-2"><i class="bi bi-search"></i> </span>
                                <input type="email" class="form-control" placeholder="Search Invoice number.." aria-label="Search">
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm px-3 btn-neutral d-flex align-items-center">
                                    <i class="bi bi-search me-2"></i> <span>Search</span>
                                </button>
                            </div>
                        </div>
                        {{-- <div class="btn-group"><a href="#" class="btn btn-sm btn-neutral"><i
                                    class="bi bi-cloud-download me-2"></i>Download all </a><a href="#"
                                class="btn btn-sm btn-neutral"><i class="bi bi-gear-wide me-2"></i>Settings</a></div> --}}
                    </div>
                    <div class="card">
                        <div class="card-header border-bottom d-flex align-items-center">
                            <h5 class="me-auto">All Invoices</h5>
                            {{-- <div class="dropdown"><a class="text-muted" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="bi bi-three-dots-vertical"></i></a>
                                <div class="dropdown-menu"><a href="#!" class="dropdown-item">Action </a><a
                                        href="#!" class="dropdown-item">Another action </a><a href="#!"
                                        class="dropdown-item">Something else here</a></div>
                            </div> --}}
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Customer's Name</th>
                                        <th scope="col">View Invoice</th>
                                        <th scope="col">View Challan</th>
                                        <th scope="col">Created at</th>
                                        {{-- <th></th> --}}
                                    </tr>
                                </thead>
                                <tbody>@foreach ($invoices->unique('invoice_number') as $invoice)
                                    <tr>
                                        <td>
                                            {{ $invoice->buyer->name }}
                                        </td>
                                        <td>
                                            <a href="{{ route('invoices.show', ['invoice' => $invoice->invoice_number]) }}" target="_blank">{{ $invoice->invoice_number }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('invoices.show', ['invoice' => $invoice->invoice_number, 'challan' => 'Challan']) }}" target="_blank">{{ $invoice->invoice_number }}</a>
                                        </td>
                                        <td>
                                            <span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">
                                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $invoice->created_at)->format("F j, Y") }}
                                            </span>
                                        </td>
                                        {{-- <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-square btn-neutral">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer border-0 py-5"><span class="text-muted text-sm">{{ $invoices->links() }}</span></div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
