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
                <a href="<?php echo base_url('index.php/patientlist_cont/patientlist_nurse_vw'); ?>" class="btn btn-label-danger btn-lg btn-upper" style="width: 100%">عودة لقائمة المرضى</a>
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
                            <h3 class="kt-portlet__head-title">NURSE</h3>
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
                    <form class="kt-form kt-form--label-right" action="javascript:;" >
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Chief Complaint</label>
                                        <div class="col-lg-9 col-xl-9">
                                                <textarea class="form-control P_CHIEF_COMPLAINT" disabled rows="3" name="P_CHIEF_COMPLAINT" id="P_CHIEF_COMPLAINT"></textarea>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label" >Physical Examination</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <textarea class="form-control P_ON_EXAMINATION" disabled rows="3" name="P_ON_EXAMINATION" id="P_ON_EXAMINATION"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row kt-widget16">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Diagnosis</label>
                                        <div class="col-lg-9 col-xl-9">
                                        <div class="kt-widget16__items" style="margin:0;">
                                            <div class="kt-widget16__item">
                                                <span class="kt-widget16__amount">
                                    Code
                                </span>
                                                <span class="kt-widget16__amount">
                                    Name
                                </span>

                                            </div>

                                             <div id="visit_diagnosis_table">

                                                </div>

                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row kt-widget16">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Management Plan</label>

                                        <div class="col-lg-9 col-xl-9">
                                            <div class="kt-widget16__items" style="margin:0;">
                                                <div class="kt-widget16__item">
                                                <span class="kt-widget16__amount">
                                    Management Plan
                                </span>
                              <span class="kt-widget16__amount">
                                   Order By
                                </span>
                                                    <span class="kt-widget16__amount">
                                   Status
                                </span>
                                                </div>
                                                <div id="visit_management_table">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row kt-widget16">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Disposition</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="kt-widget16__items" style="margin:0;">
                                                <div class="kt-widget16__item">
                                                <span class="kt-widget16__amount">
                                    Disposition
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
<!--                                        <label class="col-xl-1 col-lg-1 col-form-label">TOD</label>
                                        <div class="col-lg-4 col-xl-4">
                                           <input type="text" class="form-control kt-input kt_datetimepicker" name="TOD" id="TOD" placeholder="TOD" value="" data-col-index="5"/>
                                        </div>//-->
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
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

<script src="<?php echo base_url("assets/custom_js/nurse_corona.js");?>" type="text/javascript"></script>