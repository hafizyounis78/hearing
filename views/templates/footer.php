<!-- begin:: Footer -->
<div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
    <div class="kt-footer__top">
        <div class="kt-container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="kt-footer__section">
                        <h3 class="kt-footer__title">عن النظام</h3>
                        <div class="kt-footer__content">
                            نظام السمعيات
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="kt-footer__section">
                        <h3 class="kt-footer__title">للتواصل والدعم الفني</h3>
                        <div class="kt-footer__content">
                            م.امين طبازة
                            <br>
                            جوال رقم : 0593115261
                            <!--<div class="kt-footer__nav">
                                <div class="kt-footer__nav-section">
                                    <a href="#">عنصر 1</a>
                                    <a href="#">عنصر 2</a>
                                </div>
                                <div class="kt-footer__nav-section">
                                    <a href="#">عنصر 3</a>
                                    <a href="#">عنصر 4</a>
                                </div>
                            </div>//-->
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-4">
                    <div class="kt-footer__section">
                        <h3 class="kt-footer__title">Get In Touch</h3>
                        <div class="kt-footer__content">
                            <form action="" class="kt-footer__subscribe">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Email">
                                    <div class="input-group-append">
                                        <button class="btn btn-brand" type="button">Join</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>//-->
            </div>
        </div>
    </div>
    <div class="kt-footer__bottom">
        <div class="kt-container">
            <div class="kt-footer__wrapper">
                <div class="kt-footer__logo">
                    <a href="demo2/index.html">
                        <img alt="Logo" src="<?php echo base_url("assets/img/logoTH2.png"); ?>">
                    </a>
                    <div class="kt-footer__copyright">
                        جميع الحقوق محفوظة
                        2021&nbsp;&copy;&nbsp;
                        <a href="http://www.moh.gov.ps/" target="_blank">وزارة الصحة الفلسطينية</a>
                    </div>
                </div>
                <!--<div class="kt-footer__menu">
                    <a href="http://keenthemes.com/metronic" target="_blank">Purchase Lisence</a>
                    <a href="http://keenthemes.com/metronic" target="_blank">Team</a>
                    <a href="http://keenthemes.com/metronic" target="_blank">Contact</a>
                </div>//-->
            </div>
        </div>
    </div>
</div>

<!-- end:: Footer -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<!--begin::Global Theme Bundle(used by all pages) -->
<!--begin::Page Vendors(used by this page) -->
<script src="<?php echo base_url("assets/panel/assets/plugins/custom/datatables/datatables.bundle.js");?>" type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Scripts(used by this page) -->
<!--<script src="<?php echo base_url("assets/panel/assets/js/pages/crud/datatables/basic/paginations.js");?>" type="text/javascript"></script>//-->
<script src="<?php echo base_url("assets/custom_js/main_corona.js");?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/custom_js/get_data_corona.js");?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/vendors/general/toastr/build/toastr.min.js");?>" type="text/javascript"></script>
<!--<script src="<?php echo base_url("assets/panel/assets/js/pages/crud/datatables/search-options/advanced-search.js");?>" type="text/javascript"></script>//-->
<!--end::Page Scripts -->
<!--end::Global Theme Bundle -->
<!--<script src="<?php echo base_url("assets/js/noty.js");?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/panel/assets/js/cpanel.js");?>" type="text/javascript"></script>//-->

<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>
<script>

    function blockUI(blockTarget) {
        App.blockUI({
            target: blockTarget,
            animate: true
        });
    }

    function unblockUI(blockTarget) {
        App.unblockUI(blockTarget);
    }
</script>

</body>
<!-- end::Body -->

</html>
