{{-- ====== Layout: Main Navigation ====== --}}

<div class="navbar-area">

    {{-- Mobile nav logo --}}
    <div class="mobile-nav">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ url('public/assets/images/logos/logo.png') }}" class="logo-one" alt="Hytrix Technologies Logo">
            <img src="{{ url('public/assets/images/logos/logo.png') }}" class="logo-two" alt="Hytrix Technologies Logo">
        </a>
    </div>

    {{-- Desktop nav --}}
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">

                {{-- Brand logo --}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('public/assets/images/logos/logo.png') }}" class="logo-one" alt="Hytrix Technologies Logo">
                    <img src="{{ url('public/assets/images/logos/logo.png') }}" class="logo-two" alt="Hytrix Technologies Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                    {{-- Primary nav links --}}
                    <ul class="navbar-nav m-auto">

                        {{-- Home --}}
                        <li class="nav-item">
                            <a href="{{ route('homedashboard') }}"
                                class="nav-link {{ Route::current()->getName() == 'homedashboard' ? 'active' : '' }}">
                                Home
                            </a>
                        </li>

                        {{-- Why Choose Us --}}
                        <li class="nav-item">
                            <a href="{{ route('about') }}"
                                class="nav-link {{ Route::current()->getName() == 'about' ? 'active' : '' }}">
                                Why Choose Us
                            </a>
                        </li>

                        {{-- Services dropdown --}}
                        <li class="nav-item">
                            <a href="#!" class="nav-link {{ in_array(Route::current()->getName(), ['software', 'web', 'android', 'ecommerce', 'digital', 'webhost', 'api', 'cloud']) ? 'active' : '' }}">
                                Services
                                <i class='bx bx-caret-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('web') }}">
                                        <i class='bx bx-code-alt'></i> Web Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('software') }}">
                                        <i class='bx bx-laptop'></i> Software Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('android') }}">
                                        <i class='bx bxl-android'></i> Android Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('ecommerce') }}">
                                        <i class='bx bx-store-alt'></i> E-Commerce Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('digital') }}">
                                        <i class='bx bx-trending-up'></i> Digital Marketing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('webhost') }}">
                                        <i class='bx bx-server'></i> Web Hosting
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('api') }}">
                                        <i class='bx bx-transfer'></i> API Integration
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">
                                        <i class='bx bx-cloud'></i> Cloud Computing
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- Portfolio --}}
                        <li class="nav-item">
                            <a href="{{ url('portfolio') }}"
                                class="nav-link {{ Route::current()->getName() == 'portfolio' ? 'active' : '' }}">
                                Portfolio
                            </a>
                        </li>

                        {{-- Work With Us dropdown --}}
                        <li class="nav-item">
                            <a href="#!" class="nav-link {{ Route::current()->getName() == 'career' ? 'active' : '' }}">
                                Work With Us
                                <i class='bx bx-caret-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ url('career') }}">
                                        <i class='bx bx-briefcase'></i> Career
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- Contact --}}
                        <li class="nav-item">
                            <a href="{{ url('contact') }}"
                                class="nav-link {{ Route::current()->getName() == 'contact' ? 'active' : '' }}">
                                Contact
                            </a>
                        </li>

                    </ul>

                    {{-- CTA button --}}
                    <div class="nav-side d-display">
                        <div class="nav-side-item">
                            <div class="get-btn">
                                <a href="{{ url('contact') }}" class="default-btn btn-bg-two">
                                    Get A Quote <i class='bx bx-chevron-right'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    {{-- Side-nav responsive CTA (fixes broken contact.html href) --}}
    <div class="side-nav-responsive">
        <div class="container-max">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="in-circle circle-one"></div>
                    <div class="in-circle circle-two"></div>
                    <div class="in-circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item nav-side">
                            <div class="get-btn">
                                <a href="{{ url('contact') }}" class="default-btn btn-bg-two">
                                    Get A Quote <i class='bx bx-chevron-right'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- ====== End: Main Navigation ====== --}}
