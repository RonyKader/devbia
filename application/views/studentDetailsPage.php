<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
        <!-- Start of Basic Information -->
            <div class="contactwrapper clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2>Basic Student Information</h2>
                </div>
                <?php 
                    if ( $indivisualstData ) :                    
                        foreach ($indivisualstData as $indivisualstDataList ) 
                        {;?>                     
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="studentInfo">
                                <ul class="list-unstyled">
                                    <li><span>Reg : </span>0225698745</li>
                                    <li><span>Name : </span><?php echo $indivisualstDataList->student_name; ?></li>
                                    <li><span>Father's Name : </span><?php echo $indivisualstDataList->father_name; ?></li>
                                    <li><span>Mother's Name : </span><?php echo $indivisualstDataList->mother_name; ?></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="studentInfo">
                                <ul class="list-unstyled">
                                    <li><span>Session : </span><?php echo $indivisualstDataList->session_month ?> - <?php echo $indivisualstDataList->session_year ?></li>
                                    <li><span>Registration Fee : </span><?php echo $indivisualstDataList->registration_fee; ?></li>
                                    <li><span>Course's Name : </span><?php echo $indivisualstDataList->course_id; ?></li>
                                    <li><span>Sponsored By : </span><?php echo $indivisualstDataList->mother_name; ?></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="studentInfo">
                                <ul class="list-unstyled">
                                    <li><span>Organaization : </span><?php echo $indivisualstDataList->self_organization; ?></li>
                                    <li><span>Current Job : </span><?php echo $indivisualstDataList->current_employeement; ?></li>
                                    <li><span>Exprience : </span><?php echo $indivisualstDataList->mother_name; ?></li>
                                    <li><span>Current Emplement Address : </span><?php echo $indivisualstDataList->current_employeement_address; ?></li>
                                    <li><span>Designation : </span><?php echo $indivisualstDataList->mother_name; ?></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="studentInfo">
                                <ul class="list-unstyled">
                                    <li><span>Created Date : </span><?php echo $indivisualstDataList->create_date; ?></li>
                                    <li><span>Emmergency Con.Person : </span><?php echo $indivisualstDataList->emergency_contact_name; ?></li>
                                    <li><span>Emergency Mobile : </span><?php echo $indivisualstDataList->emergency_contact_no; ?></li>
                                    <li><span>Gender : </span><?php echo $indivisualstDataList->gender; ?> </li>
                                    <li><span>Religion : </span><?php echo $indivisualstDataList->religion; ?> </li>
                                    <li><span>Marital Status : </span><?php echo $indivisualstDataList->marital_status; ?> </li>
                                    <li><span>MObile Number : </span><?php echo $indivisualstDataList->mobile_no; ?> </li>
                                    <li><span>Email Address : </span><?php echo $indivisualstDataList->email; ?></li>
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

                            <!-- Modal -->
                            <div id="basicinfo" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Update Student Basic Information</h4>
                                  </div>
                                  <div class="modal-body"> 
                                  <?php 
                                    echo "<pre>"; 
                                    print_r( $indivisualstDataList ); 
                                  ?>                           
                                    <form action="<?php echo base_url();?>registration/hello" method="POST">
                                        <input type="text" name="hello" value="<?php echo $indivisualstDataList->student_name;?>" id="hello" class="form-control">
                                        <input type="submit" value="Update Information">
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>

                              </div>
                            </div>

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
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="studentInfo">
                            <ul class="list-unstyled">
                                <li><span>Reg : </span>0225698745</li>
                                <li><span>Name : </span>Md.Tarikul Islam </li>
                                <li><span>Father's Name : </span>Md.Abdul Kader Shekh </li>
                                <li><span>Mother's Name : </span>Taslima Begaum </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="studentInfo">
                            <ul class="list-unstyled">
                                <li><span>Session : </span>Oct 2016</li>
                                <li><span>Registration Fee : </span>600tk </li>
                                <li><span>Course's Name : </span>Basic Diploma Certificate</li>
                                <li><span>Sponsored By : </span>Chefonline</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="studentInfo">
                            <ul class="list-unstyled">
                                <li><span>Organaization : </span>Amber IT</li>
                                <li><span>Current Job : </span>Amber IT</li>
                                <li><span>Exprience : </span>2 years </li>
                                <li><span>Current Emplement Address : </span>Navana Tower, 22th Floor, Dhaka - 1212 </li>
                                <li><span>Designation : </span>Senior Developer </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="studentInfo">
                            <ul class="list-unstyled">
                                <li><span>Birth Date : </span>05.05.88</li>
                                <li><span>Emmergency Con.Person : </span>Md.Abdul Kader Shekh </li>
                                <li><span>Emergency Mobile : </span> 01911873186</li>
                                <li><span>Gender : </span>Male </li>
                                <li><span>Religion : </span>Muslim </li>
                                <li><span>Marital Status : </span>Single </li>
                                <li><span>MObile Number : </span>01911873186 </li>
                                <li><span>Email Address : </span>rony.ksr06@gmail.com </li>
                                <li><span>Blood Group : </span>0+ </li>
                                <li><span>Country : </span>Bangladesh</li>
                                <li><span>Nationality : </span>Bangladeshi</li>
                                <li><span>National ID : </span>98658745896547</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <a href="" class="btn btn-primary">Edit Student Address Info</a>
                    </div>
                </div>

                <!-- End of Address Information -->

                <!-- Start of Education Information -->
                    <div class="contactwrapper clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2>Student Education Information</h2>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="studentInfo">
                                <ul class="list-unstyled">
                                    <li><span>Reg : </span>0225698745</li>
                                    <li><span>Name : </span>Md.Tarikul Islam </li>
                                    <li><span>Father's Name : </span>Md.Abdul Kader Shekh </li>
                                    <li><span>Mother's Name : </span>Taslima Begaum </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="studentInfo">
                                <ul class="list-unstyled">
                                    <li><span>Session : </span>Oct 2016</li>
                                    <li><span>Registration Fee : </span>600tk </li>
                                    <li><span>Course's Name : </span>Basic Diploma Certificate</li>
                                    <li><span>Sponsored By : </span>Chefonline</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="studentInfo">
                                <ul class="list-unstyled">
                                    <li><span>Organaization : </span>Amber IT</li>
                                    <li><span>Current Job : </span>Amber IT</li>
                                    <li><span>Exprience : </span>2 years </li>
                                    <li><span>Current Emplement Address : </span>Navana Tower, 22th Floor, Dhaka - 1212 </li>
                                    <li><span>Designation : </span>Senior Developer </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="studentInfo">
                                <ul class="list-unstyled">
                                    <li><span>Birth Date : </span>05.05.88</li>
                                    <li><span>Emmergency Con.Person : </span>Md.Abdul Kader Shekh </li>
                                    <li><span>Emergency Mobile : </span> 01911873186</li>
                                    <li><span>Gender : </span>Male </li>
                                    <li><span>Religion : </span>Muslim </li>
                                    <li><span>Marital Status : </span>Single </li>
                                    <li><span>MObile Number : </span>01911873186 </li>
                                    <li><span>Email Address : </span>rony.ksr06@gmail.com </li>
                                    <li><span>Blood Group : </span>0+ </li>
                                    <li><span>Country : </span>Bangladesh</li>
                                    <li><span>Nationality : </span>Bangladeshi</li>
                                    <li><span>National ID : </span>98658745896547</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a href="" class="btn btn-primary">Edit Student Education Info</a>
                        </div>
                    </div>
                    <!-- End of Education Information -->

        </div>
    </section>
</section>        