<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['name'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa1 values('$id','$nama','$nim','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>