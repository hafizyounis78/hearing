<style>

    .kt-datatable.kt-datatable--default > .kt-datatable__table > .kt-datatable__head .kt-datatable__row > .kt-datatable__cell > span, .kt-datatable.kt-datatable--default > .kt-datatable__table > .kt-datatable__foot .kt-datatable__row > .kt-datatable__cell > span{
        font-weight:bold;
    }
    .kt-datatable__head{
        background: #ebedf2;
    }
    .kt-datatable.kt-datatable--default > .kt-datatable__table > .kt-datatable__head .kt-datatable__row > .kt-datatable__cell{
        padding:10px;
    }
   /*  #REQUEST_TYPE_STAFF_BY_GOV_DT .kt-datatable__table{
            overflow: scroll;
    } */
    #REQUEST_TYPE_STAFF_BY_GOV_DT .kt-datatable.kt-datatable--default > .kt-datatable__table > .kt-datatable__body .kt-datatable__row > .kt-datatable__cell:first-child  span{
    width:10px!important;
    }
   #REQUEST_TYPE_DT.kt-datatable.kt-datatable--default > .kt-datatable__table > .kt-datatable__head .kt-datatable__row > .kt-datatable__cell:first-child span{
     width:70px !important;
    }
    .kt-datatable.kt-datatable--default > .kt-datatable__table > .kt-datatable__body .kt-datatable__row > .kt-datatable__cell > span , .kt-datatable.kt-datatable--default > .kt-datatable__table > .kt-datatable__head .kt-datatable__row > .kt-datatable__cell > span, .kt-datatable.kt-datatable--default > .kt-datatable__table > .kt-datatable__foot .kt-datatable__row > .kt-datatable__cell > span{
        width:80px!important;
        overflow: inherit;
        font-size: 13px;
    }
    .kt-datatable.kt-datatable--default > .kt-datatable__table > .kt-datatable__head .kt-datatable__row > .kt-datatable__cell:first-child span{
     width:10px!important;
    }
</style>
<link href="https://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
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
                        <span class="kt-subheader__desc"> إحصائيات وتقارير عامة للكورونا </span>
                    </div>
                    <div class="kt-subheader__toolbar">
                        <div class="kt-subheader__wrapper">

                        </div>
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
                                    <button class="btn btn-primary btn-brand--icon" onclick="GET_REQUEST_TYPE();">
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
                <div class="row">

                    <div class="col-lg-5">
                        <!--begin::Portlet-->
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hidden">
                        <i class="la la-gear"></i>
                    </span>
                                    <h3 class="kt-portlet__head-title">
                                        مصابي فايروس (COVID-19)
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div id="chartdiv" style="height: 305px;" dir="ltr"></div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                    <div class="col-lg-7">
                        <!--begin::Portlet-->

                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon2-line-chart"></i>
			</span>
                                    <h3 class="kt-portlet__head-title">
                                        مصابي فايروس (COVID-19)
                                    </h3>
                                </div>

                            </div>

                            <div class="kt-portlet__body" style="min-height: 355px;">
                                <!--begin: Datatable -->
                                <div class="kt-datatable" id="REQUEST_TYPE_DT" ></div>
                                <!--end: Datatable -->
                            </div>
                        </div>
                        <!--<div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon kt-hidden">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="kt-portlet__head-title">
                                         مصابي فايروس (COVID-19) توزيعة المحافظات
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div style="height: 400px;"></div>
                            </div>
                        </div>//-->
                        <!--end::Portlet-->
                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-5">
                        <!--begin::Portlet-->
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hidden">
                        <i class="la la-gear"></i>
                    </span>
                                    <h3 class="kt-portlet__head-title">
                                        مصابي فايروس (COVID-19) توزيعة المحافظات
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div id="chartdiv" style="height: 305px;" dir="ltr"></div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                    <div class="col-lg-7">
                        <!--begin::Portlet-->

                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon2-line-chart"></i>
			</span>
                                    <h3 class="kt-portlet__head-title">
                                        مصابي فايروس (COVID-19) توزيعة المحافظات
                                    </h3>
                                </div>

                            </div>

                            <div class="kt-portlet__body" style="min-height: 355px;">
                                <!--begin: Datatable -->
                                <div class="kt-datatable" id="REQUEST_TYPE_BY_GOV_DT" ></div>
                                <!--end: Datatable -->
                            </div>
                        </div>
                        <!--<div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon kt-hidden">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="kt-portlet__head-title">
                                         مصابي فايروس (COVID-19) توزيعة المحافظات
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div style="height: 400px;"></div>
                            </div>
                        </div>//-->
                        <!--end::Portlet-->
                    </div>
                </div>
                <div class="row">


                    <div class="col-lg-12">
                        <!--begin::Portlet-->

                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon2-line-chart"></i>
			</span>
                                    <h3 class="kt-portlet__head-title">
                                        مصابي فايروس (COVID-19) توزيعة الاحياء
                                    </h3>
                                </div>

                            </div>

                            <div class="kt-portlet__body" style="min-height: 355px;">
                                <!--begin: Datatable -->
                                <div class="kt-datatable table-responsive" id="REQUEST_TYPE_STAFF_BY_GOV_DT" ></div>
                                <!--end: Datatable -->
                            </div>
                        </div>
                        <!--<div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon kt-hidden">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="kt-portlet__head-title">
                                         مصابي فايروس (COVID-19) توزيعة المحافظات
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div style="height: 400px;"></div>
                            </div>
                        </div>//-->
                        <!--end::Portlet-->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end:: Content -->
