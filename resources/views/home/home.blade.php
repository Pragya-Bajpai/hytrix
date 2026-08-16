<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Best IT Company in Lucknow | Web, Software &amp; Digital Marketing Services | Hytrix Technologies</title>
    <meta name="description"
        content="Hytrix Technologies LLP is a leading IT company in Lucknow specializing in web development, software development, mobile apps, e-commerce, API integration, and digital marketing. Grow your business with us!">
    <meta name="keywords"
        content="IT company in Lucknow, web development company in Lucknow, software development company in Lucknow, digital marketing company in Lucknow, mobile app development company in Lucknow">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Hytrix Technologies | IT Company in India">
    <meta property="og:description"
        content="Web development, software development, mobile app, e-commerce and digital marketing services for businesses across India.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('public/home/hytrix-og-image.jpg') }}">
    <meta property="og:site_name" content="Hytrix Technologies">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hytrix Technologies | IT Company in India">
    <meta name="twitter:description"
        content="Web, software, mobile app, e-commerce and digital marketing services for businesses across India.">
    <meta name="twitter:image" content="{{ asset('public/home/hytrix-og-image.jpg') }}">
    <link rel="canonical" href="{{ url('/') }}">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Hytrix Technologies LLP",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('public/assets/images/logo.png') }}",
        "description": "Hytrix Technologies is an IT company in India providing web development, software development, mobile app development, e-commerce and digital marketing services.",
        "sameAs": [
            "https://www.linkedin.com/company/hytrix-technology/",
            "https://www.facebook.com/profile.php?id=100089461593466&mibextid=ZbWKwL",
            "https://www.instagram.com/hytrixtech/?utm_source=qr"
        ]
    }
    </script>
    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== Hero Slider Section ====== --}}
    <div class="banner-slider-area ht-banner">
        <div class="banner-slider owl-carousel owl-theme">

            {{-- Slide 1 --}}
            <div class="banner-item item-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-item-content">
                                <span>High-Impact IT Solutions</span>
                                <h1>Best IT Company in Lucknow for Web &amp; Software Development</h1>
                                <p>
                                    At Hytrix, we engineer digital transformations. We craft scalable web platforms, enterprise software, and mobile apps designed to accelerate business growth.
                                </p>
                                <div class="banner-btn">
                                    <a href="{{ route('about') }}" class="default-btn btn-bg-two">
                                        Why Choose Us <i class='bx bx-chevron-right'></i>
                                    </a>
                                    <a href="{{ route('contact') }}" class="default-btn btn-bg-one">
                                        Get A Quote <i class='bx bx-chevron-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="banner-item item-bg2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-item-content">
                                <span>Scalable Architecture</span>
                                <h1>Custom Software &amp; Cloud Solutions for Modern Enterprises</h1>
                                <p>
                                    Stay ahead in rapidly shifting digital landscapes. We deliver secure, robust, and scalable cloud and software ecosystems tailored to your exact workflows.
                                </p>
                                <div class="banner-btn">
                                    <a href="{{ route('about') }}" class="default-btn btn-bg-two">
                                        Learn More <i class='bx bx-chevron-right'></i>
                                    </a>
                                    <a href="{{ route('contact') }}" class="default-btn btn-bg-one">
                                        Get A Quote <i class='bx bx-chevron-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="banner-item item-bg3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-item-content">
                                <span>Results-Driven Growth</span>
                                <h1>Mobile App &amp; E-Commerce Development That Converts</h1>
                                <p>
                                    Ignite revenue and customer retention with ultra-fast e-commerce stores, native Android apps, and data-driven digital marketing campaigns.
                                </p>
                                <div class="banner-btn">
                                    <a href="{{ route('about') }}" class="default-btn btn-bg-two">
                                        Our Work <i class='bx bx-chevron-right'></i>
                                    </a>
                                    <a href="{{ route('contact') }}" class="default-btn btn-bg-one">
                                        Get A Quote <i class='bx bx-chevron-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="banner-sideImg">
            <img src="{{ asset('public/assets/images/development-icon.png') }}" class="img-fluid" alt="IT Development">
        </div>
    </div>

    {{-- ====== Core Services Section (Symmetrical Grid) ====== --}}
    <section class="py-5 bg-white">
        <div class="container py-lg-4">
            <div class="section-title text-center mb-5">
                <span class="sp-color2 fw-bold text-uppercase" style="letter-spacing: 1px;">What We Do</span>
                <h2>Comprehensive IT Services &amp; Digital Solutions</h2>
                <p class="margin-auto text-muted" style="max-width: 650px;">
                    We design and develop technology solutions that empower organizations to streamline operations, engage customers, and scale reliably.
                </p>
            </div>

            <div class="row g-4">

                {{-- Web Development --}}
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('web') }}" class="text-decoration-none d-block h-100">
                        <div class="home-service-card">
                            <div>
                                <div class="home-service-card__icon">
                                    <i class='bx bx-code-alt'></i>
                                </div>
                                <h3 class="home-service-card__title">Web Development</h3>
                                <p class="home-service-card__text">
                                    Responsive business websites, custom web applications, and scalable Laravel solutions built for optimal performance.
                                </p>
                            </div>
                            <div class="mt-3 text-primary fw-bold small">
                                Learn More <i class='bx bx-right-arrow-alt'></i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Software Development --}}
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('software') }}" class="text-decoration-none d-block h-100">
                        <div class="home-service-card">
                            <div>
                                <div class="home-service-card__icon">
                                    <i class='bx bx-laptop'></i>
                                </div>
                                <h3 class="home-service-card__title">Software Engineering</h3>
                                <p class="home-service-card__text">
                                    Custom enterprise software, ERP, CRM, and automation workflows engineered to optimize operational efficiency.
                                </p>
                            </div>
                            <div class="mt-3 text-primary fw-bold small">
                                Learn More <i class='bx bx-right-arrow-alt'></i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Android Development --}}
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('android') }}" class="text-decoration-none d-block h-100">
                        <div class="home-service-card">
                            <div>
                                <div class="home-service-card__icon">
                                    <i class='bx bxl-android'></i>
                                </div>
                                <h3 class="home-service-card__title">Android Apps</h3>
                                <p class="home-service-card__text">
                                    Intuitive, feature-rich native and cross-platform mobile apps that drive engagement and seamless mobile experiences.
                                </p>
                            </div>
                            <div class="mt-3 text-primary fw-bold small">
                                Learn More <i class='bx bx-right-arrow-alt'></i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- E-Commerce Development --}}
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('ecommerce') }}" class="text-decoration-none d-block h-100">
                        <div class="home-service-card">
                            <div>
                                <div class="home-service-card__icon">
                                    <i class='bx bx-store-alt'></i>
                                </div>
                                <h3 class="home-service-card__title">E-Commerce Stores</h3>
                                <p class="home-service-card__text">
                                    High-converting online storefronts with seamless multi-currency checkout, inventory management, and gateway integration.
                                </p>
                            </div>
                            <div class="mt-3 text-primary fw-bold small">
                                Learn More <i class='bx bx-right-arrow-alt'></i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Digital Marketing --}}
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('digital') }}" class="text-decoration-none d-block h-100">
                        <div class="home-service-card">
                            <div>
                                <div class="home-service-card__icon">
                                    <i class='bx bx-trending-up'></i>
                                </div>
                                <h3 class="home-service-card__title">Digital Marketing</h3>
                                <p class="home-service-card__text">
                                    Data-driven SEO, Google Ads, social media marketing, and conversion optimization to scale qualified lead generation.
                                </p>
                            </div>
                            <div class="mt-3 text-primary fw-bold small">
                                Learn More <i class='bx bx-right-arrow-alt'></i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Web Hosting --}}
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('webhost') }}" class="text-decoration-none d-block h-100">
                        <div class="home-service-card">
                            <div>
                                <div class="home-service-card__icon">
                                    <i class='bx bx-server'></i>
                                </div>
                                <h3 class="home-service-card__title">Web Hosting</h3>
                                <p class="home-service-card__text">
                                    High-speed Linux &amp; Windows servers, reseller hosting, SSL encryption, and 99.9% guaranteed uptime support.
                                </p>
                            </div>
                            <div class="mt-3 text-primary fw-bold small">
                                Learn More <i class='bx bx-right-arrow-alt'></i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- API Integration --}}
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('api') }}" class="text-decoration-none d-block h-100">
                        <div class="home-service-card">
                            <div>
                                <div class="home-service-card__icon">
                                    <i class='bx bx-transfer'></i>
                                </div>
                                <h3 class="home-service-card__title">API Integration</h3>
                                <p class="home-service-card__text">
                                    Seamless connectivity with payment gateways, logistics carriers, advertising networks, and third-party SaaS tools.
                                </p>
                            </div>
                            <div class="mt-3 text-primary fw-bold small">
                                Learn More <i class='bx bx-right-arrow-alt'></i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Cloud Computing --}}
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('cloud') }}" class="text-decoration-none d-block h-100">
                        <div class="home-service-card">
                            <div>
                                <div class="home-service-card__icon">
                                    <i class='bx bx-cloud'></i>
                                </div>
                                <h3 class="home-service-card__title">Cloud Solutions</h3>
                                <p class="home-service-card__text">
                                    Flexible AWS, GCP, and Azure cloud infrastructure, CI/CD automated deployments, and 24/7 managed reliability.
                                </p>
                            </div>
                            <div class="mt-3 text-primary fw-bold small">
                                Learn More <i class='bx bx-right-arrow-alt'></i>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- ====== Working Process Section (Symmetrical Process Cards) ====== --}}
    <section class="py-5" style="background: var(--color-bg-light);">
        <div class="container py-lg-4">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <span class="sp-color1 fw-bold text-uppercase" style="letter-spacing: 1px;">Structured Workflow</span>
                    <h2>How We Transform Ideas Into High-Performance Products</h2>
                </div>
                <div class="col-lg-6 text-lg-end mt-3 mt-lg-0">
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                        Start Your Project <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>

            <div class="row g-4">

                {{-- Step 1: Discovery --}}
                <div class="col-lg-3 col-md-6">
                    <div class="home-process-card">
                        <div>
                            <div class="home-process-card__header">
                                <div class="home-process-card__icon">
                                    <i class='bx bx-search-alt'></i>
                                </div>
                                <span class="home-process-card__step">01</span>
                            </div>
                            <h3 class="home-process-card__title">Discovery &amp; Strategy</h3>
                            <p class="home-process-card__text">
                                We analyze your business requirements, define user personas, and establish a clear technical roadmap.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Step 2: Architecture --}}
                <div class="col-lg-3 col-md-6">
                    <div class="home-process-card">
                        <div>
                            <div class="home-process-card__header">
                                <div class="home-process-card__icon">
                                    <i class='bx bx-layer'></i>
                                </div>
                                <span class="home-process-card__step">02</span>
                            </div>
                            <h3 class="home-process-card__title">Design &amp; Architecture</h3>
                            <p class="home-process-card__text">
                                Wireframes, responsive UI/UX prototypes, and scalable database schemas designed for maximum usability.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Step 3: Development --}}
                <div class="col-lg-3 col-md-6">
                    <div class="home-process-card">
                        <div>
                            <div class="home-process-card__header">
                                <div class="home-process-card__icon">
                                    <i class='bx bx-code-alt'></i>
                                </div>
                                <span class="home-process-card__step">03</span>
                            </div>
                            <h3 class="home-process-card__title">Agile Engineering</h3>
                            <p class="home-process-card__text">
                                Clean, maintainable, and secure code built in rapid iterative sprints with continuous code reviews.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Step 4: Launch --}}
                <div class="col-lg-3 col-md-6">
                    <div class="home-process-card">
                        <div>
                            <div class="home-process-card__header">
                                <div class="home-process-card__icon">
                                    <i class='bx bx-rocket'></i>
                                </div>
                                <span class="home-process-card__step">04</span>
                            </div>
                            <h3 class="home-process-card__title">QA &amp; Deployment</h3>
                            <p class="home-process-card__text">
                                Automated testing, security audits, and zero-downtime deployment backed by ongoing 24/7 support.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ====== About Company Section ====== --}}
    <section class="py-5 bg-white">
        <div class="container py-lg-4">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="position-relative">
                        <img src="{{ asset('public/home/hytrix-img-1.jpeg') }}"
                             alt="Hytrix Technologies IT team in Lucknow"
                             class="img-fluid rounded-4 shadow-md"
                             style="border-radius: 24px; width: 100%; object-fit: cover; max-height: 480px;">
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-4">
                    <div class="section-title mb-4">
                        <span class="sp-color2 fw-bold text-uppercase" style="letter-spacing: 1px;">About Hytrix Technologies</span>
                        <h2>A Technology Partner Dedicated to Your Long-Term Success</h2>
                    </div>

                    <p class="text-dark">
                        Hytrix Technologies LLP is a premier IT services company based in Lucknow, Uttar Pradesh. We specialize in custom software engineering, scalable web applications, Android development, and data-driven digital marketing.
                    </p>

                    <p class="text-muted">
                        Our seasoned engineers combine deep domain expertise with cutting-edge technologies to solve complex operational challenges and deliver measurable business ROI.
                    </p>

                    <ul class="list-unstyled mt-4 mb-4">
                        <li class="d-flex align-items-center mb-2">
                            <i class="bx bx-check-circle text-primary fs-5 me-2"></i>
                            <span class="fw-semibold">Custom-tailored IT solutions aligned with business objectives</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="bx bx-check-circle text-primary fs-5 me-2"></i>
                            <span class="fw-semibold">Scalable, enterprise-grade architecture with zero compromises</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="bx bx-check-circle text-primary fs-5 me-2"></i>
                            <span class="fw-semibold">Modern, secure tech stack (PHP, Laravel, React, Kotlin, Cloud)</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bx bx-check-circle text-primary fs-5 me-2"></i>
                            <span class="fw-semibold">Transparent communication and responsive ongoing technical support</span>
                        </li>
                    </ul>

                    <a href="{{ route('about') }}" class="default-btn btn-bg-two">
                        Learn More About Us <i class='bx bx-chevron-right'></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- ====== Innovation & Values Section (Glassmorphism Cards) ====== --}}
    <section class="py-5 position-relative text-white"
             style="background: linear-gradient(135deg, rgba(4, 18, 55, 0.95) 0%, rgba(0, 18, 57, 0.92) 100%), url('{{ asset('public/assets/images/features-background.jpg') }}') center/cover no-repeat;">
        <div class="container py-lg-4">
            <div class="row align-items-center mb-5">
                <div class="col-lg-8">
                    <span class="text-info fw-bold text-uppercase" style="letter-spacing: 1.5px;">Core Principles</span>
                    <h2 class="text-white mt-1">Our Engineering &amp; Operational Values</h2>
                    <p class="text-white-50 mb-0">
                        The foundation of every line of code we write and every client relationship we build.
                    </p>
                </div>
            </div>

            <div class="row g-4">

                {{-- Innovation --}}
                <div class="col-lg-3 col-md-6">
                    <div class="home-value-card">
                        <div>
                            <div class="home-value-card__icon">
                                <i class='bx bx-bulb'></i>
                            </div>
                            <h3 class="home-value-card__title">INNOVATION</h3>
                            <p class="home-value-card__text">
                                Embracing evolving technologies, continuous learning, and state-of-the-art architectures.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Simplicity --}}
                <div class="col-lg-3 col-md-6">
                    <div class="home-value-card">
                        <div>
                            <div class="home-value-card__icon">
                                <i class='bx bx-intersect'></i>
                            </div>
                            <h3 class="home-value-card__title">SIMPLICITY</h3>
                            <p class="home-value-card__text">
                                Simplifying complex technology into clean, intuitive, and enjoyable digital experiences.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Quality --}}
                <div class="col-lg-3 col-md-6">
                    <div class="home-value-card">
                        <div>
                            <div class="home-value-card__icon">
                                <i class='bx bxs-medal'></i>
                            </div>
                            <h3 class="home-value-card__title">QUALITY</h3>
                            <p class="home-value-card__text">
                                Rigorous standards, clean code principles, and extensive testing for robust deliverables.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Focus --}}
                <div class="col-lg-3 col-md-6">
                    <div class="home-value-card">
                        <div>
                            <div class="home-value-card__icon">
                                <i class='bx bx-target-lock'></i>
                            </div>
                            <h3 class="home-value-card__title">FOCUS</h3>
                            <p class="home-value-card__text">
                                Laser focus on delivering measurable client outcomes, timely execution, and reliable support.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ====== Why Choose Us & Key Features ====== --}}
    <section class="py-5 bg-white">
        <div class="container py-lg-4">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="section-title mb-4">
                        <span class="sp-color1 fw-bold text-uppercase" style="letter-spacing: 1px;">Why Hytrix</span>
                        <h2>Why Leading Businesses Trust Hytrix Technologies</h2>
                        <p class="text-muted">
                            We combine technical excellence with business understanding to deliver reliable software solutions that drive lasting value.
                        </p>
                    </div>

                    <div class="row g-3">
                        <div class="col-12">
                            <div class="home-choose-card">
                                <div class="home-choose-card__icon">
                                    <i class='bx bx-group'></i>
                                </div>
                                <div>
                                    <h3 class="home-choose-card__title">Experienced Engineering Team</h3>
                                    <p class="home-choose-card__text">
                                        Full-stack developers, UI/UX designers, and QA engineers dedicated to bringing your product vision to life.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="home-choose-card">
                                <div class="home-choose-card__icon">
                                    <i class='bx bx-support'></i>
                                </div>
                                <div>
                                    <h3 class="home-choose-card__title">24/7 Dedicated Support</h3>
                                    <p class="home-choose-card__text">
                                        Proactive maintenance, performance monitoring, and responsive assistance whenever you need it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-4">
                    <div class="choose-img">
                        <img src="{{ url('public/assets/images/choose-img.jpg') }}"
                            alt="Why choose Hytrix Technologies for IT solutions"
                            class="img-fluid rounded-4 shadow-sm"
                            style="border-radius: 20px;">
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ====== Modern Symmetrical CTA Banner ====== --}}
    <section class="py-5" style="background: var(--color-bg-light);">
        <div class="container">
            <div class="home-cta-banner text-center">
                <span class="badge bg-white text-primary px-3 py-2 rounded-pill mb-3 fw-bold">Let's Collaborate</span>
                <h2>Ready to Build Your Next Digital Product?</h2>
                <p>
                    From custom web apps to enterprise software and cloud platforms, our technical team is ready to make your vision a reality.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                        Get A Free Consultation <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
