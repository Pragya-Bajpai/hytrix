<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>API Integration &amp; Development Services in India | Hytrix Technologies</title>

    <meta name="description"
        content="Hytrix Technologies provides seamless third-party API integration and custom RESTful API development services in India for payment gateways, CRMs, social media, shipping, and travel platforms.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="API Integration Services | Hytrix Technologies">
    <meta property="og:description"
        content="Seamless API integration services connecting your platforms with payment gateways, advertising networks, and third-party tools.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== API Integration Intro ====== --}}
    <div class="py-4 py-lg-5">
        <div class="container py-lg-5">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="choose-content mr-lg-20">
                        <div class="section-title">
                            <span class="sp-color2">SYSTEM INTERCONNECTIVITY</span>
                            <h1>Custom API Integration &amp; Development Services</h1>
                        </div>
                        <p class="text-dark">
                            Connect your applications, automate data pipelines, and extend platform functionality with robust API integration solutions from Hytrix Technologies.
                        </p>
                        <p class="text-dark">
                            Our software engineers specialize in connecting complex software ecosystems with payment processors, ERP systems, travel engines, shipping providers, and marketing platforms through secure, well-documented RESTful and GraphQL APIs.
                        </p>
                        <a href="{{ route('contact') }}" class="default-btn btn-bg-two mt-3">
                            Connect Your Systems <i class='bx bx-chevron-right'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{ asset('public/assets/images/about/webtype.jpg') }}"
                            alt="API integration and development by Hytrix Technologies"
                            class="img-fluid rounded shadow-sm">
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ====== API Capabilities ====== --}}
    <section class="services-style-area py-5" style="background: var(--color-bg-light);">
        <div class="container py-lg-4">
            <div class="section-title text-center mb-5">
                <span class="sp-color1">Integration Ecosystem</span>
                <h2>Reliable Third-Party API Integrations</h2>
                <p class="margin-auto">
                    We bridge the gap between your applications and external web services with zero data loss and maximum throughput.
                </p>
            </div>

            <div class="row g-4">

                {{-- Payment Gateways --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card h-100">
                        <i class='bx bx-credit-card'></i>
                        <h3>Payment Gateways</h3>
                        <p>
                            Secure integration with Razorpay, Stripe, PayPal, Paytm, Authorize.net, and UPI for seamless multi-currency checkout.
                        </p>
                    </div>
                </div>

                {{-- Advertising & Marketing APIs --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card h-100">
                        <i class='bx bx-target-lock'></i>
                        <h3>Ad Networks &amp; DSPs</h3>
                        <p>
                            Direct data sync with Google Ads, Bing Ads, Meta Graph API, and TikTok Ads for automated campaign reporting.
                        </p>
                    </div>
                </div>

                {{-- Shipping & Logistics --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card h-100">
                        <i class='bx bx-package'></i>
                        <h3>Shipping &amp; Logistics</h3>
                        <p>
                            Real-time rate calculation, automated airway bill (AWB) generation, and live package tracking with Shiprocket, FedEx, and DHL.
                        </p>
                    </div>
                </div>

                {{-- Social Media APIs --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card h-100">
                        <i class='bx bxl-meta'></i>
                        <h3>Social &amp; Auth APIs</h3>
                        <p>
                            Social login via Google, Apple, and Facebook, alongside automated social feed publishing and user profile sync.
                        </p>
                    </div>
                </div>

                {{-- Travel & GDS APIs --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card h-100">
                        <i class='bx bx-paper-plane'></i>
                        <h3>Travel &amp; Booking APIs</h3>
                        <p>
                            Integration with GDS engines like Amadeus, Sabre, and Expedia for live flight, hotel, and car rental bookings.
                        </p>
                    </div>
                </div>

                {{-- Custom REST & Webhooks --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card h-100">
                        <i class='bx bx-code-curly'></i>
                        <h3>Custom RESTful APIs</h3>
                        <p>
                            Design, implementation, and documentation of secure internal microservices with OAuth2, JWT, and webhook event architecture.
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
                    <h2 class="mb-3">Need Custom API Integration?</h2>
                    <p class="text-muted mb-4">
                        Speak with our system architects to build secure, high-throughput interfaces that connect your tech stack.
                    </p>
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                        Schedule Consultation <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