</div>

<!--begin::Page Vendors(used by this page) -->

<script src="https://www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/radar.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/plugins/tools/polarScatter/polarScatter.min.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>
<!--end::Page Vendors -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>



<!-- Chart code -->
<!--<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
chart.data = [{
  "year": "2016",
  "europe": 2.5,
  "namerica": 2.5,
  "asia": 2.1
}, {
  "year": "2017",
  "europe": 2.6,
  "namerica": 2.7,
  "asia": 2.2
}, {
  "year": "2018",
  "europe": 2.8,
  "namerica": 2.9,
  "asia": 2.4
}];

// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "year";
categoryAxis.renderer.grid.template.location = 0;


var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.inside = true;
valueAxis.renderer.labels.template.disabled = true;
valueAxis.min = 0;

// Create series
function createSeries(field, name) {

  // Set up series
  var series = chart.series.push(new am4charts.ColumnSeries());
  series.name = name;
  series.dataFields.valueY = field;
  series.dataFields.categoryX = "year";
  series.sequencedInterpolation = true;

  // Make it stacked
  series.stacked = true;

  // Configure columns
  series.columns.template.width = am4core.percent(60);
  series.columns.template.tooltipText = "[bold]{name}[/]\n[font-size:14px]{categoryX}: {valueY}";

  // Add label
  var labelBullet = series.bullets.push(new am4charts.LabelBullet());
  labelBullet.label.text = "{valueY}";
  labelBullet.locationY = 0.5;
  labelBullet.label.hideOversized = true;

  return series;
}

createSeries("europe", "Europe");
createSeries("namerica", "North America");
createSeries("asia", "Asia-Pacific");

