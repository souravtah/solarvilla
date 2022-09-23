@extends('layouts.app')

@section('content')
<header>
    <div class="container-fluid">
        <div class="border-bottom pt-6">
            <div class="row align-items-center">
                <div class="col-sm col-12">
                    <h1 class="h2 ls-tight">Users</h1>
                </div>
                <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                    <div class="hstack gap-2 justify-content-sm-end"><a href="#modalExport"
                            class="btn btn-sm btn-neutral border-base" data-bs-toggle="modal"><span class="pe-2"><i
                                    class="bi bi-people-fill"></i> </span><span>Share</span> </a><a
                            href="#offcanvasCreate" class="btn btn-sm btn-primary" data-bs-toggle="offcanvas"><span
                                class="pe-2"><i class="bi bi-plus-square-dotted"></i> </span><span>Create</span></a>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs overflow-x border-0">
            <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link {{ Route::currentRouteNamed('users.index') ? 'active' : '' }}">View all</a></li>
                @foreach ($all_roles_in_database as $role)
                <li class="nav-item"><a href="{{ route('users.rolewise.index', ['roleName' => $role]) }}" class="nav-link {{ (request()->is('users/'.$role)) ? 'active' : '' }}">{{ $role }}</a></li>
                @endforeach
                <li class="nav-item"><a href="{{ route('users.withoutrole.index') }}" class="nav-link {{ Route::currentRouteNamed('users.withoutrole.index') ? 'active' : '' }}">Without any Role</a></li>
            </ul>
        </div>
    </div>
</header>
<main class="py-6 bg-surface-secondary">
    <div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel">
        <div class="offcanvas-header border-bottom py-4 bg-surface-secondary">
            <h5 class="offcanvas-title" id="offcanvasCreateLabel">Create a new user</h5>
            <button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body vstack gap-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <div><label class="form-label">First name</label> <input type="text" class="form-control"></div>
                </div>
                <div class="col-md-6">
                    <div><label class="form-label">Last name</label> <input type="text" class="form-control"></div>
                </div>
            </div>
            <div>
                <label class="form-label">Bio</label>
                <textarea class="form-control" placeholder="Your email" rows="2"></textarea>
            </div>
            <div>
                <label class="form-label" for="formInputExample">Photo</label>
                <div class="d-flex align-items-center">
                    <a href="#" class="avatar avatar-lg bg-warning rounded-circle text-white">
                    <img alt="..." src="../../img/people/img-6.jpg"></a>
                    <div class="ms-5">
                        <label for="file-upload" class="btn btn-sm btn-neutral">
                        <span>Upload</span>
                        <input type="file" name="file-upload" id="file-upload" class="visually-hidden"></label>
                        <a href="#" class="btn d-inline-flex btn-sm btn-neutral ms-2 text-danger">
                            <span class="pe-2">
                                <i class="bi bi-trash"></i>
                            </span>
                            <span>Remove</span>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label" for="last_name">Email address</label>
                    <input type="email" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="last_name">Phone number</label>
                    <input type="tel" class="form-control">
                </div>
            </div>
            <div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="switchMakeAdmin" id="switchMakeAdmin">
                    <label class="form-check-label ms-2" for="switchMakeAdmin">Make admin</label>
                </div>
            </div>
        </div>
        <div class="modal-footer py-2 bg-surface-secondary">
            <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button>
            <button type="button" class="btn btn-sm btn-primary">Save</button>
        </div>
    </div>
    <div class="modal fade" id="modalExport" tabindex="-1" aria-labelledby="modalExport" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header">
                    <div class="icon icon-shape rounded-3 bg-soft-primary text-primary text-lg me-4"><i
                            class="bi bi-globe"></i></div>
                    <div>
                        <h5 class="mb-1">Share to web</h5><small class="d-block text-xs text-muted">Publish and share
                            link with anyone</small>
                    </div>
                    <div class="ms-auto">
                        <div class="form-check form-switch me-n2"><input class="form-check-input" type="checkbox"
                                id="flexSwitchCheckChecked" checked="checked"> <label class="form-check-label"
                                for="flexSwitchCheckChecked"></label></div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-5">
                        <div>
                            <p class="text-sm">Anyone with this link <span class="font-bold text-heading">can
                                    view</span></p>
                        </div>
                        <div class="ms-auto"><a href="#" class="text-sm font-semibold">Settings</a></div>
                    </div>
                    <div>
                        <div class="input-group input-group-inline"><input type="email" class="form-control"
                                placeholder="username" value="https://webpixels.io/your-amazing-link"> <span
                                class="input-group-text"><i class="bi bi-clipboard"></i></span></div><span
                            class="mt-2 valid-feedback">Looks good!</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="me-auto"><a href="#" class="text-sm font-semibold"><i
                                class="bi bi-clipboard me-2"></i>Copy link</a></div><button type="button"
                        class="btn btn-sm btn-neutral" data-bs-dismiss="modal">Close</button> <button type="button"
                        class="btn btn-sm btn-success">Share file</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="vstack gap-4">
            <div class="d-flex justify-content-between flex-column flex-sm-row gap-3">
                <div class="hstack gap-2">
                    <div class="input-group input-group-sm input-group-inline"><span class="input-group-text pe-2"><i
                                class="bi bi-search"></i> </span><input type="email" class="form-control"
                            placeholder="Search" aria-label="Search"></div>
                    <div><button type="button" class="btn btn-sm px-3 btn-neutral d-flex align-items-center"><i
                                class="bi bi-funnel me-2"></i> <span>Filters</span> <span
                                class="vr opacity-20 mx-3"></span> <span class="text-xs text-primary">2</span></button>
                    </div>
                </div>
                <div class="btn-group"><a href="#" class="btn btn-sm btn-neutral"><i
                            class="bi bi-cloud-download me-2"></i>Download all </a><a href="#"
                        class="btn btn-sm btn-neutral"><i class="bi bi-gear-wide me-2"></i>Settings</a></div>
            </div>
            <div class="card">
                <div class="card-header border-bottom d-flex align-items-center">
                    <h5 class="me-auto">Total {{ $total_users }} user(s)</h5>
                    <div class="dropdown"><a class="text-muted" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>
                        <div class="dropdown-menu"><a href="#!" class="dropdown-item">Action </a><a href="#!"
                                class="dropdown-item">Another action </a><a href="#!" class="dropdown-item">Something
                                else here</a></div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Position</th>
                                <th scope="col">Emails</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>@forelse ($users as $user)
                            <tr>
                                <td>
                                    <img alt="..." src="../../img/people/img-3.jpg" class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading text-primary-hover font-semibold" href="#">{{ $user->name }}</a>
                                </td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">{{ $user->roles[0]->name ?? 'No Role' }}</span>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-square btn-neutral">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr >
                                <th scope="col" rowspan="5">No User</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer border-0 py-5">
                    <span class="text-muted text-sm">
                        {{ $users->links() }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
