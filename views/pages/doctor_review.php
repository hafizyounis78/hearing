<link href="<?php echo base_url("assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"); ?>"
      rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url("assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css"); ?>"
      rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url("assets/vendors/custom/vendors/flaticon/flaticon.css"); ?>" rel="stylesheet"
      type="text/css"/>
<link href="<?php echo base_url("assets/vendors/custom/vendors/flaticon2/flaticon.css"); ?>" rel="stylesheet"
      type="text/css"/>
<style>
    .select2-selection {
        text-align: left;
    }

    .select2-results {
        text-align: left;
    }

    .kt-scroll-modal {
        overflow-y: scroll;
        overflow-x: hidden;
        padding-right: 1.25rem;
    }

    .kt-scroll-modal::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #e2e5ec;
        border-radius: 10px;
    }

    .kt-scroll-modal::-webkit-scrollbar {
        width: 3px;
        background-color: #e2e5ec;
    }

    .kt-scroll-modal::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: #5867dd;
    }

    #referral_report .table-bordered th, #referral_report .table-bordered td {
        /*         border-color:#646c9a; */
    }

    #referral_report .table-bordered th {
        font-weight: 500;
    }

    .modal-header .close {
        margin: -1rem -1rem -1rem auto;
    }

</style>
<!--visit id//-->
<input type="hidden" id="PERSON_ID" name="PERSON_ID" value="<?php echo $one_patient['PERSON_ID']; ?>">
<input type="hidden" id="VISIT_ID" name="VISIT_ID" value="<?php echo $one_patient['VISIT_ID']; ?>">
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
                <!--<div class="alert alert-warning fade show" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning"></i></div>
                    <div class="alert-text">الرجاء التأكد من إدخال كافة المعلومات الخاصة بالمريض قبل إنهاء الجلسة</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="la la-close"></i></span>
                        </button>
                    </div>
                </div>-->
                <!-- end:: Content Head -->
                <!--begin::Portlet-->
                <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app" data-sticky-container>
                    <!--Begin:: App Aside Mobile Toggle-->
                    <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                        <i class="la la-close"></i>
                    </button>
                    <!--End:: App Aside Mobile Toggle-->

                    <!--Begin:: App Aside-->
                    <div class="kt-grid__item kt-app__toggle kt-app__aside sticky" data-sticky="true"
                         data-margin-top="100px" data-sticky-for="1023" data-sticky-class="kt-sticky"
                         id="kt_user_profile_aside">
                        <!--begin:: Widgets/Applications/User/Profile1-->
                        <div class="kt-portlet kt-portlet--height-fluid-">
                            <div class="kt-portlet__body kt-portlet__body--fit-y">
                                <!--begin::Widget -->
                                <div class="kt-widget kt-widget--user-profile-1">
                                    <?php
                                    $this->load->view('include/profile_aside');
                                    ?>
                                    <div class="kt-widget__footer">
                                        <a href="<?php echo base_url('index.php/patient_cont/patient_list_vw'); ?>"
                                           class="btn btn-label-danger btn-lg btn-upper" style="width: 100%">عودة لقائمة
                                            المرضى</a>
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
                                                Screening Activities
                                            </h3>
                                        </div>
                                        <div class="kt-portlet__head-toolbar">
                                            <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab"
                                                       href="#kt_widget6_tab1_content" role="tab">
                                                        History
                                                    </a>
                                                </li>
                                                <!--<li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"
                                                       href="#kt_widget6_tab2_content" role="tab">
                                                        History
                                                    </a>
                                                </li>-->
                                            </ul>

                                            <a href="#" class="" data-toggle="modal" data-target="#screening_modal"
                                               aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1"
                                                     class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                                              fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                                              fill="#000000"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="kt_widget6_tab1_content"
                                                 aria-expanded="true">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Date</th>
                                                            <th>Side</th>
                                                            <th>Test Type</th>
                                                            <th>Result</th>
                                                            <th>Recommendation</th>
                                                            <th>Note</th>
                                                            <th>Clinic</th>
                                                            <th>Action</th>
                                                            <!-- <th>Created By</th>-->
                                                            <!--<th>Action</th>-->
                                                        </tr>
                                                        </thead>
                                                        <tbody id="tbscreening">
                                                        <?php echo $screening_table; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
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
                                                    <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                        <span aria-hidden="true"><i class="la la-close"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__body">
                                            <input type="hidden" id="hdn_PERSON_SERIAL_ID" name="hdn_PERSON_SERIAL_ID"
                                                   value="">
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label>تاريخ عائلي لضعف السمع الدائم
                                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                                    <select name="RISK_FAMILY_HEARING" id="RISK_FAMILY_HEARING"
                                                            class="col-8 form-control">
                                                        <option value="">Select..</option>
                                                        <?php
                                                        foreach ($yesNo_List as $row) {
                                                            $selected = '';
                                                            if ($one_risk['RISK_FAMILY_HEARING'] == $row['ID'])
                                                                $selected = 'selected';

                                                            echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS_EN'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>الدخول الى NICU اكثر من 5 ايام
                                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                                    <select name="RISK_NICU" id="RISK_NICU" class="col-8 form-control">
                                                        <option value="">Select..</option>
                                                        <?php
                                                        foreach ($yesNo_List as $row) {
                                                            $selected = '';
                                                            if ($one_risk['RISK_NICU'] == $row['ID'])
                                                                $selected = 'selected';

                                                            echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS_EN'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>تشوهات خلقية في الرأس او الوجه
                                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                                    <select name="RISK_CONGENITAL" id="RISK_CONGENITAL"
                                                            class="col-8 form-control">
                                                        <option value="">Select..</option>
                                                        <?php
                                                        foreach ($yesNo_List as $row) {
                                                            $selected = '';
                                                            if ($one_risk['RISK_CONGENITAL'] == $row['ID'])
                                                                $selected = 'selected';

                                                            echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS_EN'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label>يتطلب تغير دم
                                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                                    <select name="RISK_BLOOD_EXCHANGE" id="RISK_BLOOD_EXCHANGE"
                                                            class="col-8 form-control">
                                                        <option value="">Select..</option>
                                                        <?php
                                                        foreach ($yesNo_List as $row) {
                                                            $selected = '';
                                                            if ($one_risk['RISK_BLOOD_EXCHANGE'] == $row['ID'])
                                                                $selected = 'selected';

                                                            echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS_EN'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>فتره الحمل بالاسابيع
                                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                                    <input class="col-8 form-control" type="text"
                                                           value="<?php echo $one_risk['RISK_PREMATURITY']; ?>"
                                                           name="RISK_PREMATURITY" id="RISK_PREMATURITY"
                                                           placeholder="فتره الحمل بالأسابيع">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>نوع الولادة
                                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                                    <select name="RISK_DELIVERY_TYPE" id="RISK_DELIVERY_TYPE"
                                                            class="col-8 form-control">
                                                        <option value="">Select..</option>
                                                        <?php
                                                        foreach ($delivery_List as $row) {
                                                            $selected = '';
                                                            if ($one_risk['RISK_DELIVERY_TYPE'] == $row['ID'])
                                                                $selected = 'selected';

                                                            echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS_EN'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label>زواج اقارب
                                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                                    <select name="RISK_CONSANGUINTY" id="RISK_CONSANGUINTY"
                                                            class="col-8 form-control">
                                                        <option value="">Select..</option>
                                                        <?php
                                                        foreach ($yesNo_List as $row) {
                                                            $selected = '';
                                                            if ($one_risk['RISK_CONSANGUINTY'] == $row['ID'])
                                                                $selected = 'selected';

                                                            echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS_EN'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>مشكله في الحمل
                                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                                    <select name="RISK_PREGNANCY_DURING" id="RISK_PREGNANCY_DURING"
                                                            class="col-8 form-control">
                                                        <option value="">Select..</option>
                                                        <?php
                                                        foreach ($yesNo_List as $row) {
                                                            $selected = '';
                                                            if ($one_risk['RISK_PREGNANCY_DURING'] == $row['ID'])
                                                                $selected = 'selected';

                                                            echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS_EN'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>ملاحظات
                                                        <span class="kt-font-danger kt-font-bold"> * </span></label>
                                                    <input class="col-8 form-control" type="text"
                                                           value="<?php echo $one_risk['RISK_NOTE']; ?>"
                                                           name="RISK_NOTE" id="RISK_NOTE" placeholder="ملاحظات">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__foot">
                                            <div class="kt-form__actions">
                                                <div class="row">

                                                    <div class="col-lg-12 col-xl-12">
                                                        <button type="submit" class="btn btn-primary">Save
                                                        </button>&nbsp;
                                                        <button type="reset" class="btn btn-secondary"> Reset <i
                                                                    class="la la-recycle"></i></button>&nbsp;
                                                        <button type="button" class="btn btn-success"
                                                                data-toggle="modal" data-target="#referral_modal"
                                                                aria-haspopup="true" aria-expanded="false">Refer
                                                        </button>&nbsp;
                                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                                data-target="#patient_visit_modal" aria-haspopup="true"
                                                                onclick="view_patient_report();">
                                                            Visit Report<i class="la la-print"></i></button>&nbsp;
                                                        <!-- <button type="button" class="btn btn-info" data-toggle="modal"
                                                                 data-target="#referral_report_modal"
                                                                 aria-haspopup="true"> Print Referral Report <i
                                                                     class="la la-print"></i></button>-->
                                                        <button type="button" class="btn btn-danger pull-right"
                                                                onclick="end_session();">
                                                            End Session <i class="la la-power-off"></i></button>
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
                                    <!--end::Form-->
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

<div class="modal fade" id="screening_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true"
     dir="ltr">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="kt-portlet__head-title kt-font-danger kt-font-bold">
                    Screening Activities
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-remove"></span>
                </button>
            </div>
            <div class="modal-body">
                <!--Bbegin::Content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Portlet-->
                        <div class="kt-portlet" dir="ltr">
                            <form class="kt-form kt-form--label-right" id="screening_form" action="">
                                <div class="form-group form-group-last kt-hide">
                                    <div class="alert alert-danger" role="alert" id="kt_form_1_msg">
                                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                        <div class="alert-text">
                                            Oh snap! Change a few things up and try submitting again.
                                        </div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                <span aria-hidden="true"><i class="la la-close"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__body">
                                    <input type="hidden" id="hdn_PERSON_SERIAL_ID" name="hdn_PERSON_SERIAL_ID"
                                           value=" ">
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label class="col-xl-12 col-lg-3 col-form-label">Date:
                                                <span class="kt-font-danger kt-font-bold"> * </span></label>
                                            <input type="text" class="col-8 form-control" id="R_TEST_DATE"
                                                   name="R_TEST_DATE"
                                                   readonly placeholder="Select date"/>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="col-xl-12 col-lg-3 col-form-label">Side:
                                                <span class="kt-font-danger kt-font-bold"> * </span></label>
                                            <select name="R_TEST_SITE" id="R_TEST_SITE" class="col-8 form-control">
                                                <?php echo $side_List; ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="col-xl-12 col-lg-3 col-form-label">Test Type:
                                                <span class="kt-font-danger kt-font-bold"> * </span></label>
                                            <select name="R_TEST_TYPE" id="R_TEST_TYPE" class="col-8 form-control"
                                                    onchange="get_test_result_list();">
                                                <?php echo $test_type_List; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label class="col-xl-12 col-lg-3 col-form-label">Result:
                                                <span class="kt-font-danger kt-font-bold"> * </span></label>
                                            <select name="R_TEST_RESULT" id="R_TEST_RESULT"
                                                    class="col-8 form-control ">

                                            </select>
                                        </div>

                                        <!--<div class="col-lg-4" id="dvR_TEST_RECOM">
                                            <label class="col-xl-12 col-lg-3 col-form-label">Recommendation:
                                                <span class="kt-font-danger kt-font-bold"> * </span></label>
                                            <select name="R_TEST_RECOM[]" id="R_TEST_RECOM"
                                                    class="col-8 form-control kt-select2"
                                                    multiple="multiple">
                                                <?php /*echo $recom_list; */ ?>
                                            </select>
                                        </div>-->
                                        <div class="col-lg-4">
                                            <label class="col-xl-12 col-lg-3 col-form-label">Notes:
                                                <span class="kt-font-danger kt-font-bold"> * </span></label>
                                            <input type="text" class="col-8 form-control" name="R_TEST_NOTE"
                                                   id="R_TEST_NOTE"
                                                   placeholder="Notes" value="">
                                        </div>

                                    </div>

                                </div>
                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions">
                                        <div class="row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-8">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="clear_screening_form()">
                                                    Clear
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                        onclick="clear_screening_form();">
                                                    Close <i class="fa fa-reply"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end::Portlet-->
                    </div>
                </div>
                <!-- end:: Content -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="referral_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true"
     dir="ltr">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="kt-portlet__head-title kt-font-danger kt-font-bold">
                    Referral Request
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-remove"></span>
                </button>
            </div>
            <div class="modal-body">
                <!--Bbegin::Content-->
                <div class="row">
                    <div class="col-md-12">

                        <!--begin::Portlet-->

                        <div class="kt-portlet">


                            <!--begin::Form-->
                            <form class="kt-form kt-form--label-right" id="referral_form">
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
                                    <div class="form-group row">
                                        <!--<div class="col-lg-4">
                                            <label> </label>
                                            <input class="col-8 form-control" type="text"
                                                   value="<?php /*echo $_SESSION["my_activ_LOCATIONS"]['LOC_NAME']; */ ?>"
                                                   name="" id="" readonly>
                                        </div>-->
                                        <div class="col-lg-4">
                                            <label class="col-xl-12 col-lg-3 col-form-label">Refer to:
                                                <span class="kt-font-danger kt-font-bold"> * </span></label>
                                            <select name="RM_TRANSFORMATION_CD" id="RM_TRANSFORMATION_CD"
                                                    class="col-8 form-control">
                                                <?php echo $center_list; ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="col-xl-12 col-lg-3 col-form-label">Referral Date:
                                                <span class="kt-font-danger kt-font-bold"> * </span></label>
                                            <input type="text" class="col-8 form-control" id="RM_DATE"
                                                   name="RM_DATE"
                                                   readonly placeholder="Select date"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label class="col-xl-12 col-lg-3 col-form-label">Test:
                                                <span class="kt-font-danger kt-font-bold"> * </span></label>
                                            <select name="RM_REQUIRED_EXAMINATION" id="RM_REQUIRED_EXAMINATION"
                                                    class="col-8 form-control">
                                                <?php echo $exam_list; ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="col-xl-12 col-lg-3 col-form-label">Reason for refer
                                                <span class="kt-font-danger kt-font-bold"> * </span></label>
                                            <select name="RE_REASON_REFERRAL" id="RE_REASON_REFERRAL"
                                                    class="col-8 form-control">
                                                <?php echo $referral_reason_list; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions">
                                        <div class="row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-8">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="clear_referral_form()">
                                                    Clear
                                                </button>
                                                <button type="button" class="btn btn-secondary"
                                                        onclick="clear_referral_form()" data-dismiss="modal">
                                                    Close <i class="fa fa-reply"></i></button>
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
    </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" id="end_session_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true"
     dir="ltr">
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
                                <select class="form-control kt-select2-ltr" id="P_DISCHARGE_DISPOSITION_ID_END"
                                        name="P_DISCHARGE_DISPOSITION_ID">
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
                                        <button type="" onclick="UPDATE_VISIT_STATUS(3);" class="btn btn-danger"> End Session <i
                                                    class="la la-power-off"></i></button>&nbsp;
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
<div class="modal fade" id="patient_visit_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true"
     dir="ltr">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <form class="kt-form kt-form--fit kt-form--label-right" action="javascript:;">
                <div class="modal-body">
                    <div class="kt-scroll-modal" data-scroll="true" style="height:400px">
                        <div class="kt-section__body" id="patient_card_report">
                            <style>
                                .table th, .table td {
                                    padding: 0.75rem;
                                }
                            </style>
                            <table width="100%" dir="rtl" class="report_header">
                                <tr>
                                    <th width="40%" style="text-align:right;"><p> دولـــة فـلـسـطين</p>
                                        <p>وزارة الصـحة الفلـسطينية </p>
                                        <p>مركز <?php echo $_SESSION["my_activ_LOCATIONS"]['LOC_NAME']; ?> </p>
                                    </th>
                                    <th width="20%" style="text-align:center;">
                                        <img src="<?php echo base_url(); ?>assets/img/logoTH_report.png">
                                    </th>
                                    <th width="40%" style="text-align:left;"><p>Palestine Authority</p>
                                        <p>Ministry OF Health</p>
                                        <p> .............: Center</p>
                                    </th>
                                </tr>
                            </table>
                            <hr>
                            <h2 class="kt-portlet__head-title kt-font-danger kt-font-bold" align="center"> تقرير فحص
                                السمعيات </h2>
                            </br>
                            <table class="table table-bordered" width="100%" dir="ltr" style="text-align: left">
                                <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td colspan="7"><?php echo $one_patient['PATIENT_NAME']; ?></td>

                                    <th>ID</th>
                                    <td colspan="7"><?php echo $one_patient['DOCUMENT_ID']; ?></td>
                                </tr>
                                <tr>
                                    <th>Date of Birth</th>
                                    <td colspan="7"><?php echo $one_patient['DOB']; ?> </td>

                                    <th>Age</th>
                                    <td><?php
                                        $originalDate = $one_patient['DOB'];
                                        //                             $birthDate = date("d/m/Y", strtotime($originalDate));
                                        $birthDate = explode("/", $originalDate);
                                        //get age from date or birthdate
                                        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                                            ? ((date("Y") - $birthDate[2]) - 1)
                                            : (date("Y") - $birthDate[2]));
                                        echo $age ?> سنة
                                    </td>
                                    <th>Gender</th>
                                    <td><?php echo $one_patient['SEX_NAME']; ?></td>
                                </tr>
                                </tbody>
                            </table>
                            <h3 class="kt-heading kt-heading--md" align="left">Risk Factors</h3>

                            <table class="table table-bordered" width="100%" dir="ltr" style="text-align: left">
                                <tbody id="tb_risk_rep">
                                <!-- --><?php /*echo $one_risk_rep; */ ?>
                                </tbody>
                            </table>
                            <h3 class="kt-heading kt-heading--md" align="left">Screening Activity</h3>
                            <table class="table table-bordered" width="100%" dir="ltr" style="text-align: left">
                                <thead>
                                <tr>
                                    <th width="3%">#</th>
                                    <th width="7%" class="bold" style="text-align: center">Date</th>
                                    <th width="10%" class="bold" style="text-align: center">Side</th>
                                    <th width="10%" class="bold" style="text-align: center">Test Type</th>
                                    <th width="15%" class="bold" style="text-align: center">Result</th>
                                    <th width="10%" class="bold" style="text-align: center">Note</th>
                                </tr>

                                </thead>
                                <tbody id="tbreport_screening">
                                <!-- --><?php /*echo $screening_table; */ ?>
                                </tbody>
                            </table>
                            <h3 class="kt-heading kt-heading--bold" align="center">Referral Section</h3>
                            <hr>
                            <h6 class="kt-heading kt-heading--md" align="left">Referral Request</h6>
                            <table class="table table-bordered" width="100%" dir="ltr" style="text-align: left">
                                <thead>
                                <tr>
                                    <th width="3%">#</th>
                                    <th width="7%" class="bold" style="text-align: center">Date</th>
                                    <th width="10%" class="bold" style="text-align: center">Refer from</th>
                                    <th width="10%" class="bold" style="text-align: center">Refer to</th>
                                    <th width="10%" class="bold" style="text-align: center">Test</th>
                                    <th width="10%" class="bold" style="text-align: center">Reason for refer</th>
                                </tr>
                                </thead>
                                <tbody id="tbreport_referral">
                                </tbody>
                            </table>
                            <h6 class="kt-heading kt-heading--md" align="left">Hearing Test</h6>
                            <table class="table table-bordered" width="100%" dir="ltr" style="text-align: left">
                                <thead>
                                <tr>
                                    <th width="3%">#</th>
                                    <th width="7%" class="bold" style="text-align: center">Date</th>
                                    <th width="10%" class="bold" style="text-align: center">Side</th>
                                    <th width="10%" class="bold" style="text-align: center">Test Type</th>
                                    <th width="15%" class="bold" style="text-align: center">Result</th>
                                    <th width="25%" class="bold" style="text-align: center">Recommendation
                                    </th><!--ظهر فقط في حالة نو عالفحص APR -->
                                    <th width="10%" class="bold" style="text-align: center">Note</th>
                                    <!--<th width="10%" class="bold" style="text-align: center">User</th>-->
                                    <th width="10%">
                                        &nbsp;
                                    </th>
                                </tr>

                                </thead>
                                <tbody id="tbhearing_test">
                                </tbody>
                            </table>
                            <h6 class="kt-heading kt-heading--md" align="left">Hearing Aid</h6>
                            <table class="table table-bordered" width="100%" dir="ltr" style="text-align: left">
                                <thead>
                                <tr>
                                    <th width="3%">#</th>
                                    <th width="7%" class="bold" style="text-align: center">Date</th>
                                    <th width="10%" class="bold" style="text-align: center">Side</th>
                                    <th width="10%" class="bold" style="text-align: center">Hearing Model</th>
                                    <th width="15%" class="bold" style="text-align: center">Hearing S/N</th>
                                    <th width="10%" class="bold" style="text-align: center">Center</th>

                                </tr>
                                </thead>
                                <tbody id="tbhearing">
                                </tbody>
                            </table>
                            <hr>
                            </br>
                            </br>
                            <h6 class="kt-heading kt-heading--md" align="left">Dr. :<?php echo $_SESSION['my_USERNAME']; ?></h6>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row pull-left">
                        <div class="col-lg-12 col-xl-12">
                                        <span id="action_btn">
                                        <button type="" onclick="print_patient_report();"
                                                class="btn btn-primary">Print</button>&nbsp;
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
<script src="<?php echo base_url("assets/vendors/general/jquery-validation/dist/jquery.validate.js"); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url("assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url("assets/vendors/custom/vendors/bootstrap-datepicker.init.js"); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url("assets/custom_js/risk_factor.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/custom_js/screening.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/custom_js/referral.js"); ?>" type="text/javascript"></script>
<!--<script src="<?php /*echo base_url("assets/custom_js/vital_signs.js"); */ ?>" type="text/javascript"></script>
<script src="<?php /*echo base_url("assets/custom_js/doctor_corona.js"); */ ?>" type="text/javascript"></script>-->
<script>
    function end_session() {

        swal.fire({
            title: 'End patient session',
            text: "Do You Want to end patient session?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    // dataType: 'json',
                    url: baseURL + 'Appointment_cont/update_visit_status/',
                    data: {
                        VISIT_ID: $('#VISIT_ID').val(),
                        VISIT_STATUS: 84,
                    },
                    cache: false,
                    success: function (data) {
                        if (data == 1) {
                            NOTIFY2('تمت العملية بنجاح', "success");
                            var url = baseURL + 'patient_cont/patient_list_vw';
                            window.location.href = url;//+national_id;
                        } else
                            NOTIFY2('لم تتم العملية بنجاح', "danger");
                    }
                });
                // result.dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
            } else if (result.dismiss === 'cancel') {

            }
        });

    }

    function view_patient_report() {
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: baseURL + 'Doctor_cont/view_report/',
            data: {
                PERSON_ID: $('#PERSON_ID').val(),
            },
            cache: false,
            success: function (data) {

                $('#tb_risk_rep').html(data[0]['one_risk_rep']);
                $('#tbreport_screening').html(data[0]['screening_rep']);
                $('#tbreport_referral').html(data[0]['referral_rep']);
                $('#tbhearing_test').html(data[0]['hearing_test_rep']);
                $('#tbhearing').html(data[0]['hearing_rep']);
            }
        });
    }

    function print_patient_report() {
        var w = window.open('Print');
        w.document.write($('#patient_card_report').html());
        w.print();
        w.close();
        w.focus();
        // $(".report_print").printThis();
    }
</script>