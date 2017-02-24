<?php include 'header.php'; ?>
<div class="main">
    <!--==============================Content=================================-->
    <div class="content">
        <div class="container_12">
            <div class="grid_8">
                <div class="blog">
                    {case}
                    <table class="table">                          
                        <tr>
                            <td><h2>{name}</h2></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><img src="<?php echo base_url(); ?>assets/uploads/files/{image}" alt="{title}"/></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td>عمر الحالة:</td>
                            <td>{age}</td>
                        </tr>
                        
                        
                        <tr>
                            <td>وصف الحالة:</td>
                            <td>{desc}</td>
                        </tr>

                        

                        <tr>
                            <td>رقم هاتف للتواصل مع الحالة:</td>
                            <td>{phoneNo}</td>
                        </tr>
                        
                    </table>                    
                    {/case}
                    {support}
                </div>
            </div>
            <?php include 'rightSide.php'; ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>