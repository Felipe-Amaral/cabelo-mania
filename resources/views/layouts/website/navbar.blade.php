<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img width="130" src="{{ mix('images/logo.gif') }}" alt="Logo Cabelo Mania">
        </a>

        <button class="navbar-toggler border border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-white main-menu-link" href="{{ url('/') }}"><b>Home</b></a>
                <a class="nav-link text-white main-menu-link" href="{{ url('/cabelo-mania') }}"><b>O Cabelo Mania</b></a>
                <a class="nav-link text-white main-menu-link" href="{{ url('/first-cut') }}"><b>Primeiro Corte</b></a>
                <a class="nav-link text-white main-menu-link" href="{{ url('/services') }}"><b>Serviços</b></a>
                <a class="nav-link text-white main-menu-link" href="{{ url('/blog') }}"><b>Blog</b></a>
                <a class="nav-link text-white main-menu-link" href="{{ url('/contact-us') }}"><b>Contato</b></a>
                <a class="nav-link btn btn-success text-white animate__animated animate__pulse animate__infinite ml-4" href="https://wa.me/5511996183734" target="_blank">
                    <i class="fab fa-whatsapp"></i> AGENDE SEU HORÁRIO!
                </a>
            </div>
        </div>
    </div>
</nav>
