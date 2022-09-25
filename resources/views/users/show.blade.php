@extends('layouts.app')
@section('content')
<div class="flex-lg-1 h-screen overflow-y-lg-auto">
    @include('users._show_header')
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid max-w-screen-xl">
            <div class="row g-6">
                <div class="col-xl-8">
                    <div class="vstack gap-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Biography</h5>
                                <p class="text-sm lh-relaxed mb-4">dummy text</p>
                                <p class="text-sm lh-loose mb-4">dummy text</p>
                            </div>
                        </div>
                        {{-- <div class="card">
                            <div class="card-body">
                                <h5 class="mb-6">Recent Activity</h5>
                                <div class="list-group list-group-flush list-group-borderless ms-4">
                                    <div class="list-group-item px-2 py-0">
                                        <div class="border-start">
                                            <div class="d-flex ms-n6 pb-6">
                                                <div class="flex-none me-3">
                                                    <div
                                                        class="icon icon-shape text-base w-12 h-12 bg-soft-primary text-primary rounded-circle">
                                                        <i class="bi bi-file-earmark-pdf-fill"></i></div>
                                                </div>
                                                <div><small class="d-block mb-1 text-muted">2 hrs ago</small>
                                                    <div>You've uploaded <span
                                                            class="font-bold">documentation.pdf</span> to the <span
                                                            class="font-bold">Webpixels</span> project</div>
                                                    <div class="d-flex gap-2 mt-2">
                                                        <div
                                                            class="position-relative bg-light border border-dashed border-warning-hover rounded-pill">
                                                            <div class="py-2 px-3 d-flex align-items-center">
                                                                <div class="me-2"><i
                                                                        class="bi bi-image text-warning"></i></div>
                                                                <div class="flex-fill"><a href="#"
                                                                        class="d-block font-semibold text-xs text-muted text-warning-hover stretched-link">documentation.pdf</a>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                                        class="icon icon-shape text-base w-12 h-12 bg-soft-danger text-danger rounded-circle">
                                                        <i class="bi bi-file-earmark-pdf-fill"></i></div>
                                                </div>
                                                <div class="flex-fill"><small class="d-block mb-1 text-muted">4 hrs
                                                        ago</small>
                                                    <div class="text-sm"><span
                                                            class="text-heading text-sm font-bold">Mike</span> added a
                                                        new comment to your task:</div>
                                                    <div class="mt-2">
                                                        <p class="text-sm text-muted">On the other hand, we denounce
                                                            with righteous indignation and dislike men who are so
                                                            beguiled and demoralized by the charms of pleasure of the
                                                            moment, so blinded by desire, that they cannot foresee.</p>
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
                                                        class="icon icon-shape text-base w-12 h-12 bg-soft-primary text-primary rounded-circle">
                                                        <i class="bi bi-file-earmark-pdf-fill"></i></div>
                                                </div>
                                                <div class="flex-fill"><small class="d-block mb-1 text-muted">4 hrs
                                                        ago</small>
                                                    <div class="text-sm">Heather added <span class="font-bold">4
                                                            images</span> to the <span class="font-bold">Team</span>
                                                        album:</div>
                                                    <div class="mt-2 d-flex gap-2 scrollable-x">
                                                        <div class="col-auto"><img alt="..."
                                                                src="../../img/media/img-3.jpg"
                                                                class="rounded w-auto h-16"></div>
                                                        <div class="col-auto"><img alt="..."
                                                                src="../../img/media/img-4.jpg"
                                                                class="rounded w-auto h-16"></div>
                                                        <div class="col-auto"><img alt="..."
                                                                src="../../img/media/img-5.jpg"
                                                                class="rounded w-auto h-16"></div>
                                                        <div class="col-auto"><img alt="..."
                                                                src="../../img/media/img-6.jpg"
                                                                class="rounded w-auto h-16"></div>
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
                                                        class="icon icon-shape text-base w-12 h-12 bg-soft-primary text-primary rounded-circle">
                                                        <i class="bi bi-file-earmark-pdf-fill"></i></div>
                                                </div>
                                                <div class="flex-fill"><small class="d-block mb-1 text-muted">4 hrs
                                                        ago</small>
                                                    <div class="text-sm">Heather added <span
                                                            class="font-bold">Anna</span> to the <span
                                                            class="font-bold">Clever</span> team.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item px-2 py-0">
                                        <div class="border-start">
                                            <div class="d-flex ms-n6 pb-6">
                                                <div class="flex-none me-3">
                                                    <div
                                                        class="icon icon-shape text-base w-12 h-12 bg-soft-primary text-primary rounded-circle">
                                                        <i class="bi bi-file-earmark-pdf-fill"></i></div>
                                                </div>
                                                <div class="flex-fill"><small class="d-block mb-1 text-muted">4 hrs
                                                        ago</small>
                                                    <div class="text-sm">Heather created the tags<div
                                                            class="d-inline-block mx-1"><a href="#"
                                                                class="badge rounded-pill bg-danger bg-opacity-20 bg-opacity-100-hover text-danger text-white-hover">Bugs</a>
                                                            <a href="#"
                                                                class="badge rounded-pill bg-success bg-opacity-20 bg-opacity-100-hover text-success text-white-hover">Showcase</a>
                                                        </div>for the <span class="font-bold">Clever</span> project
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item px-2 py-0">
                                        <div>
                                            <div class="d-flex ms-n6 pb-6">
                                                <div class="flex-none me-3">
                                                    <div
                                                        class="icon icon-shape text-base w-12 h-12 bg-soft-primary text-primary rounded-circle">
                                                        <i class="bi bi-file-earmark-pdf-fill"></i></div>
                                                </div>
                                                <div class="flex-fill"><small class="d-block mb-1 text-muted">2 hrs
                                                        ago</small>
                                                    <div>You've uploaded <span
                                                            class="font-bold">documentation.pdf</span> to the <span
                                                            class="font-bold">Webpixels</span> project</div>
                                                    <div class="mt-2 scrollable-x overflow-hidden">
                                                        <div
                                                            class="d-inline-block position-relative bg-light border border-dashed border-tertiary-hover rounded-pill">
                                                            <div class="py-2 px-3 d-flex align-items-center">
                                                                <div class="me-2"><i
                                                                        class="bi bi-image text-tertiary"></i></div>
                                                                <div class="flex-fill"><a href="#"
                                                                        class="d-block font-semibold text-xs text-muted text-tertiary-hover stretched-link">design.fig</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-inline-block position-relative bg-light border border-dashed border-warning-hover rounded-pill">
                                                            <div class="py-2 px-3 d-flex align-items-center">
                                                                <div class="me-2"><i
                                                                        class="bi bi-image text-warning"></i></div>
                                                                <div class="flex-fill"><a href="#"
                                                                        class="d-block font-semibold text-xs text-muted text-warning-hover stretched-link">readme.md</a>
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
                        </div> --}}
                        {{-- <div>
                            <h5 class="mb-4">My Files</h5>
                            <div class="row g-5">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card shadow-4-hover">
                                        <div class="p-2"><a href="#" class="d-block"><img
                                                    class="img-fluid rounded-2" alt="..."
                                                    src="../../img/media/img-800x800-1.jpg"></a></div>
                                        <div class="px-4 pt-2 pb-4">
                                            <h6 class="font-semibold mb-2">Website Redesign</h6>
                                            <div class="d-flex align-items-center">
                                                <div class="text-xs text-muted"><i class="bi bi-lock me-1"></i>Private
                                                </div>
                                                <div class="text-xs text-muted ms-auto">3 hrs ago</div>
                                            </div><span class="d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card shadow-4-hover">
                                        <div class="p-2"><a href="#" class="d-block"><img
                                                    class="img-fluid rounded-2" alt="..."
                                                    src="../../img/media/img-800x800-2.jpg"></a></div>
                                        <div class="px-4 pt-2 pb-4">
                                            <h6 class="font-semibold mb-2">Website Redesign</h6>
                                            <div class="d-flex align-items-center">
                                                <div class="text-xs text-muted"><i class="bi bi-lock me-1"></i>Private
                                                </div>
                                                <div class="text-xs text-muted ms-auto">3 hrs ago</div>
                                            </div><span class="d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card shadow-4-hover">
                                        <div class="p-2"><a href="#" class="d-block"><img
                                                    class="img-fluid rounded-2" alt="..."
                                                    src="../../img/media/img-800x800-3.jpg"></a></div>
                                        <div class="px-4 pt-2 pb-4">
                                            <h6 class="font-semibold mb-2">Website Redesign</h6>
                                            <div class="d-flex align-items-center">
                                                <div class="text-xs text-muted"><i class="bi bi-lock me-1"></i>Private
                                                </div>
                                                <div class="text-xs text-muted ms-auto">3 hrs ago</div>
                                            </div><span class="d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card shadow-4-hover">
                                        <div class="p-2"><a href="#" class="d-block"><img
                                                    class="img-fluid rounded-2" alt="..."
                                                    src="../../img/media/img-800x800-4.jpg"></a></div>
                                        <div class="px-4 pt-2 pb-4">
                                            <h6 class="font-semibold mb-2">Website Redesign</h6>
                                            <div class="d-flex align-items-center">
                                                <div class="text-xs text-muted"><i class="bi bi-lock me-1"></i>Private
                                                </div>
                                                <div class="text-xs text-muted ms-auto">3 hrs ago</div>
                                            </div><span class="d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card shadow-4-hover">
                                        <div class="p-2"><a href="#" class="d-block"><img
                                                    class="img-fluid rounded-2" alt="..."
                                                    src="../../img/media/img-800x800-5.jpg"></a></div>
                                        <div class="px-4 pt-2 pb-4">
                                            <h6 class="font-semibold mb-2">Website Redesign</h6>
                                            <div class="d-flex align-items-center">
                                                <div class="text-xs text-muted"><i class="bi bi-lock me-1"></i>Private
                                                </div>
                                                <div class="text-xs text-muted ms-auto">3 hrs ago</div>
                                            </div><span class="d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card shadow-4-hover">
                                        <div class="p-2"><a href="#" class="d-block"><img
                                                    class="img-fluid rounded-2" alt="..."
                                                    src="../../img/media/img-800x800-6.jpg"></a></div>
                                        <div class="px-4 pt-2 pb-4">
                                            <h6 class="font-semibold mb-2">Website Redesign</h6>
                                            <div class="d-flex align-items-center">
                                                <div class="text-xs text-muted"><i class="bi bi-lock me-1"></i>Private
                                                </div>
                                                <div class="text-xs text-muted ms-auto">3 hrs ago</div>
                                            </div><span class="d-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-4">
                    @include('users._show_right_sidebar')
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
