<!DOCTYPE html>
<html lang="en">
    <head>
        <title>مؤسسة منة العيون الخيرية</title>
        <meta charset="utf-8">
        <meta name = "format-detection" content = "telephone=no" />
        <link rel="icon" href="<?php echo base_url(); ?>common/images/favicon.ico">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>common/images/favicon.ico" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/slider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/common/css/form.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/common/css/jquery-ui-1.10.1.custom.min.css">

        <!--------------------------------------------------------------------------------------->
        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/mstyles.css">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>common/js/mscript.js"></script>
        <!--------------------------------------------------------------------------------------->
        <?php if (isset($msg)) { ?>
            <script>
                alert('<?php echo $msg; ?>');
            </script>
        <?php } ?>
        <script src="<?php echo base_url(); ?>/common/js/jquery.js"></script>
        
        
        <script src="<?php echo base_url(); ?>/common/js/gen_validatorv4.js"></script>
        
        <script src="<?php echo base_url(); ?>/common/js/jquery-migrate-1.1.1.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/script.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/jquery.ui.totop.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/superfish.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/jquery.equalheights.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/jquery.mobilemenu.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/owl.carousel.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/jquery.flexslider-min.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/kwiks.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/TMForm.js"></script>
        <script src="<?php echo base_url(); ?>/common/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script>
            function getXMLHTTP() {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                return xmlhttp;
            }

            function subscribe() {
                email = $("#subscribe-email").val();
                if(email==""){
                	document.getElementById("subscribe-report").innerHTML = "من فضلك ادخل بريدك الإلكتروني";
                }else{
                xmlhttp = getXMLHTTP();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("subscribe-report").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "<?php echo base_url(); ?>newsletter_subscriber/addSubscriber/" + email, true);
                xmlhttp.send();
                }
            }

            function renewBalance() {
                balanceNo = $("#renewBalanceNo").val();
                if(balanceNo==""){
                document.getElementById("renew-report").innerHTML = "من فضلك ادخل رقم كارت الشحن";
                }else{
                xmlhttp = getXMLHTTP();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("renew-report").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "<?php echo base_url(); ?>membershiprenew/renewbalance/" + balanceNo, true);
                xmlhttp.send();
                }
            }

            function rememberPassword() {
                email = $("#rememberEmail").val();
                xmlhttp = getXMLHTTP();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("remember-report").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "<?php echo base_url(); ?>person/rememberPassword/"+ email, true);
                xmlhttp.send();
            }

            $(document).ready(function() {
                $("#rememberPassword").hide();
                $("#renewBalance").hide();
            });
        </script>

        <script>
            function showForm() {
                $("#rememberPassword").show();
                $("#rememberPassword").dialog();
            }

            function renewBalanceForm() {
                $("#renewBalance").show();
                $("#renewBalance").dialog();
            }
        </script>
        <script>
            $(document).ready(function() {
                $().UItoTop({easingType: 'easeOutQuart'});
            })
        </script>



        <script>
            $(document).ready(function() {
                $().UItoTop({easingType: 'easeOutQuart'});
                var owl = $("#owl");
                var owl1 = $("#owl1");
                owl.owlCarousel({
                    items: 4, //10 items above 1000px browser width
                    itemsDesktop: [995, 3], //5 items between 1000px and 901px
                    itemsDesktopSmall: [767, 2], // betweem 900px and 601px
                    itemsTablet: [700, 2], //2 items between 600 and 0
                    itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                    navigation: true,
                });

                owl1.owlCarousel({
                    items: 5, //10 items above 1000px browser width
                    //itemsDesktop: [995, 3], //5 items between 1000px and 901px
                    //itemsDesktopSmall: [767, 2], // betweem 900px and 601px
                    //itemsTablet: [700, 2], //2 items between 600 and 0
                    ///itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                    navigation: true,
                });
            })
            var Main = Main || {};
            jQuery(window).load(function() {
                window.responsiveFlag = jQuery('#responsiveFlag').css('display');
                Main.gallery = new Gallery();
                jQuery(window).resize(function() {
                    Main.gallery.update();
                });
            });
            function Gallery() {
                var self = this,
                        container = jQuery('.flexslider'),
                        clone = container.clone(false);
                this.init = function() {
                    if (responsiveFlag == 'block') {
                        var slides = container.find('.slides');
                        slides.kwicks({
                            max: 500,
                            spacing: 0
                        }).find('li > a').click(function() {
                            return false;
                        });
                    } else {
                        container.flexslider();
                    }
                }
                this.update = function() {
                    var currentState = jQuery('#responsiveFlag').css('display');
                    if (responsiveFlag != currentState) {
                        responsiveFlag = currentState;
                        container.replaceWith(clone);
                        container = clone;
                        clone = container.clone(false);
                        this.init();
                    }
                }
                this.init();
            }
        </script>
        <!--[if lt IE 8]>
        <div style=' clear: both; text-align:center; position: relative;'>
                <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                        <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
                </a>
        </div>
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>/common/js/html5shiv.js"></script>
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>/common/css/ie.css">
        <![endif]-->
    </head>

    <body class="page1" id="top">
        <!--==============================header=================================-->
        <header>
            <div class="clear"></div>
            <div class="container_12">
                <div class="grid_12">
                    <h1>
                        <a href="<?php echo base_url(); ?>homepage">
                            <img src="<?php echo base_url(); ?>common/images/logo.png" alt="Menna Charity">
                        </a>
                    </h1>                    
                    <!------------------------------------->
                    <div id='cssmenu'>
                        <ul>
                            <li><a href='<?php echo base_url(); ?>homepage'><span>الرئيسية</span></a></li>
                            <li><a href='<?php echo base_url(); ?>pages/displaypage/1'><span>عن المؤسسة</span></a></li>
                            <li class='has-sub'><a href='#'><span>ميادين العمل</span></a>
                                <ul>
                                    <li><a href='<?php echo base_url(); ?>pages/displayPage/2'><span>مساعدات</span></a></li>
                                    <li><a href='<?php echo base_url(); ?>pages/displayPage/3'><span>معارض ملابس</span></a></li>
                                    <li><a href='<?php echo base_url(); ?>pages/displayPage/4'><span>رعاية ايتام</span></a></li>
                                    <li><a href='<?php echo base_url(); ?>pages/displayPage/5'><span>مساعدات طبية</span></a></li>
                                    <li><a href='<?php echo base_url(); ?>pages/displayPage/6'><span>نشاط تعليمي</span></a></li>
                                    <li><a href='<?php echo base_url(); ?>pages/displayPage/7'><span>رعاية ذوي الاحتياجات الخاصة</span></a></li>
                                    <li><a href='<?php echo base_url(); ?>pages/displayPage/8'><span>رعاية المسنين</span></a></li>
                                    <li><a href='<?php echo base_url(); ?>pages/displayPage/12'><span>تمويل المشروعات</span></a></li>
                                    <li><a href='<?php echo base_url(); ?>pages/displayPage/9'><span>إعمار المساجد</span></a></li>
                                    <li><a href='<?php echo base_url(); ?>pages/displayPage/10'><span>ندوات ورحلات</span></a></li>
                                    <li><a href='<?php echo base_url(); ?>pages/displayPage/11'><span>تحفيظ قران</span></a></li>
                                </ul>
                            </li>
                            <li><a href='<?php echo base_url(); ?>humancases/cases_render'><span>دعم الحالات الانسانية</span></a></li>
                            <li class='last'><a href='<?php echo base_url(); ?>feedback/feedbackform'><span>اتصل بنا</span></a></li>
                        </ul>
                    </div>                    
                    <!-------------------------------------------->
                    <div class="clear"></div>
                </div>
            </div>
        </header>