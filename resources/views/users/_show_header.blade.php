<header class="bg-surface-secondary">
    {{-- <div class="bg-cover"
        style="height:300px;background-image:url(../../img/covers/img-profile.jpg);background-position:center center">
    </div> --}}
    <div class="container-fluid max-w-screen-xl">
        <div class="row g-0">
            {{-- <div class="col-auto"><a href="#"
                    class="avatar w-40 h-40 border border-body border-4 rounded-circle shadow mt-n16"><img
                        alt="..." src="../../img/people/img-profile.jpg" class="rounded-circle"></a>
            </div> --}}
            <div class="col ps-4 pt-4">
                <h6 class="text-xs text-uppercase text-muted mb-1">{{ $user->getRoleNames()[0] }}</h6>
                <h1 class="h2">{{ $user->name }}</h1>
                {{-- <div class="d-flex gap-2 flex-wrap mt-3 d-none d-sm-block">
                    <a href="#" class="bg-white bg-opacity-50 bg-opacity-100-hover border rounded px-3 py-1 font-semibold text-heading text-xs">UI/UX</a>
                    <a href="#" class="bg-white bg-opacity-50 bg-opacity-100-hover border rounded px-3 py-1 font-semibold text-heading text-xs">Mobile Apps</a>
                    <a href="#" class="bg-white bg-opacity-50 bg-opacity-100-hover border rounded px-3 py-1 font-semibold text-heading text-xs">UI Research</a>
                </div> --}}
            </div>
            <div class="col-12 col-md-auto mt-2 mt-md-0 mb-md-3 hstack gap-2 mt-4 mt-sm-0">
                <a href="#" class="btn btn-sm btn-square btn-neutral">
                    <i class="bi bi-envelope"></i>
                </a>
                <a href="#" class="btn btn-sm btn-square btn-neutral">
                    <i class="bi bi-bell-fill"></i>
                </a>
                <a href="#" class="btn btn-sm btn-primary d-block d-md-inline-block ms-auto ms-md-0">Send SMS</a>
            </div>
        </div>
        <ul class="nav nav-tabs overflow-x ms-1 mt-4">
            <li class="nav-item">
                <a href="{{ route('users.activity', ['user' => $user->id]) }}" class="nav-link {{ (request()->is('users/'.$user->id.'/activities')) ? 'active font-bold' : '' }}">Recent activities</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.show', ['user' => $user->id]) }}" class="nav-link {{ (request()->is('users/'.$user->id)) ? 'active font-bold' : '' }}">Profile</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.setting', ['user' => $user->id]) }}" class="nav-link {{ (request()->is('users/'.$user->id.'/settings')) ? 'active font-bold' : '' }}">Settings</a>
            </li>
        </ul>
    </div>
</header>
