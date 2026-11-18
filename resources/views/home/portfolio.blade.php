<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio | Hytrix Technologies — Web &amp; Software Development Projects</title>

    <meta name="description"
        content="Explore the portfolio of Hytrix Technologies — web development, software, mobile app and e-commerce projects delivered across India. View our work and client projects.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="Portfolio | Hytrix Technologies">
    <meta property="og:description" content="Browse our project portfolio — websites, apps and digital solutions built for businesses across India.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>
<style>
    .portfolio-card__description {
    font-size: 14px;
    line-height: 1.6;
    color: #666;
    margin-top: 8px;
    margin-bottom: 0;
}
</style>
@extends('home.layout.main')

@section('content')

    {{-- ====== Portfolio Hero Banner ====== --}}
    <section class="portfolio-hero py-5">
        <div class="container py-lg-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span class="hero-badge">Our Work</span>
                    <h1>Our Project Portfolio</h1>
                    <p class="mt-2">
                        Explore the digital solutions we've built — from responsive websites and
                        custom software to e-commerce platforms and mobile apps.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ====== Portfolio Content ====== --}}
    <section class="py-5" style="background: var(--color-bg-light); min-height: 60vh;">
        <div class="container py-lg-4">

            {{-- Filter Tabs --}}
            <div class="portfolio-filters mb-4">
                <button type="button" class="portfolio-filter-btn active" data-filter="all">
                    <i class='bx bx-grid-alt'></i> All Projects
                </button>
                <button type="button" class="portfolio-filter-btn" data-filter="web">
                    <i class='bx bx-code-alt'></i> Web Development
                </button>
                <button type="button" class="portfolio-filter-btn" data-filter="mobile">
                    <i class='bx bxl-android'></i> Mobile Apps
                </button>
                <button type="button" class="portfolio-filter-btn" data-filter="software">
                    <i class='bx bx-laptop'></i> Software
                </button>
                <button type="button" class="portfolio-filter-btn" data-filter="ecommerce">
                    <i class='bx bx-store-alt'></i> E-Commerce
                </button>
            </div>

            {{-- Portfolio Grid --}}
     {{-- =========================================
     PORTFOLIO GRID
========================================= --}}

@if(isset($data) && $data->count() > 0)

    @php

        /*
        |--------------------------------------------------------------------------
        | Project Details
        |--------------------------------------------------------------------------
        | Index ke according project ki category, URL aur short description.
        |--------------------------------------------------------------------------
        */

        $projectDetails = [

            0 => [
                'category' => 'web',
                'name' => 'Reliable Heal',
                'description' => 'A professional healthcare website designed to provide clear information and an easy user experience.',
                'url' => 'https://reliableheal.com/',
            ],

            1 => [
                'category' => 'web',
                'name' => 'Rising Engineers',
                'description' => 'A modern engineering website showcasing professional services, solutions and company expertise.',
                'url' => 'https://risingengineers.in/',
            ],

            2 => [
                'category' => 'web',
                'name' => 'Amit Mark Photography',
                'description' => 'A creative photography website designed to showcase photography services and visual portfolios.',
                'url' => 'https://amitmarkphotography.in/',
            ],

            3 => [
                'category' => 'ecommerce',
                'name' => 'PPE Bazar',
                'description' => 'An e-commerce platform built for browsing and purchasing professional safety and protective products.',
                'url' => 'https://www.ppebazar.com/',
            ],

            4 => [
                'category' => 'web',
                'name' => 'UCS World Tour & Travel',
                'description' => 'A travel website presenting tour packages, travel services and destination experiences.',
                'url' => 'https://ucsworldtourandtravel.com/',
            ],
 5 => [
    'category' => 'mobile',
    'name' => 'Shyam Sundar Co. Jewellers',
'description' => 'A modern jewellery e-commerce platform offering a seamless shopping experience with exclusive jewellery collections, digital gold, special offers and easy customer services.',
    'url' => '#',
    // 'image' => 'assets/images/mobileapp.png',
],

6 => [
    'category' => 'software',
    'name' => 'Shyam Sundar Co. Jewellers',
    'description' => 'A modern jewellery e-commerce platform offering a seamless shopping experience with exclusive jewellery collections, digital gold, special offers and easy customer services.',
    'url' => '#',
    // 'image' => 'assets/images/mobileapp.png',
],
        ];


        /*
        |--------------------------------------------------------------------------
        | Category Information
        |--------------------------------------------------------------------------
        */

        $categoryMap = [

            'web' => [
                'name' => 'Web Development',
                'icon' => 'bx bx-code-alt'
            ],

            'mobile' => [
                'name' => 'Mobile App',
                'icon' => 'bx bxl-android'
            ],

            'software' => [
                'name' => 'Software System',
                'icon' => 'bx bx-laptop'
            ],

            'ecommerce' => [
                'name' => 'E-Commerce',
                'icon' => 'bx bx-store-alt'
            ],

        ];

    @endphp


    <div class="row g-4" id="portfolio-grid">

        @foreach($data as $index => $val)

            @php

                /*
                |--------------------------------------------------------------------------
                | Project Detail
                |--------------------------------------------------------------------------
                */

                $project = $projectDetails[$index] ?? null;

                if (!$project) {
                    continue;
                }

                $itemCategory = $project['category'];

                $catMeta = $categoryMap[$itemCategory];

            @endphp


            {{-- =========================================
                 PORTFOLIO ITEM
            ========================================== --}}

            <div
                class="col-lg-4 col-md-6 col-12 portfolio-item"
                data-category="{{ $itemCategory }}"
            >

                <div class="portfolio-card h-100 d-flex flex-column justify-content-between">


                    {{-- =====================================
                         PROJECT IMAGE
                    ====================================== --}}

                    <div class="portfolio-card__image-wrap">

                        {{-- <img
                            src="{{ asset($val->image) }}"
                            alt="{{ $project['name'] }} - Hytrix Technologies"
                            loading="{{ $index < 6 ? 'eager' : 'lazy' }}"
                            class="img-fluid"
                        > --}}

