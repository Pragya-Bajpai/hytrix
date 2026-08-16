<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Best IT Company in Lucknow | Web, Software & Digital Marketing Services | Hytrix Technologies</title>
    <meta name="description"
        content="Hytrix Technologies LLP is a leading IT company in Lucknow specializing in web development, software development, mobile apps, e-commerce, API integration, and digital marketing. Grow your business with us!">
    <meta name="keywords"
        content="IT company in Lucknow, web development company in Lucknow, software development company in Lucknow, digital marketing company in Lucknow, mobile app development company in Lucknow">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Hytrix Technologies | IT Company in India">

    <meta property="og:description"
        content="Web development, software development, mobile app, e-commerce and digital marketing services for businesses across India.">

    <meta property="og:type" content="website">

    <meta property="og:url" content="{{ url('/') }}">

    <meta property="og:image" content="{{ asset('public/home/hytrix-og-image.jpg') }}">

    <meta property="og:site_name" content="Hytrix Technologies">
    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="Hytrix Technologies | IT Company in India">

    <meta name="twitter:description"
        content="Web, software, mobile app, e-commerce and digital marketing services for businesses across India.">

    <meta name="twitter:image" content="{{ asset('public/home/hytrix-og-image.jpg') }}">
    <link rel="canonical" href="{{ url('/') }}">

    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Hytrix Technologies LLP",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('public/assets/images/logo.png') }}",
    "description": "Hytrix Technologies is an IT company in India providing web development, software development, mobile app development, e-commerce and digital marketing services.",
    "sameAs": [
        "YOUR_LINKEDIN_URL",
        "YOUR_FACEBOOK_URL",
        "YOUR_INSTAGRAM_URL"
    ]
}
</script>
    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')
    <style>
        .d-table {
            height: auto !important;
        }


        .about-img-2 img {
            border-radius: 35px;
            /* smooth rounded corners */
        }
    </style>
    <div class="banner-slider-area ht-banner">
        <div class="banner-slider owl-carousel owl-theme">
            <div class="banner-item item-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-item-content">
                                <span>Only High Quality Services</span>
                                <h1>Best IT Company in Lucknow for Web & Software Development</h1>
                                <p>
                                    At Hytrix, we don't just provide technology solutions – we engineer digital revolutions.
                                    Join us in shaping the future, where innovation knows no bounds and industries thrive on
                                    the cutting edge of possibility.
                                </p>
                                <div class="banner-btn">
                                    <a href="{{ route('about') }}" class="default-btn btn-bg-two border-radius-50">Learn
                                        More <i class='bx bx-chevron-right'></i></a>
                                    <a href="{{ route('contact') }}"
                                        class="default-btn btn-bg-one border-radius-50 ml-20">Get A Quote <i
                                            class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-item item-bg2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-item-content">
                                <span>Only High Quality Services</span>
                                <h1>We Provide Best IT Services for Your Need</h1>
                                <p>
                                    As industry landscapes continually shift, we stay ahead by anticipating technological
                                    trends and adapting our solutions. Your success is our driving <br> force.
                                </p>
                                <div class="banner-btn">
                                    <a href="{{ route('about') }}" class="default-btn btn-bg-two border-radius-50">Learn
                                        More <i class='bx bx-chevron-right'></i></a>
                                    <a href="{{ route('contact') }}"
                                        class="default-btn btn-bg-one border-radius-50 ml-20">Get A Quote <i
                                            class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-item item-bg3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-item-content">
                                <span>Only High Quality Services</span>
                                <h1>Digital IT Service With Excellent Quality</h1>
                                <p>
                                    Our track record speaks volumes. We have ignited growth for our clients through scalable
                                    solutions that streamline processes, unlock new opportunities, and foster unprecedented
                                    collaboration.
                                </p>
                                <div class="banner-btn">
                                    <a href="{{ route('about') }}" class="default-btn btn-bg-two border-radius-50">Learn
                                        More <i class='bx bx-chevron-right'></i></a>
                                    <a href="{{ route('contact') }}"
                                        class="default-btn btn-bg-one border-radius-50 ml-20">Get A Quote <i
                                            class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-sideImg">
            <img src="public/assets/images/development-icon.png" class="img-fluid">
        </div>
    </div>



    <section class="services-style-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2">Our Services</span>
                <h2>Explore Our Services</h2>
                <p class="margin-auto">
                    Our hardworking team makes sure we satisfy our customers need in a given time. Our team sketches the
                    innovative ideas of our customers in there budget.
                </p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('web') }}">
                        <div class="services-card services-style-bg">
                            <i class="flaticon-consultant"></i>
                            <h3>Web Development</h3>
                            <p>
                                Hytrix Technologies LLP provides professional web development services in Lucknow,
                                including responsive business websites, custom web applications and scalable web
                                solutions designed around your business requirements.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('software') }}">
                        <div class="services-card services-style-bg">
                            <i class="flaticon-web-development"></i>
                            <h3>Software Development</h3>
                            <p>Our team has a support of our well skilled, Focused, experienced and knowledgeable people
                                which makes our team one of the finest website designing team's in lucknow.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('android') }}">
                        <div class="services-card services-style-bg">
                            <i class="flaticon-stats"></i>
                            <h3>Android Development</h3>
                            <p>Empowering a digital world is a key to successful business these days. We empower this
                                digital world with innovative mobile apps to your business.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('ecommerce') }}">
                        <div class="services-card services-style-bg">
                            <i class="flaticon-consultant"></i>
                            <h3>E-Commerce website</h3>
                            <p>We make it sure that we turn our customers business a successful one. We keep a eye on
                                changing trends. We keep a eye on changing trends.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('digital') }}">
                        <div class="services-card services-style-bg">
                            <i class="flaticon-consultant"></i>
                            <h3>Digital Marketing</h3>
                            <p>We make it sure that we turn our customers business a successful one. We keep a eye on
                                changing trends. We keep a eye on changing trends.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('ecommerce') }}">
                        <div class="services-card services-style-bg">
                            <i class="flaticon-consulting"></i>
                            <h3>E-Commerce website</h3>
                            <p>We provide the best services for website designingand nearby areas. We provide the best
                                services for website designingand nearby areas.We provide the best services for website
                                designingand nearby areas.</p>
                        </div>
                    </a>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <a href="{{ route('api') }}">
                        <div class="services-card services-style-bg">
                            <i class="flaticon-structure"></i>
                            <h3>Api Integration</h3>
                            <p>As we have well skilled, focussed, experienced and knowledgeable people who have a clear and
                                deep understanding of web development and we provide one of the excellent...</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a href="#!">
                        <div class="services-card services-style-bg">
                            <i class="flaticon-structure"></i>
                            <h3>Cloud Computing</h3>
                            <p>As we have well skilled, focussed, experienced and knowledgeable people who have a clear and
                                deep understanding of web development and we provide one of the excellent...</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <section class="services-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5">
                    <div class="work-process-left">
                        <div class="section-title">
                            <span class="sp-color1">Our Working Process</span>
                            <h2>How Our Services Will Help You to Grow Your Business</h2>
                        </div>
                        <a href="{{ route('contact') }}" class="default-btn btn-bg-two border-radius-50 text-center">Get
                            A Quote</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="work-process-card">
                                <i class="flaticon-project"></i>
                                <h3>Discovery</h3>
                                <p>"Uncover opportunities for digital transformation. Our discovery process identifies your
                                    needs, setting the stage for impactful development solutions."</p>
                                <div class="number">01</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="work-process-card">
                                <i class="flaticon-chip"></i>
                                <h3>Planning</h3>
                                <p>"Strategic development to achieve goals. We plan, execute, and refine to ensure optimal
                                    outcomes for your projects."</p>
                                <div class="number">02</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="work-process-card">
                                <i class="flaticon-effective"></i>
                                <h3>Execute</h3>
                                <p>"Crafting code that brings ideas to life. Our development services create seamless
                                    digital experiences for your audience."</p>
                                <div class="number">03</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="work-process-card">
                                <i class="flaticon-bullhorn"></i>
                                <h3>Deliver</h3>
                                <p>"Crafting exceptional digital experiences through agile development. Code that brings
                                    your ideas to life, pixel by pixel."</p>
                                <div class="number">04</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-shape">
            <img src="public/assets//images/shape/service-shape1.png" alt="Images">
        </div>
    </section>



    {{--
      <div class="about-area pt-100 pb-70">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="about-img-2">
                     <img src="public/home/hytrix-img-1.jpeg" alt="Hytrix Technologies IT company in India">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-content-2 ml-20">
                     <div class="section-title">
                        <h2 class="text-black">A software Company focused on delivering meaningful products</h2>
                        <p class="text-black">
                          Our software team focusses in providing meaningful results. Our team truly understands our customers problem and there business need. We become the support of our customers in achieving all that they want with no hustle.
                        </p class="text-black">
                        <p class="text-black">
                           Our loyalty and dedication towards our customers makes us different from rest of website designers. Our team is filled with well skilled , focused, experienced and knowledgeable people with creative thinking who provide website and flash applications.
                        </p>
                        <ul class="list-unstyled mt-2 text-black">
                           <li>
                              <i class="bx bx-check"></i>
                              We understand our customers need and provide them with what they want.
                           </li>
                           <li>
                              <i class="bx bx-check"></i>
                              We become a solution to all our customers problem.
                           </li>
                           <li>
                              <i class="bx bx-check"></i>
                              We keep on updating our products with latest technologies.
                           </li>
                           <li>
                              <i class="bx bx-check"></i>
                             We shape our customers idea's into reality.
                           </li>
                        </ul>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div> --}}
    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="about-img-2">
                        <img src="public/home/hytrix-img-1.jpeg" alt="Hytrix Technologies IT company in Lucknow">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content-2 ml-20">
                        <div class="section-title">

                            <h2 class="text-black">
                                About Hytrix Technologies LLP – IT Company
                            </h2>

                            <p class="text-black">
                                Hytrix Technologies LLP is an IT company in Lucknow providing reliable
                                digital solutions for businesses of different sizes. Our services include
                                web development, custom software development, mobile app development,
                                e-commerce development, API integration and digital marketing.
                            </p>

                            <p class="text-black">
                                Our experienced team focuses on understanding business requirements and
                                delivering scalable, user-friendly and technology-driven solutions that
                                help businesses improve their digital presence and achieve their goals.
                            </p>

                            <ul class="list-unstyled mt-2 text-black">
                                <li>
                                    <i class="bx bx-check"></i>
                                    We understand our customers' needs and provide customized solutions.
                                </li>

                                <li>
                                    <i class="bx bx-check"></i>
                                    We provide reliable and scalable technology solutions.
                                </li>

                                <li>
                                    <i class="bx bx-check"></i>
                                    We use modern technologies to build effective digital solutions.
                                </li>

                                <li>
                                    <i class="bx bx-check"></i>
                                    We turn our customers' ideas into practical digital solutions.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="choose-area innovation_bg  pt-100 pb-70"
        style="background-image:url('{{ asset('public/assets//images/features-background.jpg') }}')!important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="choose-content mr-20">
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class="flaticon-practice"></i>
                                        <h3>INNOVATION</h3>
                                    </div>
                                    <p>Change is the only constant and we are constantly evolving and learning</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class="flaticon-help"></i>
                                        <h3>SIMPLICITY</h3>
                                    </div>
                                    <p>Simplifying what technology can do and how to use it. Digital is an enabler</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class="flaticon-effective"></i>
                                        <h3>QUALITY</h3>
                                    </div>
                                    <p>We consider our work to be good when we know we’ve made something that works</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class="flaticon-implement"></i>
                                        <h3>ROPE WALK</h3>
                                    </div>
                                    <p>Its tough but we love it, our aim is to create a niche positioning for players like
                                        us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--  <div class="talk-area ptb-100">
             <div class="container">
                <div class="talk-content text-center">
                   <div class="section-title text-center">
                      <span class="sp-color1">Let's Talk</span>
                      <h2>We Are Adding Kinds of It Services That You Grow Success</h2>
                   </div>
                   <a href="{{ route('contact') }}" class="default-btn btn-bg-two border-radius-5">Contact Us</a>
                </div>
             </div>
          </div> -->


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


    <section class="cta-subscribe py-5">
        <div class="container">
            <div class="bg-gradient ptb-120 position-relative overflow-hidden rounded-custom">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading">
                                <h4 class="h5 text-warning">Let's Talk</h4>
                                <h2 class="text-light">You Grow Success</h2>
                                <p>We Are Adding Kinds of It Services That help you to create your dream website for better
                                    business revenue.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-4">
                                <a href="{{ route('contact') }}" class="default-btn btn-bg-two border-radius-5">Contact
                                    Us</a>

                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-4">
                                <li class="nav-item">
                                    <span><i class="bx bx-check"></i>Research</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="bx bx-check"></i>Designing</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="bx bx-check"></i>Building</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="bx bx-check"></i>Deliver</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
            </div>
        </div>
    </section>
@endsection
