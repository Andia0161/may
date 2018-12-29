<!DOCTYPE >
<html>
<head>
	<title>Add Data</title>
</head>
<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>
	<div class="container" style="width: 80%;margin-top: 60px">
		<div class="panel panel-default">
			<label style="font-size: 30px;margin-left: 15px">Add Data</label>
			<div class="panel panel-body">
			<form method="post" action="addData.php" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-12">
						<label>Name</label>
						<input type="text" name="nama" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12"> 
						<label>Company</label>
						<select name="company" class="form-control" >
						<?php
							include "../cons.php";
							$queryCo = "SELECT * FROM company";
							$sqlCo = mysqli_query($kon,$queryCo);

							while ($rowCo = mysqli_fetch_array($sqlCo)) {
								?>
									<option value="<?php echo $rowCo["idcompany"]; ?>"><?php echo $rowCo["name"]; ?></option>
								<?php
							}
						?>
				 		</select>
					 </div>
				 </div>

				 <div class="form-group row">
					<div class="col-lg-12">
						<label>Address</label>
						<input type="text" name="address" class="form-control">
					</div>
				</div>

				 <div class="form-group row">
					<div class="col-lg-12"> 
						<label>City</label>
						<select name="city" class="form-control" >
						<?php
							include "../cons.php";
							$queryCi = "SELECT * FROM city";
							$sqlCi = mysqli_query($kon,$queryCi);

							while ($rowCi = mysqli_fetch_array($sqlCi)) {
								?>
									<option value="<?php echo $rowCi["idcity"]; ?>"><?php echo $rowCi["cityname"]; ?></option>
								<?php
							}
						?>
				 		</select>
					 </div>
				 </div>

				 <div class="form-group">
					<div class="foto">
						<label>Foto</label>
						<input type="file" name="foto" class="form-control">

						<!-- <?
						include "cons.php";

						<?
	$this->load->model('members');
	$file = $_FILES;
	if ($_POST['upload']) {
		# code...
		if(!empty($file)){

			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'csv';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);
            if ( !$this->upload->do_upload('csv')){
            	$data['error'] = $this->upload->display_errors();	
            }else{
            	$newfile = $this->upload->data();
           
				$handle = fopen($config['upload_path'].$newfile['file_name'], "r");
				$i = 1; $data['ok'] = ""; $data['error'] = "";
				while (($dt = fgetcsv($handle, 1000, ",")) !== FALSE) {
					// proses simpan ke db
					$in['fullname'] = $dt[0];
					$in['email'] = $dt[1];
					$in['company'] = $dt[2];
					$in['address'] = $dt[3];
					$in['city'] = $dt[4];
					$in['country'] = $dt[5];	

					$add = $this->members->add($in);
					if($add['sts']){
						$data['ok'] .= "Baris ke ".$i.": ".$add['msg']."<br />"; 
					}else{
						$data['error'] .= "Baris ke ".$i.": ".$add['msg']."<br />";
					}
					$i++;	
				}
				fclose($handle);
            }
        }
	?>
 -->
					</div>
				</div>

				<div class="form-group ">
					<a href="../tabel.php" title="kembali" class="btn btn-warning">Kembali</a>
					<!-- <a href="tabel.php" title="submit" class="btn btn-info">Simpan</a> -->

					
					<input type="submit" name="submit" value="simpan" class="btn btn-info" >
					
					
				</div>
				</form>

			</div>
		</div>
	</div>
</body>
</html>