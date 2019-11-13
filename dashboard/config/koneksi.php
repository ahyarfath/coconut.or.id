 <?php 
$koneksi = mysqli_connect("localhost","root","","web_coconut_regis");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi ke database gagal : " . mysqli_connect_error();
}
 
?>

 