<!--header start-->

<header class="site-header">
    <div id="header-wrap">
        <div class="container">
            <div class="row">
                <!--menu start-->
                <div class="col">
                    <nav class="navbar navbar-expand-lg p-4 shadow bg-white">
                        <a class="navbar-brand logo" href="/">
                            <img class="img-fluid" src="/images/favicon.ico" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                                </li>
                                @auth
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle {{ $active === 'creation' ? 'active' : '' }}"
                                            href="#" data-bs-toggle="dropdown">Creation</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="/allCreation">All creation</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/myCreation">My creation</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/addCreation">Add creation</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link {{ $active === 'profile' ? 'active' : '' }}" href="/profile/{{ auth()->user()['code'] }}">My Profile</a>
                                    </li>
                                @endauth
                                @guest
                                    <li class="nav-item dropdown">
                                        <a class="nav-link {{ $active === 'creation' ? 'active' : '' }}"
                                            href="/allCreation">Creation</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link {{ $active === 'aboutUs' ? 'active' : '' }}"
                                            href="/aboutUs">About us</a>
                                    </li>
                                @endguest
                            </ul>
                        </div>

                        @guest
                            <div class="d-flex align-items-center">
                                <a class="login-btn btn-link" href="/login">
                                    <i class="bi bi-person me-2 fs-3 align-middle"></i>Login </a>
                            </div>
                        @endguest
                        @auth
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item dropdown">
                                    <a class="login-btn btn-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                        <i class="bi bi-person me-2 fs-3 align-middle"></i>{{ auth()->user()['name'] }} </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <form action="/logout" method="POST">
                                                @csrf
                                                <button class="btn btn-sm btn-outline-primary" type="submit"><i
                                                        class="os-icon os-icon-signs-11"></i><span>
                                                        Logout</span></button>
                                            </form>
                                        </li>
                                        {{-- <li>
                                            <a class="dropdown-item" href="/myCreation">My creation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/addCreation">Add creation</a>
                                        </li> --}}
                                    </ul>
                                </li>
                            </ul>
                        @endauth
                    </nav>
                </div>
                <!--menu end-->
            </div>
        </div>
    </div>
</header>
<!--header end-->
