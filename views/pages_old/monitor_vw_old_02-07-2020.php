

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
										<span class="kt-subheader__desc">استعلام عام مرضى الكورونا</span>
										</div>
									<div class="kt-subheader__toolbar">
										<div class="kt-subheader__wrapper">
											<a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
												<span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
												<span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Aug 16</span>
												<i class="flaticon2-calendar-1"></i>
											</a>
											<a href="#" class="btn kt-subheader__btn-primary btn-icon">
												<i class="flaticon2-file"></i>
											</a>
											<a href="#" class="btn kt-subheader__btn-primary btn-icon">
												<i class="flaticon-download-1"></i>
											</a>
											<a href="#" class="btn kt-subheader__btn-primary btn-icon">
												<i class="flaticon2-fax"></i>
											</a>
											<a href="#" class="btn kt-subheader__btn-primary btn-icon">
												<i class="flaticon2-settings"></i>
											</a>
											<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="left">
												<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
															<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000" />
														</g>
													</svg>

													<!--<i class="flaticon2-plus"></i>-->
												</a>

											</div>
										</div>
									</div>
								</div>
		<!-- end:: Content Head -->

                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--mobile" id="corana_search_portlet">
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
				<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>رقم الهوية:</label>
					<input type="number" class="form-control kt-input" id="P_ID" name="P_ID" placeholder="" data-col-index="0">
				</div>
				<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>اسم المريض:</label>
					<input type="text" class="form-control kt-input" id="P_NAME" name="P_NAME" placeholder="" data-col-index="1">
				</div>
				<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>تصنيف النزيل:</label>
					<select class="form-control kt-select2" id="P_CLASS" name="P_CLASS" data-col-index="3">
                    <option value="">اختر</option>

                        <?php
                        foreach ($GET_QUARA_CLASS as $QUARA_CLASS) {
                        ?>
                        <option value="<?= $QUARA_CLASS['PCLASS_CD'] ?>"><?= $QUARA_CLASS['PCLASS_DESC'] ?></option>
                        <?php
                        }
                        ?>
					</select>
				</div>
                <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>مكان الحجر:</label>
                    <select class="form-control kt-select2" id="P_CENTER" name="P_CENTER" data-col-index="3">
                    <option value="">اختر</option>
                        <?php
                        foreach ($GET_QUARA_CENTER as $QUARA_CENTER) {
                        ?>
                        <option value="<?= $QUARA_CENTER['PCENTER_CD'] ?>"><?= $QUARA_CENTER['PCENTER_DESC'] ?></option>
                        <?php
                        }
                        ?>
					</select>
				</div>
			</div>

			<div class="row kt-margin-b-20">
				<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>فترة دخول الحجر:</label>
					<div class="input-daterange input-group" id="kt_datepicker">
						<input type="text" class="form-control kt-input kt_datepicker" name="P_QUAR_FROM_DATE" id="P_QUAR_FROM_DATE" placeholder="من تاريخ" value="" data-col-index="5"/>
						<div class="input-group-append">
							<span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
						</div>
						<input type="text" class="form-control kt-input kt_datepicker" name="P_QUAR_TO_DATE" id="P_QUAR_TO_DATE" placeholder="حتى تاريخ" value="" data-col-index="5"/>
					</div>
				</div>
				<!--<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
					<label>الحالة:</label>
					<select class="form-control kt-input" data-col-index="6">
						<option value="">اختر ...</option>
					</select>
				</div>//-->
				<div class="col-lg-4 kt-margin-b-10-tablet-and-mobile">
                    <label>الحالة:</label>
				 <div class="kt-radio-inline">
                     <label class="kt-radio">
                         <input type="radio" name="P_SHOW" id="P_SHOW_ALL" class="P_SHOW" value="1" checked="checked">  الكل
                         <span></span>
                     </label>
                     <label class="kt-radio">
                         <input type="radio" name="P_SHOW" class="P_SHOW" value="2"> منجز
                         <span></span>
                     </label>
                     <label class="kt-radio">
                         <input type="radio" name="P_SHOW" class="P_SHOW" value="3"> غير منجز
                         <span></span>
                     </label>
                  </div>
				</div>
			</div>

			<div class="kt-separator kt-separator--md kt-separator--dashed"></div>

			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary btn-brand--icon" onclick="CORONA_DATA_SEARCH();" id="corona_search_btn">
						<span>
							<i class="la la-search"></i>
							<span>بحث</span>
						</span>
					</button>
					&nbsp;&nbsp;
					<button class="btn btn-secondary btn-secondary--icon" onclick="RESET_SEARCH_FORM();" type="reset" id="kt_reset">
						<span>
							<i class="la la-close"></i>
							<span>تفريغ الحقول</span>
						</span>
					</button>
				</div>
			</div>
		</div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--mobile" id="corona_data_table">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-avatar"></i>
										</span>
                                <h3 class="kt-portlet__head-title">
                                    قائمة المحجورين
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                                    <div class="kt-portlet__head-actions">
                                        <!--<a href="<?php echo base_url("adminPanel/addUser");?>" class="btn btn-brand btn-elevate btn-icon-sm">
                                            <i class="la la-plus"></i>
