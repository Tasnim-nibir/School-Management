<?php include("inc/header.php"); ?>
<div class="container">
	<h3>View Coadmins</h3>
	

	<hr>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">ID</th>
					
					<th scope="col">User Name</th>
					<th scope="col">School Name</th>
					<th scope="col">Email</th>
					
					<th scope="col">Gender</th>
					<th scope="col">Branch</th>
									
				</tr>
			</thead>
			<tbody>
				<?php if(count($coadmins)):?>
					<?php foreach($coadmins as $coadmin):?>
				<tr class="table-active">
					<td><?php echo $coadmin->user_id;?></td>
					<td><?php echo $coadmin->username;?></td>
					<td><?php echo $coadmin->schoolname;?></td>
					<td><?php echo $coadmin->email;?></td>
					<td><?php echo $coadmin->gender;?></td>
					<td><?php echo $coadmin->branch;?></td>
										
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
