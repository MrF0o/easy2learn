<div class="bg-sidebar-dark p-3 push">
    <div class="d-lg-none">
        <button type="button" class="btn w-100 btn-secondary d-flex justify-content-between align-items-center"
            data-toggle="class-toggle" data-target="#horizontal-navigation-hover-normal-dark" data-class="d-none">
            Easy2Learn
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div id="horizontal-navigation-hover-normal-dark" class="d-none d-lg-block mt-2 mt-lg-0">
        <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-dark justify-content-around">
            <div class="d-none d-lg-flex justify-content-center align-items-center flex-shrink-1 text-lg w-25">
                <li>
                    <a aria-current="page" href="/" class="fw-semibold fs-5 tracking-wider text-white me-3">
                        <span>
                            <img src="{{ asset('media/logo.png') }}" class="w-50" alt="">
                        </span>
                    </a>
                </li>
            </div>
            <div class="nav-main-horizontal text-uppercase">
                <li class="nav-main-item">
                    <div>
                        <a aria-current="page" href=" {{ route('benefits') }} " class="active nav-main-link">

                            <span class="nav-main-link-name">The
                                Benefits</span>
                            <!---->
                        </a>
                    </div>
                    <!---->
                </li>
                <li class="nav-main-item">
                    <div>
                        <a aria-current="page" href=" {{ route('about') }} " class="active nav-main-link">

                            <span class="nav-main-link-name">How
                                does it work?</span>
                            <!---->
                        </a>
                    </div>
                    <!---->
                </li>
                <li class="nav-main-item">
                    <div>
                        <a aria-current="page" href=" {{ route('pricing') }} " class="active nav-main-link">

                            <span class="nav-main-link-name">Pricing</span>
                            <!---->
                        </a>
                    </div>
                    <!---->
                </li>
                @if (!Auth::check())
                    <div class="d-lg-flex justify-lg-content-end align-items-lg-center ps-lg-3">
                        <li class="nav-main-item">
                            <div>
                                <a aria-current="page" href="{{ route('login') }}" class="active nav-main-link pe-lg-1">

                                    <span class="nav-main-link-name">Login</span>
                                    <!---->
                                </a>
                            </div>
                            <!---->
                        </li>
                        <span class="text-white p-1 d-none d-lg-inline">|</span>
                        <li class="nav-main-item">
                            <div>
                                <a aria-current="page" href="{{ route('register') }}"
                                    class="active nav-main-link ps-lg-1">

                                    <span class="nav-main-link-name">register</span>
                                    <!---->
                                </a>
                            </div>
                            <!---->
                        </li>
                    </div>
                @else
                    <div class="dropdown text-white">
                        <button type="button" class="btn btn-dark btn-top-dropdown dropdown-toggle" id=""
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->username }} </button>
                        <div class="dropdown-menu fs-sm" aria-labelledby="dropdown-default-alt-secondary">
                            <a class="dropdown-item" href="{{ route('dashboard') }}">Control Panel</a>
                            @if (Auth::user()->isAdmin)
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('mcp') }}">Master Control Panel</a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <form action=" {{route('auth.logout')}} " method="POST">
                                @csrf

                                <button class="dropdown-item text-danger btn-none" type="submit" href="javascript:void(0)">logout</button>

                            </form>
                        </div>
                    </div>
                @endif
                {{-- <li class="nav-main-item">
                    <div>
                        <a aria-current="page" href="/#" class="active nav-main-link">
                            
                            <span class="nav-main-link-name">Support</span>
                            <!---->
                        </a>
                    </div>
                    <!---->
                </li> --}}
            </div>
        </ul>
    </div>
</div>
