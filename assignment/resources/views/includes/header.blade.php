<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<header class="border-bottom">
    <nav id="navbar" class="container sticky-top mt-3 p-0">
        <div class="bg-white">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container p-0">
                    <div class="row">
                        <div class="order-2 col-6 d-flex justify-content-end">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                    class="navbar-toggler"
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Zobraz menu">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>

                        <div class="order-1 col-6">
                            <section class="d-md-none">
                                <a href="/" class="navbar-brand mb-0">
                                    <img class="d-inline-block align-top" id="logoImage" src="{{asset('images/logo.png')}}" alt="logo">
                                </a>
                            </section>
                        </div>
                    </div>

                    <div class="row collapse navbar-collapse" id="navbarNav">
                        <div class="col-12">
                            <div class="row">
                                <ul class="navbar-nav">
                                    <li class="col-md-3 d-flex align-items-center d-none d-md-block">
                                        <a href="/" class="navbar-brand mb-0">
                                            <img class="d-inline-block align-top" id="logoImage" src="{{asset('images/logo.png')}}" alt="logo">
                                        </a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center justify-content-end col-md-3 p-0 bold-text">
                                        <a href="#" class="text-decoration-none accent-text">Kontakty a čísla oddelenia</a>
                                    </li>
                                    <li class="nav-item col-md-1 d-flex align-items-center justify-content-end">
                                        <div class="dropdown text-muted">
                                            <button class="btn dropdown-toggle" type="button" id="langMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                EN
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <button class="dropdown-item text-muted" type="button" id="langSK">SK</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item col-md-3 d-flex align-items-center">
                                        <form class="d-flex justify-content-end search-bar" action="search" method="get">
                                            <input type="text" name="search_bar" class="form-control">
                                            <button class="btn" type="submit">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </form>
                                    </li>
                                    <li class="nav-item col-md-2 d-flex align-items-center justify-content-end">
                                        <button class="btn button-login" type="submit">Prihlásenie</button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 p-0 d-flex justify-content-center justify-content-md-start">
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

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
