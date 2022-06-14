<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light navbar-shadow border-grey border-lighten-2">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item mobile-menu d-md-none float-left">
                        <i class="nav-link menu-toggle ft-menu font-large-1"></i>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="navbar-brand nav-link"><img src="<?= base_url() ?>/assets/modern/app-assets/images/logo/logo-dark.png" alt="branding logo"></a>
                    </li>
                    <li class="nav-item d-md-none ml-auto">
                        <a data-toggle="collapse" data-target="#navbar-mobile1" class="nav-link open-navbar-container">
                            <i class="la la-ellipsis-v"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div id="navbar-mobile1" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Classic</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Options</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                                <h6 class="user-name"> John Doe</h6><i class="caret"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>
                                <a href="#" class="dropdown-item"><i class="ft-mail"></i> My Inbox</a>
                                <a href="#" class="dropdown-item">
                                    <i class="ft-check-square"></i> Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-message-square"></i>
                                    Calender</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>