إضافة مستخدم
                                        </a>//-->
<!--                                         <button type="button" class="btn btn-primary btn-bold btn-sm" data-toggle="modal" data-target="#kt_modal_1_2"> Launch Modal</button>//-->
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
                                    <th>رقم الهوية</th>
                                    <th>الاسم</th>
                                    <th>مكان الحجر</th>
                                    <th>تصنيف النزيل</th>
                                    <th>ت - بداية الحجر</th>
                                    <th>العينة الأولى</th>
                                     <th>العينة الأخيرة</th>
                                     <th>ت - المتوقع للخروج</th>
                                     <th>عدد الفحوصات</th>
                                     <th id="actions">إجراءات</th>
                                </tr>
                                </thead>
                                <tbody id="corona_list">
                             <!--<?php
                                     $i=1;
                                foreach ($GET_CORONA_DATA_SEARCH as $corona_data) {
                                    ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $corona_data['PCID'] ?></td>
                                        <td><?= $corona_data['PNAME'] ?></td>
                                        <td><?= $corona_data['PCENTER_DESC'] ?></td>
                                        <td><?= $corona_data['PCLASS_DESC'] ?></td>
                                        <td><?= $corona_data[''] ?></td>
                                        <td><?= $corona_data[''] ?></td>
                                        <td><?= $corona_data['PQU_IN_DT'] ?></td>
                                        <td><?= $corona_data['PQU_EXPECT_OUT_DT'] ?></td>
                                        <td><?= $corona_data[''] ?></td>
                                        <td class="kt-datatable__cell">
                                            <span style="overflow: visible; position: relative; width: 110px;">
                                            <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a>
<!--                                            <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-trash"></i></a>//-->
                                            </span>
                                        </td>
                                    </tr>
                                    <?php
                                         $i++;
                                }
                                ?>//-->

                                   <!-- <tr>
                                        <td>1</td>
                                        <td>015236589</td>
                                        <td>محمد ابراهيم خالد الحلو</td>
                                        <td><a href="editUser/"></a>فندق المشتل</td>
                                        <td>مخالط</td>
                                        <td>25</td>
                                        <td>54</td>
                                        <td>10/05/2020</td>
                                        <td>30/05/2020</td>
                                        <td>3</td>


                                        <td class="">	<a title="تعديل" href="editUser/" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a><a title="حذف" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-trash"></i></a></td>

                                    </tr>//-->
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

<!--begin::Modal-->
<div class="modal fade" id="kt_modal_1_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">سجل الفحوصات</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
<!--begin::Section-->
				<div class="kt-section">
					<span class="kt-section__info">
						سجل فحوصات المختبر للمريض
<!--                        مهند منتصر ممدوح بصل	//-->
					</span>
					<div class="kt-section__content">
						<table class="table ">
						  	<thead class="thead-light">
						    	<tr>
						      		<th>#</th>
						      		<th>رقم الهوية</th>
						      		<th>رقم العينة</th>
						      		<th>تاريخ سحب العينة</th>
<!--                                    <th>تاريخ النتيجة</th>//-->
						    	</tr>
						  	</thead>
						  	<tbody id="lab_history_list">
						  	</tbody>
						</table>
					</div>
				</div>
				<!--end::Section-->    
            </div>

           <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>//-->
        </div>
    </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" id="kt_modal_1_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">سجل الحركات</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
<!--begin::Section-->
				<div class="kt-section">
					<span class="kt-section__info">
						سجل حركات المريض
<!--                        مهند منتصر ممدوح بصل	//-->
					</span>
					<div class="kt-section__content">
						<table class="table ">
						  	<thead class="thead-light">
						    	<tr>
						      		<th>#</th>
						      		<th>رقم الهوية</th>
						      		<th>الحركة</th>
                                    <th>مكان الإنتقال</th>
                                    <th>الطابق</th>
						      		<th>رقم الغرفة</th>
                                    <th>تاريخ الحركة</th>
						    	</tr>
						  	</thead>
						  	<tbody id="move_history_list">
						  	</tbody>
						</table>
					</div>
				</div>
				<!--end::Section-->    
            </div>

           <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>//-->
        </div>
    </div>
</div>
<!--end::Modal-->

<script src="<?php echo base_url("assets/custom_js/monitor_corona.js");?>" type="text/javascript"></script>