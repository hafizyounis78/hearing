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
                <span class="kt-subheader__desc">استعلام التحويلات</span>
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
                                <div class="col-lg-2 kt-margin-b-10-tablet-and-mobile">
                                    <label>رقم الهوية:</label>
                                    <input type="number" class="form-control kt-input" id="patient_id"
                                           name="patient_id"
                                           placeholder="" data-col-index="0">
                                </div>
                                <div class="col-lg-2 kt-margin-b-10-tablet-and-mobile">
                                    <label>اسم المريض:</label>
                                    <input type="text" class="form-control kt-input" id="patient_name"
                                           name="patient_name"
                                           placeholder="" data-col-index="1">
                                </div>
                                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                    <label>تاريخ:</label>
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
                                <div class="col-lg-4 kt-margin-b-10-tablet-and-mobile">
                                    <label>الحالة:</label>
                                    <div class="kt-radio-inline">
                                        <label class="kt-radio">
                                            <input type="radio" name="p_show" id="p_show_all" class="p_show"
                                                   value="0" checked="checked"> الكل
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="p_show" class="p_show" value="82"> منتظر
                                            العلاج
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="p_show" class="p_show" value="83"> قيد
                                            التشخيص
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="p_show" class="p_show" value="84">انتهاء
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-separator kt-separator--md kt-separator--dashed"></div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary btn-brand--icon"
                                            onclick="viewTable();" id="search_btn">
                                                <span><i class="la la-search"></i>
                                                    <span>Search</span>
                                                </span>
                                    </button>&nbsp;&nbsp;
                                    <button class="btn btn-secondary btn-secondary--icon"
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

                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label ">
                        	<span class="kt-portlet__head-icon kt-font-danger">
                                <i class="fa fa-child"></i>
                            </span>
                            <h3 class="kt-portlet__head-title kt-font-danger kt-font-bold">
                                قائمة المرضى
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable"
                               id="patient_tb">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th width="10%">رقم الوثيقة</th>
                                <th width="20%">الاسم</th>
                                <th width="10%">تاريخ الميلاد</th>
                                <th width="10%">المركز</th>
                                <th width="10%">الفحص المطلوب</th>
                                <th width="10%">سبب التحويل</th>
                                <th width="10%">تاريخ الزيارة</th>
                                <th width="5%">رقم الجوال</th>
                                <th width="10%">حالة الموعد</th>
                                <th width="5%">إجراءات</th>
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
<script>
    //  var KTBootstrapSelect={init:function(){$(".kt-selectpicker").selectpicker()}};
    $(document).ready(function () {
        viewTable();
        //  clear_form();
    });

    function viewTable() {
        //  $('#patient_tb').DataTable().destroy();
        var patient_id = $('#patient_id').val();
        var patient_name = $('#patient_name').val();
        var from_date = $('#from_date').val();
        var to_date = $('#to_date').val();
        var p_show = $('input[name="p_show"]:checked').val();

        $('#patient_tb').DataTable().destroy();
        //  $.fn.dataTable.ext.errMode = 'none';
        /*   $('#patient_tb').on('error.dt', function (e, settings, techNote, message) {
               console.log('An error has been reported by DataTables: ', message);
           })*/
        var table = $('#patient_tb');
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                "type": "post",
                "url": baseURL + 'Referral_cont/getReferralPatient',
                "data": {
                    'patient_id': patient_id,
                    'patient_name': patient_name,
                    'from_date': from_date,
                    'to_date': to_date,
                    'p_show': p_show,
                }
            }
            ,
            dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
            bFilter: false,
            lengthMenu: [50, 100, 500, 1000],
            buttons: [
                {
                    'extend': 'excel',
                    'className': 'btn btn-success screen-activity-excel-export',
                }

            ],
            order: [[ 7, "desc" ]],
            columns: [
                {data: 'no'},
                {data: 'DOCUMENT_ID'},
                {data: 'PATIENT_NAME'},
                {data: 'DOB'},
                {data: 'CENTER_NAME_AR'},
                {data: 'RM_REQUIRED_EXAMINATION'},
                {data: 'RE_REASON_REFERRAL'},
                {data: 'RM_DATE'},
                {data: 'MOBILE_NUM'},
                {data: 'RM_APP_IS_DONE'},
                {data: 'ACTION'},
            ],
            columnDefs: [
                {
                    targets: -1,
                    orderable: false,
                    render: function (data, type, full, meta) {

                        return '<a title="Patient File" onclick="open_patient_file(' + data+ ',\'referral_cont\''+  ',\'referral_query\''+')"  class="btn  btn-clean btn-icon btn-icon" href="javascript:;" ><i class="flaticon2-document"></i></a>';

                    },
                },
                {
                    targets: -2,
                    render: function (data, type, full, meta) {
                        var status = {
                            0: {'title': 'لا يوجد', 'class': 'kt-badge--warning'},
                            1: {'title': 'تم الحجز ', 'class': 'kt-badge--brand'},

                        };
                        if (typeof status[data] === 'undefined') {
                            return data;
                        }
                        return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
                    },
                },
                {
                    targets: -5,
                    render: function (data, type, full, meta) {
                        var status = {
                            102: {'title': 'جديد', 'class': ' kt-badge--danger'},
                            103: {'title': 'متابعة', 'class': 'kt-badge--info'},

                        };
                        if (typeof status[data] === 'undefined') {
                            return data;
                        }
                        return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
                    },
                },
            ],
        });


    }

    function clear_form() {
        $('#patient_id').val('');
        $('#patient_name').val('');
        $('#p_show_all').val('');
        $('#from_date').datepicker("setDate", '1d');
        $('#to_date').datepicker("setDate", '1d');
        viewTable();
    }

    function open_calendar(visit_id) {

        //alert(visit_id);
        $.ajax({
            type: "POST",
            // dataType: 'json',
            url: baseURL + 'Appointment_cont/send_data/',
            data: {
                VISIT_ID: visit_id,
            },
            cache: false,
            success: function (data) {

                var url = baseURL + 'appointment_cont/calendar_vw';
                window.location.href = url;//+national_id;

            }
        });

    }

    function open_patient_file(visit_id,CONTROLLER,PATIENT_LIST) {

        //alert(visit_id);
        $.ajax({
            type: "POST",
            // dataType: 'json',
            url: baseURL + 'Doctor_cont/send_data/',
            data: {
                VISIT_ID: visit_id,
                PATIENT_LIST: PATIENT_LIST,
                CONTROLLER: CONTROLLER,
            },
            cache: false,
            success: function (data) {

                var url = baseURL + 'doctor_cont/patient_file';
                window.location.href = url;//+national_id;

            }
        });

    }
</script>