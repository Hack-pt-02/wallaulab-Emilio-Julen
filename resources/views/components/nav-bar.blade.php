<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Wallaulab</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-md-flex justify-md-content-between w-100 text-center me-auto mb-2 mb-lg-0">
                <div class="d-flex">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{__('Home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('Quienes somos')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('Dónde estamos')}}</a>
                </li>

                <!-- CATEGORIES -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('Categorías')}}</a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li>
                            <a class="dropdown-item" href="{{ route('category.ads', $category) }}">{{__($category->name)}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <!-- auth menu -->

                @guest
                @if (Route::has('login'))
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('login') }}"><span>{{__('Entrar')}}</span></a>
                </li>
                @endif
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><span>{{__('Registrar')}}</span></a>
                </li>
                @endif
                </div>

                <!-- AQUÍ EMPIEZA REVISOR -->

                @else
                <div class="d-flex">
                <li class="nav-item dropdown mx-5">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->is_revisor)
                        <li>
                            <a class="dropdown-item" href="{{ route('revisor.home') }}">
                                Revisor
                                <span class="badge rounded-pill bg-danger">
                                    {{ \App\Models\Ad::ToBeRevisionedCount() }}
                                </span>
                            </a>
                        </li>
                        @endif
                        <li>
                            <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                            <a id="logoutBtn" class="dropdown-item" href="#">{{__('Salir')}}</a>
                        </li>
                    </ul>
                </li>
            </div>
                @endguest

<li class="nav-item">
    <x-locale lang="en" country="gb" />
</li>

<li class="nav-item">
    <x-locale lang="it" country="it" />
</li>

<li class="nav-item">
    <x-locale lang="es" country="es" />
</li>
            </ul>
        </div>
    </div>
</nav>
