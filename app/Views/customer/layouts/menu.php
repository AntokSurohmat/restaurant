<div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item <?= $lmenu=='1' ? 'active' : '';?>"><a class="nav-link" href="<?= site_url('customer')?>"><i class="la la-home"></i><span data-i18n="Dashboard">Dashboard</span></a>
        </li>
        <li class="nav-item <?= $lmenu=='2' ? 'active' : '';?>"><a class="nav-link" href="<?= site_url('customer')?>"><i class="la la-cutlery"></i><span data-i18n="Pesanan">Pesanan</span></a>
        </li>
        <li class="nav-item <?= $lmenu=='3' ? 'active' : '';?>"><a rule="button" id="logout-customer" class="nav-link" href="javascript:void(0)"><i class="la la-power-off"></i><span data-i18n="Logout">Logout</span></a>
        </li>
    </ul>
</div>