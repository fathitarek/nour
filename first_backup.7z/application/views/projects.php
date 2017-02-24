<?php include 'header.php'; ?>
<div class="main">
    <!--==============================Content=================================-->
    <div class="content">
        <div class="container_12">
            <div class="grid_8">
                <h2>الحالات الانسانية</h2>
                <div class="clear"></div>
                {data}
                <div class="blog">
                    <img src="<?php echo base_url(); ?>/assets/uploads/files/{image}" alt="" class="img_inner fleft" width="200" height="200">
                    <div class="extra_wrapper">
                        <p class="col1"><a href="<?php echo base_url(); ?>humancases/caseDisplay/{id}">{title}</a></p>
                        <div class="blog_info">
                            <a href="#" class="user">{name}</a>
                            <!--<time datetime="2013-01-01">{date} </time>-->                            
                            <a class="comment">{phoneNo}</a>
                        </div><p class="pro-desc">{desc}</p>
                        <br>
                        <a href="<?php echo base_url(); ?>humancases/caseDisplay/{id}" class="btn">اقرأ المزيد</a>
                    </div>
                </div>
                {/data}
            </div>
            <?php include 'rightSide.php'; ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>