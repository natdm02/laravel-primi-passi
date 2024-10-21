
<header class="bg-dark text-white p-4">

    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="{{ route('home') }}">laravel primi passi</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">contact</a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

</header>
