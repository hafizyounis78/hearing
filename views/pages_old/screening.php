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
        <!-- begin:: Content Head -->
        <div class="kt-subheader kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">عيـادة السمعيات</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <span class="kt-subheader__desc">  Screening Tests اختبارات الفحص</span>
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
        <!--Begin::Section-->
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
            <div class="col-lg-12">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="flaticon2-calendar-2"></i>
												</span>
                            <h3 class="kt-portlet__head-title">
                                Screening
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-actions">
                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md">
                                    <i class="flaticon2-search-1"></i>
                                </a>
                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md">
                                    <i class="flaticon2-gear"></i>
                                </a>
                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md">
                                    <i class="flaticon-more-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <form class="kt-form kt-form--label-right" id="screening_form" action="">
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
                                    <label for="example-text-input" class="col-4 col-form-label">Date: <span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="R_TEST_DATE"
                                               name="R_TEST_DATE"
                                               readonly placeholder="Select date"/>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-4 col-form-label">Side:<span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="R_TEST_SITE" id="R_TEST_SITE" class="form-control">
                                            <?php echo $side_List; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-4 col-form-label">Type:<span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="R_TEST_TYPE" id="R_TEST_TYPE" class="form-control"
                                                onchange="get_test_result_list();">
                                            <?php echo $test_type_List; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-4 col-form-label">Result:<span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="R_TEST_RESULT" id="R_TEST_RESULT" class="form-control ">

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <label for="example-text-input"
                                           class="col-4 col-form-label">APR Recom.:<span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">
                                        <select name="R_TEST_RECOM[]" id="R_TEST_RECOM" class="form-control kt-select2"
                                                multiple="multiple">
                                            <?php echo $recom_list; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label class="col-4 col-form-label">Notes: <span
                                                class="kt-font-danger kt-font-bold"> * </span></label>
                                    <div class="col-8">

                                        <input type="text" class="form-control" name="R_TEST_NOTE"
                                               id="R_TEST_NOTE"
                                               placeholder="Notes" value="">

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
                                        <button type="button" class="btn btn-secondary" onclick="clear_form()">
                                            Clear
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="table-responsive">
                                    <div class="table-scrollable">
                                        <table class="table table-bordered table-advance table-hover">
                                            <thead>
                                            <tr>
                                                <th width="1%"></th>
                                                <th width="5%" class="bold" style="text-align: center">Date</th>
                                                <th width="5%" class="bold" style="text-align: center">Side</th>
                                                <th width="5%" class="bold" style="text-align: center">Test Type</th>
                                                <th width="5%" class="bold" style="text-align: center">Result</th>
                                                <th width="5%" class="bold" style="text-align: center">APR
                                                    Recommendation
                                                </th><!--ظهر فقط في حالة نو عالفحص APR -->
                                                <th width="5%" class="bold" style="text-align: center">Note</th>
                                                <th width="5%" class="bold" style="text-align: center">User</th>
                                                <th width="1%">
                                                    &nbsp;
                                                </th>
                                            </tr>

                                            </thead>
                                            <tbody id="tbscreening">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    var screeningValidation = function () {
        // Private functions


        var demo2 = function () {
            $("#screening_form").validate({
                // define validation rules
                rules: {
                    R_TEST_DATE: {
                        required: true,

                    },
                    R_TEST_SITE: {
                        required: true,
                    },
                    R_TEST_TYPE: {
                        required: true
                    },
                    R_TEST_RESULT: {
                        required: true
                    }
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
                    screeningSubmit();
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
        // $.fn.datepicker.defaults.autoclose = true;
        screeningValidation.init();
        // multi select
        $('#R_TEST_RECOM').select2({
            placeholder: "Select..",

        });
        $('.kt-select2').select2({
            placeholder: "Select..",

        });
        $('#R_TEST_DATE').datepicker({
            rtl: KTUtil.isRTL(),
            todayHighlight: true,
            orientation: "bottom left",
            format: 'dd/mm/yyyy',
            autoclose: true,
        });
        clear_form();
        PERSON_ID = $('#PERSON_ID').val();
        get_screening_datatable(PERSON_ID);
    });

    function screeningSubmit() {


        $.ajax({
            url: baseURL + 'Screening_cont/save_screening',
            type: 'POST',
            data: {
                PERSON_ID: $('#PERSON_ID').val(),
                VISIT_ID: $('#VISIT_ID').val(),
                P_TEST_DATE: $('#R_TEST_DATE').val(),
                P_TEST_SITE: $('#R_TEST_SITE').val(),
                P_TEST_TYPE: $('#R_TEST_TYPE').val(),
                P_TEST_RESULT: $('#R_TEST_RESULT').val(),
                P_TEST_RECOM: $('#R_TEST_RECOM').val(),
                P_TEST_NOTE: $('#R_TEST_NOTE').val()
            },
            success: function (data) {
                if (data == 1) {
                    set_message("تمت العملية بنجاح", true);
                    clear_form();
                    get_screening_datatable($('#PERSON_ID').val());
                } else
                    set_message("لم تتم العملية بنجاح", false);
            }
        });

    }

    function get_screening_datatable(PERSON_ID) {

        $('#tbscreening').html('');
        $.ajax({
            url: baseURL + 'Screening_cont/get_screening_datatable',
            type: 'POST',
            data: {
                PERSON_ID: PERSON_ID
            },
            success: function (data) {
                $('#tbscreening').html(data);
            }
        });
    }

    function clear_form() {
        $('#R_TEST_DATE').datepicker("setDate", '1d');
        $('#R_TEST_SITE').val('');
        $('#R_TEST_TYPE').val('');
        $('#R_TEST_RESULT').val('');
        $('#R_TEST_RECOM').val('');
        $('#R_TEST_NOTE').val('');

        $('#R_TEST_SITE').trigger('change');
        $('#R_TEST_TYPE').trigger('change');
        $('#R_TEST_RESULT').trigger('change');
        $('#R_TEST_RECOM').trigger('change');
    }


    function get_test_result_list() {
        $.ajax({
            url: baseURL + 'Screening_cont/get_test_result',
            type: 'POST',
            //  dataType: 'json',
            data: {
                R_TEST_TYPE: $('#R_TEST_TYPE').val()
            },
            success: function (data) {
                //    alert(data);
                //  unblockUI('breast_factor_form');
                $('#R_TEST_RESULT').html(data);
                $('#R_TEST_RESULT').trigger('change');

            }
        });
    }

    function delete_screening(P_RESULT_ID, PERSON_ID) {

        swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    url: baseURL + 'Screening_cont/del_screening',
                    type: 'POST',
                    //  dataType: 'json',
                    data: {
                        P_RESULT_ID: P_RESULT_ID
                    },
                    success: function (data) {
                        if (data == 1) {
                            set_message("تمت العملية بنجاح", true);
                            get_screening_datatable(PERSON_ID)

                        } else
                            set_message("لم تتم العملية بنجاح", false);

                    }
                });

                // result.dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
            } else if (result.dismiss === 'cancel') {
                swal.fire(
                    'Cancelled',
                    'Test is safe :)',
                    'error'
                )
            }
        });
    }

    function edit_screening(P_RESULT_ID) {
        $.ajax({
            url: baseURL + 'Screening_cont/edit_screening',
            type: 'POST',
            dataType: 'json',
            data: {
                P_RESULT_ID: P_RESULT_ID
            },
            success: function (data) {

                /*  $('#PERSON_ID').val();
                  $('#VISIT_ID').val();*/
                $('#R_TEST_DATE').val(data[0].R_TEST_DATE);
                $('#R_TEST_SITE').val(data[0].R_TEST_SITE);
                $('#R_TEST_TYPE').val(data[0].R_TEST_TYPE);
                $('#R_TEST_TYPE').trigger('change');
             //   get_test_result_list();


                $('#R_TEST_RESULT').trigger('change');
                $('#R_TEST_NOTE').datepicker("setDate",data[0].R_TEST_NOTE);
                $.ajax({
                    url: baseURL + 'Screening_cont/edit_recom_list',
                    type: 'POST',
                    data: {
                        P_RESULT_ID: P_RESULT_ID
                    },
                    success: function (data) {
                        $('#R_TEST_RECOM').html(data);
                    }
                });

                setTimeout(function () {
                    $('#R_TEST_RESULT').val(data[0].R_TEST_RESULT);
                    $('#R_TEST_SITE').trigger('change');

                }, 2000);
            }
        });
    }
</script>