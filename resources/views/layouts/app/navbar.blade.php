<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <a class="navbar-brand" href="#">
            <img width="60" src="{{ mix('images/logo.svg') }}" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('dashboard') }}">
                        <i class="fas fa-chart-pie"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item d-none d-lg-block">
                    <span class="nav-link" href="#">|</span>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-columns"></i> Editar Site
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                O Cabelo Mania
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Serviços
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Contato
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item d-none d-lg-block">
                    <span class="nav-link" href="#">|</span>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle
                        @if (
                            request()->is('articles*') ||
                            request()->is('categories*')
                        )
                            active
                        @endif
                    " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-newspaper"></i> Blog
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="ml-3"><i class="fas fa-copy"></i> Artigos</li>
                        <li>
                            <a class="dropdown-item" href="{{ route('articles.create') }}">
                                Criar
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('articles.list') }}">
                                Listar
                            </a>
                        </li>

                        <li><hr class="dropdown-divider"></li>

                        <li class="ml-2"><i class="fas fa-tags"></i> Categorias</li>

                        <li>
                            <a class="dropdown-item" href="{{ route('categories.create') }}">
                                Criar
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('categories.index') }}">
                                Listar
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <span class="d-flex">
                <span class="text-white">
                    <form action="{{ url('logout') }}" method="post">
                        @csrf
                        <button type="submit">
                            <i class="fas fa-sign-out-alt"></i> Sair
                        </button>
                    </form>
                </span>
            </span>
        </div>
    </div>
</nav>
