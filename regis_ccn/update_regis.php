<!DOCTYPE html>
<html>
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>CHANGE</title>
</head>
<style type="text/css">
	/*body {
		background-color: rgb(220 220 220);
	}*/
	label {
		font-size: 15px;
	}
	h1 {
		font-family: impact;
	}
</style>

<body>
	
<div class="container ">
	<div class="container mt-5">		
		<div class="col-md text-center">	
			<h1>COCONUT</h1>
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
	<?php
	include 'config/koneksi.php';
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id = $_GET['id'];
			
			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id='$id'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$d = mysqli_fetch_assoc($select);
			}
		}
		?>

	<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$nama			= $_POST['nama'];
			$alamat 		= $_POST['alamat'];
			$no_hp			= $_POST['no_hp'];
			$email			= $_POST['email'];
			$asal_kampus	= $_POST['asal_kampus'];
			$jurusan		= $_POST['jurusan'];
			$semester	  	= $_POST['semester'];
			$tujuan			= $_POST['tujuan'];
			$foto    		= $_POST['foto'];
			
			$sql = mysqli_query($koneksi, "UPDATE anggota SET nama='$nama', alamat='$alamat', no_hp='$no_hp', email=$email, asal_kampus='$asal_kampus', jurusan='$jurusan', semester='$semester', tujuan='$tujuan', foto='$foto' WHERE id='$id'") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="edit.php?id='.$id.'";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>	
<form method="post" action="update.php ">
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Nama</label>
		</div>
		<div class="col-md-4">
			<input class="form-control" type="text" name="nama" value="<?php echo $d['nama']; ?>">
		</div>
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Alamat</label>
		</div>
		<div class="col-md-4">
			<input  class="form-control" type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
		</div>	
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>No Hp</label>
		</div>
		<div class="col-md-4">
			<input  class="form-control" type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>">
		</div>	
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Email</label>
		</div>
		<div class="col-md-4">
			<input  class="form-control" type="text" name="email" value="<?php echo $d['email']; ?>">
		</div>	
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Asal Kampus</label>
		</div>
		<div class="col-md-4">
			<input  class="form-control" type="text" name="asal_kampus" value="<?php echo $d['asal_kampus']; ?>">
		</div>	
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Jurusan</label>
		</div>
		<div class="col-md-4" >
			<input class="form-control"  name="jurusan" value="<?php echo $d['jurusan']; ?>">
		</div>

	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Semester</label>
		</div>
		<div class="col-md-2 ml-4">
			<input type="radio" name="semester" value="<?Php if ($d['semester'] =="1"){ ?>" checked="<?php echo true;} else echo false?>"/>
	 		<label class="form-check-label" for="inlineRadio1">1</label>

		</div>
		<div class="col-md-2 ml-4">
			<input type="radio" name="semester" value="<?Php if ($d['semester'] =="3"){ ?>" checked="<?php echo true;} else echo false ?>"/>
	 		<label class="form-check-label" for="inlineRadio1">3</label>
		</div>	
	</div>
	<div class="row pb-4 px-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label>Alasan Daftar</label>
		</div>
		<div class="col-md-4">
			<textarea class="form-control" rows="3" name="tujuan" value="<?php echo $d['tujuan']; ?>"></textarea>
		</div>
	</div>
	<div class="row pb-4 px-5">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<label for="exampleFormControlFile1">Upload Foto</label>
		</div>
		<div class="col-md-4">
			<div class="form-group">
   				<input type="file" class="form-control-file" name="foto" value="<?php echo $d['foto']; ?>">
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
		<button type="submit" name="submit" class="btn btn-outline-primary btn-block">CHANGE!!</button>
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
