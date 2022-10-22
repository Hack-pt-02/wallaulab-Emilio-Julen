<nav id="navbar" class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="/icon/wallaulab.png" style="width:100px"></a>
        <a href="{{ route('home') }}" class="d-lg-none fs-1 text-reset text-decoration-none fw-bolder">Wallaulab</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-md-flex justify-content-around w-100 text-center me-auto mb-2 mb-lg-0">
                <div class="d-flex flex-column flex-lg-row">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('home') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('Quienes somos') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('Dónde estamos') }}</a>
                    </li>

                    <!-- CATEGORIES -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">{{ __('Categorías') }}</a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('category.ads', $category) }}">{{ __($category->name) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                </div>
                <!-- auth menu -->
                <div class="d-flex justify-content-center flex-column flex-lg-row">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('login') }}"><span>{{ __('Entrar') }}</span></a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><span>{{ __('Registrar') }}</span></a>
                            </li>
                        @endif
                        <!-- AQUÍ EMPIEZA REVISOR -->
                    @else
                        <div class="d-flex justify-content-center">
                            <li class="nav-item dropdown mx-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="dropdown-item">
                                        <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                        <a id="logoutBtn" class="dropdown-item" href="#">{{ __('Salir') }}</a>
                                    </li>
                                </ul>
                            </li>
                            @if (Auth::user()->is_revisor)
                                <li class="d-flex align-items-center">
                                    <a href="{{ route('revisor.home') }}">
                                        <span class="fs-7 badge rounded-pill bg-danger">
                                            <i class="bi bi-bell"></i>
                                            {{ \App\Models\Ad::ToBeRevisionedCount() }}
                                        </span>
                                    </a>
                                </li>
                            @endif
                        @endguest
                        <div class="d-flex justify-content-center align-items-center flex-lg-row mx-3">
                            <li class="nav-item mx-2">
                                <x-locale lang="en" country="gb" />
                            </li>

                            <li class="nav-item mx-2">
                                <x-locale lang="it" country="it" />
                            </li>

                            <li class="nav-item mx-2">
                                <x-locale lang="es" country="es" />
                            </li>
                        </div>
                        <div>
                            <form action="{{ route('search') }}" method="GET" class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    name="q">
                                <button class="btn btn-outline-success" type="submit"><i
                                        class="bi bi-search"></i></button>
                            </form>
                        </div>
            </ul>
        </div>
    </div>
</nav>
