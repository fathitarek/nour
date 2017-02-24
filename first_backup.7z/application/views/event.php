<?php include 'header.php'; ?>
<div class="main">
    <!--==============================Content=================================-->
    <div class="content">
        <div class="container_12">
            <div class="grid_8">
                <div class="blog">
                    {event}
                    <table class="table">                          
                        <tr>
                            <td><h2>{title}</h2></td>
                        </tr>

                        <tr>
                            <td><img src="<?php echo base_url(); ?>assets/uploads/files/{image}" alt="{title}"/></td>
                        </tr>

                        <tr>
                            <td>{desc}</td>
                        </tr>
                        
                        <tr>
                            <td>{date}</td>
                        </tr>
                    </table>

                    {/event}
                </div>
            </div>
            <?php include 'rightSide.php'; ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>