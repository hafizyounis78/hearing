

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
										<span class="kt-subheader__desc">استعلام عام لمرضى <?php echo $_SESSION['RTC_CENTER_NAME_AR'];?> </span>
										</div>
									
								</div>
		<!-- end:: Content Head -->

                    	<!-- begin:: Content -->

<!-- end:: Content -->
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--mobile" id="patient_all_list_portlet">
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
		<form class="kt-form kt-form--fit" action="javascript:;">
			<div class="row kt-margin-b-20">
				<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>رقم الهوية:</label>
					<input type="number" class="form-control kt-input" id="P_ID" name="P_ID" placeholder="" data-col-index="0">
				</div>
				<div class="col-md-6">
                      <div class="kt-form__group--inline">
                            <div class="kt-form__label">
                              <label class="kt-label m-label--single">اسم المريض:</label>
                               </div>
                 <div class="kt-form__control">
							   <div class="row">
						<div class="col-3">
							<input type="text" id="FIRST_NAME" name="FIRST_NAME" class="FIRST_NAME form-control" placeholder="الاسم الأول">
						</div>
						<div class="col-3">
							<input type="text" id="SECOND_NAME" name="SECOND_NAME" class="form-control" placeholder="اسم الأب">
						</div>
						<div class="col-3">
							<input type="text" id="THIRD_NAME" name="THIRD_NAME" class="form-control" placeholder="اسم الجد">
						</div>
                        <div class="col-3">
                            <input type="text" id="LAST_NAME" name="LAST_NAME" class="form-control" placeholder="اسم العائلة">
						</div>
						</div>                                        </div>
                                    </div>
                                    <div class="d-md-none kt-margin-b-10"></div>
                                </div>
			</div>
            	<div class="row kt-margin-b-20">

               <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>اشتباه الاصابة:</label>
                    <select class="form-control kt-select2" id="COVID_SUS" name="COVID_SUS" data-col-index="3">
                    <option value="">الكل</option>
                    <option value="1">مشتبه بالاصابة</option>
                    <option value="2">غير مشتبه بالاصابة</option>
                    <option value="3">غير مشخص</option>



					</select>
				</div>
                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>تاريخ الزيارة:</label>
					<div class="input-daterange input-group" id="kt_datepicker">
						<input type="text" class="form-control kt-input kt_datepicker" name="P_FROM_DATE" id="P_FROM_DATE" placeholder="من تاريخ" value="<?php echo date('d/m/Y')?>" data-col-index="5"/>
						<div class="input-group-append">
							<span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
						</div>
						<input type="text" class="form-control kt-input kt_datepicker" name="P_TO_DATE" id="P_TO_DATE" placeholder="حتى تاريخ" value="<?php echo date('d/m/Y')?>" data-col-index="5"/>
					</div>
				</div>
            </div>



			<div class="kt-separator kt-separator--md kt-separator--dashed"></div>

			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary btn-brand--icon" onclick="GET_PATIENT_ALL_CENTER_LIST();">
						<span>
							<i class="la la-search"></i>
							<span>بحث</span>
						</span>
					</button>
					&nbsp;&nbsp;
					<button class="btn btn-secondary btn-secondary--icon" type="reset" id="kt_reset">
						<span>
							<i class="la la-close"></i>
							<span>تفريغ الحقول</span>
						</span>
					</button>
				</div>
			</div>
		</form>
                        </div>
                    </div>
                    <!--end::Portlet-->
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--mobile" id="patient_all_list_table">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-avatar"></i>
										</span>
                                <h3 class="kt-portlet__head-title">
                                    قائمة المرضى
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                                    <div class="kt-portlet__head-actions">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>رقم المريض</th>
                                    <th>رقم الوثيقة</th>
                                    <th>اسم المريض</th>
                                    <th>رقم الجوال</th>
                                    <th>العنوان</th>
                                    <th>الجنس</th>
                                    <th>العمر</th>
                                    <th>رقم الزيارة</th>
                                    <th>تاريخ الزيارة</th>
                                    <th>المركز</th>
                                    <th>حالة الاشتباه</th>
<!--                                    <th>درجة الخطورة</th>//-->
                                </tr>
                                </thead>
                                <tbody id="patient_all_list">
                                </tbody>
                            </table>
                            <!--end: Datatable -->
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
    </div>
    <!-- end:: Content -->
</div>


<script src="<?php echo base_url("assets/custom_js/patient_corona.js");?>" type="text/javascript"></script>