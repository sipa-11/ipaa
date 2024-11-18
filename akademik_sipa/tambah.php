<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"> </script>
<body>
 
	<h2>CRUD DATA MAHASISWA </h2>
	<br/>
	<a href="dashboard.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
		<tr>			
				<td>ID</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>			
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>