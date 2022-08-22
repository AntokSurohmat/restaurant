<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard eCommerce - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="<?= base_url() ?>/assets/modern/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/modern/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css">
    <!-- SweetAlert2 && Toastr -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- Order -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/forms/selects/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    <!-- User -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/vendors/css/forms/selects/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/plugins/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/pages/ecommerce-cart.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/plugins/forms/checkboxes-radios.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/app-assets/css/pages/page-users.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/modern/assets/css/style.css">
    <!-- END: Custom CSS-->
    
    <!-- BEGIN: THIRDPARTY CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/thirdparty/jquery-datatables-checkboxes/css/dataTables.checkboxes.css" rel="stylesheet" />
    <!-- END: THIRDPARTY CSS-->

    <!-- BEGIN: Me CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/custom/css/custom.css">
    <!-- END: Me CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="la la-arrow-up font-medium-3"></i></button>
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <?= $this->include('admin/layouts/header') ?>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow " data-scroll-to-active="true">
        <?= $this->include('admin/layouts/menu') ?>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <?= $this->renderSection('content') ?>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <?= $this->include('admin/layouts/footer') ?>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/charts/chartist.min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/charts/morris.min.js"></script>
    <!-- DataTable -->
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <!-- SweetAlert2 && Toastr -->
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- Order -->
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- User -->
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url() ?>/assets/modern/app-assets/js/core/app-menu.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url() ?>/assets/modern/app-assets/js/scripts/forms/custom-file-input.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/js/scripts/pages/ecommerce-cart.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/js/scripts/pages/page-users.js"></script>
    <script src="<?= base_url() ?>/assets/modern/app-assets/js/scripts/navs/navs.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: THIRDPARTY JS-->
    <script src="<?= base_url() ?>/assets/thirdparty/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js" ></script>
    <!-- END: THIRDPARTY JS-->

    <!-- BEGIN: Me JS-->
	<script src="<?= base_url() ?>/assets/custom/js/custom.js"></script>
	<?= $this->renderSection('scripts') ?>
    <!-- END: Me JS-->
    <script type="text/javascript">
        //toastr
        <?php if (session()->getFlashdata('success')) {?>
            toastr.options = {"positionClass": "toast-top-right","closeButton": true};toastr["success"]('<?= session()->getFlashdata('success') ?>', "Informasi");
        <?php } else if (session()->getFlashdata('error')) {?>
            toastr.options = {"positionClass": "toast-top-right","closeButton": true};toastr["error"]('<?= session()->getFlashdata('error')?>', "Informasi");
        <?php } else if (session()->getFlashdata('warning')) {?>
            toastr.options = {"positionClass": "toast-top-right","closeButton": true};toastr["warning"]('<?= session()->getFlashdata('warnong')?>', "Informasi");
        <?php } else if (session()->getFlashdata('info')) {?>
            toastr.options = {"positionClass": "toast-top-right","closeButton": true};toastr["info"]('<?= session()->getFlashdata('info')?>', "Informasi");
        <?php }?>
    </script>

</body>
<!-- END: Body-->

</html>