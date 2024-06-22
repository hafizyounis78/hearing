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
								</div>
		<!-- end:: Content Head -->

                    	<!-- begin:: Content -->

<!-- end:: Content -->
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--mobile" id="user_list_table">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-avatar"></i>
										</span>
                                <h3 class="kt-portlet__head-title">
                                    قائمة المستخدمين
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                                    <div class="kt-portlet__head-actions">
                                       <a href="<?php echo base_url("index.php/user_cont/userinsert_vw");?>" class="btn btn-brand btn-elevate btn-icon-sm">
                                            <i class="la la-plus"></i>
إضافة مستخدم
                                        </a>
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
                                    <th>اسم المستخدم</th>
                                    <th>الرقم الوظيفي</th>
                                    <th>المسمى الوظيفي</th>
                                   <!-- <th>المركز</th>
                                    <th>مركز المسؤولية</th>-->
                                    
                                    <th>جراءات</th>
                                </tr>
                                </thead>
                                <tbody id="user_list">

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
 <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">تعديل بيانات المستخدم</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="la la-remove"></span>
                                </button>
                            </div>
                            <form class="kt-form kt-form--fit kt-form--label-left" action="javascript:;">
                                <div class="modal-body">
                                  <div class="kt-scroll-modal" data-scroll="true">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">رقم الهوية</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="number" value="" id="P_RTC_USER_ID_MODAL" name="P_RTC_USER_ID_MODAL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">الرقم الوظيفي</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="number" id="P_EMP_NUM_MODAL" name="P_EMP_NUM_MODAL" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">الاسم</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="text" value="" id="P_EMP_NAME_MODAL" name="P_EMP_NAME_MODAL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">المسمى الوظيفي</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <select class="form-control kt-select2" id="P_TITLE_ID_MODAL" name="P_TITLE_ID_MODAL">
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
                                    </div>
                             <!--       <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">المركز</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <select class="form-control kt-select2" id="P_RTC_CENTER_ID_MODAL" name="P_RTC_CENTER_ID_MODAL">
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
                                    </div>
                                       <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">مركز المسؤولية</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <select class="form-control kt-select2" id="P_USER_LOC_ID_MODAL" name="P_USER_LOC_ID_MODAL">
                                                <option value>اختر ...</option>
                                               <?php
                                                foreach ($GET_USER_LOC_PR as $GET_USER_LOC_PR) {
                                                ?>
                                                <option value="<?= $GET_USER_LOC_PR['ID'] ?>"><?= $GET_USER_LOC_PR['LOC_NAME_AR'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>-->
                                  </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="row pull-left">
                                        <div class="col-lg-12 col-xl-12">

                                        <span id="action_btn">
                                        <button type="" onclick="RTC_USER_UPDATE();" class="btn btn-primary">حفظ</button>&nbsp;
                                        </span>
                                          <button type="reset" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
 <!--end::Modal-->



<script src="<?php echo base_url("assets/custom_js/user_corona.js");?>" type="text/javascript"></script>
<script>
jQuery(document).ready(function () {
    DatatableUserList.init();
    GET_USER_LIST();
});
</script>
