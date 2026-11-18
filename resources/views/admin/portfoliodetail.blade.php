
@extends('admin.layout.master')

@section('content')

<style>
    .portfolio-page {
        background: #f1f5fc;
        min-height: 100vh;
        padding: 24px 0 35px;
    }

    .portfolio-page .container-fluid {
        padding-left: 22px;
        padding-right: 22px;
    }

    .portfolio-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 22px;
        flex-wrap: wrap;
        gap: 12px;
    }

    .portfolio-heading h3 {
        color: #192b56;
        font-size: 23px;
        font-weight: 700;
        margin: 0;
    }

    .portfolio-heading p {
        color: #8290a9;
        font-size: 13px;
        margin: 5px 0 0;
    }

    .portfolio-card {
        background: #fff;
        border: 1px solid #e4eaf4;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(25,43,86,.05);
        margin-bottom: 22px;
        overflow: hidden;
    }

    .portfolio-card-header {
        padding: 17px 21px;
        border-bottom: 1px solid #edf1f7;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .portfolio-card-header h5 {
        color: #192b56;
        font-size: 16px;
        font-weight: 700;
        margin: 0;
    }

    .portfolio-card-header p {
        color: #8a96aa;
        font-size: 12px;
        margin: 4px 0 0;
    }

    .portfolio-card-body {
        padding: 22px;
    }

    .portfolio-label {
        color: #34466d;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 9px;
    }

    .portfolio-file {
        background: #f7f9fd;
        border: 1px dashed #aebdd8;
        border-radius: 9px;
        padding: 13px;
        width: 100%;
        font-size: 13px;
        color: #65738d;
    }

    .portfolio-file:focus {
        outline: none;
        border-color: #50a9d5;
    }

    .portfolio-preview {
        width: 100%;
        max-width: 180px;
        height: 125px;
        object-fit: cover;
        border-radius: 9px;
        border: 1px solid #e4eaf4;
        margin-top: 14px;
        display: none;
    }

    .portfolio-btn {
        background: linear-gradient(135deg, #263d79, #50a9d5);
        color: #fff !important;
        border: 0;
        border-radius: 7px;
        padding: 10px 23px;
        font-size: 13px;
        font-weight: 600;
        transition: .2s;
    }

    .portfolio-btn:hover {
        box-shadow: 0 5px 13px rgba(38,61,121,.2);
        transform: translateY(-1px);
    }

    .portfolio-table {
        margin: 0;
        width: 100%;
    }

    .portfolio-table thead th {
        background: #f4f7fc;
        color: #52617e;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .4px;
        border-top: 0;
        border-bottom: 1px solid #e8edf5;
        padding: 15px 18px;
        white-space: nowrap;
    }

    .portfolio-table tbody td {
        padding: 13px 18px;
        vertical-align: middle;
        color: #53617b;
        font-size: 13px;
        border-top: 1px solid #edf1f7;
    }

    .portfolio-table tbody tr:hover {
        background: #f9fbff;
    }

    .portfolio-image {
        width: 65px;
        height: 55px;
        object-fit: cover;
        border-radius: 7px;
        border: 1px solid #e5eaf2;
        background: #f5f7fb;
    }

    .portfolio-sr {
        font-weight: 700;
        color: #263d79 !important;
    }

    .portfolio-action {
        border: 0;
        border-radius: 6px;
        padding: 7px 13px;
        font-size: 12px;
        font-weight: 600;
        margin: 2px;
        cursor: pointer;
    }

    .portfolio-edit {
        background: #e9f4fb;
        color: #2479ad !important;
    }

    .portfolio-delete {
        background: #fff0f0;
        color: #d34d58 !important;
    }

    .portfolio-action:hover {
        opacity: .82;
    }

    .portfolio-empty {
        text-align: center;
        padding: 35px 15px !important;
        color: #8b97aa !important;
    }

    /* Edit overlay */
    #edit-box {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 9999;
        background: rgba(15, 29, 58, .55);
        padding: 20px;
        overflow-y: auto;
    }

    .portfolio-edit-modal {
        background: #fff;
        max-width: 650px;
        width: 100%;
        margin: 35px auto;
        border-radius: 13px;
        box-shadow: 0 15px 50px rgba(0,0,0,.2);
        overflow: hidden;
        position: relative;
    }

    .portfolio-modal-header {
        background: linear-gradient(120deg, #192b56, #344f91);
        color: #fff;
        padding: 18px 22px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .portfolio-modal-header h5 {
        font-size: 16px;
        font-weight: 700;
        margin: 0;
    }

    #close-btn {
        border: 0;
        background: rgba(255,255,255,.15);
        color: #fff;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        font-size: 19px;
        cursor: pointer;
        line-height: 30px;
    }

    .portfolio-modal-body {
        padding: 23px;
    }

    #old-image {
        width: 150px;
        height: 125px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #e4eaf4;
        margin-top: 10px;
    }

    .portfolio-modal-footer {
        padding: 15px 23px;
        background: #f8faff;
        border-top: 1px solid #edf1f7;
        text-align: right;
    }

    .portfolio-alert {
        border-radius: 8px;
        font-size: 13px;
        padding: 12px 16px;
    }

    @media(max-width: 767px) {
        .portfolio-page .container-fluid {
            padding-left: 12px;
            padding-right: 12px;
        }

        .portfolio-card-body {
            padding: 15px;
        }

        .portfolio-heading h3 {
            font-size: 20px;
        }

        .portfolio-table {
            min-width: 480px;
        }

        #edit-box {
            padding: 10px;
        }

        .portfolio-edit-modal {
            margin: 20px auto;
        }
    }
