<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <?php 
                    $FlsMsg = $this->session->flashdata('FlsMsg');
                    if ( isset($FlsMsg)):
                        echo $FlsMsg;
                    endif;
                 ?>

                    <?php 
                        $data = array(
                            'class' => 'student-reg',
                            'onsubmit' =>'return signupValidation()'
                            );
                        echo form_open('registration/process_registration', $data );
                     ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <header>
                <h2>Basic Student Information <span>*</span></h2>
            </header>
        </div>
        <div class="clearfix"></div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <?php 
                      $data = array(
                            'type' => 'text',
                            'name' => 'registration_no',
                            'class' => 'form-control',
                            'placeholder' => 'Registration No',
                            'readonly' => 'readonly'
                        );
                      echo form_input( $data );
                     ?>
                </div>

                <div class="form-group">
                <div class="danger">
                  <?php echo form_error('student_name');?>
                </div>
                <?php
                  $data = array(
                        'type' => 'text',
                        'name' => 'student_name',
                        'id'   => 'student_name',
                        'class' => 'form-control',
                        'placeholder' => 'Participant Name', 
                        'value'    => set_value('student_name')                       
                    );
                  echo form_input( $data );
                 ?>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <div class="form-group">
                  <div class="danger">
                    <?php echo form_error('father_name');?>
                  </div>
                <?php 
                  $data = array(
                        'type' => 'text',
                        'name' => 'father_name',
                        'id'   => 'father_name',
                        'class' => 'form-control',
                        'placeholder' => 'Father\'s Name',
                        'value'    => set_value('father_name')                        
                    );
                  echo form_input( $data );
                 ?>
                </div>

                <div class="form-group">
                <div class="danger">
                  <?php echo form_error('mother_name');?>
                </div>
                <?php 
                  $data = array(
                        'type' => 'text',
                        'name' => 'mother_name',
                        'id' => 'mother_name',
                        'class' => 'form-control',
                        'placeholder' => 'Mother\'s Name'                        
                    );
                  echo form_input( $data );
                 ?>
                </div>
            </div>
            <!-- End of Student Basic Information -->

            <!-- START OF Admit Course Information* -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <header>
                    <h2>Admit Course Information <span>*</span></h2>
                </header>
            </div>
            <div class="clearfix"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="row">    
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label for="">Session</label>
                            <div class="form-group">
                                <?php echo form_error('session_month');?>
                                <?php echo form_error('session_year');?>
                                <select name="session_month" id="session_month" class="custom-session">
                                    <option selected="true" disabled="disabled">Month</option>
                                    <option value="May">May</option>
                                    <option value="Oct">Oct</option>
                                </select>
                                <select name="session_year" id="session_year" class="custom-session">
                                    <option selected="true" disabled="disabled">Year</option>
                                    <option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
                                </select>
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <?php echo form_error('course_id');?>
                        <select name="course_id" id="course_id" class="form-control">
                            <option selected="true" disabled="disabled">Select a course</option>
                            <?php 
                               if ( $course_name ) 
                               {
                                 foreach ($course_name as $coursename ) 
                                 {
                                  ?>
                                   <option value="<?php echo $coursename->id;?>"><?php echo $coursename->course_name;?></option>
                                  <?php
                                 }
                               }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label for="">Registration Fee</label>
                    <div class="form-group">
                      <?php echo form_error('registration_fee');?>
                        <?php 
                          $data = array(
                                'type' => 'text',
                                'name' => 'registration_fee',
                                'id'   => 'registration_fee',
                                'class' => 'form-control',
                                'placeholder' => '1200 tk'                        
                            );
                          echo form_input( $data );
                         ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_error('organization_id');?>
                        <select name="organization_id" id="sponsored" class="form-control">
                            <option selected="true" disabled="disabled">Sponsored By</option>
                            <?php 
                               if ( $sponsoredby_info ) 
                               {
                                 foreach ($sponsoredby_info as $sponsored ) 
                                 {
                                  ?>
                                   <option value="<?php echo $sponsored->id;?>"><?php echo $sponsored->organization_name;?></option>
                                  <?php
                                 }
                               }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- END OF Admit Course Information* -->

                <!-- START OF Office Information * -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <header>
                        <h2>Office Information <span>*</span></h2>
                    </header>
                </div>
                <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <?php echo form_error('self_organization');?>
                            <?php 
                              $data = array(
                                    'type' => 'text',
                                    'name' => 'self_organization',
                                    'id'   => 'self_organization',
                                    'class' => 'form-control',
                                    'placeholder' => 'Organization'                        
                                );
                              echo form_input( $data );
                             ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_error('total_experience');?>
                            <?php 
                              $data = array(
                                    'type' => 'text',
                                    'name' => 'total_experience',
                                    'id' => 'total_experience',
                                    'class' => 'form-control',
                                    'placeholder' => 'Total Experience'                        
                                );
                              echo form_input( $data );
                             ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_error('designation_id');?>
                            <select name="designation_id" id="designation_id" class="form-control">
                                <option selected="true" disabled="disabled">Select a Designation</option>
                                <?php 
                                   if ( $designation_name ) 
                                   {
                                     foreach ($designation_name as $designation ) 
                                     {
                                      ?>
                                       <option value="<?php echo $designation->designation;?>"><?php echo $designation->designation;?></option>
                                      <?php
                                     }
                                   }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <?php echo form_error('current_employeement');?>
                            <?php 
                              $data = array(
                                    'type' => 'text',
                                    'name' => 'current_employeement',
                                    'id'   => 'current_employeement',
                                    'class' => 'form-control',
                                    'placeholder' => 'Current Employeement'                        
                                );
                              echo form_input( $data );
                             ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_error('current_employeement_address');?>
                            <?php 
                              $data = array(
                                    'type' => 'textarea',
                                    'name' => 'current_employeement_address',
                                    'id'   => 'current_employeement_address',
                                    'class' => 'form-control',
                                    'rows' => 4,
                                    'placeholder' => 'Current Employement Address'                        
                                );
                              echo form_textarea( $data );
                             ?>
                        </div>
                    </div>
                    <!-- END OF Office Information * -->

                    <!-- START OF Personal Information * -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <header>
                            <h2>Personal Information <span>*</span></h2>
                        </header>
                    </div>
                    <div class="clearfix"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <?php echo form_error('date_of_birth');?>
                                <?php 
                                  $data = array(
                                    'type' => 'date',
                                    'name' => 'date_of_birth',
                                    'id'   => 'date_of_birth',
                                    'class'=> 'form-control',
                                    'placeholder' => 'Date of Birth'
                                    );
                                  echo form_input( $data );
                                 ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_error('emergency_contact_name');?>
                                <?php 
                                  $data = array(
                                        'type' => 'text',
                                        'name' => 'emergency_contact_name',
                                        'id'   => 'emergency_contact_name',
                                        'class' => 'form-control',
                                        'placeholder' => 'Emergency Contact Name'                        
                                    );
                                  echo form_input( $data );
                                 ?>
                            </div> 

                            <div class="form-group">
                                <?php echo form_error('emergency_contact_no');?>
                                <?php 
                                  $data = array(
                                        'type' => 'text',
                                        'name' => 'emergency_contact_no',
                                        'id'   => 'emergency_contact_no',
                                        'class' => 'form-control',
                                        'placeholder' => 'Emergency Contact No'                        
                                    );
                                  echo form_input( $data );
                                 ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_error('gender');?>
                                <select name="gender" id="gender" class="form-control">
                                    <option selected="true" disabled="disabled">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <?php echo form_error('religion');?>
                                <select name="religion" id="religion" class="form-control">
                                    <option selected="true" disabled="disabled">Select Religion</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <?php echo form_error('marital_status');?>
                                <select name="marital_status" id="marital_status" class="form-control">
                                    <option selected="true" disabled="disabled">Select Marital Status</option>
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <?php echo form_error('mobile_no');?>
                                <?php 
                                  $data = array(
                                        'type' => 'text',
                                        'name' => 'mobile_no',
                                        'id'   => 'mobile_no',
                                        'class' => 'form-control',
                                        'placeholder' => 'Mobile No'                        
                                    );
                                  echo form_input( $data );
                                 ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_error('email');?>
                                <?php 
                                  $data = array(
                                        'type' => 'email',
                                        'name' => 'email',
                                        'id' => 'email',
                                        'class' => 'form-control',
                                        'placeholder' => 'E-mail address'                        
                                    );
                                  echo form_input( $data );
                                 ?>                              
                            </div>
                            <div class="form-group">
                                <?php echo form_error('blood_group');?>
                                <select name="blood_group" id="blood_group" class="form-control">
                                    <option selected="true" disabled="disabled">Select Blood Group</option>
                                    <option value="o+">O <sup>+</sup></option>
                                    <option value="a+">A<sup>+</sup></option>
                                    <option value="b+">B<sup>+</sup></option>
                                    <option value="ab+">AB<sup>+</sup></option>
                                    <option value="bb-">AB<sup>-</sup></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <?php echo form_error('country');?>
                                <select name="country" id="country" class="form-control">
                                    <option selected="true" disabled="disabled">Select Country</option>
                                    <?php 
                                        if ( $nationality_info ) 
                                        {
                                          foreach ($nationality_info as $nationality ) 
                                          {
                                            ?>
                                            <option value="<?php echo $nationality->id;?>"><?php echo $nationality->country;?></option>
                                              <?php
                                          }
                                        }

                                     ?>
                                </select>                      
                            </div>
                            <div class="form-group">
                                <?php echo form_error('nationality');?>
                                <select name="nationality" id="nationality" class="form-control">
                                    <option selected="true" disabled="disabled">Select Nationality</option>
                                    <?php 
                                        if ( $nationality_info ) 
                                        {
                                          foreach ($nationality_info as $nationality ) 
                                          {
                                            ?>
                                            <option value="<?php echo $nationality->id;?>"><?php echo $nationality->nationality;?></option>
                                              <?php
                                          }
                                        }

                                     ?>
                                </select>                                
                            </div>
                            <div class="form-group">
                                <?php echo form_error('nationalid');?>
                                <?php 
                                  $data = array(
                                        'type' => 'text',
                                        'name' => 'nationalid',
                                        'id'   => 'nationalid',
                                        'class' => 'form-control',
                                        'placeholder' => 'National ID'                        
                                    );
                                  echo form_input( $data );
                                 ?>                                    
                            </div>
                        </div>
                        <!-- END OF Personal Information * -->


                        <!-- Start of Address section -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <header>
                                <h2>Address <span>*</span></h2>
                            </header>
                        </div>
                        <div class="clearfix"></div>
                        
                            <div id="rem" class="main-wrap">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
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
                                                'placeholder' => 'Address'                        
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
                                                'placeholder' => 'Post Code'                       
                                            );
                                          echo form_input( $data );
                                         ?> 
                                    </div>
                                </div>            
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <button id="add" class="btn btn-primary">Add more</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="append-wrapper clearfix"></div>
                        <!-- End of Address section -->

                            <!-- Start of Academic Qualifications -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <header>
                                    <h2>Academic Qualifications <span>*</span></h2>
                                </header>
                            </div>
                            <div class="clearfix"></div>                        
                            <div id="edu" class="edu-wrap">                        
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <?php echo form_error('exam_id[]');?>
                                        <select  name="exam_id[]" id="educationlevel1" class="form-control" required onchange="finduniversity(this.value,1)">
                                            <option selected="true" disabled="disabled">Select Examination</option>
                                            <?php 
                                                if ( $educationlevel_info ) 
                                                {
                                                  foreach ($educationlevel_info as $educationlevel) 
                                                  { ?>
                                                      <option value="<?php echo $educationlevel->type;?>"><?php echo $educationlevel->exam_name;?></option>
                                                  <?php }
                                                }
                                             ?>                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <?php echo form_error('university[]');?>
                                        <select name="university[]" id="university1" class="form-control">
                                            <option selected="true" disabled="disabled">Select Board/University</option>
                                            <?php 
                                                if ( $university_info ) 
                                                {
                                                  foreach ($university_info as $university) 
                                                  { ?>
                                                      <option value="<?php echo $university->id;?>"><?php echo $university->name;?></option>
                                                  <?php }
                                                }
                                             ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <?php echo form_error('group[]');?>
                                            <?php 
                                              $data = array(
                                                    'type' => 'text',
                                                    'name' => 'group[]',
                                                    'id'   => 'group',
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Group/Subject'                      
                                                );
                                              echo form_input( $data );
                                             ?>
                                        </div>    
                                    </div>
                                </div>                                            
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <?php echo form_error('result[]');?>
                                        <select name="result[]" id="result" class="form-control">
                                            <option selected="true" disabled="disabled">Select Result</option>
                                            <option value="GPA Out of 5">GPA Out of 5</option>
                                            <option value="CGPA Out of 4">CGPA Out of 4</option>
                                            <option value="1st Division">1st Division</option>
                                            <option value="2nd Division">2nd Division</option>
                                            <option value="3rd Division">3rd Division</option>
                                        </select>
                                    </div>
                                </div>                                            
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <?php echo form_error('gpa[]');?>
                                        <?php 
                                          $data = array(
                                                'type' => 'text',
                                                'name' => 'gpa[]',
                                                'class' => 'form-control',
                                                'placeholder' => 'GPA/CGPA'                  
                                            );
                                          echo form_input( $data );
                                         ?>
                                    </div>
                                </div>                        
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <button id="add_edu" class="btn btn-primary">Add more</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="eduappend-wrapper clearfix"></div>
                          <!-- End of Address section -->
                          <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <button type="sumbit" class="btn btn-primary custom-checkout btn-block">Submit Registration</button>                            
                          </div>
                        <?php echo form_close(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
        function findUpazilla(id,key){
        if( id != '' )
        {
            $('#upazilla_id'+key).val('');
              $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?=base_url('registration/upazillaDataAjax');?>",
                data: { district_id:id },
                success: function(data)
                {
                  var options = '<option value=""> Select Upazilla</option>';
                  for(x=0; x<data.length; x++)
                  {
                    options += '<option value="'+data[x].upzilla_code+'">'+data[x].upzilla_name+'</option>';
                  }
                  $( '#upazilla_id'+key ).html(options);
                },
                error: function()
                {
                  alert('Please Select District.');
                }
              });
          }
          else
          {
            alert('Please Select District.');
          }
        }


        function finduniversity(id,key)
        {
        if( id != '' ){
            $('#university'+key).val('');
            $.ajax({
              type: "POST",
              dataType: "JSON",
              url: "<?=base_url('registration/universityDataAjax');?>",
              data: { type:id },

              success: function(data){
                var options = '<option value=""> Select Board/University</option>';

                for(x=0; x<data.length; x++){

                  options += '<option value="'+data[x].name+'">'+data[x].name+'</option>';
                }
                $( '#university'+key ).html(options);
              },
              error: function(){
                alert('Please Select Exam name.');
              }
            });
          }
          else{
            alert('Please Select District.');
          }
        }


        <?php 
         $disttict_option = '';
            if ( $district_info ) 
            {
              foreach ($district_info as $disInfo ) 
              {
               
                $disttict_option .= '<option value="'.$disInfo->district_code.'">'.$disInfo->district_name.'</option>';
            
              }
            }
         ?>

        jQuery(document).ready(function($)
        {
            var i = 1;
            jQuery('#add' ).click(function()
            {
                i++;
               var htmlWrite = '';
                    htmlWrite += '<div id="rem'+i+'" class="main-wrap clearfix">'+
                                '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                                '<div class="form-group">'+
                                    '<textarea name="address[]" id="'+i+'" class="form-control text-add" placeholder="Address"></textarea>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                                '<div class="form-group">'+
                                    '<select name="district_code[]" id="district_id'+i+'" class="form-control" onchange="findUpazilla(this.value,'+i+')">'+
                                        '<option value="">Select District</option>';
                    htmlWrite +=          '<?php echo $disttict_option; ?>';
                    htmlWrite +=    '</select>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                                '<div class="form-group">'+
                                    '<select name="upzilla_code[]" id="upazilla_id'+i+'" class="form-control">'+
                                    '<option value="">Select Upzilla</option>'+
                                        
                                    '</select>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                                '<div class="form-group">'+
                                    '<select name="address_type[]" id="" class="form-control">'+
                                        '<option>Select Address Type</option>'+
                                        '<option value="1">Present Address</option>'+
                                        '<option value="2">Permanent Address</option>'+
                                    '</select>'+
                                '</div>'+
                            '</div>'+
                            
                            '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                                '<div class="form-group">'+
                                    '<input type="text" name="post_code[]" id="'+i+'" class="form-control" placeholder="Post Code">'+
                                '</div>'+
                            '</div>'+
                            
                            '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                                '<div class="form-group">'+
                                    '<a href="javascript:void(0);" id="rem'+i+'" class="btn btn_rl btn-danger">Remove</a>'+
                                '</div>'+
                            '</div>'+
                            '</div>';

                jQuery('.append-wrapper').append( htmlWrite );            
                jQuery(".btn_rl").click(function()
                {
                    var get_id = $(this).attr('id');
                    // alert(get_id);
                    jQuery('#'+get_id+'').remove();
                })
                return false;
                });
        });                         

        <?php 
        $education = '';
            if ( $educationlevel_info ) 
            {
              foreach ($educationlevel_info as $educationlevel) 
              { 
                $education .= '<option value="'.$educationlevel->type.'">'.$educationlevel->exam_name.'</option>';
              }
            }
         ?>

     // Education Field
     jQuery(document).ready(function(){
         var edui = 1;
         jQuery('#add_edu' ).click(function(){
             edui++;
            var htmlWrite = '';
                 htmlWrite += '<div id="edurem'+edui+'" class="main-wrap clearfix">'+
                             '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                             '<div class="form-group">'+
                                     '<select name="exam_id[]" id="educationlevel'+edui+'" class="form-control" onchange="finduniversity(this.value,'+edui+')">';
                    htmlWrite += '<?php echo $education; ?>';
                    htmlWrite +=      '</select>'+                             
                             '</div>'+
                         '</div>'+
                         '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                             '<div class="form-group">'+
                                 '<select name="university[]" id="university'+edui+'" class="form-control">'+
                                     '<option>Select Board/University</option>'+
                                 '</select>'+ 
             
                             '</div>'+
                         '</div>'+
                         '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                             '<div class="form-group">'+
                                 '<input type="text" name="group[]" id="'+edui+'" class="form-control" placeholder="Group/Subject">'+                           
                             '</div>'+
                         '</div>'+
                         '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                             '<div class="form-group">'+
                                 '<select name="result[]" id="" class="form-control">'+
                                      '<option value="">Select Result</option>'+
                                      '<option value="GPA Out of 5">GPA Out of 5</option>'+
                                      '<option value="CGPA Out of 4">CGPA Out of 4</option>'+
                                      '<option value="1st Division">1st Division</option>'+
                                      '<option value="2nd Division">2nd Division</option>'+
                                      '<option value="3rd Division">3rd Division</option>'+
                                  '</select>'+ 
                             '</div>'+
                         '</div>'+
                         
                         '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                             '<div class="form-group">'+
                                 '<input type="text" name="gpa[]" id="'+edui+'" class="form-control" placeholder="GPA/CGPA">'+
                             '</div>'+
                         '</div>'+
                         
                         '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">'+
                             '<div class="form-group">'+
                                 '<a href="javascript:void(0);" id="edurem'+edui+'" class="btn btn_rledu btn-danger">Remove</a>'+
                             '</div>'+
                         '</div>'+
                         '</div>';

         jQuery('.eduappend-wrapper').append( htmlWrite );
         
         jQuery(".btn_rledu").click(function(){
             var eduget_id = $(this).attr('id');
             // alert(get_id);
             jQuery('#'+eduget_id+'').remove();
         })
         return false;
         });


     }); 
    </script>
    <!-- Button trigger modal -->
            </div>
        </div>
    </section>
</section>        