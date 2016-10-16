<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bucketadmin.themebucket.net/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2016 11:26:01 GMT -->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.html">

    <title>Login</title>

    <!--Core CSS -->
    <link href="<?php echo base_url();?>assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">
        <?php 
        $data = array(
            'name' => 'admin_login',
            'class' => 'form-signin',
            'onsubmit' => 'return admin_login()'
            );
        echo form_open('admin_auth/admin_login', $data );
         ?>
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
        <div class="alert-danger">
            <?php echo validation_errors(); ?>
        </div>
            <div class="user-login-info">
                <?php 
                    $data = array(
                        'type' => 'text',
                        'name' => 'username',
                        'id'   => 'username',
                        'class'=> 'form-control',
                        'placeholder' => 'Username' 
                        );
                    echo form_input( $data );

                 ?>

                <?php 
                    $data = array(
                         'type' => 'password',
                         'name' => 'password',
                         'id'   => 'password',
                         'class'=> 'form-control',
                         'placeholder' => 'Password' 
                         );
                    echo form_password( $data );

                ?>

            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
<?php echo form_close(); ?>
<!--             <div class="registration">
                Don't have an account yet?
                <a class="" href="registration.html">
                    Create an account
                </a>
            </div> -->

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/bs3/js/bootstrap.min.js"></script>

  </body>

<!-- Mirrored from bucketadmin.themebucket.net/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2016 11:26:01 GMT -->
</html>
