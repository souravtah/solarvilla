<nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg scrollbar" id="sidebar">
    <div class="container-fluid">
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-inline-block py-lg-2 mb-lg-5 px-lg-6 me-0" href="{{ route('home') }}">
            <img src="../../img/logos/clever-primary.svg" alt="..."></a>
        <div class="navbar-user d-lg-none">
            <div class="dropdown">
                <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar-parent-child">
                        <img alt="..." src="../../img/people/img-profile.jpg"
                            class="avatar avatar- rounded-circle">
                            <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Billing</a>
                    <hr class="dropdown-divider">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="bi bi-box-arrow-left me-3"></i>{{ __('Logout') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#sidebar-projects" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebar-projects"><i
                            class="bi bi-briefcase"></i> Projects</a>
                    <div class="collapse" id="sidebar-projects">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="../projects/overview.html" class="nav-link">Overview</a></li>
                            <li class="nav-item"><a href="../projects/grid-view.html" class="nav-link">Grid
                                    View</a></li>
                            <li class="nav-item"><a href="../projects/table-view.html" class="nav-link">Table
                                    View</a></li>
                            <li class="nav-item"><a href="../projects/details.html" class="nav-link">Details</a>
                            </li>
                            <li class="nav-item"><a href="../projects/create-project.html" class="nav-link">Create
                                    Project</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#sidebar-tasks" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebar-tasks"><i class="bi bi-kanban"></i> Tasks</a>
                    <div class="collapse" id="sidebar-tasks">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="../tasks/overview.html" class="nav-link">Overview</a>
                            </li>
                            <li class="nav-item"><a href="../tasks/list-view.html" class="nav-link">List
                                    View</a></li>
                            <li class="nav-item"><a href="../tasks/list-view-aside.html" class="nav-link">List
                                    View w/ Details</a></li>
                            <li class="nav-item"><a href="../tasks/board-view.html" class="nav-link">Board
                                    View</a></li>
                            <li class="nav-item"><a href="../tasks/create-task.html" class="nav-link">Create
                                    Task</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#sidebar-files" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebar-files"><i class="bi bi-file-earmark-text"></i>
                        Files</a>
                    <div class="collapse" id="sidebar-files">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="../files/overview.html" class="nav-link">Overview</a>
                            </li>
                            <li class="nav-item"><a href="../files/table-view.html" class="nav-link">Table
                                    View</a></li>
                            <li class="nav-item"><a href="../files/media-gallery.html" class="nav-link">Media
                                    Gallery</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#sidebar-integrations" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebar-integrations"><i
                            class="bi bi-terminal"></i> Integrations</a>
                    <div class="collapse" id="sidebar-integrations">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="../integrations/applications.html"
                                    class="nav-link">Applications</a></li>
                            <li class="nav-item"><a href="../integrations/manage-apps.html" class="nav-link">Manage
                                    Apps</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#sidebar-user" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebar-user"><i class="bi bi-people"></i> User</a>
                    <div class="collapse" id="sidebar-user">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="../user/profile.html" class="nav-link">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link">Table View</a>
                            </li>
                            <li class="nav-item"><a href="../user/permissions.html" class="nav-link">Permissions</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#sidebar-settings" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebar-settings"><i class="bi bi-gear"></i>
                        Settings</a>
                    <div class="collapse" id="sidebar-settings">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="general.html" class="nav-link">General</a>
                            </li>
                            <li class="nav-item"><a href="security.html" class="nav-link">Security</a></li>
                            <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
                            <li class="nav-item"><a href="billing.html" class="nav-link">Billing</a></li>
                            <li class="nav-item"><a href="notifications.html" class="nav-link">Notifications</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#sidebar-authentication" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebar-authentication"><i
                            class="bi bi-person-bounding-box"></i>
                        Authentication</a>
                    <div class="collapse" id="sidebar-authentication">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="../authentication/basic-login.html" class="nav-link">Basic
                                    Login</a></li>
                            <li class="nav-item"><a href="../authentication/basic-register.html" class="nav-link">Basic
                                    Register</a></li>
                            <li class="nav-item"><a href="../authentication/basic-recover.html" class="nav-link">Basic
                                    Recover</a></li>
                            <li class="nav-item"><a href="../authentication/side-login.html" class="nav-link">Side
                                    Login</a></li>
                            <li class="nav-item"><a href="../authentication/side-register.html" class="nav-link">Side
                                    Register</a></li>
                            <li class="nav-item"><a href="../authentication/side-recover.html" class="nav-link">Side
                                    Recover</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="mt-auto"></div>
            <div class="my-4 px-lg-6 position-relative">
                <div class="dropup w-full"><button
                        class="btn-primary d-flex w-full py-3 ps-3 pe-4 align-items-center shadow shadow-3-hover rounded-3"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="me-3"><img alt="..."
                                src="../../img/people/img-profile.jpg" class="avatar avatar-sm rounded-circle">
                        </span><span class="flex-fill text-start text-sm font-semibold">{{ Auth::user()->name }}
                        </span><span><i class="bi bi-chevron-expand text-white text-opacity-70"></i></span></button>
                    <div class="dropdown-menu dropdown-menu-end w-full">
                        <div class="dropdown-header"><span class="d-block text-sm text-muted mb-1">Signed in
                                as</span> <span class="d-block text-heading font-semibold">{{ Auth::user()->name
                                }}</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('home') }}">
                            <i class="bi bi-house me-3"></i>Home
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-pencil me-3"></i>Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-gear me-3"></i>Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="bi bi-box-arrow-left me-3"></i>{{ __('Logout') }}
                            </a>
                        </form>
                    </div>
                </div>
                <div class="d-flex gap-3 justify-content-center align-items-center mt-6 d-none">
                    <div><i class="bi bi-moon-stars me-2 text-warning me-2"></i> <span
                            class="text-heading text-sm font-bold">Dark mode</span></div>
                    <div class="ms-auto">
                        <div class="form-check form-switch me-n2"><input class="form-check-input" type="checkbox"
                                id="switch-dark-mode"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
