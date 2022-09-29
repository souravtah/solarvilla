@extends('layouts.app')
@section('content')
<div class="flex-lg-1">
    <form method="POST" action="{{ route('tickets.store') }}">
    @csrf
    <header class="position-sticky top-0 overlap-10 bg-surface-primary border-bottom">
        <div class="container-fluid py-4">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4">
                        <div class="vr opacity-20 my-1"></div>
                        <h1 class="h4 ls-tight">Raise a new ticket <i class="bi bi-ticket-detailed"></i></h1>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="hstack gap-2 justify-content-end">
                        <a href="#!" class="text-sm text-muted text-primary-hover font-semibold me-2 d-none d-md-block">
                            <i class="bi bi-question-circle-fill"></i>
                            <span class="d-none d-sm-inline ms-2">Need help?</span>
                        </a>
                        <button type="submit" class="btn btn-sm btn-primary">
                            <span>Save <i class="bi bi-send"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="vstack gap-8 mt-4">
                        <input type="text" name="title" class="form-control form-control-flush text-2xl font-bold"
                            placeholder="Type your query here...">
                        <div class="card">
                            <div>
                                <div class="textarea-autosize p-6">
                                    <textarea name="message" class="form-control border-0 shadow-none p-0" rows="4" placeholder="Enter your problem/query in details..."></textarea>
                                </div>
                                <div class="d-flex align-items-center px-6 py-3 border-top">
                                    <div class="flex-fill d-flex align-items-center">
                                        <h6 class="font-semibold text-xs text-muted text-opacity-70">You may click picture from the camera icon at right</h6>
                                    </div>
                                    <div class="text-end">
                                        <div class="hstack gap-5 align-items-center">
                                            <a href="#!" class="text-lg text-muted text-primary-hover">
                                                <i class="bi bi-camera-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h6 class="mb-3">Attachments</h6>
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="rounded border-2 border-dashed border-primary-hover position-relative">
                                        <div class="d-flex justify-content-center px-5 py-5"><label for="file_upload"
                                                class="position-absolute w-full h-full top-0 start-0 cursor-pointer"><input
                                                    id="file_upload" name="file_upload" type="file"
                                                    class="visually-hidden"></label>
                                            <div class="text-center">
                                                <div class="text-2xl text-muted"><i class="bi bi-upload"></i></div>
                                                <div class="d-flex text-sm mt-3">
                                                    <p class="font-semibold">Upload a file or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 30MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card position-sticky top-24">
                        <div class="card-body pb-0">
                            <h6 class="mb-4">Ticket type</h6>
                            <div>
                                <select class="form-select" name="category">
                                    @foreach ($ticket_categories as $ticket_category)
                                    <option value="{{ $ticket_category->id }}">{{ $ticket_category->name }}</option>
                                    @endforeach
                                </select>
                                {{-- <div class="d-flex gap-3 justify-content-end mt-4">
                                    <button type="button" class="btn btn-link p-0 link-primary text-sm font-semibold">
                                        Add new project
                                    </button>
                                </div> --}}
                                <hr class="mt-4 mb-0">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <h6 class="text-sm text-muted font-semibold">Set priority</h6>
                                        </div>
                                        <div class="mt-3 row">
                                            <div class="form-check col-6">
                                                <input class="form-check-input" type="radio" name="ticketPriority" value="low" id="ticketPriority1" checked>
                                                <label class="form-check-label" for="ticketPriority1">
                                                    <span class="badge badge-sm bg-soft-success text-success">
                                                        <i class="bi bi-hand-thumbs-up-fill me-2"></i>Low
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check col-6">
                                                <input class="form-check-input" type="radio" name="ticketPriority" value="medium" id="ticketPriority2">
                                                <label class="form-check-label" for="ticketPriority2">
                                                    <span class="badge badge-sm bg-soft-warning text-warning">
                                                        <i class="bi bi-stopwatch-fill me-2"></i>Medium
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mt-3 row">
                                            <div class="form-check col-6">
                                                <input class="form-check-input" type="radio" name="ticketPriority" value="high" id="ticketPriority3">
                                                <label class="form-check-label" for="ticketPriority3">
                                                    <span class="badge badge-sm bg-soft-danger text-danger">
                                                        <i class="bi bi-exclamation-circle me-2"></i>High
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check col-6">
                                                <input class="form-check-input" type="radio" name="ticketPriority" value="critical" id="ticketPriority4">
                                                <label class="form-check-label" for="ticketPriority4">
                                                    <span class="badge badge-sm bg-soft-danger text-danger">
                                                        <i class="bi bi-exclamation-circle-fill me-2"></i>Critical
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <h6 class="text-sm text-muted font-semibold">Due date (optional)</h6>
                                        <div class="mt-3">
                                            <div class="datepicker d-flex gap-2 align-items-center">
                                                <input type="text" name="due_date" class="form-control form-control-flush text-sm text-muted font-semibold flatpickr-input"
                                                    placeholder="Select date" data-input="">
                                                    <a href="#" class="text-muted text-primary-hover" data-toggle="">
                                                        <i class="bi bi-calendar-event"></i>
                                                    </a>
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
        </form>
    </main>
</div>
@endsection
