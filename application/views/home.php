<!--start header-->
<?php include("inc/header.php"); ?>
<!--end header-->
<!--start video background-->

<div class="containter-fluid remove-vid-marg">
<div class="vid-parent">
<video playsinline autoplay muted loop>
<source src="assets/video/production ID_3957959.mp4">
</video>
<div class="vid-overlay"></div>
</div>
<div class="vid-content">
<h1 class="my-content">School Management System</h1><br>
<small class="my-content">Learn and Implement</small><br><br>
<div class="my-4">
				<div class="row">
				
			    <div class="col-lg-6">
				<?php echo anchor("welcome/adminRegister","Admin Register",['class'=>'btn btn-primary']); ?>
				</div>
				
				<div class="col-lg-6">
					<?php echo anchor("welcome/login","Admin Login",['class'=>'btn btn-primary']); ?>
				</div>
				
			</div>
		</div>
</div>
</div>
<!--end video background-->
<section id="event">
<div class="title-text">
<h1>Some Events of a School</h1>
</div>
<div class="event-box">



<div class="single-event">
<img src="assets/images/boishakh.jpg">
<div class="overlay"></div>
<div class="event-desc">
<h3>Pohela Boishakh</h3>
</div>
</div>

<div class="single-event">
<img src="assets/images/21feb.jpg">
<div class="overlay"></div>
<div class="event-desc">
<h3>Mother Lauange Day</h3>
</div>
</div>

<div class="single-event">
<img src="assets/images/26 march im2.jfif">
<div class="overlay"></div>
<div class="event-desc">
<h3>Independence Day</h3>
</div>
</div>


<div class="single-event">
<img src="assets/images/16dec.jpeg">
<div class="overlay"></div>
<div class="event-desc">
<h3>Victory Day</h3>
</div>
</div>

<!--start contact us-->
<div class="container mt-4" id="contact">
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
<section id="event">
<div class="title-text">
<h1>Classes of a School</h1>

<div class="event-box">

<div class="single-event">
<img src="assets/images/1class.jpg">
<div class="overlay"></div>
<div class="event-desc">
<h3>Class-1</h3>
</div>
</div>

<div class="single-event">
<img src="assets/images/2class.jfif">
<div class="overlay"></div>
<div class="event-desc">
<h3>Class-2</h3>
</div>
</div>


<div class="single-event">
<img src="assets/images/3class.jfif">
<div class="overlay"></div>
<div class="event-desc">
<h3>Class-3</h3>
</div>
</div>

<div class="single-event">
<img src="assets/images/4class.jfif">
<div class="overlay"></div>
<div class="event-desc">
<h3>Class-4</h3>
</div>
</div>
<!--start social follow--> 
<div class="container-fluid bg-success">
    <div class="row text-white text-center p-1">
        <div class="col-sm">
        <a class="text-white " href="#" ><i class="fab fa-facebook-f"></i>
facebook
</a>
        </div>
        <div class="col-sm">
        <a class="text-white " href="#"><i class="fab fa-twitter"></i>
twitter</a>
        </div>
        <div class="col-sm">
        <a class="text-white " href="#"><i class="fab fa-whatsapp"></i>
whatsapp</a>
        </div>
        <div class="col-sm">
        <a class="text-white " href="#"><i class="fab fa-instagram"></i>
instagram</a>
        </div>
    </div>
</div>

<!--end social follow-->

<!--about-->
<div class="container-fluid p-4" style="background-color:#E9ECEF">
<div class="container" style="background-color:#E9ECEF">
<div class="row text-center">
    <div class="row-sm">
        <h5>About Us</h5>
        <p>A school management system is the best solution for managing daily school operations. It allows school to manage registration, admissions, academic calendar, attendance, and more. ... There are many compelling features in this system which help decrease redundancy and repetitive work</p>
        <p>A school management software is a collection of computer instructions, specially designed to manage the day-to-day administrative tasks of schools. School management software allow schools to digitally monitor the daily activities along with managing all the resources and information on a single platform</p>
        <p>School management system is an information system to manage school related data and transactions. School system may consist of several branches within territory or round the globe. It contains various actors for example students, staff, teachers, student's parents, managerial staff etc.</p>
        <p>
        A school management system not only gives information about students. It can provide real-time information about teachers activities also. School administrators can access a particular teachers class schedule, daily reports of the teacher, etc.</p>
          <p>School Management System is a large database system which can be used for managing your school's day to day business. School Management System allows users to store almost all of their school's information electronically, including information on students,  properties, teaching meteorites etc. Most importantly, this information can be easily shared with authorized users, records can be easily searched, and reports can be easily generated.</p>
    </div>
    <hr>

    <div class="row-sm">
    <h5>Address</h5>
    <p>School Management System Pvt Ltd<br>Near Hospital Road<br>Sunamgonj,Sylhet<br>Ph.01729393837</p>
    </div>
</div>
</div>
</div>
<!--end about-->
<!--<div class="container">
	<div class="jumbotron">
		<h2 class="display-3" style="text-align: center;">Admin & Co-Admin Login</h2>
		<hr>
		<div class="my-4">
			<div class="row">
				
			    <div class="col-lg-4">
				<?php //echo anchor("welcome/adminRegister","Admin Register",['class'=>'btn btn-primary']); ?>
				</div>
				
				<div class="col-lg-4">
					<?php //echo anchor("welcome/login","Admin Login",['class'=>'btn btn-primary']); ?>
				</div>
			</div>
		</div>
	</div>
</div>-->
<?php include("inc/footer.php"); ?>