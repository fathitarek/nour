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
                    <form action="<?php echo base_url(); ?>person/recordMember" method="get" enctype="multipart/form-data">
                        <table class="table table-hover">                        
                            <tr>
                                <td>الأسم بالكامل *:</td>
                                <td><input type="text" name="name" class="text" placeholder="ادخل اسمك" value="<?php echo set_value('name');?>"/></td>
                            </tr>

                            <tr>
                                <td>تاريخ الميلاد*:</td>
                                <td><input type="date" name="birthdate" class="text" placeholder="ادخل تاريخ ميلادك" value="<?php echo set_value('birthdate');?>"/></td>
                            </tr>

                            <tr>
                                <td>العنوان*:</td>
                                <td><input type="text" name="address" class="text" placeholder="ادخل عنوانك" value="<?php echo set_value('address');?>"/></td>
                            </tr>

                            <tr>
                                <td>موبايل *:</td>
                                <td><input type="text" name="mob1" class="text" placeholder="ادخل رقم موبايلك" value="<?php echo set_value('mob1');?>"/></td>
                            </tr>

                            <tr>
                                <td>موبايل2:</td>
                                <td><input type="text" name="mob2" class="text" placeholder="ادخل رقم موبايلك" value="<?php echo set_value('mob2');?>"/></td>
                            </tr>
                            
                            <tr>
                                <td>اشترك  في النشرة البريدية:</td>
                                <td>
                                    <select name="subscribe">
                                        <option value="0">لا</option>
                                        <option value="1">نعم</option>                                        
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>رقم كارت الشحن*:</td>
                                <td><input type="text" name="balance_nom" class="text" placeholder="ادخل رقم كارت الشحن المكون من 14 رقم" value="<?php echo set_value('balance_nom');?>"/></td>
                            </tr>

                            <tr>
                                <td>الصورة:</td>
                                <td><input type="file" name="image" /></td>
                            </tr>

                            <tr>
                                <td>الوظيفة *:</td>
                                <td><input type="text" name="job" placeholder="ادخل الوظيفة" value="<?php echo set_value('job');?>"/></td>
                            </tr>

                            <tr>
                                <td>رقم البطاقة :</td>
                                <td><input type="text" name="ssn" placeholder="ادخل رقم البطاقة المكون من 14 رقم" value="<?php echo set_value('ssn');?>"/></td>
                            </tr>

                            <tr>
                                <td>البريد الالكتروني *:</td>
                                <td><input type="text" name="email" placeholder="ادخل البريد الالكتروني" value="<?php echo set_value('email');?>"/></td>
                            </tr>

                            <tr>
                                <td>اسم الدخول*:</td>
                                <td><input type="username" name="username" placeholder="ادخل اسم الدخول" value="<?php echo set_value('username');?>"/></td>
                            </tr>

                            <tr>
                                <td>رمز المرور*:</td>
                                <td><input type="password" name="password" placeholder="ادخل رمز المرور" value="<?php echo set_value('password');?>"/></td>
                            </tr>

                            <tr>
                                <td>اعد رمز المرور *:</td>
                                <td><input type="password" name="repassword" placeholder="ادخل رمز المرور" value="<?php echo set_value('repassword');?>"/></td>
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