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
                                        <th>Username</th>
                                        <th class="hidden-phone">E-mail address</th>
                                        <th class="hidden-phone">Present address</th>
                                        <th class="hidden-phone">Status</th>
                                        <th class="hidden-phone">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php 
                                    if ( $userlistData ) 
                                    {   $i = 0;
                                        foreach ($userlistData as $alluser ) 
                                        {
                                            $i++;
                                        ?>
                                        <tr class="gradeX">
                                            <td><?php echo $i;?></td>
                                            <td> <?php echo $alluser->user_fullname; ?></td>
                                            <td class="center hidden-phone"><?php echo $alluser->username;?></td>
                                            <td class="center hidden-phone"><?php echo $alluser->user_emailaddress;?></td>
                                            <td class="center hidden-phone"><?php echo $alluser->present_address;?></td>
                                            <td>Active</td>
                                            <td><a href="<?php echo base_url();?>admin_auth/edituser_box/<?php echo $alluser->id_user;?>"> Edit</a> 
                                            | <a href="<?php echo base_url();?>admin_auth/delete_user/<?php echo $alluser->id_user;?>" onclick="return confirm('Are you sure want to delete ?')";>Delete</a></td>
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