		<!-- begin:: Page -->

<style>
.kt-badge.kt-badge--pill{
    font-size:13px;
    font-weight:bold;
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
										<span class="kt-subheader__desc"><?php echo $title; ?> </span>
										</div>

								</div>
		<!-- end:: Content Head -->

                    	<!-- begin:: Content -->

<!-- end:: Content -->
                    <!--begin::Portlet-->

                    <div class="kt-portlet kt-portlet--mobile" id="search_lab_portlet">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-magnifier-tool"></i>
										</span>
                                <h3 class="kt-portlet__head-title">
                                    <?php echo $title; ?> 
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


			<div class="kt-separator kt-separator--md kt-separator--dashed"></div>

			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary btn-brand--icon" onclick="SREACH_LAB();">
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
                                                 <div class="alert alert-warning fade show d-none" role="alert">
                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                        <strong class="alert-text" style="line-height: 2;">تنبيه هام جداً , في حال كانت النتيجة موجبة (مصاب)، فإن على المواطن الالتزام بعزل نفسه وتجنب المخالطة خلال 24 ساعة التالية إلى حين تواصل الطواقم الصحية معه.
 وفي حال كانت نتيجة الفحص سلبية (غير مصاب)، لا تعني قطعاً أنه غير مصاب ، وعليه انتظار التوجيهات من وزارة الصحة في حال كونه من المخالطين لمصاب تأكدت إصابته.  ويلتزم المواطن حينها بالاستمرار في اجراءات السلامة وعدم الاحتكاك بالآخرين.
<br>
مع تمنياتنا لكم بالسلامة</strong>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--mobile" id="search_lab_table">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-medical-records"></i>
										</span>
                                <h3 class="kt-portlet__head-title">
                                النتيجة 
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <!--begin: Datatable -->
                            <div class="table-responsive">
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>رقم الهوية</th>
                                    <th>الاسم</th>
                                    <th>رقم العينة</th>
                                    <th>تاريخ سحب العينة</th>
                                    <th>تاريخ النتيجة</th>
                                    <th>نوع الفحص</th>
                                    <th>النتيجة</th>
                                </tr>
                                </thead>
                                <tbody id="search_lab_list">
                                </tbody>
                            </table>
                            <!--end: Datatable -->
                                	</div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
    </div>
    <!-- end:: Content -->
</div>
<!-- BEGIN CORE PLUGINS -->
<!--begin::Global Theme Bundle(used by all pages) -->
	<!--begin::Page Vendors(used by this page) -->
<script>
function SREACH_LAB() {
    // $("#kt_form").validate({
    //   ignore: ":hidden",
    //      rules: {
    //      P_ID: { required: !0 },
    //       },
    //   submitHandler: function () { 
        var P_ID = $('#P_ID').val();
        var FIRST_NAME = $('#FIRST_NAME').val();
        var SECOND_NAME = $('#SECOND_NAME').val();
        var THIRD_NAME = $('#THIRD_NAME').val();
        var LAST_NAME = $('#LAST_NAME').val();
        KTApp.block("#search_lab_portlet",{overlayColor:"#000000",type:"v2",state:"primary",message:"جاري جلب البيانات ..."});
        $.ajax({
            url: '<?php echo base_url(); ?>index.php/Covid_lab_result/GET_LAB_HISTORY',
            type: 'POST',
            data:
                {
                    random: Math.random(),
                    P_ID: P_ID,
                    FIRST_NAME: FIRST_NAME,
                    SECOND_NAME: SECOND_NAME,
                    THIRD_NAME: THIRD_NAME,
                    LAST_NAME: LAST_NAME
                },
            success: function (data) {
                 $('html,body').animate({ scrollTop: $("#search_lab_table").offset().top},'slow');
                $('#search_lab_list').html(data);
                KTApp.unblock("#search_lab_portlet");

            }
        });
//  }}); 
    };

</script>
