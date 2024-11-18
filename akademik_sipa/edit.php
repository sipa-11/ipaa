<!DOCTYPE html>
<html>
<head>
	<title>hal edit</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="dashboard.php">KEMBALI</button></a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id =$_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa1 where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>Id</td>	
					<td><input type="number" name="id" value="<?php echo $d['id']; ?>"></td>
				</tr>
				<tr>			
					<td>Name</td>
					<td>
						<input type="text" name="name" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>

					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>