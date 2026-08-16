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
<style>
    .web-service-box {
        background: #ffffff;
        padding: 35px 28px;
        border-radius: 12px;
        text-align: center;
        height: 100%;
        position: relative;
        overflow: hidden;
        border: 1px solid #e8edf5;
        box-shadow: 0 8px 30px rgba(4, 18, 55, 0.08);
        transition: all 0.3s ease;
    }

    .web-service-box::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg,
                #041237 0%,
                #72bede 100%);
    }

    .web-service-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(4, 18, 55, 0.15);
        border-color: #72bede;
    }

    .web-service-icon {
        width: 70px;
        height: 70px;
        margin: 0 auto 22px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg,
                #041237 0%,
                #72bede 100%);
    }

    .web-service-icon i {
        color: #ffffff;
        font-size: 30px;
    }

    .web-service-box h3 {
        font-size: 21px;
        font-weight: 700;
        margin-bottom: 14px;
        color: #041237;
    }

    .web-service-box p {
        font-size: 15px;
        line-height: 1.7;
        color: #666;
        margin-bottom: 0;
    }

    @media (max-width: 991px) {

        .web-service-box {
            padding: 30px 22px;
        }

    }

    @media (max-width: 575px) {

        .web-service-box {
            padding: 28px 20px;
        }

        .web-service-box h3 {
            font-size: 19px;
        }

    }

    /* ==============================
   WEB TECHNOLOGY CARDS
================================ */

    .tech-card {
        position: relative;
        height: 100%;
        min-height: 280px;
        padding: 32px 25px;
        background: #ffffff;
        border: 1px solid #e8edf5;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(4, 18, 55, 0.07);
        transition: all 0.35s ease;
    }

    /* Top line */

    .tech-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg,
                #041237,
                #72bede);
    }

    /* Background circle */

    .tech-card::after {
        content: "";
        position: absolute;
        width: 130px;
        height: 130px;
        right: -65px;
        bottom: -65px;
        border-radius: 50%;
        background: rgba(114, 190, 222, 0.08);
        transition: all 0.4s ease;
    }

    /* Hover */

    .tech-card:hover {
        transform: translateY(-8px);
        border-color: #72bede;
        box-shadow: 0 18px 45px rgba(4, 18, 55, 0.14);
    }

    /* Icon */

    .tech-icon {
        width: 68px;
        height: 68px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 22px;
        border-radius: 14px;

        background: linear-gradient(135deg,
                #041237 0%,
                #72bede 100%);

        box-shadow: 0 8px 20px rgba(4, 18, 55, 0.18);
    }

    .tech-icon span {
        color: #ffffff;
        font-size: 19px;
        font-weight: 800;
        letter-spacing: 1px;
    }

    /* Content */

    .tech-content {
        position: relative;
        z-index: 2;
    }

    .tech-content h3 {
        color: #041237;
        font-size: 19px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .tech-content p {
        color: #666666;
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 0;
    }

    /* Number */

    .tech-number {
        position: absolute;
        right: 20px;
        top: 25px;

        color: #e8edf5;
        font-size: 38px;
        font-weight: 800;
        line-height: 1;

        transition: all 0.3s ease;
    }

    .tech-card:hover .tech-number {
        color: rgba(114, 190, 222, 0.25);
    }

    .tech-card:hover::after {
        transform: scale(1.5);
    }

    /* Responsive */

    @media (max-width: 991px) {

        .tech-card {
            min-height: 260px;
        }

    }

    @media (max-width: 575px) {

        .tech-card {
            min-height: auto;
        }

    }
</style>
@extends('home.layout.main')

@section('content')
    <!-- =========================
         WEB DEVELOPMENT INTRO
    ========================= -->

    <div class="py-4 py-lg-5">

        <div class="container py-lg-5">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <div class="choose-content mr-20">

                        <div class="section-title">

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


                <div class="col-lg-6">

                    <div class="choose-img">

                        <img src="{{ asset('public/assets/images/about/web.jpg') }}"
                            alt="Web development company in India - Hytrix Technologies" width="600" height="450"
                            loading="eager">

                    </div>

                </div>

            </div>


            <!-- =========================
                 WEB DEVELOPMENT PROCESS
            ========================= -->

            <div class="row align-items-center pt-70">

                <div class="col-lg-6">

                    <div class="choose-img">

                        <img src="{{ asset('public/assets/images/about/webtype.jpg') }}"
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

            <div class="row justify-content-center pt-80 mb-5">

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

            <div class="row pt-40">

                <!-- Custom Solutions -->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="web-service-box">

                        <div class="web-service-icon">
                            <i class="flaticon-practice"></i>
                        </div>

                        <h3>Custom Web Solutions</h3>

                        <p>
                            We develop customized websites and web applications
                            according to your business requirements and objectives.
                        </p>

                    </div>

                </div>


                <!-- Responsive Websites -->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="web-service-box">

                        <div class="web-service-icon">
                            <i class="flaticon-effective"></i>
                        </div>

                        <h3>Responsive Websites</h3>

                        <p>
                            Our websites are designed to provide a consistent
                            user experience across desktop, tablet and mobile
                            devices.
                        </p>

                    </div>

                </div>


                <!-- Scalable Development -->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="web-service-box">

                        <div class="web-service-icon">
                            <i class="flaticon-help"></i>
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

            <div class="row pt-80 mb-5">

                <div class="col-lg-12">

                    <div class="section-title text-center">

                        <h2>
                            Web Development Technologies We Use
                        </h2>


                    </div>

                </div>

            </div>


            <div class="row pt-40">

                <!-- PHP -->
                <div class="col-lg-3 col-md-6 mb-4">

                    <div class="tech-card">

                        <div class="tech-icon">
                            <span>PHP</span>
                        </div>

                        <div class="tech-content">
                            <h3>PHP Development</h3>

                            <p>
                                Build dynamic, secure and scalable websites and
                                web applications with PHP.
                            </p>
                        </div>

                        <div class="tech-number">
                            01
                        </div>

                    </div>

                </div>


                <!-- Laravel -->
                <div class="col-lg-3 col-md-6 mb-4">

                    <div class="tech-card">

                        <div class="tech-icon">
                            <span>LV</span>
                        </div>

                        <div class="tech-content">
                            <h3>Laravel Development</h3>

                            <p>
                                Develop powerful and scalable web applications
                                using the Laravel PHP framework.
                            </p>
                        </div>

                        <div class="tech-number">
                            02
                        </div>

                    </div>

                </div>


                <!-- JavaScript -->
                <div class="col-lg-3 col-md-6 mb-4">

                    <div class="tech-card">

                        <div class="tech-icon">
                            <span>JS</span>
                        </div>

                        <div class="tech-content">
                            <h3>JavaScript</h3>

                            <p>
                                Create interactive, fast and engaging experiences
                                for modern websites and applications.
                            </p>
                        </div>

                        <div class="tech-number">
                            03
                        </div>

                    </div>

                </div>


                <!-- AJAX & jQuery -->
                <div class="col-lg-3 col-md-6 mb-4">

                    <div class="tech-card">

                        <div class="tech-icon">
                            <span>AJ</span>
                        </div>

                        <div class="tech-content">
                            <h3>AJAX &amp; jQuery</h3>

                            <p>
                                Improve website interactions with dynamic content
                                loading and seamless user experiences.
                            </p>
                        </div>

                        <div class="tech-number">
                            04
                        </div>

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

                        <a href="{{ route('contact') }}" class="default-btn btn-bg-two border-radius-50">
                            Get a Free Consultation
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
