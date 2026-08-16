<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Us | Hytrix Technologies Lucknow</title>

    <meta name="description"
        content="Contact Hytrix Technologies in Lucknow for website development, software engineering, mobile apps, and IT consultation. Get in touch with our team today.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="Contact Hytrix Technologies">
    <meta property="og:description"
        content="Get in touch with Hytrix Technologies for custom software and web development services.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Hytrix Technologies LLP">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== Contact Hero Banner ====== --}}
    <section class="portfolio-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <span class="hero-badge">Get In Touch</span>
                    <h1>Contact Hytrix Technologies</h1>
                    <p>
                        Have a project in mind, need technical assistance, or want a free consultation? Send us a message and our team will get back to you promptly.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ====== Contact Section ====== --}}
    <div class="contact-form-area py-5">
        <div class="container py-lg-4">

            {{-- Flash messages --}}
            <div class="row">
                <div class="col-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                            <i class='bx bx-check-circle me-2'></i> {{ session()->get('success') }}
                        </div>
                    @elseif(session()->has('failed'))
                        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                            <i class='bx bx-error-circle me-2'></i> {{ session()->get('failed') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row pt-4">

                {{-- Left: Contact Info Sidebar --}}
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="contact-info border h-100">
                        <span class="sp-color2 fw-bold text-uppercase d-block mb-2">Connect With Us</span>
                        <h2 class="mb-4">Contact Information</h2>

                        <ul class="list-unstyled mb-0">

                            {{-- Address --}}
                            <li class="mb-4 d-flex align-items-start">
                                <div class="icon me-3">
                                    <i class="bx bxs-map fs-3 text-primary"></i>
                                </div>
                                <div class="content ms-2">
                                    <h3 class="fs-6 fw-bold mb-1">Office Address</h3>
                                    <span class="small">
                                        D-54, Arjun Tower, Vibhuti Khand, Lucknow, Uttar Pradesh 226010
                                    </span>
                                </div>
                            </li>

                            {{-- Phone Numbers --}}
                            <li class="mb-4 d-flex align-items-start">
                                <div class="icon me-3">
                                    <i class="bx bx-phone-call fs-3 text-primary"></i>
                                </div>
                                <div class="content ms-2">
                                    <h3 class="fs-6 fw-bold mb-1">Phone Numbers</h3>
                                    <a href="tel:+919076500530" class="d-block small text-decoration-none">+91 9076500530 (Manager)</a>
                                    <a href="tel:+919076500528" class="d-block small text-decoration-none">+91 9076500528 (Sales Team)</a>
                                    <a href="tel:+919076500529" class="d-block small text-decoration-none">+91 9076500529 (Dev Team)</a>
                                </div>
                            </li>

                            {{-- Email Addresses --}}
                            <li class="mb-4 d-flex align-items-start">
                                <div class="icon me-3">
                                    <i class="bx bx-message-rounded-dots fs-3 text-primary"></i>
                                </div>
                                <div class="content ms-2">
                                    <h3 class="fs-6 fw-bold mb-1">Email Inquiries</h3>
                                    <a href="mailto:info@hytrix.in" class="d-block small text-decoration-none">info@hytrix.in</a>
                                    <a href="mailto:hytrixtech@gmail.com" class="d-block small text-decoration-none">hytrixtech@gmail.com</a>
                                </div>
                            </li>

                            {{-- Working Hours --}}
                            <li class="d-flex align-items-start">
                                <div class="icon me-3">
                                    <i class="bx bx-time-five fs-3 text-primary"></i>
                                </div>
                                <div class="content ms-2">
                                    <h3 class="fs-6 fw-bold mb-1">Working Hours</h3>
                                    <span class="small">Monday – Saturday: 10:00 AM – 7:00 PM</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                {{-- Right: Contact Message Form --}}
                <div class="col-lg-8">
                    <div class="contact-form bg-white">
                        <div class="section-title mb-4">
                            <h2>Send Us A Direct Message</h2>
                            <p class="text-muted">Fill out the form below and we'll reply within 24 business hours.</p>
                        </div>

                        <form action="{{ route('contactstore') }}" method="POST">
                            @csrf
                            <div class="row">

                                {{-- Name --}}
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label text-muted">Your Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" placeholder="Full name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Email --}}
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label text-muted">Your Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Phone --}}
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label text-muted">Phone Number <span class="text-danger">*</span></label>
                                        <input type="tel" name="phone_number" id="phone_number" class="form-control" placeholder="Phone number" value="{{ old('phone_number') }}" required>
                                        @error('phone_number')
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Subject --}}
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label text-muted">Subject <span class="text-danger">*</span></label>
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="Project or topic" value="{{ old('msg_subject') }}" required>
                                        @error('msg_subject')
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Message --}}
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-label text-muted">Your Message <span class="text-danger">*</span></label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Describe your project, goals, or inquiry..." required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Agreement Checkbox --}}
                                <div class="col-12 mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="chb1" name="check" required>
                                        <label class="form-check-label small" for="chb1">
                                            I agree to the <a href="{{ route('terms.conditions') }}" target="_blank">Terms &amp; Conditions</a> and <a href="{{ route('privacy.policy') }}" target="_blank">Privacy Policy</a>.
                                        </label>
                                        @error('check')
                                            <span class="text-danger small d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Submit button --}}
                                <div class="col-12 text-center text-lg-start">
                                    <button type="submit" class="default-btn btn-bg-two">
                                        Send Message <i class="bx bx-chevron-right"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
