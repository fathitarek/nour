<?php include 'header.php'; ?>
<div class="main">
    <!--==============================Content=================================-->
    <div class="content">
        <div class="container_12">
            <div class="grid_8">
                {page}
                <h2>{title}</h2>
                <div class="clear"></div>
                <div class="desc">
                     <center>
                     <img src="<?php echo base_url(); ?>/assets/uploads/files/{image}" alt="{image_title}"  width="400"/><br/>
                     {image_title}
                     </center>
                </div>                
                
                <div class="blog">
                    <div class="extra_wrapper">                        
                        <div class="blog_info">
                            <p class="pro-desc">{desc}</p>
                        </div>
                    </div>
                </div>
                {/page}

              <?php if(!empty($links)){?>
              <div id="links">
                  <h3>احداث سابقة متعلقة بهذا القسم</h3>
                  <ul>
                    {links}
                      <li class="example"><a href="<?php echo base_url();?>/events/displayEvent/{id}">{title} </a>({date})</li>
                    {/links}
                  </ul>
              </div>
              <?php }?>
            </div>


            <div class="grid_4">
              <h3 class="head1">{settings}{teamTitle}{/settings}</h3>
                {team}
        <div class="blog">
            <img width="150" height="150" src="<?php echo base_url(); ?>/assets/uploads/files/{image}" alt="{name}" class="img_inner fleft">
            <div class="extra_wrapper">
                <div class="title">{name}</div>
                <p class="team-member">{desc}</p>
            </div>
        </div>
        {/team}                
            </div>
        </div>


    </div>
    <!------------------------------------------------------------->




</div>
</div>
<?php include 'footer.php'; ?>