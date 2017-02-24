<?php include 'header.php'; ?>
<div class="main">
    <!--==============================Content=================================-->
    <?php
    if (isset($msg)) {
        echo "<div class = 'msg'>$msg</div>";
    }
    ?>
    <div class="content">
        <div class="container_12">
            <div class="grid_8">
                <div class="blog">
                    <form action="<?php echo base_url(); ?>person/rememberPassword" method="post" enctype="multipart/form-data">                        
                        <input type="email" class="form-control" name="rememberPassword" placeholder="ادخل البريد الالكتروني الخاص بك هنا"/>
                        <input type="submit" name="submit" value="موافق" class="btn btn-custom"/>
                    </form>
                </div>
            </div>
    <?php include 'rightSide.php'; ?>
        </div>
    </div>
<?php include 'footer.php'; ?>