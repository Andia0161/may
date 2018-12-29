<!DOCTYPE html>
<html>
<head>
	<title>City</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>
<body>
	<div class="container">
		<div class="panel panel-default" style="margin-top: 100px">
				<label style="font-size: 28px;margin-left: 15px">Data Members</label>
			<div class="panel panel-body">
				<a href="../tabel.php" class="btn btn-info">CRUD Members</a>
				<a href="city.php" class="btn btn-info">CRUD City</a>
				<a href="../company-crud/company.php" class="btn btn-info">CRUD Company</a>

				<a href="addData.php">
				<button type="button" class="btn btn-success">Add Data</button>
				</a>

				<div class="table table-responsive" style="margin-top: 10px;">
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>City</th>
							<th>Country</th>
							<th colspan="2">Action</th>
						</tr>

						<?php
							include "../cons.php";
							$query = "SELECT * FROM city";
							$sql = mysqli_query($kon,$query);
							$no=0;

							while ($row = mysqli_fetch_array($sql)) {
								$no++;
						?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row["cityname"]; ?></td>
								<td><?php echo $row["country"]; ?></td>

								<td>
									 <a href="editCity.php?id=<?php echo $row['idcity'] ?>" title="edit" class="btn btn-warning">Edit</a>
									 <a href="deleteCity.php?id=<?php echo $row['idcity'] ?>" title="delete" class="btn btn-danger">Delete</a>
								</td>
							</tr>
								<?php
							}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>



