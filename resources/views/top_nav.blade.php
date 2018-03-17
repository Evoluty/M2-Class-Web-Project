<nav class="navbar top_nav">
    <ul class="nav nav-pills">
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

    <ul class="nav nav-pills pull-right">
        <li class="nav-item"><a class="nav-link text-white" href="#">My account</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Wishlist</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">My cart (<span id="top_nav_cart_number_items">4</span> items)</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Blog</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Log in</a></li>
    </ul>
</nav>
