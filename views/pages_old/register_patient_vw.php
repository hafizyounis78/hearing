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

                    <div class="alert alert-warning fade show" role="alert" id="CHECH_VISIT_ALERT" style="display:none">
                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
                            <div class="alert-text">هذا المريض قام بزيارة : <strong id="RTC_CENTER_CHECK"></strong> في نفس هذا <strong>اليوم</strong> الساعة : <strong id="RTC_VISIT_DATE_CHECK"></strong> رقم الزيارة : <strong id="RTC_VISIT_ID_CHECK"></strong></div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
                    <div class="kt-portlet kt-portlet--mobile" id="visit_patient_portlet">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-avatar"></i>
										</span>
                                <h3 class="kt-portlet__head-title">
تسجيل زيارة جديدة
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            
                            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

					<!-- begin:: Content -->
             <form class="kt-form" action="javascript:;" id="kt_form" novalidate="novalidate" onkeydown="return event.key != 'Enter';">
<!--                                <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">//-->
						<div class="kt-heading kt-heading--md">البيانات الأساسية: </div>
						<div class="kt-form__section kt-form__section--first">
							<div class="kt-wizard-v1__form">
                      <div class="form-group row">
                        <div class="col-lg-4">
                            <div class="form-group row">
						<label for="P_DOC_TYPE_ID" class="col-3 col-form-label">نوع الوثيقة: </label>
						<div class="col-9">
							<select name="P_DOC_TYPE_ID" id="P_DOC_TYPE_ID" class="form-control kt-select2" aria-describedby="country-error" aria-invalid="false">
											<option value="">اختر</option>
											<option value="1" selected>هوية</option>
											<option value="2">جواز سفر</option>

										</select>
						</div>
					</div>
					    </div>
                        <div class="col-lg-4">
                            <div class="form-group row">
						<label for="P_DOC_ID" class="col-3 col-form-label">رقم الوثيقة: </label>
						<div class="col-9">
							<input class="form-control" type="number" id="P_DOC_ID" name="P_DOC_ID" required onkeydown="if(event.keyCode==13){ $('#P_DOC_ID').blur(); return false;}">
						</div>
					</div>
					    </div>
                       <!-- <div class="col-lg-4">
                            <div class="form-group row">
						<label for="example-text-input" class="col-3 col-form-label">الجنسية: </label>
						<div class="col-9">
							<select name="country" class="form-control">
											<option value="">اختر</option>
											<option value="">فلسطيني</option>
											<option value="">اردني</option>
											<option value="">مصري</option>
											<option value="">تونسي</option>
											<option value="">عراقي</option>

										</select>
						</div>
					</div>
					    </div>//-->
                      </div>
                   <div class="form-group row">
                        <div class="col-lg-8">
                            <div class="form-group row">
						<label for="example-text-input" class="col-2 col-form-label">الاسم رباعي: </label>
						<div class="col-10">
							   <div class="form-group row">
						<div class="col-3">
							<input type="text" id="FIRST_NAME" name="FIRST_NAME" class="form-control" disabled="" placeholder="الاسم الأول">
						</div>
						<div class="col-3">
							<input type="text" id="SECOND_NAME" name="SECOND_NAME" class="form-control" disabled="" placeholder="اسم الأب">
						</div>
						<div class="col-3">
							<input type="text" id="THIRD_NAME" name="THIRD_NAME" class="form-control" disabled="" placeholder="اسم الجد">
						</div>
                        <div class="col-3">
                            <input type="text" id="LAST_NAME" name="LAST_NAME" class="form-control" disabled="" placeholder="اسم العائلة">
						</div>
					</div>
						</div>
					</div>
					    </div>
                           <div class="col-lg-4">
                            <div class="form-group row">
						<label for="example-text-input" class="col-3 col-form-label">تاريخ الميلاد: </label>
						<div class="col-9">
							<input type="text" id="DOB" name="DOB" class="form-control kt_datepicker" disabled>
						</div>
					</div>
					    </div>
                      </div>

                    <div class="form-group row">
                           <div class="col-lg-4">
                            <div class="form-group row">
						<label for="" class="col-3 col-form-label">مكان الميلاد: </label>
						<div class="col-9">
							<input type="text" id="POB" name="POB" class="form-control" disabled>
						</div>
					</div>
					    </div>
                         <div class="col-lg-4">
                            <div class="form-group row">
						<label for="" class="col-3 col-form-label">الجنس: </label>
						<div class="col-9">
							<input name="SEX" id="SEX" type="text" class="form-control" disabled>
						</div>
					</div>
					    </div>
                          <div class="col-lg-4">
                            <div class="form-group row">
						<label for="" class="col-3 col-form-label">الحالة الإجتماعية: </label>
						<div class="col-9">
							<input name="MARITAL_STATUS" id="MARITAL_STATUS" type="text" class="form-control" disabled>
						</div>
					</div>
					    </div>
                      </div>

                  <div class="form-group row">
                      <div class="col-lg-4">
                            <div class="form-group row">
						<label for="" class="col-3 col-form-label">المدينة: </label>
						<div class="col-9">
							<input type="text" id="CITY_NAME" name="CITY_NAME" class="form-control" disabled>
						</div>
					</div>
					    </div>
                           <div class="col-lg-4">
                            <div class="form-group row">
						<label for="" class="col-3 col-form-label">العنوان: </label>
						<div class="col-9">
							<input type="text" id="MOI_ADDRESS" name="MOI_ADDRESS" class="form-control" disabled>
						</div>
					</div>
					    </div>
                         <div class="col-lg-4">
                            <div class="form-group row">
						<label for="" class="col-3 col-form-label">رقم الهاتف: </label>
						<div class="col-9">
							 <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-phone"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="PHONE_NUM" id="PHONE_NUM" class="form-control" placeholder="">
                         </div>
						</div>
					</div>
					    </div>

                      </div>
                   <div class="form-group row">
                       <div class="col-lg-4">
                            <div class="form-group row">
						<label for="" class="col-3 col-form-label">رقم الجوال: </label>
						<div class="col-9">
							 <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-mobile"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="MOBILE_NUM" id="MOBILE_NUM" class="form-control" placeholder="">
                                            </div>
						</div>
					</div>
					    </div>
                           <div class="col-lg-8">
                            <div class="form-group row">
						<label for="" class="col-3 col-form-label">العنوان الحالي: </label>
						<div class="col-9">
							<input name="CURRENT_ADDRESS" id="CURRENT_ADDRESS" type="text" class="form-control">
						</div>
					</div>
					    </div>
                      </div>
                    <input name="PERSON_SERIAL_ID" id="PERSON_SERIAL_ID" type="hidden" class="form-control">
                    <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
           <div class="kt-heading kt-heading--md">بيانات المرافقين: </div>
                                <div id="kt_repeater_1">
                    <div class="form-group form-group-last row " id="person_info" >
