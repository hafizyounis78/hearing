<!--begin::Page Vendors Styles(used by this page) -->
<link href="<?php echo base_url("assets/vendors/custom/fullcalendar/fullcalendar.bundle.css"); ?>"
      rel="stylesheet" type="text/css"/>
<!--end::Page Vendors Styles -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!--    <div class="kt-subheader   kt-grid__item" id="kt_subheader">-->
    <!--        <div class="kt-container  kt-container--fluid ">-->
    <!--        </div>-->
    <!--    </div>-->

    <!-- begin:: Content -->
    <input type="hidden" id="PERSON_ID" name="PERSON_ID"
           value="<?php echo $one_patient['PERSON_ID']; ?>">
    <input type="hidden" id="VISIT_ID" name="VISIT_ID"
           value="<?php echo $one_patient['VISIT_ID']; ?>">
    <input type="hidden" id="hdnPATIENT_NAME" name="hdnPATIENT_NAME"
           value="<?php echo $one_patient['PATIENT_NAME']; ?>">
    <input type="hidden" id="hdnDOCUMENT_ID" name="hdnDOCUMENT_ID"
           value="<?php echo $one_patient['DOCUMENT_ID']; ?>">
    <input type="hidden" id="hdnCENTER_NAME" name="hdnCENTER_NAME"
           value="<?php echo $_SESSION["my_activ_LOCATIONS"]['LOC_NAME']; ?>">
    <input type="hidden" id="calender_date" name="calender_date" value="">
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!-- begin:: Content Head -->
        <div class="kt-subheader kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">عيـادة السمعيات</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <span class="kt-subheader__desc">قائمة المرضى</span>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                    <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker"
                       data-toggle="kt-tooltip">
                        <span class="kt-subheader__btn-daterange-title"
                              id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                        <span class="kt-subheader__btn-daterange-date"
                              id="kt_dashboard_daterangepicker_date"><?php echo date('M,d'); ?></span>
                        <i class="flaticon2-calendar-1"></i>
                    </a>
                    <span class="btn btn-label-success btn-bold btn-sm"><i
                                class="flaticon2-hospital" ></i><?php echo $_SESSION["my_activ_LOCATIONS"]['LOC_NAME']; ?></span>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->
        <div class="row">
            <div class="col-md-12">
                <!--begin::Portlet-->
                <div class="kt-portlet" id="kt_portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon">
                                <i class="flaticon-map-location"></i>
                            </span>
                            <h3 class="kt-portlet__head-title">
                                مواعيد مركز <?php echo $_SESSION["my_activ_LOCATIONS"]['LOC_NAME'];?>
                            </h3>
                        </div>
                       <!-- <div class="kt-portlet__head-toolbar">
                            <a href="#" class="btn btn-brand btn-elevate">
                                <i class="la la-plus"></i>
                                Add Event
                            </a>
                        </div>-->
                    </div>
                    <div class="kt-portlet__body">
                        <div id="kt_calendar"></div>
                    </div>
                </div>

                <!--end::Portlet-->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="appointment_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">حجز موعد </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="appointment_form">
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">التاريخ:</label>
                        <input type="text" class="col-8 form-control" id="APPOINTMENT_DATE"
                               name="APPOINTMENT_DATE"
                               readonly placeholder="Select date"/>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">رقم الوثيقة:</label>
                        <input class="form-control" rows="3" name="DOCUMENT_ID"
                               id="DOCUMENT_ID" disabled value="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">الاسم:</label>
                        <input class="form-control"  name="PATIENT_NAME"
                               id="PATIENT_NAME" disabled value="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">نوع الحجز:</label>
                        <select name="VISIT_TYPE" id="VISIT_TYPE" class="form-control">

                           <option value="102">New</option>
                           <option value="103">Followup</option>
                        </select>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="appointmentSubmit();">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="appointment_info_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">رقم الوثيقة:</label>
                        <input type="text" class="form-control" id="INFO_DOCUMENT_ID" name="INFO_DOCUMENT_ID" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">الاسم:</label>
                        <input type="text" class="form-control" id="INFO_PATIENT_NAME" name="INFO_PATIENT_NAME"
                               readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">التاريخ:</label>
                        <input type="text" class="form-control" id="INFO_VISIT_DATE" name="INFO_VISIT_DATE" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">نوع الزيارة:</label>
                        <input type="text" class="form-control" id="INFO_VISIT_TYPE" name="INFO_VISIT_TYPE" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">المركز:</label>
                        <input type="text" class="form-control" id="INFO_CENTER_NAME" name="INFO_CENTER_NAME" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Send message</button>-->
            </div>
        </div>
    </div>
</div>
<!-- end:: Content -->


<!--<script src="<?php /*echo base_url("assets/custom_js/monitor_corona.js"); */ ?>" type="text/javascript"></script>-->
<!--begin::Page Scripts(used by this page) -->
<script src="<?php echo base_url("assets/vendors/custom/fullcalendar/fullcalendar.bundle.js") ?>"
        type="text/javascript"></script>
