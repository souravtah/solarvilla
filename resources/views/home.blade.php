@extends('layouts.app')

@section('content')
<header>
    <div class="container-fluid">
        <div class="border-bottom pt-6">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12">
                    <h1 class="h2 ls-tight">General Information</h1>
                </div>
                <div class="col-sm-6 col-12"></div>
            </div>
            <ul class="nav nav-tabs overflow-x border-0">
                <li class="nav-item"><a href="general.html" class="nav-link active">General</a></li>
                <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
                <li class="nav-item"><a href="billing.html" class="nav-link">Billing</a></li>
                <li class="nav-item"><a href="security.html" class="nav-link">Security</a></li>
                <li class="nav-item"><a href="notifications.html" class="nav-link">Notifications</a></li>
            </ul>
        </div>
    </div>
</header>
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid max-w-screen-md vstack gap-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <a href="#" class="avatar avatar-lg bg-warning rounded-circle text-white">
                            <img alt="..." src="../../img/people/img-profile.jpg">
                        </a>
                        <div class="ms-4">
                            <span class="h4 d-block mb-0">Tahlia Mooney</span> <a href="#"
                                class="text-sm font-semibold text-muted">View Profile</a></div>
                    </div>
                    <div class="ms-auto"><button type="button" class="btn btn-sm btn-neutral">Upload</button></div>
                </div>
            </div>
        </div>
        <div>
            <div class="mb-5">
                <h4>Contact Information</h4>
            </div>
            <form>
                <div class="row g-5">
                    <div class="col-md-6">
                        <div><label class="form-label">First name</label> <input type="text" class="form-control"
                                id="first_name"></div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Last name</label> <input type="text" class="form-control"></div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label" for="email">Email</label> <input type="email"
                                class="form-control"></div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Phone number</label> <input type="tel" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div><label class="form-label">Address</label> <input type="text" class="form-control"></div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">City</label> <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div><label class="form-label">Country</label> <select class="form-select"
                                aria-label="Default select example">
                                <option selected="selected">Country</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select></div>
                    </div>
                    <div class="col-md-2">
                        <div><label class="form-label" for="zip">ZIP</label> <input type="tel" class="form-control"
                                id="zip"></div>
                    </div>
                    <div class="col-12">
                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                name="check-primary-address" id="check-primary-address"> <label class="form-check-label"
                                for="check-primary-address">Make this my default
                                address</label></div>
                    </div>
                    <div class="col-12 text-end"><button type="button"
                            class="btn btn-sm btn-neutral me-2">Cancel</button> <button type="submit"
                            class="btn btn-sm btn-primary">Save</button></div>
                </div>
            </form>
        </div>
        <hr class="my-6">
        <div class="row g-6">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-2">Public profile</h4>
                        <p class="text-sm text-muted mb-6">Making your profile public means that anyone on
                            the network will be able to find you.</p>
                        <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                checked="checked"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-2">Show my email</h4>
                        <p class="text-sm text-muted mb-6">Showing your e-mail adresses means that anyone on
                            the network will be able to find you.</p>
                        <div class="form-check form-switch"><input class="form-check-input" type="checkbox">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-danger mb-2">Deactivate account</h4>
                        <p class="text-sm text-muted mb-4">Permanently remove your account and all of its
                            contents. This action is not reversible – please be certain.</p><button type="button"
                            class="btn btn-sm btn-danger">Delete my account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
