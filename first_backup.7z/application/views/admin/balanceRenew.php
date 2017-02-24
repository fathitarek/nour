<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>مؤسسة منة العيون الخيرية</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/bootstrap-responsive.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>common/css/styles.css">
        <script>
            $(document).ready(function () {
                $("#reasonForm").hide();
                $("#renewForm").hide();
            });
        </script>

        <script>
            function renew() {
                $('#renewForm').show();
                $('#renewForm').dialog();
            }
        </script>



    </head>
    <body class="dashboard">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <?php include 'nav_bar.php'; ?>

        <!-- ==================== PAGE CONTENT ==================== -->
        <div class="content">
            <form action="<?php echo base_url(); ?>person/updatePersonBalance" method="get">
                <table class="table table-hover">
                    <tr>
                        <td>قيمة الكارت</td>
                        <td><input type="text" name="newbalance" /></td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="submit" value="موافق" class="btn"/></td>
                        <td><input type="hidden" name="person_id" value="{person_id}"/>
                            <input type="hidden" name="id" value="{id}"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- ==================== END OF PAGE CONTENT ==================== -->

    </body>
</html>

