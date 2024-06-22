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
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-3">

                            <div class="kt-widget__bottom">
                                <div class="kt-widget__item">
                                    <div class="kt-widget__icon">
                                        <i class="flaticon-avatar"></i>
                                    </div>
                                    <div class="kt-widget__details">
                                        <!-- <span class="kt-widget__title">Name</span>-->
                                        <span class="kt-widget__value"><span>&nbsp; &nbsp;<?php echo $one_patient['PATIENT_NAME']; ?></span>
                                    </div>
                                </div>
                                <div class="kt-widget__item">
                                    <div class="kt-widget__icon">
                                        <i class="flaticon-profile"></i>
                                    </div>
                                    <div class="kt-widget__details">
                                        <!--     <span class="kt-widget__title">Paitent Id.</span>-->
                                        <span class="kt-widget__value"><span>&nbsp; &nbsp;<?php echo $one_patient['DOCUMENT_ID']; ?></span>
                                    </div>
                                </div>
                                <div class="kt-widget__item">
                                    <div class="kt-widget__icon">
                                        <i class="flaticon-event-calendar-symbol"></i>
                                    </div>
                                    <div class="kt-widget__details">
                                        <!--  <span class="kt-widget__title">DOB</span>-->
                                        <span class="kt-widget__value"><span>&nbsp; &nbsp;<?php echo $one_patient['DOB']; ?></span>
                                    </div>
                                </div>
                                <div class="kt-widget__item">
                                    <div class="kt-widget__icon">
                                        <i class="flaticon-file-2"></i>
                                    </div>
                                    <div class="kt-widget__details">
                                        <!--  <span class="kt-widget__title">File No.</span>-->
                                        <a href="#" class="kt-widget__value kt-font-brand">&nbsp;
                                            &nbsp;<?php echo $one_patient['PERSON_ID']; ?></a>
                                        <input type="hidden" id="PERSON_ID" name="PERSON_ID"
                                               value="<?php echo $one_patient['PERSON_ID']; ?>">
                                        <input type="hidden" id="VISIT_ID" name="VISIT_ID"
                                               value="<?php echo $one_patient['VISIT_ID']; ?>">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

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
                    <form class="kt-form kt-form--label-right" id="risk_form">
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
                                    <label for="example-text-input"
                                           class="col-8 col-form-label">المركز الحالي <span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <input class="form-control" type="text"
                                               value="<?php echo $_SESSION["my_activ_LOCATIONS"]['LOC_NAME']; ?>"
                                               name="" id="" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-8 col-form-label">المركز المحول له<span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="RISK_NICU" id="RISK_NICU" class="form-control">

                                            <?php echo $center_list; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <label for="example-text-input" class="col-4 col-form-label">Date: <span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="R_TEST_DATE"
                                               name="R_TEST_DATE"
                                               readonly placeholder="Select date"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-secondary" onclick="clear_referral_form()">
                                            Clear
                                        </button>
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
<script>
    // Initialize KTApp class on document ready
    /*   $(document).ready(function() {
           KTApp.init(KTAppOptions);
       });*/
</script>
<script>
    // Class definition

    var referralFormValidation = function () {
        // Private functions


        var demo2 = function () {
            $("#risk_form").validate({
                // define validation rules
                rules: {
                    RISK_FAMILY_HEARING: {
                        required: true,

                    },
                    RISK_NICU: {
                        required: true,

                    },
                    RISK_CONGENITAL: {
                        required: true
                    },
                    /* RISK_BLOOD_EXCHANGE: {
                         required: true
                     },
                     RISK_PREMATURITY: {
                         required: true
                     },
                     RISK_DELIVERY_TYPE: {
                         required: true
                     },
                     RISK_CONSANGUINTY: {
                         required: true
                     },
                     RISK_PREGNANCY_DURING: {
                         required: true,
                     },
                     RISK_NOTE: {
                         required: true
                     },*/
                },

                //display error alert on form submit
                invalidHandler: function (event, validator) {
                    swal.fire({
                        "title": "",
                        "text": "There are some errors in your submission. Please correct them.",
                        "type": "error",
                        "confirmButtonClass": "btn btn-secondary",
                        "onClose": function (e) {
                            console.log('on close event fired!');
                        }
                    });

                    event.preventDefault();
                },

                submitHandler: function (form) {
                    //form[0].submit(); // submit the form
                    riskSubmit();
                    /*     swal.fire({
                             "title": "",
                             "text": "Form validation passed. All good!",
                             "type": "success",
                             "confirmButtonClass": "btn btn-secondary"
                         });*/

                    //  return false;
                }
            });
        }

        return {
            // public functions
            init: function () {
                demo2();
            }
        };
    }();
    $(document).ready(function () {
       // referralFormValidation.init();
        $('#R_TEST_DATE').datepicker({
            rtl: KTUtil.isRTL(),
            todayHighlight: true,
            orientation: "bottom left",
            format: 'dd/mm/yyyy',
            autoclose: true,
        });
        clear_referral_form();
    });

    function riskSubmit() {

        var form1 = $('#risk_form');
        var error = $('.alert-danger', form1);
        //var success = $('.alert-success', form1);

        var action = baseURL + 'Risk_cont/save_risk_cont';
        var formData = new FormData($('#risk_form')[0]);

        formData.append('PERSON_ID', $('#PERSON_ID').val());
        formData.append('VISIT_ID', $('#VISIT_ID').val());

        $.ajax({
                url: action,
                type: 'POST',
                //  dataType: 'json',
                data: formData,

                processData:
                    false,
                contentType:
                    false,
                success: function (data) {
                    if (data == 1) {
                        set_message("تمت العملية بنجاح", true);
                        //     success.show();
                        error.hide();
                        //    App.scrollTo(success, -200);
                        //   success.fadeOut(2000);
                        clear_patient_form();

                    } else {

                        set_message("لم تتم العملية بنجاح", false);
                        error.show();
                        error.fadeOut(2000);
                    }

                }

                ,
                error: function (err) {

                    console.log(err);
                }
                /*  error:function(err){
                      console.log(err);

                  }*/
            }
        )
        //   });
    }

    function clear_referral_form() {

        //$('#risk_form')[0].reset();


        $('#RISK_FAMILY_HEARING').trigger('change');
        $('#RISK_NICU').trigger('change');
        $('#RISK_CONGENITAL').trigger('change');
        $('#RISK_BLOOD_EXCHANGE').trigger('change');
        $('#RISK_DELIVERY_TYPE').trigger('change');
        $('#RISK_CONSANGUINTY').trigger('change');
        $('#RISK_PREGNANCY_DURING').trigger('change');
        // $('#RISK_NOTE').trigger('change');
    }


</script>