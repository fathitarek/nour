<div class="main">
    <!--==============================Content=================================-->
    <div class="content">
        <div class="container_12 slider_direction">
            <div class="grid_8">
                <div class="flexslider">
                    <ul class="slides">
                        {slider}
                        <li>
                            <img src="<?php echo base_url(); ?>/assets/uploads/files/{image}" alt="{title}">
                            <div class="flex-caption c5">
                                <p>{title}</p>
                            </div>
                        </li>
                        {/slider}
                    </ul>
                </div>
                <span id="responsiveFlag"></span>
            </div>


            <div class="grid_4">
                <div class="events_class">
                    <a href="#" class="donate">احداث قادمة</a> 
                    <marquee direction="up" onmouseover="this.stop()" onmouseout ="this.start()" style="height: 83%">
                        {last}                    
                        <div class="event">                                           
                            <div class="text1"><a href="<?php echo base_url() ?>events/displayEvent/{id}">{title}</a></div>
                            <p>{date}</p>
                        </div>                    
                        {/last}
                    </marquee>
                </div>
            </div>


            <div class="clear"></div>
            {homeBlocks}
            <div class="grid_3">
                <div class="block2 maxheight">
                    <div class="title" style="background-color:{degree}">
                        {title}
                        <img src="<?php echo base_url();?>common/images/{image}" width="30" style="margin-top: -10px;">
                    </div>
                    <div class="pad">{desc}</div>
                </div>
            </div>
            {/homeBlocks}
            <div class="clear"></div>
            <div class="grid_12">
                <h2>حالات عاجلة</h2>
                <div id="owl">
                    {humanCases}
                    <div class="item">
                        <a href="<?php echo base_url(); ?>humancases/caseDisplay/{id}">
                            <img src="<?php echo base_url(); ?>/assets/uploads/files/{image}" alt="">{name} <br>{age} سنوات</a>
                    </div>
                    {/humanCases}
                </div>
            </div>
            

            <div class="clear"></div>

<?php if(!empty($banners)){?>
            <div class="grid_12" style="margin-top:50px;">
                <h2 style="margin-bottom:24px;">بانرات اعلانية</h2>
                <div id="owl1">
                  
                    {banners}
                    <div class="item">
                        <a href="{url}" target="_blank">
                            <img src="<?php echo base_url(); ?>/assets/uploads/files/{image}" alt="{title}" width="200px" height="200px">
                        </a>
                    </div>
                    {/banners}
                  
                </div>
            </div>
<?php }?>

        </div>
    </div>