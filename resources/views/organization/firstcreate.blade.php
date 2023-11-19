<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Create First Organization | {{ getenv('APP_NAME') }}</title>
    <link rel="apple-touch-icon" href="/assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/plugins/forms/form-wizard.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <style>
        .bs-stepper-header {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            /* Atur tinggi sesuai kebutuhan */
        }
    </style>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="index.html">
                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill: currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h2 class="brand-text text-primary ms-1">{{ getenv('APP_NAME') }}</h2>
                        </a>
                        <!-- /Brand logo-->

                        <!-- Left Text-->
                        <div class="col-lg-3 d-none d-lg-flex align-items-center p-0">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center">
                                <img class="img-fluid w-100" src="/assets/images/illustration/create-account.svg"
                                    alt="multi-steps" />
                            </div>
                        </div>
                        <!-- /Left Text-->

                        <!-- Register-->
                        <div class="col-lg-9 d-flex align-items-center auth-bg px-2 px-sm-3 px-lg-5 pt-3">
                            <div class="width-700 mx-auto">
                                <h2 class="text-center">Do you have any organization?</h2>
                                <div class="bs-stepper create-first-org-wizard shadow-none">
                                    <div class="bs-stepper-header px-0" role="tablist">
                                        <div class="step" data-target="#create-new" role="tab" id="create-new-trigger">
                                            <button type="button" class="step-trigger">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="plus-square" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Nope, I don't have one</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            |
                                        </div>
                                        <div class="step" data-target="#join-org" role="tab" id="join-org-trigger">
                                            <button type="button" class="step-trigger">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="home" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">I want to join organization</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-content px-0 mt-2">
                                        <div id="create-new" class="content" role="tabpanel"
                                            aria-labelledby="create-new-trigger">
                                            <div class="content-header mb-2">
                                                <h2 class="fw-bolder mb-75">Create New Organization</h2>
                                                <span>Organize your organization with {{ getenv('APP_NAME') }}</span>
                                            </div>

                                            <form class="validate-form mt-2 pt-50" id="neworgform">

                                                <div class="d-flex mb-2">
                                                    <a href="#" class="me-25">
                                                        <img src="/assets/images/portrait/small/avatar-s-11.jpg"
                                                            id="image-img" class="uploadedAvatar rounded me-50"
                                                            alt="profile image" height="100" width="100" />
                                                    </a>
                                                    <!-- upload and reset button -->
                                                    <div class="d-flex align-items-end mt-75 ms-1">
                                                        <div>
                                                            <label for="image"
                                                                class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                            <input type="file" id="image" name="image" hidden
                                                                accept="image/*" />
                                                            <button type="button" id="image-reset"
                                                                class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                                            <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                                        </div>
                                                    </div>
                                                    <!--/ upload and reset button -->
                                                </div>

                                                <div class="row">
                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="name">Organization Name</label>
                                                        <input type="text" class="form-control" id="name" name="name"
                                                            placeholder="Organization Name"
                                                            data-msg="Please enter organization name" />
                                                    </div>
                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="role">Your Role</label>
                                                        <select id="role" name="role" class="select2 form-select">
                                                            <option value="">Select Role</option>
                                                            @foreach($roles as $role)
                                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <button type="submit" class="btn btn-primary me-1 mt-1">Create
                                                            Organization</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-secondary mt-1">Reset</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        <div id="join-org" class="content" role="tabpanel"
                                            aria-labelledby="join-org-trigger">
                                            <div class="content-header mb-2">
                                                <h2 class="fw-bolder mb-75">Want to join other organization?</h2>
                                                <span>You must have the organization code that the owner gave
                                                    you.</span>
                                            </div>

                                            <form id="joinorg">
                                                <div class="mb-1">
                                                    <label class="form-label" for="orgcode">Organiation Code</label>
                                                    <input id="code" name="code" class="form-control" type="text"
                                                        placeholder="Organization Code" />
                                                </div>
                                                <div class="col-12 col-sm-6 mb-1">
                                                    <button type="submit" class="btn btn-primary me-1 mt-1">Join
                                                        Organization</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-secondary mt-1">Reset</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="/assets/vendors/js/vendors.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="/assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="/assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="/assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="/assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/assets/js/core/app-menu.js"></script>
    <script src="/assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <script>
        'use strict';
        $.ajaxSetup({
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Authorization', 'Bearer {{ session('auth_token') }}');
            }
        });
        console.log('Bearer {{ session('auth_token') }}');

        var createFirstOrgWizard = document.querySelector('.create-first-org-wizard');

        var firstFormWizard = new Stepper(createFirstOrgWizard, {
            linear: false,
            animation: true
        });

        $('.select2').select2({
            placeholder: 'Select Role'
        });

        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }

            $("#neworgform").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}');
                $.ajax({
                    url: '{{ route("organization.create") }}',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        }).then((result) => {
                            window.location.href = '{{ route("dashboard") }}';
                        });
                    },
                    error: function(data) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.responseJSON.message,
                        });
                    }
                });
            });

            $("#joinorg").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}');
                $.ajax({
                    url: '{{ route("organization.join") }}',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        }).then((result) => {
                            window.location.href = '{{ route("dashboard") }}';
                        });
                    },
                    error: function(data) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.responseJSON.message,
                        });
                    }
                });
            });
        })

        $('#image').on('change', function() {
            var file = $(this)[0].files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                $('#image-img').attr('src', reader.result);
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {
                $('#image-img').attr('src', '');
            }
        });

        $('#image-reset').on('click', function() {
            $('#image').val('');
            $('#image-img').attr('src', '/assets/images/portrait/small/avatar-s-11.jpg');
        });
    </script>
</body>
<!-- END: Body-->

</html>