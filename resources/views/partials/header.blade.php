<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">DC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-link {{Route::currentRouteName() == '' ? 'active text-primary' : ''}}"
                        aria-current="page" href="/">Home</a>
                    <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active text-primary' : '' }}"
                        aria-current="page" href="{{ route('comics.index') }}">Comics</a>
                    <a class="nav-link {{ Route::currentRouteName() == 'comics.create' ? 'active text-primary' : '' }}"
                        href="{{ route('comics.create') }}">Crea</a>
                </div>
            </div>
        </div>
    </nav>
</header>
