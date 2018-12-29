<!DOCTYPE html>
<html>
<head>
	<title>Add Company</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>

	<style type="text/css">
		.container1{
			width: 50%;
			margin-top: 50px;
		}
	</style>
<body>
	<div class="container1">
		<div class="panel panel-default">
			<label style="font-size: 28px;margin-left: 15px">Add Company</label>
			<div class="panel panel-body">
			<form method="post" action="addDataCompany.php" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-lg-12">
						<label for="companyname">Company Name</label>
						<input type="text" name="companyname" id="companyname" class="form-control input-sm">
					</div>
				</div>
			<div class="form-group row">
			<a href="company.php" title="kembali" class="btn btn-warning">Kembali</a>
					
			<input type="submit" name="submit" value="simpan" class="btn btn-info">
				</form>

			</div>
		</div>
	</div>
</body>
</html>