<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!--    <div class="kt-subheader   kt-grid__item" id="kt_subheader">-->
    <!--        <div class="kt-container  kt-container--fluid ">-->
    <!--        </div>-->
    <!--    </div>-->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--Begin::Section-->
        <!-- begin:: Content Head -->
        <div class="kt-subheader kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">عيـادة السمعيات</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <span class="kt-subheader__desc"> Risk Factors عوامل الخطر</span>
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
            <div class="col-xl-12">
               <!--begin:: Widgets/Applications/User/Profile3-->
                <?php
                $this->load->view('include/patient_profile.php', $data);
                ?>
                <!--end:: Widgets/Applications/User/Profile3-->
            </div>
        </div>
        <!--End::Section-->
        <div class="row">
            <div class="col-md-12">

                <!--begin::Portlet-->

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
                                    <select name="RISK_CONGENITAL" id="RISK_CONGENITAL" class="col-8 form-control">
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
                                               value="<?php echo $one_risk['RISK_PREMATURITY'];?>" name="RISK_PREMATURITY" id="RISK_PREMATURITY" placeholder="فتره الحمل بالأسابيع">
                                </div>
                                <div class="col-lg-4">
                                    <label>نوع الولادة
                                    	<span class="kt-font-danger kt-font-bold"> * </span></label>
                                    <select name="RISK_DELIVERY_TYPE" id="RISK_DELIVERY_TYPE" class="col-8 form-control">
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
                                    <select name="RISK_CONSANGUINTY" id="RISK_CONSANGUINTY" class="col-8 form-control">
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
                                               value="<?php echo $one_risk['RISK_NOTE'];?>" name="RISK_NOTE" id="RISK_NOTE" placeholder="ملاحظات">
                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a type="button" class="btn btn-secondary" href="<?php echo base_url('index.php/patient_cont/patient_list_vw'); ?>">
                                            Back <i class="fa fa-reply"></i>
                                        </a>
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
<script src="<?php echo base_url("assets/vendors/general/jquery-validation/dist/jquery.validate.js"); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url("assets/custom_js/risk_factor.js");  ?>" type="text/javascript"></script>
