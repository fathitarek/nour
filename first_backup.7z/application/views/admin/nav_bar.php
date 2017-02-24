<!-- ==================== TOP MENU ==================== -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo base_url(); ?>admin/adminPanel"><strong class="brandBold">منة العيون</strong></a>
            <div class="nav pull-right">
                <form class="navbar-form">
                    <div class="input-append">                        
                        <a href="#collapsedSidebarContent" class="collapseHolder sidebar"><span class="add-on add-on-mini add-on-dark"><i class="icon-sort-down"></i></span></a>
                    </div>
                </form>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- ==================== END OF TOP MENU ==================== -->
<!-- ==================== MAIN MENU ==================== -->
<div class="mainmenu">
    <div class="container-fluid">
        <ul class="nav">
            <li class="collapseMenu"><a href="#"><i class="icon-double-angle-left"></i>hide menu<i class="icon-double-angle-right deCollapse"></i></a></li>
            <li class="divider-vertical firstDivider"></li>
            <li class="left-side active" id="dashboard"><a href="<?php echo base_url(); ?>admin/adminPanel"><i class="icon-dashboard"></i> لوحة التحكم</a></li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
                <a href="<?php echo base_url(); ?>person/person_management" id="formElements"><i class="icon-list"></i> الاعضاء</a>
            </li>
            <li class="divider-vertical"></li>
            
            <li class="divider-vertical"></li>
            <li id="buttonsIcons"><a href="<?php echo base_url(); ?>humancases/humancases_management"><i class="icon-tint"></i> حالات انسانية</a></li>
            <li class="divider-vertical"></li>
            <li id="gridLayout">
                <a href="<?php echo base_url(); ?>gallery/gallery_management"><i class="icon-th"></i>البومات الصور</a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>photos/photos_management">الصور</a></li>                            
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li id="tables"><a href="<?php echo base_url(); ?>composedMsgs/composedMsgs_management"><i class="icon-th-large"></i> النشرة البريدية</a></li>
            <li class="divider-vertical"></li>
            
            <li class="divider-vertical"></li>
            <li><a href="<?php echo base_url(); ?>gallery/showImages">الصور</a></li>
            <li class="divider-vertical"></li>
            <li class="right-side" id="chartsGraphs"><a target="_blank" href="<?php echo base_url();?>homepage"><i class="icon-bar-chart"></i> شاهد الموقع </a></li>
            <li class="divider-vertical"></li>
        </ul>
    </div>
</div>
<!-- ==================== END OF MAIN MENU ==================== -->