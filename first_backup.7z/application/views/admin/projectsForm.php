<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>مؤسسة منة العيون الخيرية</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/bootstrap-responsive.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/styles.css">
        <script>
            $(document).ready(function () {
                $("#reasonForm").hide();
            });

            function openForm(id) {
                $("#reasonForm").show();
                $("#projectId").val(id);
                $("#reasonForm").dialog();
            }
        </script>
    </head>
    <body class="dashboard">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- ==================== TOP MENU ==================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="brand" href="#"><strong class="brandBold">THE</strong>KAMAREL</a>
                    <div class="nav pull-right">
                        <form class="navbar-form">
                            <div class="input-append">
                                <input class="inp-mini inp-dark span2" type="text" placeholder="search...">
                                <span class="add-on add-on-first add-on-mini add-on-dark" id="search"><i class="icon-search"></i></span>
                                <div class="collapsibleContent">
                                    <a href="#tasksContent" class="sidebar"><span class="add-on add-on-middle add-on-mini add-on-dark" id="tasks"><i class="icon-tasks"></i><span class="notifyCircle cyan">3</span></span></a>
                                    <a href="#notificationsContent" class="sidebar"><span class="add-on add-on-middle add-on-mini add-on-dark" id="notifications"><i class="icon-bell-alt"></i><span class="notifyCircle orange">9</span></span></a>
                                    <a href="#messagesContent" class="sidebar"><span class="add-on add-on-middle add-on-mini add-on-dark" id="messages"><i class="icon-comments-alt"></i><span class="notifyCircle red">12</span></span></a>
                                    <a href="#settingsContent" class="sidebar"><span class="add-on add-on-middle add-on-mini add-on-dark" id="settings"><i class="icon-cog"></i></span></a>
                                    <a href="#profileContent" class="sidebar"><span class="add-on add-on-mini add-on-dark" id="profile"><i class="icon-user"></i><span class="username">Ing. Imrich Kamarel</span></span></a>
                                </div>
                                <a href="#collapsedSidebarContent" class="collapseHolder sidebar"><span class="add-on add-on-mini add-on-dark"><i class="icon-sort-down"></i></span></a>
                            </div>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- ==================== END OF TOP MENU ==================== -->

        <!-- ==================== SIDEBAR ==================== -->
        <div class="hiddenContent">
            <!-- ==================== SIDEBAR COLLAPSED ==================== -->
            <div id="collapsedSidebarContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <ul class="collapsedSidebarMenu">
                        <li><a href="#tasksContent" class="sidebar">Tasks <div class="notifyCircle cyan">3</div><i class="icon-chevron-sign-right"></i></a></li>
                        <li><a href="#notificationsContent" class="sidebar">Notifications <div class="notifyCircle orange">9</div><i class="icon-chevron-sign-right"></i></a></li>
                        <li><a href="#messagesContent" class="sidebar">Messages <div class="notifyCircle red">12</div><i class="icon-chevron-sign-right"></i></a></li>
                        <li><a href="#settingsContent" class="sidebar">Settings<i class="icon-chevron-sign-right"></i></a></li>
                        <li><a href="#profileContent" class="sidebar">Ing. Imrich Kamarel<i class="icon-chevron-sign-right"></i></a></li>
                        <li class="sublevel"><a href="#">edit profile<i class="icon-user"></i></a></li>
                        <li class="sublevel"><a href="#">change password<i class="icon-lock"></i></a></li>
                        <li class="sublevel"><a href="#">logout<i class="icon-off"></i></a></li>
                    </ul>
                </div>   
            </div>
            <!-- ==================== END OF SIDEBAR COLLAPSED ==================== -->

            <!-- ==================== SIDEBAR TASKS ==================== -->
            <div id="tasksContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <a href="#collapsedSidebarContent" class="showCollapsedSidebarMenu"><i class="icon-chevron-sign-left"></i><h1> Tasks</h1></a>
                    <h1>Tasks</h1>
                    <div class="sidebarInfo">
                        <div class="progressTasks"><span class="label">11</span> tasks in progress</div>
                        <div class="newTasks"><span class="label cyan">3</span> new tasks</div>
                    </div>
                    <ul class="tasksList">
                        <li class="new">
                            <h3>Update database</h3>
                            <span class="taskProgress">0%</span>
                            <div class="progress progress-striped active">
                                <div class="bar"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority red">High priority</div>
                                <div class="tag status cyan">New task</div>
                            </div>    
                        </li>
                        <li class="new">
                            <h3>Clean CSS</h3>
                            <span class="taskProgress">0%</span>
                            <div class="progress progress-striped active">
                                <div class="bar"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority orange">Normal priority</div>
                                <div class="tag status cyan">New task</div>
                            </div>  
                        </li> 
                        <li class="new">
                            <h3>Clean JavaScript</h3>
                            <span class="taskProgress">0%</span>
                            <div class="progress progress-striped active">
                                <div class="bar"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority green">Low priority</div>
                                <div class="tag status cyan">New task</div>
                            </div> 
                        </li> 
                        <li>
                            <h3>Make a backup</h3>
                            <span class="taskProgress">75%</span>
                            <div class="progress progress-striped active">
                                <div class="bar" style="width: 75%;"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority green">Low priority</div>
                            </div> 
                        </li> 
                        <li>
                            <h3>Clean HTML</h3>
                            <span class="taskProgress">50%</span>
                            <div class="progress progress-striped active">
                                <div class="bar" style="width: 50%;"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority red">High priority</div>
                            </div> 
                        </li> 
                        <li>
                            <h3>Make a coffee</h3>
                            <span class="taskProgress">25%</span>
                            <div class="progress progress-striped active">
                                <div class="bar" style="width: 25%;"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority orange">Normal priority</div>
                            </div> 
                        </li> 
                        <li>
                            <h3>THEKAMAREL project</h3>
                            <span class="taskProgress">100%</span>
                            <div class="progress progress-striped">
                                <div class="bar" style="width: 100%;"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority red">High priority</div>
                                <div class="tag status grey">Finished task</div>
                            </div> 
                        </li>   
                    </ul>
                    <button class="btn btn-primary">View all</button>
                </div>   
            </div>
            <!-- ==================== END OF SIDEBAR TASKS ==================== -->

            <!-- ==================== SIDEBAR NOTIFICATIONS ==================== -->
            <div id="notificationsContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <a href="#collapsedSidebarContent" class="showCollapsedSidebarMenu"><i class="icon-chevron-sign-left"></i><h1> Notifications</h1></a>
                    <h1>Notifications</h1>
                    <div class="sidebarInfo">
                        <div><span class="label">32</span> notifications</div>
                        <div><span class="label orange">9</span> new notifications</div>
                    </div>
                    <ul class="notificationsList">
                        <li class="new first">
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">1 minute ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">3 minutes ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-comments"></i> New comment</div>
                            <span class="notificationDate">15 minutes ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-shopping-cart"></i> New order</div>
                            <span class="notificationDate">23 minutes ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-shopping-cart"></i> Order cancelled</div>
                            <span class="notificationDate">1 hour ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-comments"></i> New comment</div>
                            <span class="notificationDate">1 hour ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">3 hours ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">5 hours ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-user"></i> User account cancelled</div>
                            <span class="notificationDate">6 hours ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li>
                            <div><i class="icon-comments"></i> New comment</div>
                            <span class="notificationDate">10 hour ago</span>
                        </li>
                        <li>
                            <div><i class="icon-shopping-cart"></i> New order</div>
                            <span class="notificationDate">23 hours ago</span>
                        </li>
                        <li>
                            <div><i class="icon-comments"></i> New comment</div>
                            <span class="notificationDate">yesterday</span>
                        </li>
                        <li>
                            <div><i class="icon-shopping-cart"></i> New order</div>
                            <span class="notificationDate">yesterday</span>
                        </li>
                        <li>
                            <div><i class="icon-shopping-cart"></i> Order cancelled</div>
                            <span class="notificationDate">yesterday</span>
                        </li>
                        <li>
                            <div><i class="icon-comments"></i> New comment</div>
                            <span class="notificationDate">01.03.2013</span>
                        </li>
                        <li>
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">01.03.2013</span>
                        </li>
                        <li>
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">02.03.2013</span>
                        </li>
                        <li>
                            <div><i class="icon-user"></i> User account cancelled</div>
                            <span class="notificationDate">02.03.2013</span>
                        </li>
                        <li>
                            <div><i class="icon-shopping-cart"></i> New order</div>
                            <span class="notificationDate">02.03.2013</span>
                        </li>
                        <li>
                            <div><i class="icon-shopping-cart"></i> Order cancelled</div>
                            <span class="notificationDate">03.03.2013</span>
                        </li>
                    </ul>
                    <button class="btn btn-primary">View all</button>
                </div>      
            </div>
            <!-- ==================== END OF SIDEBAR NOTIFICATIONS ==================== -->

            <!-- ==================== SIDEBAR MESSAGES ==================== -->
            <div id="messagesContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <a href="#collapsedSidebarContent" class="showCollapsedSidebarMenu"><i class="icon-chevron-sign-left"></i><h1> Messages</h1></a>
                    <h1>Messages</h1>
                    <div class="sidebarInfo">
                        <div><span class="label">128</span> messages</div>
                        <div><span class="label red">12</span> unreaded messages</div>
                    </div>
                    <ul class="messagesList">
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="<?php echo base_url(); ?>common/img/rimmer-avatar.jpg" alt=""></div>
                            <h3>Arnold Karlsberg</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="<?php echo base_url(); ?>common/img/homer-avatar.jpg" alt=""></div>
                            <h3>John Doe</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="<?php echo base_url(); ?>common/img/peter-avatar.jpg" alt=""></div>
                            <h3>Peter Kay</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="<?php echo base_url(); ?>common/img/zoidberg-avatar.jpg" alt=""></div>
                            <h3>George McCain</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="<?php echo base_url(); ?>common/img/peter-avatar.jpg" alt=""></div>
                            <h3>Peter Kay</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="<?php echo base_url(); ?>common/img/rimmer-avatar.jpg" alt=""></div>
                            <h3>Arnold Karlsberg</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                    </ul>
                    <button class="btn btn-primary">View all</button>
                </div>  
            </div>
            <!-- ==================== END OF SIDEBAR MESSAGES ==================== -->

            <!-- ==================== SIDEBAR SETTINGS ==================== -->
            <div id="settingsContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <a href="#collapsedSidebarContent" class="showCollapsedSidebarMenu"><i class="icon-chevron-sign-left"></i><h1> Settings</h1></a>
                    <h1>Settings</h1>
                    <ul class="settingsList">
                        <li>
                            <div class="settingSlider">
                                <i class="icon-leaf"></i><h3> Slider</h3>
                                <div class="sl1"></div>
                            </div>
                        </li>
                        <li>
                            <div class="settingSlider">
                                <i class="icon-leaf"></i><h3> RangeSlider</h3>
                                <div class="sl2"></div>
                            </div>
                        </li>
                        <li>
                            <div class="settingToggler">
                                <i class="icon-leaf"></i><h3> Toggler</h3>
                                <label class="checkbox toggle well" onclick="">
                                    <input id="toggler" type="checkbox" checked />
                                    <span class="slider-selection"></span>
                                    <span class="toggleStatus">
                                        <span><i class="icon-ok toggleOn"></i></span>
                                        <span><i class="icon-remove toggleOff"></i></span>
                                    </span>
                                    <a class="btn btn-primary slide-button"></a>
                                </label>
                            </div>
                        </li>

                        <li class="fontSize">
                            <h2>Font Size</h2>
                            <div class="fontSizeBlock fontSizeSmall active"><span>A</span></div>
                            <div class="fontSizeBlock fontSizeMedium"><span>A</span></div>
                            <div class="fontSizeBlock fontSizeBig"><span>A</span></div>
                        </li>

                        <li class="fontStyle">
                            <h2>Font Style</h2>
                            <div class="fontStyleBlock fontStyleSansSerif active"><span>Aa</span></div>
                            <div class="fontStyleBlock fontStyleSerif"><span>Aa</span></div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ==================== END OF SIDEBAR SETTINGS ==================== -->

            <!-- ==================== SIDEBAR PROFILE ==================== -->
            <div id="profileContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <a href="#collapsedSidebarContent" class="showCollapsedSidebarMenu"><i class="icon-chevron-sign-left"></i><h1> My account</h1></a>
                    <h1>My account</h1>
                    <div class="profileBlock">
                        <div class="profilePhoto">
                            <div class="usernameHolder">Ing. Imrich Kamarel</div>
                        </div>
                        <div class="profileInfo">
                            <p><i class="icon-map-marker"></i> Piestany, SK</p>
                            <p><i class="icon-envelope-alt"></i> ici.kamarel@tattek.com</p>
                            <p><i class="icon-globe"></i> tattek.com</p>
                            <p class="aboutMe">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <footer>
                            <div class="profileSettingBlock editProfile"><i class="icon-user"></i>edit profile</div>
                            <div class="profileSettingBlock changePassword"><i class="icon-lock"></i>change password</div>
                            <div class="profileSettingBlock logout"><i class="icon-off"></i>logout</div>
                        </footer>
                    </div>
                </div>
            </div>
            <!-- ==================== END OF SIDEBAR PROFILE ==================== -->

        </div>
        <!-- ==================== END OF SIDEBAR ==================== -->

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
            <?php echo $output; ?>
        </div>
        <!-- ==================== END OF PAGE CONTENT ==================== -->
        <form id="reasonForm" action="<?php echo base_url(); ?>project/send_delete_reason" method="get" title="ارسل سبب حذف المشروع الي صاحبه">
            <fieldset>
                <label for="name">سبب الحذف</label>
                <textarea name="reason" id="name" class="text ui-widget-content ui-corner-all">مثلا : محتوى غير مناسب</textarea>
                <input type="hidden" id="projectId" name="projectId"/>

                <!-- Allow form submission with keyboard without duplicating the dialog button -->
                <input type="submit" tabindex="-1" value="ارسل" name="submit">
            </fieldset>
        </form>

    </body>
</html>

