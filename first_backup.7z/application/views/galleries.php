<?php include 'header.php'; ?>
<div class="main">
    <!--==============================Content=================================-->
    <div class="content">
        <div class="container_12">
            <div class="grid_8">
                <h2>البومات الصور</h2>
                <div class="clear"></div>
                {galleries}
                <div class="blog">
                    <img src="<?php echo base_url(); ?>/assets/uploads/files/{mainPhoto}" alt="" class="img_inner fleft" width="200" height="200">
                    <div class="extra_wrapper">
                        <p class="col1"><a href="#">{title}</a></p>
                        <div class="blog_info">
                            <time datetime="2015-05-15">{date} </time>                            
                        </div>{desc}
                        <br>
                        <a href="<?php echo base_url(); ?>photos/galleryPhotos/{id}" class="btn">شاهد الصور</a>
                    </div>
                </div>
                {/galleries}
            </div>
            <?php include 'rightSide.php'; ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>