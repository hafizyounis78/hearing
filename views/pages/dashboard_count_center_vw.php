<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
       <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-md-12">
                    				<!-- begin:: Content Head -->
								<div class="kt-subheader   kt-grid__item" id="kt_subheader">
									<div class="kt-subheader__main">
										<h3 class="kt-subheader__title">الرئيسية</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc">                           الإحصائية العامة          ل<?php echo $_SESSION['RTC_CENTER_NAME_AR'];?> </span>
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
                    <div class="kt-portlet kt-portlet--mobile" id="">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-medical-records"></i>
										</span>
                                <h3 class="kt-portlet__head-title">
                           الإحصائية العامة          ل<?php echo $_SESSION['RTC_CENTER_NAME_AR'];?>
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

<script>
function GET_COUNT_PATIENT() {
    test_session();
    KTApp.block("#count_patient_portlet",{overlayColor:"#000000",type:"v2",state:"primary",message:"جاري جلب البيانات ..."});
     var P_FROM_DATE = $('#P_FROM_DATE').val();
     var P_TO_DATE = $('#P_TO_DATE').val();
        $.ajax({
            url: baseURL + 'Dashboard/GET_COUNT_PATIENT_CENTER',
            type: 'POST',
            data:
                {
                    random: Math.random(),
                    P_FROM_DATE           : P_FROM_DATE,
                    P_TO_DATE           : P_TO_DATE,
                },
            success: function (data) {
                KTApp.unblock("#count_patient_portlet");
//                 alert(data);
                var obj = JSON.parse(data);
                var TOTAL_ALL = 0;
                var SUSPECTED_ALL = 0;
                var NOT_SUSPECTED_ALL = 0;
                obj.forEach(function(obj){
                    TOTAL_ALL += parseInt(obj["TOTAL"]);
                });
                obj.forEach(function(obj){
                    SUSPECTED_ALL += parseInt(obj["SUSPECTED"]);
                });
                obj.forEach(function(obj){
                    NOT_SUSPECTED_ALL += parseInt(obj["NOT_SUSPECTED"]);
                });
                $('#TOTAL').html(TOTAL_ALL);
                $('#SUSPECTED').html(SUSPECTED_ALL);
                $('#NOT_SUSPECTED').html(NOT_SUSPECTED_ALL);
                var NOT_DIAGNOSED_ALL= (TOTAL_ALL - SUSPECTED_ALL - NOT_SUSPECTED_ALL);
                var suspected_precent = (SUSPECTED_ALL / TOTAL_ALL * 100).toFixed(2);
                var not_suspected_precent = (NOT_SUSPECTED_ALL / TOTAL_ALL * 100).toFixed(2);
                var not_diagnosed_precent = (NOT_DIAGNOSED_ALL / TOTAL_ALL * 100).toFixed(2);
                $('#NOT_SUSPECTED_PER').html(not_suspected_precent);
                $('#SUSPECTED_PER').html(suspected_precent);
                $('#NOT_DIAGNOSED_PER').html(not_diagnosed_precent);
                $('#NOT_DIAGNOSED').html(NOT_DIAGNOSED_ALL);
                $('#NOT_SUSPECTED_PER_PORGRESS').css( "width", not_suspected_precent + '%');
                $('#SUSPECTED_PER_PORGRESS').css( "width", suspected_precent + '%');
                $('#NOT_DIAGNOSED_PER_PORGRESS').css( "width", not_diagnosed_precent + '%');
            }
        });

    };

jQuery(document).ready(function () {
    GET_COUNT_PATIENT();
});

</script>


