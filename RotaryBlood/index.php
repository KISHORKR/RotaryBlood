<html>
	<?php
		include "connect.php";
		if(isset($_POST['bGroup']) && $_POST['bGroup'] != "") {
			$sql = "select * from student_details where blood_group = '".$_POST['bGroup']."'";
		} else if(isset($_POST['studentId'])) {
			$sql = "delete from student_details where student_id = ".$_POST['studentId'];
			$con -> query($sql);
			$sql = "select * from student_details";
		} else {
			$sql = "select * from student_details";
		}
		
		$result = $con -> query($sql);
		$count = $result -> num_rows;
		$rows = array();
		while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
			$rows[] = $row;
		}
	?>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="page-header">
			<h2 class="text-danger text-center">Rotract Club</h2>
		</div>
		<div class="container">
			<form role="form" class="form-horizontal" action="index.php" method="POST">
				<div class="form-group">
					<label class="col-md-3 control-label">Blood Group: </label>
					<div class="col-md-3">
						<select class="form-control" name="bGroup">
							<option value="">-- Select Blood Group --</option>
							<option value="A1+">A1+</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						</select>
					</div>
					<div class="col-md-6">
						<input type="submit" class="btn btn-primary" value="Filter">
						<a href="addDetails.php" class="pull-right"><input type="button" class="btn btn-info" value="Add Details"></a>
					</div>

				</div>
			</form>
			<table class="table">
				<tr><th>Name</th><th>Roll Number</th><th>Mobile Number</th><th>Department</th><th>Blood Group</th><th>Options</th></tr>
				<?php
					if($count == 0) {
						echo "<tr class='text-center'><td colspan='5'>No Records Found</td></tr>";				
					} else {
						for($i=0;$i<$count;$i++) {
							?>
							<tr><td><?php print $rows[$i]['name']; ?></td><td><?php print $rows[$i]['roll_number']; ?></td><td><?php print $rows[$i]['mobile']; ?></td><td><?php print $rows[$i]['department']; ?></td><td><?php print $rows[$i]['blood_group']; ?></td>
								<td><form action='view.php' method='post'><input type='hidden' value='<?php print $rows[$i]['student_id']; ?>' name='studentId'><input type='submit' value='Delete' class='btn btn-danger btn-sm'></form></td></tr>				
							<?php
						}	
					}
				?>
			</table>
		</div>
	</body>
</html>