<?php
	include "../cons.php";
	$id = $_GET['id'];
	$query = "DELETE FROM members WHERE id = '".$id."' ";
	$sql = mysqli_query($kon,$query);
	if ($sql) {
		?>
				<script>
					alert('Data Berhasil dihapus');
					window.open('../tabel.php','_SELF');
				</script>
			<?php
	}else{
		?>
				<script>
					alert('data gagal dihapus');
					window.open('../tabel.php','_SELF');
				</script>
			<?php
	}
?>