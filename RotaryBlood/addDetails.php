<html>
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
			<div class="well text-center col-md-offset-2 col-md-8">
				<div class="page-header">
					<h4 class="text-danger">Add Blood Donar Details</h4>
				</div>
				<div class="col-md-offset-2">
					<form role="form" class="form-horizontal" action="addDetails.php" method="POST">
						<div class="form-group">
							<label class="col-md-3 control-label">Name: </label>
							<div class="col-md-5">
								<input type="text" name="name" class="form-control" placeholder="Enter Name" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Roll Number: </label>
							<div class="col-md-5">
								<input type="number" name="rnumber" class="form-control" placeholder="Enter Roll Number" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Mobile Number: </label>
							<div class="col-md-5">
								<input type="number" name="mobile" class="form-control" placeholder="Enter Mobile Number" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Department: </label>
							<div class="col-md-5">
								<select class="form-control" name="dept">
									<option value="">-- Select Department --</option>
									<option value="ECE">ECE</option>
									<option value="EEE">EEE</option>
									<option value="EIE">EIE</option>
									<option value="IT">IT</option>
									<option value="CSE">CSE</option>
									<option value="Mech">Mech</option>
									<option value="Auto">Auto</option>
									<option value="MBA">MBA</option>
									<option value="MCA">MCA</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Blood Group: </label>
							<div class="col-md-5">
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
						</div>
						<div class="form-group">
							<div class="col-md-8">
								<input type="submit" class="btn btn-primary" value="Add Details">
								<a href="index.php" class="pull-right"><input type="button" class="btn btn-info" value="Cancel"></a>
							</div>
						</div>
					</form>
					<h4 class="text-success" id="msg" style="display:none;">Added Successfully</h4>
				</div>
			</div>
		</div>
	</body>

	<?php
		if(isset($_POST["name"])) {
			include "connect.php";
			$name = $_POST["name"];
			$rnumber = $_POST["rnumber"];
			$mobile = $_POST["mobile"];
			$dept = $_POST["dept"];
			$bGroup = $_POST["bGroup"];

			$sql = "insert into student_details(name,roll_number,mobile,department,blood_group) values('".$name."','".$rnumber."','".$mobile."','".$dept."','".$bGroup."')";

			$con -> query($sql);
			
			?>
			<script>
				document.getElementById("msg").style.display = "block";
				setTimeout(function() {
					document.getElementById("msg").style.display = "none";
				},3000);
			</script>
			<?php
		}
	?>
</html>