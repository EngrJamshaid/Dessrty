<!-- ===================== HEADER ===================== -->

<header class="tb-header">
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container-xl">

            <!-- Logo -->
            <a class="navbar-brand" href="/" aria-label="Tabrezian Home">
                <!-- Apna logo yahan lagao: <img src="images/logo.png" alt="Tabrezian" class="tb-logo"> -->
                <img src="{{asset('images/cakelogo.png')}}"
                    alt="Tabrezian – Best Cakes in Pakistan"
                    class="tb-logo"
                    onerror="this.outerHTML='<span style=\'color:#D4A847;font-size:1.4rem;font-weight:700;padding:16px 0;display:block;\'>🎂 TABREZIAN</span>'">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto gap-1">

                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>

                    <!-- Cakes -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/cakes"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-cake-candles me-1"></i>Cakes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/category/1/cakes"><i class="fa-solid fa-star"></i> Birthday Cakes</a></li>
                            <li><a class="dropdown-item" href="/category/2/cakes"><i class="fa-solid fa-heart"></i> Wedding Cakes</a></li>
                            <li><a class="dropdown-item" href="/category/3/cakes"><i class="fa-solid fa-pen-to-square"></i> Custom Cakes</a></li>
                            <li><a class="dropdown-item" href="/category/4/cakes"><i class="fa-solid fa-cubes"></i> Cupcakes</a></li>
                            <li><a class="dropdown-item" href="/category/5/cakes"><i class="fa-solid fa-circle"></i> Cheesecakes</a></li>
                        </ul>
                    </li>

                    <!-- Accessories -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/accessories"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-box-open me-1"></i>Accessories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/accessories/1"><i class="fa-solid fa-fire"></i> Candles</a></li>
                            <li><a class="dropdown-item" href="/accessories/2"><i class="fa-solid fa-trophy"></i> Cake Toppers</a></li>
                            <li><a class="dropdown-item" href="/accessories/3"><i class="fa-solid fa-gift"></i> Cake Boxes</a></li>
                            <li><a class="dropdown-item" href="/accessories/4"><i class="fa-solid fa-screwdriver-wrench"></i> Baking Tools</a></li>
                        </ul>
                    </li>

                    <!-- My Account -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user me-1"></i>My Account
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('profile')}}"><i class="fa-solid fa-id-card"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="/account/orders"><i class="fa-solid fa-bag-shopping"></i> My Orders</a></li>
                            <li><a class="dropdown-item" href="/account/wishlist"><i class="fa-solid fa-heart"></i> Wishlist</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket"></i>Login </a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}"><i class="fa-solid fa-user-plus"></i> Register</a></li>
                        </ul>
                    </li>

                    <!-- Company -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/company"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-building me-1"></i>Company
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('companyabout') }}"><i class="fa-solid fa-circle-info"></i> About Us</a></li>
                            <li><a class="dropdown-item" href="{{ route('companytraining') }}"><i class="fa-solid fa-envelope"></i> Tranning</a></li>
                            <li><a class="dropdown-item" href="{{route('companyblog')}}"><i class="fa-solid fa-newspaper"></i> Blog</a></li>
                            <li><a class="dropdown-item" href="{{route('companycareer')}}"><i class="fa-solid fa-briefcase"></i> Careers</a></li>
                        </ul>
                    </li>

                </ul>

                <!-- Right Side -->
                <div class="d-flex align-items-center gap-3">

                    <!-- Search Icon -->
                    <button class="tb-search-icon" id="searchBtn" aria-label="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                    <!-- Cart -->
                    <a href="/cart" class="tb-cart" aria-label="Cart">
                        <i class="fa-solid fa-cart-shopping fs-5"></i>
                        <span class="badge rounded-pill">{{ $cartCount }}</span>
                        <span class="tb-cart-price">Rs {{ number_format($cartTotal) }}/-</span>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/923428980967"
                        class="tb-whatsapp"
                        target="_blank" rel="noopener">
                        <i class="fa-brands fa-whatsapp fs-5"></i>
                        <span>WhatsApp</span>
                    </a>

                </div>
            </div>
        </div>
    </nav>

    <!-- Search Slide Bar -->
    <div class="tb-search-bar" id="searchBar">
        <div class="container-xl">
            <form action="/search" method="GET" role="search">
                <div class="tb-search-wrap">
                    <input type="search" name="q"
                        placeholder="Search A Cake Best For Your Special Occasion"
                        aria-label="Search cakes" autocomplete="off">
                    <button type="submit" aria-label="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</header>
<!-- ===================== END HEADER ===================== -->