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
                                echo form_open_multipart('registration/fileupload',$data );
                                $data = array(
                                    'type' => 'file',
                                    'name' => 'upload_image'
                                    );
                                echo form_upload( $data );
                                $data = array(
                                    'type'  =>  'submit',
                                    'class' =>  'btn btn-primarry',
                                    'value' =>  'Submit File'
                                    );
                                echo form_submit( $data );
                                echo form_close();

                             ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>