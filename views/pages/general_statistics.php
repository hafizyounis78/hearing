<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!-- begin:: Content Head -->
        <div class="kt-subheader kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">عيـادة السمعيات</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <span class="kt-subheader__desc">احصائيات عامة</span>
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

                                <?php if ($_SESSION["my_activ_LOCATIONS"]['LOC_CD'] == 161 || $_SESSION["my_activ_LOCATIONS"]['LOC_CD'] == 52 || $_SESSION["my_activ_LOCATIONS"]['LOC_CD'] == 235) { ?>
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
                                            <select name="CENTER_ID" id="CENTER_ID"
                                                    class="form-control kt-select2">
                                                <option value="">Select..</option>

                                            </select>
                                        </div>
                                    </div>
                                <?php } else {
                                    ?>
                                    <input type="hidden" name="CENTER_ID" id="CENTER_ID"
                                           value="<?php echo $_SESSION["my_activ_LOCATIONS"]['LOC_CD']; ?>">
                                <?php } ?>
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
                            </div>

                            <div class="kt-separator kt-separator--md kt-separator--dashed"></div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary btn-brand--icon"
                                            onclick="get_statistics();" id="search_btn">
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
            <!--Begin::Section-->
            <div class="kt-portlet">
                <div class="kt-portlet__body  kt-portlet__body--fit">
                    <div class="row row-no-padding row-col-separator-xl">
                        <!--begin:: Widgets/Daily Sales-->
                        <div class="col-xl-4">

                            <!--begin:: Widgets/Profit Share-->
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-widget14">
                                    <div class="kt-widget14__header">
                                        <h3 class="kt-widget14__title">
                                            Screen Activity
                                        </h3>
                                        <span class="kt-widget14__desc">
															Total Children screened
														</span>
                                    </div>
                                    <div class="kt-widget14__content">
                                        <div class="kt-widget14__chart">
                                            <div class="kt-widget14__stat" id="total_children">0</div>
                                            <canvas id="kt_chart_profit_share"
                                                    style="height: 140px; width: 140px;"></canvas>
                                        </div>
                                        <div class="kt-widget14__legends">
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-info"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="no_children_screened">0</span> Total Children</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-success"></span>
                                                <span class="kt-widget14__stats"><span id="no_male">0</span> Male</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-danger"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="no_female">0</span> Female</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget11__action kt-align-right">
                                        <button onclick="viewScreenActivity_modalTable();" type="button"
                                                class="btn btn-label-success btn-sm btn-bold" data-toggle="modal"
                                                data-target="#screen_activity_modal">View Records
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--end:: Widgets/Profit Share-->
                        </div>
                        <div class="col-xl-4">

                            <!--begin:: Widgets/Profit Share-->
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-widget14">
                                    <div class="kt-widget14__header">
                                        <h3 class="kt-widget14__title">
                                            Screen Activity
                                        </h3>
                                        <span class="kt-widget14__desc">
															OAE Test
														</span>
                                    </div>
                                    <div class="kt-widget14__content">
                                        <div class="kt-widget14__chart">
                                            <div class="kt-widget14__stat" id="total_children_oae">0</div>
                                            <canvas id="kt_chart_profit_share2"
                                                    style="height: 140px; width: 140px;"></canvas>
                                        </div>
                                        <div class="kt-widget14__legends">
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-info"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="no_children_pass1">0</span> Total Children Pass 1st test</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-success"></span>
                                                <span class="kt-widget14__stats"><span id="no_children_pass2">0</span> Total Children Pass 2nd test</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-danger"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="no_children_not_pass">0</span> Total Children failed in 1st and 2nd test</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-warning"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="no_children_not_tested">0</span> Total Children not tested</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget11__action kt-align-right">
                                        <button onclick="viewFailChildTable();" type="button"
                                                class="btn btn-label-success btn-sm btn-bold" data-toggle="modal"
                                                data-target="#fail_children1st2nd_modal">View Records
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--end:: Widgets/Profit Share-->
                        </div>
                        <div class="col-xl-4">

                            <!--begin:: Widgets/Profit Share-->
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-widget14">
                                    <div class="kt-widget14__header">
                                        <h3 class="kt-widget14__title">
                                            Referral
                                        </h3>
                                        <span class="kt-widget14__desc">
                                            Total Children Referred
                                        </span>
                                    </div>
                                    <div class="kt-widget14__content">
                                        <div class="kt-widget14__chart">
                                            <div class="kt-widget14__stat" id="total_children_r">0</div>
                                            <canvas id="kt_chart_profit_share3"
                                                    style="height: 140px; width: 140px;"></canvas>
                                        </div>
                                        <div class="kt-widget14__legends">
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-info"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="total_children_1">0</span> Not Referred</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-danger"></span>
                                                <span class="kt-widget14__stats"><span id="total_referred_adt">0</span>  Referred ADT</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-warning"></span>
                                                <span class="kt-widget14__stats"><span id="total_referred_abr">0</span>  Referred ABR</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget11__action kt-align-right">
                                        <button onclick="viewReferralTable();" type="button"
                                                class="btn btn-label-success btn-sm btn-bold" data-toggle="modal"
                                                data-target="#referral_modal">View Records
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--end:: Widgets/Profit Share-->
                        </div>
                        <!--end:: Widgets/Daily Sales-->
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <!--Begin::Section-->
            <div class="kt-portlet">
                <div class="kt-portlet__body  kt-portlet__body--fit">
                    <div class="row row-no-padding row-col-separator-xl">
                        <div class="col-xl-4">
                            <!--begin:: Widgets/Profit Share-->
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-widget14">
                                    <div class="kt-widget14__header">
                                        <h3 class="kt-widget14__title">
                                            Hearing test
                                        </h3>
                                        <span class="kt-widget14__desc">
															ABR test.
														</span>
                                    </div>
                                    <div class="kt-widget14__content">
                                        <div class="kt-widget14__chart">
                                            <div class="kt-widget14__stat" id="total_children_abr">0</div>
                                            <canvas id="kt_chart_profit_share4"
                                                    style="height: 140px; width: 140px;"></canvas>
                                        </div>
                                        <div class="kt-widget14__legends">
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-brand"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="no_referred_not_tested">0</span> Total Referred Not tested</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-warning"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="no_abr_success_test">0</span> Total ABR sucess test</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-danger"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="no_abr_fail_test">0</span> Total Hearing Impairment</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget11__action kt-align-right">
                                        <button onclick="viewABRTestTable();" type="button"
                                                class="btn btn-label-success btn-sm btn-bold" data-toggle="modal"
                                                data-target="#abrTest_modal">View ABR Test Records
                                        </button>
                                        <button onclick="viewABRResultTable();" type="button"
                                                class="btn btn-label-info btn-sm btn-bold" data-toggle="modal"
                                                data-target="#abrResult_modal">View ABR Result Records
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--end:: Widgets/Profit Share-->
                        </div>
                        <div class="col-xl-4">

                            <!--begin:: Widgets/Profit Share-->
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-widget14">
                                    <div class="kt-widget14__header">
                                        <h3 class="kt-widget14__title">
                                            Referral
                                        </h3>
                                        <span class="kt-widget14__desc">
															Referred ADT
														</span>
                                    </div>
                                    <div class="kt-widget14__content">
                                        <div class="kt-widget14__chart">
                                            <div class="kt-widget14__stat" id="total_children_adt_tested">0</div>
                                            <canvas id="kt_chart_profit_share5"
                                                    style="height: 140px; width: 140px;"></canvas>
                                        </div>
                                        <div class="kt-widget14__legends">
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-danger"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="no_referred_not_test_ADT">0</span> Total Referred Not tested</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-info"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="total_children_adt_tested_count">0</span> Total Referred Children ADT tested</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget11__action kt-align-right">
                                        <button onclick="viewChildrenAdtTestedTable();" type="button"
                                                class="btn btn-label-success btn-sm btn-bold" data-toggle="modal"
                                                data-target="#children_adt_tested_modal">View Records
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--end:: Widgets/Profit Share-->
                        </div>
                        <div class="col-xl-4">

                            <!--begin:: Widgets/Profit Share-->
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-widget14">
                                    <div class="kt-widget14__header">
                                        <h3 class="kt-widget14__title">
                                            Referral
                                        </h3>
                                        <span class="kt-widget14__desc">
															Hearing Aid
														</span>
                                    </div>
                                    <div class="kt-widget14__content">
                                        <div class="kt-widget14__chart">
                                            <div class="kt-widget14__stat" id="total_children_hearing_aid">0</div>
                                            <canvas id="kt_chart_profit_share6"
                                                    style="height: 140px; width: 140px;"></canvas>
                                        </div>
                                        <div class="kt-widget14__legends">
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-info"></span>
                                                <span class="kt-widget14__stats"><span
                                                            id="total_children_hearing_aid_count">0</span> Total Referred Children Hearing Aid</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="kt-widget11__action kt-align-right">
                                        <button onclick="viewChildHearingAidTable();" type="button"
                                                class="btn btn-label-success btn-sm btn-bold" data-toggle="modal"
                                                data-target="#children_hearing_aid_modal">View Records
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--end:: Widgets/Profit Share-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::Section-->


    </div>
