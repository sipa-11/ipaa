<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMAK</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"> </script>
</head>
<body>
            <h2>CRUD DATA MAHASISWA </h2>
            <br/>
            <a href="tambah.php" button type="button" class="btn btn-primary">+TAMBAH MAHASISWA</button></a>
            <br/>
            <br/>
            <table class="table">
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Alamat</th>
                    <th>OPSI</th>
                </tr>
                <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from mahasiswa1");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['id']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['nim']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td>
                        <a href="edit.php?id=<?php echo $d['id'];?>" type="button" class="btn btn-success">EDIT</button>
                        <a href="hapus.php?id=<?php echo $d['id'];?>" type="button" class="btn btn-danger">HAPUS</button>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
            </table>
        </body>
        </html>
