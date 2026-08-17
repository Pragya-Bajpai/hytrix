<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Digital Marketing Company in India | SEO &amp; Growth Services | Hytrix Technologies</title>

    <meta name="description"
        content="Hytrix Technologies provides data-driven digital marketing services in India, including SEO, content marketing, social media marketing, PPC campaigns, and brand growth strategies.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="Digital Marketing Services | Hytrix Technologies">
    <meta property="og:description"
        content="Strategizing impactful digital campaigns to elevate your brand's online presence.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== Digital Marketing Intro ====== --}}
    <div class="py-4 py-lg-5">
        <div class="container py-lg-5">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="choose-content mr-lg-20">
                        <div class="section-title">
                            <span class="sp-color2">GROWTH &amp; PERFORMANCE MARKETING</span>
                            <h1>Digital Marketing Company in India</h1>
                        </div>
                        <p class="text-dark">
                            Elevate your brand's digital visibility and drive high-intent qualified leads. At Hytrix Technologies, our growth specialists deploy data-backed digital marketing strategies that turn online traffic into loyal customers.
                        </p>
                        <p class="text-dark">
                            From organic Search Engine Optimization (SEO) and content marketing to targeted pay-per-click (PPC) and social media campaigns, we provide measurable ROI across every channel.
                        </p>
                        <a href="{{ route('contact') }}" class="default-btn btn-bg-two mt-3">
                            Claim Free SEO Audit <i class='bx bx-chevron-right'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{ asset('public/assets/images/choose-img1.jpg') }}"
                            alt="Digital marketing company in India by Hytrix Technologies"
                            class="img-fluid rounded shadow-sm">
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ====== Digital Marketing Capabilities ====== --}}
    <section class="services-style-area py-5" style="background: var(--color-bg-light);">
        <div class="container py-lg-4">
            <div class="section-title text-center mb-5">
                <span class="sp-color1">Our Marketing Solutions</span>
                <h2 class="mb-2">Data-Driven Channels to Scale Your Brand</h2>
                <p class="margin-auto">
                    We craft tailored campaigns designed to maximize your brand reach, user engagement, and customer acquisition.
                </p>
            </div>

            <div class="row g-4">

                {{-- Content Marketing --}}
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-edit-alt'></i>
                        </div>
                        <h4>Content Marketing</h4>
                        <p>
                            High-quality, search-optimized articles, blogs, and landing pages that establish domain authority and educate your target audience.
                        </p>
                    </div>
                </div>

                {{-- Social Media Marketing --}}
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bxl-facebook-circle'></i>
                        </div>
                        <h4>Social Media Marketing</h4>
                        <p>
                            Strategic community building and paid advertising campaigns across LinkedIn, Instagram, Meta, and Twitter to amplify brand awareness.
                        </p>
                    </div>
                </div>

                {{-- SEO & Search Visibility --}}
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-search-alt'></i>
                        </div>
                        <h4>Search Engine Optimization</h4>
                        <p>
                            On-page, technical, and off-page SEO optimizations to rank your business at the top of Google for competitive commercial keywords.
                        </p>
                    </div>
                </div>

                {{-- Personal & Corporate Branding --}}
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-user-pin'></i>
                        </div>
                        <h3>Brand Identity &amp; Positioning</h3>
                        <p>
                            Distinctive visual identities, brand guidelines, and executive thought leadership programs that inspire trust and recognition.
                        </p>
                    </div>
                </div>

                {{-- Local SEO & Marketing --}}
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-map-pin'></i>
                        </div>
                        <h4>Location-Based SEO</h4>
                        <p>
                            Google Business Profile management, local citation audits, and geo-targeted ads that dominate local search results.
                        </p>
                    </div>
                </div>

                {{-- Analytics & Conversion Optimization --}}
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-line-chart'></i>
                        </div>
                        <h4>Data Analytics &amp; CRO</h4>
                        <p>
                            In-depth funnel analysis, heatmapping, and A/B split testing to maximize your website's conversion rate and lifetime customer value.
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
                    <h2 class="mb-3">Ready to Accelerate Your Online Growth?</h2>
                    <p class="text-muted mb-4">
                        Speak with our digital strategists to uncover untapped opportunities and create a custom growth roadmap for your business.
                    </p>
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                        Schedule A Consultation <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
