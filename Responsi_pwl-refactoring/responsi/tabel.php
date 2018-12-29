<!DOCTYPE html>
<html>
<head>
	<title>Member</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
<body>
	<div class="container">
		<div class="panel panel-default" style="margin-top: 100px">
				<label style="font-size: 28px;margin-left: 15px">Data Members</label>
			<div class="panel panel-body">
				<!-- crud for city -->
				<a href="city-crud/addCity.php">
					<button type="button" class="btn btn-info">CRUD City</button>
				</a>

				<!-- crud for company -->
				<a href="company-crud/addCompany">
					<button type="button" class="btn btn-info">CRUD Company</button>
				</a>
					

				<a href="member-crud/addData.php">
				<button type="button" class="btn btn-success">Add Data</button>
				
				<div class="col-md-6" style="right: ">
		<form action="" method="post" enctype="multipart/form-data" name="upload" class="form-inline">
		<label>File Csv</label>	
		<div class="form-group">
			<input type="file" class="form-control" name="csv">
		</div>
		<button id="save" class="btn btn-primary" name="upload">Import Csv</button>
		</form>
	</div>
</div>	

				<div class="table table-responsive" style="margin-top: 10px;">
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>Fullname</th>
							<th>Email</th>
							<th>Company</th>
							<th>City</th>
							<th colspan="3">Action</th>
						</tr>

						<?php
							include "cons.php";
							$query = "SELECT co.idcompany, co.name as companyName, m.id as idMember, m.idcompany, m.idcity, m.fullname as fullname, m.email as email, ci.idcity, ci.cityname as cityName FROM company co JOIN members m ON co.idcompany=m.idcompany JOIN city ci ON m.idcity=ci.idcity";
							$sql = mysqli_query($kon,$query);
							$no=0;
							while ($row = mysqli_fetch_array($sql)) {
								$no++;
						?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row["fullname"]; ?></td>
								<td><?php echo $row["email"]; ?></td>
								<td><?php echo $row["companyName"]; ?></td>
								<td><?php echo $row["cityName"]; ?></td>
								<td>
									 <a href="member-crud/edit.php?id=<?php echo $row['idMember'] ?>" title="edit" class="btn btn-warning">Edit</a>
								
									<a href="member-crud/detail.php?id=<?php echo $row['idMember'] ?>" title="Detail" class="btn btn-info">Detail</a>
								
									<a href="member-crud/delete.php?id=<?php echo $row['idMember'] ?>" title="delete" class="btn btn-danger">Delete</a>
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



