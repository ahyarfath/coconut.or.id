<!DOCTYPE html>
<html>
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

	<title>REGISTRATION</title>
</head>
<style type="text/css">
	label {
		font-size: 15px;
	}
</style>

<body>
	
<div class="container"> 
<?php
require_once('config/koneksi.php');

if (isset($_POST['submit'])) {

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$email = $_POST['email'];
	$tujuan = $_POST['tujuan'];
	$jurusan = $_POST['jurusan'];
	$asal_kampus = $_POST['asal_kampus'];
	$semester = $_POST['semester'];

	$sumber = $_FILES['foto']['tmp_name'];
	$target = 'img/';
	$nama_gambar = $_FILES['foto']['name'];

// die(var_dump());
	// if untuk mengecek data
	if ($nama = "" || $alamat = "" || $no_hp = "" || $email = "" || $tujuan = "" || $jurusan = "" || $asal_kampus = "" || $semester = "" ) { ?>
		<script type="text/javascript">
			alert("Inputan tidak boleh kosong");
		</script>  
	<?php
	} else {

		$move = move_uploaded_file($sumber, $target.$nama_gambar);
		//if untuk menambah data
		if ($move) {
			mysqli_query("INSERT INTO anggota VALUES('$nama','$alamat','$no_hp','$email','$tujuan','$jurusan','$asal_kampus','$semester','$nama_gambar');");
		?>
			<script type="text/javascript">
				alert("SELAMAT Anda Berhasil Melakukan Registrasi");
				window.location.href="?page=index";
			</script>
	<?php } else { ?>
			<script type="text/javascript">
				alert("Gagal mengupload");
			</script>
	
	<?php } } } ?>

<div class="container ">
<form method="POST" action="" enctype="multipart/form-data"> 
	<div class="container mt-5">		
		<div class="col-md text-center">	
			<h3>COCONUT</h3>
			<h6>Open Member 11.0</h6>
		</div>	
	</div>
	<div class="row justify-content-center">	
		<div class="col-md-5 text-center">	
			<hr>
		</div>	
	</div>
	<div class="row mb-5 pt-3 justify-content-center">	
		<div class="col-md-10 text-center">	
			<hr> 
		</div>	
	</div>
<!-- FORM -->
<form method="POST" action="" >
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Nama</label>
		</div>

		<div class="col-md-4">
			<input  class="form-control" type="text" name="nama" required autofocus autocomplete="off">
		</div>
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Alamat</label>
		</div>
		<div class="col-md-4">
			<input  class="form-control" type="text" name="alamat" required autocomplete="off">
		</div>	
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>No Hp</label>
		</div>
		<div class="col-md-4">
			<input  class="form-control" type="text" name="no_hp" required autocomplete="off">
		</div>	
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>email</label>
		</div>
		<div class="col-md-4">
			<input  class="form-control" type="text" name="email" required autocomplete="off">
		</div>	
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Asal Kampus</label>
		</div>
		<div class="col-md-4">
			<input  class="form-control" name="asal_kampus" type="text" required>
		</div>	
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Jurusan</label>
		</div>
		<div class="col-md-4">
			<input class="form-control" name="jurusan" required autocomplete>
		</div>

	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Semester</label>
		</div>
		<div class="col-md-2 ml-4">
			<input class="form-check-input" type="radio" name="semester" value="1" required>
	 		<label class="form-check-label" for="inlineRadio1">1</label>
		</div>
		<div class="col-md-2 ml-4">
			<input class="form-check-input" type="radio" name="semester" value="3" required>
	 		<label class="form-check-label" for="inlineRadio1">3</label>
		</div>	
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Tujuan Daftar</label>
		</div>
		<div class="col-md-4">
			<textarea class="form-control" rows="3" name="tujuan" required></textarea>
		</div>
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label for="exampleFormControlFile1">Upload Foto</label>
		</div>
		<div class="col-md-4">
			<div class="form-group">
   				<input type="file" class="form-control-file" name="foto" required>
  			</div>
		</div>
	</div>
	<div class="row justify-content-center">	
		<div class="col-md-5 text-center">	
			<hr>
		</div>	
	</div>
	<div class="row mb-5 pt-3 justify-content-center">	
		<div class="col-md-10 text-center">	
			<hr>
		</div>	
	</div>
	<div class="row mb-5 pb-4 px-5 justify-content-center">
		<div class="col-md-5">
		<button type="submit" name="submit" class="btn btn-outline-primary btn-block">Join Now!</button>
		</div>
	</div>
</form>
<!-- Optional JavaS
	cript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