<img
    src="{{ asset($project['image'] ?? $val->image) }}"
    alt="{{ $project['name'] }} - Hytrix Technologies"
    loading="{{ $index < 6 ? 'eager' : 'lazy' }}"
    class="img-fluid"
>
                        {{-- =================================
                             HOVER OVERLAY
                        ================================== --}}

                        <div class="portfolio-card__overlay">

                            <a
                                href="{{ $project['url'] }}"
                                class="portfolio-card__view-btn"
                                target="_blank"
                                rel="noopener noreferrer"
                            >

                                <i class='bx bx-link-external'></i>

                                View Project

                            </a>

                        </div>

                    </div>


                    {{-- =====================================
                         CARD CONTENT
                    ====================================== --}}

                    <div class="portfolio-card__body flex-grow-1 d-flex flex-column justify-content-between">

                        <div>

                            {{-- Category --}}

                            <span class="portfolio-card__category">

                                <i class="{{ $catMeta['icon'] }}"></i>

                                {{ $catMeta['name'] }}

                            </span>


                            {{-- Project Name --}}

                            <h3 class="portfolio-card__title mt-2">

                                {{ $project['name'] }}

                            </h3>


                            {{-- Project Description --}}

                            <p class="portfolio-card__description">

                                {{ $project['description'] }}

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        @endforeach

    </div>


@else


    {{-- =========================================
         EMPTY STATE
    ========================================== --}}

    <div class="portfolio-empty py-5 text-center">

        <i class='bx bx-image-alt fs-1'></i>

        <h3 class="mt-3">
            Portfolio Coming Soon
        </h3>

        <p class="text-muted">
            We're updating our portfolio.
            Check back soon to see our latest projects.
        </p>

        <a
            href="{{ route('contact') }}"
            class="default-btn btn-bg-two mt-3"
        >
            Get In Touch
            <i class='bx bx-chevron-right'></i>
        </a>

    </div>

@endif

        </div>
    </section>

    {{-- ====== CTA Section ====== --}}
    <section class="py-5 bg-white border-top">
        <div class="container py-lg-4">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <span class="sp-color2 d-block mb-2 fw-bold text-uppercase" style="letter-spacing: 1.5px;">
                        Start Your Project
                    </span>
                    <h2 class="mb-3">Have a Project in Mind?</h2>
                    <p class="text-muted mb-4">
                        Let's discuss your requirements and build something great together.
                        Our engineering team is ready to help you achieve your digital goals.
                    </p>
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two">
                        Get a Free Consultation <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ====== Working Portfolio Filter Script ====== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
            const items = document.querySelectorAll('.portfolio-item');

            filterBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    // Update active button state
                    filterBtns.forEach(function (b) {
                        b.classList.remove('active');
                    });
                    btn.classList.add('active');

                    const filterValue = btn.getAttribute('data-filter');

                    // Filter items smoothly
                    items.forEach(function (item) {
                        const itemCat = item.getAttribute('data-category');
                        if (filterValue === 'all' || itemCat === filterValue) {
                            item.style.display = 'block';
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.95)';
                            setTimeout(function () {
                                item.style.transition = 'all 0.3s ease';
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 30);
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

@endsection
