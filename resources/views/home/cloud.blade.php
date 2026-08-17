<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cloud Computing Services in India | Hytrix Technologies</title>

    <meta name="description"
          content="Hytrix Technologies provides cloud computing services in India to help businesses deploy, manage and scale applications with flexible, secure and reliable cloud solutions.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="Cloud Computing Services in India | Hytrix Technologies">
    <meta property="og:description" content="Flexible and scalable cloud computing solutions for businesses across India.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('public/assets/images/choose-img.jpg') }}">
    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== Cloud Computing Hero ====== --}}
    <div class="py-4 py-lg-5">
        <div class="container py-lg-5">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="choose-content mr-lg-20">
                        <div class="section-title">
                            <span class="sp-color2">CLOUD INFRASTRUCTURE SERVICES</span>
                            <h1>Cloud Computing Services in India</h1>
                        </div>
                        <p class="text-dark">
                            Hytrix Technologies provides enterprise-grade cloud computing services in India to help businesses deploy, manage, and scale digital applications with high availability and automated failover.
                        </p>
                        <p class="text-dark">
                            Our certified cloud architects design tailored AWS, Google Cloud, and Microsoft Azure architectures that maximize cost efficiency, ensure data compliance, and support rapid digital growth.
                        </p>
                        <a href="{{ route('contact') }}" class="default-btn btn-bg-two mt-3">
                            Discuss Cloud Architecture <i class='bx bx-chevron-right'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{ asset('public/assets/images/choose-img.jpg') }}"
                            alt="Cloud computing services in India by Hytrix Technologies"
                            class="img-fluid rounded shadow-sm">
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ====== Cloud Solutions Grid ====== --}}
    <section class="services-style-area py-5" style="background: var(--color-bg-light);">
        <div class="container py-lg-4">
            <div class="section-title text-center mb-5">
                <span class="sp-color1">Cloud Capabilities</span>
                <h2>Reliable Cloud Solutions for Modern Enterprises</h2>
                <p class="margin-auto">
                    We help organizations adopt resilient cloud native technologies tailored to their operational workloads.
                </p>
            </div>

            <div class="row g-4">

                {{-- Cloud Migration --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <i class='bx bx-cloud-upload'></i>
                        <h3>Cloud Migration</h3>
                        <p>
                            Seamlessly migrate legacy on-premise workloads to cloud infrastructure with zero downtime and structured security protocols.
                        </p>
                    </div>
                </div>

                {{-- Cloud Deployment --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <i class='bx bx-server'></i>
                        <h3>Automated CI/CD Deployment</h3>
                        <p>
                            Implement modern Docker containerization, Kubernetes clusters, and automated continuous delivery pipelines.
                        </p>
                    </div>
                </div>

                {{-- Scalable Infrastructure --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <i class='bx bx-layer'></i>
                        <h3>Scalable Cloud Architecture</h3>
                        <p>
                            Auto-scaling compute instances and load balancing that dynamically adjust server resources to traffic spikes.
                        </p>
                    </div>
                </div>

                {{-- Cloud Application Management --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <i class='bx bx-cog'></i>
                        <h3>24/7 Managed Cloud Services</h3>
                        <p>
                            Proactive uptime monitoring, security patch management, automated snapshot backups, and incident response.
                        </p>
                    </div>
                </div>

                {{-- Cloud Integration --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <i class='bx bx-transfer-alt'></i>
                        <h3>Hybrid &amp; Multi-Cloud Integration</h3>
                        <p>
                            Connect distributed cloud microservices with existing on-premises enterprise data lakes and ERP workflows.
                        </p>
                    </div>
                </div>

                {{-- Cloud Cost Optimization --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                        <i class='bx bx-tachometer'></i>
                        <h3>Cloud Cost Optimization (FinOps)</h3>
                        <p>
                            Audit server utilization, eliminate idle resources, and right-size instances to reduce monthly cloud expenditure.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ====== Benefits Section ====== --}}
    <div class="choose-area py-5">
        <div class="container py-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="choose-content mr-lg-20">
                        <div class="section-title">
                            <span class="sp-color1">WHY CLOUD COMPUTING?</span>
                            <h2>Strategic Business Advantages of the Cloud</h2>
                        </div>
                        <p class="text-dark">
                            Transitioning to the cloud eliminates capital expenditure on physical hardware, boosts disaster recovery resilience, and empowers your engineering team to ship new features faster.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class='bx bx-expand-alt'></i>
                                        <h3>Scalability</h3>
                                    </div>
                                    <p>Scale applications dynamically based on user demand.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class='bx bx-slider-alt'></i>
                                        <h3>Flexibility</h3>
                                    </div>
                                    <p>Deploy multi-region instances in minutes.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class='bx bx-shield-quarter'></i>
                                        <h3>Security</h3>
                                    </div>
                                    <p>Enterprise-grade encryption and access controls.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class='bx bx-trending-up'></i>
                                        <h3>High Uptime</h3>
                                    </div>
                                    <p>Redundant architecture with 99.9% uptime SLA.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{ asset('public/assets/images/choose-img1.jpg') }}"
                            alt="Scalable cloud computing solutions by Hytrix Technologies"
                            class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ====== CTA Section ====== --}}
    <section class="py-5" style="background: var(--color-bg-light);">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <h2 class="mb-3">Ready to Modernize Your Cloud Infrastructure?</h2>
                    <p class="text-muted mb-4">
                        Speak with a certified cloud architect at Hytrix Technologies to evaluate your architecture and build a migration roadmap.
                    </p>
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                        Get In Touch <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
