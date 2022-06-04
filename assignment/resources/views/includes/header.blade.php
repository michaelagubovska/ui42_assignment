<header class="border-bottom">
    <nav id="navbar" class="container sticky-top mt-3 p-0">
        <div class="bg-white">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container p-0">
                    <div class="row">
                        <div class="col-6 d-flex">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                    class="navbar-toggler"
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Zobraz menu">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>

                        <div class="col-6">
                            <section class="d-md-none">
                                <a href="/" class="navbar-brand mb-0">
                                    <img class="d-inline-block align-top" id="logoImage" src="{{asset('images/logo.png')}}" alt="logo">
                                </a>
                            </section>
                        </div>
                    </div>

                    <div class="row collapse navbar-collapse" id="navbarNav">
                        <div class="col-12 order-2 order-md-1">
                            <div class="row">
                                <ul class="navbar-nav">
                                    <li class="col-md-3 d-flex align-items-center d-none d-md-block">
                                        <a href="/" class="navbar-brand mb-0">
                                            <img class="d-inline-block align-top" id="logoImage" src="{{asset('images/logo.png')}}" alt="logo">
                                        </a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center justify-content-center justify-content-md-end col-md-3 p-0 bold-text">
                                        <a href="#" class="text-decoration-none accent-text">Kontakty a čísla oddelenia</a>
                                    </li>
                                    <li class="nav-item col-md-1 d-flex align-items-center justify-content-center justify-content-md-end">
                                        <div class="dropdown text-muted">
                                            <button class="btn dropdown-toggle" type="button" id="langMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                EN
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <button class="dropdown-item text-muted" type="button" id="langSK">SK</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item col-md-3 d-flex align-items-center justify-content-center pb-4 pb-md-0">
                                        <form class="d-flex justify-content-end search-bar" action="search" method="get">
                                            <input type="text" name="search_bar" class="form-control">
                                            <button class="btn" type="submit">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </form>
                                    </li>
                                    <li class="nav-item col-md-2 d-flex align-items-center justify-content-center justify-content-md-end">
                                        <button class="btn button-login" type="submit">Prihlásenie</button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 order-1 order-md-2 p-0 d-flex justify-content-center justify-content-md-start">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav_bar_item" id="navbarONas"
                                       role="button">
                                        O nás
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav_bar_item" id="navbarZoznamMiest"
                                       role="button">
                                        Zoznam miest
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav_bar_item" id="navbarInspekcia"
                                       role="button">
                                        Inšpekcia
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav_bar_item" id="navbarKontakt"
                                       role="button">
                                        Kontakt
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
</header>
