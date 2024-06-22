<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__body">
        <div class="kt-widget kt-widget--user-profile-3">
            <div class="kt-widget__top">
                <h5>بيانات المريض الاساسية</h5>
            </div>
            <div class="kt-widget__bottom">
                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <div class="kt-userpic kt-userpic--xl kt-userpic--circle kt-userpic--success kt-margin-r-5 kt-margin-t-5">
                            <span class="flaticon-avatar"></span>
                        </div>
                    </div>
                    <div class="kt-widget__details">
                        <!-- <span class="kt-widget__title">Name</span>-->
                        <span class="kt-widget__value">&nbsp; &nbsp;<?php echo $one_patient['PATIENT_NAME']; ?></span>
                    </div>
                </div>
                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <div class="kt-userpic kt-userpic--xl kt-userpic--circle kt-userpic--danger kt-margin-r-5 kt-margin-t-5">
                            <span class="flaticon-profile"></span>
                        </div>

                    </div>
                    <div class="kt-widget__details">
                        <!--     <span class="kt-widget__title">Paitent Id.</span>-->
                        <span class="kt-widget__value">&nbsp; &nbsp;<?php echo $one_patient['DOCUMENT_ID']; ?></span>
                    </div>
                </div>
                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <div class="kt-userpic kt-userpic--xl kt-userpic--circle kt-userpic--warning kt-margin-r-5 kt-margin-t-5">
                            <span class="flaticon-event-calendar-symbol"></span>
                        </div>
                    </div>
                    <div class="kt-widget__details">
                        <!--  <span class="kt-widget__title">DOB</span>-->
                        <span class="kt-widget__value">&nbsp; &nbsp;<?php echo $one_patient['DOB']; ?></span>
                    </div>
                </div>
                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <div class="kt-userpic kt-userpic--xl kt-userpic--circle kt-userpic--success kt-margin-r-5 kt-margin-t-5">
                            <?php
                            if ($one_patient['SEX_ID'] == 1)
                                echo '<span class="la la-male"></span>';
                            else
                                echo '<span class="la la-female"></span>';
                            ?>
                        </div>
                    </div>
                    <div class="kt-widget__details">
                        <!--  <span class="kt-widget__title">DOB</span>-->
                        <span class="kt-widget__value">&nbsp; &nbsp;<?php echo $one_patient['SEX_NAME']; ?></span>
                    </div>
                </div>
                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <div class="kt-userpic kt-userpic--xl kt-userpic--circle kt-userpic--brand kt-margin-r-5 kt-margin-t-5">
                            <span class="flaticon-file-2"></span>
                        </div>
                    </div>
                    <div class="kt-widget__details">
                        <!--  <span class="kt-widget__title">File No.</span>-->
                        <!--<a href="javascript:;" onclick="open_patient_file(<?php /*echo  $one_patient['VISIT_ID']; */?>)" class="kt-widget__value kt-font-brand">&nbsp;
                                            &nbsp;<?php /*echo "عرض الملف: " . $one_patient['PERSON_ID']; */?></a>-->
                        <a href="javascript:;"  class="kt-widget__value kt-font-brand">&nbsp;
                            &nbsp;<?php echo $one_patient['PERSON_ID']; ?></a>
                        <input type="hidden" id="PERSON_ID" name="PERSON_ID"
                               value="<?php echo $one_patient['PERSON_ID']; ?>">
                        <input type="hidden" id="VISIT_ID" name="VISIT_ID"
                               value="<?php echo $one_patient['VISIT_ID']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
