<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Android App Development Company in India | Hytrix Technologies</title>

    <meta name="description"
        content="Hytrix Technologies provides custom Android application development services for startups and enterprises across India. Native, hybrid, and scalable mobile app solutions.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="Android App Development Services | Hytrix Technologies">
    <meta property="og:description"
        content="Custom Android application development services tailored to your business needs.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== Android Development Intro ====== --}}
    <div class="py-4 py-lg-5">
        <div class="container py-lg-5">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="choose-content mr-lg-20">
                        <div class="section-title">
                            <span class="sp-color2">MOBILE APPLICATION SERVICES</span>
                            <h1>Android Application Development Company</h1>
                        </div>
                        <p class="text-dark">
                            At Hytrix Technologies, we engineer high-performance, secure, and user-centric Android applications tailored to meet your business goals. Whether you are a budding startup or an established enterprise, our apps deliver smooth experiences across all Android devices.
                        </p>
                        <p class="text-dark">
                            From intuitive UI/UX design to robust backend integration, our mobile engineers leverage modern frameworks and Google's recommended architecture to ensure high scalability and seamless performance.
                        </p>
                        <a href="{{ route('contact') }}" class="default-btn btn-bg-two mt-3">
                            Get A Free Consultation <i class='bx bx-chevron-right'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{ asset('public/assets/images/about/hytrix-img-2.jpeg') }}"
                            alt="Android application development by Hytrix Technologies"
                            class="img-fluid rounded shadow-sm">
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ====== Android Services Grid ====== --}}
    <section class="services-style-area py-5">
        <div class="container py-lg-4">
            <div class="section-title text-center mb-5">
                <span class="sp-color1">Our Capabilities</span>
                <h2 class="mb-2">Comprehensive Android App Development Services</h2>
                <p class="margin-auto">
                    We empower businesses with an exceptional range of Android application development solutions designed for scale and performance.
                </p>
            </div>

            <div class="row g-4">

                {{-- Customized Applications --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bxl-android'></i>
                        </div>
                        <h4>Custom Android Apps</h4>
                        <p>
                            Tailor-made native applications built to your exact business specifications with modern Kotlin and Java architectures.
                        </p>
                    </div>
                </div>

                {{-- Hybrid App Development --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-mobile-alt'></i>
                        </div>
                        <h4>Cross-Platform Apps</h4>
                        <p>
                            Cost-effective hybrid mobile applications that run smoothly across both Android and iOS with single codebase efficiency.
                        </p>
                    </div>
                </div>

                {{-- App Re-designing --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-palette'></i>
                        </div>
                        <h4>UI/UX &amp; Redesign</h4>
                        <p>
                            Transform outdated mobile apps with modern, sleek Material Design interfaces that maximize user engagement and retention.
                        </p>
                    </div>
                </div>

                {{-- App Testing & QA --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-check-shield'></i>
                        </div>
                        <h4>App Testing &amp; QA</h4>
                        <p>
                            Rigorous device fragmentation testing, automated performance checks, and security audits to guarantee zero-crash releases.
                        </p>
                    </div>
                </div>

                {{-- Location & IoT Apps --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-map-pin'></i>
                        </div>
                        <h4>GPS &amp; Location Apps</h4>
                        <p>
                            Feature-rich geofencing, real-time tracking, and maps integration for delivery, logistics, and on-demand services.
                        </p>
                    </div>
                </div>

                {{-- E-Commerce Application --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-shopping-bag'></i>
                        </div>
                        <h4>Mobile Commerce</h4>
                        <p>
                            Full-featured m-commerce solutions with secure payment gateways, push notifications, and fast checkout experiences.
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
                    <h2 class="mb-3">Ready to Build Your Android App?</h2>
                    <p class="text-muted mb-4">
                        Connect with our mobile development team to discuss your app idea and get a tailored roadmap.
                    </p>
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                        Get In Touch <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
