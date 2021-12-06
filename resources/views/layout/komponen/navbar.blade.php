<nav class="navbar sticky-top navbar-expand-lg @if ($active === 'home') bg-gd1 @else bg-gd2 @endif navbar-dark py-4">
    <h1 class="navbar-brand ml-3 @if ($active === 'home') active @endif" href="/">
        <span style="color:blue">KIOS</span>
        <span style="color:green">BUNGA</span>
    </h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex justify-content-end">
            <li class="nav-item px-4 @if ($active === 'home') active @endif">
                <a class="nav-link" href="/">Home</a>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  @if ($active === 'shop') active @endif" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Shop
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/shop">Shop</a>
                    <a class="dropdown-item" href="/cart">Cart</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> --}}
            <li class="nav-item px-4 @if ($active === 'shop') active @endif">
                <a class="nav-link" href="/shop">Shop</a>
            </li>

            @auth
                <li class="nav-item px-4 @if ($active === 'cart') active @endif">
                    <a class="nav-link" href="/cart">Cart[]</a>
                </li>
                @if (Auth::user())
                    {{-- <li class="nav-item px-4 @if ($active === 'admin') active @endif">
                        <a class="nav-link" href="/admin">Admin</a>
                    </li> --}}
                @endif
                <li class="nav-item px-4 @if ($active === 'logout') active @endif">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @if ($active === 'user') active @endif" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/user-detail">Detail</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li> --}}
            @else
                <li class="nav-item px-4 @if ($active === 'login') active @endif">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item px-4 @if ($active === 'regis') active @endif">
                    <a class="nav-link" href="/regis">Regis</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @if ($active === 'login') active @endif" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/login">Login</a>
                        <a class="dropdown-item" href="/regis">Regis</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li> --}}
            @endauth

            {{-- <li class="nav-item px-4 @if ($active == 'login') active @endif">
                <a class="nav-link" href="/login">Login</a>
            </li> --}}
        </ul>
    </div>
</nav>
