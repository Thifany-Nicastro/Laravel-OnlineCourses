<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                    @can('viewAny', App\Models\Agencia::class)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('agencias.index') }}">Agência</a>
                    </li>
                    @endcan
                    
                    @admin
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administrador
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                            <li><a class="dropdown-item" href="{{ route('admin.users.index') }}">Usuários</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.roles.index') }}">Cargos</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.permissions.index') }}">Permissões</a></li>
                        </ul>
                    </li>
                    @endadmin

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="configDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Configurações
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="configDropdown">
                            <li><a class="dropdown-item" href="{{ route('senha.edit') }}">Senha</a></li>
                        </ul>
                    </li> --}}

                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf

                            <button class="nav-link btn btn-link">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @endguest

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><i class="far fa-heart"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->full_name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Help</a></li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
    
                                <button class="dropdown-item btn btn-link">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>