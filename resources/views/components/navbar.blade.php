    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <div class="navbar-nav">

                @auth

                    <a class="nav-item nav-link" id="home" href="/">home</a>
                    {{-- @include('users.group_form') --}}
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-item nav-link bg-dark text-secondary border-0">logout</button>
                    </form>
                @else
                    @include('users.login')

                    @include('users.register')


                @endauth


            </div>
        </div>
    </nav>
