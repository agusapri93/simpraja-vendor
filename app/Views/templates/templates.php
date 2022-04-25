<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="https://simpraja.mahkamahagung.go.id" />
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="<?= base_url() ?>/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <?= $this->renderSection('custom_style'); ?>
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url() ?>/assets/js/scripts.bundle.js"></script>
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                <!--begin::Header-->
                <?= $this->include('templates/topbar'); ?>
                <!--end::Header-->

                <div class="d-flex flex-column-fluid">
                    <!--begin::Nav-Bar-->
                    <div id="kt_aside" class="aside card shadow-lg" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                        <?= $this->include('templates/sidebar'); ?>
                    </div>
                    <!--end::Nav Bar-->

                    <div class="d-flex flex-column flex-column-fluid container-fluid">
                        <!--begin::Post Content Hereee-->
                        <?= $this->renderSection('content'); ?>
                        <!--end::Post Content Hereee -->

                        <!--begin::Footer-->
                        <div class="footer py-4 d-flex flex-column flex-md-row flex-stack" id="kt_footer">
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-bold me-1">2022 ©</span>
                                <a href="https://mahkamahagung.go.id" target="_blank" class="text-gray-800 text-hover-primary">Mahkamah Agung Republik Indonesia</a>
                            </div>
                            <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                                <li class="menu-item">
                                    <p id="performance-display"></p>
                                </li>
                            </ul>
                        </div>
                        <!--end::Footer-->

                    </div>

                </div>

            </div>

        </div>

    </div>
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
            </svg>
        </span>
    </div>
    <script src="<?= base_url() ?>/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.11.4/datatables.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>

    <script>
        window.onload = function() {
            var loadTime = window.performance.timing.domContentLoadedEventEnd - window.performance.timing.navigationStart;
            console.log('Loading time ' + loadTime / 1000);
            performanceDisplay = document.getElementById("performance-display") // get a reference to the paragraph
            performanceDisplay.innerText = 'Loading time : ' + (loadTime / 1000) + ' seconds' // put the value of the variable loadTime into the paragraph
        }
    </script>

    <?= $this->renderSection('custom_script'); ?>

</body>

</html>