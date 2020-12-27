<?php include("inc/header.php"); ?>
<div class="container">
    <?php echo form_open("Admin/modifyTeacher/{$teacherData->id}", ['class' => 'form-horizontal']);?>
    <?php if($msg = $this->session->flashdata('message')): ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissble alert-success"><?php echo $msg;?></div>
            </div>
        </div>
    <?php endif; ?>
    <h3>Edit Teacher</h3>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Teacher Name</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'teachername', 'class'=>'form-control', 'placeholder'=>'Teacher Name', 'value'=>set_value('teachername', $teacherData->teachername)]);?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('teachername', '<div class="text-danger">','</div>'); ?>
        </div>
    </div>

            <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">School Name</label>
                <select class="col-lg-9" name="school_id">
                    <option value=<?php echo $teacherData->school_id;?>><?php echo $teacherData->schoolname;?></option>
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
                <label class="col-md-3 control-label">Phone Number</label>
                <div class="col-md-9">
                    <?php echo form_input(['name'=>'phnnum','class'=>'form-control','placeholder'=>'Phone Number', 'value'=>set_value('phnnum', $teacherData->email)]);?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('phnnum', '<div class="text-danger">','</div>'); ?>
        </div>
    </div>

        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Email</label>
                <div class="col-md-9">
                    <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email', 'value'=>set_value('email', $teacherData->email)]);?>
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
                    <option value=<?php echo $teacherData->gender;?>><?php echo $teacherData->gender;?></option>
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
                    <?php echo form_input(['name' => 'class', 'class'=>'form-control', 'placeholder'=>'Class', 'value'=>set_value('class', $teacherData->class)]);?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('class', '<div class="text-danger">','</div>'); ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    <?php echo anchor("admin/viewTeachers/{$teacherData->id}","Back",['class'=>'btn btn-primary']); ?>


</div>
    <?php echo form_close();?>
</div>
<?php include("inc/footer.php"); ?>