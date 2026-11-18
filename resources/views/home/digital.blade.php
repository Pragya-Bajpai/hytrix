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
                        <div class="section-title mt-5">
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
{{-- ====== Digital Marketing FAQ Section ====== --}}
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
                        Digital Marketing FAQs
                    </h2>

                    <p class="margin-auto">
                        Find answers to common questions about SEO, social media
                        marketing, PPC advertising, content marketing and online
                        brand growth.
                    </p>

                </div>

            </div>

        </div>


        {{-- FAQ Accordion --}}
        <div class="row">

            <div class="col-lg-12">

                <div class="accordion web-faq" id="digitalFaqAccordion">


                    {{-- FAQ 1 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="digitalFaqHeadingOne">

                            <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#digitalFaqOne"
                                aria-expanded="true"
                                aria-controls="digitalFaqOne">

                                What digital marketing services does Hytrix Technologies provide?

                            </button>

                        </h2>

                        <div
                            id="digitalFaqOne"
                            class="accordion-collapse collapse show"
                            aria-labelledby="digitalFaqHeadingOne"
                            data-bs-parent="#digitalFaqAccordion">

                            <div class="accordion-body">

                                Hytrix Technologies provides digital marketing
                                services including SEO, on-page SEO, off-page SEO,
                                social media marketing, PPC advertising, content
                                marketing, local SEO and online brand promotion.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 2 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="digitalFaqHeadingTwo">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#digitalFaqTwo"
                                aria-expanded="false"
                                aria-controls="digitalFaqTwo">

                                How can digital marketing help my business?

                            </button>

                        </h2>

                        <div
                            id="digitalFaqTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="digitalFaqHeadingTwo"
                            data-bs-parent="#digitalFaqAccordion">

                            <div class="accordion-body">

                                Digital marketing can help businesses increase
                                online visibility, reach potential customers,
                                generate qualified leads, improve brand awareness
                                and build a stronger online presence.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 3 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="digitalFaqHeadingThree">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#digitalFaqThree"
                                aria-expanded="false"
                                aria-controls="digitalFaqThree">

                                What is SEO and why is it important?

                            </button>

                        </h2>

                        <div
                            id="digitalFaqThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="digitalFaqHeadingThree"
                            data-bs-parent="#digitalFaqAccordion">

                            <div class="accordion-body">

                                SEO, or Search Engine Optimization, helps improve
                                a website's visibility in search engine results.
                                A well-planned SEO strategy can help attract relevant
                                organic traffic and increase opportunities for
                                leads and conversions.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 4 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="digitalFaqHeadingFour">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#digitalFaqFour"
                                aria-expanded="false"
                                aria-controls="digitalFaqFour">

                                Do you provide SEO services for businesses in India?

                            </button>

                        </h2>

                        <div
                            id="digitalFaqFour"
                            class="accordion-collapse collapse"
                            aria-labelledby="digitalFaqHeadingFour"
                            data-bs-parent="#digitalFaqAccordion">

                            <div class="accordion-body">

                                Yes. We provide SEO solutions for businesses
                                across India, including keyword research,
                                on-page optimization, technical SEO, content
                                optimization, local SEO and off-page SEO.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 5 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="digitalFaqHeadingFive">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#digitalFaqFive"
                                aria-expanded="false"
                                aria-controls="digitalFaqFive">

                                How long does it take to see SEO results?

                            </button>

                        </h2>

                        <div
                            id="digitalFaqFive"
                            class="accordion-collapse collapse"
                            aria-labelledby="digitalFaqHeadingFive"
                            data-bs-parent="#digitalFaqAccordion">

                            <div class="accordion-body">

                                SEO results depend on factors such as website
                                condition, competition, keywords, content,
                                technical optimization and backlink profile.
                                SEO is a long-term process and results can vary
                                from one website to another.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 6 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="digitalFaqHeadingSix">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#digitalFaqSix"
                                aria-expanded="false"
                                aria-controls="digitalFaqSix">

                                Do you provide social media marketing services?

                            </button>

                        </h2>

                        <div
                            id="digitalFaqSix"
                            class="accordion-collapse collapse"
                            aria-labelledby="digitalFaqHeadingSix"
                            data-bs-parent="#digitalFaqAccordion">

                            <div class="accordion-body">

                                Yes. We can help businesses with social media
                                strategy, content planning, creative campaigns,
                                audience engagement and social media promotion
                                across relevant platforms.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 7 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="digitalFaqHeadingSeven">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#digitalFaqSeven"
                                aria-expanded="false"
                                aria-controls="digitalFaqSeven">

                                Do you provide Google Ads and PPC advertising?

                            </button>

                        </h2>

                        <div
                            id="digitalFaqSeven"
                            class="accordion-collapse collapse"
                            aria-labelledby="digitalFaqHeadingSeven"
                            data-bs-parent="#digitalFaqAccordion">

                            <div class="accordion-body">

                                Yes. We can create and manage PPC advertising
                                campaigns focused on reaching relevant audiences,
                                generating leads and improving advertising
                                performance based on your campaign objectives.

                            </div>

                        </div>

                    </div>


                    {{-- FAQ 8 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="digitalFaqHeadingEight">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#digitalFaqEight"
                                aria-expanded="false"
                                aria-controls="digitalFaqEight">

                                How much does digital marketing cost?

                            </button>

                        </h2>

                        <div
                            id="digitalFaqEight"
                            class="accordion-collapse collapse"
                            aria-labelledby="digitalFaqHeadingEight"
                            data-bs-parent="#digitalFaqAccordion">

                            <div class="accordion-body">

                                Digital marketing cost depends on the services
                                required, campaign goals, target audience,
                                competition and marketing strategy. We can
                                recommend a suitable plan after understanding
                                your business requirements.

                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>
@endsection
