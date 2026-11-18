
@extends('admin.layout.master')

@section('content')

<style>
/* =========================================
   HYTRIX PREMIUM JOB DETAILS
   Navy Blue + Sky Blue Theme
========================================= */

:root {
    --hy-navy: #263d79;
    --hy-dark: #192b56;
    --hy-blue: #344f91;
    --hy-sky: #50c4e2;
    --hy-bg: #f1f5fc;
    --hy-text: #27395e;
}

/* Main Background */
.content-wrapper {
    background: var(--hy-bg) !important;
    min-height: calc(100vh - 57px);
    padding-bottom: 35px;
}

/* Main Page */
.hy-job-details {
    padding: 25px 20px;
}

/* Page Heading */
.hy-page-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 22px;
}

.hy-page-heading h1 {
    font-size: 25px;
    font-weight: 800;
    color: var(--hy-navy);
    margin: 0 0 6px;
}

.hy-page-heading p {
    color: #8591a9;
    font-size: 13px;
    margin: 0;
}

.hy-breadcrumb {
    background: transparent !important;
    margin: 0;
    padding: 0;
    font-size: 13px;
}

.hy-breadcrumb a {
    color: #36a9ca;
    font-weight: 600;
}

/* Alerts */
.hy-alert {
    padding: 13px 17px;
    border: none;
    border-radius: 9px;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 20px;
}

#msg-success {
    background: #e9f9f1;
    color: #168451;
    border-left: 4px solid #27b477;
}

#msg-failed {
    background: #fff0f0;
    color: #c53c4b;
    border-left: 4px solid #df5260;
}

/* Table Card */
.hy-table-card {
    background: #fff;
    border-radius: 15px;
    border: 1px solid #e3eaf5;
    overflow: hidden;
    box-shadow: 0 7px 25px rgba(35,57,105,.07);
}

/* Table Card Header */
.hy-table-card-header {
    padding: 20px 23px;
    background: linear-gradient(
        110deg,
        #263d79,
        #344f91 60%,
        #43afd0
    );
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    position: relative;
    overflow: hidden;
}

.hy-table-card-header h3 {
    color: #fff;
    font-size: 17px;
    font-weight: 800;
    margin: 0;
}

.hy-table-card-header p {
    color: rgba(255,255,255,.8);
    font-size: 12px;
    margin: 5px 0 0;
}

.hy-table-card-header .header-icon {
    width: 43px;
    height: 43px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,.16);
    border: 1px solid rgba(255,255,255,.2);
    color: #fff;
    font-size: 19px;
}

/* Table Wrapper */
.hy-table-body {
    padding: 22px;
}

.hy-table-responsive {
    width: 100%;
    overflow-x: auto;
    border-radius: 10px;
}

/* Table */
.hy-job-table {
    width: 100%;
    min-width: 850px;
    border-collapse: separate;
    border-spacing: 0;
    margin: 0;
}

.hy-job-table thead th {
    background: #edf4fc;
    color: #263d79;
    padding: 16px 14px;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .5px;
    border-top: 1px solid #e4ebf5;
    border-bottom: 1px solid #dfe8f4;
    white-space: nowrap;
}

.hy-job-table thead th:first-child {
    border-radius: 8px 0 0 0;
}

.hy-job-table thead th:last-child {
    border-radius: 0 8px 0 0;
    text-align: center;
}

.hy-job-table tbody td,
.hy-job-table tbody th {
    padding: 15px 14px;
    color: #52617e;
    font-size: 13px;
    vertical-align: middle;
    border-bottom: 1px solid #edf1f7;
}

.hy-job-table tbody tr {
    transition: background .2s ease;
}

.hy-job-table tbody tr:hover {
    background: #f5faff;
}

.hy-job-table tbody tr:last-child td,
.hy-job-table tbody tr:last-child th {
    border-bottom: none;
}

/* ID Badge */
.hy-id-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 32px;
    height: 30px;
    padding: 0 9px;
    background: #edf4ff;
    color: #344f91;
    border-radius: 7px;
    font-weight: 800;
    font-size: 12px;
}

/* Job Title */
.hy-job-title {
    color: #263d79 !important;
    font-weight: 700;
    min-width: 130px;
}

/* Description */
.hy-job-description {
    max-width: 300px;
    min-width: 180px;
    line-height: 1.7;
    color: #6d7b96 !important;
    overflow-wrap: anywhere;
}

.hy-job-description p {
    margin-bottom: 4px;
}

/* Image */
.hy-job-image {
    width: 62px;
    height: 52px;
    object-fit: cover;
    border-radius: 9px;
    border: 2px solid #e5edf8;
    padding: 2px;
    background: #fff;
    transition: all .25s ease;
}

.hy-job-image:hover {
    transform: scale(1.08);
    border-color: var(--hy-sky);
}

/* Action Buttons */
.hy-action-buttons {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    white-space: nowrap;
}

.hy-btn {
    border: none;
    border-radius: 7px;
    padding: 9px 14px;
    font-size: 12px;
    font-weight: 700;
    text-decoration: none !important;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    transition: all .25s ease;
    cursor: pointer;
}

