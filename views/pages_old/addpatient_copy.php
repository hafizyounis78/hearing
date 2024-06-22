<link href="<?php echo base_url("assets/panel/assets/css/pages/wizard/wizard-1.rtl.css"); ?>" rel="stylesheet"
      type="text/css"/>

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
                        <span class="kt-subheader__desc">ادخال بيانات مرضى الكورونا</span>
                    </div>

                </div>

                <!-- end:: Content Head -->
                <!--begin::Portlet-->
                <div class="kt-portlet kt-portlet--mobile" id="corana_search_portlet">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-avatar"></i>
										</span>
                            <h3 class="kt-portlet__head-title">
                                ادخال بيانات مرضى الكورونا
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                             id="kt_content">

                            <!-- begin:: Content -->

                            <div class="kt-grid kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1"
                                 data-ktwizard-state="step-first">
                                <div class="kt-grid__item">
                                    <!--begin: Form Wizard Nav -->
                                    <div class="kt-wizard-v1__nav">
                                        <div class="kt-wizard-v1__nav-items kt-wizard-v1__nav-items--clickable">
                                            <!--doc: Replace A tag with SPAN tag to disable the step link click -->
                                            <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step"
                                                 data-ktwizard-state="current">
                                                <div class="kt-wizard-v1__nav-body">
                                                    <div class="kt-wizard-v1__nav-icon">
                                                        <!--									<i class="flaticon-bus-stop"></i>//-->
                                                        <img height="55px"
                                                             src="<?php echo base_url("assets/panel/assets/icons/coronavirus.svg"); ?>"/>
                                                    </div>
                                                    <div class="kt-wizard-v1__nav-label">
                                                        1. البيانات الشخصية
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
                                                <div class="kt-wizard-v1__nav-body">
                                                    <div class="kt-wizard-v1__nav-icon">
                                                        <!--									<i class="flaticon-list"></i>//-->
                                                        <img height="55px"
                                                             src="<?php echo base_url("assets/panel/assets/icons/hotel.svg"); ?>"/>
                                                    </div>
                                                    <div class="kt-wizard-v1__nav-label">
                                                        2. بيانات الحجر الصحي
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
                                                <div class="kt-wizard-v1__nav-body">
                                                    <div class="kt-wizard-v1__nav-icon">
                                                        <!--									<i class="flaticon-responsive"></i>//-->
                                                        <img height="55px"
                                                             src="<?php echo base_url("assets/panel/assets/icons/covid.svg"); ?>"/>
                                                    </div>
                                                    <div class="kt-wizard-v1__nav-label">
                                                        3. المعلومات الطبية
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
                                                <div class="kt-wizard-v1__nav-body">
                                                    <div class="kt-wizard-v1__nav-icon">
                                                        <!--									<i class="flaticon-truck"></i>//-->
                                                        <img height="55px"
                                                             src="<?php echo base_url("assets/panel/assets/icons/lab.svg"); ?>"/>

                                                    </div>
                                                    <div class="kt-wizard-v1__nav-label">
                                                        4. معلومات المختبر
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
                                                <div class="kt-wizard-v1__nav-body">
                                                    <div class="kt-wizard-v1__nav-icon">
                                                        <!--									<i class="flaticon-globe"></i>//-->
                                                        <img height="55px"
                                                             src="<?php echo base_url("assets/panel/assets/icons/high-temperature.svg"); ?>"/>
                                                    </div>
                                                    <div class="kt-wizard-v1__nav-label">
                                                        5. حالة المريض
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
                                                <div class="kt-wizard-v1__nav-body">
                                                    <div class="kt-wizard-v1__nav-icon">
                                                        <!--									<i class="flaticon-globe"></i>//-->
                                                        <img height="55px"
                                                             src="<?php echo base_url("assets/panel/assets/icons/hospital-bed.svg"); ?>"/>
                                                    </div>
                                                    <div class="kt-wizard-v1__nav-label">
                                                        6. متابعة الحجر الصحي
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Form Wizard Nav -->

                                </div>
                                <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
                                    <!--begin: Form Wizard Form-->
                                    <form class="kt-form" id="kt_form">
                                        <!--begin: Form Wizard Step 1-->
                                        <div class="kt-wizard-v1__content" data-ktwizard-type="step-content"
                                             data-ktwizard-state="current">
                                            <div class="kt-heading kt-heading--md">البيانات العام:</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v1__form">
                                                    <div class="form-group row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group row">
                                                                <label for="example-text-input"
                                                                       class="col-3 col-form-label">نوع
                                                                    الوثيقة: </label>
                                                                <div class="col-9">
                                                                    <select name="country" class="form-control">
                                                                        <option value="">اختر</option>
                                                                        <option value="1">هوية</option>
                                                                        <option value="2">جواز سفر</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group row">
                                                                <label for="example-text-input"
                                                                       class="col-3 col-form-label">رقم
                                                                    الوثيقة: </label>
                                                                <div class="col-9">
                                                                    <input class="form-control" type="text"
                                                                           value="800054215" id="example-text-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group row">
                                                                <label for="example-text-input"
                                                                       class="col-3 col-form-label">الجنسية: </label>
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
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-8">
                                                            <div class="form-group row">
                                                                <label for="example-text-input"
                                                                       class="col-2 col-form-label">الاسم
                                                                    رباعي: </label>
                                                                <div class="col-10">
                                                                    <div class="form-group row">
                                                                        <div class="col-3">
                                                                            <input type="text" class="form-control"
                                                                                   disabled placeholder="">
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <input type="text" class="form-control"
                                                                                   disabled placeholder="">
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <input type="text" class="form-control"
                                                                                   disabled placeholder="">
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <input type="text" class="form-control"
                                                                                   disabled placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group row">
                                                                <label for="example-text-input"
                                                                       class="col-3 col-form-label">تاريخ
                                                                    الميلاد: </label>
                                                                <div class="col-9">
                                                                    <input type="text"
                                                                           class="form-control kt_datetimepicker" id=""
                                                                           readonly placeholder=""/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-2">
                                                            <label>الاسم:</label>
                                                            <input type="text" class="form-control" disabled
                                                                   placeholder="">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="">الاب:</label>
                                                            <input type="text" class="form-control" disabled
                                                                   placeholder="">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label>الجد:</label>
                                                            <input type="text" class="form-control" disabled
                                                                   placeholder="">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label>العائلة:</label>
                                                            <input type="text" class="form-control" disabled
                                                                   placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                                    <div class="form-group">
                                                        <label>Address Line 1</label>
                                                        <input type="text" class="form-control" name="address1"
                                                               placeholder="Address Line 1" value="Address Line 1">
                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address Line 2</label>
                                                        <input type="text" class="form-control" name="address2"
                                                               placeholder="Address Line 2" value="Address Line 2">
                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Postcode</label>
                                                                <input type="text" class="form-control" name="postcode"
                                                                       placeholder="Postcode" value="3000">
                                                                <span class="form-text text-muted">Please enter your Postcode.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>City</label>
                                                                <input type="text" class="form-control" name="city"
                                                                       placeholder="City" value="Melbourne">
                                                                <span class="form-text text-muted">Please enter your City.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>State</label>
                                                                <input type="text" class="form-control" name="state"
                                                                       placeholder="State" value="VIC">
                                                                <span class="form-text text-muted">Please enter your Postcode.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Country:</label>
                                                                <select name="country" class="form-control">
                                                                    <option value="">Select</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AX">Åland Islands</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AQ">Antarctica</option>
                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AU" selected>Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia, Plurinational State of
                                                                    </option>
                                                                    <option value="BQ">Bonaire, Sint Eustatius and
                                                                        Saba
                                                                    </option>
                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BV">Bouvet Island</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean Territory
                                                                    </option>
                                                                    <option value="BN">Brunei Darussalam</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo</option>
                                                                    <option value="CD">Congo, the Democratic Republic of
                                                                        the
                                                                    </option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="CI">Côte d'Ivoire</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CW">Curaçao</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FK">Falkland Islands (Malvinas)
                                                                    </option>
                                                                    <option value="FO">Faroe Islands</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GF">French Guiana</option>
                                                                    <option value="PF">French Polynesia</option>
                                                                    <option value="TF">French Southern Territories
                                                                    </option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GG">Guernsey</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HM">Heard Island and McDonald
                                                                        Islands
                                                                    </option>
                                                                    <option value="VA">Holy See (Vatican City State)
                                                                    </option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran, Islamic Republic of
                                                                    </option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IM">Isle of Man</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JE">Jersey</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KP">Korea, Democratic People's
                                                                        Republic of
                                                                    </option>
                                                                    <option value="KR">Korea, Republic of</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Lao People's Democratic
                                                                        Republic
                                                                    </option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macao</option>
                                                                    <option value="MK">Macedonia, the former Yugoslav
                                                                        Republic of
                                                                    </option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MH">Marshall Islands</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="FM">Micronesia, Federated States of
                                                                    </option>
                                                                    <option value="MD">Moldova, Republic of</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PW">Palau</option>
                                                                    <option value="PS">Palestinian Territory, Occupied
                                                                    </option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Réunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russian Federation</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="BL">Saint Barthélemy</option>
                                                                    <option value="SH">Saint Helena, Ascension and
                                                                        Tristan da Cunha
                                                                    </option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="MF">Saint Martin (French part)
                                                                    </option>
                                                                    <option value="PM">Saint Pierre and Miquelon
                                                                    </option>
                                                                    <option value="VC">Saint Vincent and the
                                                                        Grenadines
                                                                    </option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="ST">Sao Tome and Principe</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SX">Sint Maarten (Dutch part)
                                                                    </option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="GS">South Georgia and the South
                                                                        Sandwich Islands
                                                                    </option>
                                                                    <option value="SS">South Sudan</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="SY">Syrian Arab Republic</option>
                                                                    <option value="TW">Taiwan, Province of China
                                                                    </option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania, United Republic of
                                                                    </option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TL">Timor-Leste</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks and Caicos Islands</option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom</option>
                                                                    <option value="US">United States</option>
                                                                    <option value="UM">United States Minor Outlying
                                                                        Islands
                                                                    </option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VE">Venezuela, Bolivarian Republic
                                                                        of
                                                                    </option>
                                                                    <option value="VN">Viet Nam</option>
                                                                    <option value="VG">Virgin Islands, British</option>
                                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                                    <option value="WF">Wallis and Futuna</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Form Wizard Step 1-->

                                        <!--begin: Form Wizard Step 2-->
                                        <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                            <div class="kt-heading kt-heading--md">Enter the Details of your Delivery
                                            </div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v1__form">
                                                    <div class="form-group">
                                                        <label>Package Details</label>
                                                        <input type="text" class="form-control" name="package"
                                                               placeholder="Package Details"
                                                               value="Complete Workstation (Monitor, Computer, Keyboard & Mouse)">
                                                        <span class="form-text text-muted">Please enter your Pakcage Details.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Package Weight in KG</label>
                                                        <input type="text" class="form-control" name="weight"
                                                               placeholder="Package Weight" value="25">
                                                        <span class="form-text text-muted">Please enter your Package Weight in KG.</span>
                                                    </div>
                                                    <div class="kt-wizard-v1__form-label">Package Dimensions</div>
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Package Width in CM</label>
                                                                <input type="text" class="form-control" name="width"
                                                                       placeholder="Package Width" value="110">
                                                                <span class="form-text text-muted">Please enter your Package Width in CM.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Package Height in CM</label>
                                                                <input type="text" class="form-control" name="height"
                                                                       placeholder="Package Length" value="90">
                                                                <span class="form-text text-muted">Please enter your Package Height in CM.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Package Length in CM</label>
                                                                <input type="text" class="form-control" name="length"
                                                                       placeholder="Package Length" value="150">
                                                                <span class="form-text text-muted">Please enter your Package Length in CM.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Form Wizard Step 2-->

                                        <!--begin: Form Wizard Step 3-->
                                        <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                            <div class="kt-heading kt-heading--md">Select your Services</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v1__form">
                                                    <div class="form-group">
                                                        <label>Delivery Type</label>
                                                        <select name="delivery" class="form-control">
                                                            <option value="">Select a Service Type Option</option>
                                                            <option value="overnight" selected>Overnight Delivery
                                                                (within 48 hours)
                                                            </option>
                                                            <option value="express">Express Delivery (within 5 working
                                                                days)
                                                            </option>
                                                            <option value="basic">Basic Delivery (within 5 - 10 working
                                                                days)
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Packaging Type</label>
                                                        <select name="packaging" class="form-control">
                                                            <option value="">Select a Packaging Type Option</option>
                                                            <option value="regular" selected>Regular Packaging</option>
                                                            <option value="oversized">Oversized Packaging</option>
                                                            <option value="fragile">Fragile Packaging</option>
                                                            <option value="frozen">Frozen Packaging</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Preferred Delivery Window</label>
                                                        <select name="preferreddelivery" class="form-control">
                                                            <option value="">Select a Preferred Delivery Option</option>
                                                            <option value="morning" selected>Morning Delivery (8:00AM -
                                                                11:00AM)
                                                            </option>
                                                            <option value="afternoon">Afternoon Delivery (11:00AM -
                                                                3:00PM)
                                                            </option>
                                                            <option value="evening">Evening Delivery (3:00PM - 7:00PM)
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Form Wizard Step 3-->

                                        <!--begin: Form Wizard Step 4-->
                                        <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                            <div class="kt-heading kt-heading--md">Setup Your Delivery Location</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v1__form">
                                                    <div class="form-group">
                                                        <label>Address Line 1</label>
                                                        <input type="text" class="form-control" name="locaddress1"
                                                               placeholder="Address Line 1" value="Address Line 1">
                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address Line 2</label>
                                                        <input type="text" class="form-control" name="locaddress2"
                                                               placeholder="Address Line 2" value="Address Line 2">
                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Postcode</label>
                                                                <input type="text" class="form-control"
                                                                       name="locpostcode" placeholder="Postcode"
                                                                       value="3072">
                                                                <span class="form-text text-muted">Please enter your Postcode.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>City</label>
                                                                <input type="text" class="form-control" name="loccity"
                                                                       placeholder="City" value="Preston">
                                                                <span class="form-text text-muted">Please enter your City.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>State</label>
                                                                <input type="text" class="form-control" name="locstate"
                                                                       placeholder="State" value="VIC">
                                                                <span class="form-text text-muted">Please enter your Postcode.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Country:</label>
                                                                <select name="loccountry" class="form-control">
                                                                    <option value="">Select</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AX">Åland Islands</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AQ">Antarctica</option>
                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AU" selected>Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia, Plurinational State of
                                                                    </option>
                                                                    <option value="BQ">Bonaire, Sint Eustatius and
                                                                        Saba
                                                                    </option>
                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BV">Bouvet Island</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean Territory
                                                                    </option>
                                                                    <option value="BN">Brunei Darussalam</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo</option>
                                                                    <option value="CD">Congo, the Democratic Republic of
                                                                        the
                                                                    </option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="CI">Côte d'Ivoire</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CW">Curaçao</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FK">Falkland Islands (Malvinas)
                                                                    </option>
                                                                    <option value="FO">Faroe Islands</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GF">French Guiana</option>
                                                                    <option value="PF">French Polynesia</option>
                                                                    <option value="TF">French Southern Territories
                                                                    </option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GG">Guernsey</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HM">Heard Island and McDonald
                                                                        Islands
                                                                    </option>
                                                                    <option value="VA">Holy See (Vatican City State)
                                                                    </option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran, Islamic Republic of
                                                                    </option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IM">Isle of Man</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JE">Jersey</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KP">Korea, Democratic People's
                                                                        Republic of
                                                                    </option>
                                                                    <option value="KR">Korea, Republic of</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Lao People's Democratic
                                                                        Republic
                                                                    </option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macao</option>
                                                                    <option value="MK">Macedonia, the former Yugoslav
                                                                        Republic of
                                                                    </option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MH">Marshall Islands</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="FM">Micronesia, Federated States of
                                                                    </option>
                                                                    <option value="MD">Moldova, Republic of</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PW">Palau</option>
                                                                    <option value="PS">Palestinian Territory, Occupied
                                                                    </option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Réunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russian Federation</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="BL">Saint Barthélemy</option>
                                                                    <option value="SH">Saint Helena, Ascension and
                                                                        Tristan da Cunha
                                                                    </option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="MF">Saint Martin (French part)
                                                                    </option>
                                                                    <option value="PM">Saint Pierre and Miquelon
                                                                    </option>
                                                                    <option value="VC">Saint Vincent and the
                                                                        Grenadines
                                                                    </option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="ST">Sao Tome and Principe</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SX">Sint Maarten (Dutch part)
                                                                    </option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="GS">South Georgia and the South
                                                                        Sandwich Islands
                                                                    </option>
                                                                    <option value="SS">South Sudan</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="SY">Syrian Arab Republic</option>
                                                                    <option value="TW">Taiwan, Province of China
                                                                    </option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania, United Republic of
                                                                    </option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TL">Timor-Leste</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks and Caicos Islands</option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom</option>
                                                                    <option value="US">United States</option>
                                                                    <option value="UM">United States Minor Outlying
                                                                        Islands
                                                                    </option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VE">Venezuela, Bolivarian Republic
                                                                        of
                                                                    </option>
                                                                    <option value="VN">Viet Nam</option>
                                                                    <option value="VG">Virgin Islands, British</option>
                                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                                    <option value="WF">Wallis and Futuna</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Form Wizard Step 4-->

                                        <!--begin: Form Wizard Step 5-->
                                        <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                            <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v1__review">
                                                    <div class="kt-wizard-v1__review-item">
                                                        <div class="kt-wizard-v1__review-title">
                                                            Current Address
                                                        </div>
                                                        <div class="kt-wizard-v1__review-content">
                                                            Address Line 1<br/>
                                                            Address Line 2<br/>
                                                            Melbourne 3000, VIC, Australia
                                                        </div>
                                                    </div>
                                                    <div class="kt-wizard-v1__review-item">
                                                        <div class="kt-wizard-v1__review-title">
                                                            Delivery Details
                                                        </div>
                                                        <div class="kt-wizard-v1__review-content">
                                                            Package: Complete Workstation (Monitor, Computer, Keyboard &
                                                            Mouse)<br/>
                                                            Weight: 25kg<br/>
                                                            Dimensions: 110cm (w) x 90cm (h) x 150cm (L)
                                                        </div>
                                                    </div>
                                                    <div class="kt-wizard-v1__review-item">
                                                        <div class="kt-wizard-v1__review-title">
                                                            Delivery Service Type
                                                        </div>
                                                        <div class="kt-wizard-v1__review-content">
                                                            Overnight Delivery with Regular Packaging<br/>
                                                            Preferred Morning (8:00AM - 11:00AM) Delivery
                                                        </div>
                                                    </div>
                                                    <div class="kt-wizard-v1__review-item">
                                                        <div class="kt-wizard-v1__review-title">
                                                            Delivery Address
                                                        </div>
                                                        <div class="kt-wizard-v1__review-content">
                                                            Address Line 1<br/>
                                                            Address Line 2<br/>
                                                            Preston 3072, VIC, Australia
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Form Wizard Step 5-->

                                        <!--begin: Form Actions -->
                                        <div class="kt-form__actions">
                                            <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                                    data-ktwizard-type="action-prev">
                                                السابق
                                            </button>
                                            <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                                    data-ktwizard-type="action-submit">
                                                إضافة
                                            </button>
                                            <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                                    data-ktwizard-type="action-next">
                                                التالي
                                            </button>
                                        </div>
                                        <!--end: Form Actions -->
                                    </form>
                                    <!--end: Form Wizard Form-->
                                </div>
                            </div>

                            <!-- end:: Content -->

                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
        <!-- end:: Content -->

    </div>
</div>
<script src="<?php echo base_url("assets/panel/assets/js/pages/custom/wizard/wizard-1.js"); ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url("assets/panel/assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js"); ?>"
        type="text/javascript"></script>
<!--<script src="<?php echo base_url("assets/custom_js/monitor_corona.js"); ?>" type="text/javascript"></script>//-->