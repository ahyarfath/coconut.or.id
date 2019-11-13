<!DOCTYPE html>
<html>
<head>
	<title>Data Calgot</title>
</head>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
    	td {
    		background-color: rgb(211, 211, 211);
    		font-family: sans-serif;
    		font-size: 13px;
    	}

    </style>

<body>

<table class="table-responsive p-4 text-center" cellpadding = "10">
	<tr class="badge-dark">
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Hp</th>
		<th>Email</th>
		<th>Alasan Masuk</th>
		<th>Jurusan</th>
		<th>Asal Kampus</th>
		<th>Semester</th>
		<th>Foto</th>
		<th>Status Bayar</th>
		<th>Status Lulus</th>
		<th colspan="2">Ket</th>
	</tr>
	<?php
				include 'config/koneksi.php';
				$no = 1;
				$data =  mysqli_query($koneksi,"SELECT * FROM anggota");
						while($d = mysqli_fetch_array($data)){

	if(mysqli_num_rows($data) > 0){
		
	 ?>
	<tr>
		<td> <?php echo $no; ?></td>
		<td><?php echo $d['nama'];?></td>
		<td><?php echo $d['alamat'];?></td>
		<td><?php echo $d['no_hp'];?></td>
		<td><?php echo $d['email'];?></td>
		<td><?php echo $d['tujuan'];?></td>
		<td><?php echo $d['jurusan'];?></td>
		<td><?php echo $d['asal_kampus'];?></td>
		<td><?php echo $d['semester'];?></td>
		<td><img class="img-fluid" src="img/<?php echo $d['foto'];?>"/></td>
		<td><button class="btn btn-secondary btn-sm" value="LUNAS" onclick="ket_lunas()">BAYAR!</button></a>
			<!-- id hasil -->
	<div id="hasil_lunas"></div>
 
	
		
	</script>
		<td><a href="update_regis.php?id=<?php echo $d['id']; ?>"><button class="btn btn-warning btn-sm">CHANGE</button></a>
		<td><a href="hapus.php?id=<?php echo $d['id']; ?>"><button class="btn btn-danger btn-sm">DELETE</button></a>

	</tr>

	<?php $no++ ;
	}
	}
	?>
</table>


</body>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>