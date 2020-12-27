<?php include("inc/header.php"); ?>
<div class="container">
    <?php echo form_open("admin/createSchool", ['class' => 'form-horizontal']);?>
    <?php if($msg = $this->session->flashdata('message')): ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissble alert-success"><?php echo $msg;?></div>
            </div>
        </div>
    <?php endif; ?>
    <h3>Add School</h3>
    <hr>

        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">School Name</label>
                <div class="col-md-9">
                    <?php echo form_input(['name'=>'schoolname','class'=>'form-control','placeholder'=>'School Name', 'value'=>set_value('schoolname')]);?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('schoolname', '<div class="text-danger">','</div>'); ?>
        </div>
    </div>



       <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Branch</label>
                <div class="col-md-9">
                    <?php echo form_input(['name'=>'branch','class'=>'form-control','placeholder'=>'Branch']);?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('branch', '<div class="text-danger">','</div>'); ?>
        </div>
    </div>


    <button type="submit" class="btn btn-primary">Add</button>
    <?php echo anchor("admin/dashboard","Back",['class'=>'btn btn-primary']); ?>


</div>
    <?php echo form_close();?>
</div>
