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
            @if(isset($data) && $data->count() > 0)
                @php
                    $categoryMap = [
                        'web' => ['name' => 'Web Development', 'icon' => 'bx bx-code-alt'],
                        'mobile' => ['name' => 'Mobile App', 'icon' => 'bx bxl-android'],
                        'software' => ['name' => 'Software System', 'icon' => 'bx bx-laptop'],
                        'ecommerce' => ['name' => 'E-Commerce Store', 'icon' => 'bx bx-store-alt'],
                    ];
                    $catKeys = ['web', 'mobile', 'software', 'ecommerce'];
                @endphp

                <div class="row g-4" id="portfolio-grid">
                    @foreach($data as $index => $val)
                        @php
                            // Determine item category based on title keyword or round-robin distribution
                            $titleLower = strtolower($val->title ?? '');
                            if (str_contains($titleLower, 'app') || str_contains($titleLower, 'android') || str_contains($titleLower, 'mobile')) {
                                $itemCategory = 'mobile';
                            } elseif (str_contains($titleLower, 'shop') || str_contains($titleLower, 'store') || str_contains($titleLower, 'commerce') || str_contains($titleLower, 'cart')) {
                                $itemCategory = 'ecommerce';
                            } elseif (str_contains($titleLower, 'crm') || str_contains($titleLower, 'erp') || str_contains($titleLower, 'software') || str_contains($titleLower, 'portal')) {
                                $itemCategory = 'software';
                            } else {
                                $itemCategory = $catKeys[$index % count($catKeys)];
                            }
                            $catMeta = $categoryMap[$itemCategory];
                        @endphp

                        <div class="col-lg-4 col-md-6 col-12 portfolio-item" data-category="{{ $itemCategory }}">
                            <div class="portfolio-card h-100 d-flex flex-column justify-content-between">

                                {{-- Project Image with Overlay --}}
                                <div class="portfolio-card__image-wrap">
                                    <img src="{{ asset($val->image) }}"
                                         alt="{{ $val->title ?? 'Hytrix Technologies Project ' . ($index + 1) }}"
                                         loading="{{ $index < 6 ? 'eager' : 'lazy' }}"
                                         class="img-fluid">

                                    {{-- Hover Overlay --}}
                                    <div class="portfolio-card__overlay">
                                        <a href="{{ asset($val->image) }}"
                                           class="portfolio-card__view-btn"
                                           target="_blank"
                                           rel="noopener noreferrer">
                                            <i class='bx bx-zoom-in'></i> View Project
                                        </a>
                                    </div>
                                </div>

                                {{-- Card Body --}}
                                <div class="portfolio-card__body flex-grow-1 d-flex flex-column justify-content-between">
                                    <div>
                                        <span class="portfolio-card__category">
                                            <i class='{{ $catMeta['icon'] }}'></i> {{ $catMeta['name'] }}
                                        </span>
                                        <h3 class="portfolio-card__title mt-1">
                                            {{ $val->title ?? 'Client Project ' . ($index + 1) }}
                                        </h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            @else

                {{-- Empty State --}}
                <div class="portfolio-empty py-5">
                    <i class='bx bx-image-alt fs-1'></i>
                    <h3 class="mt-3">Portfolio Coming Soon</h3>
                    <p class="text-muted">We're updating our portfolio. Check back soon to see our latest projects.</p>
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-two mt-3">
                        Get In Touch <i class='bx bx-chevron-right'></i>
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
