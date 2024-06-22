 <div style="display:none" class="col-xl-12">
                <div class="kt-portlet" dir="ltr">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body" id="referral_report">
                                    <style>
                                    .table th, .table td{
                                        padding:0.75rem;
                                        }
                                    </style>
    <table  width="100%" dir="rtl" class="report_header" style="display:block; border-bottom: 4px solid;margin-bottom: 30px;padding-bottom:15px;">
    <tr>
        <th width="40%" style="text-align:right;"><p>السلطة الفلسطينية</p>
            <p>وزارة الصحة الفلسطينية </p>
            <p>مركز الفرز التنفسي </p>
             <p>نموذج تحويل مريض </p>
        </th>
        <th width="20%" style="text-align:center;">
            <img src="<?php echo base_url();?>assets/img/logoTH_report.png">
        </th>
        <th width="40%" style="text-align:left;"><p>Palestine Authority</p>
            <p>Ministry OF Health</p>
            <p>Respiratory Triage Center</p>
            <p>Referral Form</p>
        </th>
    </tr>
</table>
<table  width="100%" dir="ltr" class="table table-bordered" border="1" style="margin:0;border: 1px solid #000;border-collapse: collapse;text-align:left;width:100% !important;direction: ltr;clear: both;padding:5px">
<tbody>
<tr>
<th>Name</th>
<td colspan="7"><?= $GET_PERSON_INFO[0]['FIRST_NAME']; ?> <?= $GET_PERSON_INFO[0]['SECOND_NAME']; ?> <?= $GET_PERSON_INFO[0]['THIRD_NAME']; ?> <?= $GET_PERSON_INFO[0]['LAST_NAME']; ?></td>
</tr>
<tr>
<th>ID</th>
<td colspan="7"><?php echo $GET_PERSON_INFO[0]['DOCUMENT_ID']; ?></td>
</tr>
<tr>
<th>Age</th>
<td><?php
                            $originalDate = $GET_PERSON_INFO[0]['DOB'] ;
//                             $birthDate = date("d/m/Y", strtotime($originalDate));
                            $birthDate = explode("/", $originalDate);
                            //get age from date or birthdate
                            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                                    ? ((date("Y") - $birthDate[2]) - 1)
                                    : (date("Y") - $birthDate[2]));
                            echo $age ?> سنة</td>
<th>Gender</th>
<td><?php echo $GET_PERSON_INFO[0]['SEX']; ?></td>
<th>TOA</th>
<td>&nbsp;</td>
<th>Date</th>
<td><?php echo date('d-m-Y');?></td>
</tr>
<tr>
<th>Name of RTC</th>
<td colspan="7"><?php echo $_SESSION['RTC_CENTER_NAME_AR']?></td>
</tr>
<tr>
<th>Referred to:</th>
<td colspan="7">&nbsp;</td>

</tr>
<tr>
<th>Chief Complaint</th>
<td colspan="7" class="REPORT_CHIEF_COMPLAINT"></td>
</tr>
<tr>
<th rowspan="2">Vitals</th>
<th>On arrival</th>
<td>Temp:&nbsp; 38</td>
<td>BP:&nbsp; 120</td>
<td>PR:&nbsp; 70</td>
<td>RR:&nbsp; 25</td>
<td>SaO2:&nbsp; 156</td>
<td>GCS:&nbsp; 123</td>
</tr>
<tr>
<th>At discharge</th>
<td>Temp:&nbsp; 37</td>
<td>BP:&nbsp; 121</td>
<td>PR:&nbsp; 72</td>
<td>RR:&nbsp; 26</td>
<td>SaO2:&nbsp; 150</td>
<td>GCS:&nbsp; 120</td>
</tr>
<tr>
<th>On&nbsp;Examination</th>
<td colspan="7" class="REPORT_EXAMINATION">&nbsp;</td>
</tr>
<tr>
<th>Suspected Covid</th>
<td colspan="7">Yes</td>
</tr>
<tr>
<th>Provisional Diagnosis</th>
<td colspan="7" class="visit_diagnosis_report">&nbsp;</td>
</tr>
<tr>
<th>Management Givin</th>
<td colspan="7" class="visit_management_done_report">&nbsp;</td>
</tr>
<tr>
<th>Reason for referral</th>
<td colspan="7">&nbsp;</td>
</tr>
<tr>
<th>TOD</th>
<td colspan="3">&nbsp;</td>
<th>Doctor signature</th>
<td colspan="3">&nbsp;</td>
</tr>
</tbody>
</table>
                                </div>
                            </div>

                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">

                                    <div class="col-lg-9 col-xl-9">
                                        <button type="submit" class="btn btn-success" onclick="PRINT_REPORT_REFERRAL();">Print</button>&nbsp;
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                    <div class="col-lg-3 col-xl-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div style="display:none" class="col-xl-12">
                <div class="kt-portlet" dir="ltr">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body" id="patient_card_report">
                                    <style>
                                    .table th, .table td{
                                        padding:0.75rem;
                                        }
                                    </style>
    <table  width="100%" dir="rtl" class="report_header" style="display:block; border-bottom: 4px solid;margin-bottom: 30px;padding-bottom:15px;">
    <tr>
        <th width="40%" style="text-align:right;"><p>السلطة الفلسطينية</p>
            <p>وزارة الصحة الفلسطينية </p>
            <p>مركز الفرز التنفسي </p>
             <p>بطاقة مريض </p>
        </th>
        <th width="20%" style="text-align:center;">
            <img src="<?php echo base_url();?>assets/img/logoTH_report.png">
        </th>
        <th width="40%" style="text-align:left;"><p>Palestine Authority</p>
            <p>Ministry OF Health</p>
            <p>Respiratory Triage Center</p>
            <p>Patient Card</p>
        </th>
    </tr>
