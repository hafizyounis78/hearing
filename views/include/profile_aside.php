            <div class="kt-widget__head">
                <div class="kt-widget__media">
                    <img src="<?php echo base_url();?>assets/img/<?php
                    if ($one_patient['SEX_ID'] == 1) {
                         echo "user_male.png";
                    } elseif ($one_patient['SEX_ID']  == 2) {
                        echo "user_female.png";
                    }
                    ?>" alt="image">
                </div>
                <div class="kt-widget__content">
                    <div class="kt-widget__section">
                        <a href="#" class="kt-widget__username">

                           <?php echo $one_patient['PATIENT_NAME']; ?>

                        </a>
                        <span class="kt-widget__subtitle">
                         <?php echo $one_patient['SEX_NAME']; ?>

                        </span>

                    </div>

                </div>
            </div>
            <div class="kt-widget__body">
                <div class="kt-widget__content">
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">رقم الهوية:</span>
                        <span class="kt-widget__data"><?php echo $one_patient['DOCUMENT_ID']; ?></span>
                    </div>
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">الحالة الاجتماعية:</span>
                        <span class="kt-widget__data"><?php echo $one_patient['MARITAL_STATUS']; ?></span>
                    </div>
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">تاريخ الميلاد:</span>
                        <span class="kt-widget__data">

                            <?php 
                              $originalDate = $one_patient['DOB'] ;
                              $newDate = date("d/m/Y", strtotime($originalDate));
                            echo $originalDate; ?></span>
                    </div>
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">العمر:</span>
                        <span class="kt-widget__data">
                        <?php
//                             $originalDate = $GET_PERSON_INFO[`0]['DOB'] ;
                            $birthDate = $one_patient['DOB'];
                            $birthDate = explode("/", $birthDate);
                            //get age from date or birthdate
                            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                                    ? ((date("Y") - $birthDate[2]) - 1)
                                    : (date("Y") - $birthDate[2]));
                            echo $age ?> سنة</span>
                    </div>
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">رقم الجوال:</span>
                        <span class="kt-widget__data"><?php echo $one_patient['MOBILE_NUM']; ?></span>
                    </div>
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">العنوان الحالي:</span>
                        <span class="kt-widget__data"><?php echo $one_patient['CURRENT_ADDRESS']; ?></span>
                    </div>
                </div>


            </div>