
@extends('admin.layout.master')

@section('content')

<style>
/* ==========================================
   HYTRIX PREMIUM POST JOB PAGE
   Navy Blue + Sky Blue Gradient
========================================== */

:root {
    --hy-navy: #263d79;
    --hy-dark: #192b56;
    --hy-blue: #344f91;
    --hy-sky: #50c4e2;
    --hy-light: #effaff;
    --hy-text: #27395e;
}

/* Main Background */
.content-wrapper {
    background: #f1f5fc !important;
    min-height: calc(100vh - 57px);
    padding-bottom: 35px;
}

/* Page Spacing */
.hytrix-job-page {
    padding: 25px 20px;
}

/* Page Heading */
.job-page-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 22px;
}

.job-page-heading h2 {
    color: var(--hy-navy);
    font-size: 25px;
    font-weight: 800;
    margin: 0 0 5px;
}

.job-page-heading p {
    color: #8290a9;
    font-size: 13px;
    margin: 0;
}

/* Main Form Card */
.hytrix-job-card {
    background: #fff;
    border: 1px solid #e3eaf5;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 28px rgba(35, 57, 105, .08);
}

/* Card Header */
.hytrix-job-card .card-header {
    background: linear-gradient(
        110deg,
        #263d79 0%,
        #344f91 55%,
        #43afd0 100%
    ) !important;
    padding: 23px 27px;
    border: none;
    position: relative;
    overflow: hidden;
}

.hytrix-job-card .card-header:after {
    content: "";
    position: absolute;
    width: 130px;
    height: 130px;
    right: 30px;
    top: -85px;
    border: 22px solid rgba(255,255,255,.10);
    border-radius: 50%;
}

.job-header-content {
    display: flex;
    align-items: center;
    gap: 15px;
    position: relative;
    z-index: 1;
}

.job-header-icon {
    width: 48px;
    height: 48px;
    min-width: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,.16);
    border: 1px solid rgba(255,255,255,.28);
    border-radius: 13px;
    color: #fff;
    font-size: 21px;
}

.hytrix-job-card .card-title {
    color: #fff;
    font-size: 19px;
    font-weight: 800;
    margin: 0;
}

.job-header-content p {
    color: rgba(255,255,255,.78);
    font-size: 12px;
    margin: 5px 0 0;
}

/* Card Body */
.hytrix-job-card .card-body {
    padding: 30px;
}

/* Form Groups */
.hytrix-job-card .form-group {
    margin-bottom: 25px;
}

.hytrix-job-card .form-group label {
    display: block;
    color: #293d6a;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 9px;
}

.hytrix-job-card .form-group label i {
    color: #45b5d4;
    margin-right: 7px;
}

/* Input Fields */
.hytrix-job-card .form-control {
    width: 100%;
    min-height: 47px;
    border: 1px solid #dce5f2;
    background: #f8faff;
    border-radius: 9px;
    padding: 11px 15px;
    color: #293d6a;
    font-size: 13px;
    box-shadow: none;
    transition: all .25s ease;
}

.hytrix-job-card .form-control::placeholder {
    color: #a3afc4;
}

.hytrix-job-card .form-control:focus {
    background: #fff;
    border-color: #50c4e2;
    box-shadow: 0 0 0 3px rgba(80,196,226,.13);
    outline: none;
}

/* File Input */
.hytrix-job-card input[type="file"].form-control {
    height: auto;
    min-height: 49px;
    padding: 9px 12px;
    cursor: pointer;
}

.hytrix-job-card input[type="file"]::file-selector-button {
    background: linear-gradient(120deg, #344f91, #50c4e2);
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 7px 14px;
    margin-right: 12px;
    cursor: pointer;
    font-size: 12px;
    font-weight: 600;
}

/* Validation */
.hytrix-job-card .text-danger {
    display: block;
    font-size: 12px;
    font-weight: 600;
    margin-top: 7px;
}

/* CKEditor */
.hytrix-job-card .cke {
    border: 1px solid #dce5f2 !important;
    border-radius: 9px !important;
    overflow: hidden;
    box-shadow: none !important;
}

.hytrix-job-card .cke_top {
    background: #f1f6fc !important;
    border-bottom: 1px solid #e0e8f3 !important;
}

.hytrix-job-card .cke_bottom {
    background: #f7f9fd !important;
    border-top: 1px solid #e0e8f3 !important;
}

.hytrix-job-card .cke_contents {
    min-height: 220px !important;
}

/* Checkbox */
.hytrix-job-card .form-check {
    padding: 13px 15px 13px 38px;
    background: #f5f9ff;
    border: 1px solid #e3eaf5;
    border-radius: 9px;
    margin-top: 5px;
}

.hytrix-job-card .form-check-input {
    margin-top: 4px;
    cursor: pointer;
    accent-color: #344f91;
}

.hytrix-job-card .form-check-label {
    color: #536585;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
}

/* Footer */
.hytrix-job-card .card-footer {
    background: #f8faff;
    border-top: 1px solid #e9eef6;
    padding: 20px 30px;
    display: flex;
    justify-content: flex-end;
}

/* Submit Button */
.hytrix-submit-btn {
    min-width: 155px;
    min-height: 47px;
    border: none !important;
    border-radius: 9px !important;
    padding: 11px 24px !important;
    background: linear-gradient(
        110deg,
        #344f91,
        #269fc6,
        #50c4e2
    ) !important;
    color: #fff !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    letter-spacing: .3px;
    box-shadow: 0 6px 16px rgba(52,79,145,.20);
    transition: all .3s ease;
}

.hytrix-submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 9px 20px rgba(52,79,145,.30);
    background: linear-gradient(
        110deg,
        #263d79,
        #269fc6
    ) !important;
}

