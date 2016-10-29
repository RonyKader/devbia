<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
        <!-- Start of Basic Information -->
            <div class="contactwrapper clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2>Basic Student Information</h2>
                    <?php 
                        $FlsMsg = $this->session->flashdata('FlsMsg');
                        if ( isset($FlsMsg)):
                            echo $FlsMsg;
                        endif;
                     ?>
                </div>
                <?php 
                if ( $indivisualstData ) :                    
                    foreach ( $indivisualstData as $indivisualstDataList ) 
                    {;?>                     
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="studentInfo">
                            <ul class="list-unstyled">
                                <li><span>Reg : </span>0225698745</li>
                                <li><span>Name : </span><?php echo $indivisualstDataList->student_name; ?></li>
                                <li><span>Father's Name : </span><?php echo $indivisualstDataList->father_name; ?></li>
                                <li><span>Mother's Name : </span><?php echo $indivisualstDataList->mother_name; ?></li>
                                <li><span>Mobile Number : </span><?php echo $indivisualstDataList->mobile_no; ?> </li>
                                <li><span>Email Address : </span><?php echo $indivisualstDataList->email; ?></li>
                                <li><span>Gender : </span><?php echo $indivisualstDataList->gender; ?> </li>
                                <li><span>Emmergency Con.Person : </span><?php echo $indivisualstDataList->emergency_contact_name; ?></li>
                                <li><span>Emergency Mobile : </span><?php echo $indivisualstDataList->emergency_contact_no; ?></li>

                                
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="studentInfo">
                            <ul class="list-unstyled">
                                <li><span>Organaization : </span><?php echo $indivisualstDataList->self_organization; ?></li>
                                <li><span>Current Job : </span><?php echo $indivisualstDataList->current_employeement; ?></li>
                                <li><span>Designation : </span><?php echo $indivisualstDataList->mother_name; ?></li>
                                <li><span>Exprience : </span><?php echo $indivisualstDataList->mother_name; ?></li>
                                <li><span>Current Employeement Address : </span><?php echo $indivisualstDataList->current_employeement_address; ?></li>
                                <li><span>Created Date : </span><?php echo $indivisualstDataList->create_date; ?></li>
                                <li><span>Session : </span><?php echo $indivisualstDataList->session_month ?> - <?php echo $indivisualstDataList->session_year ?></li>
                                <li><span>Course's Name : </span><?php echo $indivisualstDataList->course_id; ?></li>
                                <li><span>Registration Fee : </span><?php echo $indivisualstDataList->registration_fee; ?></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="studentInfo">
                            <ul class="list-unstyled">                                    
                                <li><span>Sponsored By : </span><?php echo $indivisualstDataList->mother_name; ?></li>
                                <li><span>Religion : </span><?php echo $indivisualstDataList->religion; ?> </li>
                                <li><span>Marital Status : </span><?php echo $indivisualstDataList->marital_status; ?> </li>
                                <li><span>Blood Group : </span><?php echo $indivisualstDataList->blood_group; ?></li>
                                <li><span>Country : </span><?php echo $indivisualstDataList->country; ?></li>
                                <li><span>Nationality : </span><?php echo $indivisualstDataList->nationality; ?></li>
                                <li><span>National ID : </span><?php echo $indivisualstDataList->nationalid; ?></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicinfo">Edit Student Basic Info</button>

                        <!-- START OF BASIC INFORMATION UPDATE FORM -->
                        <div id="basicinfo" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Update Student Basic Information</h4>
                              </div>
                              <div class="modal-body"> 
                                  <?php 
                                    //echo "<pre>"; 
                                    //print_r( $indivisualstDataList ); 
                                  ?>
                                <?php 
                                    $formData = array(
                                        'name'      =>  'basicinfo',
                                        'onsubmit'  =>  'return signupValidation()'
                                        );
                                    echo form_open( 'registration/updateSutdentBasicInfo/'.$indivisualstDataList->participant_id, $formData );
                                ?>
                                <div class="form-group"> 
                                    <?php 
                                        $data = array(
                                            'type'  =>  'text',
                                            'name'  =>  'student_name',
                                            'class' =>  'form-control',
                                            'value' =>  $indivisualstDataList->student_name
                                            );
                                        echo form_input( $data );
                                    ?>
                                </div>
                                <div class="form-group"> 
                                    <?php 
                                        $data = array(
                                            'type'  =>  'text',
                                            'name'  =>  'father_name',
                                            'class' =>  'form-control',
                                            'value' =>  $indivisualstDataList->father_name
                                            );
                                        echo form_input( $data );
                                    ?>
                                </div>

                                <div class="form-group"> 
                                    <?php 
                                        $data = array(
                                            'type'  =>  'text',
                                            'name'  =>  'mother_name',
                                            'class' =>  'form-control',
                                            'value' =>  $indivisualstDataList->mother_name
                                            );
                                        echo form_input( $data );
                                    ?>
                                </div>

                                <div class="form-group"> 
                                    <?php 
                                        $data = array(
                                            'type'  =>  'text',
                                            'name'  =>  'mobile_no',
                                            'class' =>  'form-control',
                                            'value' =>  $indivisualstDataList->mobile_no
                                            );
                                        echo form_input( $data );
                                    ?>
                                </div>

                                <div class="form-group"> 
                                    <?php 
                                        $data = array(
                                            'type'  =>  'submit',
                                            'name'  =>  'mobile_no',
                                            'class' =>  'btn btn-primary',
                                            'value' =>  'Update Basic Info'
                                            );
                                        echo form_input( $data );
                                    ?>
                                </div>

                                <?php echo form_close(); ?>
                              </div>                                  
                            </div>

                          </div>
                        </div>
                        <!-- END OF BASIC INFORMATION UPDATE FORM -->
                    </div>

                   <?php }
               endif;
            ?>
        </div>

            <!-- End of Basic Information -->

    <!-- Start of Address Information -->
        <div class="contactwrapper clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>Student Address Information</h2>
            </div>
            <?php 
                if ( $indivisualstAddress ) :                    
                    foreach ( $indivisualstAddress as $indivisualstAddressList ) 
                    {;?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="studentInfo">
                                <ul class="list-unstyled list-inline">
                                    <li><span>Address : </span><?php echo $indivisualstAddressList->address; ?></li>
                                    <li><span>District : </span><?php echo $indivisualstAddressList->district_code; ?></li>
                                    <li><span>Upzilla : </span><?php echo $indivisualstAddressList->upzilla_code; ?></li>
                                    <li><span>Address Type : </span><?php echo $indivisualstAddressList->type; ?></li>
                                    <li><span>Post Code : </span><?php echo $indivisualstAddressList->post_code; ?></li>
                                </ul>
                            </div>
                        </div>                                
                    <?php }
                endif;
            ?>
            <div class="clearfix"></div>
            <!-- START OF Address INFORMATION UPDATE FORM -->
            <div id="studentAddress" class="modal fade" role="dialog">
                <div class="modal-dialog updateaddress">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Student Basic Information</h4>
                      </div>
                      <div class="modal-body">
                        <?php 
                            $formaddress = array(
                                'name'      =>  'basicinfo',
                                'onsubmit'  =>  'return signupValidation()'
                                );
                            echo form_open( 'registration/updateSutdentAddress/'.$indivisualstAddressList->participant_id, $formaddress );
                        ?>
                        <?php 
                            if ( $indivisualstAddress ) :                    
                                foreach ( $indivisualstAddress as $indivisualstAddressList ) 
                                    // echo "<pre>";
                                    // print_r( $indivisualstAddressList );
                                {;?>
                              <div id="rem" class="main-wrap clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <input type="hidden" name="id[]" value="<?php echo $indivisualstAddressList->id;?>">
                                        <div class="form-group">
                                            <?php echo form_error('address[]');?>
                                            <?php 
                                                $data = array(
                                                    'type' => 'textarea',
                                                    'name' => 'address[]',
                                                    'id' => 'address',
                                                    'cols' => 0,
                                                    'rows' => 0,
                                                    'class' => 'form-control text-add',
                                                    'placeholder' => 'Address',
                                                    'value'    => $indivisualstAddressList->address                        
                                                );
                                                echo form_textarea( $data );
                                            ?> 
                                        </div>
                                    </div>            
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="form-group">
                                            <?php echo form_error('district_code[]');?>
                                            <select name="district_code[]" id="district_id1" class="form-control" required onchange="findUpazilla(this.value,1)">
                                                <option selected="true" disabled="disabled">Select District</option>
                                                <?php 
                                                    if ( $district_info ) 
                                                    {
                                                    foreach ($district_info as $disInfo ) 
                                                    {
                                                     ?>
                                                      <option value="<?php echo $disInfo->district_code;?>"><?php echo $disInfo->district_name;?></option>
                                                     <?php
                                                    }
                                                  }
                                                ?>
                                            </select>
                                        </div>
                                    </div>            
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="form-group">
                                            <?php echo form_error('upzilla_code[]');?>
                                            <select name="upzilla_code[]" id="upazilla_id1" class="form-control">
                                                <option selected="true" disabled="disabled">Select Upzilla</option>
                                                <?php 
                                                    if ( $upzilla_info ) 
                                                    {
                                                    foreach ($upzilla_info as $upzillaInfo ) 
                                                    {
                                                    ?>
                                                    <option value="<?php echo $upzillaInfo->upzilla_code;?>"><?php echo $upzillaInfo->upzilla_name;?></option>
                                                     <?php
                                                    }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>            
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="form-group">
                                            <?php echo form_error('address_type[]');?>
                                            <select name="address_type[]" id="address_type" class="form-control">
                                                <option selected="true" disabled="disabled">Address Type</option>
                                                <option value="1">Present Address</option>
                                                <option value="2">Permanent Address</option>
                                            </select> 
                                        </div>
                                    </div>            
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="form-group">
                                            <?php echo form_error('post_code[]');?>
                                            <?php 
                                                $data = array(
                                                    'type' => 'text',
                                                    'name' => 'post_code[]',
                                                    'id'   => 'post_code',
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Post Code',
                                                    'value'    => set_value('post_code[]')                       
                                                );
                                                echo form_input( $data );
                                            ?> 
                                        </div>
                                    </div>
                                </div>                                                  
                                <?php }
                            endif;
                        ?>
                        
                        <div class="form-group"> 
                            <?php 
                                $data = array(
                                    'type'  =>  'submit',
                                    'name'  =>  'mobile_no',
                                    'class' =>  'btn btn-primary',
                                    'value' =>  'Update Address Info'
                                    );
                                echo form_input( $data );
                            ?>
                        </div>
                        <?php echo form_close(); ?>
                      </div>                                  
                    </div>

                  </div>
                </div>
                <!-- END OF Address INFORMATION UPDATE FORM -->                                    
                <div class="col-lg-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentAddress">Edit Address Info</button>
                </div>
            </div>
            <!-- End of Address Information -->

            <!-- Start of Education Information -->
            <div class="contactwrapper clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2>Student Education Information</h2>
                </div>
                <?php 
                    if ( $indivisualstAddress ) :                    
                        foreach ( $indivisualstAddress as $indivisualstAddressList ) 
                        {;?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="studentInfo">                                    
                                    <ul class="list-unstyled list-inline">
                                        <li><span>Ms : </span><?php echo $indivisualstAddressList->address; ?></li>
                                        <li><span>University : </span><?php echo $indivisualstAddressList->district_code; ?></li>
                                        <li><span>Subject : </span><?php echo $indivisualstAddressList->upzilla_code; ?></li>
                                        <li><span>Result : </span><?php echo $indivisualstAddressList->type; ?></li>
                                        <li><span>GPA : </span><?php echo $indivisualstAddressList->post_code; ?></li>
                                    </ul>
                                </div>
                            </div>                                
                        <?php }
                    endif;
                ?>
                <div class="clearfix"></div>
                <!-- START OF EDUCATION INFORMATION UPDATE FORM -->
                <div id="studentEducation" class="modal fade" role="dialog">
                    <div class="modal-dialog updateaddress">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Student Basic Information</h4>
                          </div>
                          <div class="modal-body">
                            <?php 
                                $formaddress = array(
                                    'name'      =>  'basicinfo',
                                    'onsubmit'  =>  'return signupValidation()'
                                    );
                                echo form_open( 'registration/updateSutdentAddress/'.$indivisualstAddressList->participant_id, $formaddress );
                            ?>
                            <?php 
                                if ( $indivisualstAddress ) :                    
                                    foreach ( $indivisualstAddress as $indivisualstAddressList ) 
                                        // echo "<pre>";
                                        // print_r( $indivisualstAddressList );
                                    {;?>
                                  <div id="rem" class="main-wrap clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <?php echo form_error('address[]');?>
                                                <?php 
                                                    $data = array(
                                                        'type' => 'textarea',
                                                        'name' => 'address[]',
                                                        'id' => 'address',
                                                        'cols' => 0,
                                                        'rows' => 0,
                                                        'class' => 'form-control text-add',
                                                        'placeholder' => 'Address',
                                                        'value'    => $indivisualstAddressList->address                        
                                                    );
                                                    echo form_textarea( $data );
                                                ?> 
                                            </div>
                                        </div>            
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="form-group">
                                                <?php echo form_error('district_code[]');?>
                                                <select name="district_code[]" id="district_id1" class="form-control" required onchange="findUpazilla(this.value,1)">
                                                    <option selected="true" disabled="disabled">Select District</option>
                                                    <?php 
                                                        if ( $district_info ) 
                                                        {
                                                        foreach ($district_info as $disInfo ) 
                                                        {
                                                         ?>
                                                          <option value="<?php echo $disInfo->district_code;?>"><?php echo $disInfo->district_name;?></option>
                                                         <?php
                                                        }
                                                      }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>            
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="form-group">
                                                <?php echo form_error('upzilla_code[]');?>
                                                <select name="upzilla_code[]" id="upazilla_id1" class="form-control">
                                                    <option selected="true" disabled="disabled">Select Upzilla</option>
                                                    <?php 
                                                        if ( $upzilla_info ) 
                                                        {
                                                        foreach ($upzilla_info as $upzillaInfo ) 
                                                        {
                                                        ?>
                                                        <option value="<?php echo $upzillaInfo->upzilla_code;?>"><?php echo $upzillaInfo->upzilla_name;?></option>
                                                         <?php
                                                        }
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>            
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="form-group">
                                                <?php echo form_error('address_type[]');?>
                                                <select name="address_type[]" id="address_type" class="form-control">
                                                    <option selected="true" disabled="disabled">Address Type</option>
                                                    <option value="1">Present Address</option>
                                                    <option value="2">Permanent Address</option>
                                                </select> 
                                            </div>
                                        </div>            
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="form-group">
                                                <?php echo form_error('post_code[]');?>
                                                <?php 
                                                    $data = array(
                                                        'type' => 'text',
                                                        'name' => 'post_code[]',
                                                        'id'   => 'post_code',
                                                        'class' => 'form-control',
                                                        'placeholder' => 'Post Code',
                                                        'value'    => set_value('post_code[]')                       
                                                    );
                                                    echo form_input( $data );
                                                ?> 
                                            </div>
                                        </div>
                                    </div>                                                  
                                    <?php }
                                endif;
                            ?>
                            
                            <div class="form-group"> 
                                <?php 
                                    $data = array(
                                        'type'  =>  'submit',
                                        'name'  =>  'mobile_no',
                                        'class' =>  'btn btn-primary',
                                        'value' =>  'Update Address Info'
                                        );
                                    echo form_input( $data );
                                ?>
                            </div>
                            <?php echo form_close(); ?>
                          </div>                                  
                        </div>

                      </div>
                    </div>
                    <!-- END OF Address INFORMATION UPDATE FORM -->                                    
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentEducation">Edit Education Info</button>
                    </div>
                </div>
                <!-- END OF EDUCATION INFORMATION -->
            </div>
            <!-- End of Education Information -->

        </div>
    </section>
</section>        