@extends('layouts.app')
@section('content')
<header>
    <div class="container-fluid">
        <div class="border-bottom py-6">
            <div class="row align-items-center">
                <div class="col-sm col-12">
                    <h1 class="h2 ls-tight">Ticket history</h1>
                </div>

            </div>
        </div>
    </div>
</header>
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="vstack gap-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="me-auto">Admin Users</h5>
                    @if (session('status'))
                    <span class="me-auto text-success">
                            {{ session('status') }}
                    </span>
                    @endif
                    <div class="dropdown">
                        <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#!" class="dropdown-item">Action </a>
                            <a href="#!" class="dropdown-item">Another action </a>
                            <a href="#!" class="dropdown-item">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-4 border-top border-bottom d-flex flex-column flex-sm-row gap-3">
                    <div class="scrollable-x">
                        <div class="btn-group" style="min-width:700px"><a href="#"
                                class="btn btn-sm btn-neutral text-primary" aria-current="page">View all</a> <a href="#"
                                class="btn btn-sm btn-neutral">Admin <span class="text-muted text-xs">(5)</span></a> <a
                                href="#" class="btn btn-sm btn-neutral">Publisher <span
                                    class="text-muted text-xs">(3)</span></a> <a href="#"
                                class="btn btn-sm btn-neutral">Manager <span class="text-muted text-xs">(2)</span></a>
                        </div>
                    </div>
                    <div class="ms-auto hstack gap-2">
                        <div class="input-group input-group-sm input-group-inline"><span
                                class="input-group-text pe-2"><i class="bi bi-search"></i> </span><input type="email"
                                class="form-control" placeholder="Search" aria-label="Search"></div>
                        <div><button type="button" class="btn btn-sm px-3 btn-neutral d-flex align-items-center"><i
                                    class="bi bi-funnel me-2"></i> <span>Filters</span> <span
                                    class="vr opacity-20 mx-3"></span> <span
                                    class="text-xs text-primary">2</span></button></div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Message</th>
                                <th scope="col">Priority</th>
                                <th scope="col">Status</th>
                                <th scope="col">Due Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                            <tr>
                                <td>
                                    <a class="text-heading text-primary-hover font-semibold" href="#">{{ $ticket->title }}</a>
                                </td>
                                <td>{{ $ticket->message }}</td>
                                <td>
                                    <span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">{{ $ticket->priority }}</span>
                                </td>
                                <td>{{ $ticket->status }}</td>
                                <td>
                                    <span class="badge text-uppercase bg-soft-danger text-danger rounded-pill">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $ticket->due_date)->format("F j, Y") }}</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-square btn-neutral me-1">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer border-0 py-5">
                    <span class="text-muted text-sm">{{ $tickets->links() }}</span>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
