    <!--start contact us container-->
    <h2 class="text-center mb-4">Contact Us</h2>
    <!--contact us heading-->
    <div class="row"><!--start contact us row-->
    <div class="col-md-12">
        <hr><!--start contact us firt column-->
    <form action="" method="post">
         <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Name</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'name', 'class'=>'form-control', 'placeholder'=>'Student Name', 'value'=>set_value('name')]);?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('name', '<div class="text-danger">','</div>'); ?>
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
                <label class="col-md-3 control-label">Phone number</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'number', 'class'=>'form-control', 'placeholder'=>'Phone number', 'value'=>set_value('number')]);?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('number', '<div class="text-danger">','</div>'); ?>
        </div>
    </div>

    <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
    </form>

    </div>
<!--end contact-->