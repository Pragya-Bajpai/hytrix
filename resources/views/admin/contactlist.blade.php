
@extends('admin.layout.master')

@section('content')

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">

<style>
    /* =====================================
       HYTRIX CONTACT DETAILS PAGE
    ===================================== */

    .content-wrapper {
        background: #f1f5fc !important;
        min-height: 100vh;
    }

    .content-header {
        padding: 24px 20px 12px;
    }

    .content-header h1 {
        color: #263d79;
        font-size: 25px;
        font-weight: 700;
        margin: 0;
    }

    .breadcrumb {
        background: transparent;
        padding: 8px 0;
        margin-bottom: 0;
    }

    .breadcrumb-item {
        font-size: 13px;
        color: #8995ad;
    }

    .breadcrumb-item a {
        color: #50a9d5;
        font-weight: 600;
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: #263d79;
        font-weight: 600;
    }

    .contact-section {
        padding: 12px 20px 30px;
    }

    /* Main Card */

    .contact-card {
        background: #fff;
        border: 1px solid #e6edf7;
        border-radius: 15px;
        box-shadow: 0 5px 24px rgba(38, 61, 121, 0.07);
        overflow: hidden;
    }

    .contact-card-header {
        padding: 20px 24px;
        display: flex;
        align-items: center;
        gap: 13px;
        border-bottom: 1px solid #edf1f7;
        background: linear-gradient(120deg, #ffffff, #f7faff);
    }

    .contact-card-icon {
        width: 45px;
        height: 45px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 19px;
        border-radius: 12px;
        background: linear-gradient(135deg, #263d79, #50c4e2);
        box-shadow: 0 5px 12px rgba(38, 61, 121, .18);
    }

    .contact-card-header h5 {
        margin: 0;
        color: #263d79;
        font-size: 17px;
        font-weight: 700;
    }

    .contact-card-header p {
        margin: 4px 0 0;
        color: #8995ad;
        font-size: 12px;
    }

    .contact-card-body {
        padding: 22px 24px;
    }

    /* Contact Table */

    #example1 {
        width: 100% !important;
        border-collapse: separate !important;
        border-spacing: 0;
        margin-top: 10px !important;
    }

    #example1 thead th {
        background: #f1f5fc;
        color: #344f91;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .4px;
        padding: 15px 14px;
        white-space: nowrap;
        border-top: 1px solid #e4ebf5;
        border-bottom: 1px solid #e4ebf5;
    }

    #example1 tbody td {
        color: #52617d;
        font-size: 13px;
        font-weight: 500;
        padding: 15px 14px;
        vertical-align: middle;
        border-bottom: 1px solid #edf1f7;
    }

    #example1 tbody tr {
        transition: background .2s ease;
    }

    #example1 tbody tr:hover {
        background: #f7faff;
    }

    #example1 tbody td:first-child {
        color: #344f91;
        font-weight: 700;
    }

    #example1 tbody td:nth-child(2) {
        color: #263d79;
        font-weight: 600;
    }

    #example1 tbody td:nth-child(4) {
        color: #438eae;
        font-weight: 600;
    }

    #example1 tfoot th {
        background: #f7f9fd;
        color: #344f91;
        font-size: 11px;
        font-weight: 700;
        padding: 12px 14px;
        text-transform: uppercase;
        border-top: 1px solid #e5ebf5;
    }

    /* Search and Entries */

    .dataTables_wrapper {
        color: #66738d;
        font-size: 13px;
    }

    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter {
        margin-bottom: 15px;
        color: #52617d;
        font-size: 13px;
    }

    .dataTables_wrapper .dataTables_length select,
    .dataTables_wrapper .dataTables_filter input {
        height: 35px;
        border: 1px solid #dce5f2;
        border-radius: 6px;
        color: #344f91;
        background: #fff;
        outline: none;
        padding: 5px 9px;
        box-shadow: none;
    }

    .dataTables_wrapper .dataTables_filter input {
        margin-left: 6px;
    }

    .dataTables_wrapper .dataTables_info {
        padding-top: 12px;
        color: #8995ad;
        font-size: 12px;
    }

    /* Small Normal Pagination */

    .dataTables_wrapper .dataTables_paginate {
        padding-top: 10px;
        margin-top: 5px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 3px 8px !important;
        margin: 0 2px !important;
        font-size: 11px !important;
        border: 1px solid #ddd !important;
        border-radius: 3px !important;
        background: #fff !important;
        color: #344f91 !important;
        min-width: 25px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: #344f91 !important;
        color: #fff !important;
        border-color: #344f91 !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: #eee !important;
        color: #263d79 !important;
        border-color: #ccc !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
        color: #aaa !important;
        background: #f8f8f8 !important;
    }

    @media (max-width: 767px) {
        .content-header {
            padding: 18px 14px 8px;
        }

        .content-header h1 {
            font-size: 21px;
        }

        .contact-section {
            padding: 10px 12px 22px;
        }

        .contact-card-header {
            padding: 16px;
        }

        .contact-card-body {
            padding: 15px;
        }

        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_length {
            text-align: left;
            float: none;
            width: 100%;
        }

        .dataTables_wrapper .dataTables_filter input {
            width: 100%;
            margin: 7px 0 0;
        }

        .dataTables_wrapper .dataTables_paginate {
            text-align: left;
        }
    }
