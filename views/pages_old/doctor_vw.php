<link href="<?php echo base_url("assets/panel/assets/css/pages/wizard/wizard-1.rtl.css");?>" rel="stylesheet" type="text/css" />
<style>
.select2-selection{
    text-align:left;
    }
        .select2-results{
        text-align:left;
    }
    
    .kt-scroll-modal{
        overflow-y:scroll;
        overflow-x:hidden;
        padding-right:1.25rem;
    }

    .kt-scroll-modal::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.1);
	background-color: #e2e5ec;
	border-radius: 10px;
}

.kt-scroll-modal::-webkit-scrollbar
{
	width: 3px;
	background-color: #e2e5ec;
}

.kt-scroll-modal::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-color: #5867dd;
}
    
   #referral_report .table-bordered th, #referral_report .table-bordered td{
/*         border-color:#646c9a; */
    }
    #referral_report .table-bordered th{
        font-weight:500;
    }
    
    .modal-header .close {
    margin: -1rem -1rem -1rem auto;
}

</style>
<!--visit id//-->
<input class="form-control" type="hidden" id="RTC_VISIT_ID" name="RTC_VISIT_ID" placeholder=""  value="<?php echo $_SESSION["VISIT_ID"];?>">
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
 <div class="alert alert-warning fade show" role="alert">
                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
                            <div class="alert-text">الرجاء التأكد من إدخال كافة المعلومات الخاصة بالمريض قبل إنهاء الجلسة</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
								<!-- end:: Content Head -->
                                        <!--begin::Portlet-->
                   <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app" data-sticky-container>
    <!--Begin:: App Aside Mobile Toggle-->
    <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
        <i class="la la-close"></i>
    </button>
    <!--End:: App Aside Mobile Toggle-->

    <!--Begin:: App Aside-->
    <div class="kt-grid__item kt-app__toggle kt-app__aside sticky" data-sticky="true" data-margin-top="100px" data-sticky-for="1023" data-sticky-class="kt-sticky" id="kt_user_profile_aside">
        <!--begin:: Widgets/Applications/User/Profile1-->
<div class="kt-portlet kt-portlet--height-fluid-">
    <div class="kt-portlet__body kt-portlet__body--fit-y">
        <!--begin::Widget -->
        <div class="kt-widget kt-widget--user-profile-1">
            <?php
            $this->load->view('include/profile_aside');
            ?>
            <div class="kt-widget__footer">
                <a href="<?php echo base_url('index.php/patientlist_cont/patientlist_doctor_vw'); ?>" class="btn btn-label-danger btn-lg btn-upper" style="width: 100%">عودة لقائمة المرضى</a>
            </div>
        </div>
        <!--end::Widget -->
    </div>
