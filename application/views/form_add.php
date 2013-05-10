<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Halaman Tambah Data</title>
	</head>
	<body>
		<h2>Penambahan Data</h2>
		<?php 
			echo form_open('site/simpan');
			echo "NRP : ".form_input('nrp')."<br />";
			echo "Nama : ".form_input('nama')."<br />";
			echo "Password : ".form_input('password')."<br />";
			echo "Gender : ".form_input('gender')."<br />";
			echo form_submit('simpan','Simpan')."<br />";
			echo form_close();
		?>
	</body>
</html>