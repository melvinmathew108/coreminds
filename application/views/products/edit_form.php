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
                    <a href="<?php echo site_url('');?>">Products</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Edit</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> Products<hr /></h3>

        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS 1-->
        <form method="POST"  class="form " enctype="multipart/form-data">
            <div class="row product">

                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group   <?php echo form_error('category_id')?'has-error':'';?>">
                                <label class="control-label">Category</label>
                                <select  class="form-control  form-filter category_id" name="category_id">
                                    <option value="">--Category--</option>
                                    <?php foreach($arr_category as $item ){ ?>
                                        <option value="<?php echo $item->id; ?>" <?php echo ($row['category_id']== $item->id)?"selected":''; ?> >
                                            <?php echo  $item->name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <?php echo form_error('category_id');?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group <?php echo form_error('name')?'has-error':'';?>">
                                <label class="control-label">Product</label>
                                <input value="<?php echo $row['name']; ?>" type="text" class="form-control"
                                       name="name" id="name" autocomplete="off" placeholder="Product">
                                <?php echo form_error('name');?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group <?php echo form_error('amount')?'has-error':'';?>">
                                <label class="control-label">Cost</label>
                                <input value="<?php echo $row['amount']; ?>" type="text" class="form-control"
                                       name="amount" id="amount" autocomplete="off" placeholder="Cost">
                                <?php echo form_error('amount');?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-danger btn-block col-md-4" name="save">Save</button>
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


