<?php
$id =$_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp = $_POST['no_hp'];
$email = $_POST['email'];
$asal_kampus = $_POST['asal_kampus'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];
$tujuan = $_POST['tujuan'];
$foto = $_POST['foto']; 

// update data ke database
mysqli_query($koneksi,"UPDATE anggota SET nama='$nama', alamat='$alamat', no_hp='$hp', email='$email', asal_kampus='$asal_kampus',jurusan='$jurusan',semester='$semester',tujuan='tujuan', foto='$foto' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:data_calgot.php?page=index");
?>