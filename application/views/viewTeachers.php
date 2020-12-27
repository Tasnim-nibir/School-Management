<?php include("inc/header.php"); ?>
<div class="container">
	<h3>View Teachers</h3>
	<hr><?php echo anchor("admin/dashboard", "Back", ['class'=>'btn btn-primary']);?>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Teacher Name</th>
					<th scope="col">School Name</th>
					<th scope="col">Phone Number</th>
					
					<th scope="col">Email</th>
					
					<th scope="col">Gender</th>
					<th scope="col">Class</th>
					
					
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($teachers)):?>
					<?php foreach($teachers as $teacher):?>
				<tr class="table-active">
					<td><?php echo $teacher->teachername;?></td>
					<td><?php echo $teacher->schoolname;?></td>
					<td><?php echo $teacher->phnnum;?></td>
					<td><?php echo $teacher->email;?></td>
					<td><?php echo $teacher->gender;?></td>
					<td><?php echo $teacher->class;?></td>
					<td>
						<?php echo anchor("admin/editTeacher/{$teacher->id}", "edit", ['class'=>'buttons']);?>
					</td>
					<td>
						<?php echo anchor("admin/deleteTeacher/{$teacher->id}", "delete", ['class'=>'buttons']);?>
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
