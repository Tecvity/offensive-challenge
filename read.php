<?php

if(isset($_GET["id"])){
	
	require_once "config.php";
	
	$sql = "SELECT * FROM employees WHERE id = " . $_GET['id'];

	$result = mysqli_query($link,  $sql );
	
	if(mysqli_num_rows($result) == 1){

		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		$name = $row["name"];
		$address = $row["address"];
		$salary = $row["salary"];
	}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Record</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type="text/css">
		.wrapper{
			width: 500px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
						<h1>View Record</h1>
					</div>
					<div class="form-group">
						<label>Name</label>
						<p class="form-control-static"><?php echo $row["name"]; ?></p>
					</div>
					<div class="form-group">
						<label>Address</label>
						<p class="form-control-static"><?php echo $row["address"]; ?></p>
					</div>
					<div class="form-group">
						<label>Salary</label>
						<p class="form-control-static"><?php echo $row["salary"]; ?></p>
					</div>
					<p><a href="index.php" class="btn btn-primary">Back</a></p>
				</div>
			</div>        
		</div>
	</div>
</body>
</html>
