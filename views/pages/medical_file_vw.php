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
                <span class="kt-subheader__desc">السجلات الطبية</span>
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
                                <!--<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
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
                                </div>-->
                                <!-- <div class="col-lg-4 kt-margin-b-10-tablet-and-mobile">
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
                                 </div>-->
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
                               id="risk_patient_tb">
                            <thead>
                            <tr>
                                <th width="10%">#</th>
                                <th width="10%">رقم الوثيقة</th>
                                <th width="25%">الاسم</th>
                                <th width="20%">المركز</th>
                                <!--  <th width="10%">نوع الزيارة</th>
                                  <th width="10%">الحالة</th>-->
                                <th width="10%">تاريخ فتح الملف</th>
                                <th width="10%">رقم الجوال</th>
                                <th width="15%">إجراءات</th>
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
<!--begin::Modal-->
<div class="modal fade" id="kt_update_id_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Patient ID.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
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
                        <div class="alert alert-warning" role="alert">
                            <div class="alert-text">تنبية ,انت على وشك القيام بتعديل رقم هوية المريض الرجاء التاكد قبل
                                القيام بعملية الحفظ
                            </div>
                        </div>
                        <input type="hidden" id="hdn_PERSON_SERIAL_ID" name="hdn_PERSON_SERIAL_ID"
                               value="">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label>رقم الوثيقة
                                    <span class="kt-font-danger kt-font-bold"> * </span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="DOCUMENT_ID"
                                           id="DOCUMENT_ID"
                                           placeholder="رقم الوثيقة الجديد"
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

                        <div class="form-group row"><!-- NAME-->
                            <div class="col-lg-12">
                                <label>الاسـم رباعي
                                    <span class="kt-font-danger kt-font-bold"> * </span></label>
                                <div class="form-group row">
                                    <div class="col-3">
                                        <input class="form-control" type="text"
                                               value="" name="FIRST_NAME" id="FIRST_NAME"
                                               placeholder="الاسم الاول" readonly>
                                    </div>
                                    <div class="col-3">
                                        <input class="form-control" type="text"
                                               value="" id="SECOND_NAME" name="SECOND_NAME"
                                               placeholder="اسم الاب" readonly>
                                    </div>
                                    <div class="col-3">
                                        <input class="form-control" type="text"
                                               value="" id="THIRD_NAME" name="THIRD_NAME"
                                               placeholder="اسم الجد" readonly>
                                    </div>
                                    <div class="col-3">
                                        <input class="form-control" type="text"
                                               value="" id="LAST_NAME" name="LAST_NAME"
                                               placeholder="اسم العائلة" readonly>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </form>

                <!--end::Form-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="update_patient_id();">Update</button>
            </div>
        </div>
    </div>
</div>

<!--end::Modal-->

<!-- end:: Content -->


