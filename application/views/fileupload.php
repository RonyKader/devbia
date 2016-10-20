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
                            <?php 
                                $data = array(
                                    'name' => 'fileuploadfrom'
                                    );
                                echo form_open_multipart('registration/fileupload_do',$data );
                            ?>
                            <div class="form-group">
                                <label for="datatype1">Both <input type="checkbox" name="datatype[]" id="datatype1" value="0"></label>                                
                                <label for="datatype2">Type Two <input type="checkbox" name="datatype[]" id="datatype2" value="1"></label>                                
                                <label for="datatype3">Type Three <input type="checkbox" name="datatype[]" id="datatype3" value="2"></label>                                
                            </div>
                            <div class="form-group">
                                <?php
                                    $data = array(
                                        'type' => 'file',
                                        'name' => 'file_image'
                                        );
                                    echo form_upload( $data );
                                ?>
                            </div>
                            <div class="form-group">
                                <?php    
                                    $data = array(
                                        'type'  =>  'submit',
                                        'class' =>  'btn btn-primarry',
                                        'value' =>  'Submit File'
                                        );
                                    echo form_submit( $data );
                                ?>
                            </div>
                            <?php    
                                echo form_close();

                             ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>