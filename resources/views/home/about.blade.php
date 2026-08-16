<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Hytrix Technologies | IT Company in Lucknow</title>

    <meta name="description"
        content="Learn about Hytrix Technologies, an IT company in India based in Lucknow, providing web development, software development, mobile apps, e-commerce, digital marketing, cloud and API integration services.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="About Hytrix Technologies | IT Company in India">

    <meta property="og:description"
        content="Discover Hytrix Technologies' web development, software development, mobile app, e-commerce, digital marketing and IT solutions for businesses across India.">

    <meta property="og:type" content="website">

    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="og:image" content="{{ asset('public/assets/images/about/hytrix-img-2.jpeg') }}">

    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

<style type="text/css">
    .about-side__thumb {
        display: flex;
        position: relative;
        gap: 30px;
    }

    .about-side__thumb>* {
        flex-basis: 50%;
    }

    .about-side__thumb .abt-left img:first-child {
        margin-bottom: 30px;
    }

    .about-side__thumb img {
        width: 100%;
        border-radius: 5px;
    }

    .about-side__thumb .p-right {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: flex-end;
    }

    .about-side__thumb .p-right .box {
        background: linear-gradient(45deg, rgb(4 18 55) 0%, rgb(114 190 222) 100%);
        text-align: center;
        position: relative;
        width: 100%;
        border-radius: 5px;
        margin-top: 30px;
    }

    .about-side__thumb .shape {
        position: absolute;
        z-index: -1;
        top: -10%;
    }

    .about-side__thumb .box h4 {
        color: #ffffff;
        margin: 10px 0;
    }

    .about-side__thumb .box p {
        color: #ffffff;
    }

    .abt-list {
        margin: 15px 0;
        padding: 0;
        list-style: none;
    }

    .abt-list li .icon {
        background: linear-gradient(45deg, rgb(94, 64, 251) 0%, rgb(78, 149, 237) 100%);
        color: #fff;
        width: 25px;
        height: 25px;
        display: inline-block;
        text-align: center;
        line-height: 25px;
        border-radius: 50%;
        margin-right: 6px;
        font-size: 13px;
    }

    .abt-list li .icon {
        margin-bottom: 10px;
    }

    .abt-list li i {
        margin-top: 6px;
    }

    .abt-list .text {
        font-weight: 600;
        font-size: 14px;
    }

    .about-content .content-down {
        margin-bottom: 0px;
        padding-top: 20px;
        border-top: 1px solid;
        margin-top: 25px;
        gap: 50px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: start;
    }

    .about-content .content-down .i-box {
        display: flex;
        align-items: center;
        justify-content: start;
        gap: 20px;
        width: 100%;
    }
</style>

@extends('home.layout.main')

