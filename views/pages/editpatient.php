<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">


    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!-- begin:: Content Head -->
        <div class="kt-subheader kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">عيـادة السمعيات</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <span class="kt-subheader__desc">تعديل سجل طبي</span>
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
            <div class="col-md-12">

                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label ">
                        	<span class="kt-portlet__head-icon kt-font-danger">
                                <i class="fa fa-child"></i>
                            </span>
                            <h3 class="kt-portlet__head-title kt-font-danger kt-font-bold">
                                بيانات المريض الأساسية
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right" id="patient_form" action="">
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
                            <input type="hidden" id="hdn_PERSON_SERIAL_ID" name="hdn_PERSON_SERIAL_ID"
                                   value="<?php echo $PERSON_ID; ?>">
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label>نوع الوثيقة
                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                    <select name="DOCUMENT_TYPE_ID" id="DOCUMENT_TYPE_ID" class="form-control">
                                        <?php echo $doc_type_list; ?>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label>رقم الوثيقة
                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="DOCUMENT_ID"
                                               id="DOCUMENT_ID"
                                               placeholder="رقم الوثيقة"
                                               value="<?php echo $one_patient['DOCUMENT_ID']; ?>">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-icon" type="button"
                                                    onclick="chk_patient_id();" id="btn_search"><i
                                                        class="la la-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div id="dvFile">
                                <h3 class="kt-heading kt-heading--md">بيــانات الملف</h3>
                                <div class="alert alert-solid-success alert-bold" role="alert" id="have_center">
                                    <div name="CENTER_DESC" id="CENTER_DESC" class="alert-text"></div>
                                </div>
                                <div class="form-group row"><!-- NAME-->
                                    <div class="col-lg-6">
                                        <label>الاسـم رباعي
                                            <span class="kt-font-danger kt-font-bold"> * </span></label>
                                        <div class="form-group row">
                                            <div class="col-3">
                                                <input class="form-control" type="text"
                                                       value="" name="FIRST_NAME" id="FIRST_NAME"
                                                       placeholder="الاسم الاول">
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text"
                                                       value="" id="SECOND_NAME" name="SECOND_NAME"
                                                       placeholder="اسم الاب">
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text"
                                                       value="" id="THIRD_NAME" name="THIRD_NAME"
                                                       placeholder="اسم الجد">
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text"
                                                       value="" id="LAST_NAME" name="LAST_NAME"
                                                       placeholder="اسم العائلة">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>الجنس
                                            <span class="kt-font-danger kt-font-bold"> * </span></label>
                                        <select name="SEX_ID" id="SEX_ID" class="form-control">
                                            <option value="">Select..</option>
                                            <option value="1">ذكر</option>
                                            <option value="2">انثى</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>تاريخ الميلاد
                                            <span class="kt-font-danger kt-font-bold"> * </span></label>
                                        <input type="text" class="form-control kt_datetimepicker" id="DOB"
                                               name="DOB"
                                               readonly placeholder="" value=""/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>اسم الام
                                            <span class="kt-font-danger kt-font-bold"> * </span></label>
                                        <input class="form-control" type="text"
                                               id="MOTHER_NAME" name="MOTHER_NAME" value="">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>عمر الام
                                            <span class="kt-font-danger kt-font-bold"> * </span></label>
                                        <input class="form-control" type="text"
                                               value="" id="MOTHER_AGE" name="MOTHER_AGE">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>الدخل الشهري</label>
                                        <input class="form-control" type="text"
                                               value="" id="MONTHLY_INCOME" name="MONTHLY_INCOME">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>المحافظة
                                            <span class="kt-font-danger kt-font-bold"> * </span></label>
                                        <select name="DISTRICT_ID" id="DISTRICT_ID" class="form-control"
                                                onchange="get_city();">
                                            <option value="">Select..</option>
                                            <?php
                                            foreach ($district_list as $row) {
                                                echo '<option value="' . $row['GEOLOCATION_ID'] . '" ' . $selected . '>' . $row['NAME_AR'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>المدينة<span class="kt-font-danger kt-font-bold"> * </span></label>
                                        <select name="CITY_ID" id="CITY_ID" class="form-control">
                                            <option value="">Select..</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>العنوان</label>
                                        <input class="form-control" type="text" value="" id="CURRENT_ADDRESS"
                                               name="CURRENT_ADDRESS">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>رقم الجوال<span class="kt-font-danger kt-font-bold"> * </span></label>
                                        <input class="form-control" type="text"
                                               value="" id="MOBILE_NUM" name="MOBILE_NUM">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>رقم الهاتف </label>
                                        <input class="form-control" type="text"
                                               value="" id="PHONE_NUM" name="PHONE_NUM">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>المواطنة<span class="kt-font-danger kt-font-bold"> * </span></label>
                                        <select name="CITIZENSHIP" id="CITIZENSHIP" class="form-control">
                                            <?php
                                            foreach ($national_list as $row) {
                                                echo '<option value="' . $row['ID'] . '">' . $row['LOOKUP_DETAILS'] . '</option>';
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 display-hide" id="dvFamilyCard">
                                        <label>رقم كرت المؤن</label>
                                        <input class="form-control" type="text"
                                               value="" id="FAMILY_CARD" name="FAMILY_CARD">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="button" class="btn btn-primary" id="save_btn">Save</button>
                                        <button type="button" class="btn btn-danger" onclick="clear_patient_form()">
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

    var FormValidation = function () {
        // Private functions


        var demo2 = function () {
            $("#patient_form").validate({
                // define validation rules
                rules: {
                    DOCUMENT_TYPE_ID: {
                        required: true,

                    },
                    DOCUMENT_ID: {
                        required: true,
                        minlength: 9,
                        digits: true
                    },
                    VISIT_DATE: {
                        required: true
                    },
                    FIRST_NAME: {
                        required: true
                    },
                    SECOND_NAME: {
                        required: true
                    },
                    THIRD_NAME: {
                        required: true
                    },
                    LAST_NAME: {
                        required: true
                    },
                    SEX_ID: {
                        required: true,
                    },
                    DOB: {
                        required: true
                    },
                    CITIZENSHIP: {
                        required: true
                    }, DISTRICT_ID: {
                        required: true
                    }, CITY_ID: {
                        required: true
                    },
                    MOBILE_NUM: {
                        required: true,
                    },
                    MOTHER_NAME: {
                        required: true,
                    },
                    MOTHER_AGE: {
                        required: true
                    },
                },

                //display error alert on form submit
                invalidHandler: function (event, validator) {
                    /*  swal.fire({
                          "title": "",
                          "text": "There are some errors in your submission. Please correct them.",
                          "type": "error",
                          "confirmButtonClass": "btn btn-secondary",
                          "onClose": function (e) {
                              console.log('on close event fired!');
                          }
                      });*/
                    NOTIFY2('يرجى التأكد من القيم المدخلة والمطلوبة', "danger")
                    event.preventDefault();
                },

                submitHandler: function (form) {
                    //form[0].submit(); // submit the form
                    patientSubmit();
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
        FormValidation.init();

        // clear_patient_form();
        get_patient_data();
    });

    $("#save_btn").click(function (e) {
        e.preventDefault();
        if ($('#FIRST_NAME').val() == '' || $('#SECOND_NAME').val() == '' || $('#THIRD_NAME').val() == '' || $('#LAST_NAME').val() == '' || $('#SEX_ID').val() == ''
            || $('#DOB').val() == '' || $('#MOBILE_NUM').val() == '' || $('#DISTRICT_ID').val() == '' || $('#CITY_ID').val() == ''
            || $('#MOTHER_NAME').val() == '' || $('#MOTHER_AGE').val() == '' || $('#CITIZENSHIP').val() == '') {
            NOTIFY2('يرجى التأكد من القيم المدخلة والمطلوبة', "danger")
            return;
        } else {
            patientSubmit();// the form is valid, do something
        }
    });

    function patientSubmit() {

        if ($('#FIRST_NAME').val() == '' || $('#SECOND_NAME').val() == '' || $('#THIRD_NAME').val() == '' || $('#LAST_NAME').val() == '' || $('#SEX_ID').val() == ''
            || $('#DOB').val() == '' || $('#MOBILE_NUM').val() == '' || $('#DISTRICT_ID').val() == '' || $('#CITY_ID').val() == ''
            || $('#MOTHER_NAME').val() == '' || $('#MOTHER_AGE').val() == '' || $('#CITIZENSHIP').val() == '') {
            NOTIFY2('يرجى التأكد من القيم المدخلة والمطلوبة', "danger")
            return;
        }

        var form1 = $('#patient_form');
        var error = $('.alert-danger', form1);
        //var success = $('.alert-success', form1);
        var validator = $("#patient_form").validate();

        var action = baseURL + 'Patient_cont/edit_patient_cont';
        var formData = new FormData($('#patient_form')[0]);

        formData.append('DOCUMENT_TYPE_ID', $('#DOCUMENT_TYPE_ID').val());
        formData.append('DOCUMENT_ID', $('#DOCUMENT_ID').val());

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
                    if (data != 2) {
                        NOTIFY2('تمت العملية بنجاح', "success");
                        //     success.show();
                        error.hide();
                        //    App.scrollTo(success, -200);
                        //   success.fadeOut(2000);
                        clear_patient_form();
                    } else {
                        NOTIFY2('يوجد موعد زيارة اليوم للمريض في نفس المركز', "danger")
                        /*swal.fire({
                            "title": "",
                            "text": "يوجد موعد زيارة اليوم للمريض في نفس المركز",
                            "type": "error",
                            "confirmButtonClass": "btn btn-secondary",
                            "onClose": function (e) {
                                console.log('on close event fired!');
                            }
                        });*/
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

    function get_patient_data() {
        // clear_patient_form();
        if ($('#hdn_PERSON_SERIAL_ID').val() != '') {

            $.ajax({
                url: baseURL + 'Patient_cont/get_patient_data',
                type: 'POST',
                dataType: 'json',
                data: {
                    //   PERSON_ID:$('#hdn_PERSON_SERIAL_ID').val()
                },

                success: function (data) {


                    $('#DOCUMENT_TYPE_ID').val(data[0].DOCUMENT_TYPE_ID);
                    $('#DOCUMENT_ID').val(data[0].DOCUMENT_ID);
                    $('#FIRST_NAME').val(data[0].FIRST_NAME);
                    $('#SECOND_NAME').val(data[0].SECOND_NAME);
                    $('#THIRD_NAME').val(data[0].THIRD_NAME);
                    $('#LAST_NAME').val(data[0].LAST_NAME);
                    $('#DOB').val(data[0].DOB);
                    $('#SEX_ID').val(data[0].SEX_ID);
                    $('#DISTRICT_ID').val(data[0].DISTRICT_ID);

                    $('#CURRENT_ADDRESS').val(data[0].CURRENT_ADDRESS);
                    $('#MOBILE_NUM').val(data[0].MOBILE_NUM);
                    $('#PHONE_NUM').val(data[0].PHONE_NUM);
                    // $('#MOTHER_NAME').val(data[0].MOTHER_ID);
                    $('#MOTHER_NAME').val(data[0].MOTHER_NAME);
                    $('#MOTHER_AGE').val(data[0].MOTHER_AGE);
                    $('#MONTHLY_INCOME').val(data[0].MONTHLY_INCOME);
                    $('#CITIZENSHIP').val(data[0].CITIZENSHIP);
                    $('#FAMILY_CARD').val(data[0].FAMILY_CARD);
                    show_family_card();
                    $('#DOCUMENT_ID').prop('disabled', true);
                    $('#DOCUMENT_TYPE_ID').prop('disabled', true);
                    $('#btn_search').prop('disabled', true);
                    $('#SEX_ID').trigger('change');
                    $('#DISTRICT_ID').trigger('change');
                    $('#CITIZENSHIP').trigger('change');
                    setTimeout(function () {
                        $('#CITY_ID').val(data[0].CITY_ID);
                        $('#CITY_ID').trigger('change');
                    }, 3000);
                }
            });
        } else {
            swal.fire({
                "title": "",
                "text": "يجب اختيار مريض من القائمة اولا",
                "type": "error",
                "confirmButtonClass": "btn btn-secondary",
                "onClose": function (e) {
                    console.log('on close event fired!');
                }
            });
            return;
        }


    }

    function clear_patient_form() {
        $('#DOCUMENT_ID').prop('disabled', false);
        $('#DOCUMENT_TYPE_ID').prop('disabled', false);
        $('#btn_search').prop('disabled', false);
        $('#patient_form')[0].reset();

        $('#hdn_PERSON_SERIAL_ID').val('');
        $('#SEX_ID').val('');
        $('#DISTRICT_ID').val('');
        $('#CITY_ID').val('');

        $('#SEX_ID').trigger('change');
        $('#DISTRICT_ID').trigger('change');
        $('#CITY_ID').trigger('change');
        $('#have_center').removeClass('alert alert-solid-success alert-bold');
        $('#have_center').removeClass('alert alert-solid-warning alert-bold');
        $('#CENTER_DESC').html('');
        //   $('#dvFile').hide();
    }


    function get_city() {
        $.ajax({
            url: baseURL + 'Patient_cont/get_city',
            type: 'POST',
            //  dataType: 'json',
            data: {
                DISTRICT_ID: $('#DISTRICT_ID').val()
            },
            success: function (data) {
                //    alert(data);
                //  unblockUI('breast_factor_form');
                $('#CITY_ID').html(data);
                $('#CITY_ID').trigger('change');

            }
        });
    }

    function show_family_card() {
        if ($('#CITIZENSHIP').val() == 5)
            $('#dvFamilyCard').show('')
        else
            $('#dvFamilyCard').hide('')
    }
</script>