// Legend
chart.legend = new am4charts.Legend();

}); // end am4core.ready()
</script>
//-->
<script>
    function GET_REQUEST_TYPE() {
        GET_REQUEST_TYPE_DT();
        test_session();
        KTApp.block("#count_patient_portlet",{overlayColor:"#000000",type:"v2",state:"primary",message:"جاري جلب البيانات ..."});
        var P_FROM_DATE = $('#P_FROM_DATE').val();
        var P_TO_DATE = $('#P_TO_DATE').val();
        $.ajax({
            url: baseURL + 'Dashboard/GET_REQUEST_TYPE',
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

// Themes begin
                am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
                var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
                chart.data = obj ;

// Create axes
                var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                categoryAxis.dataFields.category = "REQUEST_TYPE";
                categoryAxis.renderer.grid.template.location = 0;
                categoryAxis.gridPosition = "start";
                categoryAxis.axisAlpha= 0;
                categoryAxis.gridAlpha= 0;
                categoryAxis.position = "left";

                var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                valueAxis.renderer.inside = true;
                valueAxis.renderer.labels.template.disabled = true;
                valueAxis.min = 0;
                valueAxis.title.text = "  مصابي فايروس (COVID-19)";


// Create series
                function createSeries(field, name) {

                    // Set up series
                    var series = chart.series.push(new am4charts.ColumnSeries());
                    series.name = name;
                    series.dataFields.valueY = field;
                    series.dataFields.categoryX = "REQUEST_TYPE";
                    series.sequencedInterpolation = true;

                    // Make it stacked
                    series.stacked = true;

                    // Configure columns
                    series.columns.template.width = am4core.percent(60);
                    series.columns.template.tooltipText = "[bold]{name}[/]\n[font-size:14px]{categoryX}: {valueY}";

                    // Add label
                    var labelBullet = series.bullets.push(new am4charts.LabelBullet());
                    labelBullet.label.text = "{valueY}";
                    labelBullet.locationY = 0.5;
                    labelBullet.label.hideOversized = true;

                    return series;
                }

                createSeries("POSITIVE", "POSITIVE");
                createSeries("NEGATIVE", "NEGATIVE");

// Legend
                chart.legend = new am4charts.Legend();

                chart.cursor = new am4charts.XYCursor();

                /* chart.events.on("ready", function() {
                  dateAxis.zoomToDates(new Date(2018, 0, 3), new Date(2018, 0, 6));
                }); */
                /* chart.zoomOutButton.align = "left";
                chart.zoomOutButton.valign = "bottom";
                chart.zoomOutButton.marginLeft = 10;
                chart.zoomOutButton.marginBottom = 10;
                 */
                /*    AmCharts.makeChart("kt_amcharts_3", {
                   "type": "serial",
                   "theme": "none",
                   "dataProvider":obj,
                   "startDuration": 1,
                   "valueAxes": [{
                       "stackType": "regular",
                       "title": "  مصابي فايروس (COVID-19)",
                       "position": "left",
                       "axisAlpha": 0.3,
                       "gridAlpha": 0
                   }],
                   "graphs": [{
                       "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                       "fillAlphas": 0.8,
                       "labelText": "[[value]]",
                       "lineAlpha": 0.3,
                       "title": "POSITIVE",
                       "type": "column",
                   "color": "#000000",
                       "valueField": "POSITIVE"
                   }, {
                       "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                       "fillAlphas": 0.8,
                       "labelText": "[[value]]",
                       "lineAlpha": 0.3,
                       "title": "NEGATIVE",
                       "type": "column",
                   "color": "#000000",
                       "valueField": "NEGATIVE"
                   }],
                   "plotAreaFillAlphas": 0.1,
                   "categoryField": "REQUEST_TYPE",
                   "categoryAxis": {
                       "gridPosition": "start",
                       "axisAlpha": 0,
                       "gridAlpha": 0,
                       "position": "left"
                   },
                   "export": {
                       "enabled": true
                    }

               });  */


                /*             AmCharts.makeChart("kt_amcharts_3", {
                              theme: "light",
                              type: "serial",
                              dataProvider: obj,
                              valueAxes: [{ unit: "", position: "left", title: "  مصابي فايروس (COVID-19)" }],
                              startDuration: 1,
                              graphs: [
                                  { balloonText: "إجمالي عدد ال[[category]] (POSITIVE): <b>[[value]]</b>", fillAlphas: 0.9, lineAlpha: 0.2, title: "POSITIVE", type: "column", valueField: "POSITIVE" },
                                  { balloonText: "إجمالي عدد ال [[category]] (NEGATIVE): <b>[[value]]</b>", fillAlphas: 0.9, lineAlpha: 0.2, title: "NEGATIVE", type: "column", clustered: !1, columnWidth: 0.5, valueField: "NEGATIVE" },

                              ],
                              plotAreaFillAlphas: 0.1,
                              categoryField: "REQUEST_TYPE",
                              categoryAxis: { gridPosition: "start" },
                              export: { enabled: !0 },
                          }); */
// 				GET_REQUEST_TYPE_CHART(obj.chartdata);
                GET_REQUEST_TYPE_BY_GOV();
                GET_REQUEST_TYPE_STAFF_BY_GOV_fn();
            }
        });

    };
    function GET_REQUEST_TYPE_DT() {
        var P_FROM_DATE = $('#P_FROM_DATE').val();
        var P_TO_DATE = $('#P_TO_DATE').val();
        var t;
        (t = $("#REQUEST_TYPE_DT").KTDatatable({
            data: { type: "remote", source: { read: { url: baseURL + 'Dashboard/GET_REQUEST_TYPE_TABLE', params: {  P_FROM_DATE: P_FROM_DATE, P_TO_DATE: P_TO_DATE  } } }, pageSize: 10, serverPaging: !0, serverFiltering: !1, serverSorting: !0 },
            layout: { scroll: !1, height: null, footer: !1 },
            sortable: 0,
            columns: [
                { field: "REQUEST_TYPE", title: "الفئة", sortable: !1 ,width: '30%'},
                { field: "POSITIVE", title: "ايجابي" ,width: '30%'},
                { field: "NEGATIVE", title: "سلبي",width: '30%'},
                { field: "TOTAL", title: "الإجمالي" ,width: '10%'},

            ],
            pagination: 0,

        }));

    };
    function GET_REQUEST_TYPE_BY_GOV () {
        var P_FROM_DATE = $('#P_FROM_DATE').val();
        var P_TO_DATE = $('#P_TO_DATE').val();

        var datatable = $("#REQUEST_TYPE_BY_GOV_DT").KTDatatable({
            data: { type: "remote", source: { read: { url: baseURL + 'Dashboard/GET_REQUEST_TYPE_BY_GOV', params: {  P_FROM_DATE: P_FROM_DATE, P_TO_DATE: P_TO_DATE  } } }, pageSize: 10, serverPaging: !0, serverFiltering: !1, serverSorting: !0 },
            layout: { scroll: !1, height: null, footer: !1 },
            sortable: 0,
            columns: [
                { field: "CURRENT_GOVERNORATE_ID", title: "#", sortable: !1 ,width: 20},
                { field: "CURRENT_GOVERNORATE_NAME", title: "المحافظة" },
                { field: "CONTACTS", title: "مخالطين"},
                { field: "RANDOM_SCREENING", title: "مسح عشوائي" },
                { field: "DIRECTED_SCREENING", title: "مسح موجه" },
                { field: "SUSPECTED", title: "مشتبه إصابة"},
                { field: "TOTAL", title: "الإجمالي" },

            ],
            pagination: 0,
            detail: {
                title: "عرض التفاصيل",
                content: subTableInit,
            },
        });

    };

    function subTableInit(e) {
       // alert($(this));
        console.log(e.currentTarget.attributes['data-value'].nodeValue);

        var dataId = $(this).attr("data-id");
        var P_FROM_DATE = $('#P_FROM_DATE').val();
        var P_TO_DATE = $('#P_TO_DATE').val();
        $('<div/>').attr('id', 'REQUEST_TYPE_BY_GOV_DT_' + e.currentTarget.attributes['data-value'].nodeValue).appendTo(e.detailCell).KTDatatable({
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: baseURL + 'Dashboard/GET_REQUEST_TYPE_BY_GOV_DETAIL',
                        params: {
                            CURRENT_GOVERNORATE_ID: e.currentTarget.attributes['data-value'].nodeValue, P_FROM_DATE: P_FROM_DATE, P_TO_DATE: P_TO_DATE
                           /* query: {
                                generalSearch: '',
                                CURRENT_GOVERNORATE_ID: e.data.CURRENT_GOVERNORATE_ID,
                            },*/
                        },
                    },
                },
                pageSize: 10,
                serverPaging: true,
                serverFiltering: false,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: true,
                height: 300,
                footer: false,

                // enable/disable datatable spinner.
                spinner: {
                    type: 1,
                    theme: 'default',
                },
            },

            sortable: 0,

            // columns definition
         columns: [
             { field: "TEST_RESULT", title: "النتيجة", sortable: !1 ,width: '20%'},
             { field: "CONTACTS", title: "مخالطين" ,width: '20%'},
             { field: "RANDOM_SCREENING", title: "مسح عشوائي",width: '20%'},
             { field: "DIRECTED_SCREENING", title: "مسح موجه",width: '20%'},
             { field: "SUSPECTED", title: "مشتبه به",width: '20%'},
           //  { field: "PATIENT", title: "مريض",width: '30%'},
         //    { field: "NOT_SPECIFIED", title: "غير مصاب",width: '30%'},
             { field: "TOTAL", title: "الإجمالي" ,width: '20%'},
              ],
            pagination: 0,
        });
    }
    function GET_REQUEST_TYPE_STAFF_BY_GOV_fn () {
        var P_FROM_DATE = $('#P_FROM_DATE').val();
        var P_TO_DATE = $('#P_TO_DATE').val();

        var datatable = $("#REQUEST_TYPE_STAFF_BY_GOV_DT").KTDatatable({
            data: { type: "remote", source: { read: { url: baseURL + 'Dashboard/GET_REQUEST_TYPE_STAFF_BY_GOV', params: {  P_FROM_DATE: P_FROM_DATE, P_TO_DATE: P_TO_DATE  } } }, pageSize: 10, serverPaging: !0, serverFiltering: !1, serverSorting: !0 },
            layout: { scroll: !1, height: null, footer: !1 },
            sortable: 0,
            columns: [
                { field: "CURRENT_GOVERNORATE_ID", title: "#", sortable: !1 ,width: '10%'},
                { field: "GOVERNORATE_NAME", title: "المحافظة" ,width: '20%'},
                { field: "CONTACTS_NOT_STAFF", title: "مواطن",width: '7%'},
                { field: "CONTACTS_STAFF", title: "كادر" ,width: '7%'},
                { field: "CONTACTS_TOTAL", title: "مجموع<small>(مخالطين)</small>",width: '7%'},
                { field: "SCREENING_NOT_STAFF", title: "مواطن",width: '7%'},
                { field: "SCREENING_STAFF", title: "كادر" ,width: '7%'},
                { field: "SCREENING_TOTAL", title: "مجموع<small>(مسح)</small>",width: '7%'},
                { field: "SUSPICTED_NOT_STAFF", title: "مواطن",width: '7%'},
                { field: "SUSPICTED_STAFF", title: "كادر" ,width: '7%'},
                { field: "SUSPICTED_TOTAL", title: "مجموع<small>(مشتبه)</small>",width: '7%'},
                { field: "GRAND_TOTAL", title: "الإجمالي" ,width: '7%'},

            ],
            pagination: 0,
            detail: {
                title: "عرض التفاصيل",
                content: subTableInit_staff,
            },
        });

    };

    function subTableInit_staff(e) {
       // alert($(this));
        console.log(e.currentTarget.attributes['data-value'].nodeValue);

        var dataId = $(this).attr("data-id");
        var P_FROM_DATE = $('#P_FROM_DATE').val();
        var P_TO_DATE = $('#P_TO_DATE').val();
        $('<div/>').attr('id', 'REQUEST_TYPE_BY_GOV_DT_' + e.currentTarget.attributes['data-value'].nodeValue).appendTo(e.detailCell).KTDatatable({
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: baseURL + 'Dashboard/GET_REQUEST_TYPE_STAFF_BY_CITY',
                        params: {
                            CURRENT_GOVERNORATE_ID: e.currentTarget.attributes['data-value'].nodeValue, P_FROM_DATE: P_FROM_DATE, P_TO_DATE: P_TO_DATE
                           /* query: {
                                generalSearch: '',
                                CURRENT_GOVERNORATE_ID: e.data.CURRENT_GOVERNORATE_ID,
                            },*/
                        },
                    },
                },
                pageSize: 10,
                serverPaging: true,
                serverFiltering: false,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: true,
                height: 300,
                footer: false,

                // enable/disable datatable spinner.
                spinner: {
                    type: 1,
                    theme: 'default',
                },
            },
            
            detail: {
                title: "عرض التفاصيل",
                content: subTableInit_staff2,
            },

            sortable: 0,
            responsive: true,
             pagination: 0,

            // columns definition
         columns: [
             { field: "NEIGHBORHOOD_ID", title: "#", sortable: !1 ,width: '2%'},
             { field: "NEIGHBORHOOD_NAME_AR", title: "الحي", sortable: !1 ,width: '5%'},
             { field: "CONTACTS_STAFF", title: "كادر" ,width: '9%'},
             { field: "CONTACTS_NOT_STAFF", title: "مواطن",width: '9%'},
             { field: "CONTACTS_TOTAL", title: "مجموع<small>(مخالطين)</small>",width: '9%'},
             { field: "SCREENING_STAFF", title: "كادر",width: '9%'},
             { field: "SCREENING_NOT_STAFF", title: "مواطن",width: '9%'},
             { field: "SCREENING_TOTAL", title: "مجموع<small>(مسح)</small>",width: '9%'},
             { field: "SUSPICTED_STAFF", title: "كادر",width: '9%'},
             { field: "SUSPICTED_NOT_STAFF", title: "مواطن",width: '9%'},
             { field: "SUSPICTED_TOTAL", title: "مجموع<small>(مشتبه)</small>",width: '9%'},
             { field: "GRAND_TOTAL", title: "الإجمالي" ,width: '5%'},
              ],
        });
    }


      function subTableInit_staff2(e) {
       // alert($(this));
        console.log(e.currentTarget.attributes['data-value'].nodeValue);

        var dataId = $(this).attr("data-id");
        var P_FROM_DATE = $('#P_FROM_DATE').val();
        var P_TO_DATE = $('#P_TO_DATE').val();
        $('<div/>').attr('id', 'REQUEST_TYPE_BY_GOV_DT_' + e.currentTarget.attributes['data-value'].nodeValue).appendTo(e.detailCell).KTDatatable({
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: baseURL + 'Dashboard/GET_REQUEST_TYPE_STAFF_BY_NEIGHBORHOOD',
                        params: {
                            CURRENT_NEIGHBORHOOD_ID: e.currentTarget.attributes['data-value'].nodeValue, P_FROM_DATE: P_FROM_DATE, P_TO_DATE: P_TO_DATE
                           /* query: {
                                generalSearch: '',
                                CURRENT_GOVERNORATE_ID: e.data.CURRENT_GOVERNORATE_ID,
                            },*/
                        },
                    },
                },
                pageSize: 10,
                serverPaging: true,
                serverFiltering: false,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: true,
                height: 300,
                footer: false,

                // enable/disable datatable spinner.
                spinner: {
                    type: 1,
                    theme: 'default',
                },
            },
            

            sortable: 0,
            responsive: true,
             pagination: 0,

            // columns definition
         columns: [
             { field: "NEIGHBORHOOD_ID", title: "#", sortable: !1 ,width: '1%'},
             { field: "TEST_RESULT", title: "النتيجة", sortable: !1 ,width: '5%'},
             { field: "CONTACTS_STAFF", title: "كادر" ,width: '9%'},
             { field: "CONTACTS_NOT_STAFF", title: "مواطن",width: '9%'},
             { field: "CONTACTS_TOTAL", title: "مجموع<small>(مخالطين)</small>",width: '9%'},
             { field: "SCREENING_STAFF", title: "كادر",width: '9%'},
             { field: "SCREENING_NOT_STAFF", title: "مواطن",width: '9%'},
             { field: "SCREENING_TOTAL", title: "مجموع<small>(مسح)</small>",width: '9%'},
             { field: "SUSPICTED_STAFF", title: "كادر",width: '9%'},
             { field: "SUSPICTED_NOT_STAFF", title: "مواطن",width: '9%'},
             { field: "SUSPICTED_TOTAL", title: "مجموع<small>(مشتبه)</small>",width: '9%'},
             { field: "GRAND_TOTAL", title: "الإجمالي" ,width: '5%'},
              ],
        });
    }




    $(document).ready(function () {
//         GET_REQUEST_TYPE();
//         GET_REQUEST_TYPE_BY_GOV();
    });

</script>


