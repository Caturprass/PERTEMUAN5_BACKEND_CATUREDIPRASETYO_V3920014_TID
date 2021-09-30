<?php
    error_reporting(0);
    include 'koneksi.php'; // memanggil koneksi dari databse 

if (isset($_GET['id'])) {

    $id = $_GET['id']; //menerima id
    $query = "DELETE FROM crud where id = '$id'"; //membuat query delete dari table yang di ambil adalah id
    $result = mysqli_query($koneksi, $query);  //mengirimkan perintah query ke database mysql untuk menghapus 

    if (!$result) 
    {
        //jika data gagal di hapus
        die("Data gagal di hapus;". mysqli_errno($koneksi).mysqli_error($koneksi));
    } 
    // jika data berhasil di hapus maka akan di lemparkan atau menuju ke index.php
    else 
    {
        echo "<script>
                alert('Data Berhasil Dihapus !');
                window.location.href='index.php';
              </script>";
    }
}
?>