
<style>
/* =====================================================
   HYTRIX TECHNOLOGIES - PREMIUM ADMIN HEADER
   Royal Blue + Sky Blue
===================================================== */

:root {
    --hy-primary: #344B87;
    --hy-primary-dark: #263B73;
    --hy-sky: #4DC2DF;
    --hy-light: #EAF8FC;
    --hy-text: #344B87;
    --hy-border: #E8EEF6;
}

/* PRELOADER */

.preloader {
    background: #ffffff !important;
}

.preloader img {
    object-fit: contain;
}

/* MAIN HEADER */

.main-header.hytrix-header {
    height: 66px;
    min-height: 66px;

    display: flex;
    align-items: center;

    padding: 0 24px !important;

    background: rgba(255,255,255,0.97) !important;

    border: none !important;
    border-bottom: 1px solid var(--hy-border) !important;

    box-shadow: 0 4px 18px rgba(38,59,115,0.055);

    position: relative;
    z-index: 1035;
}

/* LEFT NAVIGATION */

.hytrix-header .navbar-nav {
    display: flex;
    align-items: center;
}

.hytrix-header .nav-link {
    position: relative;

    width: 42px;
    height: 42px;

    display: flex !important;
    align-items: center;
    justify-content: center;

    padding: 0 !important;
    margin: 0 5px;

    border-radius: 12px;

    color: var(--hy-primary) !important;

    transition: all 0.25s ease;
}

.hytrix-header .nav-link i {
    font-size: 17px;

    color: var(--hy-primary);

    transition: all 0.25s ease;
}

.hytrix-header .nav-link:hover {
    background: linear-gradient(
        135deg,
        #E6F8FC,
        #EAF0FF
    ) !important;

    transform: translateY(-2px);
}

.hytrix-header .nav-link:hover i {
    color: var(--hy-sky);
}

/* SIDEBAR TOGGLE */

.hytrix-header .hy-toggle {
    width: 43px;
    height: 43px;

    background: linear-gradient(
        135deg,
        #EAF8FC,
        #EDF1FF
    );

    border: 1px solid #E4EDF7;

    border-radius: 12px;

    display: flex;
    align-items: center;
    justify-content: center;
}

.hytrix-header .hy-toggle i {
    font-size: 17px;
    color: var(--hy-primary);
}

.hytrix-header .hy-toggle:hover {
    background: linear-gradient(
        120deg,
        var(--hy-sky),
        var(--hy-primary)
    );
}

.hytrix-header .hy-toggle:hover i {
    color: #ffffff;
}

/* RIGHT SIDE */

.hytrix-header .navbar-nav.ml-auto {
    margin-left: auto !important;
    gap: 7px;
}

/* ICON BADGES */

.hytrix-header .navbar-badge {
    position: absolute !important;

    top: 2px !important;
    right: 0 !important;

    min-width: 17px;
    height: 17px;

    padding: 2px 4px !important;

    font-size: 9px !important;
    font-weight: 700;

    border-radius: 6px !important;

    border: 2px solid #fff;

    box-shadow: 0 2px 5px rgba(0,0,0,0.08);
}

.hytrix-header .badge-danger {
    background: #E74C62 !important;
}

.hytrix-header .badge-warning {
    background: var(--hy-sky) !important;
    color: white !important;
}

/* DROPDOWN PANELS */

.hytrix-header .dropdown-menu {
    border: 1px solid #E8EEF6 !important;

    border-radius: 14px !important;

    padding: 8px !important;

    margin-top: 12px !important;

    background: #fff !important;

    box-shadow: 0 15px 40px rgba(38,59,115,0.14) !important;

    min-width: 300px;

    overflow: hidden;
}

/* DROPDOWN HEADER */

.hytrix-header .hy-dropdown-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;

    padding: 13px 14px;

    border-bottom: 1px solid #EDF1F7;

    margin-bottom: 5px;
}

.hytrix-header .hy-dropdown-heading strong {
    color: var(--hy-primary);

    font-size: 14px;
    font-weight: 700;
}

.hytrix-header .hy-dropdown-heading span {
    background: var(--hy-light);

    color: #319FC1;

    padding: 4px 9px;

    font-size: 10px;
    font-weight: 700;

    border-radius: 20px;
}

/* DROPDOWN ITEMS */

.hytrix-header .dropdown-item {
    display: block;

    padding: 11px 12px !important;

    border-radius: 9px;

    color: var(--hy-text) !important;

    white-space: normal;

    transition: all 0.2s ease;
}

