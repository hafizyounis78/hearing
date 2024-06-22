<link href="<?php echo base_url("assets/panel/assets/css/pages/wizard/wizard-1.rtl.css");?>" rel="stylesheet" type="text/css" />
<style>
.kt-app .kt-app__aside{
    width:360px;
}
    .kt-portlet__body.kt-portlet__body--fit-y .kt-widget{
        margin-top:30px;
    }
</style>

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!--    <div class="kt-subheader   kt-grid__item" id="kt_subheader">-->
<!--        <div class="kt-container  kt-container--fluid ">-->
<!--        </div>-->
<!--    </div>-->

       <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-md-12">
                    				<!-- begin:: Content Head -->
								<div class="kt-subheader   kt-grid__item" id="kt_subheader">
									<div class="kt-subheader__main">
										<h3 class="kt-subheader__title">الرئيسية</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc"><?php echo $title; ?></span>
										</div>

								</div>

								<!-- end:: Content Head -->
                                        <!--begin::Portlet-->
                   <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
    <!--Begin:: App Aside Mobile Toggle-->
    <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
        <i class="la la-close"></i>
    </button>
    <!--End:: App Aside Mobile Toggle-->



    <!--Begin:: App Content-->
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">شرح آلية العمل لإدخال النماذج</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-label-brand btn-sm btn-icon btn-icon-md">
                                        <i class="la la-play"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="kt-portlet__body">
                            
                            <video style="width:75%; margin:0 auto;" controls="" autoplay="" name="media"><source src="<?php echo base_url("assets/videos/home_monitor.mp4");?>" type="video/mp4"></video>


                        </div>
                </div>
            </div>

        </div>
    </div>
    <!--End:: App Content-->

</div>
    </div>
    <!-- end:: Content -->

    </div>
</div>
</div>