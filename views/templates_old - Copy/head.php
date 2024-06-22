<!DOCTYPE html>

<html lang="ar" direction="rtl" style="direction:rtl;">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>نظام السمعيات </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <!--begin::Fonts -->
    <link rel="stylesheet" media="screen" href="<?php echo base_url("assets/fonts/DroidKufi/stylesheet.css"); ?>" type="text/css" />
    <!--end::Fonts -->


    <!--begin::Global Theme Styles(used by all pages) -->

    <link href="<?php echo base_url("assets/panel/assets/plugins/global/plugins.bundle.rtl.css");?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url("assets/panel/assets/css/style.bundle.rtl.css");?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url("assets/custom_css/style.css");?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url("assets/vendors/general/toastr/build/toastr.css");?>" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--<link href="<?php echo base_url("assets/panel/assets/css/skins/header/base/light.rtl.css");?>"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url("assets/panel/assets/css/skins/header/menu/light.rtl.css");?>"
          rel="stylesheet" type="text/css"/>//-->
    <!--<link href="<?php echo base_url("assets/panel/assets/css/skins/brand/dark.rtl.css");?>" rel="stylesheet"
          type="text/css"/>//-->
    <!--    <link href="<?php echo base_url("assets/panel/assets/css/skins/aside/dark.rtl.css");?>" rel="stylesheet" type="text/css"/>
//-->    <!--end::Layout Skins -->
    <link href="<?php echo base_url("assets/panel/assets/plugins/custom/datatables/datatables.bundle.rtl.css");?>" rel="stylesheet" type="text/css" />

    <!--    <link href="<?php echo base_url("assets/css/noty.css");?>" rel="stylesheet" type="text/css"/>//-->
    <script src="<?php echo base_url("assets/panel/assets/plugins/global/plugins.bundle.js");?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/panel/assets/js/scripts.bundle.js");?>" type="text/javascript"></script>

</head>
<script type="TEXT/JAVASCRIPT">
    var baseURL = "<?php echo base_url() . 'index.php/';?>";
    var baseURLNoIndex = "<?php echo base_url();?>";
    var RAD_SERVER_IP = "<?php echo RAD_SERVER_IP;?>";
    var interval = null;
    function set_message(msg, status) {
        if (status)
            toastr.success(msg, "E-Mental");
        else
            toastr.error(msg, "E-Mental");


        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "500",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    }
    function test_session() {
        $.ajax({
            url: baseURL + 'Dashboard/is_logged_in_ajax/',
            type: 'POST',
            success: function (data) {
                if (data == 0)
                    window.location.href = "http://apps.moh.gov.ps/perm/index.php/Login/main_page";

            }

        });
    }

</script>
<!-- END HEAD -->

<!-- begin::Body -->
<body class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

<!-- begin::Page loader -->

<!-- end::Page Loader -->

<!-- begin:: Page -->