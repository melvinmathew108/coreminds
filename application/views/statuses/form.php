<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?php echo site_url();?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="<?php echo site_url('');?>">Category</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>New</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> New status<hr /></h3>

        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS 1-->
        <form method="POST"  class="form-horizontal branch_form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-4">
                    <div class="form-group <?php echo form_error('name')?'has-error':'';?>">
                        <label>Status Name</label>
                        <input type="text" name="name" class="form-control" autocomplete="off">
                        <?php echo form_error('name');?>
                    </div>

                    <div class="form-group <?php echo form_error('color')?'has-error':'';?>">
                        <label>Color Code</label>
                        <input type="text" name="color" class="form-control" autocomplete="off">
                        <?php echo form_error('color');?>
                    </div>

                    <br>
                    <div class="form-group">
                        <div >
                            <button type="submit" class="btn btn-danger" name="save">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->
</div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
