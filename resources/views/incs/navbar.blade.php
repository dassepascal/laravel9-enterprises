<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container border border-darck shadow-lg">
        {{-- <a class="navbar-brand" href="#"> <img src="#" alt="#" width="90"></a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('enterprises') }}">Entreprises</a>
                </li>


                <ul class="navbar-nav ml-auto  ">
                    @if (Auth::user())
                    @if (Auth::user()->role === 'ADMIN')
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('enterprises.index') }}">Espace Admin</a>
                    </li>
                    @endif
                    <li class="nav-item  ">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn">Deconnection</button>
                        </form>
                    </li>
                    @else
                    <li class="nav-item  ">
                        <a class="nav-link " href="{{ route('login')}}">Me connecter</a>
                    </li>
                    @endif

                </ul>


        </div>


    </div>
</nav>