</div>
<!--begin::Modal-->
<div class="modal fade" id="screen_activity_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Children failed in 1st and 2nd test</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 </button>
             </div>-->
            <div class="modal-body">


                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                            <h3 class="kt-portlet__head-title">
                                Screen Activity
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button"
                                                class="btn btn-default btn-icon-sm dropdown-toggle screen-activity-excel"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <div class="table-responsive" id="dvscreenActivity_tb">
                            <table class="table table-striped- table-bordered table-hover responsive no-wrap"
                                   id="screenActivity_tb">
                                <thead>
                                <tr>
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

                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!--end: Datatable -->
                    </div>
                </div>
                <!--end::Portlet-->
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="fail_children1st2nd_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Children failed in 1st and 2nd test</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 </button>
             </div>-->
            <div class="modal-body">


                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                            <h3 class="kt-portlet__head-title">
                                Children failed in 1st and 2nd
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button"
                                                class="btn btn-default btn-icon-sm dropdown-toggle fail-child-excel"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <div class="table-responsive" id="dvfail_child_tb">
                            <table class="table table-striped- table-bordered table-hover responsive no-wrap"
                                   id="fail_child_tb">
                                <thead>
                                <tr>
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
                                    <th width="10%">RISK FACTORS</th>
                                    <th width="10%">1st OAE date</th>
                                    <th width="10%">2nd OAE date</th>

                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!--end: Datatable -->
                    </div>
                </div>
                <!--end::Portlet-->
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="referral_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Children failed in 1st and 2nd test</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 </button>
             </div>-->
            <div class="modal-body">


                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                            <h3 class="kt-portlet__head-title">
                                Referral Child
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button"
                                                class="btn btn-default btn-icon-sm dropdown-toggle referral-excel"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <div class="table-responsive" id="dvreferral_tb">
                            <table class="table table-striped- table-bordered table-hover responsive no-wrap"
                                   id="referral_tb">
                                <thead>
                                <tr>
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
                                    <th width="10%">سبب التحويل</th>
                                    <th width="5%"> العيادة المحول لها</th>

                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!--end: Datatable -->
                    </div>
                </div>
                <!--end::Portlet-->
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="abrTest_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Children failed in 1st and 2nd test</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 </button>
             </div>-->
            <div class="modal-body">


                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                            <h3 class="kt-portlet__head-title">
                                ABR Test Records
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button"
                                                class="btn btn-default btn-icon-sm dropdown-toggle abrTest-excel"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <div class="table-responsive" id="dvabrTest_tb">
                            <table class="table table-striped- table-bordered table-hover responsive no-wrap"
                                   id="abrTest_tb">
                                <thead>
                                <tr>
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
                                    <th width="10%">سبب التحويل</th>
                                    <th width="5%"> العيادة المحول لها</th>
                                    <th width="5%">ADT date</th>
                                    <th width="5%"> ABR date</th>

                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!--end: Datatable -->
                    </div>
                </div>
                <!--end::Portlet-->
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="abrResult_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Children failed in 1st and 2nd test</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 </button>
             </div>-->
            <div class="modal-body">


                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                            <h3 class="kt-portlet__head-title">
                                ABR Result Records
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button"
                                                class="btn btn-default btn-icon-sm dropdown-toggle abrResult-excel"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <div class="table-responsive" id="dvabrResult_tb">
                            <table class="table table-striped- table-bordered table-hover responsive no-wrap"
                                   id="abrResult_tb">
                                <thead>
                                <tr>
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
                                    <th width="5%"> العيادة المحول لها</th>
                                    <th width="5%">ADT date</th>
                                    <th width="5%">ABR date</th>
                                    <th width="5%">ABR Result</th>

                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!--end: Datatable -->
                    </div>
                </div>
                <!--end::Portlet-->
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="children_adt_tested_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Children failed in 1st and 2nd test</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 </button>
             </div>-->
            <div class="modal-body">


                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                            <h3 class="kt-portlet__head-title">
                                ADT Test Records
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button"
                                                class="btn btn-default btn-icon-sm dropdown-toggle adtTest-excel"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <div class="table-responsive" id="dvadtTest-excel_tb">
                            <table class="table table-striped- table-bordered table-hover responsive no-wrap"
                                   id="adtTest_tb">
                                <thead>
                                <tr>
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
                                    <th width="5%"> العيادة المحول لها</th>
                                    <th width="5%">ADT date</th>
                                    <!-- <th width="5%">ABR date</th>
                                     <th width="5%">ABR Result</th>-->

                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!--end: Datatable -->
                    </div>
                </div>
                <!--end::Portlet-->
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="children_hearing_aid_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Children failed in 1st and 2nd test</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 </button>
             </div>-->
            <div class="modal-body">


                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                            <h3 class="kt-portlet__head-title">
                                Hearing Aid Records
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button"
                                                class="btn btn-default btn-icon-sm dropdown-toggle aidRecord-excel"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <div class="table-responsive" id="dvaidRecord-excel_tb">
                            <table class="table table-striped- table-bordered table-hover responsive no-wrap"
                                   id="aidRecord_tb">
                                <thead>
                                <tr>
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
                                    <th width="5%"> العيادة المحول لها</th>
                                    <th width="5%">تاريخ التركيب</th>
                                    <!-- <th width="5%">ABR date</th>
                                     <th width="5%">ABR Result</th>-->

                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!--end: Datatable -->
                    </div>
                </div>
                <!--end::Portlet-->
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--end::Modal-->
<!-- end:: Content -->
<script>

    $(document).ready(function () {

        $('.kt-select2').select2({
            placeholder: "Select..",

        });
        get_clinics();
        /*$("#fail_children1st2nd_modal").on("hidden.bs.modal", function () {
            $('#fail_child_tb').DataTable().destroy();
        });
        $("#referral_modal").on("hidden.bs.modal", function () {
            $('#referral_tb').DataTable().destroy();
        });
        $("#abrTest_modal").on("hidden.bs.modal", function () {
            $('#abrTest_tb').DataTable().destroy();
        });
        $("#abrResult_modal").on("hidden.bs.modal", function () {
            $('#abrResult_tb').DataTable().destroy();
        });*/
    });


    function clear_form() {
        //   $('#CENTER_ID').val('');
        $('#from_date').datepicker("setDate", '1d');
        $('#to_date').datepicker("setDate", '1d');
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
                $('#CENTER_ID').html(data);
                $('#CENTER_ID').trigger('change');

            }
        });
    }

    function get_statistics() {
        $.ajax({
            url: baseURL + 'Statistic_cont/get_static_result',
            type: 'POST',
            dataType: 'json',
            data: {
                P_CLINIC_TYPE: $('#center_type').val(),
                P_CENTER_ID: $('#CENTER_ID').val(),
                P_FROM_DATE: $('#from_date').val(),
                P_TO_DATE: $('#to_date').val(),
            },
            success: function (data) {

                //  unblockUI('breast_factor_form');
                $('#no_children_screened').html(data.no_children_screened);
                $('#no_male').html(data.no_children_bysex['NO_MALE']);
                $('#no_female').html(data.no_children_bysex['NO_FEMALES']);
                $('#total_children').html(data.no_children_screened);

                profitShare([data.no_children_bysex['P_MALE'], data.no_children_bysex['P_MALE']]);

                // var total_children_oae = parseInt(data.no_children_pass_1screen['NO_PASS']) + parseInt(data.no_children_pass_2screen['NO_PASS']) + parseInt(data.no_children_failed_screen['NO_FAILED']);
                $('#total_children_oae').html(data.no_children_screened);
                $('#no_children_pass1').html(data.no_children_pass_1screen['NO_PASS']);
                $('#no_children_pass2').html(data.no_children_pass_2screen['NO_PASS']);
                $('#no_children_not_pass').html(data.no_children_failed_screen['NO_FAILED']);


                var total_children_p = (parseInt(data.no_children_screened) - (parseInt(data.no_children_pass_1screen['NO_PASS']) +
                    parseInt(data.no_children_pass_2screen['NO_PASS']) + parseInt(data.no_children_failed_screen['NO_FAILED']))) / parseInt(data.no_children_screened) * 100;
                //  alert(total_children_p);
                var total_children_no = parseInt(data.no_children_screened) - parseInt(data.no_children_pass_1screen['NO_PASS']) -
                    parseInt(data.no_children_pass_2screen['NO_PASS']) - parseInt(data.no_children_failed_screen['NO_FAILED']);
                $('#no_children_not_tested').html(total_children_no);
                profitShare2([data.no_children_pass_1screen['P_PASS'], data.no_children_pass_2screen['P_PASS'], data.no_children_failed_screen['P_FAILED'], total_children_p]);


                $('#total_children_r').html(data.no_children_screened);
                /*ADT*/
                $('#total_referred_adt').html(data.no_children_referred['NO_REF_ADT']);
                /*ABR*/
                $('#total_referred_abr').html(data.no_children_referred['NO_REF_ABR']);
                var total_referral_test = parseInt(data.no_children_referred['NO_REF_ADT']) + parseInt(data.no_children_referred['NO_REF_ABR']);

                var total_children_p = (parseInt(data.no_children_screened) - parseInt(data.no_children_referred['NO_REF_ADT']) - parseInt(data.no_children_referred['NO_REF_ABR'])) / parseInt(data.no_children_screened) * 100;
                var total_children_no = (parseInt(data.no_children_screened) - parseInt(data.no_children_referred['NO_REF_ADT']) - parseInt(data.no_children_referred['NO_REF_ABR']));
                $('#total_children_1').html(total_children_no);
                profitShare3([total_children_p, data.no_children_referred['P_REF_ADT'], data.no_children_referred['P_REF_ABR']]);

                // $('#total_children_abr').html(data.no_abr_test_done['NO_CH']);
                $('#total_children_abr').html(total_referral_test);
                var no_abr_success = parseInt(data.no_abr_test_done['NO_CH']) - parseInt(data.no_children_with_hearing['NO_FAILED'])

                $('#no_referred_not_tested').html(total_referral_test - parseInt(data.no_abr_test_done['NO_CH']));
                $('#no_abr_success_test').html(no_abr_success);
                $('#no_abr_fail_test').html(data.no_children_with_hearing['NO_FAILED']);

                var total_children_success_abr_p = no_abr_success / total_referral_test * 100;//
                var total_children_fail_abr_p = data.no_children_with_hearing['NO_FAILED'] / total_referral_test * 100;//
                var total_no_referred_not_tested_p = (total_referral_test - parseInt(data.no_abr_test_done['NO_CH'])) / total_referral_test * 100;

                profitShare4([total_no_referred_not_tested_p, total_children_success_abr_p, total_children_fail_abr_p]);
//***** ADT
                $('#total_children_adt_tested').html(total_referral_test);
                $('#no_referred_not_test_ADT').html(total_referral_test -  parseInt(data.no_abt_test_done));
                $('#total_children_adt_tested_count').html(data.no_abt_test_done);

                var total_children_adt_p = (parseInt(data.no_abt_test_done)) / total_referral_test * 100;
                var total_children_not_adt_p = (total_referral_test - parseInt(data.no_abt_test_done)) / total_referral_test * 100;

                profitShare5([total_children_adt_p, total_children_not_adt_p]);
//***** hearing AID
                $('#total_children_hearing_aid').html(data.no_children_hearing_aid);
                $('#total_children_hearing_aid_count').html(data.no_children_hearing_aid);
                var total_children_hearing_aid_p = (parseInt(data.no_children_hearing_aid)) / data.no_children_with_hearing['NO_FAILED'] * 100;
                var total_children_hearing_not_aid_p = (parseInt(data.no_children_with_hearing['NO_FAILED']) - parseInt(data.no_children_hearing_aid)) / data.no_children_with_hearing['NO_FAILED'] * 100;
                profitShare6([total_children_hearing_aid_p, total_children_hearing_not_aid_p]);
            }
        });
    }

    function viewScreenActivity_modalTable() {
        //  $('#risk_patient_tb').DataTable().destroy();

        $('#screenActivity_tb').DataTable().destroy();
        $.fn.dataTable.ext.errMode = 'none';
        $('#screenActivity_tb').on('error.dt', function (e, settings, techNote, message) {
            console.log('An error has been reported by DataTables: ', message);
        })
        var table = $('#screenActivity_tb');
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                "type": "post",
                "url": baseURL + 'Statistic_cont/getScreenActivityData',
                "data": {
                    'P_CLINIC_TYPE': $('#center_type').val(),
                    'P_CENTER_ID': $('#CENTER_ID').val(),
                    'from_date': $('#from_date').val(),
                    'to_date': $('#to_date').val(),
                }
            }
            ,
            dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
            bFilter: false,
            lengthMenu: [50, 100, 500, 1000],
            buttons: [
                {
                    'extend': 'excel',
                    'className': 'btn btn-success screen-activity-excel-export invisible',
                }

            ],
            /*

            <th>#</th>
            <th>رقم الملف</th>
            <th width="20%">الاسم</th>
            <th width="10%">رقم الوثيقة</th>
            <th width="10%">رقم الجوال</th>
            <th width="10%">مكان السكن</th>
            <th width="10%">تاريخ الميلاد</th>
            <th width="15%">العمر Y</th>
            <th width="15%">الجنس</th>
            <th width="10%"> العيادة</th>
            <th width="10%">Risk indicators</th>
            <th width="10%">1st OAE date</th>
            <th width="10%">2nd OAE date</th>
             */
            columns: [
                {data: 'no'},
                {data: 'PERSON_ID'},
                {data: 'PATIENT_NAME'},
                {data: 'DOCUMENT_ID'},
                {data: 'MOBILE_NUM'},
                {data: 'ADDRESS'},
                {data: 'DOB'},
                {data: 'AGE'},
                {data: 'SEX_NAME'},
                {data: 'CENTER_NAME_AR'},
            ],

        });

        $('.screen-activity-excel').click(function () {
            $('#dvscreenActivity_tb').find('.screen-activity-excel-export').click();
            return;
            //$('.buttons-excel').click();
        });

    }

    function viewFailChildTable() {
        //  $('#risk_patient_tb').DataTable().destroy();

        $('#fail_child_tb').DataTable().destroy();
        $.fn.dataTable.ext.errMode = 'none';
        $('#fail_child_tb').on('error.dt', function (e, settings, techNote, message) {
            console.log('An error has been reported by DataTables: ', message);
        })
        var table = $('#fail_child_tb');
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                "type": "post",
                "url": baseURL + 'Statistic_cont/getFailChildData',
                "data": {
                    'P_CLINIC_TYPE': $('#center_type').val(),
                    'P_CENTER_ID': $('#CENTER_ID').val(),
                    'from_date': $('#from_date').val(),
                    'to_date': $('#to_date').val(),
                }
            }
            ,
            dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
            bFilter: false,
            lengthMenu: [50, 100, 500, 1000],
            buttons: [
                {
                    'extend': 'excel',
                    'className': 'btn btn-success fail-child-excel-export invisible',
                }

            ],
            /*

            <th>#</th>
            <th>رقم الملف</th>
            <th width="20%">الاسم</th>
            <th width="10%">رقم الوثيقة</th>
            <th width="10%">رقم الجوال</th>
            <th width="10%">مكان السكن</th>
            <th width="10%">تاريخ الميلاد</th>
            <th width="15%">العمر Y</th>
            <th width="15%">الجنس</th>
            <th width="10%"> العيادة</th>
            <th width="10%">Risk indicators</th>
            <th width="10%">1st OAE date</th>
            <th width="10%">2nd OAE date</th>
             */
            columns: [
                {data: 'no'},
                {data: 'PERSON_ID'},
                {data: 'PATIENT_NAME'},
                {data: 'DOCUMENT_ID'},
                {data: 'MOBILE_NUM'},
                {data: 'ADDRESS'},
                {data: 'DOB'},
                {data: 'AGE'},
                {data: 'SEX_NAME'},
                {data: 'CENTER_NAME_AR'},
                {data: 'RISK_FACTORS'},
                {data: 'FIRST_DATE'},
                {data: 'SECOND_DATE'},
            ],

        });
        $('.fail-child-excel').click(function () {
            $('#dvfail_child_tb').find('.fail-child-excel-export').click();
            return;
            //$('.buttons-excel').click();
        });

        /*  $('.button-excel1').click(function () {
              $('#dvfail_child_tb').find('.buttons-excel').click();
              //$('.buttons-excel').click();
          });*/

    }

    function viewReferralTable() {
        //  $('#risk_patient_tb').DataTable().destroy();

        $('#referral_tb').DataTable().destroy();
        $.fn.dataTable.ext.errMode = 'none';
        $('#referral_tb').on('error.dt', function (e, settings, techNote, message) {
            console.log('An error has been reported by DataTables: ', message);
        })
        var table = $('#referral_tb');
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                "type": "post",
                "url": baseURL + 'Statistic_cont/getReferralData',
                "data": {
                    'P_CLINIC_TYPE': $('#center_type').val(),
                    'P_CENTER_ID': $('#CENTER_ID').val(),
                    'from_date': $('#from_date').val(),
                    'to_date': $('#to_date').val(),
                }
            }
            ,
            dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
            bFilter: false,
            lengthMenu: [50, 100, 500, 1000],
            buttons: [
                {
                    'extend': 'excel',
                    'className': 'btn btn-success referral-excel-export invisible',
                }

            ],
            /*

            <th>#</th>
            <th>رقم الملف</th>
            <th width="20%">الاسم</th>
            <th width="10%">رقم الوثيقة</th>
            <th width="10%">رقم الجوال</th>
            <th width="10%">مكان السكن</th>
            <th width="10%">تاريخ الميلاد</th>
            <th width="15%">العمر Y</th>
            <th width="15%">الجنس</th>
            <th width="10%"> العيادة</th>
            <th width="10%">Risk indicators</th>
            <th width="10%">1st OAE date</th>
            <th width="10%">2nd OAE date</th>
             */
            columns: [
                {data: 'no'},
                {data: 'PERSON_ID'},
                {data: 'PATIENT_NAME'},
                {data: 'DOCUMENT_ID'},
                {data: 'MOBILE_NUM'},
                {data: 'ADDRESS'},
                {data: 'DOB'},
                {data: 'AGE'},
                {data: 'SEX_NAME'},
                {data: 'CLINIC_FROM'},
                {data: 'REASON_REFERRAL'},
                {data: 'CLINIC_TRANS'},
            ],

        });

        $('.referral-excel').click(function () {
            $('#dvreferral_tb').find('.referral-excel-export').click();
            return;
            //$('.buttons-excel').click();
        });

    }

    function viewABRTestTable() {
        //  $('#risk_patient_tb').DataTable().destroy();

        $('#abrTest_tb').DataTable().destroy();
        $.fn.dataTable.ext.errMode = 'none';
        $('#abrTest_tb').on('error.dt', function (e, settings, techNote, message) {
            console.log('An error has been reported by DataTables: ', message);
        })
        var table = $('#abrTest_tb');
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                "type": "post",
                "url": baseURL + 'Statistic_cont/getABRTestData',
                "data": {
                    'P_CLINIC_TYPE': $('#center_type').val(),
                    'P_CENTER_ID': $('#CENTER_ID').val(),
                    'from_date': $('#from_date').val(),
                    'to_date': $('#to_date').val(),
                }
            }
            ,
            dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
            bFilter: false,
            lengthMenu: [50, 100, 500, 1000],
            buttons: [
                {
                    'extend': 'excel',
                    'className': 'btn btn-success abrTest-excel-export invisible',
                }

            ],
            /*

            <th>#</th>
            <th>رقم الملف</th>
            <th width="20%">الاسم</th>
            <th width="10%">رقم الوثيقة</th>
            <th width="10%">رقم الجوال</th>
            <th width="10%">مكان السكن</th>
            <th width="10%">تاريخ الميلاد</th>
            <th width="15%">العمر Y</th>
            <th width="15%">الجنس</th>
            <th width="10%"> العيادة</th>
            <th width="10%">Risk indicators</th>
            <th width="10%">1st OAE date</th>
            <th width="10%">2nd OAE date</th>
             */
            columns: [
                {data: 'no'},
                {data: 'PERSON_ID'},
                {data: 'PATIENT_NAME'},
                {data: 'DOCUMENT_ID'},
                {data: 'MOBILE_NUM'},
                {data: 'ADDRESS'},
                {data: 'DOB'},
                {data: 'AGE'},
                {data: 'SEX_NAME'},
                {data: 'CLINIC_FROM'},
                {data: 'REASON_REFERRAL'},
                {data: 'CLINIC_TRANS'},
                {data: 'ِADT_DATE'},
                {data: 'ABR_DATE'},
            ],

        });

        $('.abrTest-excel').click(function () {
            $('#dvabrTest_tb').find('.abrTest-excel-export ').click();
            return;
            //$('.buttons-excel').click();
        });

    }

    function viewABRResultTable() {
        //  $('#risk_patient_tb').DataTable().destroy();

        $('#abrResult_tb').DataTable().destroy();
        $.fn.dataTable.ext.errMode = 'none';
        $('#abrResult_tb').on('error.dt', function (e, settings, techNote, message) {
            console.log('An error has been reported by DataTables: ', message);
        })
        var table = $('#abrResult_tb');
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                "type": "post",
                "url": baseURL + 'Statistic_cont/getABRResultData',
                "data": {
                    'P_CLINIC_TYPE': $('#center_type').val(),
                    'P_CENTER_ID': $('#CENTER_ID').val(),
                    'from_date': $('#from_date').val(),
                    'to_date': $('#to_date').val(),
                }
            }
            ,
            dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
            bFilter: false,
            lengthMenu: [50, 100, 500, 1000],
            buttons: [
                {
                    'extend': 'excel',
                    'className': 'btn btn-success abrResult-excel-export invisible',
                }

            ],
            /*

            <th>#</th>
            <th>رقم الملف</th>
            <th width="20%">الاسم</th>
            <th width="10%">رقم الوثيقة</th>
            <th width="10%">رقم الجوال</th>
            <th width="10%">مكان السكن</th>
            <th width="10%">تاريخ الميلاد</th>
            <th width="15%">العمر Y</th>
            <th width="15%">الجنس</th>
            <th width="10%"> العيادة</th>
            <th width="10%">Risk indicators</th>
            <th width="10%">1st OAE date</th>
            <th width="10%">2nd OAE date</th>
             */
            columns: [
                {data: 'no'},
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
                {data: 'CLINIC_TRANS'},
                {data: 'ِADT_DATE'},
                {data: 'ABR_DATE'},
                {data: 'RESULT_ABR'},
            ],

        });

        $('.abrResult-excel').click(function () {
            $('#dvabrResult_tb').find('.abrResult-excel-export').click();
            return;
            //$('.buttons-excel').click();
        });

    }

    function viewChildrenAdtTestedTable() {
        //  $('#risk_patient_tb').DataTable().destroy();

        $('#adtTest_tb').DataTable().destroy();
        $.fn.dataTable.ext.errMode = 'none';
        $('#adtTest_tb').on('error.dt', function (e, settings, techNote, message) {
            console.log('An error has been reported by DataTables: ', message);
        })
        var table = $('#adtTest_tb');
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                "type": "post",
                "url": baseURL + 'Statistic_cont/getAdtTestData',
                "data": {
                    'P_CLINIC_TYPE': $('#center_type').val(),
                    'P_CENTER_ID': $('#CENTER_ID').val(),
                    'from_date': $('#from_date').val(),
                    'to_date': $('#to_date').val(),
                }
            }
            ,
            dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
            bFilter: false,
            lengthMenu: [50, 100, 500, 1000],
            buttons: [
                {
                    'extend': 'excel',
                    'className': 'btn btn-success adtTest-excel-export invisible',
                }

            ],
            /*

            <th>#</th>
            <th>رقم الملف</th>
            <th width="20%">الاسم</th>
            <th width="10%">رقم الوثيقة</th>
            <th width="10%">رقم الجوال</th>
            <th width="10%">مكان السكن</th>
            <th width="10%">تاريخ الميلاد</th>
            <th width="15%">العمر Y</th>
            <th width="15%">الجنس</th>
            <th width="10%"> العيادة</th>
            <th width="10%">Risk indicators</th>
            <th width="10%">1st OAE date</th>
            <th width="10%">2nd OAE date</th>
             */
            columns: [
                {data: 'no'},
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
                {data: 'CLINIC_TRANS'},
                {data: 'ADT_DATE'},
                /*  {data: 'ABR_DATE'},*/
            ],

        });

        $('.adtTest-excel').click(function () {
            $('#dvadtTest-excel_tb').find('.adtTest-excel-export ').click();
            return;
            //$('.buttons-excel').click();
        });

    }

    function viewChildHearingAidTable() {
        //  $('#risk_patient_tb').DataTable().destroy();

        $('#aidRecord_tb').DataTable().destroy();
        $.fn.dataTable.ext.errMode = 'none';
        $('#aidRecord_tb').on('error.dt', function (e, settings, techNote, message) {
            console.log('An error has been reported by DataTables: ', message);
        })
        var table = $('#aidRecord_tb');
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                "type": "post",
                "url": baseURL + 'Statistic_cont/getHearingAdtData',
                "data": {
                    'P_CLINIC_TYPE': $('#center_type').val(),
                    'P_CENTER_ID': $('#CENTER_ID').val(),
                    'from_date': $('#from_date').val(),
                    'to_date': $('#to_date').val(),
                }
            }
            ,
            dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
            bFilter: false,
            lengthMenu: [50, 100, 500, 1000,10000],
            buttons: [
                {
                    'extend': 'excel',
                    'className': 'btn btn-success aidRecord-excel-export invisible',
                }

            ],
            /*

            <th>#</th>
            <th>رقم الملف</th>
            <th width="20%">الاسم</th>
            <th width="10%">رقم الوثيقة</th>
            <th width="10%">رقم الجوال</th>
            <th width="10%">مكان السكن</th>
            <th width="10%">تاريخ الميلاد</th>
            <th width="15%">العمر Y</th>
            <th width="15%">الجنس</th>
            <th width="10%"> العيادة</th>
            <th width="10%">Risk indicators</th>
            <th width="10%">1st OAE date</th>
            <th width="10%">2nd OAE date</th>
             */
            columns: [
                {data: 'no'},
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
                {data: 'CLINIC_TRANS'},
                {data: 'HEARING_FITTIY_DATE'},
                /*  {data: 'ABR_DATE'},*/
            ],

        });

        $('.aidRecord-excel').click(function () {
            $('#aidRecord-excel_tb').find('.aidRecord-excel-export ').click();
            return;
            //$('.buttons-excel').click();
        });

    }

    // Profit Share Chart.
    // Based on Chartjs plugin - http://www.chartjs.org/
    var profitShare = function (children_no) {
        if (!KTUtil.getByID('kt_chart_profit_share')) {
            return;
        }

        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: children_no,
                    /* data: [
                         35, 30, 35
                     ],*/
                    backgroundColor: [
                        KTApp.getStateColor('success'),
                        KTApp.getStateColor('danger'),
                        //  KTApp.getStateColor('brand')
                    ]
                }],
                labels: [
                    // 'Total',
                    'Male %',
                    'Female %'
                ]
            },
            options: {
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Technology'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: KTApp.getStateColor('brand'),
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                }
            }
        };

        var ctx = KTUtil.getByID('kt_chart_profit_share').getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }
    var profitShare2 = function (children_no) {
        if (!KTUtil.getByID('kt_chart_profit_share2')) {
            return;
        }

        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: children_no,
                    /* data: [
                         35, 30, 35
                     ],*/
                    backgroundColor: [
                        KTApp.getStateColor('brand'),
                        KTApp.getStateColor('success'),
                        KTApp.getStateColor('danger'),
                        KTApp.getStateColor('warning'),

                    ]
                }],
                labels: [
                    'Pass 1st %',
                    'Pass 2nd %',
                    'Failed 1st&2nd %',
                    'Not Tested'
                ]
            },
            options: {
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Technology'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: KTApp.getStateColor('brand'),
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                }
            }
        };

        var ctx = KTUtil.getByID('kt_chart_profit_share2').getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }
    var profitShare3 = function (children_no) {
        if (!KTUtil.getByID('kt_chart_profit_share3')) {
            return;
        }

        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: children_no,
                    /* data: [
                         35, 30, 35
                     ],*/
                    backgroundColor: [
                        KTApp.getStateColor('brand'),
                        //KTApp.getStateColor('info'),
                        KTApp.getStateColor('danger'),
                        KTApp.getStateColor('warning'),

                    ]
                }],
                labels: [
                    'Not Referred %',
                    'Referred ADT %',
                    'Referred ABR %',
                ]
            },
            options: {
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Technology'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: KTApp.getStateColor('brand'),
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                }
            }
        };

        var ctx = KTUtil.getByID('kt_chart_profit_share3').getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }
    var profitShare4 = function (children_no) {
        if (!KTUtil.getByID('kt_chart_profit_share4')) {
            return;
        }

        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: children_no,
                    /* data: [
                         35, 30, 35
                     ],*/
                    backgroundColor: [
                        KTApp.getStateColor('brand'),
                        KTApp.getStateColor('warning'),
                        KTApp.getStateColor('danger'),

                    ]
                }],
                labels: [
                    'Not tested %',
                    'Success ABR %',
                    'Failed ABR %',
                    // 'Failed in 1st and 2nd'
                ]
            },
            options: {
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Technology'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: KTApp.getStateColor('brand'),
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                }
            }
        };

        var ctx = KTUtil.getByID('kt_chart_profit_share4').getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }
    var profitShare5 = function (children_no) {
        if (!KTUtil.getByID('kt_chart_profit_share5')) {
            return;
        }

        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: children_no,
                    /* data: [
                         35, 30, 35
                     ],*/
                    backgroundColor: [
                        KTApp.getStateColor('brand'),
                        //KTApp.getStateColor('info'),
                        KTApp.getStateColor('danger'),

                    ]
                }],
                labels: [
                    'ADT %',//3
                    'Not Tested %',//4
                    // 'Failed in 1st and 2nd'
                ]
            },
            options: {
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'ADT'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: KTApp.getStateColor('brand'),
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                }
            }
        };

        var ctx = KTUtil.getByID('kt_chart_profit_share5').getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }
    var profitShare6 = function (children_no) {
        if (!KTUtil.getByID('kt_chart_profit_share6')) {
            return;
        }

        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: children_no,
                    /* data: [
                         35, 30, 35
                     ],*/
                    backgroundColor: [
                        KTApp.getStateColor('brand'),
                        //KTApp.getStateColor('info'),
                        KTApp.getStateColor('danger'),

                    ]
                }],
                labels: [
                    'Total AID %',
                    'Total Not AID. %',
                    // 'Failed in 1st and 2nd'
                ]
            },
            options: {
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'AID'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: KTApp.getStateColor('brand'),
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                }
            }
        };

        var ctx = KTUtil.getByID('kt_chart_profit_share6').getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }


</script>