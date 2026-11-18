<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Web Development Company in India | Web Development Services | Hytrix
    </title>

    <meta name="description"
        content="Hytrix Technologies is a web development company in India providing custom website development, web applications, PHP, Laravel and responsive web development services for businesses.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="Web Development Company in India | Hytrix Technologies">

    <meta property="og:description"
        content="Custom web development and web application development services for businesses across India.">

    <meta property="og:type" content="website">

    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="og:image" content="{{ asset('public/assets/images/about/web-development-services.jpg') }}">

    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

{{-- ====== Styles for this page are in style.css (.tech-card, .web-service-box) ====== --}}

@extends('home.layout.main')

@section('content')
    <!-- =========================
             WEB DEVELOPMENT INTRO
        ========================= -->

    <div class="py-4 py-lg-5">

        <div class="container py-lg-5">

          <div class="row align-items-center">

    <!-- Image First -->
    <div class="col-lg-6 order-1 order-lg-2">
        <div class="choose-img">
            <img
                src="{{ asset('public/assets/images/about/web.jpg') }}"
                alt="Web development company in India - Hytrix Technologies"
                width="600"
                height="450"
                loading="eager">
        </div>
    </div>

    <!-- Heading / Content -->
    <div class="col-lg-6 order-2 order-lg-1">
        <div class="choose-content mr-lg-20">

            <div class="section-title mt-5">
                <span class="sp-color2">
                    WEB DEVELOPMENT SERVICES
                </span>

                <h1>
                    Web Development Company in India
                </h1>
            </div>

            <p class="text-dark">
                Hytrix Technologies is a web development company in
                India providing custom website development and web
                application development services for businesses,
                organizations and startups.
            </p>

            <p class="text-dark">
                We create responsive, user-friendly and scalable
                websites using modern web technologies. Our team
                focuses on understanding your business requirements
                and developing web solutions that provide a smooth
                user experience across desktop, tablet and mobile
                devices.
            </p>

            <p class="text-dark">
                Based in Lucknow, we work with businesses across India
                to build websites and web applications that support
                their digital presence, business operations and
                long-term growth.
            </p>

        </div>
    </div>

