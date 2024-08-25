<header class="header">
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo CSI" width="100px">
        </a>
    </div>
    <div>
        <nav>
            <ul class="navbar">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
                <li class="dropdown">
                    <a href="#">Servicios ∇ </a>
                    <div class="dropdown-content">
                        <a href="#seccion1">Audio</a>
                        <a href="#seccion2">Video</a>
                        <a href="#seccion3">Iluminación</a>
                        <a href="#seccion4">Control</a>
                    </div>
                </li>
                <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
            </ul>
        </nav>
    </div>
    <div class="redes">
        <a href="https://www.facebook.com/">
            <img id="face" src="{{ asset('images/facebook.png') }}" alt="Facebook" width="50px">
        </a>
        <a href="https://twitter.com/">
            <img src="{{ asset('images/twitter.png') }}" alt="Twitter" width="50px">
        </a>
    </div>
</header>
