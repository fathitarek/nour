<?php include 'header.php'; ?>
<div class="main">
    <!--==============================Content=================================-->
    <div class="content">
        <div class="container_12">                                                                                                           
            <div class="grid_12">
                <div class="map">
                    <figure class=" ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3454.937185074754!2d31.312929999999994!3d30.009960000000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1439028506140" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </figure>
                </div>
            </div>
            {settings}
            <div class="grid_4">
                <h3>العنوان</h3>
                <div class="map">
                    <address>
                        <dl>
                            <dt>{address}
                            </dt>
                            <dd><span>الهاتف الارضي:</span>{phone}</dd>
                            <dd><span>موبايل:</span>{mobile}</dd>
                            <dd>البريد الالكتروني: <a href="mailto:{email}" class="col1">{email}</a></dd>
                        </dl>
                    </address>
                </div>
            </div>
            {/settings}
            <div class="grid_8">
                <h3>نموذج الإتصال</h3>
                <form action="<?php echo base_url()?>feedback/collectFeedback" method="get" name="contactForm" id="contactForm">
                 
                 
                    <?php if (isset($msg)) { ?>
                        <div class="success_wrapper">                                                            
                            <div class="success-message">{msg}</div>
                        </div>
                    <?php } ?>
                    <label class="name">
                        <input type="text" placeholder="الاسم:" data-constraints="@Required @JustLetters" name="name" value="<?php echo set_value('name'); ?>"/>
                    </label>
                    <label class="email">
                        <input type="text" placeholder="البريد الالكتروني:" data-constraints="@Required @Email" name="email" value="<?php echo set_value('email'); ?>"/>
                    </label>
                    <label class="message">
                        <textarea placeholder="الرسالة:" data-constraints='@Required @Length(min=20,max=999999)' name="msg"><?php echo set_value('msg'); ?></textarea>
                    </label>
                    <div>
                        <div class="clear"></div>

                        <script  type="text/javascript">
                               var frmvalidator = new Validator("contactForm");
                               frmvalidator.addValidation("name","req","من فضلك ادخل اسمك");
                               frmvalidator.addValidation("email","req",'من فضلك ادخل البريد الالكتروني الخاص بك');
                               frmvalidator.addValidation("email","email",'من فضلك ادخل بريد الكتروني صحيح');
                               frmvalidator.addValidation("msg","req",'من فضلك ادخل الرسالة');
                        </script>

                        <div class="btns">
                            <input type="submit" class="btn" value="ارسل" name="submit"/>
                            <input type="reset" class="btn" value="امسح">
                        </div>
                    </div>
                </form>   
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>