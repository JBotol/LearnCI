<html lang="en">
	<head>
		<title>Halaman Konfirmasi Hapus Data</title>
	</head>
	<body>
		<h2>Konfirmasi Hapus Data</h2>
		<?php
			echo form_open('site/hapus');
			echo "Data NRP : ".$user." Akan dihapus ?";
			echo form_hidden('nrp',$user);
			echo form_submit('hapus','Ok');
			echo form_submit('cancel','Cancel');
			echo form_close();
		?>
	</body>
</html>