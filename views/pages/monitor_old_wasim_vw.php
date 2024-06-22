<style>
    .form-control {

        font-size: 13px !important;

        height: 40px !important;
    }

    .bootstrap-timepicker-widget table {
        direction: ltr !important
    }

</style>
<script>
    var _city =<?php echo json_encode($city); ?>;
    var _region =<?php echo json_encode($region); ?>;
    var _sex =<?php echo json_encode($sex); ?>;
    var _hos =<?php echo json_encode($hos); ?>;
</script>

<div class="row">
    <div class="col-md-12">
        <!--		 <div class="portlet-body form">

        <div class="form-body">-->
        <div class="portlet box green-haze">
            <div class="portlet-title">
                <div class="caption ">
                    <i class="fa fa-briefcase"></i>
                    الاستعلام
                    <!--قيد الاصلاح-->
                </div>
                <div class="tools">

                </div>
            </div>

            <input type="hidden" id="MRP_ID" value=""/>
            <div class="portlet-body form">
                <form id="rta_frm_id" class="form-horizontal form-bordered form-row-stripped" role="form">
                    <div class="form-group">

                        <div class="col-md-2">
                            اسم المستشفى
                        </div>
                        <div class="col-md-2">
                            <select class="form-control select2me" id="P_HOS_NO" name="P_HOS_NO">
                                <option value="0">جميع المستشفيات</option>
                                <?php

                                foreach ($all_hos['result'] as $row) {
                                    ?>
                                    <option
                                    value="<?php echo $row['H_CODE']; ?>"><?php echo $row['H_NAME_AR']; ?> </option><?php }; ?>
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="FIRST_NAME_IN" class="col-md-1 control-label">اسم المريض</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control " placeholder="الاسم الاول" name="FIRST_NAME_IN"
                                   id="FIRST_NAME_IN"/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control " placeholder="الاسم الثاني" name="second_name"
                                   id="second_name"/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control " placeholder="الاسم الثالث" name="third_name"
                                   id="third_name"/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control " placeholder="الاسم الاخير" name="last_name"
                                   id="last_name"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="patient_no" class="col-md-1 control-label">رقم الهوية</label>

                        <div class="col-md-2">
                            <input type="text" class="form-control " name="patient_no" id="patient_no"/>
                        </div>
                        <label for="P_EMR_JUD_REP_NO" class="col-md-2 control-label" style="display: none">رقم التقرير القضائي</label>

                        <div class="col-md-2" style="display: none">
                            <input type="text" class="form-control " placeholder="رقم التقرير القضائي"
                                   name="P_EMR_JUD_REP_NO" id="P_EMR_JUD_REP_NO" />
                        </div>
                        <label for="P_EMR_DOCTOR_DECISION_CD" class="col-md-1 control-label">قرار الطبيب</label>

                        <div class="col-md-2">
                            <select id="P_EMR_DOCTOR_DECISION_CD"
                                    class="form-control select2 P_EMR_DOCTOR_DECISION_CD"
                                    name="P_EMR_DOCTOR_DECISION_CD">
                                <option value="" selected>أختر ..</option>
                                <?php foreach ($all_DOCTOR_DECISION['result'] as $row): ?>
                                    <option value="<?php echo $row['DOC_DEC_CODE'] ?>"><?php echo $row['DOC_DEC_NAME_AR'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="P_EMR_BROUGHT_CD" class="col-md-1 control-label">طريقة الحضور</label>

                        <div class="col-md-2">
                            <select class="form-control select2me" data-placeholder="اختر طريقة الحضور"
                                    id="P_EMR_BROUGHT_CD"
                                    name="P_EMR_BROUGHT_CD">
                                <option value=""> اختر..</option>
                                <?php
                                foreach ($BROUGHT_PR['result'] as $row) {
                                    ?>
                                <option value="<?php echo $row['BR_CODE']; ?>">
                                    <?php echo $row['BR_NAME_AR']; ?> </option><?php }; ?>
                            </select>
                        </div>
                        <label for="P_EMR_OUT_INJURED_STATUS_CD" class="col-md-1 control-label">حالة المصاب</label>

                        <div class="col-md-2">
                            <select class="form-control select2me" data-placeholder="اختر حالة المصاب"
                                    id="P_EMR_OUT_INJURED_STATUS_CD"
                                    name="P_EMR_OUT_INJURED_STATUS_CD">
                                <option value=""> اختر..</option>
                                <?php
                                foreach ($all_injured_status['result'] as $row) {
                                    ?>
                                <option value="<?php echo $row['STATUS_CODE']; ?>">
                                    <?php echo $row['STATUS_NAME_AR']; ?> </option><?php }; ?>
                            </select>
                        </div>
                        <label for="P_EMR_ACC_KIND_CD" class="col-md-1 control-label">نوع الاصابة</label>


                        <div class="col-md-3">
                            <select id="P_EMR_ACC_KIND_CD"
                                    class="form-control select2 P_EMR_ACC_KIND_CD"
                                    name="P_EMR_ACC_KIND_CD"
                                    multiple>
                               
                                    <option value="86"> ادعاء الاصابة بفيروس كورونا</option>
                               
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="P_EMR_CAUSE_INJURY_CD" class="col-md-1 control-label" style="display: none">سبب الاصابة</label>

                        <div class="col-md-2" style="display: none">
                            <select id="P_EMR_CAUSE_INJURY_CD" class="form-control select2 P_EMR_CAUSE_INJURY_CD"
                                    name="P_EMR_CAUSE_INJURY_CD">
                                <option value="" selected>أختر ..</option>
                                <?php /*foreach ($CAUSE_INJURY['result'] as $row): */?>

                                <?php /*endforeach; */?>
                            </select>
                        </div>
                        <label for="P_EMR_WOUNDED_LOCATION_CD" class="col-md-2 control-label" style="display: none">موقع الاصابة في
                            الجسم</label>

                        <div class="col-md-2" style="display: none">
                            <select class="form-control select2me" data-placeholder="اختر موقع الاصابة في الجسم"
                                    id="P_EMR_WOUNDED_LOCATION_CD"
                                    name="P_EMR_WOUNDED_LOCATION_CD">
                                <option value="">أختر ..</option>
                                <?php
/*                                foreach ($WOUNDED_LOC['result'] as $row) {
                                    */?>
                                <option value="<?php /*echo $row['WOUNDED_LOC_CODE']; */?>">
                                    <?php /*echo $row['WOUNDED_LOC_NAME_AR']; */?> </option><?php /*}; */?>
                            </select>
                        </div>
                        <label for="P_EMR_WOUNDED_PLACE_CD" class="col-md-2 control-label">مكان تواجد المصاب</label>

                        <div class="col-md-2">
                            <select class="form-control select2me" data-placeholder="اختر مكان تواجد المصاب"
                                    id="P_EMR_WOUNDED_PLACE_CD" name="P_EMR_WOUNDED_PLACE_CD">
                                <option value="">أختر ..</option>
                                <?php
                                foreach ($WOUNDED_PLACE['result'] as $row) {
                                    ?>
                                <option value="<?php echo $row['WOUNDED_PLACE_CODE']; ?>">
                                    <?php echo $row['WOUNDED_PLACE_NAME_AR']; ?> </option><?php }; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="P_FROM_DATE" class="col-md-1 control-label">التاريخ من</label>

                        <div class="col-md-3">
                            <div class="input-group  date-picker input-daterange col-md-10" data-date="10/11/2012"
                                 data-date-format="dd/mm/yyyy">
                                <input class="form-control " id="P_FROM_DATE" value="<?php echo date('d/m/Y'); ?>"
                                       name="P_FROM_DATE" type="text">
                                <span class="input-group-addon">
								الى </span>
                                <input class="form-control " id="P_TO_DATE" value="<?php echo date('d/m/Y'); ?>"
                                       name="P_TO_DATE" type="text">
                            </div>
                        </div>
                        <!--</div>
                        -->
                        <!-- <div class="form-group">-->
                        <label for="from_timee" class="col-md-1 control-label">الوقت من</label>

                        <div class="col-md-4">
                            <div class="input-group input-medium  clockpicker">
                                <input type="text" class="form-control time ui-timepicker-input timepicker-24"
                                       autocomplete="off" name="from_timee" id="from_timee" value="00:00"/>
                                <span class="input-group-addon">
									<span class="glyphicon glyphicon-time"></span>
								</span>
                                <input type="text" class="form-control time ui-timepicker-input timepicker-24"
                                       autocomplete="off" name="to_timee" id="to_timee" value="23:59"/>
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-10 col-md-9">
                                        <button type="button" id="emr_butn_srch" class="btn yellow ">
                                            <i class="fa fa-search"></i>بحث
                                        </button>
                                        <button type="button" class="btn purple" onclick="clear_emr_form();">
                                            <i class="fa fa-refresh"></i>جديد
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!--     </div>
        </div>-->
    </div>
</div>

<div id="wait_loading">
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box red-pink">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>قسم الاستقبال و الطوارئ
                </div>
                <div class="tools">
                    <div class="col-md-2 left">

                        <form id="btn_emr_submit" class="form-horizontal form-bordered form-row-stripped" role="form"
                              action="<?php echo base_url('index.php/Monitor_cont/excelExport') ?>"
                              method="POST">
                            <input type="hidden" id="obj" name="obj" value="">
                            <button type="submit" class="btn green button-excel2 " id="ExportButton">
                                <i class="fa fa-file-excel-o"></i>execl
                            </button>
                        </form>

                    </div>

                </div>
            </div>
            <div class="portlet-body">


                <table class="table table-striped table-bordered table-hover" id="sample_1">
                   
                </table>

                <table id="md1" class="table table-striped">
                </table>

            </div>

            <div class="">

            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>
</div>

<script src="<?php echo base_url(); ?>js/monitor.js"></script>

<script>

    $(document).ready(function () {
        $('.select2').select2();
    });
</script>