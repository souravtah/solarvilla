@extends('layouts.app')
@section('content')
{{-- <div class="flex-lg-1 h-screen overflow-y-lg-auto">
    <header>
        <div class="container-fluid">
            <div class="border-bottom py-6">
                <div class="row align-items-center">
                    <div class="col-sm col-12">
                        <h1 class="h2 ls-tight">Ticket edit</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid max-w-screen-md vstack gap-5">
            <div><label class="form-label">Name</label> <input type="text" class="form-control"
                    placeholder="Project name">
                <span class="d-block mt-2 text-sm text-muted">Make it unique.</span>
            </div>
            <div><label class="form-label">Description</label>
                <textarea class="form-control" placeholder="Project description ..." rows="2"></textarea> <span
                    class="d-block mt-2 text-sm text-muted">Make it unique.</span>
            </div>
            <hr class="my-0">
            <div><label class="form-label">Select view</label>
                <div class="hstack gap-3">
                    <div class="form-item-checkable"><input class="form-item-check" type="radio" name="project-view"
                            id="project-view-kanban" checked="checked"> <label class="form-item"
                            for="project-view-kanban"><span
                                class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted"><i
                                    class="bi bi-kanban" style="font-size:2rem"></i></span></label></div>
                    <div class="form-item-checkable"><input class="form-item-check" type="radio" name="project-view"
                            id="project-view-list"> <label class="form-item" for="project-view-list"><span
                                class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted"><i
                                    class="bi bi-view-list" style="font-size:2rem"></i></span></label></div>
                    <div class="form-item-checkable"><input class="form-item-check" type="radio" name="project-view"
                            id="project-view-table"> <label class="form-item" for="project-view-table"><span
                                class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted"><i
                                    class="bi bi-table" style="font-size:2rem"></i></span></label></div>
                </div>
            </div>
            <hr class="my-0">
            <div class="vstack gap-4">
                <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio"
                        name="projecy-privacy" checked="checked">
                    <div class="pt-1 form-checked-content">
                        <h6 class="mb-1 lh-relaxed">Private</h6><span class="d-block text-muted text-sm"><i
                                class="bi bi-lock-fill me-1"></i> Only you will be able to see this project</span>
                    </div>
                </div>
                <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio"
                        name="projecy-privacy">
                    <div class="pt-1 form-checked-content">
                        <h6 class="mb-1 lh-relaxed">Make it public</h6><span class="d-block text-muted text-sm"><i
                                class="bi bi-people-fill me-1"></i> Everyone in this workspace will be able to see this
                            project</span>
                    </div>
                </div>
            </div>
            <hr class="my-0">
            <div class="row gx-4">
                <div class="col">
                    <div><label class="form-label">Client</label> <select class="form-select">
                            <option>Webpixels</option>
                            <option>Apple</option>
                            <option>Elrond</option>
                        </select></div>
                </div>
                <div class="col-auto align-self-end"><span
                        class="d-inline-block py-3 font-semibold text-muted">or</span>
                </div>
                <div class="col-auto align-self-end"><button type="button" class="btn btn-neutral"><i
                            class="bi bi-plus-lg"></i> <span class="d-none d-sm-inline ms-2">New client</span></button>
                </div>
            </div>
            <div class="row gx-4 gy-5">
                <div class="col-md-6">
                    <div><label class="form-label">Start date</label>
                        <div class="input-group input-group-inline datepicker"><span class="input-group-text pe-2"><i
                                    class="bi bi-calendar"></i> </span><input type="text"
                                class="form-control flatpickr-input" placeholder="Select date" data-input=""></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div><label class="form-label">Due date</label>
                        <div class="input-group input-group-inline datepicker"><span class="input-group-text pe-2"><i
                                    class="bi bi-calendar"></i> </span><input type="text"
                                class="form-control flatpickr-input" placeholder="Select date" data-input=""></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div> --}}
@endsection
