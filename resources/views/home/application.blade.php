<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Job Application | Careers at Hytrix Technologies</title>

    <meta name="description"
        content="Submit your job application to join the engineering and marketing teams at Hytrix Technologies.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

    {{-- ====== Application Form Banner ====== --}}
    <section class="portfolio-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <span class="hero-badge">Careers</span>
                    <h1>Job Application Form</h1>
                    <p>
                        Fill in your details below to apply for career opportunities at Hytrix Technologies.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ====== Application Form Section ====== --}}
    <section class="py-5" style="background: var(--color-bg-light);">
        <div class="container py-lg-4">
            <div class="row justify-content-center">

                <div class="col-lg-8">

                    {{-- Alert Messages --}}
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                            <i class='bx bx-check-circle me-2'></i> {{ session()->get('success') }}
                        </div>
                    @endif
                    @if(session()->has('failed'))
                        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                            <i class='bx bx-error-circle me-2'></i> {{ session()->get('failed') }}
                        </div>
                    @endif

                    <div class="bg-white p-4 p-md-5 rounded shadow-sm border">
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Candidate Details</h3>
                            <p class="text-muted">
                                Please submit accurate information. In case of any questions, reach out to us at
                                <a href="mailto:info@hytrix.in">info@hytrix.in</a> or <a href="tel:+919076500530">+91 9076500530</a>.
                            </p>
                        </div>

                        <form action="{{ route('appstore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                {{-- First Name --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inputFname" class="form-label text-muted">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required id="inputFname" placeholder="Your first name" name="fname" value="{{ old('fname') }}">
                                    @error('fname')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Last Name --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inputLname" class="form-label text-muted">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required id="inputLname" placeholder="Your last name" name="lname" value="{{ old('lname') }}">
                                    @error('lname')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inputEmail" class="form-label text-muted">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" required id="inputEmail" placeholder="yourname@domain.com" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Mobile --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inputMobile" class="form-label text-muted">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" required id="inputMobile" placeholder="Contact number" name="mobile" value="{{ old('mobile') }}">
                                    @error('mobile')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- CV Upload --}}
                                <div class="col-12 mb-3">
                                    <label for="inputCv" class="form-label text-muted">Attach Your CV / Resume <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" required id="inputCv" name="file">
                                    <small class="text-muted">PDF, DOC, DOCX formats supported.</small>
                                    @error('file')
                                        <span class="text-danger small d-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Terms Agreement --}}
                                <div class="col-12 mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                        <label class="form-check-label" for="gridCheck">
                                            I agree to the <a href="{{ route('terms.conditions') }}" target="_blank">Terms and Conditions</a> and Privacy Policy.
                                        </label>
                                    </div>
                                </div>

                                {{-- Submit Button --}}
                                <div class="col-12 text-center">
                                    <button type="submit" class="default-btn btn-bg-two">
                                        Submit Application <i class="bx bx-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
