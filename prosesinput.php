<?php
error_reporting(0);
include 'koneksi.php'; // Memanggil database

if (isset($_POST['submit'])){ // jika Post submit
//Menginputkan sesuai
        $id = $_POST['id']; //id
        $judul = $_POST['judul']; //judul
        $deskripsi = $_POST['deskripsi']; //deskripsi
        
        //Maka akan di simpan melalui Query INSERT INTO table crud dengan result  mysqli $koneksi
        $query = "INSERT INTO crud VALUES ('','$judul','$deskripsi')";
        $result = mysqli_query($koneksi, $query);
    }if (!$result) {
        //jika Query gagal di jalankan maka akan muncul teks Query Gagal di jalankan
            die("Query Gagal dijalankan : " . mysqli_errno($koneksi)." - ". mysqli_error($koneksi));    
        }
        else
        {
            //Jika berhasil maka akan di lempar atau di tuju ke index.php
            echo "<script>
            alert('Data Berhasil Ditambah');window.location.href='index.php'</script>";
        }
        

 ?>