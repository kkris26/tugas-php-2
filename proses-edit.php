<?php
include "koneksi.php";

if(isset($_POST['edit'])){
    $id_siswa = $_POST['id_siswa'];
    $nama = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nomor_hp = $_POST['nomor_hp'];
    $email = $_POST['email_siswa'];
    $alamat = $_POST['alamat_siswa'];

    $query = "update siswa set nama_siswa='$nama', jenis_kelamin='$jenis_kelamin', nomor_hp='$nomor_hp', email_siswa='$email', alamat_siswa='$alamat' where id_siswa = $id_siswa ;";
    $result = mysqli_query($conn, $query);
    if($result){
        header("location: index.php");
    }else{
        echo $query;
    }
}
?>