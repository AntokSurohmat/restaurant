<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
            <div class="main-menu-wrap">
                <!-- logo -->
                <div class="site-logo">
                    <a href="index.html">
                        <img src="<?= base_url() ?>/assets/fruitkha/img/logo.png" alt="">
                    </a>
                </div>
                <!-- logo -->

                <!-- menu start -->
                <nav class="main-menu">
                    <ul>
                        <li <?= $lmenu =='1' ? 'class="current-list-item"' : ''; ?>><a href="<?= base_url() ?>">Home</a>
                        </li>
                        <li <?= $lmenu =='2' ? 'class="current-list-item"' : ''; ?>><a href="<?= base_url('about') ?>">About</a></li>
                        <li <?= $lmenu =='3' ? 'class="current-list-item"' : ''; ?>><a href="<?= base_url('shop') ?>">Shop</a></li>
                        <li <?= $lmenu =='4' ? 'class="current-list-item"' : ''; ?>><a href="<?= base_url('contact') ?>">Contact</a></li>
                        <li <?= $lmenu =='5' ? 'class="current-list-item"' : ''; ?>><a href="news.html">Galery</a>
                        <li>
                            <div class="header-icons">
                                <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                <a class="mobile-hide search-bar-icon" href="<?= route_to('login')?>"><i class="fas fa-user"></i></a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <a class="mobile-show search-bar-icon" href="<?= route_to('login')?>"><i class="fas fa-user"></i></a>
                <div class="mobile-menu"></div>
                <!-- menu end -->
            </div>
        </div>
    </div>
</div>