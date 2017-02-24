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
                    <form action="<?php echo base_url(); ?>project/recordProject" method="get" enctype="multipart/form-data">
                        <table class="table table-hover">                        
                            <tr>
                                <td>عنوان المشروع :</td>
                                <td><input type="text" name="title" class="text" placeholder="اختر عنوانا لمشروعك" value="<?php echo set_value('title'); ?>" /></td>
                            </tr>

                            <tr>
                                <td>وصف المشروع :</td>
                                <td><textarea maxlength="300" name="desc"  placeholder="تحدث بايجاز عن مشروعك"><?php echo set_value('desc'); ?></textarea></td>
                            </tr>

                            <tr>
                                <td>فيديو توضيحي للمشروع :</td>
                                <td><textarea name="video" maxlength="300" placeholder="ادخل لينك الفيديو على اليوتيوب"><?php echo set_value('video'); ?></textarea></td>
                            </tr>

                            <tr>
                                <td>تصنيف المشروع</td>
                                <td>
                                    <select name="cat_id">
                                        {cats}
                                        <option value="{id}">{cat_name}</option>
                                        {/cats}
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>صورة للمشروع:</td>
                                <td><input type="file" name="image"/></td>
                            </tr>

                            <tr>
                                <td>المبلغ المطلوب لتنفيذ المشروع *:</td>
                                <td><input type="text" name="requiredAmountOfMony"  placeholder="ادخل المبلغ المطلوب توافره لتنفيذ هذا المشروع" value="<?php echo set_value('requiredAmountOfMony'); ?>"/></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <?php if (validation_errors()) { ?>
                                        <div class="frm-validation">
                                            <?php echo validation_errors(); ?>
                                        </div>
                                    <?php } ?>
                                </td>
                                <td></td>
                            </tr>

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