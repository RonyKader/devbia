<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Dynamic Table
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Name</th>
                                        <th>Father's name</th>
                                        <th>Mother's name</th>                                        
                                        <th class="hidden-phone">University</th>
                                        <th class="hidden-phone">Subject</th>
                                        <th class="hidden-phone">Result</th>
                                        <th class="hidden-phone">GPA</th>
                                        <th class="hidden-phone">Status</th>
                                        <th class="hidden-phone">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php 
                                    if ( $studentlistData ) 
                                    {   $i = 0;
                                        foreach ($studentlistData as $allstudent ) 
                                        {
                                            $i++;
                                        ?>
                                        <tr class="gradeX">
                                            <td><?php echo $i;?></td>
                                            <td> <?php echo $allstudent->student_name; ?></td>
                                            <td class="center hidden-phone"><?php echo $allstudent->father_name;?></td>
                                            <td class="center hidden-phone"><?php echo $allstudent->mother_name;?></td>                                    
                                            <td><?php echo $allstudent->university;?></td>
                                            <td><?php echo $allstudent->group;?></td>
                                            <td><?php echo $allstudent->result;?></td>
                                            <td><?php echo $allstudent->gpa;?></td>
                                            <td>Active</td>
                                            <td><a href="<?php echo base_url();?>Registration/studentDetails/<?php echo $allstudent->participant_id;?>">Details</a> 
                                            | <a href="<?php echo base_url();?>registration/delete_user/<?php echo $allstudent->participant_id;?>" onclick="return confirm('Are you sure want to delete ?')";>Delete</a></td>
                                        </tr>
                                        <?php    
                                        }
                                    }

                                  ?>                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>