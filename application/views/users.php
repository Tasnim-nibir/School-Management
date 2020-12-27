<?php include("inc/header.php"); ?>
<div class="container">
	<h3>CoAdmin Dashboard</h3>
	<?php $username = $this->session->userdata('username');?>
	<h5>Welcome <?php echo $username;?></h5>

	<hr>

	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Student Name</th>
					<th scope="col">School Name</th>
					
					<th scope="col">Email</th>
					<th scope="col">Gender</th>
					<th scope="col">Class</th>
					
				</tr>
			</thead>
			<tbody>
				<?php if(count($students)):?>
					<?php foreach($students as $student):?>
				<tr class="table-active">
					<td><?php echo $student->id;?></td>
					<td><?php echo $student->studentname;?></td>
					<td><?php echo $student->schoolname;?></td>
					<td><?php echo $student->email;?></td>
					
					<td><?php echo $student->gender;?></td>
					<td><?php echo $student->class;?></td>
										
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
					<li class="nav-item custom-nav-item nav-link"><?php echo anchor("admin/contact",'View Contact');?></li>
				<?php endif;?>
			</ul>
</div>
<?php include("inc/footer.php"); ?>