<?php include("inc/header.php"); ?>
<div class="container">
	<h3>View Contact</h3>
	

	<hr>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">ID</th>

					
					<th scope="col">Name</th>
					<th scope="col">Gender</th>
					
					<th scope="col">Email</th>
					
					<th scope="col">Phone Number</th>
					<th scope="col">Action</th>
				
									
				</tr>
			</thead>
			<tbody>
				<?php if(count($contacts)):?>
					<?php foreach($contacts as $contact):?>
				<tr class="table-active">
					<td><?php echo $contact->id;?></td>
					<td><?php echo $contact->name;?></td>
					<td><?php echo $contact->gender;?></td>
					<td><?php echo $contact->email;?></td>
					<td><?php echo $contact->number;?></td>

					<td>
						<?php echo anchor("admin/deleteContact/{$contact->id}", "delete", ['class'=>'buttons']);?>
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
<?php include("inc/footer.php"); ?>