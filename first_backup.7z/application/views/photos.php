<!DOCTYPE html>
<html lang="en">
    <head>
        <title>مؤسسة منة العيون الخيرية</title>
        <meta charset="utf-8">
        <meta name = "format-detection" content = "telephone=no" />
        <link rel="icon" href="<?php echo base_url(); ?>common/images/favicon.ico">

        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/bootstrap.css">


        <script type="text/javascript" src="<?php echo base_url(); ?>assets/fancy/lib/jquery-1.10.1.min.js"></script>

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />

        <!-- Add Button helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fancy/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/fancy/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

        <!-- Add Thumbnail helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fancy/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/fancy/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

        <!-- Add Media helper (this is optional) -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/fancy/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 *  Simple image gallery. Uses default settings
                 */

                $('.fancybox').fancybox();

                /*
                 *  Different effects
                 */

                // Change title type, overlay closing speed
                $(".fancybox-effects-a").fancybox({
                    helpers: {
                        title: {
                            type: 'outside'
                        },
                        overlay: {
                            speedOut: 0
                        }
                    }
                });

                // Disable opening and closing animations, change title type
                $(".fancybox-effects-b").fancybox({
                    openEffect: 'none',
                    closeEffect: 'none',
                    helpers: {
                        title: {
                            type: 'over'
                        }
                    }
                });

                // Set custom style, close if clicked, change title type and overlay color
                $(".fancybox-effects-c").fancybox({
                    wrapCSS: 'fancybox-custom',
                    closeClick: true,
                    openEffect: 'none',
                    helpers: {
                        title: {
                            type: 'inside'
                        },
                        overlay: {
                            css: {
                                'background': 'rgba(238,238,238,0.85)'
                            }
                        }
                    }
                });

                // Remove padding, set opening and closing animations, close if clicked and disable overlay
                $(".fancybox-effects-d").fancybox({
                    padding: 0,
                    openEffect: 'elastic',
                    openSpeed: 150,
                    closeEffect: 'elastic',
                    closeSpeed: 150,
                    closeClick: true,
                    helpers: {
                        overlay: null
                    }
                });

                /*
                 *  Button helper. Disable animations, hide close button, change title type and content
                 */

                $('.fancybox-buttons').fancybox({
                    openEffect: 'none',
                    closeEffect: 'none',
                    prevEffect: 'none',
                    nextEffect: 'none',
                    closeBtn: false,
                    helpers: {
                        title: {
                            type: 'inside'
                        },
                        buttons: {}
                    },
                    afterLoad: function () {
                        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                    }
                });


                /*
                 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
                 */

                $('.fancybox-thumbs').fancybox({
                    prevEffect: 'none',
                    nextEffect: 'none',
                    closeBtn: false,
                    arrows: false,
                    nextClick: true,
                    helpers: {
                        thumbs: {
                            width: 50,
                            height: 50
                        }
                    }
                });

                /*
                 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
                 */
                $('.fancybox-media')
                        .attr('rel', 'media-gallery')
                        .fancybox({
                            openEffect: 'none',
                            closeEffect: 'none',
                            prevEffect: 'none',
                            nextEffect: 'none',
                            arrows: false,
                            helpers: {
                                media: {},
                                buttons: {}
                            }
                        });

                /*
                 *  Open manually
                 */

                $("#fancybox-manual-a").click(function () {
                    $.fancybox.open('1_b.jpg');
                });

                $("#fancybox-manual-b").click(function () {
                    $.fancybox.open({
                        href: 'iframe.html',
                        type: 'iframe',
                        padding: 5
                    });
                });

                $("#fancybox-manual-c").click(function () {
                    $.fancybox.open([
                        {
                            href: '1_b.jpg',
                            title: 'My title'
                        }, {
                            href: '2_b.jpg',
                            title: '2nd title'
                        }, {
                            href: '3_b.jpg'
                        }
                    ], {
                        helpers: {
                            thumbs: {
                                width: 75,
                                height: 50
                            }
                        }
                    });
                });


            });
        </script>
        <style type="text/css">
            .fancybox-custom .fancybox-skin {
                box-shadow: 0 0 50px #222;
            }

            body {
                max-width: 700px;
                margin: 0 auto;
            }
        </style>



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
                        <a href="index.html">
                            <img src="<?php echo base_url(); ?>/common/images/logo.png" alt="Your Happy Family">
                        </a>
                    </h1>
                    <div class="menu_block">
                        <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                            <ul class="sf-menu">
                                <li class="current"><a href="<?php echo base_url(); ?>homepage">الرئيسية</a></li>
                                <li><a href="<?php echo base_url(); ?>project/getProjects">المشاريع </a></li>
                                <li><a href="<?php echo base_url(); ?>gallery/allGalleries">البومات الصور</a></li>
                                <li><a href="index-3.html">Volunteer </a></li>
                                <li><a href="<?php echo base_url(); ?>feedback/feedBackForm">اتصل بنا</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <div class="main">
            <!--==============================Content=================================-->
            <div class="content">
                <div class="container_12">
                    <div class="grid_8">
                        <h2>البوم : </h2>
                        <div class="clear"></div>
                        {data}
                        <div class="blog">
                            <img src="<?php echo base_url(); ?>/assets/uploads/files/{image}" alt="" class="img_inner fleft" width="200" height="200">
                            <div class="extra_wrapper">
                                <p class="col1"><a href="#">{title}</a></p>
                                <div class="blog_info">
                                    <time datetime="2013-01-01">{date} </time>
                                    <a href="#" class="user">{name}</a>
                                    <a href="#" class="comment">{requiredAmountOfMony}</a>
                                </div>{desc}
                                <br>
                                <a href="<?php echo base_url(); ?>project/getProject/{id}" class="btn">اقرا المزيد</a>
                            </div>
                        </div>
                        {/data}
                    </div>
                    <?php include 'rightSide.php'; ?>
                </div>
            </div>
            <?php include 'footer.php'; ?>