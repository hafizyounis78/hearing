

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
										<span class="kt-subheader__desc">إحصائية عامة لزيارت مراكز الفرز التنفسي</span>
										</div>
									
								</div>
		<!-- end:: Content Head -->

                    	<!-- begin:: Content -->

<!-- end:: Content -->
                    <!--begin::Portlet-->
<!--                    <div class="kt-portlet kt-portlet--mobile" id="lab_result_portlet">
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
		<form class="kt-form kt-form--fit" action="javascript:;">
			<div class="row kt-margin-b-20">
					<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>تاريخ ظهور النتيجة:</label>
					<div class="input-daterange input-group" id="kt_datepicker">
						<input type="text" class="form-control kt-input kt_datepicker" name="P_FROM_DATE" id="P_FROM_DATE" placeholder="من تاريخ" value="" data-col-index="5"/>
						<div class="input-group-append">
							<span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
						</div>
						<input type="text" class="form-control kt-input kt_datepicker" name="P_TO_DATE" id="P_TO_DATE" placeholder="حتى تاريخ" value="" data-col-index="5"/>
					</div>
				</div>

             <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>النتيجة:</label>
                    <select class="form-control kt-select2" id="P_RESULT_TYPE" name="P_RESULT_TYPE" data-col-index="3">
                    <option value="1" selected>ِAll</option>
                    <option value="2">Positive</option>
                    <option value="3">Negative</option>

					</select>
				</div>
			</div>


			<div class="kt-separator kt-separator--md kt-separator--dashed"></div>

			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary btn-brand--icon" onclick="GET_LAB_RESULT_COUNT();">
						<span>
							<i class="la la-search"></i>
							<span>استعلام</span>
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
                    </div>//-->
                    <!--end::Portlet-->
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--mobile" id="">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-medical-records"></i>
										</span>
                                <h3 class="kt-portlet__head-title">
                                    الاحصائية
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
<!-- <div id="kt_morris_4" style="height:500px;"></div>//-->
<h3>
إحصائية الزيارات للمراكز بتاريخ : <span id=""><?php date_default_timezone_set('Asia/Gaza'); echo date('d/m/Y'); ?> </span>
    </h3>
                            </h2>
                            <div class="kt-widget25">
			<span class="kt-widget25__stats m-font-brand" id="TOTAL"><?php echo count($VISIT_COUNT_RAFAH) + count($VISIT_COUNT_KHANYOUNIS) + count($VISIT_COUNT_AQSA) + count($VISIT_COUNT_GAZA) + count($VISIT_COUNT_NORTH); ?></span>
			<span class="kt-widget25__subtitle">إجمالي عدد الزيارات</span>
			<div class="kt-widget25__items">
				<div class="kt-widget25__item">
					<span class="kt-widget25__number">
						<span id=""><?php echo count($VISIT_COUNT_RAFAH); ?> </span>
				    </span>					 
					<div class="progress kt-progress--sm">
						<div class="progress-bar kt-bg-info" id="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span class="kt-widget25__desc">
						مركز فرز رفح
					</span>
				</div>

<div class="kt-widget25__item">
					<span class="kt-widget25__number">
						<span id=""><?php echo count($VISIT_COUNT_KHANYOUNIS); ?> </span>
				    </span>					 
					<div class="progress kt-progress--sm">
						<div class="progress-bar kt-bg-info" id="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span class="kt-widget25__desc">
						مركز فرز خانيونس
					</span>
				</div>

                <div class="kt-widget25__item">
					<span class="kt-widget25__number">
						<span id=""><?php echo count($VISIT_COUNT_AQSA); ?> </span>
				    </span>					 
					<div class="progress kt-progress--sm">
						<div class="progress-bar kt-bg-info" id="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span class="kt-widget25__desc">
						مركز فرز الوسطى
					</span>
				</div>
<div class="kt-widget25__item">
					<span class="kt-widget25__number">
						<span id=""><?php echo count($VISIT_COUNT_GAZA); ?> </span>
				    </span>					 
					<div class="progress kt-progress--sm">
						<div class="progress-bar kt-bg-info" id="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span class="kt-widget25__desc">
						مركز فرز غزة
					</span>
				</div>
                <div class="kt-widget25__item">
					<span class="kt-widget25__number">
						<span id=""><?php echo count($VISIT_COUNT_NORTH); ?> </span>
				    </span>					 
					<div class="progress kt-progress--sm">
						<div class="progress-bar kt-bg-info" id="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span class="kt-widget25__desc">
						مركز فرز الأندونيسي
					</span>
				</div>

                                </div>					
		</div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
    </div>
    <!-- end:: Content -->
</div>

