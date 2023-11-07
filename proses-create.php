<?php
include "koneksi.php";

if(isset($_POST['create'])){

    $nama = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nomor_hp = $_POST['nomor_hp'];
    $email = $_POST['email_siswa'];
    $alamat = $_POST['alamat_siswa'];

    $query = "insert into siswa (nama_siswa, alamat_siswa, email_siswa, jenis_kelamin, nomor_hp) values ('$nama', '$alamat', '$email', '$jenis_kelamin', '$nomor_hp')";

    $result = mysqli_query($conn, $query);
    if($result){
        header("location: index.php");
    }else{
        echo "rror";
    }
}
?>