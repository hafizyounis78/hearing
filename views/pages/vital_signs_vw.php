<link href="<?php echo base_url("assets/panel/assets/css/pages/wizard/wizard-1.rtl.css");?>" rel="stylesheet" type="text/css" />
<style>
.kt-app .kt-app__aside{
    width:360px;
}
    .kt-portlet__body.kt-portlet__body--fit-y .kt-widget{
        margin-top:30px;
    }
</style>

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

								<!-- end:: Content Head -->
                                        <!--begin::Portlet-->
                   <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
    <!--Begin:: App Aside Mobile Toggle-->
    <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
        <i class="la la-close"></i>
    </button>
    <!--End:: App Aside Mobile Toggle-->

    <!--Begin:: App Aside-->
    <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
        <!--begin:: Widgets/Applications/User/Profile1-->
<div class="kt-portlet kt-portlet--height-fluid-">
    <div class="kt-portlet__body kt-portlet__body--fit-y">
        <!--begin::Widget -->
        <div class="kt-widget kt-widget--user-profile-1">
            <?php
            $this->load->view('include/profile_aside');
            ?>
            <div class="kt-widget__footer">
                <a href="<?php echo base_url('index.php/patientlist_cont/patientlist_vw'); ?>" class="btn btn-label-danger btn-lg btn-upper" style="width: 100%">عودة لقائمة المرضى</a>
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
                <div class="kt-portlet" id="VITAL_SIGNS_PORTLAT">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">VITAL SIGNS</h3>
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
                    <form class="kt-form kt-form--label-right kt-form-vital" action="javascript:;">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <!--<div class="row">-->
                                        <!--<label class="col-xl-3"></label>-->
                                        <!--<div class="col-lg-9 col-xl-6">-->
                                            <!--<h3 class="kt-section__title kt-section__title-sm">Account:</h3>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Temperature</label>
                                        <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" value="" id="P_TEMP" name="P_TEMP">
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Systolic Blood Pressure</label>
                                        <div class="col-lg-9 col-xl-6">
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
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="number" value="" id="P_PR" name="P_PR">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Respiratory Rate</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="number" value="" id="P_RR" name="P_RR">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">OS2 Saturation %</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="number" value="" id="P_SAO2" name="P_SAO2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Glasgow Coma Scale</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="number" value="" id="P_GCS" name="P_GCS">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">On Arrival / Discharge</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <select class="form-control" id="P_ON_ARRIVAL_OR_DISCHARGE" name="P_ON_ARRIVAL_OR_DISCHARGE">
                                                <option value>Select ...</option>
                                                <option value="1">ARRIVAL</option>
                                                <option value="2">DISCHARGE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 col-xl-9">
                                        <span id="action_btn">
                                        <button type="" onclick="INSERT_VITAL_SIGNS();" class="btn btn-primary">Save</button>&nbsp;
                                        </span>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                     <div class="col-lg-3 col-xl-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">VITAL SIGNS HISTORY</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-label-brand btn-sm btn-icon btn-icon-md">
                                        <i class="la la-history"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="kt-form kt-form--label-right">
                        <div class="kt-portlet__body">
                            <div class="kt-section--first">
                                <div class="kt-section__body">
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
                      <!--  <div class="kt-portlet__foot">
                            <div class="kt-form__actions">

                            </div>
                        </div>//-->
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
<script src="<?php echo base_url("assets/custom_js/vital_signs.js");?>" type="text/javascript"></script>