.hytrix-header .dropdown-item:hover {
    background: #F0FAFD !important;
}

.hytrix-header .dropdown-item-title {
    font-size: 12px !important;
    font-weight: 700 !important;

    color: var(--hy-primary) !important;
}

.hytrix-header .dropdown-item p {
    font-size: 11px !important;
    color: #8190A8 !important;
}

.hytrix-header .dropdown-divider {
    border-top: 1px solid #EDF1F7 !important;
    margin: 5px 0;
}

/* MESSAGE IMAGES */

.hytrix-header .img-size-50 {
    width: 42px !important;
    height: 42px !important;

    border: 2px solid #EAF8FC;

    object-fit: cover;
}

/* NOTIFICATION ITEMS */

.hytrix-header .hy-notification-icon {
    width: 35px;
    height: 35px;

    flex-shrink: 0;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    border-radius: 10px;

    margin-right: 9px;

    background: #EAF8FC;

    color: var(--hy-primary);
}

.hytrix-header .dropdown-footer {
    text-align: center !important;

    font-size: 12px !important;

    font-weight: 700 !important;

    color: #319FC1 !important;

    padding: 12px !important;
}

/* SEARCH PANEL */

.hytrix-header .navbar-search-block {
    background: #ffffff;

    border: 1px solid var(--hy-border);

    padding: 12px;

    box-shadow: 0 10px 25px rgba(38,59,115,0.08);
}

.hytrix-header .form-control-navbar {
    height: 40px !important;

    background: #F5F8FC !important;

    color: var(--hy-primary) !important;

    border: 1px solid #DFE8F3 !important;

    border-radius: 9px 0 0 9px !important;

    font-size: 13px;
}

.hytrix-header .form-control-navbar:focus {
    border-color: var(--hy-sky) !important;
    box-shadow: 0 0 0 3px rgba(77,194,223,0.12);
}

.hytrix-header .btn-navbar {
    background: var(--hy-light) !important;

    color: var(--hy-primary) !important;

    border: 1px solid #DFE8F3 !important;
}

/* DROPDOWN ANIMATION */

.hytrix-header .dropdown-menu.show {
    animation: hyHeaderDropdown 0.22s ease;
}

