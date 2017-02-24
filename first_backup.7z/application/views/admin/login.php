<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>مؤسسة منة العيون الخيرية</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo base_url();?>common/css/styles.css">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="container-fluid">

            <form class="form-signin" method="login" action="<?php echo base_url()?>admin/login">
                <h2 class="form-signin-heading"><strong>مؤسسة منة العيون الخيرية</strong></h2>
                <div class="input-prepend">
                  <span class="add-on"><i class="icon-user"></i></span>
                  <input type="text" placeholder="اسم الدخول" name="username">
                </div>
                <div class="input-prepend">
                  <span class="add-on"><i class="icon-lock"></i></span>
                  <input type="password" placeholder="الرقم السري" name="password">
<!--                  <a href="index.html">-->
                      <span class="add-on" id="login">
                          <!--<i class="icon-arrow-right" onclick=""></i>-->
                          <input type="submit" value=" " name="submit" class="icon-arrow-right lgnBtn"/>
                      </span>
<!--                  </a>-->
                  
                </div>
            </form>

            

        </div>    

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>common/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="<?php echo base_url();?>common/js/vendor/bootstrap.min.js"></script>
    </body>
</html>
