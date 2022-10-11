<?php include('header.php'); ?>
<body>

<div class="container">
	<div class="container pt-3 text-center">
		<h1>To-Do List</h1>
	</div>

	<?php include('inputModal.php'); ?>
	<?php include('updateModal.php'); ?>
	<?php include('deleteModal.php'); ?>

	<div class="row">
		<div class="col-sm-10"></div>
		<div class="col-sm-2"><a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Click to Add Task</a></div>
	</div>

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Task No.</th>
				<th>Start Date</th>
				<th>Task Description</th>
				<th>Deadline</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
		<?php
			require_once('connection.php');
			$result = $conn->prepare("SELECT * FROM tasktable ORDER BY taskID ASC");
			$result->execute();
			for($i=0; $row = $result->fetch(); $i++){
				$id=$row['taskID'];
		?>
			<tr>
				<td><label><?php echo $row['taskID']; ?></label></td>
				<td><label><?php echo $row['start_date']; ?></label></td>
				<td><label><?php echo $row['task']; ?></label></td>
				<td><label><?php echo $row['deadline']; ?></label></td>
				<td><label><?php echo $row['status']; ?></label></td>
				<td><a href="#" class="editbn">Edit</a></td>
				<td><a href="#" class="deletebn">Delete</a></td>
			</tr>

			<?php } ?>

		</tbody>
	</table>
</div>

</body>
</html>