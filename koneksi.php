<?php
	
$konek = mysqli_connect("localhost", "root", "", "uas_1904030079");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}
	
?>