</table>
<table  width="100%" dir="ltr" class="table table-bordered" border="1" style="margin:0;border: 1px solid #000;border-collapse: collapse;text-align:left;width:100% !important;direction: ltr;clear: both;padding:5px">
<tbody>
<tr>
<th>Name</th>
<td colspan="7"><?= $GET_PERSON_INFO[0]['FIRST_NAME']; ?> <?= $GET_PERSON_INFO[0]['SECOND_NAME']; ?> <?= $GET_PERSON_INFO[0]['THIRD_NAME']; ?> <?= $GET_PERSON_INFO[0]['LAST_NAME']; ?></td>
</tr>
<tr>
<th>ID</th>
<td colspan="7"><?php echo $GET_PERSON_INFO[0]['DOCUMENT_ID']; ?></td>
</tr>
<tr>
<th>Age</th>
<td><?php
                            $originalDate = $GET_PERSON_INFO[0]['DOB'] ;
//                             $birthDate = date("d/m/Y", strtotime($originalDate));
                            $birthDate = explode("/", $originalDate);
                            //get age from date or birthdate
                            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                                    ? ((date("Y") - $birthDate[2]) - 1)
                                    : (date("Y") - $birthDate[2]));
                            echo $age ?> سنة</td>
<th>Gender</th>
<td><?php echo $GET_PERSON_INFO[0]['SEX']; ?></td>
<th>TOA</th>
<td>&nbsp;</td>
<th>Date</th>
<td><?php echo date('d-m-Y');?></td>
</tr>
<!--<tr>
<th>Name of RTC</th>
<td colspan="7">&nbsp;</td>
</tr>
<tr>
<th>Referred to:</th>
<td colspan="7">&nbsp;</td>

</tr>//-->
<tr>
<th>Chief Complaint</th>
<td colspan="7" class="REPORT_CHIEF_COMPLAINT"></td>
</tr>
<tr>
<th>Vitals</th>
<td>Temp:&nbsp; 38</td>
<td>BP:&nbsp; 120</td>
<td>PR:&nbsp; 70</td>
<td>RR:&nbsp; 25</td>
<td>SaO2:&nbsp; 156</td>
<td colspan="2">GCS:&nbsp; 123</td>
</tr>
<tr>
<th>On&nbsp;Examination</th>
<td colspan="7" class="REPORT_EXAMINATION">&nbsp;</td>
</tr>
<tr>
<th>Diagnosis</th>
<td colspan="7" class="visit_diagnosis_report">&nbsp;</td>
</tr>
<tr>
<th>Suspected Covid</th>
<td colspan="3">No</td>
<th>Severity</th>
<td colspan="3">Moderate</td>
</tr>
<tr>
<th>Management Plan</th>
<td colspan="7" class="visit_management_report">&nbsp;</td>
</tr>
<tr>
<th>Disposition</th>
<td colspan="7" class="visit_disposition_report">&nbsp;</td>
</tr>
<tr>
<th>TOD</th>
<td colspan="3">&nbsp;</td>
<th>Doctor signature</th>
<td colspan="3">&nbsp;</td>
</tr>
</tbody>
</table>
                                </div>
                            </div>

                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">

                                    <div class="col-lg-9 col-xl-9">
                                        <button type="submit" class="btn btn-success" onclick="PRINT_REPORT_PATIENT_CARD();">Print</button>&nbsp;
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                    <div class="col-lg-3 col-xl-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>