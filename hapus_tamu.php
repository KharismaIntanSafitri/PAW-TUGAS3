<?php
include "connect/koneksi.php";
$id = $_GET["id"];

$sql = "DELETE from tbl_010 where tbl_010.id='$id'";
$delete = mysqli_query($koneksi, $sql);
if($delete){
    header("location: index.php");
}else{
    echo "gagal";
}
?>