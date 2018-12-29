<!DOCTYPE html>
<html>
<head>
	<title>Add City</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>

	<style type="text/css">
		.container{
			width: 60%;
			margin-top: 60px;
		}
	</style>
<body>
	<div class="container">
		<div class="panel panel-default">
			<label style="font-size: 30px;margin-left: 17px">Add City</label>
			<div class="panel panel-body">
			<form method="post" action="addDataCity.php" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-lg-12">
						<label for="cityname">City Name</label>
						<input type="text" name="cityname" id="cityname" class="form-control input-sm">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12">
						<label for="countryname">Country</label>
						<input type="text" name="countryname" id="countryname" class="form-control input-sm">
					</div>
				</div>

				 	<div class="form-group row">
					<a href="city.php" title="kembali" class="btn btn-warning">Kembali</a>
					
					<input type="submit" name="submit" value="simpan" class="btn btn-info">
				</form>

			</div>
		</div>
	</div>
</body>
</html>