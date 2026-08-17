<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Web Hosting Services in India | Reliable &amp; Secure | Hytrix Technologies</title>

    <meta name="description"
        content="Hytrix Technologies provides ultra-fast, secure, and scalable web hosting services, Linux &amp; Windows servers, reseller hosting, and 24/7 technical support in India.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="Web Hosting Services | Hytrix Technologies">
    <meta property="og:description"
        content="Fast, reliable, and secure web hosting services for modern business websites.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== Web Hosting Hero ====== --}}
    <div class="py-4 py-lg-5">
        <div class="container py-lg-5">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="choose-content mr-lg-20">
                        <div class="section-title">
                            <span class="sp-color2">HOSTING &amp; INFRASTRUCTURE</span>
                            <h1>High-Performance Web Hosting in India</h1>
                        </div>
                        <p class="text-dark">
                            Keep your business websites lightning-fast, secure, and always accessible. Hytrix Technologies delivers enterprise-grade web hosting solutions backed by 99.9% uptime SLAs and proactive security monitoring.
                        </p>
                        <p class="text-dark">
                            Whether you need shared cPanel hosting, high-performance VPS, dedicated Linux/Windows servers, or scalable cloud environments, our infrastructure ensures top tier reliability.
                        </p>
                        <a href="{{ route('contact') }}" class="default-btn btn-bg-two mt-3">
                            Explore Hosting Plans <i class='bx bx-chevron-right'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{ url('public/assets/images/hosting1.png') }}"
                            alt="Web hosting infrastructure by Hytrix Technologies"
                            class="img-fluid rounded shadow-sm">
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ====== Hosting Features & Types ====== --}}
    <section class="services-style-area py-5" style="background: var(--color-bg-light);">
        <div class="container py-lg-4">
            <div class="section-title text-center mb-5">
                <span class="sp-color1">Hosting Solutions</span>
                <h2 class="mb-2">Reliable Server Environments for Every Need</h2>
                <p class="margin-auto">
                    Engineered with cutting-edge NVMe SSD storage, HTTP/3 support, and free automated SSL certificates.
                </p>
            </div>

            <div class="row g-4">

                {{-- Linux Hosting --}}
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-server'></i>
                        </div>
                        <h4>Linux Web Hosting</h4>
                        <p>
                            Optimized for PHP, Laravel, Node.js, and WordPress with cPanel access, automated daily backups, and malware protection.
                        </p>
                    </div>
                </div>

                {{-- Windows Hosting --}}
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bxl-windows'></i>
                        </div>
                        <h3>Windows Server Hosting</h3>
                        <p>
                            Full support for ASP.NET, .NET Core, MSSQL databases, and IIS web servers for Microsoft-stack enterprise systems.
                        </p>
                    </div>
                </div>

                {{-- Reseller Hosting --}}
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-store'></i>
                        </div>
                        <h4>Reseller Hosting</h4>
                        <p>
                            Launch your own hosting brand with white-label WHM/cPanel controls, automated billing integration, and flexible allocation.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ====== CTA Section ====== --}}
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <h2 class="mb-3">Need Help Choosing the Right Hosting Plan?</h2>
                    <p class="text-muted mb-4">
                        Contact our server engineers for custom configurations, migrations, or dedicated architecture consulting.
                    </p>
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                        Contact Server Team <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
