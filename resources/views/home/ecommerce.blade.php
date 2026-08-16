<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Commerce Website Development Company in India | Hytrix Technologies</title>

    <meta name="description"
        content="Hytrix Technologies builds high-converting, scalable e-commerce websites and multi-vendor marketplaces with secure payment gateways and modern shopping experiences.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="E-Commerce Development Services | Hytrix Technologies">
    <meta property="og:description"
        content="Scale your online retail business with cutting-edge e-commerce platforms built by Hytrix Technologies.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== E-Commerce Intro Hero ====== --}}
    <div class="py-4 py-lg-5">
        <div class="container py-lg-5">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="choose-content mr-lg-20">
                        <div class="section-title">
                            <span class="sp-color2">ONLINE STORE SOLUTIONS</span>
                            <h1>E-Commerce Website Development in India</h1>
                        </div>
                        <p class="text-dark">
                            Hytrix Technologies empowers retailers, brands, and startups with next-generation e-commerce platforms designed for speed, conversions, and seamless scalability.
                        </p>
                        <p class="text-dark">
                            Whether you need a custom store, WooCommerce, Shopify, or enterprise marketplace architecture, we deliver intuitive product discovery, fast checkout flows, and automated inventory systems.
                        </p>
                        <a href="{{ route('contact') }}" class="default-btn btn-bg-two mt-3">
                            Launch Your Online Store <i class='bx bx-chevron-right'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{ asset('public/assets/images/choose-img.jpg') }}"
                            alt="E-commerce development company in India"
                            class="img-fluid rounded shadow-sm">
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ====== E-Commerce Feature Breakdown ====== --}}
    <section class="services-style-area py-5" style="background: var(--color-bg-light);">
        <div class="container py-lg-4">
            <div class="section-title text-center mb-5">
                <span class="sp-color1">Why Choose E-Commerce</span>
                <h2>Accelerate Your Business With Modern Online Retail</h2>
                <p class="margin-auto">
                    Transform the way you sell online with comprehensive e-commerce solutions crafted for maximum performance.
                </p>
            </div>

            <div class="row g-4">

                {{-- Card 1: Why E-Commerce Solutions --}}
                <div class="col-lg-6 mb-4">
                    <div class="security-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <i class='bx bx-store-alt me-2' style="font-size: 32px; color: var(--color-accent-link);"></i>
                            <h3 class="mb-0 ms-2">Why Invest in E-Commerce?</h3>
                        </div>
                        <ul class="about-list text-start ps-0 list-unstyled">
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bxs-check-circle text-primary me-2"></i>
                                <span>Sell products &amp; digital services globally 24/7</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bxs-check-circle text-primary me-2"></i>
                                <span>Higher conversion rates with streamlined one-click checkout</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bxs-check-circle text-primary me-2"></i>
                                <span>Direct-to-consumer reach without intermediaries</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bxs-check-circle text-primary me-2"></i>
                                <span>Automated inventory, tax, and multi-currency billing</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bxs-check-circle text-primary me-2"></i>
                                <span>Modern, mobile-responsive shopping experience</span>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Card 2: What is covered --}}
                <div class="col-lg-6 mb-4">
                    <div class="security-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <i class='bx bx-check-double me-2' style="font-size: 32px; color: var(--color-accent-link);"></i>
                            <h3 class="mb-0 ms-2">Features &amp; Capabilities Included</h3>
                        </div>
                        <ul class="about-list text-start ps-0 list-unstyled">
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bxs-check-circle text-primary me-2"></i>
                                <span>Multiple payment gateways (Stripe, Razorpay, PayPal, UPI)</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bxs-check-circle text-primary me-2"></i>
                                <span>Comprehensive product catalog with variations &amp; filters</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bxs-check-circle text-primary me-2"></i>
                                <span>Intuitive admin control panel for order &amp; stock management</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bxs-check-circle text-primary me-2"></i>
                                <span>Automated customer notifications via Email &amp; SMS</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bxs-check-circle text-primary me-2"></i>
                                <span>Coupons, discounts, and promotional reward systems</span>
                            </li>
                        </ul>
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
                    <h2 class="mb-3">Ready to Scale Your Online Revenue?</h2>
                    <p class="text-muted mb-4">
                        Contact our e-commerce specialists to discuss your custom storefront, integration needs, or replatforming.
                    </p>
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                        Get A Free Quote <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