</div>

            <!-- =========================
                     WEB DEVELOPMENT PROCESS
                ========================= -->

            <div class="row align-items-center py-5">

                <div class="col-lg-6">

                    <div class="choose-img">

                        <img src="{{ asset('public/assets/images/about/website.jpg') }}"
                            alt="Custom website development services by Hytrix Technologies" width="600" height="450"
                            loading="lazy">

                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="about-content ml-25">

                        <div class="section-title">

                            <span class="sp-color1">
                                CUSTOM WEB DEVELOPMENT
                            </span>

                            <h2>
                                Custom Website & Web Application Development
                            </h2>

                        </div>

                        <p>
                            At Hytrix Technologies, we develop customized web
                            solutions based on your business goals and technical
                            requirements. From business websites to web
                            applications, our development process focuses on
                            performance, usability, scalability and responsive
                            design.
                        </p>

                        <p>
                            Our developers work with technologies such as PHP,
                            Laravel, JavaScript, AJAX, jQuery and other modern web
                            technologies to create practical and scalable digital
                            solutions.
                        </p>

                        <ul class="about-list text-start">

                            <h3 class="title mb-2">
                                Our Web Development Services
                            </h3>

                            <li>
                                <i class="bx bxs-check-circle"></i>
                                Custom Website Development
                            </li>

                            <li>
                                <i class="bx bxs-check-circle"></i>
                                Responsive Web Development
                            </li>

                            <li>
                                <i class="bx bxs-check-circle"></i>
                                Web Application Development
                            </li>

                            <li>
                                <i class="bx bxs-check-circle"></i>
                                PHP Web Development
                            </li>

                            <li>
                                <i class="bx bxs-check-circle"></i>
                                Laravel Web Development
                            </li>

                            <li>
                                <i class="bx bxs-check-circle"></i>
                                JavaScript & AJAX Development
                            </li>

                            <li>
                                <i class="bx bxs-check-circle"></i>
                                jQuery Development
                            </li>

                        </ul>

                    </div>

                </div>

            </div>


            <!-- =========================
                     WHY CHOOSE US
                ========================= -->

            <div class="row justify-content-center py-4 mb-3">

                <div class="col-lg-9 text-center">

                    <div class="section-title">

                        <span class="sp-color2">
                            WHY CHOOSE HYTRIX
                        </span>

                        <h2>
                            Why Choose Hytrix for Web Development?
                        </h2>



                    </div>

                </div>

            </div>

            {{-- ====== Why Choose Hytrix — Service Boxes ====== --}}

            <div class="row g-4">

                {{-- Custom Solutions --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="web-service-box">
                        <div class="web-service-icon">
                            <i class='bx bx-customize'></i>
                        </div>
                        <h3>Custom Web Solutions</h3>
                        <p>
                            We develop customized websites and web applications
                            according to your business requirements and objectives.
                        </p>
                    </div>
                </div>

                {{-- Responsive Websites --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="web-service-box">
                        <div class="web-service-icon">
                            <i class='bx bx-devices'></i>
                        </div>
                        <h3>Responsive Websites</h3>
                        <p>
                            Our websites are designed to provide a consistent
                            user experience across desktop, tablet and mobile devices.
                        </p>
                    </div>
                </div>

                {{-- Scalable Development --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="web-service-box">
                        <div class="web-service-icon">
                            <i class='bx bx-layer'></i>
                        </div>
                        <h3>Scalable Development</h3>
                        <p>
                            We build scalable web solutions that can adapt to
                            your business growth and future technology requirements.
                        </p>
                    </div>
                </div>

            </div>

            <!-- =========================
                     TECHNOLOGIES
                ========================= -->

            <div class="row py-5 mb-3">

                <div class="col-lg-12">

                    <div class="section-title text-center">

                        <h2>
                            Web Development Technologies We Use
                        </h2>


                    </div>

                </div>

            </div>


            {{-- ====== Tech Cards — Web Development Technologies We Use ====== --}}

            <div class="row g-4">

                {{-- PHP --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class='bx bxl-php'></i>
                        </div>
                        <div class="tech-content">
                            <h3>PHP Development</h3>
                            <p>
                                Build dynamic, secure and scalable websites and
                                web applications with PHP.
                            </p>
                        </div>
                        <div class="tech-number">01</div>
                    </div>
                </div>

                {{-- Laravel --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class='bx bx-code-alt'></i>
                        </div>
                        <div class="tech-content">
                            <h3>Laravel Development</h3>
                            <p>
                                Develop powerful and scalable web applications
                                using the Laravel PHP framework.
                            </p>
                        </div>
                        <div class="tech-number">02</div>
                    </div>
                </div>

                {{-- JavaScript --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class='bx bxl-javascript'></i>
                        </div>
                        <div class="tech-content">
                            <h3>JavaScript</h3>
                            <p>
                                Create interactive, fast and engaging experiences
                                for modern websites and applications.
                            </p>
                        </div>
                        <div class="tech-number">03</div>
                    </div>
                </div>

                {{-- AJAX & jQuery --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class='bx bxl-jquery'></i>
                        </div>
                        <div class="tech-content">
                            <h3>AJAX &amp; jQuery</h3>
                            <p>
                                Improve website interactions with dynamic content
                                loading and seamless user experiences.
                            </p>
                        </div>
                        <div class="tech-number">04</div>
                    </div>
                </div>

            </div>

            <!-- =========================
                     CTA
                ========================= -->

            <div class="row pt-80 ">

                <div class="col-lg-12">

                    <div class="section-title text-center">

                        <h2 class="mb-4">
                            Need a Website for Your Business?
                        </h2>

                        {{-- <p>
                        Discuss your website or web application requirements
                        with Hytrix Technologies and build a digital solution
                        designed around your business goals.
                    </p> --}}

                        <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                            Get a Free Consultation
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- =========================
     FAQ SECTION
========================= -->
<section class="web-faq-section py-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title mb-5">

                    <span class="sp-color2">
                        FREQUENTLY ASKED QUESTIONS
                    </span>

                    <h2>
                        Web Development FAQs
                    </h2>

                    <p >
                        Find answers to common questions about our web development
                        services, technologies, process and project requirements.
                    </p>

                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-11 mx-auto">

                <div class="accordion web-faq" id="webFaqAccordion">

                    <!-- FAQ 1 -->
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="faqHeadingOne">

                            <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqOne"
                                aria-expanded="true"
                                aria-controls="faqOne">

                                What web development services does Hytrix Technologies provide?

                            </button>

                        </h2>

                        <div
                            id="faqOne"
                            class="accordion-collapse collapse show"
                            aria-labelledby="faqHeadingOne"
                            data-bs-parent="#webFaqAccordion">

                            <div class="accordion-body">

                                Hytrix Technologies provides custom website development,
                                responsive web development, web application development,
                                PHP development, Laravel development and JavaScript,
                                AJAX and jQuery development services.

                            </div>

                        </div>

                    </div>


                    <!-- FAQ 2 -->
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="faqHeadingTwo">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqTwo"
                                aria-expanded="false"
                                aria-controls="faqTwo">

                                How much does website development cost?

                            </button>

                        </h2>

                        <div
                            id="faqTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="faqHeadingTwo"
                            data-bs-parent="#webFaqAccordion">

                            <div class="accordion-body">

                                Website development cost depends on the type of website,
                                required features, design, integrations and project
                                complexity. Contact Hytrix Technologies to discuss your
                                requirements and get a suitable project estimate.

                            </div>

                        </div>

                    </div>


                    <!-- FAQ 3 -->
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="faqHeadingThree">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqThree"
                                aria-expanded="false"
                                aria-controls="faqThree">

                                Do you develop responsive websites?

                            </button>

                        </h2>

                        <div
                            id="faqThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="faqHeadingThree"
                            data-bs-parent="#webFaqAccordion">

                            <div class="accordion-body">

                                Yes. We develop responsive websites that provide a
                                consistent user experience across desktop, tablet and
                                mobile devices.

                            </div>

                        </div>

                    </div>


                    <!-- FAQ 4 -->
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="faqHeadingFour">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqFour"
                                aria-expanded="false"
                                aria-controls="faqFour">

                                Do you provide Laravel web development services?

                            </button>

                        </h2>

                        <div
                            id="faqFour"
                            class="accordion-collapse collapse"
                            aria-labelledby="faqHeadingFour"
                            data-bs-parent="#webFaqAccordion">

                            <div class="accordion-body">

                                Yes. Our developers use Laravel to build powerful,
                                scalable and customized web applications based on
                                business requirements.

                            </div>

                        </div>

                    </div>


                    <!-- FAQ 5 -->
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="faqHeadingFive">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqFive"
                                aria-expanded="false"
                                aria-controls="faqFive">

                                Can you develop a custom web application for my business?

                            </button>

                        </h2>

                        <div
                            id="faqFive"
                            class="accordion-collapse collapse"
                            aria-labelledby="faqHeadingFive"
                            data-bs-parent="#webFaqAccordion">

                            <div class="accordion-body">

                                Yes. We develop customized web applications according
                                to your business goals, workflow, features and technical
                                requirements. Our focus is on usability, performance,
                                scalability and responsive design.

                            </div>

                        </div>

                    </div>


                    <!-- FAQ 6 -->
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="faqHeadingSix">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqSix"
                                aria-expanded="false"
                                aria-controls="faqSix">

                                Which technologies do you use for web development?

                            </button>

                        </h2>

                        <div
                            id="faqSix"
                            class="accordion-collapse collapse"
                            aria-labelledby="faqHeadingSix"
                            data-bs-parent="#webFaqAccordion">

                            <div class="accordion-body">

                                We work with technologies including PHP, Laravel,
                                JavaScript, AJAX, jQuery and other modern web
                                development technologies depending on project
                                requirements.

                            </div>

                        </div>

                    </div>


                    <!-- FAQ 7 -->
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="faqHeadingSeven">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqSeven"
                                aria-expanded="false"
                                aria-controls="faqSeven">

                                How long does it take to develop a website?

                            </button>

                        </h2>

                        <div
                            id="faqSeven"
                            class="accordion-collapse collapse"
                            aria-labelledby="faqHeadingSeven"
                            data-bs-parent="#webFaqAccordion">

                            <div class="accordion-body">

                                The development timeline depends on the website type,
                                number of pages, features, integrations and overall
                                project requirements. A project timeline can be
                                discussed after understanding your requirements.

                            </div>

                        </div>

                    </div>


                    <!-- FAQ 8 -->
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="faqHeadingEight">

                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqEight"
                                aria-expanded="false"
                                aria-controls="faqEight">

                                Do you provide website maintenance and support?

                            </button>

                        </h2>

                        <div
                            id="faqEight"
                            class="accordion-collapse collapse"
                            aria-labelledby="faqHeadingEight"
                            data-bs-parent="#webFaqAccordion">

                            <div class="accordion-body">

                                Website maintenance and support can be provided
                                according to the project requirements, including
                                updates, improvements, troubleshooting and ongoing
                                technical assistance.

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
</section>
@endsection