@section('content')
    <!-- start-about-area -->
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- <div class="about-play">
                        <img src="public/assets/images/about/about-img1.jpg" alt="About Images">
                     </div> -->
                    <div class="about-side__thumb">
                        <div class="abt-left">
                            <img src="public/assets/images/about/hytrix-img-2.jpeg"
                                alt="Hytrix Technologies IT company in India" height="220px;">
                            <img src="public/assets/images/about/hytrix-img-4.jpeg"
                                alt="Hytrix Technologies team and IT solutions" height="220 px;">
                        </div>
                        <div class="p-right">
                            <img src="public/assets/images/about/hytrix-img-3.jpeg"
                                alt="Hytrix Technologies software and web development team">
                            <div class="box">
                                <h4>1000+</h4>
                                <p>Successfully Project Deliverd</p>
                            </div>
                        </div>
                        <div class="shape">
                            <img src="public/assets/images/about/about-bg-shape.png"
                                alt="Why choose Hytrix Technologies for IT solutions">
                        </div>
                    </div>
                </div>
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

                            <br><br>

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
                                    Scalable Web & Software Development
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
                            <a href="{{ route('contact') }}" class="default-btn btn-bg-two border-radius-50">
                                Talk to Our Team
                            </a>
                            <div class="i-box wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s"
                                data-wow-delay="1s">
                                <div class="icon">
                                    <i class='bx bx-timer'></i>
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
    <div class="choose-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-content mr-20">
                        <div class="section-title">
                            <span class="sp-color1">Why Choose Us</span>
                            <h2>Why Choose Hytrix Technologies?</h2>
                            <p>
                                Hytrix Technologies is an IT company in India focused on delivering
                                reliable, scalable and customized technology solutions. Our team works
                                closely with businesses to understand their goals and develop solutions
                                that support digital growth, operational efficiency and long-term
                                business success.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class="flaticon-practice"></i>
                                        <h3>Experienced IT Team</h3>
                                    </div>
                                    <p>
                                        Our team develops customized web, software and digital solutions based
                                        on the specific requirements of businesses and organizations.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class="flaticon-help"></i>
                                        <h3>Reliable Technical Support</h3>
                                    </div>
                                    <p>
                                        We provide responsive technical support to help businesses maintain
                                        their websites, applications and digital solutions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{ url('public/assets/images/choose-img.jpg') }}"
                            alt="Hytrix Technologies IT company in India">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="security-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our IT Services and Digital Solutions</h2>


            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('web') }}">
                        <div class="security-card web-height">
                            <i class="flaticon-implement"></i>
                            <h3>Web Development Services</h3>
                            <p>
                                Discover seamless web solutions with our expert team. From captivating designs to robust
                                backend, we craft websites that engage and perform. User-centric, responsive, and
                                future-ready – we bring your online vision to life.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('software') }}">
                        <div class="security-card web-height">
                            <i class="flaticon-implement"></i>
                            <h3>Software Development Services</h3>
                            <p>
                                Empower your business with our end-to-end software solutions. From concept to deployment,
                                our experts craft tailored applications, utilizing cutting-edge technology. Leverage our
                                proficiency in diverse domains for impactful results.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('android') }}">
                        <div class="security-card web-height">
                            <i class="flaticon-implement"></i>
                            <h3>Android Development</h3>
                            <p>
                                Unlock limitless possibilities with our Android development services. Crafted by experts,
                                our apps combine innovation and functionality for seamless user experiences. From concept to
                                execution, we bring your app ideas to life on the Android platform.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('ecommerce') }}">
                        <div class="security-card web-height">
                            <i class="flaticon-computer"></i>
                            <h3>E-Commerce website Development</h3>
                            <p>
                                Discover a seamless shopping experience on our E-commerce platform. Explore a wide range of
                                products, from fashion and electronics to home essentials. Shop with confidence, thanks to
                                secure transactions and swift delivery. Elevate your online shopping journey with us.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('digital') }}">
                        <div class="security-card web-height">
                            <i class="flaticon-computer"></i>
                            <h3>Digital Marketing Services</h3>
                            <p>
                                Unleash your brand's potential with our strategic digital marketing solutions. From SEO and
                                PPC to social media and content strategies, we drive results that resonate. Elevate your
                                online presence and engage your audience effectively with our data-driven approach.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('webhost') }}">
                        <div class="security-card web-height">
                            <i class="flaticon-computer"></i>
                            <h3>Web Hosting Services</h3>
                            <p>
                                "Experience seamless web hosting solutions with unmatched reliability. Our advanced
                                infrastructure ensures lightning-fast load times, 24/7 support keeps your site running
                                smoothly, and scalable plans cater to your growth. Trust us for secure, high-performance
                                hosting that empowers your online presence."
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('api') }}">
                        <div class="security-card web-height">
                            <i class="flaticon-computer"></i>
                            <h3>API Integration Services</h3>
                            <p>
                                Seamlessly integrate and expand your services with our robust API integration solutions.
                                Streamline data exchange, enhance functionality, and empower your platform for enhanced user
                                experiences. Unlock new possibilities through smooth API integration.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                 <a href="{{ route('cloud') }}">
    <div class="security-card web-height">

        <i class="flaticon-computer"></i>

        <h3>Cloud Computing Solutions</h3>

        <p>
            Empower your business with flexible cloud computing solutions.
            Deploy, manage and scale applications with modern cloud
            infrastructure designed around your business requirements.
        </p>

    </div>
</a>
                </div>
            </div>
        </div>
    </div>
    <!--end-about-area -->
@endsection