<!--                        <label  class="col-lg-2 col-form-label">المرافقين:</label>//-->
                        <div data-repeater-list="" class="col-lg-12">
                            <div data-repeater-item class="form-group row align-items-center">

                                <div class="col-md-2">

                                    <div class="kt-form__group--inline">

                                        <div class="kt-form__label">
                                            <label>رقم الهوية:</label>
                                        </div>
                                        <div class="kt-form__control">
                                            <input name="FO_P_DOC_ID" id="FO_P_DOC_ID" type="number" class="form-control person_id" placeholder="" onkeydown="if(event.keyCode==13){ $('#FO_P_DOC_ID').blur(); return false;}">
                                            <input name="FO_P_DOC_SERIAL" id="FO_P_DOC_SERIAL" type="hidden" class="form-control FO_P_DOC_SERIAL" placeholder="">
                                        </div>
                                    </div>
                                    <div class="d-md-none kt-margin-b-10"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="kt-form__group--inline">
                                        <div class="kt-form__label">
                                            <label class="kt-label m-label--single">الاسم رباعي:</label>
                                        </div>
                                        <div class="kt-form__control">
							   <div class="row">
						<div class="col-3">
							<input type="text" id="FO_FIRST_NAME" name="FO_FIRST_NAME" class="FIRST_NAME form-control" disabled="" placeholder="الاسم الأول">
						</div>
						<div class="col-3">
							<input type="text" id="FO_SECOND_NAME" name="FO_SECOND_NAME" class="form-control" disabled="" placeholder="اسم الأب">
						</div>
						<div class="col-3">
							<input type="text" id="FO_THIRD_NAME" name="FO_THIRD_NAME" class="form-control" disabled="" placeholder="اسم الجد">
						</div>
                        <div class="col-3">
                            <input type="text" id="FO_LAST_NAME" name="FO_LAST_NAME" class="form-control" disabled="" placeholder="اسم العائلة">
						</div>
						</div>                                        </div>
                                    </div>
                                    <div class="d-md-none kt-margin-b-10"></div>
                                </div>
                                <div class="col-md-2 phone_num">
                                    <div class="kt-form__group--inline">
                                        <div class="kt-form__label">
                                            <label>رقم الجوال:</label>
                                        </div>
                                        <div class="kt-form__control">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-mobile"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="FO_P_PHONE" id="FO_P_PHONE" class="form-control FO_P_PHONE" placeholder="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="d-md-none kt-margin-b-10"></div>
                                </div>
                                <div class="col-md-2">
                                     <div class="kt-form__label">
                                            <label></label>
                                        </div>
                                    <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
                                        <i class="la la-trash-o"></i>
                                        حذف
                                    </a>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="form-group form-group-last row">