</style>

<div class="content-wrapper portfolio-page">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="portfolio-heading">
            <div>
                <h3>Portfolio Management</h3>
                <p>Upload, manage and update your portfolio images.</p>
            </div>
        </div>

        <!-- Success / Error Messages -->
        @if(session()->has('success'))
            <div class="alert alert-success portfolio-alert">
                {{ session()->get('success') }}
            </div>
        @elseif(session()->has('failed'))
            <div class="alert alert-danger portfolio-alert">
                {{ session()->get('failed') }}
            </div>
        @endif

        <!-- Upload Portfolio -->
        <div class="portfolio-card">

            <div class="portfolio-card-header">
                <div>
                    <h5><i class="fas fa-cloud-upload-alt mr-2"></i> Add New Portfolio</h5>
                    <p>Upload a new portfolio image to your website.</p>
                </div>
                <i class="fas fa-images" style="font-size:24px;color:#50a9d5;"></i>
            </div>

            <div class="portfolio-card-body">

                <form action="{{ route('portfoliostore') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row align-items-start">

                        <div class="col-md-7">
                            <div class="form-group mb-3">
                                <label class="portfolio-label" for="portfolioImage">
                                    Upload Portfolio Image <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="file"
                                    class="portfolio-file"
                                    id="portfolioImage"
                                    name="image"
                                    accept="image/*"
                                >

                                @error('image')
                                    <span class="text-danger small d-block mt-2">{{ $message }}</span>
                                @enderror

                                <small class="text-muted d-block mt-2">
                                    Select an image to preview before uploading.
                                </small>

                                <img id="upload-preview" class="portfolio-preview" alt="Image preview">
                            </div>
                        </div>

                    </div>

                    <div class="border-top pt-3 mt-2">
                        <button type="submit" class="btn portfolio-btn">
                            <i class="fas fa-plus mr-1"></i> Post Portfolio
                        </button>
                    </div>

                </form>

            </div>
        </div>


        <!-- Portfolio List -->
        <div class="portfolio-card">

            <div class="portfolio-card-header">
                <div>
                    <h5><i class="fas fa-th-large mr-2"></i> Portfolio Gallery</h5>
                    <p>View and manage all uploaded portfolio images.</p>
                </div>

                <span style="background:#eaf5fc;color:#287fae;padding:6px 12px;border-radius:20px;font-size:11px;font-weight:700;">
                    {{ count($data) }} Images
                </span>
            </div>

            <div class="table-responsive">

                <table class="table portfolio-table">

                    <thead>
                        <tr>
                            <th width="90">Sr. No.</th>
                            <th class="text-center">Portfolio Image</th>
                            <th class="text-center" width="200">Actions</th>
                        </tr>
                    </thead>

                    <?php $i = 0; ?>

                    <tbody>

                        @forelse($data as $val)

                            <tr>
                                <td class="portfolio-sr">{{ ++$i }}</td>

                                <td class="text-center">
                                    <img
                                        src="{{ asset($val->image) }}"
                                        class="portfolio-image"
                                        alt="Portfolio Image"
                                    >
                                </td>

                                <td class="text-center">

                                    <button
                                        type="button"
                                        class="portfolio-action portfolio-edit edit-btn"
                                        data-id="{{ $val->id }}"
                                    >
                                        <i class="fas fa-edit mr-1"></i> Edit
                                    </button>

                                    <button
                                        type="button"
                                        class="portfolio-action portfolio-delete delete-btn"
                                        data-id="{{ $val->id }}"
                                    >
                                        <i class="fas fa-trash-alt mr-1"></i> Delete
                                    </button>

                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="3" class="portfolio-empty">
                                    <i class="fas fa-images fa-2x mb-2 d-block"></i>
                                    No portfolio images found.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>
        </div>

    </div>
