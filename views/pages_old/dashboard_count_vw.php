<style>
#COUNT_RTC_CENTER .kt-widget25{
    margin:0;
    }
    
   #COUNT_RTC_CENTER .kt-widget25 .kt-widget25__items .kt-widget25__item .kt-widget25__number{
    font-size:1.8rem;
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
										<span class="kt-subheader__desc">إحصائية عامة </span>
										</div>
									
								</div>
		<!-- end:: Content Head -->

                    	<!-- begin:: Content -->

<!-- end:: Content -->
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--mobile" id="count_patient_portlet">
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
					<label>التاريخ:</label>
					<div class="input-daterange input-group" id="kt_datepicker">
						<input type="text" class="form-control kt-input kt_datepicker" name="P_FROM_DATE" id="P_FROM_DATE" placeholder="من تاريخ" value="<?php echo date('d/m/Y')?>" data-col-index="5"/>
						<div class="input-group-append">
							<span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
						</div>
						<input type="text" class="form-control kt-input kt_datepicker" name="P_TO_DATE" id="P_TO_DATE" placeholder="حتى تاريخ" value="<?php echo date('d/m/Y')?>" data-col-index="5"/>
					</div>
				</div>

             <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>المركز:</label>
                    <select class="form-control kt-select2" id="P_CENTER" name="P_CENTER" data-col-index="3">
                    <option value="" selected>الكل</option>
                                                <?php
                                                foreach ($GET_C_RTC_CENTER_PR as $GET_C_RTC_CENTER) {
                                                ?>
                                                <option value="<?= $GET_C_RTC_CENTER['C_RTC_CENTER_ID'] ?>" <?php if($GET_C_RTC_CENTER['C_RTC_CENTER_ID'] == 1) echo 'disabled  hidden'?>><?= $GET_C_RTC_CENTER['RTC_CENTER_NAME_AR'] ?></option>
                                                <?php
                                                }
                                                ?>

					</select>
				</div>
			</div>


			<div class="kt-separator kt-separator--md kt-separator--dashed"></div>

			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary btn-brand--icon" onclick="GET_COUNT_PATIENT();">
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
                    </div>
                    <!--end::Portlet-->
                    <!--begin::Portlet-->
    	<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
					احصائية الزيارات  <small>لمراكز الفرز</small>
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<ul class="nav nav-pills nav-pills" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#kt_tabs_8_1" role="tab">
								الاحصائية التجميعية
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_tabs_8_2" role="tab">
								الاحصائية التفصيلية
							</a>
						</li>
					</ul>
				</div>
			</div>
            		</div>	
				<div class="tab-content">
                    <div class="tab-pane active" id="kt_tabs_8_1" role="tabpanel">

  <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--mobile" id="">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-medical-records"></i>
										</span>
                                <h3 class="kt-portlet__head-title">
                                    الإحصائية العامة
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
<!-- <div id="kt_morris_4" style="height:500px;"></div>//-->
                            <div class="kt-widget25">
			<span class="kt-widget25__stats m-font-brand" id="TOTAL">0</span>
			<span class="kt-widget25__subtitle">إجمالي عدد الزيارات</span>
			<div class="kt-widget25__items">
				<div class="kt-widget25__item">
					<span class="kt-widget25__number">
						<span id="SUSPECTED_PER">0 </span><span>%</span> <small>(<span  id="SUSPECTED"></span> حالة)</small>
				    </span>					 
					<div class="progress kt-progress--sm">
						<div class="progress-bar kt-bg-danger" id="SUSPECTED_PER_PORGRESS" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span class="kt-widget25__desc">
حالات مشتبه بإصابتها
					</span>
				</div>

				<div class="kt-widget25__item">
					<span class="kt-widget25__number">
						<span id="NOT_SUSPECTED_PER">0 </span><span>%</span> <small>(<span  id="NOT_SUSPECTED"></span> حالة)</small>
				    </span>					 				
					<div class="progress m-progress--sm">
						<div class="progress-bar kt-bg-success" id="NOT_SUSPECTED_PER_PORGRESS" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span class="kt-widget25__desc">
حالات غير مشتبه بإصابتها
					</span>
				</div>	

                <div class="kt-widget25__item">
					<span class="kt-widget25__number">
						<span id="NOT_DIAGNOSED_PER">0 </span><span>%</span> <small>(<span  id="NOT_DIAGNOSED"></span> حالة)</small>
				    </span>					 				
					<div class="progress m-progress--sm">
						<div class="progress-bar kt-bg-warning" id="NOT_DIAGNOSED_PER_PORGRESS" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span class="kt-widget25__desc">
					حالات غير مشخصة							
                    </span>
				</div>	

