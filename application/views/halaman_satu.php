<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Pertamaku</title>
</head>
<body>
	<p>Selamat Datang <?php echo $nama; ?> di 
	<?php  echo $alamat; ?></p>
	<table>
		<tr>
			<th>Nomer</th>
			<th><a href ="site/index_id">ID</a></th>
			<th><a href ="site/index_nama">Name</a></th>
			<th>Password</th>
			<th>Gender</th>
			<th>Operation</th>
		</tr>
		<?php
		echo "<ul>";
		$num=1;
		$this->load->helper('form');
		foreach($user as $row) :
			echo "<tr>
				<td><li>$num</li></td>;
				<td>$row->nrp</td>
				<td>$row->nama</td>
				<td>$row->password</td>
				<td>$row->gender</td>
				<td><a href='site/edit/$row->nrp'>".form_submit('tbl1','Edit')."</a></td>
				<td><a href='site/delete/$row->nrp'>".form_submit('tbl1','Delete')."</a></td>
			</tr>";
			$num++;
		endforeach;
		echo "</ul>";
		?>
	</table>	

	<?php
	/*

	echo "<ol>";
	  foreach($user as $row){
			echo "<li>".$row->nrp."</li>";
			echo "<li>".$row->nama."</li>";
			echo "<li>".$row->gender."</li>";
	  }
	echo "</ol>";
	?>
	<a href="http://localhost/ci/index.php/site/edit/00112201">edit</a>
	*/
	?>
</body>
</html>