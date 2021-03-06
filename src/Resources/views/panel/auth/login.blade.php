<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Swandam Login Page</title>
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('vendor/swandam/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('vendor/swandam/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendor/swandam/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('vendor/swandam/css/codebase.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
{{--

  Available classes for #page-container:

  GENERIC

    'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                - Theme helper buttons [data-toggle="theme"],
                                                - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                - ..and/or Codebase.layout('dark_mode_[on/off/toggle]')

  SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

  HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header

  HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-modern'                        Modern Header style
    'page-header-dark'                          Dark themed Header (works only with classic Header style)
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'        Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

  MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

  DARK MODE

    'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)

--}}
<div id="page-container" class="main-content-boxed">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('{{ asset('vendor/swandam/media/photos/photo34@2x.jpg') }}');">
            <div class="row mx-0 bg-earth-op">
                <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                    <div class="p-4">
                        <p class="fs-3 fw-semibold text-white mb-1">
                            We're very happy you are joining our community!
                        </p>
                        <p class="text-white-75 fw-medium">
                            Copyright &copy; <span data-toggle="year-copy"></span>
                        </p>
                    </div>
                </div>
                <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-body-extra-light">
                    <div class="content content-full">
                        <!-- Header -->
                        <div class="px-4 py-2 mb-4">
                            <a class="link-fx fw-bold" href="index.html">
                                <i class="fa fa-fire"></i>
                                <span class="fs-4 text-body-color">swan</span><span class="fs-4">dam</span>
                            </a>
                            <h1 class="h3 fw-bold mt-4 mb-2">Login Account</h1>
                            <h2 class="h5 fw-medium text-muted mb-0">Please enter your login information</h2>
                        </div>
                        <!-- END Header -->

                        <!-- Sign Up Form -->
                        <!-- jQuery Validation functionality is initialized with .js-validation-signup class in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js -->
                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-signup px-4" action="#" method="POST">
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="signup-email" name="signup-email" placeholder="Enter your email">
                                <label class="form-label" for="signup-email">Email</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="signup-password" name="signup-password" placeholder="Enter your password">
                                <label class="form-label" for="signup-password">Password</label>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold w-100">
                                   Login
                                </button>
                            </div>
                        </form>
                        <!-- END Sign Up Form -->
                    </div>
                </div>
            </div>

            <!-- Terms Modal -->
            <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded shadow-none mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Terms &amp; Conditions</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content fs-sm">
                                <h5 class="mb-2">1. General</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
                                </p>
                                <h5 class="mb-2">2. Account</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
                                </p>
                                <h5 class="mb-2">3. Service</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
                                </p>
                                <h5 class="mb-2">4. Payments</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
                                </p>
                            </div>
                            <div class="block-content block-content-full block-content-sm text-end border-top">
                                <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
                                    Done
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Terms Modal -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!--
    Codebase JS

    Core libraries and functionality
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="{{ asset('vendor/swandam/js/codebase.app.min.js') }}"></script>

<!-- jQuery (required for Select2 + jQuery Validation plugins) -->
<script src="{{ asset('vendor/swandam/js/lib/jquery.min.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('vendor/swandam/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('vendor/swandam/js/pages/op_auth_signup.min.js') }}"></script>
</body>
</html>