<!--				<div class="kt-widget25__item" >
					<span class="kt-widget25__number">
					54%
				    </span>					 
					<div class="progress m-progress--sm">
						<div class="progress-bar kt-bg-warning" role="progressbar" style="width: 54%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span class="kt-widget25__desc">
						Product Growth
					</span>
				</div>		//-->		
			</div>					
		</div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                    <div id="end_session_btn">

                    </div>
                    <div class="row" id="COUNT_RTC_CENTER">
<!--                        <div class="col-lg-6"><div class="kt-portlet kt-portlet--mobile" id=""><div class="kt-portlet__head kt-portlet__head--lg"><div class="kt-portlet__head-label"><span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-medical-records"></i></span><h3 class="kt-portlet__head-title"></h3></div></div>
                        <div class="kt-portlet__body"><div class="kt-widget25"><span class="kt-widget25__stats m-font-brand">0</span><span class="kt-widget25__subtitle">إجمالي عدد الزيارات</span>
			<div class="kt-widget25__items">
                <div class="kt-widget25__item"><span class="kt-widget25__number"><span>0</span><span> %</span> <small>(<span></span> حالة)</small></span><div class="progress kt-progress--sm"><div class="progress-bar kt-bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div></div><span class="kt-widget25__desc">حالات مشتبه بإصابتها</span></div>
				<div class="kt-widget25__item"><span class="kt-widget25__number"><span>0 </span><span>%</span> <small>(<span></span> حالة)</small></span><div class="progress m-progress--sm"><div class="progress-bar kt-bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div></div><span class="kt-widget25__desc">حالات غير مشتبه بإصابتها</span></div>
                <div class="kt-widget25__item"><span class="kt-widget25__number"><span>0 </span><span>%</span> <small>(<span></span> حالة)</small></span><div class="progress m-progress--sm"><div class="progress-bar kt-bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div></div><span class="kt-widget25__desc">حالات غير مشخصة</span></div>
			</div></div></div></div></div>
//-->
                    </div>

                    </div>
					<div class="tab-pane" id="kt_tabs_8_2" role="tabpanel">

                        <!--begin::Portlet-->
    	<div class="kt-portlet" id="general_statistics">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
					الاحصائية التفصيلية</h3>
				</div>
				<!--<div class="kt-portlet__head-toolbar">
					<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                        <li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#kt_tabs_9_0" role="tab">
							جميع المراكز
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_tabs_9_1" role="tab">
								مركز خانيونس
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_tabs_9_2" role="tab">
								مركز الوسطى
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_tabs_9_3" role="tab">
								مركز الأندونيسي
							</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_tabs_9_4" role="tab">
								مركز غزة
							</a>
						</li>
                         <li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_tabs_9_5" role="tab">
								مركز رفح
							</a>
						</li>
					</ul>
				</div>//-->
			</div>
			<div class="kt-portlet__body">
				<!--<div class="tab-content">
                    <div class="tab-pane active" id="kt_tabs_9_0" role="tabpanel">//-->
                                                    <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>المركز</th>
                                    <th>التاريخ</th>
                                    <th>مشتبه به</th>
                                    <th>غير مشتبه به</th>
                                    <th>غير مشخص</th>
                                    <th>الإجمالي</th>
                                </tr>
                                </thead>
                                <tbody id="DETAILS_RAFAH">
                                </tbody>
                            </table>
                            <!--end: Datatable -->
					</div>
                   <!-- <div class="tab-pane" id="kt_tabs_9_1" role="tabpanel">
					</div>
					<div class="tab-pane" id="kt_tabs_9_2" role="tabpanel">
					</div>
					<div class="tab-pane " id="kt_tabs_9_3" role="tabpanel">
					</div>
                    <div class="tab-pane " id="kt_tabs_9_4" role="tabpanel">
					</div>
                    <div class="tab-pane " id="kt_tabs_9_5" role="tabpanel">
					</div>//-->
				</div>
<!--			</div>//-->
<!--		</div>	//-->
		<!--end::Portlet-->


                    </div>
			</div>

		<!--end::Portlet-->


                </div>
            </div>
    </div>
    <!-- end:: Content -->
</div>

<script src="<?php echo base_url("assets/custom_js/dashboard_corona.js");?>" type="text/javascript"></script>


