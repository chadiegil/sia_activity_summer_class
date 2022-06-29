
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">Beluga App</a>
                <div class="container ">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav ">
                            <a class="nav-item nav-link active" href="{{ url('/dashboard') }}">Dashboard</a>
                            <a class="nav-item nav-link" href="{{ url('/post') }}">Post</a>
                            <a class="nav-item nav-link" href="{{ url('/users') }}">Users</a>


                            @if(auth()->guest())
                                <a class="nav-item nav-link" href="{{ url('/login') }}">Login</a>
                            @else
                                <a class="nav-item nav-link" href="{{ url('/logout') }}">Logout</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
      </nav>