</div>
<!--end:: Widgets/Applications/User/Profile1-->
    </div>
    <!--End:: App Aside-->



    <!--Begin:: App Content-->
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content" dir="ltr" style="text-align:left;">
        <div class="row">
             <div class="col-xl-12">
                <div class="kt-portlet" dir="ltr">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                VITAL SIGNS
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_widget6_tab1_content" role="tab">
                                        Today
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_widget6_tab2_content" role="tab">
                                        History
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="" data-toggle="modal" data-target="#vital_signs_modal" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
                                    </g>
                                </svg>                        <!--<i class="flaticon2-plus"></i>-->
                            </a>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                             <th>#</th>
                                                <th>Temp</th>
                                                <th>BP</th>
                                                <th>PR</th>
                                                <th>RR</th>
                                                <th>Sa O2</th>
                                                <th>GCS</th>
                                                <th>Arr / Dis</th>
                                                <th>Date</th>
                                                <th>Created By</th>
                                                <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="vital_signs_list_today" id="vital_signs_list_today">
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="tab-pane" id="kt_widget6_tab2_content" aria-expanded="false">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                              <th>#</th>
                                                <th>Temp</th>
                                                <th>BP</th>
                                                <th>PR</th>
                                                <th>RR</th>
                                                <th>Sa O2</th>
                                                <th>GCS</th>
                                                <th>Arr / Dis</th>
                                                <th>Date</th>
                                                <th>Created By</th>
                                                <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody id="vital_signs_list">
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="kt-portlet" dir="ltr">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">DOCTOR</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-label-brand btn-sm btn-icon btn-icon-md">
                                        <i class="la la-medkit"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="kt-form kt-form--label-right" action="javascript:;" id="kt_form" novalidate="novalidate">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Chief Complaint</label>
                                        <div class="col-lg-9 col-xl-9">
                                                <textarea class="form-control P_CHIEF_COMPLAINT" rows="3" name="P_CHIEF_COMPLAINT" id="P_CHIEF_COMPLAINT"></textarea>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Physical Examination</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <textarea class="form-control P_ON_EXAMINATION" rows="3" name="P_ON_EXAMINATION" id="P_ON_EXAMINATION"></textarea>
                                        </div>
                                    </div>
                                 <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Suspected Covid</label>
                                        <div class="col-lg-4 col-xl-4">
                                            <select class="form-control kt-select2-ltr" id="P_SUSPECTED_COVID" name="P_SUSPECTED_COVID">
                                                 <option value></option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                        <label class="col-xl-1 col-lg-1 col-form-label">Severity</label>
                                        <div class="col-lg-4 col-xl-4">
                                            <select class="form-control kt-select2-ltr" id="P_SEVERITY_ID" name="P_SEVERITY_ID">
                                                <option value></option>
                                                <?php
                                                foreach ($GET_C_RTC_SEVERITY as $RTC_SEVERITY) {
                                                ?>
                                                <option value="<?= $RTC_SEVERITY['C_RTC_SEVERITY_ID'] ?>"><?= $RTC_SEVERITY['SEVERITY_DESC'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row d-none">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Investigation</label>
                                        <div class="col-lg-5 col-xl-5">
                                            <div class="kt-checkbox-inline">
                                                <label class="kt-checkbox kt-checkbox--solid">
                                                    <input type="checkbox"> CBC
                                                    <span></span>
                                                </label>
                                                <label class="kt-checkbox kt-checkbox--solid">
                                                    <input type="checkbox"> X-Ray
                                                    <span></span>

                                                </label>
                                                <label class="kt-checkbox kt-checkbox--solid">
                                                    <input type="checkbox" id="PCR" value="1"> PCR
                                                    <span></span>

                                                </label>
                                                <label class="kt-checkbox kt-checkbox--solid">
                                                    <input type="checkbox" id="TEST_OTHER_CH"> Other
                                                    <span></span>
                                                </label>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <input class="form-control" type="text" id="TEST_OTHER" placeholder="Other" disabled value="">
                                        </div>
                                    </div>

                                    <div class="form-group row kt-widget16">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Diagnosis</label>
                                        <div class="col-lg-2 col-xl-2">
                                            <select class="form-control" id="icd_code_select2" name="icd_code_select2">
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-xl-6">
                                            <select class="form-control" id="icd_name_select2" name="param">
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="col-lg-1 col-xl-1 text-left">
                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-primary btn-icon" onclick="INSERT_VISIT_DIAGNOSIS();">
                                                    <i class="la la-plus"></i>
                                                </a>
                                        </div>
                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9 col-xl-9">
                                        <div class="kt-widget16__items">
                                            <div class="kt-widget16__item">
                                                <span class="kt-widget16__amount">
                                    Code
                                </span>
                                                <span class="kt-widget16__amount">
                                    Name
                                </span>
                                                <span class="kt-widget16__amount">
                                    Action
                                </span>
                                            </div>
                                            
                                             <div id="visit_diagnosis_table">

                                                </div>

                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row kt-widget16">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Management Plan</label>

                                        <div class="col-lg-8 col-xl-8">
                                        <input class="form-control" type="text"  value="" name="P_MANAGEMENT_DESC" id="P_MANAGEMENT_DESC">
                                        </div>
                                        <div class="col-lg-1 col-xl-1 text-left">
                                            <a href="javascript:;" onclick="INSERT_VISIT_MANAGEMENT();" data-repeater-delete="" class="btn btn-primary btn-icon">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </div>
                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="kt-widget16__items">
                                                <div class="kt-widget16__item">
                                                <span class="kt-widget16__amount">
                                    Management Plan
                                </span>
                                                    <span class="kt-widget16__amount">
                                    Action
                                </span>
                                                </div>
                                                <div id="visit_management_table">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row kt-widget16">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Disposition</label>

                                        <div class="col-lg-8 col-xl-8">
                                            <select class="form-control kt-select2-ltr" id="P_DISPOSITION_ID" name="P_DISPOSITION_ID">
                                                <option value></option>
                                                <?php
                                                foreach ($GET_C_RTC_DISPOSITION as $RTC_DISPOSITION) {
                                                ?>
                                                <option value="<?= $RTC_DISPOSITION['C_RTC_DISPOSITION_ID'] ?>" <?php if($RTC_DISPOSITION['C_RTC_DISPOSITION_ID'] == 4 || $RTC_DISPOSITION['C_RTC_DISPOSITION_ID' ] == 5 || $RTC_DISPOSITION['C_RTC_DISPOSITION_ID'] == 6 || $RTC_DISPOSITION['C_RTC_DISPOSITION_ID'] == 7) echo 'disabled'?>><?= $RTC_DISPOSITION['DISPOSITION_DESC'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-1 col-xl-1 text-left">
                                            <a href="javascript:;" onclick="INSERT_VISIT_DISPOSITION();" data-repeater-delete="" class="btn btn-primary btn-icon">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </div>
                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="kt-widget16__items">
                                                <div class="kt-widget16__item">
                                                <span class="kt-widget16__amount">
                                    Disposition
                                </span>
                                                    <span class="kt-widget16__amount">
                                    Action
                                </span>
                                                </div>
                                                <div id="visit_disposition_table">

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Doctor</label>
                                        <div class="col-lg-4 col-xl-4">
                                            <input class="form-control" id="DOCTOR_NAME" type="text"  disabled value="">
                                        </div>
                                        <label class="col-xl-1 col-lg-1 col-form-label">TOD</label>
                                        <div class="col-lg-4 col-xl-4">
                                           <input type="text" class="form-control kt-input kt_datetimepicker P_DISCHARGE_DATE_TIME" disabled name="TOD" id="TOD" placeholder="TOD" value="" data-col-index="5"/>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">

                                    <div class="col-lg-12 col-xl-12">
                                        <button type="submit" class="btn btn-primary" onclick="INSERT_DOCTOR_ASSESSMENT();">Save</button>&nbsp;
                                        <button type="reset"  class="btn btn-secondary"> Reset <i class="la la-recycle"></i></button>&nbsp;
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#referral_modal" aria-haspopup="true" aria-expanded="false">Reffer</button>&nbsp;
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#patient_card_modal" aria-haspopup="true"> Print Patient Card <i class="la la-print"></i></button>&nbsp;
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#referral_report_modal" aria-haspopup="true"> Print Referral Report <i class="la la-print"></i></button>
                                        <button type="button" class="btn btn-danger pull-right" style="display:none;" data-toggle="modal" data-target="#end_session_modal" aria-haspopup="true">  End Session <i class="la la-power-off"></i></button>
                                        <span id="end_session_btn">
<!--                                        <button type="button" class="btn btn-danger pull-right" onclick="UPDATE_VISIT_STATUS(3);"> End Session <i class="la la-power-off"></i></button>//-->
                                        </span>
                                    </div>
                                    <!--<div class="col-lg-3 col-xl-3">
                                    </div>//-->
                                </div>
                            </div>
                        </div>
                    </form>
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

 <!--begin::Modal-->
 <div class="modal fade" id="vital_signs_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" dir="ltr">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Add Vital Signs</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="la la-remove"></span>
                                </button>
                            </div>
                            <form class="kt-form kt-form--fit kt-form--label-right kt-form-vital" action="javascript:;">
                                <div class="modal-body">
                                  <div class="kt-scroll-modal" data-scroll="true" style="height:400px">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Temperature</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="text" value="" id="P_TEMP" name="P_TEMP">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Systolic Blood Pressure</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="number" id="P_BP_SYSTOLIC" name="P_BP_SYSTOLIC" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Diastolic Blood Pressure</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="number" value="" id="P_BP_DIASTOLIC" name="P_BP_DIASTOLIC">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Pulse (min)</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="number" value="" id="P_PR" name="P_PR">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Respiratory Rate</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="number" value="" id="P_RR" name="P_RR">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">OS2 Saturation %</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="number" value="" id="P_SAO2" name="P_SAO2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Glasgow Coma Scale</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="number" value="" id="P_GCS" name="P_GCS">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">On Arrival / Discharge</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <select class="form-control" id="P_ON_ARRIVAL_OR_DISCHARGE" name="P_ON_ARRIVAL_OR_DISCHARGE">
                                                <option value>Select ...</option>
                                                <option value="1">ARRIVAL</option>
                                                <option value="2">DISCHARGE</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="row pull-left">
                                        <div class="col-lg-12 col-xl-12">
                                        <span id="action_btn">
                                        <button type="" onclick="INSERT_VITAL_SIGNS();" class="btn btn-primary">Save</button>&nbsp;
                                        </span>
                                          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
 <!--end::Modal-->

 <!--begin::Modal-->
 <div class="modal fade" id="referral_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" dir="ltr">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Referral Form</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="la la-remove"></span>
                                </button>
                            </div>
                            <form class="kt-form kt-form--fit kt-form--label-right" id="kt_form_referral" action="javascript:;">
                                <div class="modal-body">
                                 <div class="kt-scroll-modal" data-scroll="true" style="height:400px">
                                                <div class="form-group row kt-widget16">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Disposition</label>

                                        <div class="col-lg-9 col-xl-9">
                                            <select class="form-control kt-select2-ltr" id="P_DISCHARGE_DISPOSITION_ID" name="P_DISCHARGE_DISPOSITION_ID">
                                                <option value></option>
                                                <?php
                                                foreach ($GET_C_RTC_DISPOSITION as $RTC_DISPOSITION) {
                                                ?>
                                                <option value="<?= $RTC_DISPOSITION['C_RTC_DISPOSITION_ID'] ?>" <?php if($RTC_DISPOSITION['C_RTC_DISPOSITION_ID']==1 || $RTC_DISPOSITION['C_RTC_DISPOSITION_ID']==2 || $RTC_DISPOSITION['C_RTC_DISPOSITION_ID']==3) echo 'disabled'?> ><?= $RTC_DISPOSITION['DISPOSITION_DESC'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                 <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Facility Type:</label>
                                        <div class="col-lg-4 col-xl-4">
                                            <select class="form-control kt-select2-ltr" id="P_REFERRED_TO_FACILITY_TYPE_ID" name="P_REFERRED_TO_FACILITY_TYPE_ID">
                                                <option value></option>          
                                                <?php
                                                foreach ($GET_C_RTC_HEALTH_FACILITY_TYPE_PR as $HEALTH_FACILITY_TYPE) {
                                                ?>
                                                <option value="<?= $HEALTH_FACILITY_TYPE['C_RTC_HEALTH_FACILITY_TYPE_ID'] ?>"><?= $HEALTH_FACILITY_TYPE['HEALTH_FACILITY_TYPE_DESC'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <label class="col-xl-1 col-lg-1 col-form-label">Referred to:</label>

                                        <div class="col-lg-4 col-xl-4">
                                            <select class="form-control kt-select2-ltr" id="P_REFERRED_TO_FACILITY_ID" name="P_REFERRED_TO_FACILITY_ID">
                                                <option value></option>
                                                <?php
                                                foreach ($GET_C_HOSPITAL_PR as $C_HOSPITAL) {
                                                ?>
                                                <option value="<?= $C_HOSPITAL['H_CODE'] ?>"><?= $C_HOSPITAL['H_NAME_AR'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Chief Complaint</label>
                                        <div class="col-lg-9 col-xl-9">
                                                <textarea class="form-control P_CHIEF_COMPLAINT" rows="3" name="P_CHIEF_COMPLAINT" id="P_CHIEF_COMPLAINT" disabled></textarea>
                                            </div>
                                        </div>
                                   <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Physical Examination</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <textarea class="form-control P_ON_EXAMINATION" rows="3" name="P_ON_EXAMINATION" id="P_ON_EXAMINATION" disabled></textarea>
                                        </div>
                                    </div>

                                      <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Vital Signs</label>
                                        <div class="col-lg-9 col-xl-9">
                                     <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                             <th>#</th>
                                                <th>Temp</th>
                                                <th>BP</th>
                                                <th>PR</th>
                                                <th>RR</th>
                                                <th>Sa O2</th>
                                                <th>GCS</th>
                                                <th>Arr / Dis</th>
                                                <th>Date</th>
                                                <th>Created By</th>
                                                <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="vital_signs_list_today" id="vital_signs_list_today">
                                        </tbody>
                                    </table>
                                </div>
                                        </div>
                                    </div>

<!--                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Syspected Covid</label>
                                        <div class="col-lg-4 col-xl-4">
                                            <select class="form-control kt-select2-ltr" id="" name="">
                                                <option value="1">Yes</option>
                                                <option value="2" selected>No</option>
                                            </select>
                                        </div>
                                    </div>//-->
                                     <div class="form-group row kt-widget16">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Management Plan</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="kt-widget16__items" style="margin:0;">
                                                <div class="kt-widget16__item">
                                                <span class="kt-widget16__amount">
                                    Management
                                </span>
                                                    <span class="kt-widget16__amount">
                                    Status
                                </span>
                                                    <span class="kt-widget16__amount">
                                    Done By
                                </span>
                                                </div>
                                                <div id="visit_management_done_table">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Reason for Referral</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <textarea class="form-control" rows="3" name="P_REFERRAL_REASON" id="P_REFERRAL_REASON"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="col-xl-3 col-lg-3 col-form-label">TOD</label>
                                        <div class="col-lg-4 col-xl-4">
                                           <input type="text" class="form-control kt-input kt_datetimepicker P_DISCHARGE_DATE_TIME" name="P_DISCHARGE_DATE_TIME" id="P_DISCHARGE_DATE_TIME" placeholder="TOD" value="" data-col-index="5"/>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                <div class="modal-footer">
                                    <div class="row pull-left">
                                        <div class="col-lg-12 col-xl-12">
                                        <span id="action_btn">
                                        <button type="" onclick="VISIT_DISCHARGE();" class="btn btn-primary">Save</button>&nbsp;
                                        </span>
                                          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
 <!--end::Modal-->

 <!--begin::Modal-->
 <div class="modal fade" id="end_session_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" dir="ltr">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">End Session Form</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="la la-remove"></span>
                                </button>
                            </div>
                            <form class="kt-form kt-form--fit kt-form--label-right" id="kt_form_end_session" action="javascript:;">
                                <div class="modal-body">
                                 <div class="kt-scroll-modal" data-scroll="true">
                                                <div class="form-group row kt-widget16">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Discharge Disposition</label>

                                        <div class="col-lg-9 col-xl-9">
                                            <select class="form-control kt-select2-ltr" id="P_DISCHARGE_DISPOSITION_ID_END" name="P_DISCHARGE_DISPOSITION_ID">
                                                <option value></option>
                                                <?php
                                                foreach ($GET_C_RTC_DISPOSITION as $RTC_DISPOSITION) {
                                                ?>
                                                <option value="<?= $RTC_DISPOSITION['C_RTC_DISPOSITION_ID'] ?>"><?= $RTC_DISPOSITION['DISPOSITION_DESC'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                <div class="modal-footer">
                                    <div class="row pull-left">
                                        <div class="col-lg-12 col-xl-12">
                                        <span id="action_btn">
                                        <button type="" onclick="UPDATE_VISIT_STATUS(3);" class="btn btn-danger"> End Session <i class="la la-power-off"></i></button>&nbsp;
                                        </span>
                                          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
 <!--end::Modal-->

 <!--begin::Modal-->
 <div class="modal fade" id="referral_report_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" dir="ltr">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Referral Report</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="la la-remove"></span>
                                </button>
                            </div>
                            <form class="kt-form kt-form--fit kt-form--label-right" action="javascript:;">
                                <div class="modal-body">
                                 <div class="kt-scroll-modal" data-scroll="true" style="height:400px">
                                <div class="kt-section__body" id="referral_report">
                                    <style>
                                    .table th, .table td{
                                        padding:0.75rem;
                                        }
                                    </style>
    <table  width="100%" dir="rtl" class="report_header" style="display:block; border-bottom: 4px solid;margin-bottom: 30px;padding-bottom:15px;">
    <tr>
        <th width="40%" style="text-align:right;"><p>السلطة الفلسطينية</p>
            <p>وزارة الصحة الفلسطينية </p>
            <p>مركز الفرز التنفسي </p>
             <p>نموذج تحويل مريض </p>
        </th>
        <th width="20%" style="text-align:center;">
            <img src="<?php echo base_url();?>assets/img/logoTH_report.png">
        </th>
        <th width="40%" style="text-align:left;"><p>Palestine Authority</p>
            <p>Ministry OF Health</p>
            <p>Respiratory Triage Center</p>
            <p>Referral Form</p>
        </th>
    </tr>
</table>
<table  width="100%" dir="ltr" class="table table-bordered" border="1" style="margin:0;border: 1px solid #000;border-collapse: collapse;text-align:left;width:100% !important;direction: ltr;clear: both;padding:5px">
<tbody>
<tr>
<th>Name</th>
<td colspan="7"><?= $GET_PERSON_INFO[0]['FIRST_NAME']; ?> <?= $GET_PERSON_INFO[0]['SECOND_NAME']; ?> <?= $GET_PERSON_INFO[0]['THIRD_NAME']; ?> <?= $GET_PERSON_INFO[0]['LAST_NAME']; ?></td>
</tr>
<tr>
<th>ID</th>
<td colspan="7"><?php echo $GET_PERSON_INFO[0]['DOCUMENT_ID']; ?></td>
</tr>
<tr>
<th>Age</th>
<td><?php
                            $originalDate = $GET_PERSON_INFO[0]['DOB'] ;
//                             $birthDate = date("d/m/Y", strtotime($originalDate));
                            $birthDate = explode("/", $originalDate);
                            //get age from date or birthdate
                            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                                    ? ((date("Y") - $birthDate[2]) - 1)
                                    : (date("Y") - $birthDate[2]));
                            echo $age ?> سنة</td>
<th>Gender</th>
<td><?php echo $GET_PERSON_INFO[0]['SEX']; ?></td>
<th>TOA</th>
<td class="toa_report">&nbsp;</td>
<th>Date</th>
<td class="date_report"></td>
</tr>
<tr>
<th>Name of RTC</th>
<td colspan="7"><?php echo $_SESSION['RTC_CENTER_NAME_AR']?></td>
</tr>
<tr>
<th>Referred to:</th>
<td colspan="7" class="referred_to_report">&nbsp;</td>

</tr>
<tr>
<th>Chief Complaint</th>
<td colspan="7" class="REPORT_CHIEF_COMPLAINT"></td>
</tr>
<tr>
<th rowspan="2">Vitals</th>
<th>On arrival</th>
<td>Temp: <strong id="REPORT_REFERRAL_ARR_TEMP"></strong></td>
<td>BP: <strong id="REPORT_REFERRAL_ARR_BP_SYSTOLIC"></strong>/<strong id="REPORT_ARR_REFERRAL_BP_DIASTOLIC"></strong></td>
<td>PR: <strong id="REPORT_REFERRAL_ARR_PR"></strong></td>
<td>RR: <strong id="REPORT_REFERRAL_ARR_RR"></strong></td>
<td>SaO2: <strong id="REPORT_REFERRAL_ARR_SAO2"></strong></td>
<td>GCS: <strong id="REPORT_REFERRAL_ARR_GCS"></strong></td>
</tr>
<tr>
<th>At discharge</th>
<td>Temp: <strong id="REPORT_REFERRAL_DIS_TEMP"></strong></td>
<td>BP: <strong id="REPORT_REFERRAL_DIS_BP_SYSTOLIC"></strong>/<strong id="REPORT_DIS_REFERRAL_BP_DIASTOLIC"></strong></td>
<td>PR: <strong id="REPORT_REFERRAL_DIS_PR"></strong></td>
<td>RR: <strong id="REPORT_REFERRAL_DIS_RR"></strong></td>
<td>SaO2: <strong id="REPORT_REFERRAL_DIS_SAO2"></strong></td>
<td>GCS: <strong id="REPORT_REFERRAL_DIS_GCS"></strong></td>
</tr>
<tr>
<th>On&nbsp;Examination</th>
<td colspan="7" class="REPORT_EXAMINATION">&nbsp;</td>
</tr>
<tr>
<th>Suspected Covid</th>
<td colspan="7" class="suspected_covid_report"></td>
</tr>
<tr>
<th>Provisional Diagnosis</th>
<td colspan="7" class="visit_diagnosis_report">&nbsp;</td>
</tr>
<tr>
<th>Management Givin</th>
<td colspan="7" class="visit_management_done_report">&nbsp;</td>
</tr>
<tr>
<th>Reason for referral</th>
<td colspan="7" class="reason_referral_report">&nbsp;</td>
</tr>
<tr>
<th>TOD</th>
<td colspan="3" class="tod_report">&nbsp;</td>
<th>Doctor signature</th>
<td colspan="3" class="DOCTOR_NAME">&nbsp;</td>
</tr>
</tbody>
</table>
                                </div>

                                </div>
                                    </div>
                                <div class="modal-footer">
                                    <div class="row pull-left">
                                        <div class="col-lg-12 col-xl-12">
                                        <span id="action_btn">
                                        <button type="" onclick="PRINT_REPORT_REFERRAL();" class="btn btn-primary">Print</button>&nbsp;
                                        </span>
                                          <button type="" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
 <!--end::Modal-->

 <!--begin::Modal-->
 <div class="modal fade" id="patient_card_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" dir="ltr">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Patient Card</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="la la-remove"></span>
                                </button>
                            </div>
                            <form class="kt-form kt-form--fit kt-form--label-right" action="javascript:;">
                                <div class="modal-body">
                                 <div class="kt-scroll-modal" data-scroll="true" style="height:400px">
 <div class="kt-section__body" id="patient_card_report">
                                    <style>
                                    .table th, .table td{
                                        padding:0.75rem;
                                        }
                                    </style>
    <table  width="100%" dir="rtl" class="report_header" style="display:block; border-bottom: 4px solid;margin-bottom: 30px;padding-bottom:15px;">
    <tr>
        <th width="40%" style="text-align:right;"><p>السلطة الفلسطينية</p>
            <p>وزارة الصحة الفلسطينية </p>
            <p>مركز الفرز التنفسي </p>
             <p>بطاقة مريض </p>
        </th>
        <th width="20%" style="text-align:center;">
            <img src="<?php echo base_url();?>assets/img/logoTH_report.png">
        </th>
        <th width="40%" style="text-align:left;"><p>Palestine Authority</p>
            <p>Ministry OF Health</p>
            <p>Respiratory Triage Center</p>
            <p>Patient Card</p>
        </th>
    </tr>
</table>
<table  width="100%" dir="ltr" class="table table-bordered" border="1" style="margin:0;border: 1px solid #000;border-collapse: collapse;text-align:left;width:100% !important;direction: ltr;clear: both;padding:5px">
<tbody>
<tr>
<th>Name</th>
<td colspan="7"><?= $GET_PERSON_INFO[0]['FIRST_NAME']; ?> <?= $GET_PERSON_INFO[0]['SECOND_NAME']; ?> <?= $GET_PERSON_INFO[0]['THIRD_NAME']; ?> <?= $GET_PERSON_INFO[0]['LAST_NAME']; ?></td>
</tr>
<tr>
<th>ID</th>
<td colspan="7"><?php echo $GET_PERSON_INFO[0]['DOCUMENT_ID']; ?></td>
</tr>
<tr>
<th>Age</th>
<td><?php
                            $originalDate = $GET_PERSON_INFO[0]['DOB'] ;
//                             $birthDate = date("d/m/Y", strtotime($originalDate));
                            $birthDate = explode("/", $originalDate);
                            //get age from date or birthdate
                            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                                    ? ((date("Y") - $birthDate[2]) - 1)
                                    : (date("Y") - $birthDate[2]));
                            echo $age ?> سنة</td>
<th>Gender</th>
<td><?php echo $GET_PERSON_INFO[0]['SEX']; ?></td>
<th>TOA</th>
<td class="toa_report">&nbsp;</td>
<th>Date</th>
<td class="date_report"></td>
</tr>
<!--<tr>
<th>Name of RTC</th>
<td colspan="7">&nbsp;</td>
</tr>
<tr>
<th>Referred to:</th>
<td colspan="7">&nbsp;</td>

</tr>//-->
<tr>
<th>Chief Complaint</th>
<td colspan="7" class="REPORT_CHIEF_COMPLAINT"></td>
</tr>
<tr>
<th>Vitals</th>
<td>Temp: <strong id="REPORT_CARD_TEMP"></strong></td>
<td colspan="2">BP: <strong id="REPORT_CARD_BP_SYSTOLIC"></strong>/<strong id="REPORT_CARD_BP_DIASTOLIC"></strong></td>
<td>PR: <strong id="REPORT_CARD_PR"></strong></td>
<td>RR: <strong id="REPORT_CARD_RR"></strong></td>
<td>SaO2: <strong id="REPORT_CARD_SAO2"></strong></td>
<td>GCS: <strong id="REPORT_CARD_GCS"></strong></td>
</tr>
<tr>
<th>On&nbsp;Examination</th>
<td colspan="7" class="REPORT_EXAMINATION">&nbsp;</td>
</tr>
<tr>
<th>Diagnosis</th>
<td colspan="7" class="visit_diagnosis_report">&nbsp;</td>
</tr>
<tr>
<th>Suspected Covid</th>
<td colspan="3" class="suspected_covid_report"></td>
<th>Severity</th>
<td colspan="3" class="severity_report"></td>
</tr>
<tr>
<th>Management Plan</th>
<td colspan="7" class="visit_management_report">&nbsp;</td>
</tr>
<tr>
<th>Disposition</th>
<td colspan="7" class="visit_disposition_report">&nbsp;</td>
</tr>
<tr>
<th>TOD</th>
<td colspan="3" class="tod_report">&nbsp;</td>
<th>Doctor signature</th>
<td colspan="3" class="DOCTOR_NAME">&nbsp;</td>
</tr>
</tbody>
</table>
                                </div>
                                </div>
                                    </div>
                                <div class="modal-footer">
                                    <div class="row pull-left">
                                        <div class="col-lg-12 col-xl-12">
                                        <span id="action_btn">
                                        <button type="" onclick="PRINT_REPORT_PATIENT_CARD();" class="btn btn-primary">Print</button>&nbsp;
                                        </span>
                                          <button type="" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
 <!--end::Modal-->

<script src="<?php echo base_url("assets/custom_js/vital_signs.js");?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/custom_js/doctor_corona.js");?>" type="text/javascript"></script>
