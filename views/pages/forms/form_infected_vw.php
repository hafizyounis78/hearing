<link href="<?php echo base_url("assets/panel/assets/css/pages/wizard/wizard-1.rtl.css");?>" rel="stylesheet" type="text/css" />
<style>
.kt-app .kt-app__aside{
    width:360px;
}
    .kt-portlet__body.kt-portlet__body--fit-y .kt-widget{
        margin-top:30px;
    }
/*     .form-group{
        margin-bottom: 1rem;
        } */
    .kt-radio{
        margin-bottom: 0;
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
										<span class="kt-subheader__desc">نموذج المصابين</span>
										</div>

								</div>

								<!-- end:: Content Head -->
                                        <!--begin::Portlet-->
                   <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
    <!--Begin:: App Aside Mobile Toggle-->
    <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
        <i class="la la-close"></i>
    </button>
    <!--End:: App Aside Mobile Toggle-->

                           <!--Begin:: App Aside-->
    <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
        <!--begin:: Widgets/Applications/User/Profile1-->
<div class="kt-portlet kt-portlet--height-fluid-">
    <div class="kt-portlet__body kt-portlet__body--fit-y">
        <!--begin::Widget -->
        <div class="kt-widget kt-widget--user-profile-1">
            <?php
            $this->load->view('include/profile_aside');
            ?>
            <div class="kt-widget__footer">
                <a href="<?php echo base_url('index.php/forms_cont/patient_forms_vw'); ?>" class="btn btn-label-danger btn-lg btn-upper" style="width: 100%">عودة لشاشة الاستعلام</a>
            </div>
        </div>
        <!--end::Widget -->
    </div>
</div>
<!--end:: Widgets/Applications/User/Profile1-->
    </div>
    <!--End:: App Aside-->

    <!--Begin:: App Content-->
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet" id="VITAL_SIGNS_PORTLAT">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">نموذج المصابين <small> (قائمة الأسئلة والمعلومات التي يجب جمعها من المريض في العزل المنزلي)</small>   </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-label-brand btn-sm btn-icon btn-icon-md">
                                        <i class="la la-medkit"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="kt-form kt-form--label-right kt-form-vital" action="javascript:;" id="kt-form" >
                 <input type="hidden" class="" name="PERSON_SERIAL" id="PERSON_SERIAL" value="<?php echo $GET_PERSON_INFO[0]['PERSON_SERIAL_ID']; ?>">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <!--<div class="row">-->
                                        <!--<label class="col-xl-3"></label>-->
                                        <!--<div class="col-lg-9 col-xl-6">-->
                                            <!--<h3 class="kt-section__title kt-section__title-sm">Account:</h3>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <div class="form-group">
                                        <label>1. هل هناك أعراض مرضية ظهرت خلال 24 ساعة الماضية؟</label>
                                        <div class="kt-radio-inline">
                                            <label class="kt-radio kt-radio--brand">
                                                <input type="radio" class="QUESTION1" name="QUESTION1" id="QUESTION1" value="1">نعم
                                                <span></span>
                                            </label>
                                            <label class="kt-radio kt-radio--brand">
                                                <input type="radio" class="QUESTION1" name="QUESTION1" id="QUESTION1" value="0">لا
                                                <span></span>
                                            </label>
						</div>
					</div>
                                    <div id="Q1_DETAILS" style="margin-bottom: 2rem; display:none;">
                                    <div class="form-group row" style="margin-bottom: 5px;">
                                        <label class="col-3 col-form-label kt-radio" style="text-align:right">- حرارة</label>
                                        <div class="col-3">
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION1_TEMPERATURE" id="QUESTION1_TEMPERATURE" class="QUESTION1_TEMPERATURE" value="1"> نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION1_TEMPERATURE" id="QUESTION1_TEMPERATURE" class="QUESTION1_TEMPERATURE" value="0"> لا
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                                <input class="form-control" type="text" value="" style="display:none" id="QUESTION1_TEMPERATURE_NUM" name="QUESTION1_TEMPERATURE_NUM" placeholder="أدخل درجة الحرارة">
                                            </div>
                                    </div>
                                    <div class="form-group row" style="margin-bottom: 5px;">
                                        <label class="col-3 col-form-label kt-radio" style="text-align:right">- سعال</label>
                                        <div class="col-3">
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION1_COUGH" id="QUESTION1_COUGH" class="QUESTION1_COUGH" value="1" > نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION1_COUGH" id="QUESTION1_COUGH" class="QUESTION1_COUGH" value="0"> لا
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row" style="margin-bottom: 5px;">
                                        <label class="col-3 col-form-label kt-radio" style="text-align:right">- آلام في الحلق</label>
                                        <div class="col-3">
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION1_THROAT" id="QUESTION1_THROAT" class="QUESTION1_THROAT" value="1" > نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION1_THROAT" id="QUESTION1_THROAT" class="QUESTION1_THROAT" value="0"> لا
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row" style="margin-bottom: 5px;">
                                        <label class="col-3 col-form-label kt-radio" style="text-align:right">- فقدان حاسة الشم والتذوق</label>
                                        <div class="col-3">
                                            <div class="kt-radio-inline">
                                               <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION1_SMELLING_TASTING" id="QUESTION1_SMELLING_TASTING" class="QUESTION1_SMELLING_TASTING" value="1" > نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION1_SMELLING_TASTING" id="QUESTION1_SMELLING_TASTING" class="QUESTION1_SMELLING_TASTING" value="0"> لا
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row" style="margin-bottom: 5px;">
                                        <label class="col-3 col-form-label kt-radio" style="text-align:right">- أعراض أخرى </label>
                                        <div class="col-3">
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION1_OTHERS" id="QUESTION1_OTHERS" class="QUESTION1_OTHERS" value="1"> نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION1_OTHERS" id="QUESTION1_OTHERS" class="QUESTION1_OTHERS" value="0"> لا
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                  <input class="form-control" style="display:none" type="text" value="" id="QUESTION1_OTHERS_SYNDROME" name="QUESTION1_OTHERS_SYNDROME" placeholder="أدخل الأعراض الأخرى">
                                        </div>

                                    </div>
                                    </div>
                                    
                         <div class="form-group">
                                        <label>2. هل هناك صعوبة في التنفس؟</label>
                                        <div class="kt-radio-inline">
                                           <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION2_BREATHE" id="QUESTION2_BREATHE" class="QUESTION2_BREATHE" value="1" > نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION2_BREATHE" id="QUESTION2_BREATHE" class="QUESTION2_BREATHE" value="0"> لا
                                                    <span></span>
                                                </label>
                                            <div class="col-4">
                                                <input class="form-control" style="display:none" type="number" value="" id="QUESTION2_COUNT_OF_BREATHE" name="QUESTION2_COUNT_OF_BREATHE" placeholder="عدد مرات التنفس أكثر من 25 في الدقيقة">
                                            </div>

						</div>
					</div>
                                    <div class="form-group">
                                        <label>3. هل هناك زيادة في نبضات القلب؟</label>
                                        <div class="kt-radio-inline">
                                           <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION4_PULS" id="QUESTION4_PULS" class="QUESTION4_PULS" value="1" > نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION4_PULS" id="QUESTION4_PULS" class="QUESTION4_PULS" value="0"> لا
                                                    <span></span>
                                                </label>
                                            <div class="col-4">
                                                <input class="form-control" style="display:none" type="number" value="" id="QUESTION4_PULS_COUNT" name="QUESTION4_PULS_COUNT" placeholder="عدد نبضات القلب أكثر من 120 في الدقيقة">
                                            </div>

						</div>
					</div>
                                      <div class="form-group">
                                        <label>4. هل هناك مخالطين معزولين في نفس المنزل؟</label>
                                        <div class="kt-radio-inline">
                                             <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION3_CONTACT_PERSONS" id="QUESTION3_CONTACT_PERSONS" class="QUESTION3_CONTACT_PERSONS" value="1" > نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION3_CONTACT_PERSONS" id="QUESTION3_CONTACT_PERSONS" class="QUESTION3_CONTACT_PERSONS" value="0"> لا
                                                    <span></span>
                                                </label>
                                            <div class="col-4">
                                                <input class="form-control" style="display:none" type="number" value="" id="QUESTION3_CONTACT_PERSONS_COUNT" name="QUESTION3_CONTACT_PERSONS_COUNT" placeholder="عدد المخالطين">
                                            </div>

						</div>
					</div>
                                    
                                   <div class="form-group">
                                        <label>5. هل ظهرت أعراض على أحد من المخالطين؟</label>
                                        <div class="kt-radio-inline">
                                             <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION3_CP_HAVE_SYNDROME" id="QUESTION3_CP_HAVE_SYNDROME" class="QUESTION3_CP_HAVE_SYNDROME" value="1" > نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION3_CP_HAVE_SYNDROME" id="QUESTION3_CP_HAVE_SYNDROME" class="QUESTION3_CP_HAVE_SYNDROME" value="0"> لا
                                                    <span></span>
                                                </label>

						</div>

					</div>
                                  <div id="kt_repeater_3" style="margin-bottom:2rem; display:none">
                            <div class="form-group  row" style="margin-bottom:0;">
                                <label  class="col-2 col-form-label text-left">أسماء المخالطين : </label>
                                <div data-repeater-list="" class="col-lg-9">                               
                                    <div data-repeater-item class="row kt-margin-b-10">
                                        <div class="col-5">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control form-control-danger contact_name" placeholder="الاسم" id="contact_name" name="contact_name">
                                            </div>
                                        </div>  
                                        <div class="col-2">
                                            <a href="javascript:;" data-repeater-delete="" class="btn btn-danger btn-icon">
                                                <i class="la la-remove"></i>
                                            </a>
                                        </div>                     
                                    </div>                                                        
                                </div>                 
                            </div>
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col">
                                    <div data-repeater-create="" class="btn btn btn-primary">
                                        <span>
                                            <i class="la la-plus"></i>
                                            <span>إضافة</span>
                                        </span>
                                    </div>
                                </div>
                            </div> 
                        </div>     

                                    <div class="form-group">
                                        <label>6. هل تم تزويدكم بحقيبة مستلزمات العزل؟</label>
                                        <div class="kt-radio-inline">
                                           <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION3_SAFETY_INSTRUCTIONS" id="QUESTION3_SAFETY_INSTRUCTIONS" class="QUESTION3_SAFETY_INSTRUCTIONS" value="1" > نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION3_SAFETY_INSTRUCTIONS" id="QUESTION3_SAFETY_INSTRUCTIONS" class="QUESTION3_SAFETY_INSTRUCTIONS" value="0"> لا
                                                    <span></span>
                                                </label>


                                        </div>

                                    </div>

                                     <div class="form-group">
                                        <label>7. هل تلتزم بإجراءات السلامة والوقاية؟</label>
                                        <div class="kt-radio-inline">
                                            <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION3_SAFETY_MEASURES" id="QUESTION3_SAFETY_MEASURES" class="QUESTION3_SAFETY_MEASURES" value="1" > نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="QUESTION3_SAFETY_MEASURES" id="QUESTION3_SAFETY_MEASURES" class="QUESTION3_SAFETY_MEASURES" value="0"> لا
                                                    <span></span>
                                                </label>


                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label>8. التوصيات</label>
                                        <div class="kt-radio-inline row">
                                          <div class="col-4">
					                    <select name="RECOMMENDATION" id="RECOMMENDATION" class="form-control kt-select2" tabindex="-1" aria-hidden="true">
											<option value="">اختر</option>
											        <?php
                                                foreach ($GET_RECOMMEND_LIST_PR as $GET_RECOMMEND_LIST_PR) {
                                                ?>
                                                <option value="<?= $GET_RECOMMEND_LIST_PR['ID'] ?>"><?= $GET_RECOMMEND_LIST_PR['RECOMMEND_DESC'] ?></option>
                                                <?php
                                                }
                                                ?>

										</select>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" style="" type="text" value="" id="RECOMMEND_DETAILS" name="RECOMMEND_DETAILS" placeholder=" تفاصيل ">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 col-xl-9">
                                        <span id="action_btn">
                                        <button type="" onclick="INSERT_P_QUESTIONS_ANSWERS();" class="btn btn-primary">حفظ</button>&nbsp;
                                        </span>
                                       <button class="btn btn-secondary btn-secondary--icon" onclick="" type="reset" id="kt_reset">
						<span>
							<i class="la la-close"></i>
							<span>تفريغ الحقول</span>
						</span>
					</button>
                                    </div>
                                     <div class="col-lg-3 col-xl-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End:: App Content-->

</div>
    </div>
    <!-- end:: Content -->

    </div>
</div>
</div>
<script src="<?php echo base_url("assets/panel/assets/js/pages/crud/forms/widgets/form-repeater.js");?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/custom_js/forms_corona.js");?>" type="text/javascript"></script>