</style>

<!-- Content Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 align-items-center">

                <div class="col-sm-6">
                    <h1>Job Contact Details</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Contact Mail Details
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content contact-section">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">

                    <div class="contact-card">

                        <!-- Card Header -->
                        <div class="contact-card-header">

                            <div class="contact-card-icon">
                                <i class="fas fa-address-book"></i>
                            </div>

                            <div>
                                <h5>Contact Form Submissions</h5>
                                <p>View and manage messages received from website visitors</p>
                            </div>

                        </div>

                        <!-- Card Body -->
                        <div class="contact-card-body">

                            <div class="table-responsive">

                                <table id="example1" class="table">

                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>

                                    <?php $i = 0; ?>

                                    <tbody>

                                        @foreach($user as $users)

                                        <tr>
                                            <td>{{++$i}}</td>

                                            <td>{{$users->name}}</td>

                                            <td>{{$users->email}}</td>

                                            <td>{{$users->msg_subject}}</td>

                                            <td>{{$users->message}}</td>
                                        </tr>

                                        @endforeach

                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                        </tr>
                                    </tfoot>

                                </table>

                            </div>

                        </div>
                        <!-- Card Body End -->

                    </div>

                </div>
            </div>

        </div>
    </section>

</div>
<!-- Content Wrapper End -->

<!-- CKEditor: initialize only if editor exists -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const editorElement = document.querySelector('#editor');

        if (editorElement && typeof ClassicEditor !== 'undefined') {
            ClassicEditor
                .create(editorElement)
                .catch(error => {
                    console.error(error);
                });
        }

    });
</script>

<!-- DataTables Initialization -->
<script>
    window.addEventListener('load', function () {

        function initializeContactTable() {

            if (!window.jQuery) {
                console.error('jQuery is not loaded. Please check admin master layout.');
                return;
            }

            if (typeof jQuery.fn.DataTable === 'undefined') {
                console.error('DataTables could not be loaded.');
                return;
            }

            if (jQuery.fn.DataTable.isDataTable('#example1')) {
                return;
            }

            jQuery('#example1').DataTable({
                paging: true,
                pageLength: 10,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                pagingType: 'simple_numbers',

                language: {
                    search: 'Search:',
                    searchPlaceholder: 'Search contacts...',
                    lengthMenu: 'Show _MENU_ entries',
                    info: 'Showing _START_ to _END_ of _TOTAL_ entries',
                    infoEmpty: 'Showing 0 to 0 of 0 entries',
                    infoFiltered: '(filtered from _MAX_ total entries)',
                    zeroRecords: 'No matching records found',
                    emptyTable: 'No contact records available',
                    paginate: {
                        previous: 'Previous',
                        next: 'Next'
                    }
                }
            });
        }

        if (window.jQuery && jQuery.fn.DataTable) {
            initializeContactTable();
            return;
        }

        var coreScript = document.createElement('script');
        coreScript.src = 'https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js';

        coreScript.onload = function () {

            var bootstrapScript = document.createElement('script');
            bootstrapScript.src = 'https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap4.min.js';

            bootstrapScript.onload = initializeContactTable;

            document.body.appendChild(bootstrapScript);
        };

        document.body.appendChild(coreScript);

    });
</script>

@endsection

@section('title')
Contact Details
@endsection
