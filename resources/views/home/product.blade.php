<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ready-to-Deploy Software Products &amp; Demos | Hytrix Technologies</title>

    <meta name="description"
        content="Explore ready-to-deploy software products and demo applications from Hytrix Technologies, including MLM software, real estate platforms, microfinance systems, and booking solutions.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== Hero Banner ====== --}}
    <section class="portfolio-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <span class="hero-badge">Products</span>
                    <h1>Our Software Products &amp; Solutions</h1>
                    <p>
                        Turnkey, pre-built enterprise software platforms ready for custom branding and rapid deployment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ====== Products Grid ====== --}}
    <section class="services-area-four py-5" style="background: var(--color-bg-light);">
        <div class="container py-lg-4">
            <div class="section-title text-center mb-5">
                <span class="sp-color1">Demo Solutions</span>
                <h2>Featured Software Products</h2>
                <p class="margin-auto">
                    Explore our ready-made vertical solutions built for high scalability, security, and intuitive user experiences.
                </p>
            </div>

            <div class="row g-4 justify-content-center">

                {{-- MLM Software --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="portfolio-card h-100">
                        <div class="portfolio-card__image-wrap">
                            <img src="{{ asset('public/assets/images/product/Untitled-25.jpg') }}" alt="MLM Software Demo" class="img-fluid">
                            <div class="portfolio-card__overlay">
                                <a href="{{ route('contact') }}" class="portfolio-card__view-btn">
                                    <i class='bx bx-play-circle'></i> Request Demo
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card__body">
                            <span class="portfolio-card__category">Multi-Level Marketing</span>
                            <h3 class="portfolio-card__title">MLM Software System</h3>
                        </div>
                    </div>
                </div>

                {{-- Real Estate --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="portfolio-card h-100">
                        <div class="portfolio-card__image-wrap">
                            <img src="{{ asset('public/assets/images/product/Untitled-24.jpg') }}" alt="Real Estate Demo" class="img-fluid">
                            <div class="portfolio-card__overlay">
                                <a href="{{ route('contact') }}" class="portfolio-card__view-btn">
                                    <i class='bx bx-play-circle'></i> Request Demo
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card__body">
                            <span class="portfolio-card__category">Property Portal</span>
                            <h3 class="portfolio-card__title">Real Estate Platform</h3>
                        </div>
                    </div>
                </div>

                {{-- Micro Finance --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="portfolio-card h-100">
                        <div class="portfolio-card__image-wrap">
                            <img src="{{ asset('public/assets/images/product/Untitled-21.jpg') }}" alt="Micro Finance Demo" class="img-fluid">
                            <div class="portfolio-card__overlay">
                                <a href="{{ route('contact') }}" class="portfolio-card__view-btn">
                                    <i class='bx bx-play-circle'></i> Request Demo
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card__body">
                            <span class="portfolio-card__category">FinTech Banking</span>
                            <h3 class="portfolio-card__title">Micro Finance Suite</h3>
                        </div>
                    </div>
                </div>

                {{-- Cab Booking --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="portfolio-card h-100">
                        <div class="portfolio-card__image-wrap">
                            <img src="{{ asset('public/assets/images/product/Untitled-22.jpg') }}" alt="Cab Booking Demo" class="img-fluid">
                            <div class="portfolio-card__overlay">
                                <a href="{{ route('contact') }}" class="portfolio-card__view-btn">
                                    <i class='bx bx-play-circle'></i> Request Demo
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card__body">
                            <span class="portfolio-card__category">Mobility &amp; Dispatch</span>
                            <h3 class="portfolio-card__title">Cab Booking System</h3>
                        </div>
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
                    <h2 class="mb-3">Need a Custom Software Solution?</h2>
                    <p class="text-muted mb-4">
                        We can customize any of our ready-to-deploy platforms or architect a completely custom solution for your business.
                    </p>
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                        Talk To Our Team <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
