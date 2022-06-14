<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard sales - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="<?= base_url() ?>/assets/modern/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/modern/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/fonts/material-icons/material-icons.css">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/material-vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/material.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/material-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/material-colors.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/core/menu/menu-types/material-horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/core/colors/material-palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu material-horizontal-layout material-horizontal-nav material-layout 2-columns  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?= $this->include('home/layouts/header') ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <!-- <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="material-icons">settings_input_svideo</i><span>Dashboard</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="dashboard-ecommerce.html" data-toggle=""><i class="material-icons">add_shopping_cart</i><span data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="dashboard-crypto.html" data-toggle=""><i class="material-icons">filter_1</i><span data-i18n="Crypto">Crypto</span></a>
                        </li>
                        <li class="active" data-menu=""><a class="dropdown-item" href="dashboard-sales.html" data-toggle=""><i class="material-icons">local_atm</i><span data-i18n="Sales">Sales</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="material-icons">tv</i><span>Templates</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">swap_vert</i><span data-i18n="Vertical">Vertical</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="../material-vertical-menu-template" data-toggle=""><span data-i18n="Classic Menu">Classic Menu</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../material-vertical-modern-menu-template" data-toggle=""><span data-i18n="Modern Menu">Modern Menu</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../material-vertical-collapsed-menu-template" data-toggle=""><span data-i18n="Collapsed Menu">Collapsed Menu</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../material-vertical-compact-menu-template" data-toggle=""><span data-i18n="Compact Menu">Compact Menu</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../material-vertical-content-menu-template" data-toggle=""><span data-i18n="Content Menu">Content Menu</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../material-vertical-overlay-menu-template" data-toggle=""><span data-i18n="Overlay Menu">Overlay Menu</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">swap_horiz</i><span data-i18n="Horizontal">Horizontal</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="../material-horizontal-menu-template" data-toggle=""><span data-i18n="Classic">Classic</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../material-horizontal-menu-template-nav" data-toggle=""><span data-i18n="Full Width">Full Width</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="material-icons">apps</i><span>Apps</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="app-todo.html" data-toggle=""><i class="material-icons">playlist_add_check</i><span data-i18n="ToDo">ToDo</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="app-contacts.html" data-toggle=""><i class="material-icons">people_outline</i><span data-i18n="Contacts">Contacts</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="app-email.html" data-toggle=""><i class="material-icons">mail_outline</i><span data-i18n="Email">Email</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="app-chat.html" data-toggle=""><i class="material-icons">chat_bubble_outline</i><span data-i18n="Chat">Chat</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="app-kanban.html" data-toggle=""><i class="material-icons">playlist_add_check</i><span data-i18n="Kanban">Kanban</span></a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">playlist_add</i><span data-i18n="Project">Project</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="project-summary.html" data-toggle=""><span data-i18n="Project Summary">Project Summary</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="project-tasks.html" data-toggle=""><span data-i18n="Project Task">Project Task</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="project-bugs.html" data-toggle=""><span data-i18n="Project Bugs">Project Bugs</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">event_note</i><span data-i18n="Calendars">Calendars</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Full Calendar">Full Calendar</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="full-calender-basic.html" data-toggle=""><span data-i18n="Basic">Basic</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="full-calender-events.html" data-toggle=""><span data-i18n="Events">Events</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="full-calender-advance.html" data-toggle=""><span data-i18n="Advance">Advance</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="full-calender-extra.html" data-toggle=""><span data-i18n="Extra">Extra</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="calendars-clndr.html" data-toggle=""><span data-i18n="CLNDR">CLNDR</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="material-icons">filter_2</i><span>Pages</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="news-feed.html" data-toggle=""><i class="material-icons">library_books</i><span data-i18n="News Feed">News Feed</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="social-feed.html" data-toggle=""><i class="material-icons">stay_current_portrait</i><span data-i18n="Social Feed">Social Feed</span></a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">content_paste</i><span data-i18n="Invoice">Invoice</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="invoice-summary.html" data-toggle=""><span data-i18n="Invoice Summary">Invoice Summary</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="invoice-template.html" data-toggle=""><span data-i18n="Invoice Template">Invoice Template</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="invoice-list.html" data-toggle=""><span data-i18n="Invoice List">Invoice List</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">timeline</i><span data-i18n="Timelines">Timelines</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="timeline-center.html" data-toggle=""><span data-i18n="Timelines Center">Timelines Center</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="timeline-left.html" data-toggle=""><span data-i18n="Timelines Left">Timelines Left</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="timeline-right.html" data-toggle=""><span data-i18n="Timelines Right">Timelines Right</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="timeline-horizontal.html" data-toggle=""><span data-i18n="Timelines Horizontal">Timelines Horizontal</span></a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="account-setting.html" data-toggle=""><i class="material-icons">account_circle</i><span data-i18n="Account Setting">Account Setting</span></a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">person_outline</i><span data-i18n="Users">Users</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="page-users-list.html" data-toggle=""><span data-i18n="Users List">Users List</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="page-users-view.html" data-toggle=""><span data-i18n="Users View">Users View</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="page-users-edit.html" data-toggle=""><span data-i18n="Users Edit">Users Edit</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="user-profile.html" data-toggle=""><span data-i18n="Users Profile">Users Profile</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="user-cards.html" data-toggle=""><span data-i18n="Users Cards">Users Cards</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="users-contacts.html" data-toggle=""><span data-i18n="Users List">Users List</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">wallpaper</i><span data-i18n="Gallery">Gallery</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="gallery-grid.html" data-toggle=""><span data-i18n="Gallery Grid">Gallery Grid</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="gallery-grid-with-desc.html" data-toggle=""><span data-i18n="Gallery Grid with Desc">Gallery Grid with Desc</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="gallery-masonry.html" data-toggle=""><span data-i18n="Masonry Gallery">Masonry Gallery</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="gallery-masonry-with-desc.html" data-toggle=""><span data-i18n="Masonry Gallery with Desc">Masonry Gallery with Desc</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="gallery-hover-effects.html" data-toggle=""><span data-i18n="Hover Effects">Hover Effects</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">search</i><span data-i18n="Search">Search</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="search-page.html" data-toggle=""><span data-i18n="Search Page">Search Page</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="search-website.html" data-toggle=""><span data-i18n="Search Website">Search Website</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="search-images.html" data-toggle=""><span data-i18n="Search Images">Search Images</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="search-videos.html" data-toggle=""><span data-i18n="Search Videos">Search Videos</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">lock_outline</i><span data-i18n="Authentication">Authentication</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="login-simple.html" data-toggle="" target="_blank"><span data-i18n="Login Simple">Login Simple</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="login-with-bg.html" data-toggle="" target="_blank"><span data-i18n="Login with Bg">Login with Bg</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="login-with-bg-image.html" data-toggle="" target="_blank"><span data-i18n="Login with Bg Image">Login with Bg Image</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="login-with-navbar.html" data-toggle="" target="_blank"><span data-i18n="Login with Navbar">Login with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="login-advanced.html" data-toggle="" target="_blank"><span data-i18n="Login Advanced">Login Advanced</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="register-simple.html" data-toggle="" target="_blank"><span data-i18n="Register Simple">Register Simple</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="register-with-bg.html" data-toggle="" target="_blank"><span data-i18n="Register with Bg">Register with Bg</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="register-with-bg-image.html" data-toggle="" target="_blank"><span data-i18n="Register with Bg Image">Register with Bg Image</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="register-with-navbar.html" data-toggle="" target="_blank"><span data-i18n="Register with Navbar">Register with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="register-advanced.html" data-toggle="" target="_blank"><span data-i18n="Register Advanced">Register Advanced</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="unlock-user.html" data-toggle="" target="_blank"><span data-i18n="Unlock User">Unlock User</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="recover-password.html" data-toggle="" target="_blank"><span data-i18n="recover-password">recover-password</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">error_outline</i><span data-i18n="Error">Error</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="error-400.html" data-toggle=""><span data-i18n="Error 400">Error 400</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-400-with-navbar.html" data-toggle=""><span data-i18n="Error 400 with Navbar">Error 400 with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-401.html" data-toggle=""><span data-i18n="Error 401">Error 401</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-401-with-navbar.html" data-toggle=""><span data-i18n="Error 401 with Navbar">Error 401 with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-403.html" data-toggle=""><span data-i18n="Error 403">Error 403</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-403-with-navbar.html" data-toggle=""><span data-i18n="Error 403 with Navbar">Error 403 with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-404.html" data-toggle=""><span data-i18n="Error 404">Error 404</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-404-with-navbar.html" data-toggle=""><span data-i18n="Error 404 with Navbar">Error 404 with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-500.html" data-toggle=""><span data-i18n="Error 500">Error 500</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-500-with-navbar.html" data-toggle=""><span data-i18n="Error 500 with Navbar">Error 500 with Navbar</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">filter_2</i><span data-i18n="Others">Others</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Coming Soon">Coming Soon</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="coming-soon-flat.html" data-toggle=""><span data-i18n="Flat">Flat</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="coming-soon-bg-image.html" data-toggle=""><span data-i18n="Bg image">Bg image</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="coming-soon-bg-video.html" data-toggle=""><span data-i18n="Bg video">Bg video</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="under-maintenance.html" data-toggle=""><span data-i18n="Maintenance">Maintenance</span></a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="pricing.html" data-toggle=""><i class="material-icons">attach_money</i><span data-i18n="Pricing">Pricing</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="checkout-form.html" data-toggle=""><i class="material-icons">credit_card</i><span data-i18n="Checkout">Checkout</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="faq.html" data-toggle=""><i class="material-icons">help_outline</i><span data-i18n="FAQ">FAQ</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="knowledge-base.html" data-toggle=""><i class="material-icons">info_outline</i><span data-i18n="Knowledge Base">Knowledge Base</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="material-icons">layers</i><span>Layouts</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">grid_on</i><span data-i18n="Page layouts">Page layouts</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Content Det. Sidebar">Content Det. Sidebar</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sidebar.html" data-toggle=""><span data-i18n="Detached left sidebar">Detached left sidebar</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sticky-sidebar.html" data-toggle=""><span data-i18n="Detached sticky left sidebar">Detached sticky left sidebar</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sidebar.html" data-toggle=""><span data-i18n="Detached right sidebar">Detached right sidebar</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sticky-sidebar.html" data-toggle=""><span data-i18n="Detached sticky right sidebar">Detached sticky right sidebar</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li data-menu=""><a class="dropdown-item" href="layout-fixed-navigation.html" data-toggle=""><span data-i18n="Fixed navigation">Fixed navigation</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="layout-fixed.html" data-toggle=""><span data-i18n="Fixed layout">Fixed layout</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="layout-boxed.html" data-toggle=""><span data-i18n="Boxed layout">Boxed layout</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="layout-static.html" data-toggle=""><span data-i18n="Static layout">Static layout</span></a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li data-menu=""><a class="dropdown-item" href="layout-light.html" data-toggle=""><span data-i18n="Light layout">Light layout</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="layout-dark.html" data-toggle=""><span data-i18n="Dark layout">Dark layout</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">menu</i><span data-i18n="Navbars">Navbars</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="navbar-light.html" data-toggle=""><span data-i18n="Navbar Light">Navbar Light</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="navbar-dark.html" data-toggle=""><span data-i18n="Navbar Dark">Navbar Dark</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="navbar-semi-dark.html" data-toggle=""><span data-i18n="Navbar Semi Dark">Navbar Semi Dark</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="navbar-brand-center.html" data-toggle=""><span data-i18n="Brand Center">Brand Center</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="navbar-components.html" data-toggle=""><span data-i18n="Navbar Components">Navbar Components</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="navbar-styling.html" data-toggle=""><span data-i18n="Navbar Styling">Navbar Styling</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">arrow_downward</i><span data-i18n="Vertical Nav">Vertical Nav</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Navigation Types">Navigation Types</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="../material-vertical-menu-template" data-toggle=""><span data-i18n="Vertical Menu">Vertical Menu</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../material-vertical-overlay-menu-template" data-toggle=""><span data-i18n="Vertical Overlay">Vertical Overlay</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../material-vertical-compact-menu-template" data-toggle=""><span data-i18n="Vertical Compact">Vertical Compact</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../material-vertical-content-menu-template" data-toggle=""><span data-i18n="Vertical Content">Vertical Content</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">arrow_forward</i><span data-i18n="Horizontal Nav">Horizontal Nav</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Navigation Types">Navigation Types</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="../material-horizontal-menu-template" data-toggle=""><span data-i18n="Left Icon Navigation">Left Icon Navigation</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../material-horizontal-menu-template-nav" data-toggle=""><span data-i18n="Full Width Navigation">Full Width Navigation</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">local_parking</i><span data-i18n="Page Headers">Page Headers</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-basic.html" data-toggle=""><span data-i18n="Breadcrumbs basic">Breadcrumbs basic</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-top.html" data-toggle=""><span data-i18n="Breadcrumbs top">Breadcrumbs top</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-bottom.html" data-toggle=""><span data-i18n="Breadcrumbs bottom">Breadcrumbs bottom</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-top-with-description.html" data-toggle=""><span data-i18n="Breadcrumbs top with desc">Breadcrumbs top with desc</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-button.html" data-toggle=""><span data-i18n="Breadcrumbs with button">Breadcrumbs with button</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-round-button.html" data-toggle=""><span data-i18n="Breadcrumbs with button 2">Breadcrumbs with button 2</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-button-group.html" data-toggle=""><span data-i18n="Breadcrumbs with buttons">Breadcrumbs with buttons</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-description.html" data-toggle=""><span data-i18n="Breadcrumbs with desc">Breadcrumbs with desc</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-search.html" data-toggle=""><span data-i18n="Breadcrumbs with search">Breadcrumbs with search</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-stats.html" data-toggle=""><span data-i18n="Breadcrumbs with stats">Breadcrumbs with stats</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">copyright</i><span data-i18n="Footers">Footers</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="footer-light.html" data-toggle=""><span data-i18n="Footer Light">Footer Light</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="footer-dark.html" data-toggle=""><span data-i18n="Footer Dark">Footer Dark</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="footer-transparent.html" data-toggle=""><span data-i18n="Footer Transparent">Footer Transparent</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="footer-fixed.html" data-toggle=""><span data-i18n="Footer Fixed">Footer Fixed</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="footer-components.html" data-toggle=""><span data-i18n="Footer Components">Footer Components</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="material-icons">web</i><span>UI</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">crop_landscape</i><span data-i18n="Cards">Cards</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="card-bootstrap.html" data-toggle=""><span data-i18n="Bootstrap">Bootstrap</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-headings.html" data-toggle=""><span data-i18n="Headings">Headings</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-options.html" data-toggle=""><span data-i18n="Options">Options</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-actions.html" data-toggle=""><span data-i18n="Action">Action</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-draggable.html" data-toggle=""><span data-i18n="Draggable">Draggable</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">star_border</i><span data-i18n="Advance Cards">Advance Cards</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="card-statistics.html" data-toggle=""><span data-i18n="Statistics">Statistics</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-weather.html" data-toggle=""><span data-i18n="Weather">Weather</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-charts.html" data-toggle=""><span data-i18n="Charts">Charts</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-interactive.html" data-toggle=""><span data-i18n="Interactive">Interactive</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-maps.html" data-toggle=""><span data-i18n="Maps">Maps</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-social.html" data-toggle=""><span data-i18n="Social">Social</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-ecommerce.html" data-toggle=""><span data-i18n="E-Commerce">E-Commerce</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">details</i><span data-i18n="Content">Content</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="content-grid.html" data-toggle=""><span data-i18n="Grid">Grid</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="content-typography.html" data-toggle=""><span data-i18n="Typography">Typography</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="content-text-utilities.html" data-toggle=""><span data-i18n="Text utilities">Text utilities</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="content-syntax-highlighter.html" data-toggle=""><span data-i18n="Syntax highlighter">Syntax highlighter</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="content-helper-classes.html" data-toggle=""><span data-i18n="Helper classes">Helper classes</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">dvr</i><span data-i18n="Components">Components</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="component-alerts.html" data-toggle=""><span data-i18n="Alerts">Alerts</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-callout.html" data-toggle=""><span data-i18n="Callout">Callout</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-buttons-basic.html" data-toggle=""><span data-i18n="Buttons">Buttons</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-carousel.html" data-toggle=""><span data-i18n="Carousel">Carousel</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-collapse.html" data-toggle=""><span data-i18n="Collapse">Collapse</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-dropdowns.html" data-toggle=""><span data-i18n="Dropdowns">Dropdowns</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-list-group.html" data-toggle=""><span data-i18n="List Group">List Group</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-modals.html" data-toggle=""><span data-i18n="Modals">Modals</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-pagination.html" data-toggle=""><span data-i18n="Pagination">Pagination</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-navs-component.html" data-toggle=""><span data-i18n="Navs Component">Navs Component</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-tabs-component.html" data-toggle=""><span data-i18n="Tabs Component">Tabs Component</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-pills-component.html" data-toggle=""><span data-i18n="Pills Component">Pills Component</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-tooltips.html" data-toggle=""><span data-i18n="Tooltips">Tooltips</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-popovers.html" data-toggle=""><span data-i18n="Popovers">Popovers</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-badges.html" data-toggle=""><span data-i18n="Badges">Badges</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-pill-badges.html" data-toggle=""><span data-i18n="Pill Badges">Pill Badges</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-progress.html" data-toggle=""><span data-i18n="Progress">Progress</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-media-objects.html" data-toggle=""><span data-i18n="Media Objects">Media Objects</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-scrollable.html" data-toggle=""><span data-i18n="Scrollable">Scrollable</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-spinners.html" data-toggle=""><span data-i18n="Spinners">Spinners</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">track_changes</i><span data-i18n="Extra Components">Extra Components</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="ex-component-sweet-alerts.html" data-toggle=""><span data-i18n="Sweet Alerts">Sweet Alerts</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-tree-views.html" data-toggle=""><span data-i18n="Tree Views">Tree Views</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-toastr.html" data-toggle=""><span data-i18n="Toastr">Toastr</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-ratings.html" data-toggle=""><span data-i18n="Ratings">Ratings</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-noui-slider.html" data-toggle=""><span data-i18n="NoUI Slider">NoUI Slider</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-date-time-dropper.html" data-toggle=""><span data-i18n="Date Time Dropper">Date Time Dropper</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-lists.html" data-toggle=""><span data-i18n="Lists">Lists</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-toolbar.html" data-toggle=""><span data-i18n="Toolbar">Toolbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-knob.html" data-toggle=""><span data-i18n="Knob">Knob</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-long-press.html" data-toggle=""><span data-i18n="Long Press">Long Press</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-offline.html" data-toggle=""><span data-i18n="Offline">Offline</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-zoom.html" data-toggle=""><span data-i18n="Zoom">Zoom</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-media-player.html" data-toggle=""><span data-i18n="media Player">media Player</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-tour.html" data-toggle=""><span data-i18n="Tour">Tour</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-swiper.html" data-toggle=""><span data-i18n="Swiper">Swiper</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-avatar.html" data-toggle=""><span data-i18n="Avatar">Avatar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="miscellaneous.html" data-toggle=""><span data-i18n="Miscellaneous">Miscellaneous</span></a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="animation.html" data-toggle=""><i class="material-icons">hdr_weak</i><span data-i18n="Animation">Animation</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="material-icons">toc</i><span>Forms</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">format_list_bulleted</i><span data-i18n="Form Elements">Form Elements</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="form-inputs.html" data-toggle=""><span data-i18n="Form Inputs">Form Inputs</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-input-groups.html" data-toggle=""><span data-i18n="Input Groups">Input Groups</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-input-grid.html" data-toggle=""><span data-i18n="Input Grid">Input Grid</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-extended-inputs.html" data-toggle=""><span data-i18n="Extended Inputs">Extended Inputs</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-checkboxes-radios.html" data-toggle=""><span data-i18n="Checkboxes &amp; Radios">Checkboxes &amp; Radios</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-switch.html" data-toggle=""><span data-i18n="Switch">Switch</span></a>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Select">Select</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="form-select2.html" data-toggle=""><span data-i18n="Select2">Select2</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="form-selectize.html" data-toggle=""><span data-i18n="Selectize">Selectize</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="form-selectivity.html" data-toggle=""><span data-i18n="Selectivity">Selectivity</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="form-select-box-it.html" data-toggle=""><span data-i18n="Select Box It">Select Box It</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-dual-listbox.html" data-toggle=""><span data-i18n="Dual Listbox">Dual Listbox</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-tags-input.html" data-toggle=""><span data-i18n="Tags Input">Tags Input</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-validation.html" data-toggle=""><span data-i18n="Validation">Validation</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">grid_on</i><span data-i18n="Form Layouts">Form Layouts</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="form-layout-basic.html" data-toggle=""><span data-i18n="Basic Forms">Basic Forms</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-horizontal.html" data-toggle=""><span data-i18n="Horizontal Forms">Horizontal Forms</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-hidden-labels.html" data-toggle=""><span data-i18n="Hidden Labels">Hidden Labels</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-form-actions.html" data-toggle=""><span data-i18n="Form Actions">Form Actions</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-row-separator.html" data-toggle=""><span data-i18n="Row Separator">Row Separator</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-bordered.html" data-toggle=""><span data-i18n="Bordered">Bordered</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-striped-rows.html" data-toggle=""><span data-i18n="Striped Rows">Striped Rows</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-striped-labels.html" data-toggle=""><span data-i18n="Striped Labels">Striped Labels</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">linear_scale</i><span data-i18n="Form Wizard">Form Wizard</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="form-wizard-circle-style.html" data-toggle=""><span data-i18n="Circle Style">Circle Style</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-wizard-notification-style.html" data-toggle=""><span data-i18n="Notification Style">Notification Style</span></a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="form-repeater.html" data-toggle=""><i class="material-icons">repeat</i><span data-i18n="Form Repeater">Form Repeater</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="material-icons">toc</i><span>Others</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">folder_open</i><span data-i18n="General">General</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">brush</i><span data-i18n="Color Palette">Color Palette</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-primary.html" data-toggle=""><span data-i18n="Primary palette">Primary palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-danger.html" data-toggle=""><span data-i18n="Danger palette">Danger palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-success.html" data-toggle=""><span data-i18n="Success palette">Success palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-warning.html" data-toggle=""><span data-i18n="Warning palette">Warning palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-info.html" data-toggle=""><span data-i18n="Info palette">Info palette</span></a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-red.html" data-toggle=""><span data-i18n="Red palette">Red palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-pink.html" data-toggle=""><span data-i18n="Pink palette">Pink palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-purple.html" data-toggle=""><span data-i18n="Purple palette">Purple palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-blue.html" data-toggle=""><span data-i18n="Blue palette">Blue palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-cyan.html" data-toggle=""><span data-i18n="Cyan palette">Cyan palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-teal.html" data-toggle=""><span data-i18n="Teal palette">Teal palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-yellow.html" data-toggle=""><span data-i18n="Yellow palette">Yellow palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-amber.html" data-toggle=""><span data-i18n="Amber palette">Amber palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-blue-grey.html" data-toggle=""><span data-i18n="Blue Grey palette">Blue Grey palette</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">code</i><span data-i18n="Starter kit">Starter kit</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="<?= base_url() ?>/assets/modern/starter-kit/ltr/material-horizontal-menu-template-nav/horizontal-layout-1-column.html" data-toggle=""><span data-i18n="1 column">1 column</span></a>
                                        </li>
                                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Content Det. Sidebar">Content Det. Sidebar</span></a>
                                            <ul class="dropdown-menu">
                                                <li data-menu=""><a class="dropdown-item" href="<?= base_url() ?>/assets/modern/starter-kit/ltr/material-horizontal-menu-template-nav/layout-content-detached-left-sidebar.html" data-toggle=""><span data-i18n="Detached left sidebar">Detached left sidebar</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="<?= base_url() ?>/assets/modern/starter-kit/ltr/material-horizontal-menu-template-nav/layout-content-detached-left-sticky-sidebar.html" data-toggle=""><span data-i18n="Detached sticky left sidebar">Detached sticky left sidebar</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="<?= base_url() ?>/assets/modern/starter-kit/ltr/material-horizontal-menu-template-nav/layout-content-detached-right-sidebar.html" data-toggle=""><span data-i18n="Detached right sidebar">Detached right sidebar</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="<?= base_url() ?>/assets/modern/starter-kit/ltr/material-horizontal-menu-template-nav/layout-content-detached-right-sticky-sidebar.html" data-toggle=""><span data-i18n="Detached sticky right sidebar">Detached sticky right sidebar</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li data-menu=""><a class="dropdown-item" href="<?= base_url() ?>/assets/modern/starter-kit/ltr/material-horizontal-menu-template-nav/layout-fixed-navigation.html" data-toggle=""><span data-i18n="Fixed navigation">Fixed navigation</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="<?= base_url() ?>/assets/modern/starter-kit/ltr/material-horizontal-menu-template-nav/layout-fixed.html" data-toggle=""><span data-i18n="Fixed layout">Fixed layout</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="<?= base_url() ?>/assets/modern/starter-kit/ltr/material-horizontal-menu-template-nav/layout-boxed.html" data-toggle=""><span data-i18n="Boxed layout">Boxed layout</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="<?= base_url() ?>/assets/modern/starter-kit/ltr/material-horizontal-menu-template-nav/layout-static.html" data-toggle=""><span data-i18n="Static layout">Static layout</span></a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li data-menu=""><a class="dropdown-item" href="<?= base_url() ?>/assets/modern/starter-kit/ltr/material-horizontal-menu-template-nav/layout-light.html" data-toggle=""><span data-i18n="Light layout">Light layout</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="<?= base_url() ?>/assets/modern/starter-kit/ltr/material-horizontal-menu-template-nav/layout-dark.html" data-toggle=""><span data-i18n="Dark layout">Dark layout</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="disabled" data-menu=""><a class="dropdown-item" href="#" data-toggle=""><i class="material-icons">visibility_off</i><span data-i18n="Disabled Menu">Disabled Menu</span></a>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">swap_horiz</i><span data-i18n="Menu levels">Menu levels</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="#" data-toggle=""><span data-i18n="Second level">Second level</span></a>
                                        </li>
                                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Second level child">Second level child</span></a>
                                            <ul class="dropdown-menu">
                                                <li data-menu=""><a class="dropdown-item" href="#" data-toggle=""><span data-i18n="Third level">Third level</span></a>
                                                </li>
                                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Third level child">Third level child</span></a>
                                                    <ul class="dropdown-menu">
                                                        <li data-menu=""><a class="dropdown-item" href="#" data-toggle=""><span data-i18n="Fourth level">Fourth level</span></a>
                                                        </li>
                                                        <li data-menu=""><a class="dropdown-item" href="#" data-toggle=""><span data-i18n="Fourth level">Fourth level</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">format_list_numbered</i><span data-i18n="Tables">Tables</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">format_list_numbered</i><span data-i18n="Bootstrap Tables">Bootstrap Tables</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="table-basic.html" data-toggle=""><span data-i18n="Basic Tables">Basic Tables</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="table-border.html" data-toggle=""><span data-i18n="Table Border">Table Border</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="table-sizing.html" data-toggle=""><span data-i18n="Table Sizing">Table Sizing</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="table-styling.html" data-toggle=""><span data-i18n="Table Styling">Table Styling</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="table-components.html" data-toggle=""><span data-i18n="Table Components">Table Components</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">select_all</i><span data-i18n="DataTables">DataTables</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="dt-basic-initialization.html" data-toggle=""><span data-i18n="Basic Initialisation">Basic Initialisation</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-advanced-initialization.html" data-toggle=""><span data-i18n="Advanced initialisation">Advanced initialisation</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-styling.html" data-toggle=""><span data-i18n="Styling">Styling</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-data-sources.html" data-toggle=""><span data-i18n="Data Sources">Data Sources</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-api.html" data-toggle=""><span data-i18n="API">API</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">border_all</i><span data-i18n="DataTables Ext.">DataTables Ext.</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-autofill.html" data-toggle=""><span data-i18n="AutoFill">AutoFill</span></a>
                                        </li>
                                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Buttons">Buttons</span></a>
                                            <ul class="dropdown-menu">
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-basic.html" data-toggle=""><span data-i18n="Basic Buttons">Basic Buttons</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-html-5-data-export.html" data-toggle=""><span data-i18n="HTML 5 Data Export">HTML 5 Data Export</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-flash-data-export.html" data-toggle=""><span data-i18n="Flash Data Export">Flash Data Export</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-column-visibility.html" data-toggle=""><span data-i18n="Column Visibility">Column Visibility</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-print.html" data-toggle=""><span data-i18n="Print">Print</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-api.html" data-toggle=""><span data-i18n="API">API</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-column-reorder.html" data-toggle=""><span data-i18n="Column Reorder">Column Reorder</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-fixed-columns.html" data-toggle=""><span data-i18n="Fixed Columns">Fixed Columns</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-key-table.html" data-toggle=""><span data-i18n="Key Table">Key Table</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-row-reorder.html" data-toggle=""><span data-i18n="Row Reorder">Row Reorder</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-select.html" data-toggle=""><span data-i18n="Select">Select</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-fix-header.html" data-toggle=""><span data-i18n="Fix Header">Fix Header</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-responsive.html" data-toggle=""><span data-i18n="Responsive">Responsive</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-column-visibility.html" data-toggle=""><span data-i18n="Column Visibility">Column Visibility</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">trending_up</i><span data-i18n="Charts">Charts</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="charts-apexcharts.html" data-toggle=""><i class="material-icons">data_usage</i><span data-i18n="Apex Charts">Apex Charts</span></a>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">show_chart</i><span data-i18n="Chartjs">Chartjs</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-line-charts.html" data-toggle=""><span data-i18n="Line charts">Line charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-bar-charts.html" data-toggle=""><span data-i18n="Bar charts">Bar charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-pie-doughnut-charts.html" data-toggle=""><span data-i18n="Pie &amp; Doughnut charts">Pie &amp; Doughnut charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-scatter-charts.html" data-toggle=""><span data-i18n="Scatter charts">Scatter charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-polar-radar-charts.html" data-toggle=""><span data-i18n="Polar &amp; Radar charts">Polar &amp; Radar charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-advance-charts.html" data-toggle=""><span data-i18n="Advance charts">Advance charts</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">multiline_chart</i><span data-i18n="D3 Charts">D3 Charts</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="d3-line-chart.html" data-toggle=""><span data-i18n="Line Chart">Line Chart</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="d3-bar-chart.html" data-toggle=""><span data-i18n="Bar Chart">Bar Chart</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="d3-pie-chart.html" data-toggle=""><span data-i18n="Pie Chart">Pie Chart</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="d3-circle-diagrams.html" data-toggle=""><span data-i18n="Circle Diagrams">Circle Diagrams</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="d3-tree-chart.html" data-toggle=""><span data-i18n="Tree Chart">Tree Chart</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="d3-other-charts.html" data-toggle=""><span data-i18n="Other Charts">Other Charts</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">pie_chart_outlined</i><span data-i18n="Chartist">Chartist</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="chartist-line-charts.html" data-toggle=""><span data-i18n="Line charts">Line charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartist-bar-charts.html" data-toggle=""><span data-i18n="Bar charts">Bar charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartist-pie-charts.html" data-toggle=""><span data-i18n="Pie charts">Pie charts</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="morris-charts.html" data-toggle=""><i class="material-icons">timeline</i><span data-i18n="Morris Charts">Morris Charts</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="rickshaw-charts.html" data-toggle=""><i class="material-icons">track_changes</i><span data-i18n="Rickshaw Charts">Rickshaw Charts</span></a>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">center_focus_weak</i><span data-i18n="Maps">Maps</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="maps-leaflet.html" data-toggle=""><span data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                                        </li>
                                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Vector Maps">Vector Maps</span></a>
                                            <ul class="dropdown-menu">
                                                <li data-menu=""><a class="dropdown-item" href="vector-maps-jvector.html" data-toggle=""><span data-i18n="jVector Map">jVector Map</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="vector-maps-jvq.html" data-toggle=""><span data-i18n="JQV Map">JQV Map</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> -->

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-header row">
        </div>
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Revenue, Hit Rate & Deals -->
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Revenue</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body pt-0">
                                    <div class="row mb-1">
                                        <div class="col-6 col-md-4">
                                            <h5>Current week</h5>
                                            <h2 class="danger">$82,124</h2>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <h5>Previous week</h5>
                                            <h2 class="text-muted">$52,502</h2>
                                        </div>
                                    </div>
                                    <div class="chartjs">
                                        <canvas id="thisYearRevenue" width="400" class="position-absolute"></canvas>
                                        <canvas id="lastYearRevenue" width="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-header bg-hexagons">
                                        <h4 class="card-title">Hit Rate <span class="danger">-12%</span></h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show bg-hexagons">
                                        <div class="card-body pt-0">
                                            <div class="chartjs">
                                                <canvas id="hit-rate-doughnut" height="275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-content collapse show bg-gradient-directional-danger ">
                                        <div class="card-body bg-hexagons-danger">
                                            <h4 class="card-title white">Deals <span class="white">-55%</span> <span class="float-right"><span class="white">152</span><span class="red lighten-4">/200</span></span>
                                            </h4>
                                            <div class="chartjs">
                                                <canvas id="deals-doughnut" height="275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h6 class="text-muted">Order Value </h6>
                                                    <h3>$ 88,568</h3>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="icon-trophy success font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h6 class="text-muted">Calls</h6>
                                                    <h3>3,568</h3>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="icon-call-in danger font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Revenue, Hit Rate & Deals -->

                <!-- Emails Products & Avg Deals -->
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Emails</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body pt-0">
                                    <p>Open rate <span class="float-right text-bold-600">89%</span></p>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="pt-1">Sent <span class="float-right"><span class="text-bold-600">310</span>/500</span>
                                    </p>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Top Products</h4>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a href="#">Show all</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="border-top-0">iPhone X</th>
                                                    <td class="border-top-0 text-right">2245</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">One Plus</th>
                                                    <td class="text-right">1850</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Samsung S7</th>
                                                    <td class="text-right">1550</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">Average Deal Size</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-md-6 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                            <h6 class="danger text-bold-600">-30%</h6>
                                            <h4 class="font-large-2 text-bold-400">$12,536</h4>
                                            <p class="blue-grey lighten-2 mb-0">Per rep</p>
                                        </div>
                                        <div class="col-md-6 col-12 text-center">
                                            <h6 class="success text-bold-600">12%</h6>
                                            <h4 class="font-large-2 text-bold-400">$18,548</h4>
                                            <p class="blue-grey lighten-2 mb-0">Per team</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Emails Products & Avg Deals -->

                <!-- Total earning & Recent Sales  -->
                <div class="row">

                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-content">
                                <div class="earning-chart position-relative">
                                    <div class="chart-title position-absolute mt-2 ml-2">
                                        <h1 class="display-4">$1,596</h1>
                                        <span class="text-muted">Total Earning</span>
                                    </div>
                                    <canvas id="earning-chart" class="height-450"></canvas>
                                    <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
                                        <a href="#" class="btn round btn-danger mr-1 btn-glow">Statistics <i class="ft-bar-chart"></i></a> <span class="text-muted">for the <a href="#" class="danger darken-2">last year.</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="recent-sales" class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Sales</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html" target="_blank">View all</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content mt-1">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Product</th>
                                                <th class="border-top-0">Customers</th>
                                                <th class="border-top-0">Categories</th>
                                                <th class="border-top-0">Popularity</th>
                                                <th class="border-top-0">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate">iPhone X</td>
                                                <td class="text-truncate p-1">
                                                    <ul class="list-unstyled users-list m-0">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-4.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-5.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-6.png" alt="Avatar">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge badge-info">+8 more</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                                                </td>
                                                <td>
                                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-truncate">$ 1200.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">iPad</td>
                                                <td class="text-truncate p-1">
                                                    <ul class="list-unstyled users-list m-0">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-7.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-8.png" alt="Avatar">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge badge-info">+5 more</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-success round">Tablet</button>
                                                </td>
                                                <td>
                                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-truncate">$ 1190.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">OnePlus</td>
                                                <td class="text-truncate p-1">
                                                    <ul class="list-unstyled users-list m-0">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-1.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-2.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-3.png" alt="Avatar">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge badge-info">+3 more</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                                                </td>
                                                <td>
                                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-truncate">$ 999.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">ZenPad</td>
                                                <td class="text-truncate p-1">
                                                    <ul class="list-unstyled users-list m-0">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-11.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-success round">Tablet</button>
                                                </td>
                                                <td>
                                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-truncate">$ 1150.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">Pixel 2</td>
                                                <td class="text-truncate p-1">
                                                    <ul class="list-unstyled users-list m-0">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-6.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-4.png" alt="Avatar">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                                                </td>
                                                <td>
                                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-truncate">$ 1180.00</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Total earning & Recent Sales  -->

                <!-- Analytics map based session -->
                <div class="row">
                    <div class="col-12">
                        <div class="card box-shadow-0">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col-md-9 col-12">
                                        <div id="world-map-markers" class="height-450"></div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="card-body text-center">
                                            <h4 class="card-title mb-0">Visitors Sessions</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="pb-1">Sessions by Browser</p>
                                                    <div id="sessions-browser-donut-chart" class="height-200"></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="sales pr-2 pt-2">
                                                        <div class="sales-today mb-2">
                                                            <p class="m-0">Today's <span class="success float-right"><i class="ft-arrow-up success"></i>
                                                                    6.89%</span></p>
                                                            <div class="progress progress-sm mt-1 mb-0">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sales-yesterday">
                                                            <p class="m-0">Yesterday's <span class="danger float-right"><i class="ft-arrow-down danger"></i>
                                                                    4.18%</span></p>
                                                            <div class="progress progress-sm mt-1 mb-0">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Analytics map based session -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?= $this->include('home/layouts/footer') ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/material-vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/data/jvector/visitor-data.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url() ?>/assets/modern/app-assets/js/core/app-menu.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url() ?>/assets/modern/app-assets/js/scripts/pages/material-app.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/js/scripts/pages/dashboard-sales.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>