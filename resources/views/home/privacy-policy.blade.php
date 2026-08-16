<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Privacy Policy | Hytrix Technologies</title>

    <meta name="description"
        content="Read the Privacy Policy of Hytrix Technologies regarding data collection, usage, protection, and cookies.">

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
                    <span class="hero-badge">Legal</span>
                    <h1>Privacy Policy</h1>
                    <p>
                        How we collect, protect, and handle your information at Hytrix Technologies.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ====== Policy Content ====== --}}
    <div class="py-5" style="background: var(--color-bg-light);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="card shadow-sm border p-4 p-md-5 bg-white rounded">
                        <div class="card-body p-0">

                            <p class="lead">
                                Welcome to <strong>Hytrix Technology LLP</strong> (“we”, “our”, or “us”). We respect your privacy and
                                are committed to protecting your personal information collected through our website
                                <a href="https://hytrix.in/" target="_blank">hytrix.in</a> (“Website”) and related services.
                            </p>

                            <hr class="my-4">

                            <h5 class="fw-bold">1. Information We Collect</h5>
                            <p class="text-muted">
                                We may collect the following personal information when you interact with our Website:
                            </p>
                            <ul class="text-muted">
                                <li>Name, email address, phone number</li>
                                <li>Company and project details (if provided)</li>
                                <li>Information submitted through contact forms or inquiries</li>
                                <li>Technical information such as IP address, browser type, cookies</li>
                            </ul>

                            <h5 class="mt-4 fw-bold">2. How We Use Your Information</h5>
                            <p class="text-muted">
                                We use the information we collect to:
                            </p>
                            <ul class="text-muted">
                                <li>Respond to your requests and inquiries</li>
                                <li>Provide and improve our services, including web development, software development, app development, and digital marketing solutions</li>
                                <li>Communicate updates, offers or service notifications</li>
                                <li>Analyze site usage to enhance user experience</li>
                            </ul>

                            <h5 class="mt-4 fw-bold">3. Cookies and Tracking</h5>
                            <p class="text-muted">
                                Our Website may use cookies and similar technologies to collect information about
                                your browsing behavior, to improve your user experience, and to analyze trends.
                                You can disable cookies through your browser settings if you prefer not to allow them.
                            </p>

                            <h5 class="mt-4 fw-bold">4. Sharing Your Information</h5>
                            <p class="text-muted">
                                We do not sell, trade, or rent your personal information to third parties. We may share information with trusted third-party service providers who assist us in operating our Website and conducting our business, provided they agree to keep this information confidential.
                            </p>

                            <h5 class="mt-4 fw-bold">5. Data Security</h5>
                            <p class="text-muted">
                                We implement appropriate technical and organizational measures to safeguard your personal data from unauthorized access, loss, misuse, or alteration.
                            </p>

                            <h5 class="mt-4 fw-bold">6. Contact Us</h5>
                            <p class="text-muted mb-0">
                                If you have any questions regarding this Privacy Policy, please contact us at: <br>
                                <strong>Hytrix Technology LLP</strong> <br>
                                D-54, Arjun Tower, Vibhuti Khand, Lucknow, Uttar Pradesh 226010 <br>
                                Email: <a href="mailto:info@hytrix.in">info@hytrix.in</a>
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection