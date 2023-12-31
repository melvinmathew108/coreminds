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
                    <a href="<?php echo site_url('');?>">District</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>New</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> District<hr /></h3>

        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS 1-->
        <form method="POST"  class="form " enctype="multipart/form-data">
            <div class="row product">

                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group   <?php echo form_error('name')?'has-error':'';?>">
                                <label class="control-label">District</label>
                                <input value="<?php echo $row['name']; ?>" type="text" class="form-control"
                                       name="name" id="name" autocomplete="off" placeholder="">
                                <?php echo form_error('name');?>
                            </div>
                        </div>
                    </div><br><br>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-danger btn-block col-md-3" name="save">Save</button>
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


