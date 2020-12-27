<?php include("inc/header.php"); ?>

<div class="container">
	<h3>Admin Dashboard</h3>
	<?php $username = $this->session->userdata('username');?>
	<h5>Welcome <?php echo $username;?></h5>
	<hr>
	
	<?php echo anchor("admin/addSchool", "Add School", ['class'=>'btn btn-primary']);?>
	<?php echo anchor("admin/addCoadmin", "Add CoAdmin", ['class'=>'btn btn-primary']);?>
	<?php echo anchor("admin/addStudent", "Add Student", ['class'=>'btn btn-primary']);?>
	<?php echo anchor("admin/addTeacher", "Add Teacher", ['class'=>'btn btn-primary']);?>
	<hr>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">School Name</th>
					<th scope="col">User Name</th>
					<th scope="col">Email</th>
					<th scope="col">Role</th>
					<th scope="col">Gender</th>
					<th scope="col">Branch</th>
					<th scope="col">Students</th>
					<th scope="col">Teachers</th>
					
				</tr>
			</thead>
			<tbody>
				<?php if(count($users)):?>
					<?php foreach($users as $user):?>
				<tr class="table-active">
					<td><?php echo $user->school_id;?></td>
					<td><?php echo $user->schoolname;?></td>
					<td><?php echo $user->username;?></td>
					<td><?php echo $user->email;?></td>
					<td><?php echo $user->rolename;?></td>
					<td><?php echo $user->gender;?></td>
					<td><?php echo $user->branch;?></td>
					<td>
						<?php echo anchor("admin/viewStudents/{$user->school_id}", "view student", ['class'=>'buttons']);?>
					</td>
					<td>
						<?php echo anchor("admin/viewTeachers/{$user->school_id}", "view teacher", ['class'=>'buttons']);?>
					</td>
										
				</tr>
			<?php endforeach;?>
			<?php else:?>
				<tr>
					<td>No Record Found!</td>
				</tr>
			<?php endif;?>
			</tbody>
		</table>
	</div>
</div>
<div class="navbar-expand-sm container-fluid bg-dark text-align p-2">
 <?php
					    $user_id = $this->session->userdata('user_id'); 
					?>
					<?php if($user_id == '1'): ?>
						 <ul class="navbar-nav custom-nav pl-5">
      <li class="nav-item custom-nav-item nav-link"><?php echo anchor("admin/dashboard",'Dashboard');?></li>
      <li class="nav-item custom-nav-item nav-link"><?php echo anchor("admin/coadmins",'View Co Admins');?></li>
      <li class="nav-item custom-nav-item nav-link"><?php echo anchor("admin/contact",'View Contact');?></li>
					<li class="nav-item custom-nav-item nav-link"><?php echo anchor("welcome/logout",'Logout');?></li>
					<?php else: ?>
					<li class="nav-item custom-nav-item nav-link"><?php echo anchor("welcome/logout",'Logout');?></li>
					</li>
				<?php endif;?>
			</ul>
</div>


<?php include("inc/footer.php"); ?>