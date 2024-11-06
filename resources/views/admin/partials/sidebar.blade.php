<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{route('articles.index')}}" class="logo">
                <img
                    src="{{asset('assets_backend/img/logo.png')}}"
                    alt="navbar brand"
                    class="navbar-brand"
                    height="50"
                />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ request()->is('articles') ? 'active' : '' }}">
                    <a
                        href="{{route('articles.index')}}"
                        class="collapsed actionMenu"
                        aria-expanded="false"
                    >
                        <i class="fas fa-newspaper"></i>
                        <p>Article</p>
                    </a>
                </li>
                @can('viewAny', App\Models\User::class)
                <li class="nav-item {{ request()->is('users') ? 'active' : '' }}">
                    <a
                        href="{{route('users.index')}}"
                        class="collapsed actionMenu"
                        aria-expanded="false"
                    >
                        <i class="fas fa-newspaper"></i>
                        <p>User</p>
                    </a>
                </li>
                @endcan
            </ul>
        </div>
    </div>
</div>
