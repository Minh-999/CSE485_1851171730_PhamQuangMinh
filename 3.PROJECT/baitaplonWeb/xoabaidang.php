<?php
$delete = $_GET['id'];
require('includes/connect.php');
include('functions.php');
if(deleteid($delete))
{
    header("location:qlbaiviet.php");
}
else
{
    echo("that bai");
}

?>