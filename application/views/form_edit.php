<html lang="en">
	<head>
		<title>Halaman Koreksi Data</title>
	</head>
	<body>
		<h2>Koreksi Data</h2>
		<?php
			echo form_open('site/koreksi');
			echo "NRP : ".form_input( array(
										'name'=>'nrp',
										'value'=>$user->nrp,
										'readonly'=>'readonly'));
			echo "NAMA : ".form_input('nama',$user->nama);
			echo "Password : ".form_input('password',$user->password);
			echo "GENDER : ".form_input('gender',$user->gender);
			echo form_submit('tombol1','Submit');
			echo form_close();
		?>
	</body>
</html>