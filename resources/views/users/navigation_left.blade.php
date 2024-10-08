<?php
$left_navbar = [
    'SuperAdmin' => [],
    'Admin' => [
        [
            'menu_name' => 'Product management',
            'icon' => 'bi bi-diagram-3-fill',
            'sub_menu' => [
                [
                    'sub_menu_name' => 'Product List',
                    'sub_menu_icon' => 'bi bi-diagram-3',
                    'sub_menu_route' => 'products.product-listing',
                ],
                // [
                //     'sub_menu_name' => 'Label management',
                //     'sub_menu_icon' => 'bi bi-tags',
                //     'sub_menu_route' => 'ticket-labels.index',
                // ],
            ],
        ],
        [
            'menu_name' => 'Product Category',
            'icon' => 'bi bi-diagram-2-fill',
            'sub_menu' => [
                [
                    'sub_menu_name' => 'Category List',
                    'sub_menu_icon' => 'bi bi-diagram-2',
                    'sub_menu_route' => 'product-categories.index',
                ],
                // [
                //     'sub_menu_name' => 'Label management',
                //     'sub_menu_icon' => 'bi bi-tags',
                //     'sub_menu_route' => 'ticket-labels.index',
                // ],
            ],
        ],
        [
            'menu_name' => 'User management',
            'icon' => 'bi bi-person-bounding-box',
            'sub_menu' => [
                [
                    'sub_menu_name' => 'User List',
                    'sub_menu_icon' => 'bi bi-people',
                    'sub_menu_route' => 'users.index',
                ],
                // [
                //     'sub_menu_name' => 'Label management',
                //     'sub_menu_icon' => 'bi bi-tags',
                //     'sub_menu_route' => 'ticket-labels.index',
                // ],
            ],
        ],
        [
            'menu_name' => 'Buy Items',
            'icon' => 'bi bi-bag-check',
            'sub_menu' => [
                [
                    'sub_menu_name' => 'Select products',
                    'sub_menu_icon' => 'bi bi-bag-plus-fill',
                    'sub_menu_route' => 'products.index',
                ],
                [
                    'sub_menu_name' => 'All past orders',
                    'sub_menu_icon' => 'bi bi-clock-history',
                    'sub_menu_route' => 'invoices.index-all',
                ],
            ],
        ],
        [
            'menu_name' => 'Make Quotations',
            'icon' => 'bi bi-file-earmark-text',
            'sub_menu' => [
                [
                    'sub_menu_name' => 'Select products',
                    'sub_menu_icon' => 'bi bi-bag-plus-fill',
                    'sub_menu_route' => 'quotations.index',
                ],
                [
                    'sub_menu_name' => 'All past quotations',
                    'sub_menu_icon' => 'bi bi-file-text',
                    'sub_menu_route' => 'quotations.listing-all',
                ],
            ],
        ],
        [
            'menu_name' => 'Resolve Ticket',
            'icon' => 'bi bi-ticket-perforated',
            'sub_menu' => [
                // [
                //     'sub_menu_name' => 'Answer a ticket',
                //     'sub_menu_icon' => 'bi bi-ticket',
                //     'sub_menu_route' => 'tickets.index',
                // ],
                // [
                //     'sub_menu_name' => 'Modify/close ticket',
                //     'sub_menu_icon' => 'bi bi-ticket-detailed',
                //     'sub_menu_route' => 'users.index',
                // ],
                [
                    'sub_menu_name' => 'View pending ticket(s)',
                    'sub_menu_icon' => 'bi bi-ticket-perforated-fill',
                    'sub_menu_route' => 'tickets.view_all_pending_tickets',
                ],
            ],
        ],
        // [
        //     'menu_name' => 'Raise a Ticket',
        //     'icon' => 'bi bi-ticket',
        //     'sub_menu' => [
        //         [
        //             'sub_menu_name' => 'Create a new ticket',
        //             'sub_menu_icon' => 'bi bi-ticket',
        //             'sub_menu_route' => 'tickets.create',
        //         ],
        //         [
        //             'sub_menu_name' => 'Modify ticket',
        //             'sub_menu_icon' => 'bi bi-ticket-detailed-fill',
        //             'sub_menu_route' => 'users.index',
        //         ],
        //         [
        //             'sub_menu_name' => 'Ticket history',
        //             'sub_menu_icon' => 'bi bi-ticket-fill',
        //             'sub_menu_route' => 'tickets.index',
        //         ],
        //     ],
        // ],
        [
            'menu_name' => 'Settings',
            'icon' => 'bi bi-gear',
            'sub_menu' => [
                [
                    'sub_menu_name' => 'Privacy settings',
                    'sub_menu_icon' => 'bi bi-shield-check',
                    'sub_menu_route' => 'users.index',
                ],
                [
                    'sub_menu_name' => 'Notification settings',
                    'sub_menu_icon' => 'bi bi-bell',
                    'sub_menu_route' => 'users.index',
                ],
                [
                    'sub_menu_name' => 'Website preference',
                    'sub_menu_icon' => 'bi bi-browser-safari',
                    'sub_menu_route' => 'users.index',
                ],
                [
                    'sub_menu_name' => 'Ticket Categories',
                    'sub_menu_icon' => 'bi bi-gear-wide-connected',
                    'sub_menu_route' => 'ticket-categories.index',
                ],
                [
                    'sub_menu_name' => 'Ticket Labels',
                    'sub_menu_icon' => 'bi bi-tags',
                    'sub_menu_route' => 'ticket-labels.index',
                ],
            ],
        ],
    ],
    'BackOffice' => [
        [
            'menu_name' => 'Buy Items',
            'icon' => 'bi bi-bag-check',
            'sub_menu' => [
                [
                    'sub_menu_name' => 'Select products',
                    'sub_menu_icon' => 'bi bi-bag-plus-fill',
                    'sub_menu_route' => 'products.index',
                ],
                [
                    'sub_menu_name' => 'All past orders',
                    'sub_menu_icon' => 'bi bi-clock-history',
                    'sub_menu_route' => 'invoices.index-all',
                ],
            ],
        ],
        [
            'menu_name' => 'Make Quotations',
            'icon' => 'bi bi-file-earmark-text',
            'sub_menu' => [
                [
                    'sub_menu_name' => 'Select products',
                    'sub_menu_icon' => 'bi bi-bag-plus-fill',
                    'sub_menu_route' => 'quotations.index',
                ],
                [
                    'sub_menu_name' => 'All past quotations',
                    'sub_menu_icon' => 'bi bi-file-text',
                    'sub_menu_route' => 'quotations.listing-all',
                ],
            ],
        ],
        [
            'menu_name' => 'Product management',
            'icon' => 'bi bi-diagram-3-fill',
            'sub_menu' => [
                [
                    'sub_menu_name' => 'Product List',
                    'sub_menu_icon' => 'bi bi-diagram-3',
                    'sub_menu_route' => 'products.product-listing',
                ],
                // [
                //     'sub_menu_name' => 'Label management',
                //     'sub_menu_icon' => 'bi bi-tags',
                //     'sub_menu_route' => 'ticket-labels.index',
                // ],
            ],
        ],
        [
            'menu_name' => 'Product Category',
            'icon' => 'bi bi-diagram-2-fill',
            'sub_menu' => [
                [
                    'sub_menu_name' => 'Category List',
                    'sub_menu_icon' => 'bi bi-diagram-2',
                    'sub_menu_route' => 'product-categories.index',
                ],
                // [
                //     'sub_menu_name' => 'Label management',
                //     'sub_menu_icon' => 'bi bi-tags',
                //     'sub_menu_route' => 'ticket-labels.index',
                // ],
            ],
        ],
        // [
        //     'menu_name' => 'History',
        //     'icon' => 'bi bi-clock-history',
        //     'sub_menu' => [
        //         [
        //             'sub_menu_name' => 'My purchases',
        //             'sub_menu_icon' => 'bi bi-clock-history',
        //             'sub_menu_route' => 'invoices.index',
        //         ],
        //         [
        //             'sub_menu_name' => 'My support tickets',
        //             'sub_menu_icon' => 'bi bi-ticket-fill',
        //             'sub_menu_route' => 'tickets.index',
        //         ],
        //     ],
        // ],
        // [
        //     'menu_name' => 'Settings',
        //     'icon' => 'bi bi-gear',
        //     'sub_menu' => [
        //         [
        //             'sub_menu_name' => 'Privacy settings',
        //             'sub_menu_icon' => 'bi bi-shield-check',
        //             'sub_menu_route' => 'users.index',
        //         ],
        //         [
        //             'sub_menu_name' => 'Notification settings',
        //             'sub_menu_icon' => 'bi bi-bell',
        //             'sub_menu_route' => 'users.index',
        //         ],
        //         [
        //             'sub_menu_name' => 'Website preference',
        //             'sub_menu_icon' => 'bi bi-browser-safari',
        //             'sub_menu_route' => 'users.index',
        //         ],
        //     ],
        // ],
    ],
    'TeamLeader' => [],
    'Sales' => [],
    'Technician' => [],
    'Client' => [
        // [
        //     'menu_name' => 'Buy Items',
        //     'icon' => 'bi bi-bag-check',
        //     'sub_menu' => [
        //         [
        //             'sub_menu_name' => 'Select products',
        //             'sub_menu_icon' => 'bi bi-bag-plus-fill',
        //             'sub_menu_route' => 'products.index',
        //         ],
        //         [
        //             'sub_menu_name' => 'All past orders',
        //             'sub_menu_icon' => 'bi bi-clock-history',
        //             'sub_menu_route' => 'invoices.index-all',
        //         ],
        //     ],
        // ],
        // [
        //     'menu_name' => 'Make Quotations',
        //     'icon' => 'bi bi-file-earmark-text',
        //     'sub_menu' => [
        //         [
        //             'sub_menu_name' => 'Select products',
        //             'sub_menu_icon' => 'bi bi-bag-plus-fill',
        //             'sub_menu_route' => 'quotations.index',
        //         ],
        //         [
        //             'sub_menu_name' => 'All past quotations',
        //             'sub_menu_icon' => 'bi bi-file-text',
        //             'sub_menu_route' => 'quotations.listing-all',
        //         ],
        //     ],
        // ],
        // [
        //     'menu_name' => 'Get help',
        //     'icon' => 'bi bi-question-diamond',
        //     'sub_menu' => [
        //         [
        //             'sub_menu_name' => 'Raise a support ticket',
        //             'sub_menu_icon' => 'bi bi-ticket',
        //             'sub_menu_route' => 'tickets.create',
        //         ],
        //         // [
        //         //     'sub_menu_name' => 'Call us',
        //         //     'sub_menu_icon' => 'bi bi-telephone-outbound',
        //         //     'sub_menu_route' => 'users.index',
        //         // ],
        //         // [
        //         //     'sub_menu_name' => 'Request a phone call',
        //         //     'sub_menu_icon' => 'bi bi-telephone-inbound',
        //         //     'sub_menu_route' => 'users.index',
        //         // ],
        //     ],
        // ],
        // // [
        // //     'menu_name' => 'History',
        // //     'icon' => 'bi bi-clock-history',
        // //     'sub_menu' => [
        // //         [
        // //             'sub_menu_name' => 'My purchases',
        // //             'sub_menu_icon' => 'bi bi-clock-history',
        // //             'sub_menu_route' => 'invoices.index',
        // //         ],
        // //         [
        // //             'sub_menu_name' => 'My support tickets',
        // //             'sub_menu_icon' => 'bi bi-ticket-fill',
        // //             'sub_menu_route' => 'tickets.index',
        // //         ],
        // //     ],
        // // ],
        // // [
        // //     'menu_name' => 'Settings',
        // //     'icon' => 'bi bi-gear',
        // //     'sub_menu' => [
        // //         [
        // //             'sub_menu_name' => 'Privacy settings',
        // //             'sub_menu_icon' => 'bi bi-shield-check',
        // //             'sub_menu_route' => 'users.index',
        // //         ],
        // //         [
        // //             'sub_menu_name' => 'Notification settings',
        // //             'sub_menu_icon' => 'bi bi-bell',
        // //             'sub_menu_route' => 'users.index',
        // //         ],
        // //         [
        // //             'sub_menu_name' => 'Website preference',
        // //             'sub_menu_icon' => 'bi bi-browser-safari',
        // //             'sub_menu_route' => 'users.index',
        // //         ],
        // //     ],
        // // ],
    ],
];
?>
<nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg scrollbar"
    id="sidebar">
    <div class="container-fluid">
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse"
            aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-inline-block py-lg-2 mb-lg-5 px-lg-6 me-0" href="{{ route('home') }}">
            <img src="{{ asset('assets\images\solarvilla\logo\solarvilla-logo-light.webp') }}"
                alt="SolarVilla.co.in"></a>
        <div class="navbar-user d-lg-none">
            <div class="dropdown">
                <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="avatar-parent-child">
                        <img alt="SolarVilla.co.in" src="{{ asset('img/people/img-profile.jpg') }}"
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
                <li class="nav-item">
                    <a class="nav-link py-2" href="{{ route('home') }}">
                        <i class="bi bi-house-heart"></i> Dashboard
                    </a>
                </li>
                @foreach ($left_navbar[$myCurrentRole] as $key => $value)
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebar-{{ $key }}" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebar-{{ $key }}">
                            <i class="{{ $value['icon'] }}"></i> {{ $value['menu_name'] }}
                        </a>
                        <div class="collapse" id="sidebar-{{ $key }}">
                            <ul class="nav nav-sm flex-column">
                                @foreach ($value['sub_menu'] as $sub_key => $sub_value)
                                    <li class="nav-item">
                                        <a href="{{ route($sub_value['sub_menu_route']) }}" class="nav-link"><i
                                                class="{{ $sub_value['sub_menu_icon'] }}"></i>
                                            {{ $sub_value['sub_menu_name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="mt-auto"></div>
            <div class="my-4 px-lg-6 position-relative">
                <div class="dropup w-full">
                    <button
                        class="btn-primary d-flex w-full py-3 ps-3 pe-4 align-items-center shadow shadow-3-hover rounded-3"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-3">
                            <img alt="SolarVilla.co.in" src="{{ asset('img/people/img-profile.png') }}"
                                class="avatar avatar-sm rounded-circle">
                        </span>
                        <span class="flex-fill text-start text-sm font-semibold">{{ Auth::user()->name }}</span>
                        <span><i class="bi bi-chevron-expand text-white text-opacity-70"></i></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end w-full">
                        <div class="dropdown-header">
                            <span class="d-block text-sm text-muted mb-1">Signed in as</span>
                            <span class="d-block text-heading font-semibold">{{ $myCurrentRole }}
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
