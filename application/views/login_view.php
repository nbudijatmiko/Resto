<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="skcats">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Tugas Akhir COOOYY</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href='<?php echo base_url('/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>' rel="stylesheet">
        <link href="<?php echo base_url('/assets/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('/assets/plugins/icomoon/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('/assets/plugins/uniform/css/default.css'); ?>" rel="stylesheet"/>
        <link href="<?php echo base_url('/assets/plugins/switchery/switchery.min.css'); ?>" rel="stylesheet"/>
      
        <!-- Theme Styles -->
        <link href="<?php echo base_url('/assets/css/ecaps.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('/assets/css/custom.css'); ?>" rel="stylesheet">

        <!-- HTML5 shim and Respond..js'); ?> for IE8 support of HTML5 elements and media queries --> <!-- WARNING: Respond..js'); ?> doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min..js'); ?>"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min..js'); ?>"></script>
        <![endif]-->
    </head>
    <body style="background-color: #e5e9ec; ">
    
      <div class="login-box" style="height:200px;position: absolute; top: 23%; left: 35%; padding: 5px 5px;" align="center">
      <div class="login-logo">
        <b>Admin</b>CRUD</a>
      </div>

      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">
          Log in to start your session
        </p>

        <form action="<?php echo base_url('index.php/Login/auth'); ?>" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="E-mail" name="email">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <!-- <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div> -->
            <div class="col-xs-offset-8 col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
          </div>
        </form>

        <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div> -->
        <!-- /.social-auth-links -->

        <!-- <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a> -->

      </div>
      <!-- /.login-box-body -->
      
      </div>
  
  
        
        
        <!-- Javascripts -->
        <script src="<?php echo base_url('/assets/plugins/jquery/jquery-3.1.0.min..js'); ?>"></script>
        <script src="<?php echo base_url('/assets/plugins/bootstrap/.js'); ?>/bootstrap.min..js'); ?>"></script>
        <script src="<?php echo base_url('/assets/plugins/jquery-slimscroll/jquery.slimscroll.min..js'); ?>"></script>
        <script src="<?php echo base_url('/assets/plugins/uniform/.js'); ?>/jquery.uniform.standalone..js'); ?>"></script>
        <script src="<?php echo base_url('/assets/plugins/switchery/switchery.min..js'); ?>"></script>
        <script src="<?php echo base_url('/assets/.js'); ?>/ecaps.min..js'); ?>"></script>
    </body>
</html>