<!--                        <label class="col-lg-2 col-form-label"></label>//-->
                        <div class="col-lg-4">
                            <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
                                <i class="la la-plus"></i> إضافة
                            </a>
                        </div>
                    </div>
                </div>
<!-- <div class="form-group row">
                           <div class="col-lg-4">
                            <div class="form-group row">
						<label for="" class="col-3 col-form-label">رقم الهوية: </label>
						<div class="col-9">
							<input type="text" id="MOI_ADDRESS" name="MOI_ADDRESS" class="form-control">
						</div>
					</div>
					    </div>
                         <div class="col-lg-8">
                            <div class="form-group row">
						<label for="example-text-input" class="col-2 col-form-label">الاسم رباعي: </label>
						<div class="col-10">
							   <div class="form-group row">
						<div class="col-3">
							<input type="text" id="FIRST_NAME" name="FIRST_NAME" class="form-control" disabled="" placeholder="الاسم الأول">
						</div>
						<div class="col-3">
							<input type="text" id="SECOND_NAME" name="SECOND_NAME" class="form-control" disabled="" placeholder="اسم الأب">
						</div>
						<div class="col-3">
							<input type="text" id="THIRD_NAME" name="THIRD_NAME" class="form-control" disabled="" placeholder="اسم الجد">
						</div>
                        <div class="col-3">
                            <input type="text" id="LAST_NAME" name="LAST_NAME" class="form-control" disabled="" placeholder="اسم العائلة">
						</div>
					</div>
						</div>
					</div>
					    </div>
                         <div class="col-lg-4">
                            <div class="form-group row">
						<label for="" class="col-3 col-form-label">رقم الجوال: </label>
						<div class="col-9">
							<input type="text" class="form-control">
						</div>
					</div>
					    </div>
                      </div>//-->
 <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary btn-brand--icon" onclick="INSERT_VISIT_CORANA();" id="">
						<span>
<!--							<i class="la la-search"></i>//-->
							<span>حفظ</span>
						</span>
					</button>
					&nbsp;&nbsp;
					<button class="btn btn-secondary btn-secondary--icon" onclick="" type="reset" id="kt_reset">
						<span>
							<i class="la la-close"></i>
							<span>تفريغ الحقول</span>
						</span>
					</button>
				</div>
			</div>
							</div>
						</div>
<!--					</div>//-->
                                </form>
                    <!-- end:: Content -->

                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
    </div>
    <!-- end:: Content -->

    </div>
</div>
</div>
<script src="<?php echo base_url("assets/panel/assets/js/pages/crud/forms/widgets/form-repeater.js");?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/panel/assets/js/pages/custom/wizard/wizard-1.js");?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/panel/assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js");?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/custom_js/visit_corona.js");?>" type="text/javascript"></script>