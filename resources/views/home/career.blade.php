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
    {{-- ====== Open Positions Section ====== --}}
<section class="career-jobs-section py-5">
    <div class="container py-lg-4">

        <div class="section-title text-center mb-4 mb-lg-5">
            <span class="sp-color1">Opportunities</span>
            <h2 class="mb-2">Current Job Openings</h2>
            <p class="margin-auto">
                Explore available positions and take the next step in your professional journey.
            </p>
        </div>


        <div class="row g-4">

            @if(isset($data) && count($data) > 0)

                @foreach($data as $careers)

                    @php
                        $jobTitle = strtolower($careers->title ?? '');

                        if (
                            str_contains($jobTitle, 'php') ||
                            str_contains($jobTitle, 'laravel') ||
                            str_contains($jobTitle, 'developer') ||
                            str_contains($jobTitle, 'web')
                        ) {
                            $jobIcon = 'bx bx-code-alt';
                        } elseif (
                            str_contains($jobTitle, 'ui') ||
                            str_contains($jobTitle, 'ux') ||
                            str_contains($jobTitle, 'designer')
                        ) {
                            $jobIcon = 'bx bx-palette';
                        } elseif (
                            str_contains($jobTitle, 'marketing') ||
                            str_contains($jobTitle, 'seo')
                        ) {
                            $jobIcon = 'bx bx-line-chart';
                        } elseif (
                            str_contains($jobTitle, 'hr') ||
                            str_contains($jobTitle, 'human')
                        ) {
                            $jobIcon = 'bx bx-group';
                        } elseif (
                            str_contains($jobTitle, 'sales')
                        ) {
                            $jobIcon = 'bx bx-bar-chart-alt-2';
                        } else {
                            $jobIcon = 'bx bx-briefcase-alt-2';
                        }
                    @endphp


                    <div class="col-lg-4 col-md-6">

                        <div class="career-job-card h-100">

                            {{-- Top Icon --}}
                            <div class="career-job-icon">
                                <i class="{{ $jobIcon }}"></i>
                            </div>


                            {{-- Job Content --}}
                            <div class="career-job-content">

                                <span class="career-job-label">
                                    <i class='bx bx-briefcase'></i>
                                    Career Opportunity
                                </span>

                                <h3>
                                    {{ $careers->title }}
                                </h3>

                                <div class="career-job-description">
                                    {!! $careers->description !!}
                                </div>

                            </div>


                            {{-- Apply Button --}}
                            <div class="career-job-footer">

                                <a href="{{ url('application') }}"
                                   class="career-apply-btn">

                                    Apply Now

                                    <i class='bx bx-right-arrow-alt'></i>

                                </a>

                            </div>

                        </div>

                    </div>

                @endforeach

            @else

                <div class="col-12">

                    <div class="career-empty-state text-center">

                        <div class="career-empty-icon">
                            <i class='bx bx-briefcase-alt-2'></i>
                        </div>

                        <h4>No Open Positions Currently</h4>

                        <p>
                            We don't have any active openings right now,
                            but we'd still love to hear from you.
                        </p>

                        <a href="mailto:info@hytrix.in"
                           class="career-email-btn">

                            Send Your CV

                            <i class='bx bx-envelope'></i>

                        </a>

                    </div>

                </div>

            @endif

        </div>

    </div>
</section>
@endsection
