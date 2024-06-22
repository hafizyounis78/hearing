<style>
    .flex-wrap {
        float: left !important;
</style>
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
                <span class="kt-subheader__desc">الإستعلام العام</span>
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
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-magnifier-tool"></i>
										</span>
                            <h3 class="kt-portlet__head-title">
                                بحث
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin: Search Form -->
                        <div class="kt-form kt-form--fit">
                            <div class="row kt-margin-b-20">
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success"> من تاريخ</label>
                                    <div class="input-daterange input-group" id="kt_datepicker">
                                        <input type="text" class="form-control kt-input kt_datepicker"
                                               name="from_date" id="from_date" placeholder="من تاريخ"
                                               value="" data-col-index="5"/>
                                        <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                                class="la la-ellipsis-h"></i></span>
                                        </div>
                                        <input type="text" class="form-control kt-input kt_datepicker"
                                               name="to_date" id="to_date" placeholder="حتى تاريخ" value=""
                                               data-col-index="5"/>
                                    </div>
                                </div>
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success"> From OAE Date</label>
                                    <div class="input-daterange input-group" id="kt_datepicker">
                                        <input type="text" class="form-control kt-input kt_datepicker"
                                               name="oae_from_date" id="oae_from_date" placeholder="من تاريخ"
                                               value="" data-col-index="5"/>
                                        <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                                class="la la-ellipsis-h"></i></span>
                                        </div>
                                        <input type="text" class="form-control kt-input kt_datepicker"
                                               name="oae_to_date" id="oae_to_date" placeholder="حتى تاريخ" value=""
                                               data-col-index="5"/>
                                    </div>
                                </div>
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success">من تاريخ
                                        التحويل </label>
                                    <div class="input-daterange input-group" id="kt_datepicker">
                                        <input type="text" class="form-control kt-input kt_datepicker"
                                               name="trans_from_date" id="trans_from_date" placeholder="من تاريخ"
                                               value="" data-col-index="5"/>
                                        <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                                class="la la-ellipsis-h"></i></span>
                                        </div>
                                        <input type="text" class="form-control kt-input kt_datepicker"
                                               name="trans_to_date" id="trans_to_date" placeholder="حتى تاريخ" value=""
                                               data-col-index="5"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row kt-margin-b-20">

                                <?php if ($_SESSION["my_activ_LOCATIONS"]['LOC_CD'] == 161 || $_SESSION["my_activ_LOCATIONS"]['LOC_CD'] == 52 || $_SESSION["my_activ_LOCATIONS"]['LOC_CD'] == 235) { ?>
                                    <!--   <div class="col-lg-2 kt-margin-b-10-tablet-and-mobile">
                                        <label>المركز:</label>
                                        <select name="CENTER_ID" id="CENTER_ID" class="col-12 form-control kt-select2">
                                            <?php /*echo $center_list; */ ?>
                                        </select>
                                    </div>-->
                                    <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                        <label class="kt-checkbox kt-checkbox--success">نوع العيادة</label>
                                        <div class="input-daterange input-group">
                                            <select name="center_type" id="center_type"
                                                    class="form-control kt-select2" onchange="get_clinics();">
                                                <?php echo $center_type_list; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                        <label class="kt-checkbox kt-checkbox--success"> العيادة</label>
                                        <div class="input-daterange input-group">
                                            <select name="center_id" id="center_id"
                                                    class="form-control kt-select2">
                                                <option value="">Select..</option>

                                            </select>
                                        </div>
                                    </div>
                                <?php } else {
                                    ?>
                                    <input type="hidden" name="center_id" id="center_id"
                                           value="<?php echo $_SESSION["my_activ_LOCATIONS"]['LOC_CD']; ?>">
                                <?php } ?>
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success">العيادة المحول لها </label>
                                    <div class="input-daterange input-group">
                                        <select name="referral_center_id" id="referral_center_id"
                                                class="form-control kt-select2">
                                            <?php echo $referral_center_list; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row kt-margin-b-20">
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success"> نتيجة الفحص الأول </label>
                                    <div class="input-daterange input-group">
                                        <select name="P_RESULT_ONE_OAE" id="P_RESULT_ONE_OAE"
                                                class="form-control kt-select2">
                                            <?php echo $oae_result_list; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success"> نتيجة الفحص الثاني OAE</label>
                                    <div class="input-daterange input-group">
                                        <select name="oae_result" id="oae_result"
                                                class="form-control kt-select2">
                                            <?php echo $oae_result_list; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success"> نتيجة ABR</label>
                                    <div class="input-daterange input-group">
                                        <select name="abr_result" id="abr_result"
                                                class="form-control kt-select2">
                                            <?php echo $abr_result_list; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success"> نتيجة ADT</label>
                                    <div class="input-daterange input-group">
                                        <select name="abt_result" id="abt_result"
                                                class="form-control kt-select2">
                                            <?php echo $adt_result_list; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row kt-margin-b-20">
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success">Risk factor</label>
                                    <div class="input-daterange input-group">
                                        <select name="RISK_ID" id="RISK_ID"
                                                class="form-control kt-select2">
                                            <?php echo $risk_list; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success">تركيب سماعة</label>
                                    <div class="input-daterange input-group">
                                        <select name="HEARING_AID" id="HEARING_AID"
                                                class="form-control kt-select2">
                                            <?php echo $yesNo_List; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success">الجنس</label>
                                    <div class="input-daterange input-group">
                                        <select name="sex_id" id="sex_id"
                                                class="form-control kt-select2">
                                            <option value="">Select..</option>
                                            <option value="1">ذكر</option>
                                            <option value="2">انثى</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row kt-margin-b-20">
                                <div class="col-lg-2 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success">Has risk factor</label>
                                    <div class="input-daterange input-group">
                                        <select name="has_risk" id="has_risk"
                                                class="form-control kt-select2">
                                            <option value="">Select..</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success">Has 1st OAE</label>
                                    <div class="input-daterange input-group">
                                        <select name="has_oae1" id="has_oae1"
                                                class="form-control kt-select2">
                                            <option value="">Select..</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success">Has 2st OAE</label>
                                    <div class="input-daterange input-group">
                                        <select name="has_oae2" id="has_oae2"
                                                class="form-control kt-select2">
                                            <option value="">Select..</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success">Has ABR</label>
                                    <div class="input-daterange input-group">
                                        <select name="has_abr" id="has_abr"
                                                class="form-control kt-select2">
                                            <option value="">Select..</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 kt-margin-b-10-tablet-and-mobile">
                                    <label class="kt-checkbox kt-checkbox--success">Has ADT</label>
                                    <div class="input-daterange input-group">
                                        <select name="has_adt" id="has_adt"
                                                class="form-control kt-select2">
                                            <option value="">Select..</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-separator kt-separator--md kt-separator--dashed"></div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary btn-brand--icon"
                                            onclick="viewQueryTable();" id="search_btn">
                                                <span><i class="la la-search"></i>
                                                    <span>Search</span>
                                                </span>
                                    </button>&nbsp;&nbsp;
                                    <button class="btn btn-secondary btn-danger --icon"
                                            onclick="clear_form();" type="reset" id="kt_reset">
                                            <span>
                                                <i class="la la-close"></i>
                                                <span>Clear</span>
                                            </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                            <h3 class="kt-portlet__head-title">
                                نتيجة البحث
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <!--<div class="dropdown dropdown-inline">
                                        <button type="button"
                                                class="btn btn-default btn-icon-sm dropdown-toggle button-excel"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                    </div>-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable"
                               id="report_tb">
                            <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="5%">رقم الملف</th>
                                <th width="5%">الاسم</th>
                                <th width="5%">رقم الوثيقة</th>
                                <th width="5%">رقم الجوال</th>
                                <th width="5%">مكان السكن</th>
                                <th width="5%">تاريخ الميلاد</th>
                                <th width="5%">العمرY</th>
                                <th width="5%">الجنس</th>
                                <th width="5%"> العيادة</th>
                                <th width="5%">Risk indicators</th>
                                <th width="5%">1st OAE date</th>
                                <th width="5%">2nd OAE date</th>
                                <th width="5%"> المركز المحول لها</th>
                                <th width="5%">سبب التحويل</th>
                                <th width="5%">ADT date</th>
                                <th width="5%">ADT Result</th>
                                <th width="5%">ABR date</th>
                                <th width="5%">ABR Result</th>
                                <th width="5%"> ABR recommendations</th>

                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>

                        <!--end: Datatable -->
                    </div>
                </div>
                <!--end::Portlet-->
            </div>

        </div>
    </div>
</div>

<!-- end:: Content -->


<!--<script src="<?php /*echo base_url("assets/custom_js/monitor_corona.js"); */ ?>" type="text/javascript"></script>-->
<!--<script src="<?php /*echo base_url("assets/custom_js/scripts.bundle.js");  */ ?>" type="text/javascript"></script>-->
<script>
    //  var KTBootstrapSelect={init:function(){$(".kt-selectpicker").selectpicker()}};
    $(document).ready(function () {
        clear_form();
        get_clinics();
        // viewQueryTable();

    });

    function viewQueryTable() {
        //  $('#risk_patient_tb').DataTable().destroy();
        var patient_id = $('#patient_id').val();
        var patient_name = $('#patient_name').val();
        var from_date = $('#from_date').val();
        var to_date = $('#to_date').val();
        var p_show = $('input[name="p_show"]:checked').val();

        //alert('has_risk' + has_risk);
        $('#report_tb').DataTable().destroy();
        $.fn.dataTable.ext.errMode = 'none';
        $('#report_tb').on('error.dt', function (e, settings, techNote, message) {
            console.log('An error has been reported by DataTables: ', message);
        })
        var table = $('#report_tb');
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                "type": "post",
                "url": baseURL + 'Statistic_cont/getQueryData',
                "data": {
                    'P_CLINIC_TYPE': $('#center_type').val(),
                    'P_CENTER_ID': $('#center_id').val(),
                    'P_CLINIC_REF': $('#referral_center_id').val(),
                    'P_RESULT_OAE': $('#oae_result').val(),
                    'P_RESULT_ONE_OAE': $('#P_RESULT_ONE_OAE').val(),
                    'P_RESULT_ABR': $('#abr_result').val(),
                    'P_RESULT_ADT': $('#adt_result').val(),
                    'P_RISK': $('#RISK_ID').val(),
                    'P_HEARING_AID': $('#HEARING_AID').val(),
                    'P_SEX': $('#sex_id').val(),
                    'P_OAE_FROM_DATE': $('#oae_from_date').val(),
                    'P_OAE_TO_DATE': $('#oae_to_date').val(),
                    'P_REF_FROM_DATE': $('#trans_from_date').val(),
                    'P_REF_TO_DATE': $('#trans_to_date').val(),
                    'P_VISIT_FROM_DATE': $('#from_date').val(),
                    'P_VISIT_TO_DATE': $('#to_date').val(),
                    'has_risk': $('#has_risk').val(),
                    'has_oae1': $('#has_oae1').val(),
                    'has_oae2': $('#has_oae2').val(),
                    'has_abr': $('#has_abr').val(),
                    'has_adt': $('#has_adt').val()

                }
            }
            ,
            dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
            bFilter: false,
            lengthMenu: [50, 100, 500, 1000, 10000],
            buttons: [
                {
                    'extend': 'excel',
                    'className': 'btn btn-success excel-export',
                }

            ],
            order: [[1, "asc"]], // Order on init. # is the column, starting at 0
            /*

             <th width="5%">#</th>
            <th width="5%">رقم الملف</th>
            <th width="10%">الاسم</th>
            <th width="10%">رقم الوثيقة</th>
            <th width="10%">رقم الجوال</th>
            <th width="5%">مكان السكن</th>
            <th width="10%">تاريخ الميلاد</th>
            <th width="5%">العمرY</th>
            <th width="5%">الجنس</th>
            <th width="5%"> العيادة</th>
            <th width="10%">Risk indicators</th>
            <th width="5%">1st OAE date</th>
            <th width="5%">2nd OAE date</th>
             <th width="5%"> المركز المحول لها</th>
            <th width="5%">سبب التحويل</th>
            <th width="5%">ADT date</th>
            <th width="5%">ADT Result</th>
            <th width="5%">ABR date</th>
            <th width="5%">ABR Result</th>
            <th width="5%"ABR recommendations</th>
             */

            columns: [
                {data: 'no', orderable: false},
                {data: 'PERSON_ID'},
                {data: 'PATIENT_NAME'},
                {data: 'DOCUMENT_ID'},
                {data: 'MOBILE_NUM'},
                {data: 'ADDRESS'},
                {data: 'DOB'},
                {data: 'AGE'},
                {data: 'SEX_NAME'},
                {data: 'CLINIC_FROM'},
                {data: 'RISK_FACTORS'},
                {data: 'FIRST_DATE'},
                {data: 'SECOND_DATE'},
                {data: 'CLINIC_TRANS'},
                {data: 'REASON_REFERRAL'},
                {data: 'ADT_DATE'},
                {data: 'RESULT_ADT'},
                {data: 'ABR_DATE'},
                {data: 'RESULT_ABR'},
                {data: 'ABR_RECOM'},
            ],
        });

        $('.button-excel').click(function () {
            $('.excel-export').click();
            return;
        });
    }

    function get_clinics() {
        $.ajax({
            url: baseURL + 'Statistic_cont/get_center_list',
            type: 'POST',
            //  dataType: 'json',
            data: {
                center_type: $('#center_type').val()
            },
            success: function (data) {
                //    alert(data);
                //  unblockUI('breast_factor_form');
                $('#center_id').html(data);
                $('#center_id').trigger('change');

            }
        });
    }

    function clear_form() {
        /*$('#center_type').val('');
        $('#center_type').trigger('change');*/

        /* $('#center_id').val(0);
         $('#center_id').trigger('change');*/

        $('#referral_center_id').val('');
        $('#referral_center_id').trigger('change');

        $('#oae_result').val('');
        $('#oae_result').trigger('change');

        $('#abr_result').val('');
        $('#abr_result').trigger('change');

        $('#sex_id').val('');
        $('#sex_id').trigger('change');


        $('#from_date').datepicker("setDate", '');
        $('#to_date').datepicker("setDate", '');

        $('#oae_from_date').datepicker("setDate", '');
        $('#oae_to_date').datepicker("setDate", '');

        $('#trans_from_date').datepicker("setDate", '');
        $('#trans_to_date').datepicker("setDate", '');
        $('#report_tb').DataTable().clear();
        $('#report_tb').DataTable().destroy();
        $.fn.dataTable.ext.errMode = 'none';
        $('#report_tb').on('error.dt', function (e, settings, techNote, message) {
            console.log('An error has been reported by DataTables: ', message);
        })
        // viewQueryTable();
    }
</script>