<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Hytrix Technologies | IT Company in Lucknow</title>

    <meta name="description"
        content="Learn about Hytrix Technologies, an IT company in India based in Lucknow, providing web development, software development, mobile apps, e-commerce, digital marketing, cloud and API integration services.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="About Hytrix Technologies | IT Company in India">
    <meta property="og:description"
        content="Discover Hytrix Technologies' web development, software development, mobile app, e-commerce, digital marketing and IT solutions for businesses across India.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('public/assets/images/about/hytrix-img-2.jpeg') }}">
    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')
    {{-- ====== About Intro Section ====== --}}
    <div class="about-area py-5">
        <div class="container py-lg-4">
            <div class="row align-items-center">

                {{-- Left: About Collage Images --}}
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-side__thumb">
                        <div class="abt-left">
                            <img src="{{ asset('public/assets/images/about/hytrix-img-2.jpeg') }}"
                                alt="Hytrix Technologies IT company in India">
                            <img src="{{ asset('public/assets/images/about/hytrix-img-4.jpeg') }}"
                                alt="Hytrix Technologies team and IT solutions">
                        </div>
                        <div class="p-right">
                            <img src="{{ asset('public/assets/images/about/hytrix-img-3.jpeg') }}"
                                alt="Hytrix Technologies software and web development team">
                            <div class="box">
                                <h4>1000+</h4>
                                <p>Successfully Projects Delivered</p>
                            </div>
                        </div>
                        <div class="shape">
                            <img src="{{ asset('public/assets/images/about/about-bg-shape.png') }}"
                                alt="Why choose Hytrix Technologies for IT solutions">
                        </div>
                    </div>
                </div>

                {{-- Right: About Content --}}
                <div class="col-lg-6">
                    <div class="about-content ml-25">
                        <div class="section-title">
                            <span class="sp-color2">11 Years of Experience</span>
                            <h1>About Hytrix Technologies – IT Company in India</h1>
                        </div>
                        <p class="about-content-text">
                            Hytrix Technologies LLP is an IT company in India based in Lucknow,
                            Uttar Pradesh, providing technology and digital solutions to businesses
                            across India. We specialize in web development, custom software
                            development, mobile app development, e-commerce development, API
                            integration, cloud computing, web hosting and digital marketing.
                        </p>
                        <p class="about-content-text">
                            Our experienced team works with businesses to understand their
                            requirements and develop reliable, scalable and user-focused digital
                            solutions. From business websites and web applications to custom
                            software and digital marketing, we help organizations strengthen their
                            online presence and achieve their technology goals.
                        </p>

                        <ul class="abt-list">
                            <li>
                                <span class="icon">
                                    <i class='bx bx-check'></i>
                                </span>
                                <span class="text">
                                    Customized IT Solutions
                                </span>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class='bx bx-check'></i>
                                </span>
                                <span class="text">
                                    Scalable Web &amp; Software Development
                                </span>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class='bx bx-check'></i>
                                </span>
                                <span class="text">
                                    Reliable Technical Support
                                </span>
                            </li>
                        </ul>

                        <div class="content-down">
                            <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                                Talk to Our Team <i class='bx bx-chevron-right'></i>
                            </a>
                            <div class="i-box wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s"
                                data-wow-delay="1s">
                                <div class="icon">
                                    <i class='bx bx-support'></i>
                                </div>
                                <div class="content">
                                    <span>We are here to assist you</span>
                                    <p>24/7 Technical Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ====== Why Choose Us Section ====== --}}
    <div class="choose-area py-5">
        <div class="container py-lg-4">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="choose-content mr-lg-20">
                        <div class="section-title">
                            <span class="sp-color1">Why Choose Us</span>
                            <h2 class="mb-2">Why Choose Hytrix Technologies?</h2>
                            <p>
                                Hytrix Technologies is an IT company in India focused on delivering
                                reliable, scalable and customized technology solutions. Our team works
                                closely with businesses to understand their goals and develop solutions
                                that support digital growth, operational efficiency and long-term
                                business success.
                            </p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class='bx bx-group'></i>
                                        <h4>Experience</h4>
                                    </div>
                                    <p>Experience of developing customized, fully integrated systems for leading firms of
                                        industry.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class='bx bx-support'></i>
                                        <h4>Quick Support</h4>
                                    </div>
                                    <p>
                                        Call,Chat Remote Shadow - We do it all.Statistically 70-90% off all issues can be
                                        handle remotely.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="choose-img">
                        <img src="{{ url('public/assets/images/choose-img.jpg') }}"
                            alt="Hytrix Technologies IT company in India" class="img-fluid rounded">
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ====== Our Services & Solutions Section ====== --}}
    <div class="security-area py-5">
        <div class="container py-lg-4">
            <div class="section-title text-center mb-5">
                <span class="sp-color2">Core Competencies</span>
                <h2 class="mb-2">Our IT Services and Digital Solutions</h2>
                <p class="margin-auto">
                    We deliver comprehensive, end-to-end technology solutions crafted for modern business challenges.
                </p>
            </div>

            <div class="row g-4">

                {{-- Web Development --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <a href="{{ route('web') }}" class="d-block h-100 text-decoration-none">
                        <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                            <div class="icon">
                                <i class='bx bx-code-alt'></i>
                            </div>
                            <h4>Web Development</h4>
                            <p>
                                Discover seamless web solutions with our expert team. From captivating designs to robust
                                backend, we craft websites that engage and perform. User-centric, responsive, and
                                future-ready — we bring your online vision to life.
                            </p>
                        </div>
                    </a>
                </div>

                {{-- Software Development --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <a href="{{ route('software') }}" class="d-block h-100 text-decoration-none">
                        <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                            <div class="icon">
                                <i class='bx bx-laptop'></i>
                            </div>
                            <h4>Software Development</h4>
                            <p>
                                Empower your business with our end-to-end software solutions. From concept to deployment,
                                our experts craft tailored applications, utilizing cutting-edge technology. Leverage our
                                proficiency in diverse domains for impactful results.
                            </p>
                        </div>
                    </a>
                </div>

                {{-- Android Development --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <a href="{{ route('android') }}" class="d-block h-100 text-decoration-none">
                        <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                            <div class="icon">
                                <i class='bx bxl-android'></i>
                            </div>
                            <h4>Android Development</h4>
                            <p>
                                Unlock limitless possibilities with our Android development services. Crafted by experts,
                                our apps combine innovation and functionality for seamless user experiences. From concept to
                                execution, we bring your app ideas to life on the Android platform.
                            </p>
                        </div>
                    </a>
                </div>

                {{-- E-Commerce --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <a href="{{ route('ecommerce') }}" class="d-block h-100 text-decoration-none">
                        <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                            <div class="icon">
                                <i class='bx bx-store-alt'></i>
                            </div>
                            <h4>E-Commerce Development</h4>
                            <p>
                                Discover a seamless shopping experience on our E-commerce platform. Explore a wide range of
                                products, from fashion and electronics to home essentials. Shop with confidence, thanks to
                                secure transactions and swift delivery.
                            </p>
                        </div>
                    </a>
                </div>

                {{-- Digital Marketing --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <a href="{{ route('digital') }}" class="d-block h-100 text-decoration-none">
                        <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                            <div class="icon">
                                <i class='bx bx-trending-up'></i>
                            </div>
                            <h4>Digital Marketing</h4>
                            <p>
                                Unleash your brand's potential with our strategic digital marketing solutions. From SEO and
                                PPC to social media and content strategies, we drive results that resonate. Elevate your
                                online presence and engage your audience effectively.
                            </p>
                        </div>
                    </a>
                </div>

                {{-- Web Hosting --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <a href="{{ route('webhost') }}" class="d-block h-100 text-decoration-none">
                        <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                            <div class="icon">
                                <i class='bx bx-server'></i>
                            </div>
                            <h4>Web Hosting</h4>
                            <p>
                                Experience seamless web hosting solutions with unmatched reliability. Our advanced
                                infrastructure ensures lightning-fast load times, 24/7 support keeps your site running
                                smoothly, and scalable plans cater to your growth.
                            </p>
                        </div>
                    </a>
                </div>

                {{-- API Integration --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <a href="{{ route('api') }}" class="d-block h-100 text-decoration-none">
                        <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                            <div class="icon">
                                <i class='bx bx-transfer'></i>
                            </div>
                            <h4>API Integration</h4>
                            <p>
                                Seamlessly integrate and expand your services with our robust API integration solutions.
                                Streamline data exchange, enhance functionality, and empower your platform for enhanced user
                                experiences.
                            </p>
                        </div>
                    </a>
                </div>

                {{-- Cloud Computing --}}
                <div class="col-lg-4 col-sm-6 mb-2">
                    <a href="{{ route('cloud') }}" class="d-block h-100 text-decoration-none">
                        <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                            <div class="icon">
                                <i class='bx bx-cloud'></i>
                            </div>
                            <h4>Cloud Computing</h4>
                            <p>
                                Empower your business with flexible cloud computing solutions. Deploy, manage and scale
                                applications with modern cloud infrastructure designed around your business requirements.
                            </p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
