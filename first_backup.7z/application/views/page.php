<?php include 'header.php'; ?>
<div class="main">
    <!--==============================Content=================================-->
    <div class="content">
        <div class="container_12">
            <div class="grid_8">
                <div class="blog">
                    {data}
                    <table class="table">                          
                        <tr>
                            <td><h2>{title}</h2></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td colspan="2"><img src="<?php echo base_url(); ?>assets/uploads/files/{image}" alt="{title}"/></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>وصف المشروع:</td>
                            <td>{desc}</td>
                        </tr>

                        <tr>
                            <td>فيديو توضيحي للمشروع:</td>
                            <td>{video}</td>
                        </tr>

                        <tr>
                            <td>تاريخ اضافة المشروع :</td>
                            <td>{date}</td>
                        </tr>

                        <tr>
                            <td>اسم صاحب المشروع:</td>
                            <td>{name}</td>
                        </tr>

                        <tr>
                            <td>المبلغ المطلوب لتنفيذ المشروع:</td>
                            <td>{requiredAmountOfMony}</td>
                        </tr>

                        <tr>
                            <td>المبلغ الذي تم تجميعه</td>
                            <td>{reached_balance}</td>
                        </tr>                        
                    </table>
                    {link}
                    {/data}
                </div>
            </div>
            <?php include 'rightSide.php'; ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>