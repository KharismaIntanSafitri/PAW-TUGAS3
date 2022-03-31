<?php
include "connect/koneksi.php";
$id =$_POST ["id"];
$nama =$_POST ["nama"];
$hp =$_POST ["hp"];
$alamat =$_POST ["alamat"];

$sql = "UPDATE tbl_010 set nama='$nama',hp='$hp', alamat='$alamat' where id=$id";
$update = mysqli_query ($koneksi, $sql);
if ($update){
    header("location: index.php");
}else{
    echo "gagal";
    
}
?>