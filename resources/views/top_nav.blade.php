<nav class="navbar navbar-expand-lg" id="top_nav">
    <button id="top_nav_collapser" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto nav-pills">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ HTML::image('img/us_flag.png', 'us_flag') }}
                    <span>English</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">English</a>
                    <a class="dropdown-item" href="#">French</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">USD</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">USD</a>
                    <a class="dropdown-item" href="#">Euros</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Compare</a>
                <div class="dropdown-menu"></div>
            </li>
        </ul>

        <ul class="navbar-nav mr-auto nav-pills">
            <li class="nav-item"><a class="nav-link text-white" href="#">My Account</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Wishlist</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">My Cart (<span id="top_nav_cart_number_items">4</span> items)</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Blog</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Log in</a></li>
        </ul>
    </div>

    <div class="btn-group dropdown d-block d-sm-none" id="top_nav_cart">
        <div id="logo_number_cart_items">4</div>
        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-shopping-cart"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Empty cart</a>
        </div>
    </div>
</nav>
