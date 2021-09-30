<?php
error_reporting(0);
include 'koneksi.php'; //Memanggil koneksi

if(isset($_POST['edit'])){ //jika post edit
	$id = $_POST['id']; //id
	$judul = $_POST['judul']; // judul
	$deskripsi = $_POST['deskripsi']; // deskripsi

		//query untuk mengupdate dari table crud sesuai dengan apa yang di edit dan 
		$query = "UPDATE crud set judul = '$judul', deskripsi = '$deskripsi' where id = '$id' ";

	// mengirimkan perintah query ke database mysql
	$result = mysqli_query ($koneksi, $query);

	if (!$result){
		//jika data gagal di ubah
		die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
	}
	else{
		//jika berhasil di ubah maka di lempar atau menuju ke index.php atau menu utama
		echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php'</script>";
	}
}
?>