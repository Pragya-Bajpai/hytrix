<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Terms &amp; Conditions | Hytrix Technologies</title>

    <meta name="description"
        content="Terms and Conditions governing the use of Hytrix Technologies website and services.">

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
                    <h1>Terms &amp; Conditions</h1>
                    <p>
                        Terms of service and operational guidelines for Hytrix Technologies.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ====== Terms Content ====== --}}
    <div class="py-5" style="background: var(--color-bg-light);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="card shadow-sm border p-4 p-md-5 bg-white rounded">
                        <div class="card-body p-0">

                            <p class="lead">
                                Welcome to <strong>Hytrix Technology LLP</strong>. By accessing or using our website
                                <a href="https://hytrix.in" target="_blank">hytrix.in</a> and our services, you agree
                                to comply with and be bound by the following Terms &amp; Conditions. If you do not agree
                                with any part of these terms, please do not use our website or services.
                            </p>

                            <hr class="my-4">

                            <h5 class="fw-bold">1. Company Information</h5>
                            <p class="text-muted">
                                Hytrix Technology LLP provides services including but not limited to website development,
                                software development, mobile application development, digital marketing, and IT solutions.
                            </p>

                            <h5 class="mt-4 fw-bold">2. Use of Website</h5>
                            <ul class="text-muted">
                                <li>You agree to use this website only for lawful purposes.</li>
                                <li>You must not misuse the website by introducing viruses or malicious code.</li>
                                <li>Unauthorized use of this website may give rise to a claim for damages.</li>
                            </ul>

                            <h5 class="mt-4 fw-bold">3. Intellectual Property Rights</h5>
                            <p class="text-muted">
                                All content on this website, including text, graphics, logos, images, code, and design,
                                is the property of Hytrix Technology LLP unless otherwise stated. Unauthorized reproduction
                                or distribution is strictly prohibited.
                            </p>

                            <h5 class="mt-4 fw-bold">4. Services &amp; Payments</h5>
                            <ul class="text-muted">
                                <li>All service details, pricing, and timelines will be shared separately via proposal or agreement.</li>
                                <li>Payments once made are non-refundable unless explicitly mentioned in a written agreement.</li>
                                <li>Delays caused due to missing inputs or approvals from the client will affect delivery timelines.</li>
                            </ul>

                            <h5 class="mt-4 fw-bold">5. Client Responsibilities</h5>
                            <p class="text-muted">
                                Clients are responsible for providing all necessary assets, content, credentials, and approvals required for the timely execution of services.
                            </p>

                            <h5 class="mt-4 fw-bold">6. Limitation of Liability</h5>
                            <p class="text-muted">
                                Hytrix Technology LLP shall not be liable for any direct, indirect, incidental, or consequential damages resulting from the use or inability to use our services or website.
                            </p>

                            <h5 class="mt-4 fw-bold">7. Contact Information</h5>
                            <p class="text-muted mb-0">
                                For any queries regarding these Terms &amp; Conditions, please reach out to us at: <br>
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