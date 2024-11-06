<nav
    class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
>
    <div class="container-fluid">
        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
            <li class="nav-item topbar-user dropdown hidden-caret">
                <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                >
                    <div class="avatar-sm">
                        <img
                            src="{{asset('assets_backend/img/ava.png')}}"
                            alt="..."
                            class="avatar-img rounded-circle"
                        />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">{{auth()->user()->name}}</span>
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg">
                                    <img
                                        src="{{asset('assets_backend/img/ava.png')}}"
                                        alt="image profile"
                                        class="avatar-img rounded"
                                    />
                                </div>

                            </div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>
