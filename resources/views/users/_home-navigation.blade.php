<header>
    <div class="container-fluid">
        <div class="border-bottom pt-6">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12">
                    <h1 class="h2 ls-tight">Welcome to SolarVilla <i class="bi bi-house-heart"></i></h1>
                </div>
                <div class="col-sm-6 col-12"></div>
            </div>
            <ul class="nav nav-tabs overflow-x border-0">
                @role('Client')
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ (request()->is('home')) ? 'active font-bold' : '' }}"><i class="bi bi-question-diamond"></i> Get Help</a></li>
                <li class="nav-item"><a href="{{ route('users.get_help') }}" class="nav-link {{ (request()->is('users/help/get-help')) ? 'active font-bold' : '' }}"><i class="bi bi-clock-history"></i> Overview</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-cart-plus"></i> Buy</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-receipt"></i> Billing</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-gear"></i> Settings</a></li>
                @endrole
            </ul>
        </div>
    </div>
</header>
