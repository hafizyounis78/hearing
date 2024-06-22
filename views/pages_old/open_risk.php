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
                <span class="kt-subheader__desc">  عوامل الخطر Risk Factors</span>
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
                                <!-- <div class="kt-widget__item">
                                     <div class="kt-widget__icon">
                                         <i class="flaticon-chat-1"></i>
                                     </div>
                                     <div class="kt-widget__details">
                                         <span class="kt-widget__title">648 Comments</span>
                                         <a href="#" class="kt-widget__value kt-font-brand">View</a>
                                     </div>
                                 </div>
                                 <div class="kt-widget__item">
                                     <div class="kt-widget__icon">
                                         <i class="flaticon-network"></i>
                                     </div>
                                     <div class="kt-widget__details">
                                         <div class="kt-section__content kt-section__content--solid">
                                             <div class="kt-badge kt-badge__pics">
                                                 <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
                                                     <img src="./assets/media/users/100_7.jpg" alt="image">
                                                 </a>
                                                 <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
                                                     <img src="./assets/media/users/100_3.jpg" alt="image">
                                                 </a>
                                                 <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
                                                     <img src="./assets/media/users/100_2.jpg" alt="image">
                                                 </a>
                                                 <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
                                                     <img src="./assets/media/users/100_13.jpg" alt="image">
                                                 </a>
                                                 <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                                     <img src="./assets/media/users/100_4.jpg" alt="image">
                                                 </a>
                                                 <a href="#" class="kt-badge__pic kt-badge__pic--last kt-font-brand">
                                                     +7
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>-->
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
                                تسجيل عوامل الخطر Risk Factors for HI
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
                            <input type="hidden" id="hdn_PERSON_SERIAL_ID" name="hdn_PERSON_SERIAL_ID" value=" ">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-8 col-form-label">تاريخ عائلي لضعف السمع الدائم <span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="RISK_FAMILY_HEARING" id="RISK_FAMILY_HEARING"
                                                class="form-control">
                                            <option value="">Select..</option>
                                            <?php
                                            foreach ($yesNo_List as $row) {
                                                $selected = '';
                                                if ($one_risk['RISK_FAMILY_HEARING'] == $row['ID'])
                                                    $selected = 'selected';

                                                echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-8 col-form-label">الدخول الى NICU اكثر من 5 ايام <span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="RISK_NICU" id="RISK_NICU" class="form-control">
                                            <option value="">Select..</option>
                                            <?php
                                            foreach ($yesNo_List as $row) {
                                                $selected = '';
                                                if ($one_risk['RISK_NICU'] == $row['ID'])
                                                    $selected = 'selected';

                                                echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-md-8 col-form-label">تشوهات خلقية في الرأس او الوجه<span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="RISK_CONGENITAL" id="RISK_CONGENITAL" class="form-control">
                                            <option value="">Select..</option>
                                            <?php
                                            foreach ($yesNo_List as $row) {
                                                $selected = '';
                                                if ($one_risk['RISK_CONGENITAL'] == $row['ID'])
                                                    $selected = 'selected';

                                                echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-8 col-form-label">يتطلب تغير دم <span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="RISK_BLOOD_EXCHANGE" id="RISK_BLOOD_EXCHANGE"
                                                class="form-control">
                                            <option value="">Select..</option>
                                            <?php
                                            foreach ($yesNo_List as $row) {
                                                $selected = '';
                                                if ($one_risk['RISK_BLOOD_EXCHANGE'] == $row['ID'])
                                                    $selected = 'selected';

                                                echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-8 col-form-label">فتره الحمل بالاسابيع <span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <input class="form-control" type="text"
                                               value="<?php echo $one_risk['RISK_PREMATURITY'];?>" name="RISK_PREMATURITY" id="RISK_PREMATURITY" placeholder="فتره الحمل بالأسابيع">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-8 col-form-label">نوع الولادة <span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="RISK_DELIVERY_TYPE" id="RISK_DELIVERY_TYPE" class="form-control">
                                            <option value="">Select..</option>
                                            <?php
                                            foreach ($delivery_List as $row) {
                                                $selected = '';
                                                if ($one_risk['RISK_DELIVERY_TYPE'] == $row['ID'])
                                                    $selected = 'selected';

                                                echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-8 col-form-label">زواج اقارب <span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="RISK_CONSANGUINTY" id="RISK_CONSANGUINTY" class="form-control">
                                            <option value="">Select..</option>
                                            <?php
                                            foreach ($yesNo_List as $row) {
                                                $selected = '';
                                                if ($one_risk['RISK_CONSANGUINTY'] == $row['ID'])
                                                    $selected = 'selected';

                                                echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-8 col-form-label">مشكله في الحمل <span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="RISK_PREGNANCY_DURING" id="RISK_PREGNANCY_DURING"
                                                class="form-control">
                                            <option value="">Select..</option>
                                            <?php
                                            foreach ($yesNo_List as $row) {
                                                $selected = '';
                                                if ($one_risk['RISK_PREGNANCY_DURING'] == $row['ID'])
                                                    $selected = 'selected';

                                                echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-8 col-form-label">ملاحظات<span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <input class="form-control" type="text"
                                               value="<?php echo $one_risk['RISK_NOTE'];?>" name="RISK_NOTE" id="RISK_NOTE" placeholder="ملاحظات">
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
                                        <button type="button" class="btn btn-secondary" onclick="clear_risk_form()">
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
<script>
    // Initialize KTApp class on document ready
    /*   $(document).ready(function() {
           KTApp.init(KTAppOptions);
       });*/
</script>
<script>
    // Class definition

    var riskFormValidation = function () {
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
        riskFormValidation.init();
        clear_risk_form();
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
    function clear_risk_form() {

        $('#risk_form')[0].reset();

      /*  $('#RISK_FAMILY_HEARING').val('');
        $('#SEX_ID').val('');
        $('#DISTRICT_ID').val('');
        $('#CITY_ID').val('');*/

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