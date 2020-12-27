<?php include("inc/header.php"); ?>
<div class="container">
	<?php echo form_open("Admin/createStudent", ['class' => 'form-horizontal']);?>
    <?php if($msg = $this->session->flashdata('message')): ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissble alert-success"><?php echo $msg;?></div>
            </div>
        </div>
    <?php endif; ?>
    <h3>Add Student</h3>
    <hr>
    <div class="row">
    	<div class="col-md-6">
    		<div class="form-group">
    			<label class="col-md-3 control-label">Student Name</label>
    			<div class="col-md-9">
    				<?php echo form_input(['name' => 'studentname', 'class'=>'form-control', 'placeholder'=>'Student Name', 'value'=>set_value('studentname')]);?>
    			</div>
    		</div>
    	</div>
    	<div class="col-md-6">
    		<?php echo form_error('studentname', '<div class="text-danger">','</div>'); ?>
    	</div>
    </div>

            <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">School Name</label>
                <select class="col-lg-9" name="school_id">
                    <option value="">Select</option>
                    <?php if(count($schools)):?>
                        <?php foreach($schools as $school):?>
                    <option value=<?php echo $school->school_id; ?>><?php echo $school->schoolname;?></option>
                <?php endforeach;?>
            <?php endif;?>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('school_id', '<div class="text-danger">','</div>'); ?>
        </div>
    </div>


        <div class="row">
    	<div class="col-md-6">
    		<div class="form-group">
    			<label class="col-md-3 control-label">Email</label>
    			<div class="col-md-9">
    				<?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email', 'value'=>set_value('email')]);?>
    			</div>
    		</div>
    	</div>
    	<div class="col-md-6">
    		<?php echo form_error('email', '<div class="text-danger">','</div>'); ?>
    	</div>
    </div>


            <div class="row">
    	<div class="col-md-6">
    		<div class="form-group">
    			<label class="col-md-3 control-label">Gender</label>
    			<select class="col-lg-9" name="gender">
    				<option value="">Select</option>
    				<option value="Male">Male</option>
    				<option value="Female">Female</option>
    			</select>
    		</div>
    	</div>
        
        <div class="col-md-6">
            <?php echo form_error('gender', '<div class="text-danger">','</div>'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Class</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'class', 'class'=>'form-control', 'placeholder'=>'Class', 'value'=>set_value('class')]);?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('class', '<div class="text-danger">','</div>'); ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    <?php echo anchor("admin/dashboard","Back",['class'=>'btn btn-primary']); ?>


</div>
    <?php echo form_close();?>
</div>
