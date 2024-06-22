<link href="<?php echo base_url("assets/panel/assets/css/pages/wizard/wizard-1.rtl.css");?>" rel="stylesheet" type="text/css" />

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

<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						إضافة مستخدم
					</h3>
				</div>
			</div>
			<!--begin::Form-->
			<form class="kt-form" action="javascript:;">
				<div class="kt-portlet__body">
					<div class="form-group">
						<label for="exampleInputPassword1">رقم الهوية</label>
						<input type="number" class="form-control" id="P_RTC_USER_ID" name="P_RTC_USER_ID" placeholder="">
					</div>
                    <div class="form-group">
						<label for="exampleInputPassword1">الرقم الوظيفي</label>
						<input type="number" class="form-control" id="P_EMP_NUM" name="P_EMP_NUM" placeholder="">
					</div>
                     <div class="form-group">
						<label for="exampleInputPassword1">الاسم</label>
						<input type="text" class="form-control" id="P_EMP_NAME" name="P_EMP_NAME" placeholder="">
					</div>
					<div class="form-group">
						<label for="exampleSelect1">المسمى الوظيفي</label>
						<select class="form-control kt-select2" id="P_TITLE_ID" name="P_TITLE_ID">
                            <option value>اختر ...</option>
                                                <?php
                                                foreach ($GET_C_RTC_TITLE_PR as $GET_C_RTC_TITLE) {
                                                ?>
                                                <option value="<?= $GET_C_RTC_TITLE['C_RTC_TITLE_ID'] ?>"><?= $GET_C_RTC_TITLE['TITLE_DESC'] ?></option>
                                                <?php
                                                }
                                                ?>
						</select>
					</div>
				<!--	<div class="form-group">
						<label for="exampleSelect2">المركز</label>
						<select class="form-control kt-select2" id="P_RTC_CENTER_ID" name="P_RTC_CENTER_ID">
                            <option value>اختر ...</option>
                                                <?php
                                                foreach ($GET_C_RTC_CENTER_PR as $GET_C_RTC_CENTER) {
                                                ?>
                                                <option value="<?= $GET_C_RTC_CENTER['C_RTC_CENTER_ID'] ?>"><?= $GET_C_RTC_CENTER['RTC_CENTER_NAME_AR'] ?></option>
                                                <?php
                                                }
                                                ?>
						</select>
					</div>
                    <div class="form-group">
						<label for="exampleSelect2">مركز المسؤولية</label>
						<select class="form-control kt-select2" id="P_USER_LOC_ID" name="P_USER_LOC_ID">
                            <option value>اختر ...</option>
                                                <?php
                                                foreach ($GET_USER_LOC_PR as $GET_USER_LOC_PR) {
                                                ?>
                                                <option value="<?= $GET_USER_LOC_PR['ID'] ?>"><?= $GET_USER_LOC_PR['LOC_NAME_AR'] ?></option>
                                                <?php
                                                }
                                                ?>
						</select>
					</div>-->
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button class="btn btn-primary btn-brand--icon" onclick="RTC_USER_INSERT();" id="">
						<span>
							<span>حفظ</span>
						</span>
					</button>&nbsp
						<button class="btn btn-secondary btn-secondary--icon" onclick="" type="reset" id="kt_reset">
						<span>
							<i class="la la-close"></i>
							<span>تفريغ الحقول</span>
						</span>
					</button>
					</div>
				</div>
			</form>
			<!--end::Form-->			
		</div>
                </div>
    <!-- end:: Content -->

    </div>
</div>
</div>


<script src="<?php echo base_url("assets/custom_js/user_corona.js");?>" type="text/javascript"></script>