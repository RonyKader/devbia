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
                        <th>Mobile</th>
                        <th class="hidden-phone">E-mail address</th>
                        <th class="hidden-phone">Postcode</th>
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
                                <td> <?php echo $alluser->fname . " ".$alluser->lname;?></td>
                                <td class="center hidden-phone"><?php echo $alluser->mobile;?></td>
                                <td class="center hidden-phone"><?php echo $alluser->email;?></td>
                                <td class="center hidden-phone"><?php echo $alluser->postcode;?></td>
                                <td>Active</td>
                                <td><a href="<?php echo base_url();?>admin_auth/edituser_box/<?php echo $alluser->id;?>"> Edit</a> 
                                | <a href="<?php echo base_url();?>admin_auth/delete_user/<?php echo $alluser->id;?>" onclick="return confirm('Are you sure want to delete ?')";>Delete</a></td>
                            </tr>
                            <?php    
                            }
                        }

                      ?>
                    
                    
                    </tfoot>
                    </table>
                    </div>
                    </div>
                </section>