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
                                class="flaticon2-hospital"></i><?php echo $_SESSION["my_activ_LOCATIONS"]['LOC_NAME']; ?></span>
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
                                Basic Calendar
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="#" class="btn btn-brand btn-elevate">
                                <i class="la la-plus"></i>
                                Add Event
                            </a>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="kt_calendar"></div>
                    </div>
                </div>

                <!--end::Portlet-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label ">
                        	<span class="kt-portlet__head-icon kt-font-danger">
                                <i class="fa fa-child"></i>
                            </span>
                            <h3 class="kt-portlet__head-title kt-font-danger kt-font-bold">
                                قائمة المرضى
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable"
                               id="risk_patient_tb">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>رقم الوثيقة</th>
                                <th>الاسم</th>
                                <th>المركز</th>
                                <th>نوع الزيارة</th>
                                <th>الحالة</th>
                                <th>تاريخ الزيارة</th>
                                <th>رقم الجوال</th>
                                <th>إجراءات</th>
                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>

                        <!--end: Datatable -->
                    </div>
                </div>
                <!--end::Portlet-->
            </div>

        </div>
    </div>
</div>

<!-- end:: Content -->


<!--<script src="<?php /*echo base_url("assets/custom_js/monitor_corona.js"); */ ?>" type="text/javascript"></script>-->
<!--begin::Page Scripts(used by this page) -->
<script src="<?php echo base_url("assets/vendors/custom/fullcalendar/fullcalendar.bundle.js")?>" type="text/javascript"></script>
<!--<script src="<?php /*echo base_url("assets/js/demo1/pages/components/calendar/basic.js")*/?>" type="text/javascript"></script>-->

<!--end::Page Scripts -->
<script>
    //  var KTBootstrapSelect={init:function(){$(".kt-selectpicker").selectpicker()}};
    var KTCalendarBasic = function() {

        return {
            //main function to initiate the module
            init: function() {
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
                    events: [
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
                    ],

                    eventRender: function(event, element) {
                        if (element.hasClass('fc-day-grid-event')) {
                            element.data('content', event.description);
                            element.data('placement', 'top');
                            KTApp.initPopover(element);
                        } else if (element.hasClass('fc-time-grid-event')) {
                            element.find('.fc-title').append('<div class="fc-description">' + event.description + '</div>');
                        } else if (element.find('.fc-list-item-title').lenght !== 0) {
                            element.find('.fc-list-item-title').append('<div class="fc-description">' + event.description + '</div>');
                        }
                    }
                });
            }
        };
    }();

    $(document).ready(function () {
        KTCalendarBasic.init();
    });

   
</script>