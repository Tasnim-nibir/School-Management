<?php include("inc/header.php"); ?>
<div class="container">
	<h3>View Students</h3>
	<hr><?php echo anchor("admin/dashboard", "Back", ['class'=>'btn btn-primary']);?>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Student Name</th>
					<th scope="col">School Name</th>
					<th scope="col">Class</th>
					<th scope="col">Email</th>
					
					<th scope="col">Gender</th>
					
					
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($students)):?>
					<?php foreach($students as $student):?>
				<tr class="table-active">
					<td><?php echo $student->studentname;?></td>
					<td><?php echo $student->schoolname;?></td>
					<td><?php echo $student->class;?></td>
					<td><?php echo $student->email;?></td>
					<td><?php echo $student->gender;?></td>
					<td>
						<?php echo anchor("admin/editStudent/{$student->id}", "edit", ['class'=>'buttons']);?>
					</td>
					<td>
						<?php echo anchor("admin/deleteStudent/{$student->id}", "delete", ['class'=>'buttons']);?>
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
