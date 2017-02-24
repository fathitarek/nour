<div class="grid_4">
    <div class="blog" id="rememberPassword" title="استعادة رمز المرور">
<!--        <form action="<?php echo base_url(); ?>person/rememberPassword" method="post">                        -->
            <input type="email" class="form-control" id="rememberEmail" placeholder="ادخل البريد الالكتروني الخاص بك هنا"/>
            <input type="button" name="submit" value="ارسل" class="btn" onclick="rememberPassword()"/><br/>
            <span id="remember-report"></span>
<!--        </form>-->
    </div>


    <div class="blog" id="renewBalance" title="تجديد الرصيد">
<!--        <form action="<?php echo base_url(); ?>membershipRenew/renewBalance" method="post">                        -->
            <input type="text" class="form-control" id="renewBalanceNo" placeholder="ادخل رقم كارت الشحن المكون من 14 رقم"/>
            <input type="button" name="submit" value="موافق" class="btn" onclick="renewBalance()"/>
            <span id="renew-report"></span>
<!--        </form>-->
    </div>
    <?php
    if ($this->session->userdata('member_name')) {
        echo "<a href='#' class='donate'>خاص بالاعضاء</a>";
    }
    ?>
    <?php if (!$this->session->userdata('member_name')) { ?>
        <h3 class="head1">تسجيل دخول الاعضاء </h3>
        <div class="text3"><label class="">قم بتسجيل الدخول</label></div>
        <div class="form-group">
            <form method="get" action="<?php echo base_url(); ?>person/member_login">
                <input type="text" name="email" placeholder="البريد الإلكتروني"/><br/>
                <input type="password" name="password" placeholder="الرقم السري"/><br/>
                <!--<a href="<?php echo base_url(); ?>person/addMemberForm" class="btn">تسجيل عضو جديد</a><br/>-->
                <input type="button" class="btn" value="هل نسيت كلمة السر؟" onclick="showForm()"><br/>
                <input type="submit" name="login" class="btn" value="دخول" style="margin-top: 10px;"/>            
            </form>
        </div>
    <?php } else { ?>
        <div class="form-group">
            <table class="table">
                <tr>
                    <td><a href="<?php echo base_url(); ?>homepage/logout" class="">تسجيل الخروج</a></td>                    
                </tr>
                <tr>
                    <td>الرصيد المتبقي :  {balance} جنيه</td>
                </tr>
            </table>
        </div>


    <?php } ?>

    <hr/>
    <div class="clear"></div>
    <h3 class="head1">{settings}{teamTitle}{/settings}</h3>
    <div class="bl1">
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