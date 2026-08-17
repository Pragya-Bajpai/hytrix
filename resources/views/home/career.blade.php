<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Careers at Hytrix Technologies | Join Our Team</title>

    <meta name="description"
        content="Join the talented team at Hytrix Technologies. Explore open job opportunities in web development, software engineering, UI/UX, and digital marketing.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="Careers at Hytrix Technologies">
    <meta property="og:description"
        content="Build your career with Hytrix Technologies. Join a team passionate about digital innovation.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== Career Hero Banner ====== --}}
    <section class="portfolio-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <span class="hero-badge">Join Us</span>
                    <h1>Careers at Hytrix Technologies</h1>
                    <p>
                        We are looking for passionate innovators, skilled developers, and creative thinkers to join our growing team.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ====== Why Join Us Section ====== --}}
    <section class="py-5" style="background: var(--color-bg-light);">
        <div class="container py-lg-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span class="sp-color2 text-uppercase fw-bold mb-2 d-block">Work Culture</span>
                    <h2 class="mb-2">Why Build Your Career at Hytrix?</h2>
                    <p>
                        At Hytrix, you will contribute to digital solutions that matter. From building scalable enterprise systems to shaping dynamic digital experiences, your work makes a tangible impact. We foster a collaborative, growth-focused culture where initiative is celebrated and learning never stops.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ====== Open Positions Section ====== --}}
    <section class="py-5">
        <div class="container py-lg-4">
            <div class="section-title text-center mb-4 mb-lg-5">
                <span class="sp-color1">Opportunities</span>
                <h2 class="mb-2">Current Job Openings</h2>
                <p class="margin-auto">
                    Explore available positions and take the next leap in your professional journey.
                </p>
            </div>

            <div class="row pt-4">
                @if(isset($data) && count($data) > 0)
                    @foreach($data as $careers)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="security-card d-flex flex-column h-100 p-4 p-lg-5">
                                <div>
                                    @if(!empty($careers->file))
                                        <div class="mb-3" style="width: 70px; height: 70px; overflow: hidden; border-radius: var(--radius-md);">
                                            <img src="{{ asset('public/'.$careers->file) }}" class="img-fluid w-100 h-100 object-fit-cover" alt="{{ $careers->title }}">
                                        </div>
                                    @else
                                        <div class="mb-3">
                                            <i class='bx bx-briefcase' style="font-size: 36px; color: var(--color-accent-link);"></i>
                                        </div>
                                    @endif

                                    <h3 class="mb-3">{{ $careers->title }}</h3>

                                    <div class="text-muted mb-4 fs-6">
                                        {!! $careers->description !!}
                                    </div>
                                </div>

                                <div>
                                    <a href="{{ url('application') }}" class="default-btn btn-bg-two">
                                        Apply Now <i class='bx bx-chevron-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center py-5">
                        <i class='bx bx-briefcase-alt-2' style="font-size: 48px; color: var(--color-text-muted);"></i>
                        <h4 class="mt-3 text-muted">No open positions currently</h4>
                        <p class="text-muted">You can still send your CV to <a href="mailto:info@hytrix.in">info@hytrix.in</a> for future opportunities.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection
