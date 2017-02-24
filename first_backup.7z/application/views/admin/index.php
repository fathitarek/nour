<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>مؤسسة منة العيون الخيرية</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/bootstrap-responsive.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/styles.css">
    </head>
    <body class="dashboard">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <?php include 'nav_bar.php'; ?>

        <!-- ==================== DROPDOWN MENU FOR MOREOPTIONS ICON (hidden state) ==================== -->
        <ul class="dropdown-menu" id="moreOptionsMenu">
            <li class="dropdown-submenu">
                <a href="#">More options</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Second level link</a></li>
                    <li><a href="#">Second level link</a></li>
                    <li><a href="#">Second level link</a></li>
                    <li><a href="#">Second level link</a></li>
                    <li><a href="#">Second level link</a></li>
                </ul>
            </li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
        </ul>
        <!-- ==================== END OF DROPDOWN MENU ==================== -->

        <!-- ==================== PAGE CONTENT ==================== -->
        <div class="content">

            <!-- ==================== TITLE LINE FOR HEADLINE ==================== -->
            <div class="titleLine">
                <div class="container-fluid">
                    <div class="titleIcon"><i class="icon-dashboard"></i></div>
                    <ul class="titleLineHeading">
                        <li class="heading"><h1>مؤسسة منة العيون الخيرية</h1></li>
                    </ul>
                    <ul class="titleLineOnRight pull-right">
                        <li>
                            <span class="usersBar">100,235,549,222,639,335,800</span>
                            <h2 class="cyanText">{person_count}<span class="greyText">عضو</span></h2>
                        </li>
                        <li>
                            <span class="visitsBar">20,35,10,80,52,34,74,99,45,68</span>
                            <h2 class="redText">{visitsNum}<span class="greyText">زيارة</span></h2>
                        </li>
                        <li>
                            <span class="ordersBar">254,159,480,531,214,984,671</span>
                            <h2 class="greenText">{humancases}<span class="greyText">حالة انسانية</span></h2>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ==================== END OF TITLE LINE ==================== -->

            <!-- ==================== BREADCRUMBS / DATETIME ==================== -->
            <ul class="breadcrumb">
                <li><i class="icon-home"></i><a href="index.html"> الرئيسية</a> <span class="divider"><i class="icon-angle-right"></i></span></li>
                <li class="active">لوحة التحكم</li>
                <li class="moveDown pull-right">
                    <span class="time"></span>
                    <span class="date"></span>
                </li>    
            </ul>
            <!-- ==================== END OF BREADCRUMBS / DATETIME ==================== -->

            <!-- ==================== WIDGETS CONTAINER ==================== -->
            <div class="container-fluid">

                <!-- ==================== MASTER ACTIONS ROW ==================== -->
                <div class="row-fluid">
                    <!-- ==================== MASTER ACTIONS LIST ==================== -->
                    <ul class="masterActions">
                        <li class="active">
                            <a href="<?php echo base_url(); ?>feedback/feedback_management">
                            <i class="icon-envelope redText"></i>
                            <h1 class="redText">رسائل اتصل بنا</h1>
                            <p><a href="<?php echo base_url(); ?>feedback/feedback_management">تصفح الرسائل</a></p>
                            <div class="notifyCircle red">{feedback}</div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url();?>person/person_management">
                            <i class="icon-ok-sign cyanText"></i>
                            <h1 class="cyanText">الأعضاء</h1>
                            <p><a href="<?php echo base_url();?>person/person_management">قم بادارة اعضاء الموقع</a></p>
                            <div class="notifyCircle cyan">{nonActivePersons}</div>
                            </a>
                            
                        </li>
                        
<!--                        <li>
                            <a href="<?php echo base_url();?>project/project_management">
                                <i class="icon-cogs greenText"></i>
                                <h1 class="greenText">المشاريع الجديدة</h1>
                                <p><a href="<?php echo base_url();?>project/project_management">تصفح المشاريع الجديدة</a></p>
                                <div class="notifyCircle green">{nonActiveProjects}</div>
                            </a>
                        </li>

-->
                        <li>
                            <a href="<?php echo base_url(); ?>composedMsgs/composedMsgs_management">
                            <i class="icon-bar-chart orangeText"></i>
                            <h1 class="orangeText">النشرة البريدية</h1>
                            <p><a href="<?php echo base_url(); ?>composedMsgs/composedMsgs_management">قم بمراسلة جميع المشتركين</a></p>
                            <!--<div class="notifyCircle grey">2</div>-->
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>slider/slider_management">
                            <i class="icon-inbox greyText"></i>
                            <h1 class="greyText">السليدر</h1>
                            <p><a href="<?php echo base_url(); ?>slider/slider_management">قم بالتحكم في السليدر الخارجي</a></p>
<!--                            <div class="notifyCircle grey">2</div>-->
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url(); ?>humancases/humancases_management">
                            <i class="icon-cog greyText"></i>
                            <h1 class="greyText">حالات انسانية</h1>
                            <p><a href="<?php echo base_url(); ?>humancases/humancases_management">اعرض الحالات الانسانية</a></p>
                            <div class="notifyCircle grey">{humancases}</div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url(); ?>events/events_management">
                            <i class="icon-cog greyText"></i>
                            <h1 class="greyText">احداث هامة في تاريخ المؤسسة</h1>
                            <p><a href="<?php echo base_url(); ?>events/events_management">اعرض الاحداث الهامة</a></p>
                            <div class="notifyCircle grey">{events}</div>
                            </a>
                        </li>
                        
                        
                        <li>
                            <a href="<?php echo base_url();?>support/support_management">
                                <i class="icon-cogs greenText"></i>
                                <h1 class="greenText">دعم الحالات الانسانية</h1>
                                <p><a href="<?php echo base_url();?>support/support_management">شاهد تفاعل الاعضاء مع الحالات الانسانية</a></p>
                            </a>
                        </li>
                        
                        
                        <li>
                            <a href="<?php echo base_url();?>homeBlocks/blocks_management">
                                <i class="icon-bold greenText"></i>
                                <h1 class="greenText">بلوكات الصفحة الرئيسية</h1>
                                <p><a href="<?php echo base_url();?>homeBlocks/blocks_management">قم بتعديل بلوكات الصفحة الرئيسية</a></p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url();?>pages/pages_management">
                                <i class="icon-ok-sign greenText"></i>
                                <h1 class="greenText">الصفحات</h1>
                                <p><a href="<?php echo base_url();?>pages/pages_management">قم بتعديل صفحات الموقع</a></p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url();?>team/team_management">
                                <i class="icon-ok-sign greenText"></i>
                                <h1 class="greenText">الفريق</h1>
                                <p><a href="<?php echo base_url();?>team/team_management">ضع اعضاء الفريق</a></p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url();?>settings/settings_management">
                                <i class="icon-bold greenText"></i>
                                <h1 class="greenText">الإعدادات الرئيسية للموقع</h1>
                                <p><a href="<?php echo base_url();?>settings/settings_management">عدل البيانات الرئيسية للمؤسسة</a></p>
                            </a>
                        </li>
                        
                        
                        
                        
                        <li>
                            <a href="<?php echo base_url();?>banners/banners_management">
                                <i class="icon-cogs greenText"></i>
                                <h1 class="greenText">الإعلانات</h1>
                                <p><a href="<?php echo base_url();?>banners/banners_management"></a></p>
                            </a>
                        </li>
                    </ul>
                    <!-- ==================== END OF MASTER ACTIONS LIST ==================== -->
                </div>
                <!-- ==================== END OF MASTER ACTIONS ROW ==================== -->
                
            </div>
            <!-- ==================== END OF WIDGETS CONTAINER ==================== -->
        </div>
        <!-- ==================== END OF PAGE CONTENT ==================== -->
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?php echo base_url(); ?>common/js/vendor/bootstrap-slider.js"></script>                     <!-- bootstrap slider plugin -->
        <script src="<?php echo base_url(); ?>common/js/vendor/jquery.sparkline.min.js"></script>                 <!-- small charts plugin -->
        <script src="<?php echo base_url(); ?>common/js/vendor/jquery.flot.min.js"></script>                      <!-- charts plugin -->
        <script src="<?php echo base_url(); ?>common/js/vendor/jquery.flot.resize.min.js"></script>               <!-- charts plugin / resizing extension -->
        <script src="<?php echo base_url(); ?>common/js/vendor/jquery.flot.pie.min.js"></script>                  <!-- charts plugin / pie chart extension -->
        <script src="<?php echo base_url(); ?>common/js/vendor/wysihtml5-0.3.0_rc2.min.js"></script>              <!-- wysiwyg plugin -->
        <script src="<?php echo base_url(); ?>common/js/vendor/bootstrap-wysihtml5-0.0.2.min.js"></script>        <!-- wysiwyg plugin / bootstrap extension -->
        <script src="<?php echo base_url(); ?>common/js/vendor/bootstrap-tags.js"></script>                       <!-- multivalue input tags -->
        <script src="<?php echo base_url(); ?>common/js/vendor/jquery.tablesorter.min.js"></script>               <!-- tablesorter plugin -->
        <script src="<?php echo base_url(); ?>common/js/vendor/jquery.tablesorter.widgets.min.js"></script>       <!-- tablesorter plugin / widgets extension -->
        <script src="<?php echo base_url(); ?>common/js/vendor/jquery.tablesorter.pager.min.js"></script>         <!-- tablesorter plugin / pager extension -->
        <script src="<?php echo base_url(); ?>common/js/vendor/raphael.2.1.0.min.js"></script>                    <!-- vector graphic plugin / for justgage.js -->
        <script src="<?php echo base_url(); ?>common/js/vendor/justgage.js"></script>                             <!-- justgage plugin -->
        <script src="<?php echo base_url(); ?>common/js/vendor/bootstrap-multiselect.js"></script>                <!-- multiselect plugin -->
        <script src="<?php echo base_url(); ?>common/js/vendor/bootstrap-datepicker.js"></script>                 <!-- datepicker plugin -->
        <script src="<?php echo base_url(); ?>common/js/vendor/bootstrap-colorpicker.js"></script>                <!-- colorpicker plugin -->
        <script src="<?php echo base_url(); ?>common/js/vendor/parsley.min.js"></script>                          <!-- parsley validator plugin -->
        <script src="<?php echo base_url(); ?>common/js/vendor/formToWizard.js"></script>                         <!-- form wizard plugin -->
        <script src="<?php echo base_url(); ?>common/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>common/js/vendor/bootstrap-editable.min.js"></script>               <!-- editable fields plugin -->
        <script src="<?php echo base_url(); ?>common/js/thekamarel.min.js"></script>                            <!-- main project js file -->

        <script>
            $(function () {
                /* realtime chart */

                var container = $("#realTimeChart");

                // Determine how many data points to keep based on the placeholder's initial size;
                // this gives us a nice high-res plot while avoiding more than one point per pixel.

                var maximum = container.outerWidth() / 2 || 300;

                //

                var data = [];

                function getRandomData() {

                    if (data.length) {
                        data = data.slice(1);
                    }

                    while (data.length < maximum) {
                        var previous = data.length ? data[data.length - 1] : 50;
                        var y = previous + Math.random() * 10 - 5;
                        data.push(y < 0 ? 0 : y > 100 ? 100 : y);
                    }

                    // zip the generated y values with the x values

                    var res = [];
                    for (var i = 0; i < data.length; ++i) {
                        res.push([i, data[i]])
                    }

                    return res;
                }

                //

                series = [{
                        data: getRandomData(),
                        lines: {
                            fill: true,
                            fillColor: '#e2e2e2'
                        },
                        color: '#b2b2b2'
                    }];

                //

                var plot = $.plot(container, series, {
                    grid: {
                        color: 'rgba(0,0,0, .3)',
                        borderColor: 'rgba(0,0,0, .3)',
                        borderWidth: 1,
                        minBorderMargin: 20,
                        labelMargin: 10,
                        backgroundColor: {
                            colors: ["#fff", "#e2e2e2"]
                        },
                        margin: {
                            top: 8,
                            bottom: 20,
                            left: 20
                        },
                        markings: function (axes) {
                            var markings = [];
                            var xaxis = axes.xaxis;
                            for (var x = Math.floor(xaxis.min); x < xaxis.max; x += xaxis.tickSize * 2) {
                                markings.push({xaxis: {from: x, to: x + xaxis.tickSize}, color: "rgba(232, 232, 255, 0.2)"});
                            }
                            return markings;
                        }
                    },
                    xaxis: {
                        tickFormatter: function () {
                            return "";
                        }
                    },
                    yaxis: {
                        min: 0,
                        max: 110
                    },
                    legend: {
                        show: true
                    }
                });

                // Create the demo X and Y axis labels

                var yaxisLabel = $("<div class='axisLabel yaxisLabel'></div>")
                        .text("Response Time (ms)")
                        .appendTo(container);

                // Since CSS transforms use the top-left corner of the label as the transform origin,
                // we need to center the y-axis label by shifting it down by half its width.
                // Subtract 20 to factor the chart's bottom margin into the centering.

                yaxisLabel.css("margin-top", -20);

                // Update the random dataset at 25FPS for a smoothly-animating chart

                setInterval(function updateRandom() {
                    series[0].data = getRandomData();
                    plot.setData(series);
                    plot.draw();
                }, 40);

                // pie chart 

                var dataPie = [],
                        pieSeries = Math.floor(Math.random() * 6) + 3;

                for (var i = 0; i < pieSeries; i++) {
                    dataPie[i] = {
                        label: "Series" + (i + 1),
                        data: Math.floor(Math.random() * 100) + 1
                    }
                }

                $.plot('#firstPieChart', dataPie, {
                    series: {
                        pie: {
                            show: true,
                            radius: 1,
                            label: {
                                show: true,
                                radius: 1,
                                formatter: labelFormatter,
                                background: {
                                    opacity: 0.8
                                }
                            }
                        }
                    },
                    legend: {
                        show: false
                    }
                });

                $.plot('#thirdPieChart', dataPie, {
                    series: {
                        pie: {
                            innerRadius: 0.5,
                            show: true
                        }
                    },
                    legend: {
                        show: true
                    }
                });

                // A custom label formatter used by several of the plots

                function labelFormatter(label, series) {
                    return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
                }
                ;

                /*=============================================================================================
                 ====================================== LOAD GAUGES CHARTS ====================================
                 =============================================================================================*/

                function loadGauges() {
                    var g1, g2, g3, g4, g5

                    var g1 = new JustGage({
                        id: "g1",
                        value: getRandomInt(80, 100),
                        min: 0,
                        max: 100,
                        title: "CPU",
                        label: "%",
                        levelColorsGradient: false
                    });

                    var g2 = new JustGage({
                        id: "g2",
                        value: getRandomInt(10, 25),
                        min: 0,
                        max: 100,
                        title: "Memory",
                        label: "%",
                        levelColorsGradient: false
                    });

                    var g3 = new JustGage({
                        id: "g3",
                        value: getRandomInt(40, 70),
                        min: 0,
                        max: 100,
                        title: "Network",
                        label: "%",
                        levelColorsGradient: false
                    });

                    var g4 = new JustGage({
                        id: "g4",
                        value: getRandomInt(38, 38),
                        min: 0,
                        max: 100,
                        title: "Disk space",
                        label: "%",
                        levelColorsGradient: false
                    })

                    var g5 = new JustGage({
                        id: "g5",
                        value: getRandomInt(38, 42),
                        min: 20,
                        max: 110,
                        title: "Temperature",
                        label: "°C",
                        levelColorsGradient: false
                    })

                    // set intreval for gauges charts refresh
                    setInterval(function () {
                        g1.refresh(getRandomInt(80, 100));
                        g2.refresh(getRandomInt(10, 25));
                        g3.refresh(getRandomInt(40, 70));
                        g5.refresh(getRandomInt(38, 42));
                    }, 2500);

                    $('#serverStats').hide();

                }
                ;

                loadGauges();

                /*=============================================================================================
                 ==================================== LOAD FLOT CHARTS ========================================
                 =============================================================================================*/

                function loadFlotCharts() {
                    var months = ["January", "February", "March", "April", "May", "Juny", "July", "August", "September", "October", "November", "December"];
                    var usersData = [{
                            data: [[1, 18], [2, 12], [3, 62], [4, 54], [5, 20], [6, 100], [7, 235], [8, 549], [9, 222], [10, 639], [11, 335], [12, 800]],
                            color: '#33B5E5'
                        }];
                    var visitsData = [{
                            data: [[1, 18], [2, 10], [3, 20], [4, 35], [5, 10], [6, 80], [7, 52], [8, 34], [9, 74], [10, 99], [11, 45], [12, 68]],
                            color: '#FF4444'
                        }];
                    var ordersData = [{
                            data: [[1, 84], [2, 245], [3, 128], [4, 354], [5, 120], [6, 254], [7, 159], [8, 480], [9, 531], [10, 214], [11, 984], [12, 671]],
                            color: '#99CC00'
                        }];

                    // Bars
                    $.plot($('.newUsersChart'), usersData, {
                        series: {
                            bars: {
                                show: true,
                                barWidth: .8,
                                align: 'center'
                            },
                            shadowSize: 0
                        },
                        grid: {
                            color: 'rgba(0,0,0, .3)',
                            borderColor: 'rgba(0,0,0, .3)',
                            borderWidth: 1,
                            hoverable: true
                        },
                        xaxis: {
                            ticks: [[1, "Jan"], [2, "Feb"], [3, "Mar"], [4, "Apr"], [5, "May"], [6, "Jun"], [7, "Jul"], [8, "Aug"], [9, "Sep"], [10, "Oct"], [11, "Nov"], [12, "Dec"]],
                            tickColor: 'transparent',
                            tickDecimals: 2
                        },
                        yaxis: {
                            tickSize: 200
                        }
                    });

                    $.plot($('.newVisitsChart'), visitsData, {
                        series: {
                            bars: {
                                show: true,
                                barWidth: .8,
                                align: 'center'
                            },
                            shadowSize: 0
                        },
                        grid: {
                            color: 'rgba(0,0,0, .3)',
                            borderColor: 'rgba(0,0,0, .3)',
                            borderWidth: 1,
                            hoverable: true
                        },
                        xaxis: {
                            ticks: [[1, "Jan"], [2, "Feb"], [3, "Mar"], [4, "Apr"], [5, "May"], [6, "Jun"], [7, "Jul"], [8, "Aug"], [9, "Sep"], [10, "Oct"], [11, "Nov"], [12, "Dec"]],
                            tickColor: 'transparent',
                            tickDecimals: 2
                        },
                        yaxis: {
                            tickSize: 25
                        }
                    });

                    $.plot($('.newOrdersChart'), ordersData, {
                        series: {
                            bars: {
                                show: true,
                                barWidth: .8,
                                align: 'center'
                            },
                            shadowSize: 0
                        },
                        grid: {
                            color: 'rgba(0,0,0, .3)',
                            borderColor: 'rgba(0,0,0, .3)',
                            borderWidth: 1,
                            hoverable: true
                        },
                        xaxis: {
                            ticks: [[1, "Jan"], [2, "Feb"], [3, "Mar"], [4, "Apr"], [5, "May"], [6, "Jun"], [7, "Jul"], [8, "Aug"], [9, "Sep"], [10, "Oct"], [11, "Nov"], [12, "Dec"]],
                            tickColor: 'transparent',
                            tickDecimals: 2
                        },
                        yaxis: {
                            tickSize: 250
                        }
                    });

                    function showTooltip(x, y, contents) {
                        $('<div id="tooltip">' + contents + '</div>').css({
                            top: y - 16,
                            left: x + 20
                        }).appendTo('body').fadeIn();
                    }

                    var previousPoint = null;

                    $('.newUsersChart, .newVisitsChart, .newOrdersChart').bind('plothover', function (event, pos, item) {
                        if (item) {
                            if (previousPoint != item.dataIndex) {
                                previousPoint = item.dataIndex;
                                $('#tooltip').remove();
                                var x = item.datapoint[0],
                                        y = item.datapoint[1];
                                if ($(this).hasClass('newUsersChart')) {
                                    showTooltip(item.pageX, item.pageY, months[x - 1] + '<br/>' + '<strong class="cyanText">' + y + '</strong>' + ' ' + 'new users registered');
                                }
                                if ($(this).hasClass('newVisitsChart')) {
                                    showTooltip(item.pageX, item.pageY, months[x - 1] + '<br/>' + '<strong class="redText">' + y + '</strong>' + ' ' + 'new visits');
                                }
                                if ($(this).hasClass('newOrdersChart')) {
                                    showTooltip(item.pageX, item.pageY, months[x - 1] + '<br/>' + '<strong class="greenText">' + y + '</strong>' + ' ' + 'new orders');
                                }
                            }
                        } else {
                            $('#tooltip').remove();
                            previousPoint = null;
                        }
                    });
                }
                ;

                loadFlotCharts();

                /*==============================================================================================
                 ====================================== LOAD WYSIWYG EDITOR ====================================
                 =============================================================================================*/

                $('#messageContent').wysihtml5();

                /*==============================================================================================
                 ====================================== MULTIVALUE INPUT =======================================
                 =============================================================================================*/

                var tags = $('#recipients').tags({
                    tagData: ["ici.kamarel@tattek.com", "fake@email.com"],
                    promptText: 'Type an email address...',
                    suggestions: ["a.nunc.In@acnulla.com", "sem@Sedid.ca", "consequat.nec.mollis@velit.co.uk", "Phasellus.in@lectus.ca", "nibh.sit.amet@In.net", "auctor@sodales.ca", "ultrices@velitegestas.org", "odio.Etiam@luctus.edu", "felis.Nulla.tempor@laoreet.co.uk", "mollis@tempor.net", "odio.auctor@tristique.com", "nec.tempus.mauris@felisadipiscingfringilla.ca", "risus.In@mi.co.uk", "vestibulum.neque@loremegetmollis.net", "tincidunt.dui.augue@pedeacurna.org", "blandit.enim.consequat@semPellentesque.org", "fringilla.est@non.edu", "Sed.eu@sitametdapibus.org", "in.dolor@etmagnaPraesent.net", "nisl.sem@dui.edu", "amet.risus.Donec@dolorsitamet.edu", "vulputate@Cras.org", "tempus.eu@Loremipsumdolor.net", "magna.Duis.dignissim@interdumligula.edu", "fringilla.porttitor.vulputate@ornare.ca", "non.cursus.non@egestasAliquamnec.org", "imperdiet.ullamcorper.Duis@magnisdis.net", "ornare.elit.elit@risus.ca", "elit.pede.malesuada@laoreetlectusquis.ca", "eget.lacus@adipiscing.net", "eleifend@facilisisegetipsum.com", "eleifend@risusNulla.com", "ac.mattis.velit@Integer.ca", "Quisque@sedest.edu", "non@iaculislacuspede.ca", "est@Aeneanegestashendrerit.org", "Suspendisse.ac@massa.edu", "eros.non@pulvinar.ca", "Quisque.ornare@feliseget.com", "ut@semperdui.org", "Suspendisse.sed@eleifendnec.org", "felis.Donec.tempor@pedeblanditcongue.co.uk", "ornare@Cumsociisnatoque.ca", "ornare.In.faucibus@id.com", "sed.libero.Proin@Nunc.org", "aliquet.libero@auctor.co.uk", "Suspendisse.aliquet@Innec.ca", "a.odio.semper@hendrerit.net", "ipsum@senectus.ca", "tellus.Phasellus.elit@aultriciesadipiscing.ca", "Etiam@ligula.co.uk", "commodo.ipsum@eteros.co.uk", "rutrum@Nuncullamcorper.ca", "amet@sitametdiam.edu", "tristique.ac@acfacilisisfacilisis.com", "diam.Duis@auctornonfeugiat.com", "eu.augue@magnaatortor.net", "quis.diam.luctus@temporaugueac.edu", "sagittis.lobortis.mauris@Namconsequat.com", "Aliquam@laoreetipsum.org", "velit.Quisque@euenimEtiam.co.uk", "semper@cursus.org", "risus.Morbi@duisemperet.edu", "quis.turpis.vitae@vel.org", "Suspendisse.aliquet@mollisPhaselluslibero.com", "Donec@nonlacinia.com", "ullamcorper.nisl.arcu@Nuncquis.co.uk", "erat.vel@nequenonquam.ca", "pharetra.Quisque@Phasellusinfelis.net", "sem.egestas.blandit@nislarcuiaculis.com", "pharetra@sapiengravida.net", "dolor.Quisque.tincidunt@Nunc.ca", "non@ametconsectetueradipiscing.net", "ridiculus.mus.Proin@imperdieterat.com", "turpis@Quisquenonummy.org", "eget@Ut.org", "non.dui@diam.com", "fringilla.ornare.placerat@risus.co.uk", "est.mauris.rhoncus@lectuspedeet.co.uk", "ultrices.posuere.cubilia@vel.ca", "sollicitudin.orci@dolornonummyac.ca", "rhoncus@diameu.com", "vitae.velit.egestas@utnisi.net", "leo.Vivamus@commodoat.co.uk", "felis@nec.net", "Suspendisse.commodo.tincidunt@eueleifend.edu", "diam.at.pretium@ultriciessem.ca", "est@nasceturridiculusmus.co.uk", "eu.tellus.Phasellus@velsapienimperdiet.net", "sit.amet@consequatauctor.net", "mauris.Integer@etrutrum.edu", "dictum@tortordictumeu.ca", "Nullam@montes.org", "congue.In.scelerisque@Suspendisse.org", "volutpat@lorem.ca", "eros.turpis.non@Nullamlobortis.co.uk", "magna.malesuada@Sedetlibero.org", "lectus.justo.eu@interdumNuncsollicitudin.edu", "et.netus@natoquepenatibuset.net", "odio@Proinvelit.co.uk"],
                });

                console.log(tags.getTags());

                $('#recipients').keypress(function (e) {
                    if (e.keyCode == '13') {
                        e.preventDefault();
                    }
                });

                $(window).resize(function () {
                    $('#recipients').tags().adjustInputPosition();
                });

                /*=============================================================================================
                 ============================== LOAD TABLESORTER PAGER SETTINGS ===============================
                 =============================================================================================*/

                // define pager options
                var pagerOptions = {
                    // target the pager markup - see the HTML block below
                    container: $(".pager"),
                    // output string - default is '{page}/{totalPages}'; possible variables: {page}, {totalPages}, {startRow}, {endRow} and {totalRows}
                    output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
                    // if true, the table will remain the same height no matter how many records are displayed. The space is made up by an empty
                    // table row set to a height to compensate; default is false
                    fixedHeight: false,
                    // remove rows from the table to speed up the sort of large tables.
                    // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
                    removeRows: false,
                    // go to page selector - select dropdown that sets the current page
                    cssGoto: '.gotoPage'
                };

                /*=============================================================================================
                 ======================================= LOAD TABLESORTER =====================================
                 =============================================================================================*/

                $("#membersTable").tablesorter({
                    headers: {
                        0: {sorter: false, filter: false},
                        1: {sorter: 'text'},
                        2: {sorter: 'shortDate'},
                        3: {sorter: 'text'},
                        4: {sorter: 'text'},
                        5: {sorter: false, filter: false}
                    },
                    dateFormat: 'uk',
                    // sort on the first column and third column in ascending order
                    sortList: [[1, 0]],
                    // hidden filter input/selects will resize the columns, so try to minimize the change
                    widthFixed: true,
                    // initialize zebra striping and filter widgets
                    widgets: ["zebra", "filter"],
                    widgetOptions: {
                        // If there are child rows in the table (rows with class name from "cssChildRow" option)
                        // and this option is true and a match is found anywhere in the child row, then it will make that row
                        // visible; default is false
                        filter_childRows: false,
                        // if true, a filter will be added to the top of each table column;
                        // disabled by using -> headers: { 1: { filter: false } } OR add class="filter-false"
                        // if you set this to false, make sure you perform a search using the second method below
                        filter_columnFilters: true,
                        // css class applied to the table row containing the filters & the inputs within that row
                        filter_cssFilter: 'tablesorter-filter',
                        // add custom filter functions using this option
                        // see the filter widget custom demo for more specifics on how to use this option
                        filter_functions: null,
                        // if true, filters are collapsed initially, but can be revealed by hovering over the grey bar immediately
                        // below the header row. Additionally, tabbing through the document will open the filter row when an input gets focus
                        filter_hideFilters: true,
                        // Set this option to false to make the searches case sensitive
                        filter_ignoreCase: true,
                        // Delay in milliseconds before the filter widget starts searching; This option prevents searching for
                        // every character while typing and should make searching large tables faster.
                        filter_searchDelay: 300,
                        // Set this option to true to use the filter to find text from the start of the column
                        // So typing in "a" will find "albert" but not "frank", both have a's; default is false
                        filter_startsWith: false,
                        // Filter using parsed content for ALL columns
                        // be careful on using this on date columns as the date is parsed and stored as time in seconds
                        filter_useParsedData: false

                    }

                })

                        /*=============================================================================================
                         ================================== LOAD PAGER TO TABLESORTER =================================
                         =============================================================================================*/

                        .tablesorterPager(pagerOptions);

                $('.pagesize').multiselect();


                /*=============================================================================================
                 ================================ SEARCH FUNCTION FOR WHOLE TABLE =============================
                 =============================================================================================*/

                // Write on keyup event of keyword input element
                $("#memberSearch").keyup(function () {
                    // When value of the input is not blank
                    if ($(this).val() != "")
                    {
                        // Show only matching TR, hide rest of them
                        $("#membersTable tbody>tr").hide();
                        $("#membersTable td:contains-ci('" + $(this).val() + "')").parent("tr").show();
                    }
                    else
                    {
                        // When there is no input or clean again, show everything back
                        $("#membersTable tbody>tr").show();
                    }
                });

                /*=============================================================================================
                 ======================== ADD ROLLER GRIP TO TABLESORTER HIDEME ROW ===========================
                 =============================================================================================*/

                $('.tablesorter-filter-row td:first').append('<div class="tableFilterRoller"></div>');

                /*=============================================================================================
                 ======================= ADD MOREOPTIONS ICON TO HIDDEN ROW WITH FILTERS ======================
                 =============================================================================================*/

                $('.tablesorter-filter-row td').not(':first').not(':last').append('<i class="icon-play-circle moreOptions pull-right"></i>');

                /*=============================================================================================
                 ================================ TABLE ROW INFO / EDIT / DELETE ICON ACTIONS =================
                 =============================================================================================*/


                var showMemberIcon = $('i.info').parent(),
                        editMemberIcon = $('i.edit').parent(),
                        deleteMemberIcon = $('i.delete').parent();

                $(showMemberIcon).tooltip({
                    title: 'View member profile'
                });

                $(editMemberIcon).tooltip({
                    title: 'Edit member profile'
                });

                $(deleteMemberIcon).tooltip({
                    title: 'Delete member'
                });

                $('i.info, i.edit, i.delete').parent().hover(function () {
                    $(this).children().stop().animate({
                        opacity: 1
                    }, 200);
                }, function () {
                    $(this).children().stop().animate({
                        opacity: .7
                    }, 200);
                });

                /*=============================================================================================
                 ===================================== SET FIELDS EDITABLE ====================================
                 =============================================================================================*/

                $('#membersTable a.username').editable({
                    type: 'text',
                    name: 'username',
                    url: '/post',
                    title: 'Enter username',
                    placement: 'right'
                });

                $('#membersTable a.registrationDate').editable({
                    type: 'date',
                    viewformat: 'mm/dd/yyyy',
                    name: 'registrationDate',
                    url: '/post',
                    title: 'Enter date of registration'
                });

                $('#membersTable a.memberGroup').editable({
                    type: 'select',
                    source: [{value: 1, text: 'admin'}, {value: 2, text: 'editor'}, {value: 3, text: 'author'}, {value: 4, text: 'user'}, {value: 5, text: 'second technician'}],
                    name: 'memberGroup',
                    url: '/post',
                    title: 'Choose a role'
                }).click(function () {
                    $(this).next().find('select').multiselect();
                });

                $('#membersTable a.memberStatus').editable({
                    type: 'select',
                    source: [{value: 'active', text: 'active'}, {value: 'inactive', text: 'inactive'}, {value: 'banned', text: 'banned'}, {value: 'pending', text: 'pending'}],
                    name: 'memberStatus',
                    url: '/post',
                    title: 'Choose a status',
                    success: function () {
                        var label = $(this).parent() // define variable for link parent
                        selectVal = $(this).next().find('select').val(); // define variable for selected value


                        $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                    }
                }).click(function () {
                    $(this).next().find('select').multiselect();
                });

            })
        </script>
    </body>
</html>