<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tugas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <title>TEAM TAHES</title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMINS | <b>TEAM KESEHATAN</b></a>
    </nav>
<div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
  <li class="nav-item">
      <a class="nav-link active text-white" href="../index.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="">
        </li>
  <li class="nav-item">
      <a class="nav-link text-white" href="share.php"><i class="fas fa-share-alt-square mr-2"></i> Daftar Artikel</a><hr class="">
        </li>
  <li class="nav-item">
      <a class="nav-link text-white" href="../daftar/daftar.php"><i class="fas fa-users mr-2"></i> Daftar Admins</a><hr class="">
        </li>

</ul>
  </div>
      <div class="col-md-10 p-5 pt-2" >
          <h3><i class="fas fa-share-alt-square mr-2"></i>Informasi Kesehatan</h3><hr>
<?php
    error_reporting(0);
    include 'koneksi.php'; //Memanggil Koneksi database
?>
    <head>
        <title>Edit Body</title>
    <head>
    <body>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <!-- Membuat Table untuk penampung dari database -->
            <tr>
                <th>Id</th> 
                <th>Judul Artikel</th>
                <th>Deskripsi Konten</th>
                <th>Edit</th>
                <th>Hapus</th>

            </tr>
            </thead>
            <tbody>
            <?php
            //fungsi php untuk menjalankan instruksi atau argumen ke mysql  Select Dari table Crud
            $no=0; //Membuat angka dari 0
            $result = mysqLi_query($koneksi,"SELECT * FROM crud ORDER BY id ASC");
            while($row = mysqli_fetch_array($result)){ //membuat perulangan dengan while di tampung di $row d i convert menjadi array
                $no++ // angka 0 ++ menjadi 1 dan setetusnya
            ?>
                <tr>
                    <!-- Menampilkan hasil dari query dari id, judul artikel, deskripsi konten-->
                    <td><?php echo $row['id'];?></td> 
                    <td><?php echo $row['judul'];?></td>
                    <td><?php echo $row['deskripsi'];?></td>
                    <td>
                        <!-- Membuat href atau link untuk mengedit dengan Button danger atau merah -->
                        <a href="Edit.php?id=<?php echo $row['id'];?>"class="btn btn-danger">Edit</a> 
                    </td>
                    <td>
                        <!-- Membuat href atau link untuk Menghapus dengan Button warning atau Kuning -->
                        <a href="Hapus.php?id=<?php echo $row['id'];?>"class="btn btn-warning">Hapus</a>
                    </td>
                </tr>
                <?php } ?>          
            </tbody>
        </table>
        <a href="input.php" class="btn btn-success"> tambah </a>
</html>

