<!-- Connection-->
<?php
	//Connect to database psb_online_2021
	$konek = mysqli_connect("localhost","root","", "psb_online_2021");
	if(!$konek){
		echo "Koneksi Database Gagal";
	}
?>