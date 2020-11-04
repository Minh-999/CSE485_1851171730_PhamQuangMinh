<?php
$nguoidang = $_POST['nguoidang'];
$tieude = $_POST['tieude'];
$noidung = $_POST['noidung'];
require('includes/connect.php');
$sql = "INSERT INTO qlbaidang(nguoidang,tieude,noidung,date)
VALUES ('$nguoidang','$tieude','$noidung',Now());";
if(mysqli_query($conn,$sql))
{
    header("location:sukien.php");
}
else
{
    echo("that bai");
}
?>