<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Custom Software Development Company in India | Hytrix Technologies</title>

    <meta name="description"
        content="Hytrix Technologies delivers custom software development, enterprise solutions, dedicated development teams, and QA automation services across India.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="Custom Software Development Services | Hytrix Technologies">
    <meta property="og:description"
        content="Collaborate with Hytrix Technologies for your enterprise software and digital transformation vision.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== Software Development Hero / Intro ====== --}}
    <div class="py-4 py-lg-5">
        <div class="container py-lg-5">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="choose-content mr-lg-20">
                        <div class="section-title">
                            <span class="sp-color2">ENTERPRISE SOFTWARE SOLUTIONS</span>
                            <h1>Custom Software Development Company in India</h1>
                        </div>
                        <p class="text-dark">
                            At Hytrix Technologies, we engineer bespoke software solutions that automate complex business processes, improve operational agility, and accelerate digital transformation for organizations of all scales.
                        </p>
                        <p class="text-dark">
                            From initial discovery and architectural design to full-lifecycle development and ongoing maintenance, our senior software engineers build robust, scalable, and secure systems tailored precisely to your operational workflow.
                        </p>
                        <a href="{{ route('contact') }}" class="default-btn btn-bg-two mt-3">
                            Discuss Your Project <i class='bx bx-chevron-right'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{ asset('public/assets/images/about/hytrix-img-4.jpeg') }}"
                            alt="Custom software development company in India by Hytrix Technologies"
                            class="img-fluid rounded shadow-sm">
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ====== Software Services Grid ====== --}}
    <div class="security-area py-5" style="background: var(--color-bg-light);">
        <div class="container py-lg-4">
            <div class="section-title text-center mb-5">
                <span class="sp-color1">Our Solutions</span>
                <h2 class="mb-2">Comprehensive Software Development Offerings</h2>
                <p class="margin-auto">
                    From ideation to continuous deployment, we provide end-to-end software engineering tailored to startups and established enterprises.
                </p>
            </div>

            <div class="row g-4">

                {{-- Custom Software Development --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-code-block'></i>
                        </div>
                        <h4>Custom Software Development</h4>
                        <p>
                            Comprehensive full-lifecycle engineering covering consultation, modern architecture, development, and ongoing support for complex business systems.
                        </p>
                    </div>
                </div>

                {{-- Mobile Application Development --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-mobile-alt'></i>
                        </div>
                        <h4>Mobile Application Development</h4>
                        <p>
                            Impactful and intuitive native and cross-platform apps built for iOS and Android that drive engagement and solve core operational challenges.
                        </p>
                    </div>
                </div>

                {{-- Dedicated Development Center --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-group'></i>
                        </div>
                        <h4>Dedicated Development Teams</h4>
                        <p>
                            Scale your in-house capabilities with dedicated, agile engineering teams that integrate smoothly into your workflows with complete transparency.
                        </p>
                    </div>
                </div>

                {{-- Web Application Development --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-globe'></i>
                        </div>
                        <h4>Web Application Development</h4>
                        <p>
                            Scalable, responsive web platforms built for e-Commerce, FinTech, EdTech, and enterprise SaaS systems using cutting-edge frameworks.
                        </p>
                    </div>
                </div>

                {{-- QA Automation Service --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-check-shield'></i>
                        </div>
                        <h4>QA Automation Services</h4>
                        <p>
                            Accelerate release velocity and maintain rigorous code quality through automated regression testing, API checks, and load simulations.
                        </p>
                    </div>
                </div>

                {{-- Software Testing and QA --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <div class="icon">
                            <i class='bx bx-test-tube'></i>
                        </div>
                        <h3>Software Testing &amp; QA</h3>
                        <p>
                            Manual and exploratory QA audits that identify edge-case vulnerabilities, performance bottlenecks, and usability defects before launch.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ====== CTA Section ====== --}}
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <h2 class="mb-3">Let's Build Something Exceptional</h2>
                    <p class="text-muted mb-4">
                        Speak directly with our technical leads to architect a custom software solution designed around your business goals.
                    </p>
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                        Get Started Today <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