.hy-edit-btn {
    color: #fff !important;
    background: linear-gradient(120deg, #344f91, #50c4e2);
    box-shadow: 0 4px 10px rgba(52,79,145,.15);
}

.hy-edit-btn:hover {
    color: #fff !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(52,79,145,.25);
}

.hy-delete-btn {
    color: #fff !important;
    background: linear-gradient(120deg, #d94353, #f07882);
    box-shadow: 0 4px 10px rgba(217,67,83,.13);
}

.hy-delete-btn:hover {
    color: #fff !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(217,67,83,.23);
}

/* Responsive */
@media(max-width: 767px) {

    .hy-job-details {
        padding: 17px 10px;
    }

    .hy-page-heading h1 {
        font-size: 21px;
    }

    .hy-table-card-header {
        padding: 17px;
    }

    .hy-table-body {
        padding: 12px;
    }

    .hy-job-table thead th,
    .hy-job-table tbody td,
    .hy-job-table tbody th {
        padding: 12px 10px;
    }
}
</style>


<!-- Content Wrapper -->
<div class="content-wrapper">

    <section class="content">

        <div class="container-fluid hy-job-details">

            <!-- Page Heading -->
            <div class="hy-page-heading">

                <div>
                    <h1>
                        <i class="fas fa-briefcase mr-2"></i>
                        Job Post Details
                    </h1>

                    <p>Manage, edit and delete your published job posts.</p>
                </div>

                <div>
                    <ol class="breadcrumb hy-breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Job Post Details
                        </li>
                    </ol>
                </div>

            </div>


            <!-- Success / Failed Message -->
            @if(session()->has('success'))

                <p class="alert hy-alert w-100" id="msg-success">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session()->get('success') }}
                </p>

            @elseif(session()->has('failed'))

                <p class="alert hy-alert w-100" id="msg-failed">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    {{ session()->get('failed') }}
                </p>

            @endif


            <!-- Job Details Table Card -->
            <div class="hy-table-card">

                <!-- Card Header -->
                <div class="hy-table-card-header">

                    <div>
                        <h3>
                            Job Posts Management
                        </h3>

                        <p>View and manage all your job posting records.</p>
                    </div>

                    <div class="header-icon">
                        <i class="fas fa-list-check"></i>
                    </div>

                </div>


                <!-- Table Body -->
                <div class="hy-table-body">

                    <div class="hy-table-responsive">

                        <table class="hy-job-table">

                            <thead>
                                <tr class="text-capitalize">

                                    <th scope="col">ID</th>

                                    <th scope="col">Title</th>

                                    <th scope="col">Description</th>

                                    <th scope="col">Image</th>

                                    <th scope="col" colspan="2">
                                        Action
                                    </th>

                                </tr>
                            </thead>


                            <tbody>

                                <?php $i=0; ?>

                                @foreach($user as $users)

                                <tr>

                                    <!-- ID -->
                                    <th scope="row">
                                        <span class="hy-id-badge">
                                            {{ ++$i }}
                                        </span>
                                    </th>


                                    <!-- Title -->
                                    <td class="hy-job-title">
                                        {{ $users->title }}
                                    </td>


                                    <!-- Description -->
                                    <td class="hy-job-description">
                                        {!! $users->description !!}
                                    </td>


                                    <!-- Image -->
                                    <td>
                                        <img
                                            src="{{ asset('public/'.$users->file) }}"
                                            class="hy-job-image"
                                            alt="Job Image"
                                        >
                                    </td>


                                    <!-- Actions -->
                                    <td>

                                        <div class="hy-action-buttons">

                                            <a
                                                href="{{route('jobappdetailchange',['id'=>$users->id])}}"
                                                class="hy-btn hy-edit-btn edit-btn"
                                                data-id="{{$users->id}}"
                                            >
                                                <i class="fas fa-pen"></i>
                                                Edit
                                            </a>


                                            <a
                                                href="#"
                                                class="hy-btn hy-delete-btn delete-btn"
                                                data-id="{{ $users->id }}"
                                            >
                                                <i class="fas fa-trash-alt"></i>
                                                Delete
                                            </a>

                                        </div>

                                    </td>

                                </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- CKEditor Script - Existing Integration -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>


    <!-- Existing Delete AJAX Logic -->
    <script type="text/javascript">

    $(document).ready(function(){

        // Delete function code

        $(document).on("click", ".delete-btn", function(e){

            if(confirm("do you really want to delete this record?")){

                e.preventDefault();

                var studentid = $(this).data("id");

                var element = $(this);

                $.ajax({

                    url: "{{ route('jobappdetaildelete') }}",

                    type: "get",

                    data: {
                        id: studentid
                    },

                    success: function(data){

                        console.log(data);

                        if(data==1){

                            $(element).closest("tr").fadeOut();

                        } else {

                            alert('operation has been failed!');

                        }

                    }

                });

            }

        });

        // Delete function code

    });

    </script>

</div>

@endsection


@section('title')
Job Details
@endsection
