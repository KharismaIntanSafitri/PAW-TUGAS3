<?php
include "connect/koneksi.php";
if( isset($_POST["tambah_tamu"]) ){
    $nama = $_POST["nama"];
    $no_hp = $_POST["hp"];
    $alamat = $_POST["alamat"];

    $tambah = "INSERT INTO `tbl_010` (`id`, `nama`, `hp`, `alamat`) VALUES (NULL, '$nama', '$no_hp', '$alamat')";
    $inp_data = mysqli_query($koneksi, $tambah);
     if ($inp_data){
        header("location: index.php");
    }else{
        echo "gagal";
    }
}
?>