<!--<script src="<?php /*echo base_url("assets/js/demo1/pages/components/calendar/basic.js")*/ ?>" type="text/javascript"></script>-->

<!--end::Page Scripts -->
<script>
    //  var KTBootstrapSelect={init:function(){$(".kt-selectpicker").selectpicker()}};
    var KTCalendarBasic = function () {

        return {
            //main function to initiate the module
            init: function () {
                var todayDate = moment().startOf('day');
                var YM = todayDate.format('YYYY-MM');
                var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                var TODAY = todayDate.format('YYYY-MM-DD');
                var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                $('#kt_calendar').fullCalendar({
                    isRTL: KTUtil.isRTL(),
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay,listWeek'
                    },
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    navLinks: true,
                    minTime: '08:00:00',
                    maxTime: '14:00:00',
                    slotDuration: '00:5:00',
                    slotLabelInterval: 5,
                    slotLabelFormat: 'H(:mm)',
                    slotEventOverlap: false,
                    axisFormat: 'HH:mm',
                   /* timeFormat: {
                        agenda: 'H:mm{ - h:mm}'
                    },*/
                    //defaultDate: '2016-01-12',
                    timezone: 'Asia/Gaza',
                    slotMinutes: 5,
                    droppable: false, // this allows things to be dropped onto the calendar !!!
                    eventClick: function (calEvent, jsEvent, view) {
                        //alert(' calEvent.id'+ calEvent.id);
                        $('#event_id').val(calEvent.id)
                        $('#appointment_info_modal').modal('show');
                        $('#INFO_PATIENT_NAME').val(calEvent.title);
                        $('#INFO_DOCUMENT_ID').val(calEvent.DOCUMENT_ID);
                        $('#INFO_CENTER_NAME').val(calEvent.description);
                        $('#INFO_VISIT_TYPE').val(calEvent.VISIT_TYPE_NAME);
                        $('#INFO_VISIT_DATE').val(calEvent.start.format('MM/DD/YYYY, h:mm a'));

                        return false;
                    },
                    events:
                        {
                            url: baseURL + 'Appointment_cont/get_events',
                            type: 'post',
                            color: '#65a9d7',    // an option!
                            textColor: '#3c3d3d', // an option!
                            data: {},
                            success: function (data) {
                                //  alert( data.events[0]['id']);
                                return data.events;
                            }
                        }
                    ,
                    /*    events: [
                            {
                                title: 'All Day Event',
                                start: YM + '-01',
                                description: 'Lorem ipsum dolor sit incid idunt ut',
                                className: "fc-event-danger fc-event-solid-warning"
                            },
                            {
                                title: 'Reporting',
                                start: YM + '-14T13:30:00',
                                description: 'Lorem ipsum dolor incid idunt ut labore',
                                end: YM + '-14',
                                className: "fc-event-accent"
                            },
                            {
                                title: 'Company Trip',
                                start: YM + '-02',
                                description: 'Lorem ipsum dolor sit tempor incid',
                                end: YM + '-03',
                                className: "fc-event-primary"
                            },
                            {
                                title: 'ICT Expo 2017 - Product Release',
                                start: YM + '-03',
                                description: 'Lorem ipsum dolor sit tempor inci',
                                end: YM + '-05',
                                className: "fc-event-light fc-event-solid-primary"
                            },
                            {
                                title: 'Dinner',
                                start: YM + '-12',
                                description: 'Lorem ipsum dolor sit amet, conse ctetur',
                                end: YM + '-10'
                            },
                            {
                                id: 999,
                                title: 'Repeating Event',
                                start: YM + '-09T16:00:00',
                                description: 'Lorem ipsum dolor sit ncididunt ut labore',
                                className: "fc-event-danger"
                            },
                            {
                                id: 1000,
                                title: 'Repeating Event',
                                description: 'Lorem ipsum dolor sit amet, labore',
                                start: YM + '-16T16:00:00'
                            },
                            {
                                title: 'Conference',
                                start: YESTERDAY,
                                end: TOMORROW,
                                description: 'Lorem ipsum dolor eius mod tempor labore',
                                className: "fc-event-accent"
                            },
                            {
                                title: 'Meeting',
                                start: TODAY + 'T10:30:00',
                                end: TODAY + 'T12:30:00',
                                description: 'Lorem ipsum dolor eiu idunt ut labore'
                            },
                            {
                                title: 'Lunch',
                                start: TODAY + 'T12:00:00',
                                className: "fc-event-info",
                                description: 'Lorem ipsum dolor sit amet, ut labore'
                            },
                            {
                                title: 'Meeting',
                                start: TODAY + 'T14:30:00',
                                className: "fc-event-warning",
                                description: 'Lorem ipsum conse ctetur adipi scing'
                            },
                            {
                                title: 'Happy Hour',
                                start: TODAY + 'T17:30:00',
                                className: "fc-event-metal",
                                description: 'Lorem ipsum dolor sit amet, conse ctetur'
                            },
                            {
                                title: 'Dinner',
                                start: TODAY + 'T20:00:00',
                                className: "fc-event-solid-focus fc-event-light",
                                description: 'Lorem ipsum dolor sit ctetur adipi scing'
                            },
                            {
                                title: 'Birthday Party',
                                start: TOMORROW + 'T07:00:00',
                                className: "fc-event-primary",
                                description: 'Lorem ipsum dolor sit amet, scing'
                            },
                            {
                                title: 'Click for Google',
                                url: 'http://google.com/',
                                start: YM + '-28',
                                className: "fc-event-solid-info fc-event-light",
                                description: 'Lorem ipsum dolor sit amet, labore'
                            }
                        ],*/
                    dayClick: function (date, jsEvent, view) {

                        //var daysOK = [1, 2];//bussiness dars
                        var daysOK = [0, 1, 2, 3, 4, 5, 6];//bussiness dars من الاحد للخميس
                        var mydateObj = new Date(date);
                        var chosenDay = mydateObj.getUTCDay();

                        if (daysOK.indexOf(chosenDay) >= 0) {

                            // change the day's background color just for fun
                            /*   $(this).css('background-color', 'red');*/
                            if (view.name == 'agendaDay') {

                                $('#PATIENT_NAME').val($('#hdnPATIENT_NAME').val());
                                $('#DOCUMENT_ID').val($('#hdnDOCUMENT_ID').val());
                               /* $('#INFO_CENTER_NAME').val(jsEvent.description);*/

                                $('#appointment_modal').modal('show');
                                $('#APPOINTMENT_DATE').val(date.format("DD-MM-YYYY HH:mm"));
                                $('#calender_date').val(date);
                               // appointmentSubmit();
                                // alert(mydateObj);
                                //   var twentyMinutesLater = new Date(mydateObj.getTime() + (15 * 60 * 1000));
                                //  alert(twentyMinutesLater.format("YYYY-MM-DD H:mm"))


                                // form_rest();

                                /*  $(".form_datetime").datetimepicker({
                                      autoclose: true,
                                      isRTL: App.isRTL(),
                                      format: "yyyy-mm-dd  - HH:ii",
                                      pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left")
                                  });*/

                                /* $(".select2, .select2-multiple").select2({
                                     width: null
                                 });
                                 $('.select2').val('');
                                 $('.select2').trigger('change');*/
                            } else {

                                $('#kt_calendar').fullCalendar('changeView', 'agendaDay')
                                $('#kt_calendar').fullCalendar('gotoDate', date);
                            }
                        } else {
                            return false;
                        }


                    },
                    eventRender: function (event, element) {
                        if (element.hasClass('fc-day-grid-event')) {
                            element.data('content', event.description);
                            element.data('placement', 'top');
                            KTApp.initPopover(element);
                        } else if (element.hasClass('fc-time-grid-event')) {
                            element.find('.fc-title').append('<div class="fc-description">' + event.description+ '</div>');
                        } else if (element.find('.fc-list-item-title').lenght !== 0) {
                            element.find('.fc-list-item-title').append('<div class="fc-description">' + event.description+  '</div>');
                        }
                    }
                });
            }
        };
    }();
    var calendar;
    $(document).ready(function () {

        var calendarEl = document.getElementById('kt_calendar');
        // store calendar reference in global variable like below so you can use it later.
        calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        KTCalendarBasic.init();
       // calendar.render();
    });

    function appointmentSubmit() {
        var form1 = $('#appointment_form');
        var error = $('.alert-danger', form1);
        //var success = $('.alert-success', form1);

        var action = baseURL + 'Appointment_cont/save_appointment';
     /*   var formData = new FormData($('#appointment_form')[0]);

        formData.append('PERSON_ID', $('#PERSON_ID').val());
        formData.append('VISIT_ID', $('#VISIT_ID').val());*/

        $.ajax({
                url: action,
                type: 'POST',
                //  dataType: 'json',
                data: {
                    PERSON_ID:$('#PERSON_ID').val(),
                    VISIT_ID:$('#VISIT_ID').val(),
                    APPOINTMENT_DATE:  $('#APPOINTMENT_DATE').val(),
                    VISIT_TYPE:  $('#VISIT_TYPE').val()
                },

              /*  processData:
                    false,
                contentType:
                    false,*/
                success: function (data) {
                    if (data == 1) {
                        var value = $("#VISIT_TYPE option:selected");
                        NOTIFY2('تمت العملية بنجاح', "success");
                        var event={id:1 , title: $('#PATIENT_NAME').val(),description:$('#hdnCENTER_NAME').val()+'-'+value.text(), start:$('#calender_date').val()};

                        $('#kt_calendar').fullCalendar( 'renderEvent', event, true);
                     //   $("#kt_calendar").refetchEvents();
                      //  calendar.refetchEvents();
                     //   KTCalendarBasic.refetchEvents();


                    } else {
                        NOTIFY2('لم تتم العملية بنجاح', "danger")
                    }

                }

                ,
                error: function (err) {

                    console.log(err);
                }
                /*  error:function(err){
                      console.log(err);

                  }*/
            }
        )
    }
</script>