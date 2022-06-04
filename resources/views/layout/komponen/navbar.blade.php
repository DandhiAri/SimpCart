<nav
    class="navbar sticky-top navbar-expand-lg @if ($active === 'home') bg-gd @else bg-gd2 @endif navbar-dark py-4">
    <a href="/" class="navbar-brand ml-3 @if ($active === 'home') active @endif" href="/">
        <span style="color:blue">KIOS</span>
        <span style="color:green">BUNGA</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex justify-content-end">
            <li class="nav-item px-4 @if ($active === 'shop') active @endif">
                <a class="nav-link" href="/shop">Toko</a>
            </li>

            @auth
                <li class="nav-item px-4 @if ($active === 'cart') active @endif">
                    <a class="nav-link" href="/cart">Keranjang</a>
                </li>
                <li class="nav-item px-4 @if ($active === 'transac') active @endif">
                    <a class="nav-link" href="/transaksi">Transaksi</a>
                </li>
                @if (Auth::user()->isAdmin())
                    <li class="nav-item px-4 @if ($active === 'admin') active @endif">
                        <a class="nav-link" href="/admin">Admin</a>
                    </li>
                @endif
                <li class="nav-item px-4 @if ($active === 'logout') active @endif">
                    <a class="nav-link" href="/logout">LogOut</a>
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
            @endauth
        </ul>
    </div>
</nav>