</div>


<!-- Edit Portfolio Modal -->
<div id="edit-box">

    <div class="portfolio-edit-modal">

        <div class="portfolio-modal-header">
            <h5><i class="fas fa-edit mr-2"></i> Update Portfolio Image</h5>

            <button type="button" id="close-btn" aria-label="Close">&times;</button>
        </div>

        <form action="{{ route('portfoliostore') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="portfolio-modal-body">

                <div class="form-group">
                    <label class="portfolio-label" for="editPortfolioImage">
                        Upload New Image
                    </label>

                    <input
                        type="file"
                        class="portfolio-file"
                        id="editPortfolioImage"
                        name="image"
                        accept="image/*"
                    >

                    @error('image')
                        <span class="text-danger small d-block mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-0">
                    <label class="portfolio-label">Current Portfolio Image</label>
                    <br>

                    <img src="" id="old-image" alt="Current Portfolio Image">
                </div>

            </div>

            <div class="portfolio-modal-footer">
                <button type="button" class="btn btn-light mr-2" id="cancel-edit">
                    Cancel
                </button>

                <button type="submit" class="btn portfolio-btn">
                    <i class="fas fa-save mr-1"></i> Update Image
                </button>
            </div>

        </form>

    </div>

</div>


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<script>
$(document).ready(function () {

    // Upload image preview
    $('#portfolioImage').on('change', function () {
        const file = this.files[0];

        if (file) {
            $('#upload-preview')
                .attr('src', URL.createObjectURL(file))
                .show();
        } else {
            $('#upload-preview').hide();
        }
    });


    // Hide edit modal
    $('#close-btn, #cancel-edit').on('click', function () {
        $('#edit-box').fadeOut(200);
    });


    // Close modal on outside click
    $('#edit-box').on('click', function (e) {
        if (e.target === this) {
            $('#edit-box').fadeOut(200);
        }
    });


    // Delete portfolio
    $(document).on('click', '.delete-btn', function (e) {

        e.preventDefault();

        if (confirm('Do you really want to delete this portfolio image?')) {

            var studentid = $(this).data('id');
            var element = $(this);

            $.ajax({
                url: "{{ route('portfoliodetaildelete') }}",
                type: "GET",
                data: {
                    id: studentid
                },

                success: function (data) {

                    if (data == 1) {
                        element.closest('tr').fadeOut(300, function () {
                            $(this).remove();
                        });

                    } else {
                        alert('Operation has been failed!');
                    }
                },

                error: function () {
                    alert('Something went wrong. Please try again.');
                }
            });

        }

    });


    // Fetch portfolio image for editing
    $(document).on('click', '.edit-btn', function (e) {

        e.preventDefault();

        var id = $(this).data('id');

        $.ajax({
            url: '{{ route("happyclientdatashow") }}',
            type: "GET",

            data: {
                id: id
            },

            success: function (data) {

                if (data && data.length > 0) {

                    $('#old-image').attr('src', data[0].image);

                    $('#edit-box').fadeIn(200);

                } else {
                    alert('Portfolio image not found.');
                }

            },

            error: function () {
                alert('Unable to fetch portfolio details.');
            }

        });

    });

});
</script>

@endsection

@section('title')
Happy Clients
@endsection
