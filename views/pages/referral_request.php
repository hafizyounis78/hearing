<link href="<?php echo base_url("assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"); ?>"
      rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url("assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css"); ?>"
      rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url("assets/vendors/custom/vendors/flaticon/flaticon.css"); ?>" rel="stylesheet"
      type="text/css"/>
<link href="<?php echo base_url("assets/vendors/custom/vendors/flaticon2/flaticon.css"); ?>" rel="stylesheet"
      type="text/css"/>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!--    <div class="kt-subheader   kt-grid__item" id="kt_subheader">-->
    <!--        <div class="kt-container  kt-container--fluid ">-->
    <!--        </div>-->
    <!--    </div>-->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--Begin::Section-->
        <!-- begin:: Content Head -->
        <div class="kt-subheader kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">عيـادة السمعيات</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <span class="kt-subheader__desc">Referral request طلب تحويل</span>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                    <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker"
                       data-toggle="kt-tooltip">
                        <span class="kt-subheader__btn-daterange-title"
                              id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                        <span class="kt-subheader__btn-daterange-date"
                              id="kt_dashboard_daterangepicker_date"><?php echo date('M,d'); ?></span>
                        <i class="flaticon2-calendar-1"></i>
                    </a>
                    <span class="btn btn-label-success btn-bold btn-sm"><i
                                class="flaticon2-hospital"></i><?php echo $_SESSION["my_activ_LOCATIONS"]['LOC_NAME']; ?></span>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->
        <div class="row">
            <div class="col-xl-12">

                <!--begin:: Widgets/Applications/User/Profile3-->
                <?php
                $this->load->view('include/patient_profile.php', $data);
                ?>


                <!--end:: Widgets/Applications/User/Profile3-->
            </div>
        </div>
        <!--End::Section-->
        <div class="row">
            <div class="col-md-12">

                <!--begin::Portlet-->

                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label ">
                            <h3 class="kt-portlet__head-title kt-font-danger kt-font-bold">
                                Referral Request بيانات طلب التحويل
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right" id="referral_form">
                        <div class="form-group form-group-last kt-hide">
                            <div class="alert alert-danger" role="alert" id="kt_form_1_msg">
                                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                <div class="alert-text">
                                    Oh snap! Change a few things up and try submitting again.
                                </div>
                                <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="la la-close"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>المركز الحالي </label>
                                    <input class="col-8 form-control" type="text"
                                           value="<?php echo $_SESSION["my_activ_LOCATIONS"]['LOC_NAME']; ?>"
                                           name="" id="" readonly>
                                </div>
                                <div class="col-lg-4">
                                    <label>المركز المحول له
                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                    <select name="RM_TRANSFORMATION_CD" id="RM_TRANSFORMATION_CD"
                                            class="col-8 form-control">
                                        <?php echo $center_list; ?>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label>Date:
                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                    <input type="text" class="col-8 form-control" id="RM_DATE"
                                           name="RM_DATE"
                                           readonly placeholder="Select date"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>الفحص المطلوب
                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                    <select name="RM_REQUIRED_EXAMINATION" id="RM_REQUIRED_EXAMINATION"
                                            class="col-8 form-control">
                                        <?php echo $exam_list; ?>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label>سبب التحويل
                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                    <select name="RE_REASON_REFERRAL" id="RE_REASON_REFERRAL"
                                            class="col-8 form-control">
                                        <?php echo $referral_reason_list; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-danger" onclick="clear_referral_form()">
                                            Clear
                                        </button>
                                        <a type="button" class="btn btn-secondary"
                                           href="<?php echo base_url('index.php/patient_cont/patient_list_vw'); ?>">
                                            Back <i class="fa fa-reply"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->
            </div>
        </div>
        <!-- end:: Content -->

    </div>
</div>
<script src="<?php echo base_url("assets/vendors/general/jquery-validation/dist/jquery.validate.js"); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url("assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url("assets/vendors/custom/vendors/bootstrap-datepicker.init.js"); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url("assets/custom_js/referral.js"); ?>" type="text/javascript"></script>
