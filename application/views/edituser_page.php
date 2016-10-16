<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-6">
            <?php 
                if ( $user_data ) 
                {
                  foreach ($user_data as $edituser ) 
                  { ?>

                  <?php 
                      $data = array(
                          'name' => 'updateuser',
                          'class' => 'form-signin update-user',
                          );
                      echo form_open( 'admin_auth/update_user/'.$edituser->id, $data );

                   ?>
                      <h2 class="form-signin-heading">Update userinformation</h2>
                      <div class="login-wrap">

                          <p>Change user's personal information</p>
                          <?php
                            $data = array(
                                'type' => 'text',
                                'name' => 'fname',
                                'class' => 'form-control',
                                'value' => $edituser->fname
                                );
                            echo form_input( $data );
                          ?>

                          <?php
                            $data = array(
                                'type' => 'text',
                                'name' => 'lname',
                                'class' => 'form-control',
                                'value' => $edituser->lname
                                );
                            echo form_input( $data );
                          ?>

                          <?php
                            $data = array(
                                'type' => 'text',
                                'name' => 'mobile',
                                'class' => 'form-control',
                                'value' => $edituser->mobile
                                );
                            echo form_input( $data );
                          ?>

                          <?php
                            $data = array(
                                'type' => 'email',
                                'name' => 'email',
                                'class' => 'form-control',
                                'value' => $edituser->email
                                );
                            echo form_input( $data );
                          ?>

                          <?php
                            $data = array(
                                'type' => 'text',
                                'name' => 'postcode',
                                'class' => 'form-control',
                                'value' => $edituser->postcode
                                );
                            echo form_input( $data );
                          ?>

                          <?php
                            $data = array(
                                'type' => 'submit',
                                'name' => 'submit',
                                'class' => 'btn btn-lg btn-login btn-block',
                                'value' => 'Update user'
                                );
                            echo form_input( $data );
                          ?>


                      </div>

                    <?php echo form_close();?>
                    <?php 
                    
                  }
                }

             ?>

            
      </div>
      </div>
      </section>