.hytrix-submit-btn i {
    margin-right: 8px;
}

/* Success / Error Alert */
.hytrix-alert {
    border-radius: 9px;
    padding: 13px 17px;
    font-size: 13px;
    font-weight: 600;
    border: none;
    box-shadow: 0 4px 12px rgba(0,0,0,.04);
}

.hytrix-alert.alert-success {
    background: #e9f9f1;
    color: #188653 !important;
    border-left: 4px solid #25ad73;
}

.hytrix-alert.alert-danger {
    background: #fff0f0;
    color: #c63d49 !important;
    border-left: 4px solid #df5260;
}

/* Responsive */
@media (max-width: 767px) {

    .hytrix-job-page {
        padding: 17px 10px;
    }

    .job-page-heading h2 {
        font-size: 21px;
    }

    .hytrix-job-card .card-header {
        padding: 18px;
    }

    .hytrix-job-card .card-body {
        padding: 20px 16px;
    }

    .hytrix-job-card .card-footer {
        padding: 17px;
    }

    .hytrix-job-card .form-group {
        margin-bottom: 20px;
    }

    .hytrix-submit-btn {
        width: 100%;
    }
}

@media (max-width: 380px) {
    .job-header-content {
        gap: 10px;
    }

    .job-header-icon {
        width: 42px;
        height: 42px;
        min-width: 42px;
    }

    .hytrix-job-card .card-title {
        font-size: 16px;
    }
}
</style>

<!-- Content Wrapper -->
<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid hytrix-job-page">

            <!-- Page Heading -->
            <div class="job-page-heading">
                <div>
                    <h2>
                        <i class="fas fa-briefcase mr-2"></i>
                        Post A Job
                    </h2>
                    <p>Create and publish a new job opportunity on your website.</p>
                </div>
            </div>

            <!-- Success / Error Messages -->
            @if(session()->has('success'))
                <p class="alert alert-success hytrix-alert w-100 mt-3">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session()->get('success') }}
                </p>
            @elseif(session()->has('failed'))
                <p class="alert alert-danger hytrix-alert w-100 mt-3">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    {{ session()->get('failed') }}
                </p>
            @endif

            <!-- Main Job Form -->
            <div class="card hytrix-job-card">

                <!-- Card Header -->
                <div class="card-header">
                    <div class="job-header-content">

                        <div class="job-header-icon">
                            <i class="fas fa-file-circle-plus"></i>
                        </div>

                        <div>
                            <h3 class="card-title">Create New Job</h3>
                            <p>Fill in the details below to publish your job post.</p>
                        </div>

                    </div>
                </div>

                <!-- Form Start -->
                <form action="{{route('jobstore')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="card-body">

                        <!-- Job Title -->
                        <div class="form-group">
                            <label for="exampleInputtext">
                                <i class="fas fa-heading"></i>
                                Job Title
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="exampleInputtext"
                                placeholder="Enter job post title"
                                name="title"
                                value="{{ old('title') }}"
                            >

                            <span class="text-danger">
                                @error('title')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>

                        <!-- Job Description -->
                        <div class="form-group">
                            <label for="editor">
                                <i class="fas fa-align-left"></i>
                                Job Description
                            </label>

                            <textarea
                                id="editor"
                                class="block w-full mt-1 rounded-md"
                                name="description"
                                placeholder="Write job description..."
                                cols="30"
                                rows="5"
                            >{{ old('description') }}</textarea>

                            <span class="text-danger">
                                @error('description')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>

                        <!-- Upload Image -->
                        <div class="form-group">
                            <label for="exampleIputImage">
                                <i class="fas fa-cloud-arrow-up"></i>
                                Upload Job Image
                            </label>

                            <input
                                type="file"
                                class="form-control"
                                id="exampleIputImage"
                                name="file"
                                accept="image/*"
                            >

                            <span class="text-danger">
                                @error('file')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="exampleCheck1"
                            >

                            <label class="form-check-label" for="exampleCheck1">
                                Check me out
                            </label>
                        </div>

                    </div>

                    <!-- Card Footer -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary hytrix-submit-btn">
                            <i class="fas fa-paper-plane"></i>
                            Post Job
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </section>

</div>

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('editor', {
        height: 250,
        resize_enabled: true
    });
</script>

@endsection

@section('title')
Post A Job
@endsection
