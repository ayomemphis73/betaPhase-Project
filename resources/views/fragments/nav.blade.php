<nav class="navbar navbar-expand navbar-dark bg-primary">
    <div class="navbar-nav w-100">
        <a class="navbar-brand text-color" href="/">Open-House</a>
        <a class="nav-item nav-link" href="/hotels">Browse Acoomodations</a>

        @if (Route::has('login'))
        <div class="ml-auto">
            @auth
            <a class="nav-item nav-link" href="{{ route('logout') }}">Logout</a>

            @else

            <a class="nav-item nav-link" href="{{ route('login') }}"></a>

            @endauth

        </div>
        
        @endif
    </div>
</nav>