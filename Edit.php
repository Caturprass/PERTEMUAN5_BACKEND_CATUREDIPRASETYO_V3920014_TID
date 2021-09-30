<?php
    error_reporting(0);
    include 'koneksi.php'; //memanggil database dari koneksi.php

    // menampilkan data sebelumnya 
    if(isset($_GET["id"])){
        $id = ($_GET["id"]);

        $result = mysqli_query($koneksi, "SELECT * FROM crud WHERE id ='$id'");

        while($row = mysqli_fetch_array($result)){
            $id = $row["id"];
            $judul = $row["judul"];
            $deskripsi = $row["deskripsi"];
        }
    }else{
    header("location:tour.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>TEAM TAHES</title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMINS | <b>TEAM KESEHATAN</b></a>
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
    </nav>
<div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
  <li class="nav-item">
      <a class="nav-link active text-white" href="index.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="">
        </li>
  <li class="nav-item">
      <a class="nav-link text-white" href="share.php"><i class="fas fa-share-alt-square mr-2"></i> Daftar Artikel</a><hr class="">
        </li>
  </div>
      <div class="col-md-10 p-5 pt-2" >
          <h3><i class="fas fa-folder-plus mr-2"></i>Edit Informasi Kesehatan</h3><hr>
                <div class="col-md-10 p-5 pt-2" >
  <div class="row">
      <div class="col-lg-12">
	  <div class="card-body">
<form action="prosesedit.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<div class="form-group">
                <label>Id</label>
	    		<input class="form-control" name="id" type="text" id="id"  value="<?php echo $id ?>"/>
	    	</div>
        <div class="form-group">
                <label>Judul Artikel</label>
	    		<input class="form-control" name="matkul" type="text" id="matkul"  value="<?php echo $judul ?>"/>
	    	</div>

        <div class="form-group">
                <label>Deskripsi Artikel</label>
	    		<input class="form-control" name="fakultas" type="text" id="fakultas"  value="<?php echo $deskripsi ?>"/>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" id="edit" value="Edit" /></td>
            </tr>
        </table>

</form>
</body>
</html>