<!--<script src="<?php /*echo base_url("assets/custom_js/monitor_corona.js"); */ ?>" type="text/javascript"></script>-->
<script>
    //  var KTBootstrapSelect={init:function(){$(".kt-selectpicker").selectpicker()}};
    $(document).ready(function () {
        $('#from_date').datepicker("setDate", '1d');
        $('#to_date').datepicker("setDate", '1d');
        viewTable();
        //  clear_form();
    });

    function viewTable() {
        //  $('#risk_patient_tb').DataTable().destroy();
        var patient_id = $('#patient_id').val();
        var patient_name = $('#patient_name').val();
        var from_date = $('#from_date').val();
        var to_date = $('#to_date').val();
        var p_show = $('input[name="p_show"]:checked').val();

        $('#risk_patient_tb').DataTable().destroy();
        $.fn.dataTable.ext.errMode = 'none';
        $('#risk_patient_tb').on('error.dt', function (e, settings, techNote, message) {
            console.log('An error has been reported by DataTables: ', message);
        })
        var table = $('#risk_patient_tb');
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                "type": "post",
                "url": baseURL + 'Patient_cont/getMedicalFileData',
                "data": {
                    'patient_id': patient_id,
                    'patient_name': patient_name,
                    'from_date': from_date,
                    'to_date': to_date,
                    'p_show': p_show,
                }
            }
            ,
            /*

            <th>#</th>
            <th>رقم الوثيقة</th>
            <th>الاسم</th>
            <th>المركز</th>
            <th>نوع الزيارة</th>
            <th>الحالة</th>
            <th>تاريخ الزيارة</th>
            <th>رقم الجوال</th>
            <th>إجراءات</th>
             */
            columns: [
                {data: 'no'},
                {data: 'DOCUMENT_ID'},
                {data: 'PATIENT_NAME'},
                {data: 'CENTER_NAME_AR'},
                /*       {data: 'VISIT_TYPE'},
                       {data: 'STATUS_NAME'},*/
                {data: 'CREATE_DATE'},
                {data: 'MOBILE_NUM'},
                {data: 'ACTION'},
            ],
            columnDefs: [
                {
                    targets: -1,
                    orderable: false,
                    render: function (data, type, full, meta) {

                        return '<button title="Edit" onclick="edit_medical_file(' + data + ')"  class="btn  btn-clean btn-icon btn-icon"><i class="flaticon-edit"></i></button>'
                            + '<button title="Delete" onclick="delete_medical_file(' + data + ')"  class="btn  btn-clean btn-icon btn-icon"><i class="flaticon-delete"></i></button>'
                            + '<button title="Update Patient ID." onclick="show_update_patient_id_modal(' + data + ')" class="btn  btn-clean btn-icon btn-icon" data-toggle="modal" data-target="#kt_update_id_modal"><i class="flaticon-profile"></i></button>';

                    },
                },
            ],
        });


    }

    function clear_form() {
        $('#patient_id').val('');
        $('#patient_name').val('');
        viewTable();
    }

    function edit_medical_file(PERSON_ID) {

        //alert(visit_id);
        $.ajax({
            type: "POST",
            // dataType: 'json',
            url: baseURL + 'Patient_cont/send_data/',
            data: {
                PERSON_ID: PERSON_ID,
            },
            cache: false,
            success: function (data) {
                //   unblockUI('tbdPatientList');
                //  alert(data);
                var url = baseURL + 'patient_cont/editpatient';
                window.location.href = url;//+national_id;
            }
        });

    }

    function delete_medical_file(PERSON_ID) {

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
                    url: baseURL + 'Patient_cont/del_file',
                    type: 'POST',
                    //  dataType: 'json',
                    data: {
                        PERSON_ID: PERSON_ID
                    },
                    success: function (data) {
                        if (data == 1) {
                            NOTIFY2('تمت العملية بنجاح', "success");
                            viewTable();

                        } else
                            NOTIFY2('لم تتم العملية بنجاح', "danger")

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

    function show_update_patient_id_modal(PERSON_ID) {
        $('#hdn_PERSON_SERIAL_ID').val(PERSON_ID);
        $('#DOCUMENT_ID').val('');
        $('#FIRST_NAME').val('');
        $('#SECOND_NAME').val('');
        $('#THIRD_NAME').val('');
        $('#LAST_NAME').val('');

    }

    function update_patient_id() {
        var PERSON_ID = $('#hdn_PERSON_SERIAL_ID').val();
        var DOCUMENT_ID = $('#DOCUMENT_ID').val();
        if ($('#hdn_PERSON_SERIAL_ID').val() == ''||$('#DOCUMENT_ID').val() == ''||$('#FIRST_NAME').val() == ''||$('#SECOND_NAME').val() == ''||$('#THIRD_NAME').val() == ''||$('#LAST_NAME').val() == ''){
            NOTIFY2('يرجى التأكد من القيم المدخلة', "danger")
            return;
        }
        swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, Update it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    url: baseURL + 'Patient_cont/update_patient_id_cont',
                    type: 'POST',
                    //  dataType: 'json',
                    data: {
                        PERSON_ID: PERSON_ID,DOCUMENT_ID:DOCUMENT_ID
                    },
                    success: function (data) {
                        if (data == 1) {
                            NOTIFY2('تمت العملية بنجاح', "success");
                            viewTable();
                            $('#hdn_PERSON_SERIAL_ID').val('');
                        }
                       else if (data == 2) {
                            NOTIFY2('رقم الهوية المدخل موجود مسبقاً', "danger");


                        }
                        else
                            NOTIFY2('لم تتم العملية بنجاح', "danger")

                    }
                });
                // result.dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
            }
        });


    }

    function chk_patient_id() {
        // clear_patient_form();

        $.ajax({
            url: baseURL + 'Patient_cont/chk_patientId',
            type: 'POST',
            data: {
                DOCUMENT_ID: $('#DOCUMENT_ID').val(),
                DOCUMENT_TYPE_ID: 93
            },
            dataType: 'json',
            success: function (data) {
                //   alert(data[0].FIRST_NAME);
                console.log(data);
                $('#FIRST_NAME').val(data[0].FIRST_NAME);
                $('#SECOND_NAME').val(data[0].SECOND_NAME);
                $('#THIRD_NAME').val(data[0].THIRD_NAME);
                $('#LAST_NAME').val(data[0].LAST_NAME);

            }
        });
    }


</script>