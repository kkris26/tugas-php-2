<?php
include 'koneksi.php';
if(isset($_GET['hapus'])){

    $id_siswa = $_GET['hapus'];
    $query = "delete from siswa where siswa.id_siswa = $id_siswa";
    $sql = mysqli_query($conn, $query);
    if($sql){
        header("location: index.php");
    }else {
        echo $query;
    }
}
?>