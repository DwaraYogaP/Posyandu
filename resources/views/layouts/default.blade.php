<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="sb-nav-fixed">
    @include('includes.header')
    
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{ url('') }}">
                            <div class="sb-nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" viewBox="0 0 24 24" fill="white"><path d="M12.74 2.32a1 1 0 0 0-1.48 0l-9 10A1 1 0 0 0 3 14h2v7a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-7h2a1 1 0 0 0 1-1 1 1 0 0 0-.26-.68z"></path></svg>
                            </div>
                            Dashboard
                        </a>
    
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="{{ url('balita') }}">
                            <div class="sb-nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="white"><path d="M21.666 12.277a7.72 7.72 0 0 0 .171-.665c.003-.017.004-.033.008-.05.02-.098.029-.199.045-.298.025-.157.055-.313.07-.471a7.979 7.979 0 0 0-2.303-6.45A7.979 7.979 0 0 0 14 2v8H6.517l-.858-2H2v2h2.341l1.828 4.266A3.504 3.504 0 0 0 4 17.5C4 19.43 5.57 21 7.5 21c1.759 0 3.204-1.309 3.449-3h2.102c.245 1.691 1.69 3 3.449 3 1.93 0 3.5-1.57 3.5-3.5 0-.63-.181-1.213-.473-1.725.042-.041.089-.077.131-.119.36-.361.688-.759.977-1.184.288-.43.536-.886.736-1.359.016-.037.026-.076.041-.113h.001l.015-.042c.088-.22.168-.441.235-.668l.003-.013zM7.5 19c-.827 0-1.5-.673-1.5-1.5S6.673 16 7.5 16s1.5.673 1.5 1.5S8.327 19 7.5 19zm9 0c-.827 0-1.5-.673-1.5-1.5s.673-1.5 1.5-1.5 1.5.673 1.5 1.5-.673 1.5-1.5 1.5z"></path></svg>
                            </div>
                            Balita
                        </a>
                        <a class="nav-link" href="{{ url('lansia') }}">
                            <div class="sb-nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20"viewBox="0 0 24 24" fill="white"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                            </div>
                            Lansia
                        </a>
                        <div class="sb-sidenav-menu-heading">Security</div>
                        <a class="nav-link" href="{{ url('ubahPin') }}">
                            <div class="sb-nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="white"><path d="M20 3H4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-5 5h-2V6h2zm4 0h-2V6h2zm1 5H4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2zm-5 5h-2v-2h2zm4 0h-2v-2h2z"></path></svg>
                            </div>
                            Ubah Pin
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Posyandu Bantulan
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                @yield('content')
                
                <footer>
                    @include('includes.footer')
                </footer>
            </main>
        </div>
    </div>

    @include('includes.javascript')
    @yield('javascript')
</body>
</html>