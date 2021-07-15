<!-- Navbar -->
<nav class="navbar navbar-expand-lg custom-nav py-0">
    <div class="container mx-auto px-0">
        <div class="row w-100">
            <div class="col-lg-3 col-8 pl-lg-auto">
                <a href="" class="navbar-brand logo ml-lg-0 ml-3 mb-1">
                    <!-- <img src="img/Logo/WLogo 1.png" alt="BajuBah.id"> -->
                    <img src="img/Logo/Logo 1.png" alt="BajuBah.id">
                </a>
            </div>
            <div class="col-sm-2 col-3 d-lg-none d-block mr-0 ml-auto pt-3 px-0">
                <button class="navbar-toggler d-block ml-auto mr-0" type="button" data-toggle="collapse" data-target="#expNavbar" aria-controls="expNavbar" aria-expanded="false" aria-label="Toggle Navigation">
                    <div class="toggler-icon"></div>
                    <div class="toggler-icon"></div>
                    <div class="toggler-icon"></div>
                </button>
            </div>

            <!-- NAVBAR LIST -->
            <div class="collapse navbar-collapse col-lg-9 col-12 p-0" id="expNavbar">
                <div class="row w-100">
                    <!-- NAV MENUS -->
                    <div class="col-lg-8 col-12 mb-2">
                        <ul class="navbar-nav px-sm-auto px-3 mr-lg-0 ml-lg-auto mr-auto ml-0 float-lg-right float-none">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownPakaian" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pakaian</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownPakaian">
                                    <a href="" class="dropdown-item">Menu 1</a>
                                    <a href="" class="dropdown-item">Menu 2</a>
                                    <a href="" class="dropdown-item">Menu 3</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownBrand" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brand</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownBrand">
                                    <a href="" class="dropdown-item">Menu 1</a>
                                    <a href="" class="dropdown-item">Menu 2</a>
                                    <a href="" class="dropdown-item">Menu 3</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownAksesoris" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksesoris</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownAksesoris">
                                    <a href="" class="dropdown-item">Menu 1</a>
                                    <a href="" class="dropdown-item">Menu 2</a>
                                    <a href="" class="dropdown-item">Menu 3</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Promo</a>
                            </li>

                            <!-- USER LOGIN MENUS -->
                            <?php if (!isset($_SESSION["login"])) : ?>
                                <!-- USER/ADMIN HASN'T LOGGED -->
                                <li class="nav-item">
                                    <a href="cart-list.php" class="nav-link">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="d-lg-none d-inline ml-1">Keranjang</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownAksesoris" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-user-circle"></i>
                                        <span class="d-lg-none d-inline ml-1">Account</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownAksesoris">
                                        <a href="login.php" class="dropdown-item">
                                            <i class="fas fa-sign-in-alt"></i> Masuk
                                        </a>
                                        <a href="userRegister.php" class="dropdown-item">
                                            <i class="fas fa-user-plus"></i> Daftar
                                        </a>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if (isset($_SESSION["userLogin"])) : ?>
                                <!-- USER HAS LOGGED -->
                                <li class="nav-item">
                                    <a href="cart-list.php" class="nav-link">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="d-lg-none d-inline ml-1">Keranjang</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownAksesoris" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-user-circle"></i>
                                        <span class="d-lg-none d-inline ml-1">Account</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownAksesoris">
                                        <a href="login.php" class="dropdown-item">
                                            <i class="far fa-user-circle"></i> Akun
                                        </a>
                                        <a href="logout.php" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt"></i> Keluar
                                        </a>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if (isset($_SESSION["adminLogin"])) : ?>
                                <!-- ADMIN HAS LOGGED -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownAksesoris" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-box-open"></i>
                                        <span class="d-lg-none d-inline ml-1">Stock</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownAksesoris">
                                        <a href="login.php" class="dropdown-item">
                                            <i class="fas fa-plus"></i> Tambah Item
                                        </a>
                                        <a href="logout.php" class="dropdown-item">
                                            <i class="fas fa-archive"></i> List Stock
                                        </a>
                                        <a href="logout.php" class="dropdown-item">
                                            <i class="far fa-envelope-open"></i> Cek Pesanan
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownAksesoris" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-user-circle"></i>
                                        <span class="d-lg-none d-inline ml-1">Account</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownAksesoris">
                                        <a href="login.php" class="dropdown-item">
                                            <i class="far fa-user-circle"></i> Akun
                                        </a>
                                        <a href="logout.php" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt"></i> Keluar
                                        </a>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <!-- FORM SEARCH -->
                    <div class="col-lg-4 col-12 search-form">
                        <form action="" method="post" class="py-1 px-3 mx-sm-auto mx-3">
                            <div class="row">
                                <div class="col-lg-10 col-sm-11 col-10 pr-0">
                                    <input type="text" name="search-box" id="search-box" placeholder="Search" class="ml-lg-auto mr-lg-0 ml-0 mr-auto d-inline-block search-input">
                                </div>
                                <div class="col-lg-2 col-sm-1 col-2 pl-0">
                                    <button type="submit" name="search-btn" class="search-btn d-block text-dark ml-auto mr-0">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/b5429a7451.js" crossorigin="anonymous"></script>
</nav>