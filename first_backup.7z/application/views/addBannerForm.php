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

                    <form action="<?php echo base_url(); ?>person/addBanner" method="get" enctype="multipart/form-data">
                        <table class="table table-hover">
                            <tr>
                                <td>العنوان*:</td>
                                <td><input type="text" placeholder="ادخل عنوان إعلانك" name="title" class="text" value="<?php echo set_value('title'); ?>"/></td>
                            </tr>

                            <tr>
                                <td>الصورة:</td>
                                <td><input type="file" name="image" /></td>
                            </tr>

                            <tr>
                                <td>الرابط *:</td>
                                <td><input type="text" name="url" placeholder="ادخل رابط موقعك" value="<?php echo set_value('url'); ?>"/></td>
                            </tr>

                            <?php if (validation_errors()) { ?>
                                <tr>
                                    <td colspan="2">
                                        <div class="frm-validation">
                                            <?php echo validation_errors(); ?>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                            <?php } ?>


                            <tr>
                                <td><input type="submit" name="submit" value="حفظ البيانات" class="btn-primary"/></td>
                                <td><input type="reset" name="reset" value="امسح البيانات" class="btn-danger"/></td>
                            </tr>
                        </table>
                    </form>

                </div>
            </div>
            <?php include 'rightSide.php'; ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>