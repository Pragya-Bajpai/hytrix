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
{{-- ====== Web Hosting FAQ Section ====== --}}
<section class="web-faq-section py-5">

    <div class="container py-lg-4">

        {{-- FAQ Heading --}}
        <div class="row justify-content-center">

            <div class="col-lg-8 text-center">

                <div class="section-title mb-5">

                    <span class="sp-color2">
                        FREQUENTLY ASKED QUESTIONS
                    </span>

                    <h2>
                        Web Hosting FAQs
                    </h2>

                    <p class="margin-auto">
                        Find answers to common questions about web hosting,
                        server performance, security, domains, SSL and website
                        hosting requirements.
                    </p>

                </div>

            </div>

        </div>


        {{-- FAQ Accordion --}}
        <div class="row">

            <div class="col-lg-12">

                <div class="accordion web-faq" id="hostingFaqAccordion">


                    {{-- FAQ 1 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="hostingFaqHeadingOne">

                            <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#hostingFaqOne"
                                aria-expanded="true"
                                aria-controls="hostingFaqOne">

                                What web hosting services does Hytrix Technologies provide?

                            </button>

                        </h2>

                        <div
                            id="hostingFaqOne"
                            class="accordion-collapse collapse show"
                            aria-labelledby="hostingFaqHeadingOne"
                            data-bs-parent="#hostingFaqAccordion">

                            <div class="accordion-body">

                                Hytrix Technologies provides reliable web hosting
                                solutions for business websites, e-commerce
                                websites and web applications. Our hosting
                                solutions are designed for performance,
                                security, scalability and reliable website
                                availability.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 2 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="hostingFaqHeadingTwo">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#hostingFaqTwo"
                                aria-expanded="false"
                                aria-controls="hostingFaqTwo">

                                What is web hosting and why is it important?

                            </button>

                        </h2>

                        <div
                            id="hostingFaqTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="hostingFaqHeadingTwo"
                            data-bs-parent="#hostingFaqAccordion">

                            <div class="accordion-body">

                                Web hosting provides the server space and
                                infrastructure required to make your website
                                accessible on the internet. Reliable hosting
                                helps improve website performance, availability,
                                security and overall user experience.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 3 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="hostingFaqHeadingThree">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#hostingFaqThree"
                                aria-expanded="false"
                                aria-controls="hostingFaqThree">

                                How do I choose the right hosting plan for my website?

                            </button>

                        </h2>

                        <div
                            id="hostingFaqThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="hostingFaqHeadingThree"
                            data-bs-parent="#hostingFaqAccordion">

                            <div class="accordion-body">

                                The right hosting plan depends on your website
                                traffic, storage requirements, application
                                technology, database usage and expected future
                                growth. We can help you select a hosting
                                solution based on your specific requirements.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 4 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="hostingFaqHeadingFour">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#hostingFaqFour"
                                aria-expanded="false"
                                aria-controls="hostingFaqFour">

                                Is SSL certificate included with web hosting?

                            </button>

                        </h2>

                        <div
                            id="hostingFaqFour"
                            class="accordion-collapse collapse"
                            aria-labelledby="hostingFaqHeadingFour"
                            data-bs-parent="#hostingFaqAccordion">

                            <div class="accordion-body">

                                SSL availability depends on the selected hosting
                                plan and configuration. SSL helps secure data
                                transferred between your website and visitors
                                and enables HTTPS for your domain.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 5 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="hostingFaqHeadingFive">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#hostingFaqFive"
                                aria-expanded="false"
                                aria-controls="hostingFaqFive">

                                Will web hosting affect my website speed?

                            </button>

                        </h2>

                        <div
                            id="hostingFaqFive"
                            class="accordion-collapse collapse"
                            aria-labelledby="hostingFaqHeadingFive"
                            data-bs-parent="#hostingFaqAccordion">

                            <div class="accordion-body">

                                Yes. Hosting infrastructure can affect website
                                loading speed and performance. Server resources,
                                configuration, traffic, caching and website
                                optimization all contribute to overall website
                                performance.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 6 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="hostingFaqHeadingSix">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#hostingFaqSix"
                                aria-expanded="false"
                                aria-controls="hostingFaqSix">

                                Can you host Laravel and PHP websites?

                            </button>

                        </h2>

                        <div
                            id="hostingFaqSix"
                            class="accordion-collapse collapse"
                            aria-labelledby="hostingFaqHeadingSix"
                            data-bs-parent="#hostingFaqAccordion">

                            <div class="accordion-body">

                                Yes. Hosting can be configured for PHP and
                                Laravel-based websites according to their
                                server, PHP version, database, storage and
                                application requirements.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 7 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="hostingFaqHeadingSeven">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#hostingFaqSeven"
                                aria-expanded="false"
                                aria-controls="hostingFaqSeven">

                                Do you provide website backup and security support?

                            </button>

                        </h2>

                        <div
                            id="hostingFaqSeven"
                            class="accordion-collapse collapse"
                            aria-labelledby="hostingFaqHeadingSeven"
                            data-bs-parent="#hostingFaqAccordion">

                            <div class="accordion-body">

                                Hosting security and backup options can be
                                configured according to your website and hosting
                                requirements. Regular backups, SSL, access
                                protection and server-level security practices
                                can help protect your website and data.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 8 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="hostingFaqHeadingEight">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#hostingFaqEight"
                                aria-expanded="false"
                                aria-controls="hostingFaqEight">

                                Do you provide technical support for web hosting?

                            </button>

                        </h2>

                        <div
                            id="hostingFaqEight"
                            class="accordion-collapse collapse"
                            aria-labelledby="hostingFaqHeadingEight"
                            data-bs-parent="#hostingFaqAccordion">

                            <div class="accordion-body">

                                Yes. Technical assistance can be provided for
                                hosting configuration, website deployment,
                                domain-related settings, server issues and
                                other hosting requirements depending on the
                                selected service.

                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>
@endsection