@keyframes hyHeaderDropdown {
    from {
        opacity: 0;
        transform: translateY(8px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* FULLSCREEN */

.hytrix-header [data-widget="fullscreen"] {
    background: #F0F8FC;
}

/* RESPONSIVE */

@media(max-width: 767px) {

    .main-header.hytrix-header {
        height: 58px;
        min-height: 58px;

        padding: 0 8px !important;
    }

    .hytrix-header .navbar-nav.ml-auto {
        gap: 0;
    }

    .hytrix-header .nav-link {
        width: 35px;
        height: 38px;

        margin: 0 2px;
    }

    .hytrix-header .nav-link i {
        font-size: 15px;
    }

    .hytrix-header .dropdown-menu {
        min-width: 280px;

        max-width: calc(100vw - 20px);
    }
}

@media(max-width: 360px) {

    .hytrix-header .nav-link {
        width: 31px;
        margin: 0 1px;
    }
}
</style>


<div class="wrapper">

    <!-- PRELOADER -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img
            src="{{ asset('dist/img/logo1.png') }}"
            alt="Hytrix Technologies"
            height="60"
            width="60">
    </div>


    <!-- PREMIUM NAVBAR -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light hytrix-header">

        <!-- LEFT SECTION -->
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link hy-toggle"
                   data-widget="pushmenu"
                   href="#"
                   role="button"
                   aria-label="Toggle Sidebar">
                    <i class="fas fa-bars"></i>
                </a>
            </li>

        </ul>


        <!-- RIGHT SECTION -->
        <ul class="navbar-nav ml-auto">

            <!-- SEARCH -->
            <li class="nav-item">

                <a class="nav-link"
                   data-widget="navbar-search"
                   href="#"
                   role="button"
                   aria-label="Search">
                    <i class="fas fa-search"></i>
                </a>

                <div class="navbar-search-block">

                    <form class="form-inline">

                        <div class="input-group input-group-sm">

                            <input
                                class="form-control form-control-navbar"
                                type="search"
                                placeholder="Search here..."
                                aria-label="Search">

                            <div class="input-group-append">

                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>

                                <button
                                    class="btn btn-navbar"
                                    type="button"
                                    data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </li>


            <!-- MESSAGES -->
            <li class="nav-item dropdown">

                <a class="nav-link"
                   data-toggle="dropdown"
                   href="#"
                   aria-label="Messages">

                    <i class="far fa-comment-dots"></i>

                    <span class="badge badge-danger navbar-badge">3</span>

                </a>


                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                    <div class="hy-dropdown-heading">

                        <strong>Messages</strong>

                        <span>3 New</span>

                    </div>


                    <a href="#" class="dropdown-item">

                        <div class="media">

                            <img
                                src="{{ asset('dist/img/user1-128x128.jpg') }}"
                                alt="User"
                                class="img-size-50 img-circle mr-3">

                            <div class="media-body">

                                <h3 class="dropdown-item-title">
                                    Brad Diesel

                                    <span class="float-right text-sm text-danger">
                                        <i class="fas fa-circle"></i>
                                    </span>
                                </h3>

                                <p class="text-sm mb-1">
                                    Call me whenever you can...
                                </p>

                                <p class="text-sm text-muted mb-0">
                                    <i class="far fa-clock mr-1"></i>
                                    4 Hours Ago
                                </p>

                            </div>

                        </div>

                    </a>


                    <div class="dropdown-divider"></div>


                    <a href="#" class="dropdown-item">

                        <div class="media">

                            <img
                                src="{{ asset('dist/img/user8-128x128.jpg') }}"
                                alt="User"
                                class="img-size-50 img-circle mr-3">

                            <div class="media-body">

                                <h3 class="dropdown-item-title">
                                    John Pierce
                                </h3>

                                <p class="text-sm mb-1">
                                    I got your message bro
                                </p>

                                <p class="text-sm text-muted mb-0">
                                    <i class="far fa-clock mr-1"></i>
                                    4 Hours Ago
                                </p>

                            </div>

                        </div>

                    </a>


                    <div class="dropdown-divider"></div>


                    <a href="#" class="dropdown-item">

                        <div class="media">

                            <img
                                src="{{ asset('dist/img/user3-128x128.jpg') }}"
                                alt="User"
                                class="img-size-50 img-circle mr-3">

                            <div class="media-body">

                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                </h3>

                                <p class="text-sm mb-1">
                                    The subject goes here
                                </p>

                                <p class="text-sm text-muted mb-0">
                                    <i class="far fa-clock mr-1"></i>
                                    4 Hours Ago
                                </p>

                            </div>

                        </div>

                    </a>


                    <div class="dropdown-divider"></div>

                    <a href="#" class="dropdown-item dropdown-footer">
                        View All Messages
                        <i class="fas fa-arrow-right ml-1"></i>
                    </a>

                </div>

            </li>


            <!-- NOTIFICATIONS -->
            <li class="nav-item dropdown">

                <a class="nav-link"
                   data-toggle="dropdown"
                   href="#"
                   aria-label="Notifications">

                    <i class="far fa-bell"></i>

                    <span class="badge badge-warning navbar-badge">15</span>

                </a>


                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                    <div class="hy-dropdown-heading">

                        <strong>Notifications</strong>

                        <span>15 New</span>

                    </div>


                    <a href="#" class="dropdown-item">

                        <span class="hy-notification-icon">
                            <i class="fas fa-envelope"></i>
                        </span>

                        4 new messages

                        <span class="float-right text-muted text-xs">
                            3 mins
                        </span>

                    </a>


                    <div class="dropdown-divider"></div>


                    <a href="#" class="dropdown-item">

                        <span class="hy-notification-icon">
                            <i class="fas fa-users"></i>
                        </span>

                        8 friend requests

                        <span class="float-right text-muted text-xs">
                            12 hours
                        </span>

                    </a>


                    <div class="dropdown-divider"></div>


                    <a href="#" class="dropdown-item">

                        <span class="hy-notification-icon">
                            <i class="fas fa-file-alt"></i>
                        </span>

                        3 new reports

                        <span class="float-right text-muted text-xs">
                            2 days
                        </span>

                    </a>


                    <div class="dropdown-divider"></div>


                    <a href="#" class="dropdown-item dropdown-footer">
                        View All Notifications
                        <i class="fas fa-arrow-right ml-1"></i>
                    </a>

                </div>

            </li>


            <!-- FULLSCREEN -->
            <li class="nav-item">

                <a class="nav-link"
                   data-widget="fullscreen"
                   href="#"
                   role="button"
                   aria-label="Fullscreen">

                    <i class="fas fa-expand-arrows-alt"></i>

                </a>

            </li>

        </ul>

    </nav>
    <!-- END PREMIUM NAVBAR -->
</div>
