<?php 
 	$koneksi = mysqli_connect('localhost', 'root', '','tugas');
 	if (!$koneksi) {
 		die("Koneksi dengan database gagal =  " . mysqli_connect_errno() . mysqli_connect_error());
 		
 		# code...
 	}
 ?>